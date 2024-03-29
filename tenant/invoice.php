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
            <a href="javascript:void(0)">Invoice</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Invoices</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card mt-3">

            <div class="card-header">
              Invoice <strong id="dateAdded_container"></strong>
              <span class="float-end">
            </div>

            <div class="card-body">
              <div class="row mb-5">
                <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <h6>From:</h6>
                  <div><strong>UCBR Admin</strong></div>
                  <div>1985 C.M. Recto Ave., cor. S.H. Loyola St.,</div>
                  <div>Sampaloc, Manila</div>
                  <div>Email: ucbr@gmail.com</div>
                  <div>Phone: 09123456789</div>
                </div>
                <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <h6>To:</h6>
                  <div><strong id="fullname_container"></strong></div>
                  <div>01 Sta Rita Rd,</div>
                  <div>Olongapo City</div>
                  <div>Email: <span id="email_container"></span></div>
                  <div>Phone: <span id="phoneNumber_container"></span></div>
                </div>
              </div>
              <div class="table-responsive col-sm-12">
                <table class="table table-striped">
                  <thead>
                    <tr >
                      <th class="center">Tenant No.</th>
                      <th>Room</th>
                      <th>Name</th>
                      <th class="right">Details</th>
                      <th class="center">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="center" id="id_container">001</td>
                      <td class="left strong" id="roomNo_container">1</td>
                      <td class="left" id="fullname_container_1">Ryan</td>
                      <td class="right">Water Bill</td>
                      <td class="center">&#8369; <span id="water_container"></span></td>
                    </tr>

                    <tr>
                      <td class="center"></td>
                      <td class="left strong"></td>
                      <td class="left" id=""></td>
                      <td class="right">Electricity Bill</td>
                      <td class="center">&#8369; <span id="electricity_container"></span></td>
                    </tr>

                    <tr>
                      <td class="center"></td>
                      <td class="left strong"></td>
                      <td class="left" id=""></td>
                      <td class="right">Rent Bill</td>
                      <td class="center">&#8369; <span id="rent_container"></span></td>
                    </tr>

                    <tr>
                      <td class="center"></td>
                      <td class="left strong"></td>
                      <td class="left" id=""></td>
                      <td class="right">Others (Misc)</td>
                      <td class="center">&#8369; <span id="others_container"></span></td>
                    </tr>

                    
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-5"></div>
                <div class="col-lg-4 col-sm-5 ms-auto">
                  <table class="table table-clear">
                    <tbody>
                      <tr>
                        <td class="left"><strong>Total</strong></td>
                        <td class="right">
                          <strong>&#8369; <span id="total_container"></span></strong><br />
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
  var checkReservation = ajaxPostLink({"action":"checkMyReservation","userID":userSession.id});
  var totalToPay;
  
  if (checkReservation.length <= 0 || checkReservation[checkReservation.length-1].isApprove == 2 || checkReservation[checkReservation.length-1].isApprove == 0) {
    Swal.fire({
      text: "You are not currently a tenant.",
      icon: 'error',
    }).then(function(){
      window.location.href = "index.php";
    })
  }else{
      if (billingThisMonth.length >= 1) {
        if (billingThisMonth[billingThisMonth.length-1].paymentType == null) {
    
          Swal.fire({
            text: "Please settle bills payment first",
            icon: 'error',
          }).then(function(){
            window.location.href = "index.php"
            return false;
          })
    
        }else{
          totalToPay = parseFloat(billingThisMonth[billingThisMonth.length-1].water)+parseFloat(billingThisMonth[billingThisMonth.length-1].electricity)+parseFloat(billingThisMonth[billingThisMonth.length-1].rent)+parseFloat(billingThisMonth[billingThisMonth.length-1].others);
    
          $("#fullname_container").text(checkReservation[checkReservation.length-1].fullname);
          $("#email_container").text(checkReservation[checkReservation.length-1].email);
          $("#id_container").text("00"+checkReservation[checkReservation.length-1].id);
          $("#roomNo_container").text(checkReservation[checkReservation.length-1].roomNo);
          $("#fullname_container_1").text(checkReservation[checkReservation.length-1].fullname);
          $("#phoneNumber_container").text(checkReservation[checkReservation.length-1].phoneNumber);
    
          $("#water_container").text(billingThisMonth[billingThisMonth.length-1].water);
          $("#electricity_container").text(billingThisMonth[billingThisMonth.length-1].electricity);
          $("#rent_container").text(billingThisMonth[billingThisMonth.length-1].rent);
          $("#others_container").text(billingThisMonth[billingThisMonth.length-1].others);
    
          $("#dateAdded_container").text(billingThisMonth[billingThisMonth.length-1].dateAdded);
    
          $("#total_container").text(totalToPay);
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
  }

  
</script>

