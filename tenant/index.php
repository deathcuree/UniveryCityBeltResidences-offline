<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
// require_once 'includes/chatbox.php';
// require_once 'check-password.php'
?>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
</style>



<!--********************************** CONTENT BODY START ***********************************-->


<section>
  <div class="content-body">
    <div class="container-fluid">
      <div class="row page-titles">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Profile</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Information</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
              <div class="photo-content">
                <div class="cover-photo rounded"></div>
              </div>
              <div class="profile-info">
                <div class="profile-photo">
                  <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" />
                </div>
                <div class="profile-details">
                  <div class="profile-name px-3 pt-2">
                    <h4 class="text-primary mb-0" id="fullname_outerContainer"></h4>
                    <p>Tenant</p>
                  </div>
                  <div class="profile-email px-2 pt-2">
                    <h4 class="text-muted mb-0" id="email_outerContainer"></h4>
                    <p>Email</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4">
          <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-body">
                  <div class="profile-statistics">
                    <div class="text-center">
                      <div class="row">
                        <div class="col">
                          <h3 class="m-b-0">&#8369; <span id="monthlyRent_container">NA</span></h3>
                          <span>Monthly Rent</span>
                        </div>
                        <div class="col">
                          <h3 class="m-b-0">&#8369; <span id="monthlyElectric_container">NA</span></h3>
                          <span>Monthly Electricity Payment </span>
                        </div>
                        <div class="col">
                          <h3 class="m-b-0">&#8369; <span id="monthlyWater_container">NA</span></h3>
                          <span>Monthly Water Payment</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="profile-tab">
                <div class="custom-tab-1">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a href="#about-me" data-bs-toggle="tab" class="nav-link active show">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Edit</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div id="about-me" class="tab-pane fade active show">
                      <div class="profile-personal-info mt-3">
                        <h4 class="text-primary mb-4">
                          Personal Information
                        </h4>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Full Name <span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="fullname_container">NA</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Gender<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="gender_container">NA</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Phone Number<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="phoneNumber_container">NA</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Email Address<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="email_container">NA</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Birthday<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="bday_container">NA</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Type of Tenant<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="typeOfTenancy_container">NA</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Parent/Guardian Name<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="guardian_container">NA</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Relationship<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="guardianRel_container">NA</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Guardian's Contact Number<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="guardianNum_container">NA</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Date Check In<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span id="checkInDate_container">NA</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Date Check Out<span class="pull-end">:</span>
                            </h5>
                          </div>

                          <div class="col-sm-9 col-7">
                            <span id="checkOutDate_container">NA</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Room No#<span class="pull-end">:</span>
                            </h5>
                          </div>

                          <div class="col-sm-9 col-7">
                            <span id="roomNo_container">NA</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Room Status#<span class="pull-end">:</span>
                            </h5>
                          </div>

                          <div class="col-sm-9 col-7">
                            <span id="isApprove_container">NA</span>
                          </div>
                        </div>



                      </div>
                    </div>

                    <div id="profile-settings" class="tab-pane fade">
                      <div class="pt-3">
                        <div class="settings-form">
                          <h4 class="text-primary">Edit Account Details</h4>
                          <form id="profile_form">

                            <div class="row">
                              <div class="mb-3 col-md-6">
                                <label class="form-label">Full Name*</label>
                                <input type="text" name="fullname_input" placeholder="" class="form-control" />
                              </div>

                              <div class="mb-3 col-md-6">
                                <label class="form-label">Gender*</label>
                                <select class="form-control" name="gender_input" >
                                  <option></option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select>
                              </div>

                              <div class="mb-3 col-md-6">
                                <label class="form-label">Phone Number*</label>
                                <input type="number" id="phoneNumber_input" name="phoneNumber_input" placeholder="e.g 09123456789" pattern="^(\+63|0)9\d{9}$" class="form-control" >
                              </div>

                              <div class="mb-3 col-md-6">
                                <label class="form-label">Email*</label>
                                <input type="email" name="email_input" placeholder="" class="form-control" />
                              </div>

                              <div class="mb-3 col-md-6">
                                <label class="form-label">Birthday*</label>
                                <input type="date" name="bday_input" placeholder="" class="form-control" />
                              </div>

                              <div class="mb-3 col-md-6">
                                <label class="form-label">New Password</label>
                                <input type="password" name="password_input" placeholder="" class="form-control" />
                              </div>

                            </div>

                            <button class="btn btn-primary" type="submit">
                              Save Changes
                            </button>
                            
                            <button class="btn btn-primary" type="button" id="delete_btn">
                              Delete Account
                            </button>

                          </form>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>


              </div>
            </div>
          </div>
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


  
  // var j = jQuery.noConflict();
  var userSession = JSON.parse(localStorage.getItem("userData"));
  var checkReservation = ajaxPostLink({
    "action": "checkMyReservation",
    "userID": userSession.id
  });

  if (checkReservation.length >= 1) {
    $("#typeOfTenancy_container").text(checkReservation[0].type);
    $("#guardian_container").text(checkReservation[0].guardianName);
    $("#guardianRel_container").text(checkReservation[0].guardianRelationship);
    $("#guardianNum_container").text(checkReservation[0].guardianNumber);
    $("#checkInDate_container").text(checkReservation[0].checkInDate);
    $("#checkOutDate_container").text(checkReservation[0].checkoutDate);
    $("#roomNo_container").text(checkReservation[0].roomNo);

    if (checkReservation[0].isApprove == 0) {
      $("#isApprove_container").text("For Approval").addClass("text-warning");
    } else if (checkReservation[0].isApprove == 1 && checkReservation[0].paymentType != null) {
      $("#isApprove_container").text("On Progress").addClass("text-success");
    } else {
      $("#isApprove_container").text("For Payment").addClass("text-danger");
    }
  }

  var billingThisMonth = ajaxPostLink({
    "action": "getBillingViaMonth",
    "userID": userSession.id
  });

  if (billingThisMonth.length >= 1) {
    $("#monthlyRent_container").text(billingThisMonth[0].rent);
    $("#monthlyElectric_container").text(billingThisMonth[0].electricity);
    $("#monthlyWater_container").text(billingThisMonth[0].water);
  }
  
    

  $(document).ready(function() {
    $("#fullname_outerContainer").text(userSession.fullname != null ? userSession.fullname : "NA");
    $("#email_outerContainer").text(userSession.email != null ? userSession.email : "NA");

    $("#fullname_container").text(userSession.fullname != null ? userSession.fullname : "NA");
    $("#gender_container").text(userSession.gender != null ? userSession.gender : "NA");
    $("#phoneNumber_container").text(userSession.phoneNumber != null ? userSession.phoneNumber : "NA");
    $("#email_container").text(userSession.email != null ? userSession.email : "NA");
    $("#bday_container").text(userSession.bday != null ? userSession.bday : "NA");

    $("input[name='fullname_input']").val(userSession.fullname != null ? userSession.fullname : "");
    $("select[name='gender_input']").val(userSession.gender != null ? userSession.gender : "");
    $("input[name='phoneNumber_input']").val(userSession.phoneNumber != null ? userSession.phoneNumber : "");
    $("input[name='email_input']").val(userSession.email != null ? userSession.email : "");
    $("input[name='bday_input']").val(userSession.bday != null ? userSession.bday : "");
    
    $("#delete_btn").on("click",function(){
        Swal.fire({
          title: 'Do you want to save the changes?',
          showDenyButton: true,
          showCancelButton: false,
          confirmButtonText: 'Yes',
          denyButtonText: 'No',
          customClass: {
            actions: 'my-actions',
            cancelButton: 'order-1 right-gap',
            confirmButton: 'order-2',
            denyButton: 'order-3',
          }
        }).then((result) => {
          if (result.isConfirmed) {
            var res = ajaxPostLink({"action":"deleteAccountViaID","id":userSession.id});
            console.log(res);
    
            if (res.isProceed == false) {
              Swal.fire({
                text: res.msg,
                icon: 'error',
              })
    
              return;
            }
    
            Swal.fire(
              'Successfully deleted account',
              '',
              'success'
            ).then(function() {
              logOutClearStorage()
            });
            
          }
        })
    });
    
        // customValidator
       $.validator.addMethod("validateBirthday", function(value, element) {
            // set up today's date
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            var todayDate = yyyy + '-' + mm + '-' + dd;
        
            // check if the entered date is in the future
            if (value >= todayDate) {
                return false;
            }
        
            // set up the minimum age requirement
            var minAge = 16;
            var minAgeDate = new Date();
            minAgeDate.setFullYear(minAgeDate.getFullYear() - minAge);
        
            // convert the entered date to a Date object
            var enteredDate = new Date(value);
        
            // compare the year of the entered date with the year of today's date
            var todayYear = today.getFullYear();
            var enteredYear = enteredDate.getFullYear();
        
            // check if the user is at least minAge years old
            if (todayYear - enteredYear < minAge) {
                return false;
            }
        
            return true;
        }, "You must be at least 16 years old to register.");
         // customValidator
         
        // customValidator
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
        // customValidator
        
        // customValidator
        // $.validator.addMethod("differentPassword", function(value, element, param) {
        //   var oldPassword = param;
        //   return (value !== oldPassword);
        // }, "Please enter a different password.");
        
        // $.validator.addMethod("differentPassword2", function(value, element, param) {
        //     var oldPassword = param;
        //     var isValid = false;
        //     $.ajax({
        //         type: "POST",
        //         url: "check-password.php",
        //         data: { oldPassword: oldPassword, newPassword: value },
        //         async: false,
        //         success: function(response) {
        //             isValid = response === "true";
        //         }
        //     });
        //     return isValid;
        // }, "Please enter a new password.");
        
        $.validator.addMethod("differentPassword2", function(value, element, param) {
            var isValid = false;
            var userSession = JSON.parse(localStorage.getItem("userData"));
            var userID = userSession.id;
            var currentPassword = userSession.password;
            var enteredPassword = value;
            
            if (enteredPassword === currentPassword) {
                isValid = false;
            } else {
                isValid = true;
            }
        
            return isValid;
        }, "Please enter a different password.");

        // customValidator
        
        // custom validators
        $.validator.addMethod("minLengthPassword", function(value, element) {
            return this.optional(element) || (value.length >= 8 && /[a-zA-Z]/.test(value) && /\d/.test(value));
        }, "Password must be at least 8 characters long and contain both letters and numbers.");
        // custom validators
    
    
    $("#profile_form").validate({
      errorClass: 'text-danger',
      rules: {
        fullname_input: {
            required:true,
        },
        gender_input: "required",
        phoneNumber_input: {
            required:true,
            validatePhoneNumber:true
        },
        email_input: "required",
        bday_input: {
            validateBirthday: true,
            required: true
        },
        password_input: {
            minLengthPassword: true,
            // differentPassword: true,
            differentPassword2: true,
        },
      },
      submitHandler: function(form) {
        var formData = $(form).serializeArray();

        formData.push({
          'name': "action",
          'value': "updateProfile"
        }, {
          'name': "id",
          'value': userSession.id
        });


        var res = ajaxPostLink(formData);
        console.log(res);

        if (res.isProceed == false) {
          Swal.fire({
            text: res.msg,
            icon: 'error',
          })

          return;
        }

        Swal.fire(
          'Successfully saved edits',
          'Logging you out for security purposes',
          'success'
        ).then(function() {
          logOutClearStorage()
        });


      }
    });
  })


</script>