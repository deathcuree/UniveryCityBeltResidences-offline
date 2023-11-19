<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- ================ ICO IMAGE ================ -->
  <link rel="icon" type="image/x-icon" href="assets/img/white_logo.ico" />
  <title>Registration</title>

  <!--=============== BOXICONS ===============-->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- ================== CSS LINK ===================== -->
  <link rel="stylesheet" href="./assets/css/registration.css" />
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


<script src="./assets/js/common.js"></script>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">

  </header>
  <!--==================== END OF HEADER ====================-->
  <!-- ================== REGISTRATION FORM =================== -->
  <main>
    <section>
      <div class="container">

        <form action="" method="" id="form" autocomplete="off">
          <h1>Registration</h1>

          <div class="input-control">
            <label for="fullname">Full Name</label>
            <input id="fullname" name="fullname" type="text" />
          </div>
          <div class="input-control">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" />
            <div class="error"></div>
          </div>
          <div class="input-control">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" />
            <div class="error"></div>
          </div>
          <div class="input-control">
            <label for="repeat_password">Repeat Password</label>
            <input id="repeat_password" name="repeat_password" type="password" />
            <div class="error"></div>
          </div>
          <button type="submit" name="submit">Register</button>
          <p class="text__center">
            Already have an account? <a href="login.php">Login</a>
          </p>
        </form>
      </div>
    </section>
  </main>
</body>

<script type="text/javascript">
  var userSession = JSON.parse(localStorage.getItem("userData"));

  if (userSession != null) {
    if (userSession.type != undefined) {
      window.location.href = "admin"
    } else {
      window.location.href = "tenant"
    }
  }

  // ajaxPostLink({action:"connectDB"})

  $(document).ready(function() {

    // custom validators
    $.validator.addMethod("lettersOnly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "Please enter letters only.");
    // custom validators
    
    // custom validators
    $.validator.addMethod("checkIfConfirmPasswordMatch", function(value, element) {
      if (value == $("input[name='password']").val()) {
        return true;
      } else {
        return false;
      }
    }, "Must match with new password");
    // custom validators
    
    // custom validators
    $.validator.addMethod("checkIfEmailValid", function(value, element) {
       var valueArray = value.split("@");
       if(valueArray[1]=="gmail.com"){
           return true;
       }else{
           return false;
       }
    }, "We only accept @gmail.com emails");
    // custom validators

    // custom validators
    $.validator.addMethod("minLengthPassword", function(value, element) {
        return this.optional(element) || (value.length >= 8 && /[a-zA-Z]/.test(value) && /\d/.test(value));
    }, "Password must be at least 8 characters long and contain both letters and numbers.");
    // custom validators
    
    $("form").validate({
      // errorClass: '',
      rules: {
        fullname: {
            required: true,
            lettersOnly: true,
        },
        email: {
          checkIfEmailValid: true,
          required: true,
        },
        password: {
          required: true, 
          minLengthPassword: true,
        },
        repeat_password: {
          checkIfConfirmPasswordMatch: true,
          required: true,
        },
      },
      submitHandler: function(form) {
        var formData = $(form).serializeArray();

        formData.push({
          'name': "action",
          'value': "registerNewUser"
        });


        var res = ajaxPostLink(formData);
        console.log(res);

        if (res.isProceed == false) {
          Swal.fire({
            text: res.msg,
            icon: 'error',
            confirmButtonText: 'Ok'
          })

          return;
        }

        Swal.fire(
          '',
          'Registered successfully',
          'success'
        ).then(function() {
          window.location.href = "login.php";
        });


      }
    });

  })
</script>

</html>