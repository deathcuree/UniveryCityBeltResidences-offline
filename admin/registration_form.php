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
            <a href="javascript:void(0)">Reservation Form</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Registration</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="card mb-3">
        <div class="card-body">
          <form>
            <div class="row g-3 align-items-center">
              <!-- Card -->
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Date Reserved</h4>
                </div>
                <div class="card-body">
                  <p class="mb-1">Default picker</p>
                  <input name="datepicker" class="datepicker-default form-control" id="datepicker" />
                </div>
                <h3 class="text-center">
                  JOIN THE UCBR COMMUNITY FACEBOOK PAGE TO GET THE LATEST
                  PROMOS DISCOUNTS AND IMPORTANT ANNOUNCEMENTS
                </h3>
              </div>
              <!-- Card -->
              <h5>Tenant Basic Information</h5>
              <div class="col-md-12">
                <label for="formFileMultiple" class="form-label">
                  File Upload</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple required />
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" required />
              </div>
              <div class="col-md-6">
                <label for="middle" class="form-label">Middle Inital</label>
                <input type="text" class="form-control" id="middle" required />
              </div>
              <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" required />
              </div>
              <div class="col-md-6">
                <label for="fbUsername" class="form-label">Facebook Username</label>
                <div class="input-group">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="fbUsername" placeholder="Facebook Username" required />
                  <div class="invalid-feedback" style="width: 100%">
                    Your username is required.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="fbEmail" class="form-label">Facebook Email Address:</label>
                <div class="input-group">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="fbEmail" placeholder="Facebook Email Address" required="" />
                  <div class="invalid-feedback" style="width: 100%">
                    Your username is required.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Select your network:</label>
                <select class="form-control wide">
                  <option>Smart</option>
                  <option>Globe</option>
                  <option>Sun</option>
                  <option>Talk and Text</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="phonenumber" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Gender</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked />
                      <label class="form-check-label" for="exampleRadios11">
                        Male
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2" />
                      <label class="form-check-label" for="exampleRadios22">
                        Female
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Age</label>
                <input type="text" class="form-control" id="age" required />
              </div>
              <div class="">
                <label class="form-label">Are you a student or a worker?</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked />
                      <label class="form-check-label" for="exampleRadios11">
                        Student
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked />
                      <label class="form-check-label" for="exampleRadios11">
                        Reviewee
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2" />
                      <label class="form-check-label" for="exampleRadios22">
                        Worker
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option3" />
                      <label class="form-check-label" for="exampleRadios22">
                        Others
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="reviewCenter" class="form-label">Review Center</label>
                <input type="text" class="form-control" id="reviewCenter" />
              </div>
              <div class="col-md-6">
                <label for="locationReviewCenter" class="form-label">Location (City/Province):
                </label>
                <input type="text" class="form-control" id="reviewCenter" />
              </div>
              <div class="col-md-6">
                <label for="reviewCenter" class="form-label">Last School/College:
                </label>
                <input type="text" class="form-control" id="reviewCenter" />
              </div>
              <div class="col-md-6">
                <label for="locationReviewCenter" class="form-label">Location (City/Province):
                </label>
                <input type="text" class="form-control" id="reviewCenter" />
              </div>
              <div class="col-md-6">
                <label for="course" class="form-label">Course </label>
                <input type="text" class="form-control" id="course" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Year Level</label>
                <select class="form-control wide">
                  <option>Grade 11</option>
                  <option>Grade 12</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

              <hr class="mb-4" />

              <h5>IN CASE OF EMERGENCY PRIMARY CONTACT PERSON</h5>
              <p>
                (Preferably Parents based on Philippines, with CONTACT
                NUMBER)
              </p>
              <div class="col-md-6">
                <label class="form-label">Parent/Guardian Name:</label>
                <input type="text" class="form-control" id="parentsname" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Relationship:</label>
                <input type="text" class="form-control" id="relationship" />
              </div>
              <div class="col-md-6">
                <label for="emailaddress" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="emailaddress" required />
              </div>
              <div class="col-md-6">
                <label for="parent" class="form-label">Parent/Guardian Name</label>
                <input type="text" class="form-control" id="parent" required />
              </div>
              <div class="col-md-6">
                <label for="relationship" class="form-label">Relationship</label>
                <input type="text" class="form-control" id="relationship" required />
              </div>
              <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="email" class="form-control" id="address" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Select your network:</label>
                <select class="form-control wide">
                  <option>Smart</option>
                  <option>Globe</option>
                  <option>Sun</option>
                  <option>Talk and Text</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contactnumber" />
              </div>

              <hr class="mb-4" />

              <h5 class="mt-4">SECONDARY CONTACT PERSON</h5>
              <p>
                (Preferably Parents based on Philippines, with CONTACT
                NUMBER)
              </p>
              <div class="col-md-6">
                <label class="form-label">Parent/Guardian Name:</label>
                <input type="text" class="form-control" id="parentsname" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Relationship:</label>
                <input type="text" class="form-control" id="relationship" />
              </div>
              <div class="col-md-6">
                <label for="emailaddress" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="emailaddress" required />
              </div>
              <div class="col-md-6">
                <label for="parent" class="form-label">Parent/Guardian Name</label>
                <input type="text" class="form-control" id="parent" required />
              </div>
              <div class="col-md-6">
                <label for="relationship" class="form-label">Relationship</label>
                <input type="text" class="form-control" id="relationship" required />
              </div>
              <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="email" class="form-control" id="address" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Select your network:</label>
                <select class="form-control wide">
                  <option>Smart</option>
                  <option>Globe</option>
                  <option>Sun</option>
                  <option>Talk and Text</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contactnumber" />
              </div>
            </div>

            <hr class="mb-4" />

            <h5 class="mt-4">
              VALID DOCUMENTS SUBMITTED FOR FURTHER IDENTIFICATION
            </h5>
            <div class="row">
              <div class="col-md-6">
                <label class="form-label">Student / Reviewee:</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked />
                      <label class="form-check-label" for="exampleRadios11">
                        School ID / Review School ID
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2" />
                      <label class="form-check-label" for="exampleRadios22">
                        Certificate of Registration/Enrolment
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Working:</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked />
                      <label class="form-check-label" for="exampleRadios11">
                        2 Valid IDs (Passport, TIN ID, Postal ID, SSS,
                        GSIS, Driver’s License)
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2" />
                      <label class="form-check-label" for="exampleRadios22">
                        Others
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="mb-4" />

            <div class="col-lg-4 order-lg-2 mt-4 mb-4">
              <!-- Tab panes -->
              <label for="chosen_room">Chosen Room:</label>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="first">
                  <img class="img-fluid" src="./assets/img/room1.jpg" alt="room" />
                </div>
              </div>
            </div>

            <div class="row g-3 align-items-center">
              <h6>Room Price</h6>
              <p>&#8369; 2,000.00</p>
              <h6>Room Title</h6>
              <p>Bed space (monthly)</p>
              <h6>Room Description</h6>
              <p>
                Rent monthly. Minimum of 3 months. Will share room with
                other people.
              </p>
            </div>

            <h6 class="mt-4">Room Details</h6>
            <div class="col-md-6">
              <label for="roomNo" class="form-label"> Room No:</label>
              <input type="text" class="form-control" id="roomNo" required />
            </div>
            <div class="col-md-6 mt-4">
              <label for="bedNo" class="form-label"> Bed No:</label>
              <input type="text" class="form-control" id="bedNo" required />
            </div>
            <div class="col-md-6">
              <label class="form-label">Bed Type:</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked />
                    <label class="form-check-label" for="exampleRadios11">
                      Upper Bed
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2" />
                    <label class="form-check-label" for="exampleRadios22">
                      Lower Bed
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-4">
              <label for="roomSize" class="form-label">Room Size:</label>
              <input type="text" class="form-control" id="roomSize" required />
            </div>

            <h6 class="mt-4">Contract Details</h6>
            <div class="row g-3 align-items-center">
              <div class="col-md-6">
                <!-- Card -->
                <div class="card">
                  <div class="card-body">
                    <p class="mb-1">Date Check In:</p>
                    <input name="datepicker" class="datepicker-default form-control" id="datepicker" required />
                  </div>
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-6">
                <!-- Card -->
                <div class="card">
                  <div class="card-body">
                    <p class="mb-1">Date Check Out:</p>
                    <input name="datepicker" class="datepicker-default form-control" id="datepicker" required />
                  </div>
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-6">
                <label for="rentalRate" class="form-label">Rental Rate</label>
                <input type="text" class="form-control" id="rentalRate" required />
              </div>
              <div class="col-md-6">
                <label for="rentalRate" class="form-label">Promo Discount</label>
                <input type="text" class="form-control" id="promoDiscount" required />
              </div>
              <div class="col-md-6">
                <label for="reservationFee01" class="form-label">Reservation Fee #01</label>
                <input type="text" class="form-control" id="reservationFee" required />
              </div>
              <div class="col-md-6">
                <label for="securityDeposit" class="form-label">Security Deposit</label>
                <input type="text" class="form-control" id="securityDeposit" required />
              </div>
              <div class="col-md-6">
                <label for="utilityDeposit" class="form-label">Utility Deposit</label>
                <input type="text" class="form-control" id="utilityDeposit" required />
              </div>
              <div class="col-md-6">
                <label for="bedSheetDeposit" class="form-label">Bed Sheet Deposit</label>
                <input type="text" class="form-control" id="bedSheetDeposit" required />
              </div>
              <div class="col-md-6">
                <label for="apartmentKey" class="form-label">Apartment Key Deposit</label>
                <input type="text" class="form-control" id="apartmentKey" required />
              </div>
              <div class="col-md-6">
                <label for="totalDeposit" class="form-label">Total Deposit to be Paid:</label>
                <input type="text" class="form-control" id="totalDeposit" required />
              </div>
              <div class="col-md-6">
                <label for="firstMonthRental" class="form-label">First Month Rental</label>
                <input type="text" class="form-control" id="firstMonthRental" required />
              </div>
              <div class="col-md-6">
                <label for="proRatedRental" class="form-label">Pro-Rated Rental</label>
                <input type="text" class="form-control" id="proRatedRental" required />
              </div>
              <div class="col-md-6">
                <label for="receptionistName" class="form-label">Name of Receptionist</label>
                <input type="text" class="form-control" id="receptionistName" required />
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-4 mx-4">
                Reserve
              </button>
              <button type="submit" class="btn btn-danger mt-4 mx-4">
                Cancel
              </button>
            </div>

            <!-- This form should have details but the ff are not:
                  Room Details
                  ROOM no.	: ________
                  BED no.		: ________
                  BED Type	: ⃝Upper Bed ⃝ Lower Bed
                  ROOM Size	: _______ Pax per Room

                  Contract Details
                  RENTAL RATE 	: Php. ______________
                  PROMO DISCOUNT: Php. ___________

                  After puting the details. This form will be sent through the tenants domain to also confirm their reservation and will wait for the contract signing that will be sent through their email. The RESERVATION AGREEMENT FORM && Reservation Agreement Form Letter && Move-In Clearance Form should also be sent to the Tenant.
                  -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--********************************** CONTENT BODY END ***********************************-->

<?php
require_once 'includes/footer.php';
?>