<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<section>
  <div class="content-body">
    <div class="container-fluid">
      <div class="row page-titles">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Profile</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Information</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
              <div class="photo-content">
                <div class="cover-photo rounded"></div>
              </div>
              <div class="profile-info">
                <div class="profile-photo">
                  <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" />
                </div>
                <div class="profile-details">
                  <div class="profile-name px-3 pt-2">
                    <h4 class="text-primary mb-0">Grace Andaya</h4>
                    <p>Tenant</p>
                  </div>
                  <div class="profile-email px-2 pt-2">
                    <h4 class="text-muted mb-0">info@example.com</h4>
                    <p>Email</p>
                  </div>
                  <div class="dropdown ms-auto">
                    <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24"></rect>
                          <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                          <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                          <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                        </g>
                      </svg></a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li class="dropdown-item">
                        <i class="fa fa-user-circle text-primary me-2"></i>
                        Edit
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4">
          <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-body">
                  <div class="profile-statistics">
                    <div class="text-center">
                      <div class="row">
                        <div class="col">
                          <h3 class="m-b-0">&#8369; 3000.00</h3>
                          <span>Monthly Rent</span>
                        </div>
                        <div class="col">
                          <h3 class="m-b-0">&#8369; 500.00</h3>
                          <span>Monthly Electricity Payment </span>
                        </div>
                        <div class="col">
                          <h3 class="m-b-0">&#8369; 300.00</h3>
                          <span>Monthly Water Payment</span>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="sendMessageModal">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Send Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                          <div class="modal-body">
                            <form class="comment-form">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="mb-3">
                                    <label class="text-black font-w600 form-label">Name
                                      <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="Author" name="Author" placeholder="Author" />
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="mb-3">
                                    <label class="text-black font-w600 form-label">Email
                                      <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="Email" placeholder="Email" name="Email" />
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label class="text-black font-w600 form-label">Comment</label>
                                    <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="mb-3 mb-0">
                                    <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit" />
                                  </div>
                                </div>
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
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="profile-tab">
                <div class="custom-tab-1">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a href="#about-me" data-bs-toggle="tab" class="nav-link active show">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Setting</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div id="about-me" class="tab-pane fade active show">
                      <div class="profile-personal-info mt-5">
                        <h4 class="text-primary mb-4">
                          Personal Information
                        </h4>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              First Name <span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>Grace </span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Middle Initial
                              <span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>S.</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Last Name <span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>Andaya</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Gender<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>Female</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Phone Number<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>09123456789</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Email Address<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>grace@mail.com</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Birthday<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>October 1, 2008</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Age <span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>27</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Type of Tenant<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>Student</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Parent/Guardian Name<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>Bea</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Relationship<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>Mother</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Parent's Contact Number<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>09876543211</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Type of Location<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>School</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Name of School/Company<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>AURA</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Type of Tenant<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>Transient</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              No. of person/s who will stay:<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>1</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              No. of rooms to be occupied<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>1</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Date Check In<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>02-02-0202</span>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-sm-3 col-5">
                            <h5 class="f-w-500">
                              Date Check Out<span class="pull-end">:</span>
                            </h5>
                          </div>
                          <div class="col-sm-9 col-7">
                            <span>10-02-0202</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="profile-settings" class="tab-pane fade">
                      <div class="pt-3">
                        <div class="settings-form">
                          <h4 class="text-primary">Account Setting</h4>
                          <form>
                            <div class="row">
                              <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" placeholder="Email" class="form-control" />
                              </div>
                              <div class="mb-3 col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" placeholder="Password" class="form-control" />
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-check custom-checkbox">
                                <input type="checkbox" class="form-check-input" id="gridCheck" />
                                <label class="form-check-label form-label" for="gridCheck">
                                  Check me out</label>
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">
                              Save
                            </button>
                            <button class="btn btn-danger" type="cancel">
                              Cancel
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="replyModal">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Post Reply</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <textarea class="form-control" rows="4">
Message</textarea>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                          btn-close
                        </button>
                        <button type="button" class="btn btn-primary">
                          Reply
                        </button>
                      </div>
                    </div>
                  </div>
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