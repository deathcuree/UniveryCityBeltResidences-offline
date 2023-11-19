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
            <a href="javascript:void(0)">Room Maintenance</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Rooms</a>
          </li>
        </ol>
      </div>

      <div class="row">
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="new-arrival-product">
                <div class="new-arrivals-img-contnent">
                  <img class="img-fluid" src="./images/room1.jpg" alt="room" />
                </div>
                <div class="new-arrival-content text-center mt-3">
                  <span class="price">₱2,000.00</span>
                  <p>per person</p>
                  <h4>
                    <a href="ecom-product-detail.html">Bedspace (transient)</a>
                  </h4>
                  <p class="text-content">
                    Rent for hours/days/weeks/1 month. Minimum of 12
                    hours.
                  </p>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-primary mx-auto">
                    Edit
                  </button>
                  <button type="button" class="btn btn-primary mx-auto">
                    Update
                  </button>
                  <button type="button" class="btn btn-danger mx-auto">
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="new-arrival-product">
                <div class="new-arrivals-img-contnent">
                  <img class="img-fluid" src="./images/room2.jpg" alt="room" />
                </div>
                <div class="new-arrival-content text-center mt-3">
                  <span class="price">₱2,000.00 </span>
                  <p>per person</p>
                  <h4>
                    <a href="ecom-product-detail.html">Bedspace (monthly)</a>
                  </h4>
                  <p class="text-content">
                    Rent monthly. Minimum of 3 months. Will share room
                    with other people.
                  </p>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mx-auto">
                      Edit
                    </button>
                    <button type="button" class="btn btn-primary mx-auto">
                      Update
                    </button>
                    <button type="button" class="btn btn-danger mx-auto">
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="new-arrival-product">
                <div class="new-arrivals-img-contnent">
                  <img class="img-fluid" src="./images/room3.jpg" alt="" />
                </div>
                <div class="new-arrival-content text-center mt-3">
                  <span class="price">₱3,000.00 </span>
                  <h4>
                    <a href="ecom-product-detail.html">Room (Transient)</a>
                  </h4>
                  <p class="text-content">
                    Rent monthly. Minimum of 3 months. Solo room.
                  </p>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mx-auto">
                      Edit
                    </button>
                    <button type="button" class="btn btn-primary mx-auto">
                      Update
                    </button>
                    <button type="button" class="btn btn-danger mx-auto">
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="new-arrival-product">
                <div class="new-arrivals-img-contnent">
                  <img class="img-fluid" src="./images/room3.jpg" alt="" />
                </div>
                <div class="new-arrival-content text-center mt-3">
                  <span class="price">₱5,000.00 </span>
                  <h4>
                    <a href="ecom-product-detail.html">Room (Monthly)</a>
                  </h4>
                  <p class="text-content">
                    Rent for hours/days/weeks/1 month. Minimum of 12
                    hours. Solo Room.
                  </p>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mx-auto">
                      Edit
                    </button>
                    <button type="button" class="btn btn-primary mx-auto">
                      Update
                    </button>
                    <button type="button" class="btn btn-danger mx-auto">
                      Delete
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
</section>
<!--********************************** CONTENT BODY END ***********************************-->

<script>
  function cardsCenter() {
    /*  testimonial one function by = owl.carousel.js */

    jQuery(".card-slider").owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      //center:true,
      slideSpeed: 3000,
      paginationSpeed: 3000,
      dots: true,
      navText: [
        '<i class="fas fa-arrow-left"></i>',
        '<i class="fas fa-arrow-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 1,
        },
        800: {
          items: 1,
        },
        991: {
          items: 1,
        },
        1200: {
          items: 1,
        },
        1600: {
          items: 1,
        },
      },
    });
  }

  jQuery(window).on("load", function() {
    setTimeout(function() {
      cardsCenter();
    }, 1000);
  });
</script>

<?php
require_once 'includes/footer.php';
?>