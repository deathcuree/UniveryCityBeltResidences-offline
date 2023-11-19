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
            <a href="javascript:void(0)">Transactions Payment</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Transactions</a>
          </li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 order-lg-2 mb-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Tenant's Summary Details</span>
                    <span class="badge badge-primary badge-pill">3</span>
                  </h4>
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Room Type</h6>
                        <small class="text-muted">Solo</small>
                      </div>
                      <span class="text-muted">&#8369; 3,000.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Tenant Type</h6>
                        <small class="text-muted">Worker</small>
                      </div>
                      <span class="text-muted"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Tenant Duration</h6>
                        <small class="text-muted">Monthly</small>
                      </div>
                      <span class="text-muted">&#8369; 3,000.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between active">
                      <div class="text-white">
                        <h6 class="my-0 text-white">Discount Promo</h6>
                        <small>EXAMPLECODE</small>
                      </div>
                      <span class="text-white">- &#8369; 1,000.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                      <span>Total (Peso)</span>
                      <strong>&#8369; 3,000.00</strong>
                    </li>
                  </ul>

                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Discount code" />
                      <button type="submit" class="input-group-text">
                        Enter
                      </button>
                    </div>
                  </form>
                </div>
                <div class="col-lg-8 order-lg-1">
                  <form class="needs-validation" novalidate="">
                    <h4 class="mb-3">Payment Options</h4>

                    <div class="d-block my-3">
                      <div class="form-check custom-radio mb-2">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="" />
                        <label class="form-check-label" for="gcash">GCash</label>
                      </div>
                      <div class="form-check custom-radio mb-2">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="" />
                        <label class="form-check-label" for="paymaya">PayMaya</label>
                      </div>
                      <div class="form-check custom-radio mb-2">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="" />
                        <label class="form-check-label" for="credit">Credit card</label>
                      </div>
                      <div class="form-check custom-radio mb-2">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="" />
                        <label class="form-check-label" for="debit">Debit card</label>
                      </div>
                      <div class="form-check custom-radio mb-2">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="" />
                        <label class="form-check-label" for="paypal">Paypal</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-group mb-3">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" />
                        </div>
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-md-6 mb-3">
                        <label for="cc-name" class="form-label">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required="" />
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required="" />
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="" />
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="" />
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>
                    <hr class="mb-4" />
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                      Confirm Transaction
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