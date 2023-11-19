<div>

	<h1>Reservation Details</h1>

	<h3>Personal Info</h3>

	<div class="row">
		<div class="col-md-6">
			<b>Full Name: </b><span id="fullName_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Birthday: </b><span id="bday_container">test</span>
		</div>

		<div class="col-md-6">
			<b>fbUsername: </b><span id="fbUsername_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Email: </b><span id="email_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Phone Number: </b><span id="phoneNumber_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Client Type: </b><span id="type_container">test</span>
		</div>

		<div class="col-md-6">
			<b>course: </b><span id="course_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Year Level: </b><span id="yearLevel_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Review Center: </b><span id="reviewCenter_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Review Center Location: </b><span id="reviewLocation_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Last School: </b><span id="reviewLastSchool_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Last School Location: </b><span id="reviewLastSchoolLocation_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Gender: </b><span id="gender_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Guardian Name: </b><span id="guardianName_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Guardian Relationship: </b><span id="guardianRelationship_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Guardian Number: </b><span id="guardianNumber_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Guardian Email: </b><span id="guardianEmail_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Guardian Address: </b><span id="guardianAddress_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Secondary Guardian Name: </b><span id="guardian2Name_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Secondary Guardian Relationship: </b><span id="guardian2Relationship_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Secondary Guardian Number: </b><span id="guardian2Number_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Secondary Guardian Email: </b><span id="guardian2Email_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Secondary Guardian Address: </b><span id="guardian2Address_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Secondary Guardian Address: </b><span id="guardian2Address_container">test</span>
		</div>
	</div>

	<hr>

	<h3>Reservation Info</h3>

	<div class="row">
		<div class="col-md-6">
			<b>Room No#: </b><span id="roomNo_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Room Price: </b><span id="roomPrice_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Room Type: </b><span id="roomType_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Check-In Date: </b><span id="checkInDate_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Check-Out Date: </b><span id="checkoutDate_container">test</span>
		</div>

		<div class="col-md-6">
			<b>Valid Document Type: </b><span id="validDocu_container">test</span>
		</div>


		<div class="col-md-6">
			<b>Document Download: </b><a id="validDocuFile_container" href="" download>Click to download</a>
		</div>
	</div>

	<div id="payment_container">

		<hr>

		<h3>Payment Info</h3>

		<div class="row">
			<div class="col-md-6">
				<b>Payment Type: </b><span id="paymentType_container"></span>
			</div>

			<div class="col-md-6">
				<b>Payment Upload: </b><a id="paymentUpload_container" href="" download>Click to download</a>
			</div>
		</div>
	</div>

	

	<div class="d-flex flex-row-reverse">
		<button class="btn btn-success btn-xs m-1" id="approve_btn">Approve</button>
		<button class="btn btn-danger btn-xs m-1" onclick="bootbox.hideAll();">Close</button>
	</div>
</div>

<script>
	$("#roomNo_container").text(selectedData.roomNo);
	$("#roomPrice_container").text(selectedData.roomPrice);
	$("#roomType_container").text(selectedData.roomType);
	$("#checkInDate_container").text(selectedData.checkInDate);
	$("#checkoutDate_container").text(selectedData.checkoutDate);
	$("#validDocu_container").text(selectedData.validDoc);
	$("#validDocuFile_container").attr("href","../tenant/assets/documentUpload/"+selectedData.validDocuFile);

	$("#fullName_container").text(selectedData.fullName);
	$("#bday_container").text(selectedData.bday);
	$("#fbUsername_container").text(selectedData.fbUsername);
	$("#email_container").text(selectedData.email);
	$("#phoneNumber_container").text(selectedData.phoneNumber);
	$("#type_container").text(selectedData.type);
	$("#course_container").text(selectedData.course);
	$("#yearLevel_container").text(selectedData.yearLevel);
	$("#reviewCenter_container").text(selectedData.reviewCenter);
	$("#reviewLocation_container").text(selectedData.reviewLocation);
	$("#reviewLastSchool_container").text(selectedData.reviewLastSchool);

	$("#gender_container").text(selectedData.gender);
	$("#guardianName_container").text(selectedData.guardianName);
	$("#guardianRelationship_container").text(selectedData.guardianRelationship);
	$("#guardianNumber_container").text(selectedData.guardianNumber);
	$("#guardianEmail_container").text(selectedData.guardianEmail);
	$("#guardianAddress_container").text(selectedData.guardianAddress);
	$("#guardian2Name_container").text(selectedData.guardian2Name);
	$("#guardian2Relationship_container").text(selectedData.guardian2Relationship);
	$("#guardian2Number_container").text(selectedData.guardian2Number);
	$("#guardian2Email_container").text(selectedData.guardian2Email);
	$("#guardian2Address_container").text(selectedData.guardian2Address);

	
	if (selectedData.isApprove!=0) {
		$("#approve_btn").addClass("d-none")
	}

	if (selectedData.isApprove==1&&selectedData.paymentType!=null) {

		if (selectedData.paymentType=="Paypal") {
			$("#paymentType_container").text(selectedData.paymentType);
			$("#paymentUpload_container").parent("div.col-md-6").addClass("d-none");

		}else{
			$("#paymentType_container").text(selectedData.paymentType);
			$("#paymentUpload_container").attr("href","../tenant/assets/documentUpload/"+selectedData.paymentUpload);
		}
		
	}else{
		$("#payment_container").addClass("d-none")
	}

	$("#approve_btn").on("click",function(){
		Swal.fire({
			title: 'Approve reservation and proceed to billing',
			showCancelButton: true,
			confirmButtonText: 'Yes',
			denyButtonText: 'No',
			icon: 'warning',
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = "registration_billing.php?reservationID="+selectedData.id;
			} else if (result.isDenied) {

			}
		})
	});
</script>	