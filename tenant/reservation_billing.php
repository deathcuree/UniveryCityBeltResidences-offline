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
            <a href="javascript:void(0)">Registration Billing</a>
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
                      <span class="text-muted"></span>
                    </li>


                    <li class="list-group-item d-flex justify-content-between">
                      <span>Total (Peso)</span>
                      <strong>&#8369; <span id="total_container"></span></strong>
                    </li>
                  </ul>

                </div>
                <div class="col-lg-8 order-lg-1">
                  <h4 class="mb-3">Billing Details</h4>

                  <form class="needs-validation" novalidate="" id="deposit_form">
                    <div class="row">

                      <div class="col-md-6">
                        <label class="form-label">Reservation Fee</label>
                        <select class="default-select form-control wide w-100" name="reservationFee_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Security Deposit</label>
                        <select class="default-select form-control wide w-100" name="securityDeposit_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Utility Deposit</label>
                        <select class="default-select form-control wide w-100" name="utilityDeposit_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Bed sheet Deposit</label>
                        <select class="default-select form-control wide w-100" name="bedSheetDeposit_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Apartment Key Deposit</label>
                        <select class="default-select form-control wide w-100" name="aptKey_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label for="totalDeposit" class="form-label">Room Type Deposit</label>
                        <select class="default-select form-control wide w-100" name="roomTypeDeposit_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                          <option value="2000">&#8369; 2000.00</option>
                        </select>
                      </div>

                      <div class="col-md-6 d-none">
                        <label class="form-label">First Month Rental</label>
                        <select class="default-select form-control wide w-100" name="firstMonthRental_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                          <option value="2000">&#8369; 2000.00</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Pro-Rated Rental Deposit(1st Month)</label>
                        <select class="default-select form-control wide w-100" name="proRatedRentalDeposit_input" disabled>
                          <option selected="" value="0">&#8369; 0.00</option>
                          <option value="500">&#8369; 500.00</option>
                          <option value="1000">&#8369; 1000.00</option>
                          <option value="2000">&#8369; 2000.00</option>
                        </select>
                      </div>

                    </div>

                    <hr class="mb-4" />

                    <button class="btn btn-primary btn-lg btn-block" type="button" id="proceed_btn">
                      Proceed to payment
                    </button>

                    <button class="btn btn-danger btn-lg btn-block mt-4" type="cancel" onclick="window.location.href = 'index.php'">
                      Cancel
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
  var selectedData = ajaxPostLink({
    "action": "getReservationBillingByID",
    "reservationID": reservationID
  });

  $("select[name='reservationFee_input']").val(selectedData[0].reservationFee).trigger("change")
  $("select[name='securityDeposit_input']").val(selectedData[0].securityDeposit).trigger("change")
  $("select[name='utilityDeposit_input']").val(selectedData[0].utilityDeposit).trigger("change")
  $("select[name='bedSheetDeposit_input']").val(selectedData[0].bedSheetDeposit).trigger("change")
  $("select[name='aptKey_input']").val(selectedData[0].aptKey).trigger("change")
  $("select[name='roomTypeDeposit_input']").val(selectedData[0].roomTypeDeposit).trigger("change")
  $("select[name='firstMonthRental_input']").val(selectedData[0].firstMonthRental).trigger("change")
  $("select[name='proRatedRentalDeposit_input']").val(selectedData[0].proRatedRentalDeposit).trigger("change")
  $("#roomType_container").text(selectedData[0].roomTypeDeposit);

  var total = 0;

  $("#deposit_form select").each(function() {
    var value = $(this).val();

    if (value != "") {
      total = total + parseFloat(value);
    }
  })

  $("#total_container").text(total);

  $("#proceed_btn").on("click", function() {
    Swal.fire({
      title: 'Confirm and proceed to billing',
      showCancelButton: true,
      confirmButtonText: 'Yes',
      denyButtonText: 'No',
      icon: 'warning',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "reservation_payment.php?reservationID=" + reservationID;
      }
    })
  })
</script>