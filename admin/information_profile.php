<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!--********************************** CONTENT BODY START ***********************************-->
<section>
  <div class="content-body">
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
      <div class="container-xxl">
        <div class="card-body row clearfix">
          <div class="col-md-12">
            <div class="card border-0 mb-4 no-bg">
              <div class="card-header py-3 px-0 d-flex align-items-center justify-content-between border-bottom">
                <h3 class="fw-bold flex-fill mb-0">Tenant Profile</h3>
              </div>
            </div>
          </div>
        </div>
        <!-- Row End -->
        <div class="row g-3">
          <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card-body">
              <div class="teacher-card mb-3">
                <div class="d-flex teacher-fulldeatil">
                  <div class="profile-teacher pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                    <a href="#">
                      <img src="assets/images/lg/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                    </a>
                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                      <h6 class="mb-0 fw-bold d-block fs-6"></h6>
                      <span class="text-muted small">TENANT ID : T001</span>
                    </div>
                  </div>
                  <div class="teacher-info border-start ps-xl-4 ps-md-4 ps-sm-4 ps-4 w-100">
                    <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                      Grace Andaya
                    </h6>
                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Monthly</span>
                    <p class="mt-2 small">
                      Lorem ipsum dolor sit amet consectetur adipisicing
                      elit. Quisquam, animi?
                    </p>
                    <div class="row g-2 pt-2">
                      <div class="col-xl-5">
                        <div class="d-flex align-items-center">
                          <i class="fa-solid fa-phone"></i>
                          <span class="ms-2 small">0912344567 </span>
                        </div>
                      </div>
                      <div class="col-xl-5">
                        <div class="d-flex align-items-center">
                          <i class="fa-solid fa-envelope"></i>
                          <span class="ms-2 small">grace@gmail.com</span>
                        </div>
                      </div>
                      <div class="col-xl-5">
                        <div class="d-flex align-items-center">
                          <i class="fa-solid fa-cake-candles"></i>
                          <span class="ms-2 small">19/03/1980</span>
                        </div>
                      </div>
                      <div class="col-xl-5">
                        <div class="d-flex align-items-center">
                          <i class="fa-solid fa-location-pin"></i>
                          <span class="ms-2 small">Sta. Rita, Rose, Olongapo City</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h6 class="fw-bold py-3 mb-3">Tenant Information</h6>

            <div class="row g-3">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <div class="info-header">
                      <h6 class="mb-0 fw-bold">Tenant's Payments</h6>
                    </div>
                  </div>
                  <div class="card-body">
                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%">
                      <thead>
                        <tr>
                          <th>Tenant ID</th>
                          <th>Date Start</th>
                          <th>Date End</th>
                          <th>Details</th>
                          <th>Amount</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00001</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="monthly_rental.php">Monthly Rent</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-warning">Processing</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00002</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="monthly_electrical.php">Monthly Electrical</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-warning">Processing</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00003</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="monthly_water.php">Monthly Water Rent</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-warning">Processing</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00004</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="inquirers_security.php">Security Deposit</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-success">Paid</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00005</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="inquirers_utility.php">Utility Deposit</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-success">Paid</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00006</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="inquirers_bedsheet.php">Bedsheet Deposit</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-success">Paid</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <div class="info-header">
                      <h6 class="mb-0 fw-bold">Tenant's Invoice</h6>
                    </div>
                  </div>
                  <div class="card-body">
                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%">
                      <thead>
                        <tr>
                          <th>Tenant ID</th>
                          <th>Date Start</th>
                          <th>Date End</th>
                          <th>Details</th>
                          <th>Amount</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00001</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="projects.php">Monthly Rent</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-success">Paid</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00001</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="projects.php">Monthly Rent</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-success">Paid</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00001</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="projects.php">Monthly Rent</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-success">Paid</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="invoices.php" class="fw-bold text-secondary">#00001</a>
                          </td>
                          <td>10-01-2021</td>
                          <td>10-02-2021</td>
                          <td>
                            <a href="projects.php">Monthly Rent</a>
                          </td>

                          <td>₱3250</td>
                          <td>
                            <span class="badge bg-success">Paid</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Row End -->
          </div>
          <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card mb-3">
              <div class="card-header py-3">
                <h6 class="mb-0 fw-bold">Grace's Due for the Month</h6>
              </div>
              <div class="card-body">
                <div class="planned_task client_task">
                  <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                      <li class="dd-item mb-3">
                        <div class="dd-handle">
                          <div class="task-info d-flex align-items-center justify-content-between">
                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">
                              Monthly Rent
                            </h6>
                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                              <span class="badge bg-warning text-end mt-1">Pending</span>
                            </div>
                          </div>
                          <p class="py-2 mb-0">
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor
                            sit amet.
                          </p>
                          <div class="tikit-info row g-3 align-items-center">
                            <div class="col-sm"></div>
                            <div class="col-sm text-end">
                              <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small">
                                03/30/23
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dd-item mb-3">
                        <div class="dd-handle">
                          <div class="task-info d-flex align-items-center justify-content-between">
                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">
                              Monthly Electricity Payment
                            </h6>
                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                              <span class="badge bg-warning text-end mt-1">Pending</span>
                            </div>
                          </div>
                          <p class="py-2 mb-0">
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor
                            sit amet.
                          </p>
                          <div class="tikit-info row g-3 align-items-center">
                            <div class="col-sm"></div>
                            <div class="col-sm text-end">
                              <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small">
                                03/30/23
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dd-item mb-3">
                        <div class="dd-handle">
                          <div class="task-info d-flex align-items-center justify-content-between">
                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">
                              Monthly Water Payment
                            </h6>
                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                              <span class="badge bg-warning text-end mt-1">Pending</span>
                            </div>
                          </div>
                          <p class="py-2 mb-0">
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor
                            sit amet.
                          </p>
                          <div class="tikit-info row g-3 align-items-center">
                            <div class="col-sm"></div>
                            <div class="col-sm text-end">
                              <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small">
                                03/30/23
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row End -->
      </div>
    </div>

    <!-- Modal Members-->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold" id="addUserLabel">
              Employee Invitation
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="inviteby_email">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" />
                <button class="btn btn-dark" type="button" id="button-addon2">
                  Sent
                </button>
              </div>
            </div>
            <div class="members_list">
              <h6 class="fw-bold">Employee</h6>
              <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                <li class="list-group-item py-3 text-center text-md-start">
                  <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                    <div class="no-thumbnail mb-2 mb-md-0">
                      <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="" />
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                      <h6 class="mb-0 fw-bold">Rachel Carr(you)</h6>
                      <span class="text-muted">rachel.carr@gmail.com</span>
                    </div>
                    <div class="members-action">
                      <span class="members-role">Admin</span>
                      <div class="btn-group">
                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="icofont-ui-settings fs-6"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item py-3 text-center text-md-start">
                  <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                    <div class="no-thumbnail mb-2 mb-md-0">
                      <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="" />
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                      <h6 class="mb-0 fw-bold">
                        Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a>
                      </h6>
                      <span class="text-muted">lucas.baker@gmail.com</span>
                    </div>
                    <div class="members-action">
                      <div class="btn-group">
                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Members
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="icofont-check-circled"></i>

                              <span>All operations permission</span>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="fs-6 p-2 me-1"></i>
                              <span>Only Invite & manage team</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="icofont-ui-settings fs-6"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item py-3 text-center text-md-start">
                  <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                    <div class="no-thumbnail mb-2 mb-md-0">
                      <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="" />
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                      <h6 class="mb-0 fw-bold">Una Coleman</h6>
                      <span class="text-muted">una.coleman@gmail.com</span>
                    </div>
                    <div class="members-action">
                      <div class="btn-group">
                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Members
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="icofont-check-circled"></i>

                              <span>All operations permission</span>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="fs-6 p-2 me-1"></i>
                              <span>Only Invite & manage team</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="btn-group">
                        <div class="btn-group">
                          <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icofont-ui-settings fs-6"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
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