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
              <h1>Transaction Billing Report</h1>

              <table id="tableContainer" class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Room No#</th>
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
  var reservations = ajaxPostLink({"action":"getAllReservationsWithMonthlyPosting"});
  var d = new Date();
  var month = d.getMonth()+1;

  loadDatatable(reservations);
  console.log(reservations);

  $('#tableContainer').on('click', 'tbody tr', function () {
    selectedData = $('#tableContainer').DataTable().row($(this)).data();
    console.log(selectedData);
    
    if (selectedData!=undefined) {
      if (selectedData.monthPosted == month) {
        Swal.fire({
          title:"Already Posted for this Month",
          icon: 'error',
        });

        return;
      }
      var page = ajaxPostLink({'action':"loadPage",'pagename':'postMonthlyBill'});

      if (page.isProceed==true) {
        bootbox.dialog({
          message: page.page,
          size: 'large',
          centerVertical: true,
          closeButton: false,
        });
      }else{
        Swal.fire({
          title:"System Error",
          text: "Please contact system admin",
          icon: 'error',
        })
      }
      
    }
      
  });


  function loadDatatable(dataSent){
    $('#tableContainer').DataTable().destroy();

    $('#tableContainer').DataTable({
      data: dataSent,
      columns: [
        { data:'reserveID'},
        { data:'fullname'},
        { data:'roomNo'}, 
        { data:'monthlyID'},    
      ],
      order: [[0, 'desc']],
      autoWidth: false,
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": false,
      "bAutoWidth": false,
      "createdRow": function( row, data, dataIndex){


        if (data['monthPosted'] == month) {
          $(row).find("td:eq(3)").text("For Payment").addClass("text-danger")
        }else{
          $(row).find("td:eq(3)").text("For Billing").addClass("text-warning")
        }

        console.log(data['paymentType']);

        if (data['monthlyPaymentType'] != null && data['monthPosted'] == month) {
          $(row).find("td:eq(3)").text("Paid").addClass("text-success").removeClass("text-warning text-danger");
        }

      },order: [[0,"desc"]]
    });
  }

</script>