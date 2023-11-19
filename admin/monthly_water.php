<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!--********************************** CONTENT BODY START ***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="javascript:void(0)">Monthly Water Payment</a>
        </li>
        <li class="breadcrumb-item">
          <a href="javascript:void(0)">Transactions</a>
        </li>
      </ol>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Monthly Water Payment</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-responsive-md">
                <thead>
                  <tr>
                    <th style="width: 80px"><strong>#</strong></th>
                    <th><strong>Date</strong></th>
                    <th><strong>First Name</strong></th>
                    <th><strong>Gender</strong></th>
                    <th><strong>Type of Tenant</strong></th>
                    <th><strong>Type of Occupant</strong></th>
                    <th><strong>Payment</strong></th>
                    <th><strong>MOP</strong></th>
                    <th><strong>Status</strong></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>01</strong></td>
                    <td>02/01/23</td>
                    <td>Bobby</td>
                    <td>Male</td>
                    <td>Worker</td>
                    <td>Monthly</td>
                    <td>₱ 1,000.00</td>
                    <td>GCash</td>
                    <td>
                      <span class="badge light badge-success">Successful</span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                          <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"></rect>
                              <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                            </g>
                          </svg>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>02</strong></td>
                    <td>02/01/23</td>
                    <td>Bobby</td>
                    <td>Male</td>
                    <td>Student</td>
                    <td>Transient</td>
                    <td>₱ 1,000.00</td>
                    <td>GCash</td>
                    <td>
                      <span class="badge light badge-danger">Canceled</span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
                          <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"></rect>
                              <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                            </g>
                          </svg>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>03</strong></td>
                    <td>02/01/23</td>
                    <td>Bobby</td>
                    <td>Male</td>
                    <td>Worker</td>
                    <td>Monthly</td>
                    <td>₱ 1,000.00</td>
                    <td>GCash</td>
                    <td>
                      <span class="badge light badge-warning">Pending</span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn btn-warning light sharp" data-bs-toggle="dropdown">
                          <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"></rect>
                              <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                            </g>
                          </svg>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
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
<!--********************************** CONTENT BODY END ***********************************-->

<?php
require_once 'includes/footer.php';
?>