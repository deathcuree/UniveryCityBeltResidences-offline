<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!--********************************** CONTENT BODY START ***********************************-->


<section>
  <div class="content-body">
    <div class="container-fluid">
      <div class="row page-titles">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Reservation Form</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Registration</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="card mb-3">
        <div class="card-body">
          <form id="reservation_form">
            <div class="row g-3 align-items-center">
              <!-- Card -->
              <div class="card">
                <h3 class="text-center">
                  JOIN THE UCBR COMMUNITY FACEBOOK PAGE TO GET THE LATEST
                  PROMOS DISCOUNTS AND IMPORTANT ANNOUNCEMENTS
                </h3>
              </div>
              <!-- Card -->
              <h5>Tenant Basic Information</h5>

              <div class="col-md-6">
                <label for="fbUsername" class="form-label">Facebook Username</label>
                <div class="input-group">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" name="fbUsername" id="fbUsername" placeholder="Facebook Username" required/>
                </div>
              </div>

              <div class="col-md-6">
                <label for="fbEmail" class="form-label">Facebook Email Address:</label>
                <div class="input-group">
                  <span class="input-group-text">@</span>
                  <input type="email" class="form-control" name="fbEmail" id="fbEmail" placeholder="Facebook Email Address" required/>
                </div>
              </div>

              <div class="">
                <label class="form-label">Are you a student or a worker?</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="student_radio" value="student" checked />
                      <label class="form-check-label" for="student_radio">
                        Student
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="reviewee_radio" value="reviewee" />
                      <label class="form-check-label" for="reviewee_radio">
                        Reviewee
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="worker_radio" value="worker" />
                      <label class="form-check-label" for="worker_radio">
                        Worker
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="others_radio" value="others" />
                      <label class="form-check-label" for="others_radio">
                        Others
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <label for="reviewCenter" class="form-label">Review Center:</label>
                <input type="text" class="form-control" name="reviewCenter" id="reviewCenter" />
              </div>

              <div class="col-md-6">
                <label for="locationReviewCenter" class="form-label">Review Center Location:
                </label>
                <input type="text" class="form-control" name="reviewLocation" id="reviewLocation" />
              </div>

              <div class="col-md-6">
                <label for="reviewCenter" class="form-label">Last School/College:
                </label>
                <input type="text" class="form-control" name="reviewLastSchool" id="reviewLastSchool" />
              </div>

              <div class="col-md-6">
                <label for="locationReviewCenter" class="form-label">Last School Location:
                </label>
                <input type="text" class="form-control" name="reviewLastSchoolLocation" id="reviewLastSchoolLocation" />
              </div>

              <div class="col-md-6">
                <label for="course" class="form-label">Course </label>
                <input type="text" class="form-control" name="course" id="course" />
              </div>

              <div class="col-md-6">
                <label class="form-label">Year Level</label>
                <select class="form-control wide" name="yearLevel">
                  <option></option>
                  <option>Grade 11</option>
                  <option>Grade 12</option>
                  <option>1st Year</option>
                  <option>2nd Year</option>
                  <option>3rd Year</option>
                  <option>4th Year</option>
                </select>
              </div>

              <hr class="mb-4" />

              <h5>IN CASE OF EMERGENCY PRIMARY CONTACT PERSON</h5>
              <p>
                (Preferably Parents based on Philippines, with CONTACT
                NUMBER)
              </p>
              <div class="col-md-6">
                <label class="form-label">Parent/Guardian Name:</label>
                <input type="text" class="form-control" name="guardianName" id="guardianName" />
              </div>
               <div class="col-md-6">
                  <label class="form-label">Relationship:</label>
                <select class="form-control wide" name="guardianRelationship" id="guardianRelationship">
                  <option></option>
                  <option>Father</option>
                  <option>Mother</option>
                  <option>Guardian</option>
                </select>
                <!--<label class="form-label">Relationship:</label>-->
                <!--<input type="text" class="form-control" name="guardian2Relationship" id="guardian2Relationship" />-->
              </div>
              <div class="col-md-6">
                <label for="emailaddress" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="guardianEmail" id="guardianEmail" />
              </div>

              <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="guardianAddress" id="guardianAddress" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Select your network:</label>
                <select class="form-control wide" name="guardianNetwork" id="guardianNetwork">
                  <option></option>
                  <option>Smart</option>
                  <option>Globe</option>
                  <option>Talk and Text</option>
                  <option>Dito</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="number" class="form-control" name="guardianNumber" id="guardianNumber" />
              </div>

              <hr class="mb-4" />

              <h5 class="mt-4">SECONDARY CONTACT PERSON</h5>
              <p>
                (Preferably Parents based on Philippines, with CONTACT
                NUMBER)
              </p>
              <div class="col-md-6">
                <label class="form-label">Parent/Guardian Name:</label>
                <input type="text" class="form-control" name="guardian2Name" id="guardian2Name" />
              </div>
              <div class="col-md-6">
                  <label class="form-label">Relationship:</label>
                <select class="form-control wide" name="guardian2Relationship" id="guardian2Relationship">
                  <option></option>
                  <option>Father</option>
                  <option>Mother</option>
                  <option>Guardian</option>
                </select>
                <!--<label class="form-label">Relationship:</label>-->
                <!--<input type="text" class="form-control" name="guardian2Relationship" id="guardian2Relationship" />-->
              </div>
              <div class="col-md-6">
                <label for="emailaddress" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="guardian2Email" id="guardian2Email" />
              </div>

              <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control" name="guardian2Address" id="guardian2Address" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Select your network:</label>
                <select class="form-control wide" name="guardian2Network" id="guardian2Network">
                  <option></option>
                  <option>Smart</option>
                  <option>Globe</option>
                  <option>GOMO</option>
                  <option>Talk and Text</option>
                  <option>Dito</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="number" class="form-control" name="guardian2Number" id="guardian2Number" />
              </div>

            </div>

            <hr class="mb-4" />

            <h5 class="mt-4">
              VALID DOCUMENTS SUBMITTED FOR FURTHER IDENTIFICATION
            </h5>
            <div class="row">
              <div class="col-md-6">
                <label class="form-label">Student / Reviewee:</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="validDocu" id="schoolID_radio" value="schoolID" checked required/>
                      <label class="form-check-label" for="schoolID_radio">
                        School ID / Review School ID
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="validDocu" id="certOfReg_radio" value="certOfReg" />
                      <label class="form-check-label" for="certOfReg_radio">
                        Certificate of Registration/Enrolment
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <label class="form-label">Working:</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="validDocu" id="2Ids_radio" value="2Ids" />
                      <label class="form-check-label" for="2Ids_radio">
                        2 Valid IDs (Passport, TIN ID, Postal ID, SSS,
                        GSIS, Driver’s License)
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="validDocu" id="othersDocu_radio" value="others" />
                      <label class="form-check-label" for="othersDocu_radio">
                        Others
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <label for="formFileMultiple" class="form-label">
                  File Upload</label>
                <input class="form-control" type="file" id="validDocuFile" name="validDocuFile" />
              </div>
            </div>

            <hr class="mb-4" />

            <div class="col-lg-12 order-lg-12 mt-4 mb-4">
              <!-- Tab panes -->
              <label for="chosen_room">Chosen Room:</label>
              <select class="form-control wide" name="room_select">
                <option value="">Please Select Room...</option>
              </select>
            </div>


            <h4 class="mt-4">Room Details</h6>

              <div class="row g-3 align-items-center">
                <img src="" alt="choose room first" id="roomImg_container" style="width: 500px;">

                <h6>Room Price</h6>
                <p>&#8369; <span id="roomPrice_container">NA</span></p>
                <h6>Room Title</h6>
                <p><span id="roomType_container">NA</span></p>

                <h6>Room No</h6>
                <p><span id="roomNo_container">NA</span></p>

                <h6>Room Description</h6>
                <p>
                  <span id="roomDesc_container">NA</span>
                </p>
              </div>


              <h6 class="mt-4">Contract Details</h6>

              <div class="row g-3 align-items-center">

                <div class="col-md-6">
                  <!-- Card -->
                  <div class="card">
                    <div class="card-body">
                      <p class="mb-1">Date Check In:</p>
                      <input class="datepicker-default form-control" id="checkInDate" name="checkInDate" required/>
                    </div>
                  </div>
                  <!-- Card -->
                </div>

                <div class="col-md-6">
                  <!-- Card -->
                  <div class="card">
                    <div class="card-body">
                      <p class="mb-1">Date Check Out:</p>
                      <input class="datepicker-default form-control" id="checkoutDate" name="checkoutDate" required/>
                    </div>
                  </div>
                  <!-- Card -->

                </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4 mx-4">
                    Confirm
                  </button>
                </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--********************************** CONTENT BODY END ***********************************-->

<?php
require_once 'includes/footer.php';
?>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/libphonenumber-js/1.9.15/libphonenumber-js.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../assets/js/common.js"></script>

<script type="text/javascript">
  var userSession = JSON.parse(localStorage.getItem("userData"));
  var roomsArray = ajaxPostLink({
    "action": "getRooms"
  });

  var checkReservation = ajaxPostLink({
    "action": "checkMyReservation",
    "userID": userSession.id
  });

  var url_string = document.URL;
  var url = new URL(url_string);
  var roomID = url.searchParams.get("roomID");

  if (checkReservation.length >= 1) {
    if (checkReservation[0].isApprove >= 2) {

      console.log("proceed");

    } else if (checkReservation[0].paymentType != null) {

      Swal.fire({
        text: "You are currently paid for a room.",
        icon: 'error',
      }).then(function() {
        history.back()
        return false;
      })

    } else if (checkReservation[0].isApprove == "0") {

      Swal.fire({
        text: "You have a pending reservation, Please wait for our admins to approve your request to proceed to payment",
        icon: 'error',
      }).then(function() {
        window.location.href = "index.php";
        return false;
      })

    } else if (checkReservation[0].isApprove == "1") {

      Swal.fire(
        'Reservation Approved!',
        'Click ok to be redirected to billing page',
        'success'
      ).then(function() {
        window.location.href = "reservation_billing.php?reservationID=" + checkReservation[0].id;
        return false;
      });

    }
  }

  for (var i = 0; i < roomsArray.length; i++) {
    $("select[name='room_select']").append(
      '<option value="' + i + '"> ' + roomsArray[i].roomNo + " | " + roomsArray[i].type + " | " + roomsArray[i].duration + " | " + roomsArray[i].price + '</option>'
    );
  }


  $("select[name='room_select']").on("change", function() {
    var selectedID = roomsArray[$(this).val()];

    $("#roomPrice_container").text(selectedID.price);
    $("#roomType_container").text(selectedID.type);
    $("#roomNo_container").text(selectedID.roomNo);
    $("#roomDesc_container").text(selectedID.description);
    $("#roomImg_container").attr('src', "../assets/img/" + selectedID.photo);


    console.log(selectedID);
  })

  if (roomID != null) {
    $("select[name='room_select']").val(roomID).trigger("change");
  }

    // custom validators
    $.validator.addMethod("validatePhoneNumber", function(value, element) {
        var phoneRegex = /^(\+63|0)9\d{9}$/;
    
        // Check if the input matches the expected format
        if (!phoneRegex.test(value)) {
            return false;
        }
        
        // Check if the phone number has repeating digits
        var repeatingRegex = /^.*([0-9])(\1{2,}).*$/;
        if (repeatingRegex.test(value)) {
            return false;
        }
        
        var phoneNumber = libphonenumber.parsePhoneNumber(value, "PH");
        return phoneNumber.isValid();
    }, "Invalid Phone Number.");
    // custom validators
        
    // custom validators
    $.validator.addMethod("checkIfEmailValid", function(value, element) {
       var valueArray = value.split("@");
       if(valueArray[1]=="gmail.com"){
           return true;
       }else{
           return false;
       }
    }, "We only accept @gmail.com emails");
    // custom validators
    
    // custom validators
    //   $.validator.addMethod("checkIfNumberIsValid", function(value, element) {
    //     if (value.length == 11) {
    //       return true;
    //     } else {
    //       return false;
    //     }
    
    //   }, "Number is not valid");
      
    //   $.validator.addMethod("checkIfCheckInDateIsValid", function(value, element) {            
    //         var CurrentDate = new Date();
    //         var checkInDate = new Date(value);
    //         // var checkOutDate = new Date($("input[name='checkoutDate']").val())
            
    //         console.log(CurrentDate," | ",checkInDate);
            

            
    //         if(checkInDate>CurrentDate){
    //             return true;
    //         }
            
    //         return false;
            
    //         // console.log(GivenDate < CurrentDate);
            
    //         // if(GivenDate < CurrentDate){
    //         //     return true;
    //         // }else{
    //         //     return false;
    //         // }
    //     }, "Invalid Date. Please pick a date further than today");
        
//         $.validator.addMethod("checkIfCheckInDateIsValid", function(value, element) {            
//     var currentDate = new Date();
//     var checkInDate = new Date(value);

//     if(checkInDate >= currentDate.setHours(0,0,0,0)){
//         return true;
//     }
    
//     return false;
// }, "Invalid Date. Please pick a date further than today");


        
//         $.validator.addMethod("checkIfCheckInAndOutDateIsValid", function(value, element) {            
//             var checkInDate = new Date($("input[name='checkInDate']").val())
//             var checkOutDate = new Date($("input[name='checkoutDate']").val())
            
//             if(checkOutDate=="Invalid date"){
//                 console.log("InvalidDate");
//                 return false;
//             }
            
//             if(checkOutDate>checkInDate){
//                 return true;
//             }
            
//             console.log("allback");
//         }, "Make sure that check in/out date is set and should not be less than today");

  // custom validators

  $("#reservation_form").validate({
    errorClass: 'text-danger',
    rules: {
      "fbUsername": "required",
      "fbEmail": {
          required: true,
          checkIfEmailValid: true,
      },
      "guardianName": "required",
      "guardianRelationship": "required",
      "guardianEmail": {
          required: true,
          checkIfEmailValid: true,
      },
      "guardianAddress": "required",
      "guardianNetwork": "required",
      "guardianNumber": {
        required: true,
        validatePhoneNumber: true,
      },
    //   "guardian2Name": "required",
    //   "guardian2Relationship": "required",
    //   "guardian2Email": "required",
    //   "guardian2Address": "required",
    //   "guardian2Network": "required",
    //   "guardian2Number": {
    //     required: true,
    //     validatePhoneNumber: true,
    //   },
      "validDocuFile": "required",
      "room_select": "required",
      "checkInDate": {
          required: true,
        //   checkIfCheckInAndOutDateIsValid: true,
        //   checkIfCheckInDateIsValid: true
      },
      "checkoutDate": {
          required: true,
        //   checkIfCheckOutDateIsValid: true,
        //   checkIfCheckInAndOutDateIsValid: true
      },
    },
    submitHandler: function(form) {
      var formSerial = $(form).serializeArray();

      var formData = new FormData();
      formData.append("validDocuFile", document.getElementById('validDocuFile').files[0]);

      for (var i = 0; i < formSerial.length; i++) {
        formData.append(formSerial[i].name, formSerial[i].value);
      }

      formData.append("action", "reserveRoom");
      formData.append("userID", userSession.id);
      formData.append("roomSelected", roomsArray[$("select[name='room_select']").val()].id);

      var res = backendHandleFormData(formData);
      console.log(res);

      for (var pair of formData.entries()) {
        console.log(pair[0] + ', ' + pair[1]);
      }

      if (res.isProceed == false) {
        Swal.fire({
          text: res.msg,
          icon: 'error',
        })

        return;
      }

      Swal.fire(
        'Successfully saved edits',
        'Please wait while our admins approval for your reservation',
        'success'
      ).then(function() {
        history.back()
      });


    }
  });
</script>