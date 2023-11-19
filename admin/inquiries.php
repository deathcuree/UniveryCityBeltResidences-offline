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

        <div class="card">
            <div class="card-body">
                <h1>Inquiries/Contact us List</h1>

                <!--<button class="btn btn-primary" id="addNewRoom_btn">Add new room</button>-->

                <table id="tableContainer" class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>
                </table>
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
    var getAllInquiries = ajaxPostLink({
        "action": "getAllInquiries"
    });

    loadDatatable(getAllInquiries);
    console.log(getAllInquiries);

    $('#tableContainer').on('click', 'tbody tr', function() {
        selectedData = $('#tableContainer').DataTable().row($(this)).data();
        console.log(selectedData);

        if (selectedData != undefined) {
            var page = ajaxPostLink({
                'action': "loadPage",
                'pagename': 'admin/viewInquiries'
            });

            if (page.isProceed == true) {
                bootbox.dialog({
                    message: page.page,
                    size: 'large',
                    centerVertical: true,
                    closeButton: false,
                });
            } else {
                Swal.fire({
                    title: "System Error",
                    text: "Please contact system admin",
                    icon: 'error',
                })
            }

        }

    });

    function loadDatatable(dataSent) {
        $('#tableContainer').DataTable().destroy();

        $('#tableContainer').DataTable({
            data: dataSent,
            columns: [{
                    data: 'id'
                },
                {
                    data: 'name'
                },
                {
                    data: 'email'
                },
                {
                    data: 'phone'
                },
                {
                    data: 'dateAdded'
                },
            ],
            order: [
                [0, 'desc']
            ],
            autoWidth: false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            order: [
                [0, "desc"]
            ]
        });
    }
</script>