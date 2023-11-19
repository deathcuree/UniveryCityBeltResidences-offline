<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- ================ ICO IMAGE ================ -->
  <link rel="icon" type="image/x-icon" href="assets/img/white_logo.ico" />
  <title>Admin Login</title>

  <!--=============== BOXICONS ===============-->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- ================== CSS LINK ===================== -->
  <link rel="stylesheet" href="./assets/css/registration.css" />


</head>

<body>
  <header class="header" id="header">

  </header>
  <!--==================== END OF HEADER ====================-->
  <!-- ================== REGISTRATION FORM =================== -->
  <main>
    <section>
      <div class="container">
        <form id="form" action="#" method="post">
          <h1>Admin Login</h1>
          <div class="input-control">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" />
            <div class="error"></div>
          </div>

          <div class="input-control">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" />
            <div class="error"></div>
          </div>

          <button type="submit">Login as Admin</button>
        </form>
      </div>
    </section>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="./assets/js/common.js"></script>

</body>

<script>
  $(document).ready(function() {
    $("form").validate({
      // errorClass: '',
      rules: {
        username: "required",
        password: "required",
      },
      submitHandler: function(form) {
        var formData = $(form).serializeArray();

        formData.push({
          'name': "action",
          'value': "adminLoginChecker"
        });


        var res = ajaxPostLink(formData);
        console.log(res);

        if (res.isProceed == false) {
          Swal.fire({
            text: res.msg,
            icon: 'error',
          })

          return;
        }

        Swal.fire(
          '',
          'Login Successfully',
          'success'
        ).then(function() {
          localStorage.setItem("userData", JSON.stringify(res.data));
          window.location.href = "./admin";
        });


      }
    });
  })
</script>

</html>