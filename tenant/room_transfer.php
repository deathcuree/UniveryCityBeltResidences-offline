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
            <a href="javascript:void(0)">Room Transfer</a>
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
                  <h4 class="mb-3">Room Transfer Details</h4>
                  <form class="needs-validation" novalidate="" id="transfer_form">
                    <div class="row">

                      <h4 class="mb-3">To:</h4>
                      <div class="col-md-12 mb-3">
                        <label for="roomNo" class="form-label">New Room No.</label>
                        <input type="text" class="form-control" id="roomNo" name="roomNo" placeholder="" value="" required="" />
                        <div class="invalid-feedback">
                          Room Number is required.
                        </div>
                      </div>

                      <div class="col-md-12 order-lg-1">
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
                        Send Request
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

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../assets/js/common.js"></script>

<script type="text/javascript">
  // var j = jQuery.noConflict();
  var userSession = JSON.parse(localStorage.getItem("userData"));
  var checkReservation = ajaxPostLink({"action":"checkMyReservation","userID":userSession.id});
  var getMyRoomTransferReq;
  console.log(getMyRoomTransferReq);

  if (checkReservation.length <= 0 || checkReservation[checkReservation.length-1].isApprove == 2 || checkReservation[checkReservation.length-1].isApprove == 0) {
    
    Swal.fire({
      text: "You are not currently a tenant.",
      icon: 'error',
    }).then(function(){
      window.location.href = "index.php";
    })
  }else{
      getMyRoomTransferReq = ajaxPostLink({"action":"getMyRoomTransferReq","reservationID":checkReservation[0].id})
      
      if (getMyRoomTransferReq.length >= 1) {
        if (getMyRoomTransferReq[0].isApprove == 0) {
          Swal.fire({
            title: "You have a pending request",
            text: "Please wait for our admins to review your request",
            icon: 'error',
          }).then(function(){
            window.location.href = "index.php";
          })
        }else if (getMyRoomTransferReq[0].isApprove == 1){
          Swal.fire({
            title: "Request Approved!",
            text: "You may now move to room "+getMyRoomTransferReq[0].roomNo+". Screenshot this and show this to the personel for reference",
            icon: 'success',
          }).then(function(){
            ajaxPostLink({
              "action":"deleteTransferRequest","id":getMyRoomTransferReq[0].id});
            window.location.href = "index.php";
          })
        }
      }

  }


  $(document).ready(function(){

    $("#transfer_form").validate({
      errorClass: 'text-danger',
      rules: {
        roomNo: "required",
        note: "required",
      },
      submitHandler: function(form) {

        var formData = $(form).serializeArray();

        formData.push({
            'name' : "action",
            'value' : "requestRoomTransfer"
          },{
            'name' : "reservationID",
            'value' : checkReservation[0].id
          }
        );


        var res = ajaxPostLink(formData);
        console.log(formData);

        if (res.isProceed == false) {
          Swal.fire({
            text: res.msg,
            icon: 'error',
          })

          return;
        }

        Swal.fire(
          'Successfully requested your transfer',
          'Please wait for our admins to approve your request',
          'success'
        ).then(function(){
          window.location.href = "index.php";
        });

      }
    });
  })

</script>