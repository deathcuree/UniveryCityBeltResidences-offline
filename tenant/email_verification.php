<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ================ ICO IMAGE ================ -->
    <link rel="icon" type="image/x-icon" href="assets/img/white_logo.ico" />
    <title>Registration</title>

    <!--=============== BOXICONS ===============-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- ================== CSS LINK ===================== -->
    <link rel="stylesheet" href="./assets/css/otp.css" />
  </head>
  <body>
    <a
      href="javascript:void(0)"
      onclick="goBack()"
      class="back-button align-top-left"
      >Back</a
    >

    <!--==================== OTP ====================-->
    <main>
      <div class="container">
        <header>
          <i class="bx bxs-check-shield"></i>
        </header>
        <h4>We've sent the code in your email. Please check.</h4>
        <form action="#">
          <div class="input-field">
            <input type="number" />
            <input type="number" disabled />
            <input type="number" disabled />
            <input type="number" disabled />
            <input type="number" disabled />
            <input type="number" disabled />
          </div>
          <button>Verify Email</button>
        </form>
      </div>
    </main>
    <!--==================== END OF OTP ====================-->
    <script src="./assets/js/otp.js"></script>
    <script src="./assets/js/backbutton.js"></script>
  </body>
</html>
