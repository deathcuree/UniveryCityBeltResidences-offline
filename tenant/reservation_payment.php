<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!-- Sandbox -->
    <script 
      src="https://www.paypal.com/sdk/js?client-id=AS2N6eoJ0p2unLZiSwHXcbpS6cuTzKbOLEs-Pl5B570zvjV2y8lNTJwVC95RI1PDaD5FD1HaP8L5kzMt&disable-funding=credit,paylater,card&currency=PHP"
    ></script>
<!-- Sandbox -->


<!--********************************** CONTENT BODY START ***********************************-->
<section>
  <div class="content-body">
    <div class="container-fluid">
      <div class="row page-titles">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Registration Payment</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Registration</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 order-lg-2 mb-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Tenant's Summary Details</span>
                  </h4>
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Room Type Payment</h6>
                      </div>
                      <span class="text-muted">&#8369; <span id="roomType_container"></span></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Deposits</h6>
                      </div>
                      <span>&#8369; <span id="total_deposits_container"></span></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                      <span>Total (Peso)</span>
                      <strong>&#8369; <span id="total_container"></span></strong>
                    </li>
                  </ul>

                </div>

                <div class="col-lg-8 order-lg-1">
                  <h4 class="mb-3">Billing Details</h4>
                  <form class="needs-validation" novalidate="" id="proofOfPayment_form">
                    <h4 class="mb-3">Payment Options</h4>

                    <div class="d-block my-3">

                      <div class="form-check custom-radio mb-2">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value="Gcash" checked=""/>
                        <label class="form-check-label" for="gcash">GCash</label>
                      </div>

                      <div class="form-check custom-radio mb-2">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value="PayMaya"/>
                        <label class="form-check-label" for="paymaya">PayMaya</label>
                      </div>

                      <div class="form-check custom-radio mb-2">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" value="Paypal"/>
                        <label class="form-check-label" for="paypal">Paypal</label>
                      </div>

                    </div>

                    <div class="row" id="hideMe">
                      <div class="input-group mb-3">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="proofOfPayment_upload" id="proofOfPayment_upload" />
                        </div>
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>

                    <hr class="mb-4" />

                    <div id="buttons_container">
                      <button class="btn btn-primary btn-lg btn-block" type="button" id="payment_btn">
                        Confirm Payment
                      </button>

                      <button class="btn btn-danger btn-lg btn-block mt-3" type="button" onclick="window.location.href = 'index.php'">
                        Cancel
                      </button>
                    </div>

                    <div id="paypal-button-container" style="text-align: center;"></div>

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

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../assets/js/common.js"></script>

<script src="https://cdn.datatables.net/autofill/2.5.3/js/dataTables.autoFill.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.5.3/css/autoFill.dataTables.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>


<script type="text/javascript">
  var url_string = document.URL; 
  var url = new URL(url_string);
  var reservationID = url.searchParams.get("reservationID");
  var selectedData = ajaxPostLink({"action":"getReservationBillingByID","reservationID":reservationID});

  var depositTotal = parseFloat(selectedData[0].aptKey)+parseFloat(selectedData[0].bedSheetDeposit)+parseFloat(selectedData[0].firstMonthRental)+parseFloat(selectedData[0].proRatedRentalDeposit)+parseFloat(selectedData[0].reservationFee)+parseFloat(selectedData[0].securityDeposit)+parseFloat(selectedData[0].utilityDeposit);
  var roomTypeDeposit = parseFloat(selectedData[0].roomTypeDeposit);
  var totalToPay = depositTotal+roomTypeDeposit;

  $("#roomType_container").text(roomTypeDeposit);
  $("#total_deposits_container").text(depositTotal);
  $("#total_container").text(totalToPay);


  $('input[type=radio][name=paymentMethod]').change(function() {
    if (this.value == 'Paypal') {
      $("#hideMe").addClass("d-none");
      $("#buttons_container").addClass("d-none");
      $("input[name='proofOfPayment_upload']").rules("add", "required");

      paypal.Buttons({
          env: 'production', //  production | sb-43kbkl18527714@personal.example.com
          // Specify the style of the button
          style: {
              label: 'pay',
              size:  'small',    // small | medium | large | responsive
              shape: 'pill',     // pill | rect
              color: 'blue'      // gold | blue | silver | black
          },
          "application_context" : { 
              "shipping_preference":"NO_SHIPPING"
          },
          createOrder: function(data, actions){
              console.log(data, actions)

              return actions.order.create({
                  purchase_units: [{
                      amount: {
                          value: totalToPay
                      }
                  }],
                  "application_context" : { 
                       "shipping_preference":"NO_SHIPPING"
                  }
              })
          },
          onApprove: function(data, actions){
              console.log('Data :' + data);
              console.log('Action : '+actions);
              return actions.order.capture().then(function(details){

                  if(details['status'] == 'COMPLETED'){

                    Swal.fire(
                      'Successfully paid your reservation bill.',
                      'Your reservation consumption will start on your indicated check-in date',
                      'success'
                    ).then(function(){
                      var formData = new FormData();

                      formData.append("proofOfPayment_upload", document.getElementById('proofOfPayment_upload').files[0]);
                      formData.append("action", "uploadReservationProofOfPayment");
                      formData.append("reservationID", reservationID);
                      formData.append("paymentType", $('input[type=radio][name=paymentMethod]:checked').val());

                      var res = backendHandleFormData(formData);
                      console.log(res);

                      window.location.href = 'index.php'

                    });

                  }else{

                    Swal.fire({
                      text: "Error with paypal. Please try again later",
                      icon: 'error',
                    })

                  }
                  
              })
          },
          onCancel: function(data, actions) {
            console.log(data, actions)
          }
      }).render('#paypal-button-container');

    }else{
      $("#hideMe").removeClass("d-none");
      $("#buttons_container").removeClass("d-none");
      $("#paypal-button-container").empty();

      $("input[name='proofOfPayment_upload']").rules("remove", "required");
    }
  });

  $("#payment_btn").on("click", function(){
    $("#proofOfPayment_form").submit();
  });

  $("#proofOfPayment_form").validate({
    submitHandler: function(form) {
      var formData = new FormData();

      formData.append("proofOfPayment_upload", document.getElementById('proofOfPayment_upload').files[0]);
      formData.append("action", "uploadReservationProofOfPayment");
      formData.append("reservationID", reservationID);
      formData.append("paymentType", $('input[type=radio][name=paymentMethod]:checked').val());

      if (document.getElementById('proofOfPayment_upload').files[0]==undefined) {
        Swal.fire({
          text: "Please upload an image as proof of payment",
          icon: 'error',
        })

        return false;
      }

      var res = backendHandleFormData(formData);
      console.log(res);

      if (res.isProceed == false) {
        Swal.fire({
          text: res.msg,
          icon: 'error',
        })

        return;
      }

      Swal.fire(
        'Successfully paid your reservation bill.',
        'Your reservation consumption will start on your indicated check-in date',
        'success'
      ).then(function(){
        window.location.href = 'index.php'
      });


    }
  });
</script>