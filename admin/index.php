<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!--********************************** CONTENT BODY START ***********************************-->
<section>
  <div class="content-body">
    <!-- row -->
    <div class="container-fluid text-center mt-5">
      <h1>Welcome to UCBR Admin dashboard, <span id="adminUsername_container"></span></h1>
    </div>
  </div>
</section>
<!--********************************** CONTENT BODY END ***********************************-->

<?php
require_once 'includes/footer.php';
?>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../assets/js/common.js"></script>

<script>
  var userSession = JSON.parse(localStorage.getItem("userData"));
  $("#adminUsername_container").text(userSession.username);

</script>