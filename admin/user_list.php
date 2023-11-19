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
              <h1>User Lists</h1>

              <div class="table-responsive col-sm-12">
                <table id="tableContainer" class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Bday</th>
                      <th>Gender</th>
                      <th>Date Added</th>
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
  var getAllReservations = ajaxPostLink({"action":"getAllClientUsers"});

  loadDatatable(getAllReservations);
  console.log(getAllReservations);

  function loadDatatable(dataSent){
    $('#tableContainer').DataTable().destroy();

    $('#tableContainer').DataTable({
      data: dataSent,
      columns: [
        { data:'id'},
        { data:'fullname'},
        { data:'email'},
        { data:'phoneNumber'},  
        { data:'bday'},
        { data:'gender'},
        { data:'dateAdded'},    
      ],
      order: [[0, 'desc']],
      autoWidth: false,
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": false,
      "bAutoWidth": false,
      order: [[0,"desc"]]
    });
  }

</script>