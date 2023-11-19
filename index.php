<?php
require_once 'includes/header.php';
?>

<!--==================== MAIN ====================-->
<main class="main">
  <!--==================== HOME ====================-->
  <section class="home section" id="home">
    <div class="home__container container grid">
      <div class="home__data">
        <h1 class="home__title">
          Discover <br />
          Most Suitable <br />
          Rooms
        </h1>
        <p class="home__description">
          Find a variety of rooms that will suit you easily, forget all the
          difficulties in finding rooms suitable for you. Rent your room now!
          <br />
          <br />Located at: <br />
          1985 C.M. Recto Ave., corner S.H. Loyola St., Sampaloc, Manila,
          Philippines
        </p>

        <!--<form action="" class="home__search">-->
        <!--  <input type="search" placeholder="Search" class="home__search-input" />-->
        <!--  <button class="button">Search</button>-->
        <!--</form>-->
      </div>

      <div class="home__images">
        <div class="home__orbe"></div>
        <div class="home__img">
          <img src="assets/img/home_ucbr.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!--==================== ROOMS ====================-->
  <section class="section" id="popular">
    <div class="container">
      <span class="section__subtitle">Available</span>
      <h2 class="section__title">Rooms</h2>

      <div class="popular__container swiper">
        <div class="swiper-wrapper" id="addRoomHere">

        </div>

        <div class="swiper-button-next">
          <i class="bx bx-chevron-right"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="bx bx-chevron-left"></i>
        </div>
      </div>
    </div>
  </section>

  <!--==================== SERVICES ====================-->
  <section class="value section" id="services">
    <div class="value__container container grid">
      <div class="value__images">
        <div class="value__orbe"></div>

        <div class="value__img">
          <img src="assets/img/offers.png" alt="lobby" />
        </div>
      </div>

      <div class="value__content">
        <div class="value__data">
          <span class="section__subtitle">Our Offers</span>
          <h2 class="section__title">Offers We Give To You<span>.</span></h2>
          <p class="value__description">
            The price we offer is the best for you!
          </p>
        </div>

        <div class="value__accordion">
          <div class="value__accordion-item">
            <header class="value__accordion-header">
              <i class="bx bxs-shield-x value__accordion-icon"></i>
              <h3 class="value__accordion-title">Best room locations</h3>
              <div class="value__accordion-arrow">
                <i class="bx bxs-down-arrow"></i>
              </div>
            </header>

            <div class="value__accordion-content">
              <p class="value__accordion-description">
                Our website showcases the best room locations for students and young professionals in the bustling area of Manila's University Belt.
              </p>
            </div>
          </div>

          <div class="value__accordion-item">
            <header class="value__accordion-header">
              <i class="bx bxs-x-square value__accordion-icon"></i>
              <h3 class="value__accordion-title">Comfortable environment</h3>
              <div class="value__accordion-arrow">
                <i class="bx bxs-down-arrow"></i>
              </div>
            </header>

            <div class="value__accordion-content">
              <p class="value__accordion-description">
                Guests can enjoy the convenience of our prime location, as well as the comfortable and affordable accommodations we offer at UniverCity Belt Residences.
              </p>
            </div>
          </div>

          <div class="value__accordion-item">
            <header class="value__accordion-header">
              <i class="bx bxs-bar-chart-square value__accordion-icon"></i>
              <h3 class="value__accordion-title">
                Affordable price on the market
              </h3>
              <div class="value__accordion-arrow">
                <i class="bx bxs-down-arrow"></i>
              </div>
            </header>

            <div class="value__accordion-content">
              <p class="value__accordion-description">
                We are proud to offer competitive pricing on our products/services, making them accessible to a wide range of customers who are looking for affordable options.
              </p>
            </div>
          </div>

          <div class="value__accordion-item">
            <header class="value__accordion-header">
              <i class="bx bxs-check-square value__accordion-icon"></i>
              <h3 class="value__accordion-title">Apartment's Security</h3>
              <div class="value__accordion-arrow">
                <i class="bx bxs-down-arrow"></i>
              </div>
            </header>

            <div class="value__accordion-content">
              <p class="value__accordion-description">
                Your safety is our top priority. That's why our apartments have a range of security features, including secure door locks, alarm systems, and 24-hour surveillance to keep you and your belongings safe and secure.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--==================== CONTACT ====================-->
  <section class="contact section" id="contact">
    <div class="contact__container container grid">
      <div class="contact__images">
        <div class="contact__orbe"></div>

        <div class="contact__img">
          <img src="assets/img/contact.png" alt="lobby" />
        </div>
      </div>

      <div class="contact__content">
        <div class="contact__data">
          <span class="section__subtitle">Contact Us</span>
          <h2 class="section__title">We are easy to reach<span>.</span></h2>
          <p class="contact__description">
            Are you having troubles in looking for a place to stay? Do you have
            a lot of questions/inquiries? Don't worry and just contact us.
          </p>
        </div>

        <div class="contact__card">
          <div class="contact__card-box">
            <div class="contact__card-info">
              <i class="bx bxs-phone-call"></i>

              <div>
                <h3 class="contact__card-title">Call Us</h3>
                <!--<p class="contact__card-description">+639248956741</p>-->
              </div>
            </div>
                <button onclick="location.href='tel:+639276980795'" class="button contact__card-button">Call</button>
          </div>

          <div class="contact__card-box">
            <div class="contact__card-info">
              <i class="bx bxs-message-rounded-dots"></i>

              <div>
                <h3 class="contact__card-title">Text Us</h3>
                <!--<p class="contact__card-description">+639248956741</p>-->
              </div>
            </div>

                <button onclick="location.href='sms:+639276980795?body=Greetings!'" class="button contact__card-button">Text</button>

          </div>

          <div class="contact__card-box">
            <div class="contact__card-info">
              <i class="bx bxs-envelope"></i>

              <div>
                <h3 class="contact__card-title">Email Us</h3>
                <!--<p class="contact__card-description">ucbr@univercitybeltresidences.online/</p>-->
              </div>
            </div>
            <!--<a href="ucbr@univercitybeltresidences.online" class="button contact__card-button">Email</a>-->
            
            <!--<button id="composeEmailButton">Compose Email in Gmail</button>-->
            <button class="button contact__card-button" onclick="window.location.href='https://mail.google.com/mail/?view=cm&to=ucbr@univercitybeltresidences.online&su=Subject Line&body=Message&bcc=';">Email</button> 




          </div>

          <div class="contact__card-box">
            <div class="contact__card-info">
              <i class="bx bxs-message-rounded-dots"></i>

              <div>
                <h3 class="contact__card-title">Contact Us</h3>
                <!--<p class="contact__card-description">register now!</p>-->
              </div>
            </div>

            <a href="contact.php" class="button contact__card-button">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--==================== SUBSCRIBE ====================-->
  <!-- <section class="subscribe section" id="reserve">
    <div class="subscribe__container container">
      <h1 class="subscribe__title">Inquire</h1>
      <p class="subscribe__description">
        What are you waiting for? Inquire your inquiries now!
      </p>
      <a href="inquiry-form.php" class="button subscribe__button">Inquire</a>
    </div>
  </section> -->
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/common.js"></script>


<script type="text/javascript">
  var userSession = JSON.parse(localStorage.getItem("userData"));
  var rooms = ajaxPostLink({"action":"getRooms"});

  for (var i = 0; i < rooms.length; i++) {
    console.log("here");

    $("#addRoomHere").append(
      '<article class="popular__card swiper-slide">'+
        '<img src="assets/img/'+rooms[i].photo+'" alt="" class="popular__img" />'+
        '<div class="popular__data">'+
          '<h2 class="popular__price">'+
            '<span>₱ </span>'+rooms[i].price+
          '</h2>'+
          '<h3 class="popular__title">'+rooms[i].type+' ('+rooms[i].duration+')</h3>'+
          '<p class="popular__description">'+
            rooms[i].description+
          '</p>'+
        '</div>'+
        '<div class="center__button">'+
          '<a href="#" class="button room_button" onClick="reserve('+i+');">Reserve</a>'+
        '</div>'+
      '</article>'
    );
  }

  function reserve(id){
    console.log(id);
    if(userSession!=null){
      if (userSession.type==undefined) {
        window.location.href = "tenant/reservation_form.php?roomID="+id
      }
    } else{
      window.location.href = "registration.php"

    }
  }
</script>

<?php
require_once 'includes/footer.php';
?>