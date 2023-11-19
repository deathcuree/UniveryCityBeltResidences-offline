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
      <!-- row -->
      <div class="card mb-3">
        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
          <h6 class="mb-0 fw-bold">Admin Settings</h6>
        </div>
        <div class="card">
          <div class="card-body">
            <form>
              <div class="row g-3 align-items-center">
                <div class="col-md-12">
                  <label for="name" class="form-label">Input Name:</label>
                  <input type="text" class="form-control" id="name" required />
                </div>
                <div class="col-md-12">
                  <label for="password" class="form-label">Enter password:</label>
                  <input type="text" class="form-control" id="password" required />
                </div>
                <div class="col-md-12">
                  <label class="form-label">Select Role:</label>
                  <select class="form-control wide">
                    <option>Admin</option>
                    <option>Cashier</option>
                    <option>Receptionist</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-danger btn-sm mt-3">
                Save
              </button>
              <button type="submit" class="btn btn-primary btn-sm mt-3">
                Cancel
              </button>
            </form>
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