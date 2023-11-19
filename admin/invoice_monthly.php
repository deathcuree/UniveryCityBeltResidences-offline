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
          <a href="javascript:void(0)">Monthly Payments Invoice</a>
        </li>
        <li class="breadcrumb-item">
          <a href="javascript:void(0)">Invoices</a>
        </li>
      </ol>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="container-xxl">
          <div class="row align-items-center">
            <div class="border-0 mb-4">
              <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0 py-3 pb-2">
                  Monthly Payments Invoice
                </h3>
                <div class="col-auto py-2 w-sm-100">
                  <ul class="nav nav-tabs tab-body-header rounded invoice-set" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#Invoice-list" role="tab">Invoice List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#Invoice-Simple" role="tab">Invoice</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#Invoice-Email" role="tab">Email invoice</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Row end  -->

          <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="Invoice-list">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                      <div class="mb-3">
                        <div class="card__body d-sm-flex justify-content-between">
                          <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="./images/xs/avatar1.jpg" alt="" />
                            <div class="flex-fill ms-3 text-truncate">
                              <h6 class="d-flex justify-content-between mb-0">
                                <span>Ryan MacLeod</span>
                              </h6>
                              <span class="text-muted">Monthly Rent Payment</span>
                            </div>
                          </a>
                          <div class="text-end d-none d-md-block">
                            <p class="mb-1">
                              <i class="icofont-location-pin ps-1"></i>
                              Room 1
                            </p>
                            <span class="text-muted"><i class="icofont-money ps-1"></i>₱
                              1,000.00</span>
                          </div>
                        </div>
                        <div class="card-footer justify-content-between d-flex align-items-center">
                          <div class="d-none d-md-block">
                            <strong>Paid on:</strong>
                            <span>23 Feb, 2021</span>
                          </div>
                          <div class="card-hover-show">
                            <a class="btn btn-sm btn-white border lift" href="#">Edit</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="card-body d-sm-flex justify-content-between">
                          <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="./images/xs/avatar2.jpg" alt="" />
                            <div class="flex-fill ms-3 text-truncate">
                              <h6 class="d-flex justify-content-between mb-0">
                                <span>Penelope Stewart</span>
                              </h6>
                              <span class="text-muted">Monthly Electrical Payment</span>
                            </div>
                          </a>
                          <div class="text-end d-none d-md-block">
                            <p class="mb-1">
                              <i class="icofont-location-pin ps-1"></i>
                              Room 2
                            </p>
                            <span class="text-muted"><i class="icofont-money ps-1"></i>₱
                              1,000.00</span>
                          </div>
                        </div>
                        <div class="card-footer justify-content-between d-flex align-items-center">
                          <div class="d-none d-md-block">
                            <strong>Paid on:</strong>
                            <span>14 Apr, 2021</span>
                          </div>
                          <div class="card-hover-show">
                            <a class="btn btn-sm btn-white border lift" href="#">Edit</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="card-body d-sm-flex justify-content-between">
                          <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="./images/xs/avatar3.jpg" alt="" />
                            <div class="flex-fill ms-3 text-truncate">
                              <h6 class="d-flex justify-content-between mb-0">
                                <span>Diane Slater</span>
                              </h6>
                              <span class="text-muted">Monthly Water Payment</span>
                            </div>
                          </a>
                          <div class="text-end d-none d-md-block">
                            <p class="mb-1">
                              <i class="icofont-location-pin ps-1"></i>
                              Room 3
                            </p>
                            <span class="text-muted"><i class="icofont-money ps-1"></i>₱
                              1,000.00</span>
                          </div>
                        </div>
                        <div class="card-footer justify-content-between d-flex align-items-center">
                          <div class="d-none d-md-block">
                            <strong>Paid on:</strong>
                            <span>16 Mar, 2021</span>
                          </div>
                          <div class="card-hover-show">
                            <a class="btn btn-sm btn-white border lift" href="#">Edit</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="card-body d-sm-flex justify-content-between">
                          <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="./images/xs/avatar4.jpg" alt="" />
                            <div class="flex-fill ms-3 text-truncate">
                              <h6 class="d-flex justify-content-between mb-0">
                                <span>Amy Mills</span>
                              </h6>
                              <span class="text-muted">Monthly Rent Payment</span>
                            </div>
                          </a>
                          <div class="text-end d-none d-md-block">
                            <p class="mb-1">
                              <i class="icofont-location-pin ps-1"></i>
                              Room 4
                            </p>
                            <span class="text-muted"><i class="icofont-money ps-1"></i> ₱
                              1,000.00</span>
                          </div>
                        </div>
                        <div class="card-footer justify-content-between d-flex align-items-center">
                          <div class="d-none d-md-block">
                            <strong>Paid on:</strong>
                            <span>17 Mar, 2021</span>
                          </div>
                          <div class="card-hover-show">
                            <a class="btn btn-sm btn-white border lift" href="#">Edit</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="card-body d-sm-flex justify-content-between">
                          <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="./images/xs/avatar5.jpg" alt="" />
                            <div class="flex-fill ms-3 text-truncate">
                              <h6 class="d-flex justify-content-between mb-0">
                                <span>Tim Mitchell</span>
                              </h6>
                              <span class="text-muted">Monthly Electric Payment</span>
                            </div>
                          </a>
                          <div class="text-end d-none d-md-block">
                            <p class="mb-1">
                              <i class="icofont-location-pin ps-1"></i>
                              Room 5
                            </p>
                            <span class="text-muted"><i class="icofont-money ps-1"></i>₱
                              1,000.00</span>
                          </div>
                        </div>
                        <div class="card-footer justify-content-between d-flex align-items-center">
                          <div class="d-none d-md-block">
                            <strong>Paid on:</strong>
                            <span>12 Feb, 2021</span>
                          </div>
                          <div class="card-hover-show">
                            <a class="btn btn-sm btn-white border lift" href="#">Edit</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="card-body d-sm-flex justify-content-between">
                          <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="./images/xs/avatar6.jpg" alt="" />
                            <div class="flex-fill ms-3 text-truncate">
                              <h6 class="d-flex justify-content-between mb-0">
                                <span>Brian Swader</span>
                              </h6>
                              <span class="text-muted">Monthly Rent Payment</span>
                            </div>
                          </a>
                          <div class="text-end d-none d-md-block">
                            <p class="mb-1">
                              <i class="icofont-location-pin ps-1"></i>
                              Room 6
                            </p>
                            <span class="text-muted"><i class="icofont-money ps-1"></i>₱
                              1,000.00</span>
                          </div>
                        </div>
                        <div class="card-footer justify-content-between d-flex align-items-center">
                          <div class="d-none d-md-block">
                            <strong>Paid on:</strong>
                            <span>18 Feb, 2020</span>
                          </div>
                          <div class="card-hover-show">
                            <a class="btn btn-sm btn-white border lift" href="#">Edit</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                            <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                      <nav aria-label="Page navigation">
                        <ul class="pagination mt-4">
                          <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                  <!-- Row end  -->
                </div>
                <!-- tab end  -->
                <div class="tab-pane fade" id="Invoice-Simple">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                      <div class="p-xl-5 p-lg-4 p-0">
                        <div class="card-body">
                          <div class="mb-3 pb-3 border-bottom">
                            Invoice
                            <strong>01/Nov/2020</strong>
                            <span class="float-end">
                              <strong>Status:</strong> Pending</span>
                          </div>

                          <div class="row mb-4">
                            <div class="col-sm-6">
                              <h6 class="mb-3">From:</h6>
                              <div><strong>Jayrold</strong></div>
                              <div>
                                1985 C.M. Recto Ave., cor. S.H. Loyola
                                St., Sampaloc, Manila
                              </div>
                              <div>Email: ucbr@gmail.com</div>
                              <div>Phone: 09123456789</div>
                            </div>

                            <div class="col-sm-6">
                              <h6 class="mb-3">To:</h6>
                              <div><strong>Ryan</strong></div>
                              <div>01 Sta Rita Rd, Olongapo City</div>
                              <div>Email: ryan@gmail.com</div>
                              <div>Phone: 09123456789</div>
                            </div>
                          </div>
                          <!-- Row end  -->

                          <div class="table-responsive-sm">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th class="text-center">Tenant No.</th>
                                  <th class="text-center">Room</th>
                                  <th class="text-center">Name</th>
                                  <th class="text-center">Details</th>
                                  <th class="text-end">Amount</th>
                                  <th class="text-center">Date Paid</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">001</td>
                                  <td class="text-center">1</td>
                                  <td class="text-center">Ryan</td>
                                  <td class="text-center">
                                    Monthly Rent Payment
                                  </td>
                                  <td class="text-center">₱ 3,000.00</td>
                                  <td class="text-center">02/02/23</td>
                                </tr>
                                <tr>
                                  <td class="text-center">001</td>
                                  <td class="text-center">1</td>
                                  <td class="text-center">Ryan</td>
                                  <td class="text-center">
                                    Monthly Electrical Payment
                                  </td>
                                  <td class="text-center">₱ 500.00</td>
                                  <td class="text-center">02/02/23</td>
                                </tr>
                                <tr>
                                  <td class="text-center">001</td>
                                  <td class="text-center">1</td>
                                  <td class="text-center">Ryan</td>
                                  <td class="text-center">
                                    Monthly Water Payment
                                  </td>
                                  <td class="text-center">₱ 200.00</td>
                                  <td class="text-center">02/02/23</td>
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
                                    <td>
                                      <strong>Discount/Promo</strong>
                                    </td>
                                    <td class="text-end">N/A</td>
                                  </tr>
                                  <tr>
                                    <td><strong>Total</strong></td>
                                    <td class="text-end">
                                      <strong>₱ 3,700.00</strong>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!-- Row end  -->

                          <div class="row">
                            <div class="col-lg-12">
                              <h6>Terms &amp; Conditions</h6>
                              <p class="text-muted">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Suscipit, dignissimos
                                ex? Quos, officiis sed, dolorem explicabo
                                id nisi tenetur dolorum non provident ab
                                et cupiditate architecto beatae omnis
                                debitis cum.
                              </p>
                            </div>
                            <div class="col-lg-12 text-end">
                              <button type="button" class="btn btn-outline-secondary btn-sm my-1">
                                <i class="fa fa-print"></i> Print
                              </button>
                              <button type="button" class="btn btn-primary btn-sm my-1">
                                <i class="fa fa-paper-plane-o"></i> Send
                                Invoice
                              </button>
                            </div>
                          </div>
                          <!-- Row end  -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Row end  -->
                </div>
                <!-- tab end  -->
                <div class="tab-pane fade" id="Invoice-Email">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                      <div class="d-flex justify-content-center">
                        <table class="p-5">
                          <tr>
                            <td></td>
                            <td class="text-center">
                              <table>
                                <tr>
                                  <td class="text-center">
                                    <h2>₱ 3,700.00 Paid</h2>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-center py-2">
                                    <h4 class="mb-0">
                                      Monthly Payments Confirmation
                                    </h4>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="pt-2 pb-4">
                                    <table>
                                      <tr>
                                        <td>
                                          <strong>UCBR</strong>
                                          1985 C.M. Recto Ave., cor. S.H.
                                          Loyola St., Sampaloc, Manila.<br />
                                          Email: ucbr@gmail.com<br />
                                          Phone: 09123456789<br />
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-2">
                                          <table class="table table-bordered">
                                            <tr>
                                              <td class="text-start">
                                                Monthly Rent Payment
                                              </td>
                                              <td class="text-end">
                                                ₱ 3,000.00
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="text-start">
                                                Monthly Electrical Payment
                                              </td>
                                              <td class="text-end">
                                                ₱ 500.00
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="text-start">
                                                Monthly Water Payment
                                              </td>

                                              <td class="text-end">
                                                ₱ 200.00
                                              </td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                              <td class="text-start w-80">
                                                <strong>Total</strong>
                                              </td>
                                              <td class="text-end fw-bold">
                                                ₱ 3,700.00
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="pt-2 pb-2 text-center">
                                    <a href="#">View in browser</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="p-0 text-center">
                                    1985 C.M. Recto Ave., cor. S.H. Loyola
                                    St., Sampaloc, Manila
                                  </td>
                                </tr>
                              </table>
                              <table class="mt-3 text-center w-100">
                                <tr>
                                  <td class="aligncenter content-block">
                                    Questions? Email
                                    <a href="mailto:">ucbr@gmail.com</a>
                                  </td>
                                </tr>
                              </table>
                              <button type="button" class="btn btn-primary btn-sm my-4">
                                <i class="fa fa-paper-plane-o"></i>
                                Send Email
                              </button>
                            </td>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- Row end  -->
                </div>
                <!-- tab end  -->
              </div>
            </div>
          </div>
          <!-- Row end  -->
        </div>
      </div>
    </div>
  </div>
</div>
<!--********************************** CONTENT BODY END ***********************************-->

<?php
require_once 'includes/footer.php';
?>