<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
define('SITE_ROOT', realpath(dirname(__FILE__)));

// $servername = "localhost";
// $username = "u575892391_test";
// $passwordDB = "Test@123";
// $dbname = "u575892391_test";
// $port = 3306;

$servername = "localhost";
$username = "root";
$passwordDB = "";
$dbname = "ucbr_db";
$port = 3306;

$action = (isset($_POST["action"])) ? $_POST['action'] : null;
// $action = (isset($_GET["action"])) ? $_GET['action'] : null;

if ($action == null) {
	echo json_encode(array(
		'isProceed' => false,
		'msg' => "Action not set"
	));

	return false;
} elseif ($action == "registerNewUser") {
	$formData = $_POST;
	$fullname = $formData['fullname'];
	$email = $formData['email'];
	$password = md5($formData['password']);

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO user_tbl (fullname, email, password, dateAdded)
		VALUES ('$fullname', '$email', '$password', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "loginChecker") {
	$formData = $_POST;

	$email = $formData['email'];
	$password = md5($formData['password']);

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM user_tbl where email = '$email' AND password = '$password'");
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	if (count($rows) >= 1) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'match',
			'data' => $rows[0]
		));

		$_SESSION["user"] =  $rows[0];
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => "Invalid Credentials."
		));
	}
} elseif ($action == "adminLoginChecker") {
	$formData = $_POST;

	// echo json_encode($formData);

	$usernameAdmin = $formData['username'];
	$password = md5($formData['password']);

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM admin_user_tbl WHERE username = '$usernameAdmin' AND password = '$password'");
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	if (count($rows) >= 1) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'match',
			'data' => $rows[0]
		));

		$_SESSION["user"] =  $rows[0];
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => "Invalid Credentials."
		));
	}
} elseif ($action == "logout") {
	session_destroy();
} elseif ($action == "getUserProfile") {
	$formData = $_POST;
	$id = $formData['id'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM user_tbl where id = '$id'");
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows[0]);
} elseif ($action == "updateProfile") {
	$formData = $_POST;

	$bday = $formData['bday_input'];
	$email = $formData['email_input'];
	$fullname = $formData['fullname_input'];
	$gender = $formData['gender_input'];
	$phoneNumber = $formData['phoneNumber_input'];
	$id = $formData['id'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	if ($formData['password_input'] != "") {
		$password = md5($formData['password_input']);

		$sql = "
				UPDATE user_tbl 
				SET 
					bday='$bday',
					email='$email',
					fullname='$fullname',
					gender='$gender',
					phoneNumber='$phoneNumber',
					password='$password'
				WHERE 
					id='$id'
			";
	} else {
		$sql = "
				UPDATE user_tbl 
				SET 
					bday='$bday',
					email='$email',
					fullname='$fullname',
					gender='$gender',
					phoneNumber='$phoneNumber'
				WHERE 
					id='$id'
			";
	}

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'Successfully saved edits'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error,
			'sql' => $sql
		));
	}

	$conn->close();
} elseif ($action == "getRooms") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);
	$sql = mysqli_query($conn, "SELECT * FROM rooms_tbl");
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "reserveRoom") {
	$filename = rand(100000000, 999999999);
	$target_dir = "../tenant/assets/documentUpload/";
	$target_file = $target_dir . $filename . "." . pathinfo($_FILES["validDocuFile"]["name"], PATHINFO_EXTENSION);
	$isUploaded = false;
	$fileNameDB = $filename . "." . pathinfo($_FILES["validDocuFile"]["name"], PATHINFO_EXTENSION);


	if (move_uploaded_file($_FILES["validDocuFile"]["tmp_name"], $target_file)) {
		$isUploaded = true;
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => "Error in uploading",
		));

		return false;
	}


	if ($isUploaded == true) {
		$formData = $_POST;
		$userID = $formData["userID"];
		$fbEmail = $formData["fbEmail"];
		$fbUsername = $formData["fbUsername"];
		$type = $formData["type"];
		$reviewCenter = $formData["reviewCenter"];
		$reviewLastSchool = $formData["reviewLastSchool"];
		$reviewLastSchoolLocation = $formData["reviewLastSchoolLocation"];
		$reviewLocation = $formData["reviewLocation"];
		$course = $formData["course"];
		$yearLevel = $formData["yearLevel"];
		$guardianName = $formData["guardianName"];
		$guardianNetwork = $formData["guardianNetwork"];
		$guardianNumber = $formData["guardianNumber"];
		$guardianEmail = $formData["guardianEmail"];
		$guardianRelationship = $formData["guardianRelationship"];
		$guardianAddress = $formData["guardianAddress"];
		$guardian2Name = $formData["guardian2Name"];
		$guardian2Network = $formData["guardian2Network"];
		$guardian2Number = $formData["guardian2Number"];
		$guardian2Email = $formData["guardian2Email"];
		$guardian2Relationship = $formData["guardian2Relationship"];
		$guardian2Address = $formData["guardian2Address"];
		$validDocu = $formData["validDocu"];
		$validDocuFile = $filename;
		$roomSelected = $formData["roomSelected"];
		$checkoutDate = $formData["checkoutDate"];
		$checkInDate = $formData["checkInDate"];




		$conn = new mysqli($servername, $username, $passwordDB, $dbname);

		if ($conn->connect_error) {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->connect_error
			));
		}

		$sql = "
				INSERT INTO reservation_tbl (
					userID,
					fbEmail,
					fbUsername,
					type,
					reviewCenter,
					reviewLastSchool,
					reviewLastSchoolLocation,
					reviewLocation,
					course,
					yearLevel,
					guardianName,
					guardianNetwork,
					guardianNumber,
					guardianEmail,
					guardianRelationship,
					guardianAddress,
					guardian2Name,
					guardian2Network,
					guardian2Number,
					guardian2Email,
					guardian2Relationship,
					guardian2Address,
					validDocu,
					validDocuFile,
					roomSelected,
					checkoutDate,
					checkInDate,
					dateAdded
				)
				VALUES (
					'$userID',
					'$fbEmail',
					'$fbUsername',
					'$type',
					'$reviewCenter',
					'$reviewLastSchool',
					'$reviewLastSchoolLocation',
					'$reviewLocation',
					'$course',
					'$yearLevel',
					'$guardianName',
					'$guardianNetwork',
					'$guardianNumber',
					'$guardianEmail',
					'$guardianRelationship',
					'$guardianAddress',
					'$guardian2Name',
					'$guardian2Network',
					'$guardian2Number',
					'$guardian2Email',
					'$guardian2Relationship',
					'$guardian2Address',
					'$validDocu',
					'$fileNameDB',
					'$roomSelected',
					'$checkoutDate',
					'$checkInDate',
					'" . date('Y-m-d H:i:s') . "'
				)";

		if ($conn->query($sql) === TRUE) {
			echo json_encode(array(
				'isProceed' => true,
				'msg' => 'successfully saved'
			));
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->error,
				'sql' => $sql
			));
		}
	}
} elseif ($action == "checkMyReservation") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);
	$sql = mysqli_query($conn, "SELECT 
				user_tbl.*, reservation_tbl.*, reservation_tbl.id AS reserveID, rooms_tbl.type AS roomType, rooms_tbl.price AS roomPrice, rooms_tbl.roomNo AS roomNo
		  	FROM reservation_tbl 
	  		INNER JOIN 
	  			user_tbl ON reservation_tbl.userID = user_tbl.id
  			INNER JOIN 
  				rooms_tbl ON reservation_tbl.roomSelected = rooms_tbl.id
		 	WHERE userID = '" . $_POST["userID"] . "'");
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "getAllReservations") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT 
				user_tbl.*, reservation_tbl.*, reservation_tbl.id AS reserveID, rooms_tbl.type AS roomType, rooms_tbl.price AS roomPrice, rooms_tbl.roomNo AS roomNo
		  	FROM reservation_tbl 
	  		INNER JOIN 
	  			user_tbl ON reservation_tbl.userID = user_tbl.id
  			INNER JOIN 
  				rooms_tbl ON reservation_tbl.roomSelected = rooms_tbl.id
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "getReservationByID") {
	$reservationID = $_POST["reservationID"];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT 
				user_tbl.*, reservation_tbl.*, reservation_tbl.id AS reserveID, rooms_tbl.type AS roomType, rooms_tbl.price AS roomPrice, rooms_tbl.roomNo AS roomNo
		  	FROM reservation_tbl 
	  		INNER JOIN 
	  			user_tbl ON reservation_tbl.userID = user_tbl.id
  			INNER JOIN 
  				rooms_tbl ON reservation_tbl.roomSelected = rooms_tbl.id
  			WHERE 
  				reservation_tbl.id = '$reservationID'
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "connectDB") {
	try {
		$conn = new PDO("mysql:host=$servername;dbname=ucbr_db", $username, $passwordDB);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
} elseif ($action == "loadPage") {
	if (file_exists("../" . $_POST['pagename'] . ".php")) {

		echo json_encode(array(
			'isProceed' => true,
			'page' => file_get_contents("../" . $_POST['pagename'] . ".php")
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'page' => "Does not exist"
		));
	}
} elseif ($action == "postReservationBilling") {
	$formData = $_POST;

	$reservationFee = $formData["reservationFee_input"];
	$securityDeposit = $formData["securityDeposit_input"];
	$utilityDeposit = $formData["utilityDeposit_input"];
	$bedSheetDeposit = $formData["bedSheetDeposit_input"];
	$aptKey = $formData["aptKey_input"];
	$roomTypeDeposit = $formData["roomTypeDeposit_input"];
	$firstMonthRental = $formData["firstMonthRental_input"];
	$proRatedRentalDeposit = $formData["proRatedRentalDeposit_input"];
	$reservationID = $formData["reservationID"];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "
			INSERT INTO reserve_billing_tbl (
				reservationFee,
				securityDeposit,
				utilityDeposit,
				bedSheetDeposit,
				aptKey,
				roomTypeDeposit,
				firstMonthRental,
				proRatedRentalDeposit,
				reservationID,
				dateAdded
			)
			VALUES (
				'$reservationFee',
				'$securityDeposit',
				'$utilityDeposit',
				'$bedSheetDeposit',
				'$aptKey',
				'$roomTypeDeposit',
				'$firstMonthRental',
				'$proRatedRentalDeposit',
				'$reservationID',
				'" . date('Y-m-d H:i:s') . "'
			)
		";

	if ($conn->query($sql) === TRUE) {

		$sql = "
				UPDATE reservation_tbl 
				SET 
					isApprove='1'
				WHERE 
					id='$reservationID'
			";

		if ($conn->query($sql) === TRUE) {
			echo json_encode(array(
				'isProceed' => true,
				'msg' => 'successfully saved'
			));
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->error,
				'sql' => $sql
			));
		}
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error,
			'sql' => $sql
		));
	}
} elseif ($action == "getReservationBillingByID") {
	$reservationID = $_POST["reservationID"];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT 
				*
		  	FROM reserve_billing_tbl 
  			WHERE 
  				reserve_billing_tbl.reservationID = '$reservationID'
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "uploadReservationProofOfPayment") {

	if (isset($_FILES["proofOfPayment_upload"])) {
		$filename = rand(100000000, 999999999);
		$target_dir = "../tenant/assets/documentUpload/";
		$target_file = $target_dir . $filename . "." . pathinfo($_FILES["proofOfPayment_upload"]["name"], PATHINFO_EXTENSION);
		$isUploaded = false;
		$fileNameDB = $filename . "." . pathinfo($_FILES["proofOfPayment_upload"]["name"], PATHINFO_EXTENSION);

		if (move_uploaded_file($_FILES["proofOfPayment_upload"]["tmp_name"], $target_file)) {
			$isUploaded = true;
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => "Error in uploading",
			));

			return false;
		}

		if ($isUploaded == true) {
			$formData = $_POST;
			$paymentType = $formData["paymentType"];
			$reservationID = $formData["reservationID"];

			$conn = new mysqli($servername, $username, $passwordDB, $dbname);

			if ($conn->connect_error) {
				echo json_encode(array(
					'isProceed' => false,
					'msg' => $conn->connect_error
				));
			}

			$sql = "
					UPDATE reservation_tbl 
					SET 
						paymentType='$paymentType',
						paymentUpload='$fileNameDB'
					WHERE 
						id='$reservationID'
				";

			if ($conn->query($sql) === TRUE) {
				echo json_encode(array(
					'isProceed' => true,
					'msg' => 'successfully saved'
				));
			} else {
				echo json_encode(array(
					'isProceed' => false,
					'msg' => $conn->error,
					'sql' => $sql
				));
			}
		}
	} else {
		$formData = $_POST;
		$paymentType = $formData["paymentType"];
		$reservationID = $formData["reservationID"];

		$conn = new mysqli($servername, $username, $passwordDB, $dbname);

		if ($conn->connect_error) {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->connect_error
			));
		}

		$sql = "
				UPDATE reservation_tbl 
				SET 
					paymentType='$paymentType'
				WHERE 
					id='$reservationID'
			";

		if ($conn->query($sql) === TRUE) {
			echo json_encode(array(
				'isProceed' => true,
				'msg' => 'successfully saved'
			));
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->error,
				'sql' => $sql
			));
		}
	}
} elseif ($action == "getAllReservationsWithMonthlyPosting") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT 
				user_tbl.*, reservation_tbl.*, reservation_tbl.id AS reserveID, rooms_tbl.type AS roomType, rooms_tbl.price AS roomPrice, rooms_tbl.roomNo AS roomNo, room_monthly_bills_tbl.water AS waterBill, room_monthly_bills_tbl.electricity AS electricityBill, room_monthly_bills_tbl.rent AS rentBill, room_monthly_bills_tbl.others AS otherBill, room_monthly_bills_tbl.id AS monthlyID, MONTH(room_monthly_bills_tbl.dateAdded) AS monthPosted, reservation_tbl.id as reservationID, room_monthly_bills_tbl.paymentType AS monthlyPaymentType
		  	FROM reservation_tbl 
	  		INNER JOIN 
	  			user_tbl ON reservation_tbl.userID = user_tbl.id
  			INNER JOIN 
  				rooms_tbl ON reservation_tbl.roomSelected = rooms_tbl.id
			LEFT JOIN 
				room_monthly_bills_tbl ON reservation_tbl.id = room_monthly_bills_tbl.reservationID
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "postMonthlyBill") {
	$formData = $_POST;
	$water = $formData["water_input"];
	$electricity = $formData["electricity_input"];
	$rent = $formData["rent_input"];
	$other = $formData["other_input"];
	$reservationID = $formData["reservationID"];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "
			INSERT INTO room_monthly_bills_tbl (
				water,
				electricity,
				rent,
				others,
				reservationID,
				dateAdded
			)
			VALUES (
				'$water',
				'$electricity',
				'$rent',
				'$other',
				'$reservationID',
				'" . date('Y-m-d H:i:s') . "'
			)
		";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error,
			'sql' => $sql
		));
	}

	$conn->close();
} elseif ($action == "getBillingViaMonth") {
	$userID = $_POST["userID"];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);
	$month = date('m');

	$sqlString = "
			SELECT 
				room_monthly_bills_tbl.*, reservation_tbl.isApprove
		  	FROM 
		  		room_monthly_bills_tbl 
	  		INNER JOIN 
	  			reservation_tbl ON room_monthly_bills_tbl.reservationID = reservation_tbl.id
	  		WHERE 
	  			reservation_tbl.userID = '$userID' AND room_monthly_bills_tbl.dateAdded LIKE '%-$month-%'
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "uploadBillingProofOfPayment") {

	if (isset($_FILES["proofOfPayment_upload"])) {
		$filename = rand(100000000, 999999999);
		$target_dir = "../tenant/assets/documentUpload/";
		$target_file = $target_dir . $filename . "." . pathinfo($_FILES["proofOfPayment_upload"]["name"], PATHINFO_EXTENSION);
		$isUploaded = false;
		$fileNameDB = $filename . "." . pathinfo($_FILES["proofOfPayment_upload"]["name"], PATHINFO_EXTENSION);

		if (move_uploaded_file($_FILES["proofOfPayment_upload"]["tmp_name"], $target_file)) {
			$isUploaded = true;
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => "Error in uploading",
			));

			return false;
		}

		if ($isUploaded == true) {
			$formData = $_POST;
			$paymentType = $formData["paymentType"];
			$userID = $formData["userID"];
			$reservationID = $formData["reservationID"];

			$month = date("m");

			$conn = new mysqli($servername, $username, $passwordDB, $dbname);

			if ($conn->connect_error) {
				echo json_encode(array(
					'isProceed' => false,
					'msg' => $conn->connect_error
				));
			}

			$sql = "
					UPDATE room_monthly_bills_tbl 
					SET 
						paymentType='$paymentType',
						paymentUpload='$fileNameDB'
					WHERE 
						reservationID='$reservationID' AND
						dateAdded LIKE '%-$month-%'
				";

			if ($conn->query($sql) === TRUE) {
				echo json_encode(array(
					'isProceed' => true,
					'msg' => 'successfully saved'
				));
			} else {
				echo json_encode(array(
					'isProceed' => false,
					'msg' => $conn->error,
					'sql' => $sql
				));
			}
		}
	} else {
		$formData = $_POST;
		$paymentType = $formData["paymentType"];
		$userID = $formData["userID"];
		$reservationID = $formData["reservationID"];
		$month = date("m");

		$conn = new mysqli($servername, $username, $passwordDB, $dbname);

		if ($conn->connect_error) {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->connect_error
			));
		}

		$sql = "
				UPDATE room_monthly_bills_tbl 
				SET 
					paymentType='$paymentType'
				WHERE 
					reservationID='$reservationID' AND
					dateAdded LIKE '%-$month-%'
			";

		if ($conn->query($sql) === TRUE) {
			echo json_encode(array(
				'isProceed' => true,
				'msg' => 'successfully saved',
				'1234' => 'here',
			));
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->error,
				'sql' => $sql
			));
		}
	}
} elseif ($action == "getAllAdminUsers") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT 
				*
		  	FROM 
		  		admin_user_tbl 
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "getAllClientUsers") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT 
				*
		  	FROM 
		  		user_tbl 
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "updateRoomDetails") {
	$formData = $_POST;

	$description = $formData['description_container'];
	$price = $formData['price_container'];
	$duration = $formData['duration_container'];
	$type = $formData['type_container'];
	$roomNo = $formData['roomNo_container'];
	$fileName = $formData['fileName'];
	$id = $formData['id'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	if (isset($_FILES["photo_container"])) {
		$filename = explode(".", $fileName);
		$target_dir = "../assets/img/";

		unlink($target_dir . $fileName);

		$filename = rand(100000000, 999999999) . ".png";
		$target_file = $target_dir . $filename;

		$isUploaded = false;

		if (move_uploaded_file($_FILES["photo_container"]["tmp_name"], $target_file)) {
			$isUploaded = true;
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => "Error in uploading",
			));

			return false;
		}
	}

	$sql = "
		UPDATE rooms_tbl 
		SET 
			description='$description',
			price='$price',
			duration='$duration',
			type='$type',
			roomNo='$roomNo',
			photo='$filename'
			
		WHERE 
			id='$id'
	";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'Successfully saved edits',
			'newFilename' => $filename
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error,
			'sql' => $sql
		));
	}

	$conn->close();
} elseif ($action == "addNewRoom") {
	$filename = rand(100000000, 999999999);
	$target_dir = "../assets/img/";
	$target_file = $target_dir . $filename . "." . pathinfo($_FILES["photo_container"]["name"], PATHINFO_EXTENSION);
	$isUploaded = false;
	$fileNameDB = $filename . "." . pathinfo($_FILES["photo_container"]["name"], PATHINFO_EXTENSION);

	if (move_uploaded_file($_FILES["photo_container"]["tmp_name"], $target_file)) {
		$isUploaded = true;
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => "Error in uploading",
		));

		return false;
	}

	if ($isUploaded == true) {
		$formData = $_POST;
		$description = $formData["description_container"];
		$price = $formData["price_container"];
		$duration = $formData["duration_container"];
		$type = $formData["type_container"];
		$roomNo = $formData["roomNo_container"];

		$conn = new mysqli($servername, $username, $passwordDB, $dbname);

		if ($conn->connect_error) {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->connect_error
			));
		}

		$sql = "
				INSERT INTO rooms_tbl (
					description,
					price,
					duration,
					type,
					roomNo,
					photo,
					dateAdded
				)
				VALUES (
					'$description',
					'$price',
					'$duration',
					'$type',
					'$roomNo',
					'$fileNameDB',
					'" . date('Y-m-d H:i:s') . "'
				)";

		if ($conn->query($sql) === TRUE) {
			echo json_encode(array(
				'isProceed' => true,
				'msg' => 'successfully saved'
			));
		} else {
			echo json_encode(array(
				'isProceed' => false,
				'msg' => $conn->error,
				'sql' => $sql
			));
		}
	}
} elseif ($action == "requestRoomTransfer") {
	$formData = $_POST;
	$roomNo = $formData['roomNo'];
	$note = $formData['note'];
	$reservationID = $formData['reservationID'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO room_transfer_tbl (roomNo, note, reservationID, dateAdded)
		VALUES ('$roomNo', '$note', '$reservationID', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "getMyRoomTransferReq") {
	$reservationID = $_POST['reservationID'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT
				*
			FROM 
				room_transfer_tbl
			WHERE 
				reservationID = '$reservationID'
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "deleteTransferRequest") {
	$id = $_POST['id'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			UPDATE room_transfer_tbl 
			SET 
				isApprove='2'
			WHERE 
				id='$id'
		";

	if ($conn->query($sqlString) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "requestMaintenance") {
	$formData = $_POST;
	$reason = $formData['reason'];
	$reservationID = $formData['reservationID'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO room_maintainance_tbl (reason, reservationID, dateAdded)
		VALUES ('$reason', '$reservationID', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "getMyMaintenanceReq") {
	$reservationID = $_POST['reservationID'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT
				*
			FROM 
				room_maintainance_tbl
			WHERE 
				reservationID = '$reservationID'
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "updateRoomMaintenance") {
	$id = $_POST['id'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			UPDATE room_maintainance_tbl 
			SET 
				isApprove='2'
			WHERE 
				id='$id'
		";

	if ($conn->query($sqlString) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "requestCheckout") {
	$formData = $_POST;
	$returnItems = $formData['returnItems'];
	$refunds = $formData['refunds'];
	$unpaid = $formData['unpaid'];
	$note = $formData['note'];
	$reservationID = $formData['reservationID'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO room_checkout_tbl (returnItems, refunds,unpaid, note, reservationID, dateAdded)
		VALUES ('$returnItems','$refunds','$unpaid','$note', '$reservationID', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "getMyCheckout") {
	$reservationID = $_POST['reservationID'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT
				*
			FROM 
				room_checkout_tbl
			WHERE 
				reservationID = '$reservationID'
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "updateCheckout") {
	$id = $_POST['id'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			UPDATE room_checkout_tbl 
			SET 
				isApprove='2'
			WHERE 
				id='$id'
		";

	if ($conn->query($sqlString) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "finishMyReservation") {
	$id = $_POST['id'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			UPDATE reservation_tbl 
			SET 
				isApprove='2'
			WHERE 
				id='$id'
		";

	if ($conn->query($sqlString) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "getAllMaintenance") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT
				room_maintainance_tbl.*, rooms_tbl.roomNo AS currentRoom, user_tbl.fullname
			FROM 
				room_maintainance_tbl
			INNER JOIN 
				reservation_tbl ON room_maintainance_tbl.reservationID = reservation_tbl.id
			INNER JOIN 
				rooms_tbl ON reservation_tbl.roomSelected = rooms_tbl.id
			INNER JOIN 
				user_tbl ON reservation_tbl.userID = user_tbl.id
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "getAllCheckout") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT
				room_checkout_tbl.*, rooms_tbl.roomNo AS currentRoom, user_tbl.fullname
			FROM 
				room_checkout_tbl
			INNER JOIN 
				reservation_tbl ON room_checkout_tbl.reservationID = reservation_tbl.id
			INNER JOIN 
				rooms_tbl ON reservation_tbl.roomSelected = rooms_tbl.id
			INNER JOIN 
				user_tbl ON reservation_tbl.userID = user_tbl.id
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "getAllTransfer") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT
				room_transfer_tbl.*, rooms_tbl.roomNo AS currentRoom, user_tbl.fullname
			FROM 
				room_transfer_tbl
			INNER JOIN 
				reservation_tbl ON room_transfer_tbl.reservationID = reservation_tbl.id
			INNER JOIN 
				rooms_tbl ON reservation_tbl.roomSelected = rooms_tbl.id
			INNER JOIN 
				user_tbl ON reservation_tbl.userID = user_tbl.id
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "approveRequest") {
	$id = $_POST['id'];
	$table = $_POST['table'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			UPDATE $table 
			SET 
				isApprove='1'
			WHERE 
				id='$id'
		";

	if ($conn->query($sqlString) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "disApproveRequest") {
	$id = $_POST['id'];
	$table = $_POST['table'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			UPDATE $table 
			SET 
				isApprove='3'
			WHERE 
				id='$id'
		";

	if ($conn->query($sqlString) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "addNewAdmin") {
	$formData = $_POST;
	$usernameForm = $formData['username'];
	$password = md5($formData['password']);
	$type = $formData['type'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO admin_user_tbl (username, password, type, dateAdded)
		VALUES ('$usernameForm','$password','$type', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "getAdminChatLogs") {
	$id = $_POST['id'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT chat_history.*, user_tbl.fullname as userFullname, chat_msgs.msg as chatMsg
			FROM chat_history 
			
			INNER JOIN user_tbl ON chat_history.userID = user_tbl.id
			INNER JOIN admin_user_tbl ON chat_history.adminID = admin_user_tbl.id
			INNER JOIN chat_msgs ON chat_history.id = chat_msgs.historyID

			WHERE adminID = '$id'
			GROUP BY chat_msgs.historyID
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "getUserChatLogs") {
	$id = $_POST['id'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT chat_history.*, user_tbl.fullname as userFullname, chat_msgs.msg as chatMsg, admin_user_tbl.username
			FROM chat_history 
			
			INNER JOIN user_tbl ON chat_history.userID = user_tbl.id
			INNER JOIN admin_user_tbl ON chat_history.adminID = admin_user_tbl.id
			LEFT JOIN chat_msgs ON chat_history.id = chat_msgs.historyID

			WHERE userID = '$id'
			GROUP BY chat_msgs.historyID
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "getChatMsgs") {
	$historyID = $_POST['historyID'];
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT * FROM chat_msgs WHERE historyID = '$historyID'
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	for ($i = 0; $i < count($rows); $i++) {
		$newID = $rows[$i]["id"];

		if ($_POST['sentBy'] == "admin") {
			$sql = "
					UPDATE chat_msgs 
					SET 
						isViewedAdmin='1'
					WHERE 
						id='$newID'
				";
		} else {
			$sql = "
					UPDATE chat_msgs 
					SET 
						isViewedUser='1'
					WHERE 
						id='$newID'
				";
		}



		$conn->query($sql);
	}

	echo json_encode($rows);
} elseif ($action == "sendMsg") {
	$formData = $_POST;

	$historyID = $formData['historyID'];
	$sentBy = $formData['sentBy'];
	$msg = $formData['msg'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO chat_msgs (historyID, sentBy, msg, dateAdded)
		VALUES ('$historyID', '$sentBy', '$msg', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "addNewChatToAssistance") {
	$formData = $_POST;
	$userID = $formData['userID'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
		SELECT * FROM admin_user_tbl WHERE type = 'receptionist' OR type = 'admin'
	";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	$OneDigitRandomNumber = rand(0, count($rows) - 1);
	$adminID = $rows[$OneDigitRandomNumber]["id"];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO chat_history (adminID, userID, dateAdded)
		VALUES ('$adminID', '$userID', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "sendContactUs") {
	$formData = $_POST;
	$name = $formData['name'];
	$email = $formData['email'];
	$phone = $formData['phone'];
	$message = $formData['message'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	$sql = "INSERT INTO contact_us_tbl (name, email, phone, message, dateAdded)
		VALUES ('$name', '$email', '$phone', '$message', '" . date('Y-m-d H:i:s') . "')";

	if ($conn->query($sql) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} elseif ($action == "getAllInquiries") {
	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
			SELECT * FROM contact_us_tbl
		";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	echo json_encode($rows);
} elseif ($action == "test") {
	$formData = $_GET;
	$userID = $formData['userID'];

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	$sqlString = "
		SELECT * FROM admin_user_tbl WHERE type = 'receptionist' OR type = 'admin'
	";

	$sql = mysqli_query($conn, $sqlString);
	$rows = array();

	while ($r = mysqli_fetch_assoc($sql)) {
		$rows[] = $r;
	}

	$OneDigitRandomNumber = rand(0, count($rows) - 1);
	$adminID = $rows[$OneDigitRandomNumber]["id"];

	echo $adminID;
} elseif ($action == "deleteAccountViaID") {
	$formData = $_POST;
	$id = $formData['id'];

	$sqlString = "
		DELETE FROM user_tbl WHERE id = '$id';
	";

	$conn = new mysqli($servername, $username, $passwordDB, $dbname);

	if ($conn->connect_error) {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->connect_error
		));
	}

	if ($conn->query($sqlString) === TRUE) {
		echo json_encode(array(
			'isProceed' => true,
			'msg' => 'successfully saved'
		));
	} else {
		echo json_encode(array(
			'isProceed' => false,
			'msg' => $conn->error
		));
	}

	$conn->close();
} else {
	echo json_encode(array(
		'isProceed' => false,
		'msg' => "Action invalid"
	));

	return false;
}
