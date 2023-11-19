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
            <a href="javascript:void(0)">Room Details</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Rooms</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 order-lg-2 mb-4">
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                      <img class="img-fluid" src="./images/room1.jpg" alt="room" />
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="second">
                      <img class="img-fluid" src="./images/room1.jpg" alt="" />
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="third">
                      <img class="img-fluid" src="./images/room1.jpg" alt="" />
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="for">
                      <img class="img-fluid" src="./images/room1.jpg" alt="" />
                    </div>
                  </div>

                  <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                    <!-- Nav tabs -->
                    <ul class="nav slide-item-list mt-3" role="tablist">
                      <li role="presentation" class="show">
                        <a href="#first" role="tab" data-bs-toggle="tab">
                          <img class="img-fluid" src="./images/room1.jpg" alt="" width="50" />
                        </a>
                      </li>
                      <li role="presentation">
                        <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="./images/room1.jpg" alt="" width="50" /></a>
                      </li>
                      <li role="presentation">
                        <a href="#third" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="./images/room1.jpg" alt="" width="50" /></a>
                      </li>
                      <li role="presentation">
                        <a href="#for" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="./images/room1.jpg" alt="" width="50" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="mt-2 mx-auto">
                    <div class="input-control">
                      <input type="file" name="picture" accept="image/*" />
                    </div>
                  </div>
                </div>
                <!--Tab slider End-->
                <div class="col-lg-8 order-lg-1">
                  <h4 class="mb-3">Room Details</h4>
                  <form class="needs-validation" novalidate="">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Type of Room</label>
                        <select class="default-select form-control wide w-100">
                          <option selected="">Choose...</option>
                          <option value="1">Bedspace</option>
                          <option value="2">Room</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid type of room.
                        </div>
                      </div>
                      <div class="invalid-feedback">
                        Type of room is required
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Duration of Stay</label>
                        <select class="default-select form-control wide w-100">
                          <option selected="">Choose...</option>
                          <option value="1">Transient</option>
                          <option value="2">Monthly</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid duration of stay.
                        </div>
                      </div>
                      <div class="invalid-feedback">
                        Duration of stay is required
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Price</label>
                        <select class="default-select form-control wide w-100">
                          <option selected="">Choose...</option>
                          <option value="1">&#8369; 2,000.00</option>
                          <option value="2">&#8369; 8,000.00</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a price.
                        </div>
                      </div>
                      <div class="invalid-feedback">
                        Price is required
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Availability</label>
                        <select class="default-select form-control wide w-100">
                          <option selected="">Choose...</option>
                          <option value="1">Available</option>
                          <option value="2">Reserved</option>
                          <option value="3">Occupied</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select the availability of the room.
                        </div>
                      </div>
                      <div class="invalid-feedback">
                        Please select the availability of the room
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Room No.</label>
                        <select class="default-select form-control wide w-100">
                          <option selected="">Choose...</option>
                          <option value="1">201A</option>
                          <option value="2">201B</option>
                          <option value="3">201C</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select the room number.
                        </div>
                      </div>
                      <div class="invalid-feedback">
                        Please select the room number
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Bed No.</label>
                        <select class="default-select form-control wide w-100">
                          <option selected="">Choose...</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select the bed number of the room.
                        </div>
                      </div>
                      <div class="invalid-feedback">
                        Please select the bed number of the room
                      </div>
                      <div class="col-lg-8 order-lg-1">
                        <label class="form-label">Note</label>
                        <div class="basic-form">
                          <form>
                            <div class="mb-3">
                              <textarea class="form-control px-4" rows="4" id="comment"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="invalid-feedback">
                          Please put a note.
                        </div>
                      </div>
                      <div class="invalid-feedback">
                        Please put a note
                      </div>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                      Update Room Maintenance
                    </button>
                    <button class="btn btn-danger mt-4 btn-lg btn-block" type="submit">
                      Cancel
                    </button>
                  </form>
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