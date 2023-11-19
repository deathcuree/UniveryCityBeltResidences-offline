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
            <a href="javascript:void(0)">Biometrics Tenants</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Biometrics</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm mb-0 table-striped">
                  <thead>
                    <tr>
                      <th class="pe-3">
                        <div class="form-check custom-checkbox mx-2">
                          <input type="checkbox" class="form-check-input" id="checkAll" />
                          <label class="form-check-label" for="checkAll"></label>
                        </div>
                      </th>
                      <th>Admin Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th class="ps-5" style="min-width: 200px">
                        Position
                      </th>
                      <th>Date Added</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id="customers">
                    <tr class="btn-reveal-trigger">
                      <td class="py-2">
                        <div class="form-check custom-checkbox mx-2">
                          <input type="checkbox" class="form-check-input" id="checkbox1" />
                          <label class="form-check-label" for="checkbox1"></label>
                        </div>
                      </td>
                      <td class="py-3">
                        <a href="#">
                          <div class="media d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="">
                                <img class="rounded-circle img-fluid" src="images/avatar/5.png" width="30" alt="" />
                              </div>
                            </div>
                            <div class="media-body">
                              <h5 class="mb-0 fs--1">Ricky Antony</h5>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td class="py-2">
                        <a href="mailto:ricky@example.com">info@example.com</a>
                      </td>
                      <td class="py-2">
                        <a href="">09123456789</a>
                      </td>
                      <td class="py-2 ps-5">Admin</td>
                      <td class="py-2">30/03/2018</td>
                      <td class="py-2 text-end">
                        <div class="dropdown">
                          <button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                              </g>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end border py-0">
                            <div class="py-2">
                              <a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr class="btn-reveal-trigger">
                      <td class="py-2">
                        <div class="form-check custom-checkbox mx-2">
                          <input type="checkbox" class="form-check-input" id="checkbox2" />
                          <label class="form-check-label" for="checkbox2"></label>
                        </div>
                      </td>
                      <td class="py-3">
                        <a href="#">
                          <div class="media d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle img-fluid" src="images/avatar/1.png" alt="" width="30" />
                            </div>
                            <div class="media-body">
                              <h5 class="mb-0 fs--1">Emma Watson</h5>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td class="py-2">
                        <a href="mailto:emma@example.com">info@example.com</a>
                      </td>
                      <td class="py-2">
                        <a href="">09876543212</a>
                      </td>
                      <td class="py-2 ps-5">Receptionist</td>
                      <td class="py-2">11/07/2017</td>
                      <td class="py-2 text-end">
                        <div class="dropdown">
                          <button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                              </g>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end border py-0">
                            <div class="py-2">
                              <a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2">
                        <div class="form-check custom-checkbox mx-2">
                          <input type="checkbox" class="form-check-input" id="checkbox3" />
                          <label class="form-check-label" for="checkbox3"></label>
                        </div>
                      </td>
                      <td class="py-3">
                        <a href="#">
                          <div class="media d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="">
                                <img class="rounded-circle img-fluid" src="images/avatar/5.png" width="30" alt="" />
                              </div>
                            </div>
                            <div class="media-body">
                              <h5 class="mb-0 fs--1">Rowen Atkinson</h5>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td class="py-2">
                        <a href="mailto:rown@example.com">info@example.com</a>
                      </td>
                      <td class="py-2">
                        <a href="">09345687968</a>
                      </td>
                      <td class="py-2 ps-5">Cashier</td>
                      <td class="py-2">05/04/2016</td>
                      <td class="py-2 text-end">
                        <div class="dropdown">
                          <button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                              </g>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end border py-0">
                            <div class="py-2">
                              <a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2">
                        <div class="form-check custom-checkbox mx-2">
                          <input type="checkbox" class="form-check-input" id="checkbox4" />
                          <label class="form-check-label" for="checkbox4"></label>
                        </div>
                      </td>
                      <td class="py-3">
                        <a href="#">
                          <div class="media d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle img-fluid" src="images/avatar/1.png" alt="" width="30" />
                            </div>
                            <div class="media-body">
                              <h5 class="mb-0 fs--1">Antony Hopkins</h5>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td class="py-2">
                        <a href="mailto:antony@example.com">info@example.com</a>
                      </td>
                      <td class="py-2">
                        <a href="">09475647876</a>
                      </td>
                      <td class="py-2 ps-5">Transient</td>
                      <td class="py-2">05/04/2018</td>
                      <td class="py-2 text-end">
                        <div class="dropdown">
                          <button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                              </g>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end border py-0">
                            <div class="py-2">
                              <a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
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
</section>
<!--********************************** CONTENT BODY END ***********************************-->

<?php
require_once 'includes/footer.php';
?>