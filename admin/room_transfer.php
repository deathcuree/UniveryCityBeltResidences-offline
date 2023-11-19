<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!--********************************** CONTENT BODY START ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-3">
          <div class="card">
            <div class="card-body">
              <h1>Transfer Request Lists</h1>
              <small>Click on row to change status</small>

              <div class="table-responsive col-sm-12">
                <table id="tableContainer" class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Current RoomNo#</th>
                      <th>Transferring to RoomNo#</th>
                      <th>Note</th>
                      <th>Date Requested</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
  
  
  
  var selectedData;
  var getAllMaintenance = ajaxPostLink({"action":"getAllTransfer"});
  loadDatatable(getAllMaintenance);
  console.log(getAllMaintenance);

  $('#tableContainer').on('click', 'tbody tr', function () {
    selectedData = $('#tableContainer').DataTable().row($(this)).data();
    console.log(selectedData);
    
    if (selectedData!=undefined&&selectedData.isApprove==0) {

      Swal.fire({
        title: 'Are you sure you want to approve this request',
        showDenyButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: 'No',
      }).then((result) => {
        if (result.isConfirmed) {

          var res = ajaxPostLink({"action":"approveRequest","table":"room_transfer_tbl","id":selectedData.id});
          console.log(res);

          if (res.isProceed == false) {
            Swal.fire({
              text: res.msg,
              icon: 'error',
            })

            return;
          }

          Swal.fire(
            'Successfully Approved request',
            '',
            'success'
          ).then(function(){
            getAllMaintenance = ajaxPostLink({"action":"getAllTransfer"});
            loadDatatable(getAllMaintenance);
          });

        }else{
            var res = ajaxPostLink({"action":"disApproveRequest","table":"room_transfer_tbl","id":selectedData.id});
            console.log(res);
            
            if (res.isProceed == false) {
                Swal.fire({
                  text: res.msg,
                  icon: 'error',
                })
                return;
            }
            
            Swal.fire(
                'Successfully Disapproved request',
                '',
                'success'
            ).then(function(){
                getAllMaintenance = ajaxPostLink({"action":"getAllTransfer"});
                loadDatatable(getAllMaintenance);
            });
        }
      });

    }
      
  });


  function loadDatatable(dataSent){
    $('#tableContainer').DataTable().destroy();

    $('#tableContainer').DataTable({
      data: dataSent,
      columns: [
        { data:'id'},
        { data:'fullname'},
        { data:'currentRoom'},
        { data:'roomNo'},
        { data:'note'},
        { data:'dateAdded'},      
        { data:'isApprove'},    
      ],
      order: [[0, 'desc']],
      autoWidth: false,
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": false,
      "bAutoWidth": false,
      "createdRow": function( row, data, dataIndex){
        if (data['isApprove'] == "0") {
          $(row).find("td:eq(6)").text("For Approval").addClass("text-warning")
        }else if (data['isApprove'] == "1"){
          $(row).find("td:eq(6)").text("Approved").addClass("text-success")
        }else if (data['isApprove'] == "2"){
          $(row).find("td:eq(6)").text("Completed").addClass("text-primary")
        }else if (data['isApprove'] == "3"){
          $(row).find("td:eq(6)").text("Disapproved").addClass("text-danger")
        }
      },order: [[0,"desc"]]
    });
  }

</script>