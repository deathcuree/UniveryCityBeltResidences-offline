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
            <a href="javascript:void(0)">Billing Transactions</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Transactions</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12 order-lg-12 mb-12">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Tenant's Summary Details</span>
                    <span class="badge badge-primary badge-pill">3</span>
                  </h4>
                  <ul class="list-group mb-3">

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Water</h6>
                      </div>
                      <span class="text-muted">&#8369; <span id="water_container"></span></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Electricity</h6>
                      </div>
                      <span class="text-muted">&#8369; <span id="electricity_container"></span> </span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Rent</h6>
                      </div>
                      <span class="text-muted">&#8369; <span id="rent_container"></span></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Others</h6>
                      </div>
                      <span class="text-muted">&#8369; <span id="others_container"></span></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                      <span>Total (Peso)</span>
                      <strong>&#8369; <span id="total_container"></span></strong>
                    </li>
                  </ul>
                </div>

                <div class="row">
                  <button class="btn btn-primary col-md-12" id="payment_btn">Proceed to payment</button>
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
  var userSession = JSON.parse(localStorage.getItem("userData"));
  var billingThisMonth = ajaxPostLink({"action":"getBillingViaMonth","userID":userSession.id});

  if (billingThisMonth.length >= 1) {
      
    if(billingThisMonth[billingThisMonth.length -1].isApprove == 0){
        Swal.fire({
          title: "Your room reservation is under approval",
          text: "Please wait for our admins to act on this",
          icon: 'error',
        }).then(function(){
          window.location.href = "index.php";
        });
    }else{
        if (billingThisMonth[billingThisMonth.length -1].paymentType == null) {
          var totalToPay = parseFloat(billingThisMonth[billingThisMonth.length -1].water)+parseFloat(billingThisMonth[billingThisMonth.length -1].electricity)+parseFloat(billingThisMonth[billingThisMonth.length -1].rent)+parseFloat(billingThisMonth[billingThisMonth.length -1].others);
    
          $("#water_container").text(billingThisMonth[billingThisMonth.length -1].water);
          $("#electricity_container").text(billingThisMonth[billingThisMonth.length -1].electricity);
          $("#rent_container").text(billingThisMonth[billingThisMonth.length -1].rent);
          $("#others_container").text(billingThisMonth[billingThisMonth.length -1].others);
          $("#total_container").text(totalToPay);
    
        }else{
    
          Swal.fire(
            'Already Paid!',
            'Posted bills for this month was already paid',
            'success'
          ).then(function(){
            window.location.href = 'index.php'
          });
          
        }

    }
  }else{
    Swal.fire({
      title: "Bills not yet posted",
      text: "Please wait for our admins to post your billing for this month",
      icon: 'error',
    }).then(function(){
      window.location.href = "index.php";
    });
  }

  $("#payment_btn").on("click",function(){
    Swal.fire({
      title: 'Confirm and proceed to payment',
      showCancelButton: true,
      confirmButtonText: 'Yes',
      denyButtonText: 'No',
      icon: 'warning',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "transaction_payment.php?reservationID="+billingThisMonth[billingThisMonth.length -1].reservationID+"&userID="+userSession.id;
      }
    })
  });

  
</script>