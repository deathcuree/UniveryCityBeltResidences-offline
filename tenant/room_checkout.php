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
            <a href="javascript:void(0)">Room Checkout</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Rooms</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <!--Tab slider End-->
                <div class="col-md-12 order-lg-1">
                  <h4 class="mb-3">Room Checkout Details</h4>
                  <form class="needs-validation" novalidate="" id="checkout_form">
                    <div class="row">

                      <!-- <hr class="mb-4" /> -->
                      <div class="col-md-6 mb-3">
                        <label for="returnItems" class="form-label">Items Returning</label>
                        <input type="text" class="form-control" id="returnItems" name="returnItems" placeholder="Enter Items Returning" value="" required="" />

                      </div>
                      <div class="invalid-feedback">
                        Items Returning is required
                      </div>

                      <div class="col-md-6 mb-3">
                        <label for="refunds" class="form-label">Refunds</label>
                        <input type="number" class="form-control" id="refunds" name="refunds" placeholder="Enter Refunded Deposits" value="" required="" />
                      </div>

                      <div class="col-md-6 mb-3">
                        <label for="elec" class="form-label">Unpaid</label>
                        <input type="number" class="form-control" id="unpaid" name="unpaid" placeholder="Enter Any Unpaid Payments" value="" required="" />
                      </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label">Note</label>
                        <div class="basic-form">
                          <div class="mb-3">
                            <textarea class="form-control px-4" rows="4" id="note" name="note"></textarea>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary mx-auto">
                        Checkout
                      </button>
                    </div>

                  </form>
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

returnItems
refunds
unpaid
note


<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../assets/js/common.js"></script>

<script type="text/javascript">
  // var j = jQuery.noConflict();
  var userSession = JSON.parse(localStorage.getItem("userData"));
  var checkReservation = ajaxPostLink({
    "action": "checkMyReservation",
    "userID": userSession.id
  });
  var getMyCheckout;

  if (checkReservation.length <= 0) {
    Swal.fire({
      text: "You are not currently a tenant.",
      icon: 'error',
    }).then(function() {
      window.location.href = "index.php";
    })
  }
  
  

  if (checkReservation.length <= 0 || checkReservation[checkReservation.length-1].isApprove == 2 || checkReservation[checkReservation.length-1].isApprove == 0) {
    Swal.fire({
      text: "You are not currently a tenant.",
      icon: 'error',
    }).then(function(){
      window.location.href = "index.php";
    })
  }else{
       getMyCheckout = ajaxPostLink({
            "action": "getMyCheckout",
            "reservationID": checkReservation[0].id
        });
        
        console.log(getMyCheckout);
      if (getMyCheckout.length >= 1) {
        //   console.log(checkReservation[checkReservation.length -1].isApprove);
          
        if (getMyCheckout[getMyCheckout.length - 1].isApprove =='0') {
          Swal.fire({
            title: "You have a pending request",
            text: "Please wait for our admins to review your request",
            icon: 'error',
          }).then(function() {
            window.location.href = "index.php";
          })
        } else if (getMyCheckout[getMyCheckout.length - 1].isApprove == '1') {
          Swal.fire({
            title: "Check-Out Request Approved!",
            text: "Please proceed to cashier and present a screenshot of this notification. Thank you for staying with us!",
            icon: 'success',
          }).then(function() {
            ajaxPostLink({
              "action": "updateCheckout",
              "id": getMyCheckout[getMyCheckout.length - 1].id
            });
            ajaxPostLink({
              "action": "finishMyReservation",
              "id": checkReservation[checkReservation.length - 1].id
            });
            window.location.href = "index.php";
          })
        }
      }
  }


  $(document).ready(function() {

    $("#checkout_form").validate({
      errorClass: 'text-danger',
      rules: {
        returnItems: "required",
        refunds: "required",
        unpaid: "required",
        note: "required",
      },
      submitHandler: function(form) {
        var formData = $(form).serializeArray();

        formData.push({
          'name': "action",
          'value': "requestCheckout"
        }, {
          'name': "reservationID",
          'value': checkReservation[0].id
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
          'Successfully requested a room checkout',
          'Please wait for our admins to approve your request',
          'success'
        ).then(function() {
          window.location.href = "index.php";
        });

      }
    });
  })
</script>