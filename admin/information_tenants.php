<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!--********************************** CONTENT BODY START ***********************************-->
<section>
  <div class="content-body">
    <div class="body d-flex py-lg-3 py-md-2">
      <div class="container-xxl">
        <div class="row clearfix">
          <div class="col-md-12">
            <div class="card border-0 mb-4 no-bg">
              <div class="card-header py-3 px-3 d-flex align-items-center justify-content-between border-bottom">
                <h3 class="fw-bold flex-fill mb-0 px-1">Tenants</h3>
                <div class="col-auto d-flex">
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                      Status
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                      <li>
                        <a class="dropdown-item" href="#">Transient</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Monthly</a>
                      </li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-secondary ms-1" data-bs-toggle="modal" data-bs-target="#createproject">
                    <i class="icofont-plus-circle me-2 fs-6"></i>Add
                    Tenant
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row End -->
        <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">CEO</h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                    AgilSoft Tech
                  </h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Ryan Ogden</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices.Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar2.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">
                      Manager
                    </h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                    Macrosoft
                  </h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Matt Gibson</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices.Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar8.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">CEO</h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">Google</h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Lauren Reid</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices.Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-2">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar10.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">CEO</h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                    Pixelwibes
                  </h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Peter Vance</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices.Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar11.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">
                      Manager
                    </h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                    Deltasoft Tech
                  </h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Una Murray</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices.Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar12.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">CEO</h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                    Design Tech
                  </h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Paul Grant</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices,Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar5.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">
                      Manager
                    </h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                    VerinSoft
                  </h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Amanda Russell</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar6.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">CEO</h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">
                    Crestcoder
                  </h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Diane Vaughan</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar7.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">
                      Manager
                    </h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">Rocobend</h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Piers Churchill</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-1">Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card teacher-card">
              <div class="card-body d-flex">
                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                  <img src="assets/images/lg/avatar1.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" />
                  <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                    <h6 class="mb-0 fw-bold d-block fs-6 mt-2">CEO</h6>
                    <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject">
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject">
                        <i class="fa-solid fa-trash text-danger"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                  <h6 class="mb-0 mt-2 fw-bold d-block fs-6">Google</h6>
                  <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Lauren Reid</span>
                  <div class="video-setting-icon mt-3 pt-3 border-top">
                    <p>
                      Vestibulum ante ipsum primis in faucibus orci luctus
                      et ultrices.Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices
                    </p>
                  </div>
                  <div class="d-flex flex-wrap align-items-center ct-btn-set">
                    <a href="message.php" class="btn btn-primary btn-sm mt-1 me-1">Chat</a>
                    <a href="information_profile.php" class="btn btn-secondary btn-sm mt-2">Profile</a>
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