<?php
require_once 'includes/header2.php';
?>

<!--==================== MAIN ====================-->
<main class="main">
  <section>
    <div class="container__contact container">
      <h1 class="subscribe__title">Contact Us</h1>
      <p class="subscribe__description">
        Do you have inquiries? Message us.
      </p>
      <form autocomplete="off" id="contact_form">
        <div class="input-container">
          <input type="text" name="name" class="input" required />
          <label for="">Name</label>
        </div>

        <div class="input-container">
          <input type="email" name="email" class="input" required />
          <label for="">Email</label>
        </div>
        <div class="input-container">
          <input type="tel" name="phone" class="input" required />
          <label for="">Phone</label>
        </div>
        <div class="input-container textarea">
          <textarea name="message" class="input" required></textarea>
          <label for="">Message</label>
        </div>

        <button type="submit" class="button subscribe__button">Send</button>

      </form>
      <p class="subscribe__description">
        <br /><br />For more information, please contact any of the given
        numbers:
        <br />
        <br />JAYROLD JOSE 09364758736 <br />ADRIAN PENAFLOR 09364758736
        <br />
        ANABELLE PENAFLOR 09364758736 <br />
        RICHARD SUPRANES 09364758736 <br />
        MAYETH BANGHULA 09364758736 <br />
      </p>
    </div>
  </section>
</main>

<?php
require_once 'includes/footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="./assets/js/common.js"></script>

<script>
  $(document).ready(function() {
    $("#contact_form").validate({
      // errorClass: '',
      rules: {
        name: "required",
        email: "required",
        phone: "required",
        message: "required",
      },
      submitHandler: function(form) {
        var formData = $(form).serializeArray();

        formData.push({
          'name': "action",
          'value': "sendContactUs"
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
          'Successfully sent your contact form!',
          'Please wait for us to get back to you',
          'success'
        ).then(function() {
          $(form)[0].reset()
        });


      }
    });
  })
</script>