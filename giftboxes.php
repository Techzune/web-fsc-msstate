<?php
$_PAGE["title"] = "Gift Boxes";
include "inc/baseHTML.php";
?>

<?php startblock("content") ?>
<div class="text-center justify-content-center">

  <h3 class="my-2">Quantities are limited, order now!</h3>

  <p class="font-italic mb-0">
    If out of stock, White Muscadine Jelly will be substituted with Blueberry Preserves.
  </p>
  <small>Shipping is limited to the Continental United States.</small>

  <hr class="my-4"/>

  <div class="row">
    <div class="col-lg-4 my-2">
      <div class="card h-100">
        <div class="card-body d-flex flex-column">

          <!-- Bully Box: information -->
          <h5 class="card-title">Bully Box</h5>

          <h6 class="card-subtitle mb-4 text-muted">$40</h6>
          <div class="card-text text-left mb-4">
            <table class="table table-striped table-sm table-fit mx-auto">
              <tbody>
              <tr>
                <td>3/4 lb.</td>
                <td>Country Style Ham</td>
              </tr>
              <tr>
                <td>1 lb.</td>
                <td>Cheddar Cheese</td>
              </tr>
              <tr>
                <td>1 lb.</td>
                <td>Jalapeño Cheese</td>
              </tr>
              <tr>
                <td>8 oz.</td>
                <td>White Muscadine Jelly</td>
              </tr>
              <tr>
                <td>8 oz.</td>
                <td>Red Muscadine Jelly</td>
              </tr>
              </tbody>
            </table>
          </div>

          <!-- Bully Box: PayPal form -->
          <form class="mt-auto mx-lg-4"
                target="paypal"
                action="https://www.paypal.com/cgi-bin/webscr"
                method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="AK6G298T3TSAJ">
            <div class="form-group">
              <label for="bb-os0">Shipment or Pickup?</label>
              <select id="bb-os0" name="os0" class="form-control">
                <option value="Bully Box (Shipped)">Shipment $50.00 USD</option>
                <option value="Bully Box (Pickup)">Pickup $40.00 USD</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bb-os1">Shipment / Pickup Date</label>
              <select id="bb-os1" name="os1" class="form-control">
                <option value="Ship - Nov. 13">November 13</option>
                <option value="Ship- Dec. 4">December 4 (Shipment ONLY)</option>
                <option value="Pickup - Nov. 13">November 13</option>
                <option value="Pickup - Nov. 20">November 20 (Pickup ONLY)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bb-os2">Who helped you with your order?</label>
              <input id="bb-os2" type="text" name="os2" class="form-control" maxlength="200">
            </div>
            <button type="submit" class="btn btn-outline-dark w-50">Buy Now</button>
          </form>

        </div>
      </div>
    </div>

    <div class="col-lg-4 my-2">
      <div class="card h-100">
        <div class="card-body d-flex flex-column">
          <!-- Jelly Box: information -->
          <h5 class="card-title">Jelly Box</h5>

          <h6 class="card-subtitle mb-4 text-muted">$20</h6>
          <div class="card-text text-left mb-4">
            <table class="table table-striped table-sm table-fit mx-auto">
              <tbody>
              <tr>
                <td>8 oz.</td>
                <td>White Muscadine Jelly</td>
              </tr>
              <tr>
                <td>8 oz.</td>
                <td>Red Muscadine Jelly</td>
              </tr>
              <tr>
                <td>8 oz.</td>
                <td>Raw MSU Honey</td>
              </tr>
              <tr>
                <td>8 oz.</td>
                <td>Blueberry Preserves</td>
              </tr>
              </tbody>
            </table>
          </div>

          <!-- Jelly Box: PayPal form -->
          <form class="mt-auto mx-lg-4"
                target="paypal"
                action="https://www.paypal.com/cgi-bin/webscr"
                method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="J2EMD63SUP68J">
            <div class="form-group">
              <label for="jb-os0">Shipment or Pickup?</label>
              <select id="jb-os0" name="os0" class="form-control">
                <option value="Jelly Box (Shipped)">Shipment $28.00 USD</option>
                <option value="Jelly Box (Pickup)">Pickup $20.00 USD</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jb-os1">Shipment / Pickup Date</label>
              <select id="jb-os1" name="os1" class="form-control">
                <option value="Ship - Nov. 13">November 13</option>
                <option value="Ship- Dec. 4">December 4 (Shipment ONLY)</option>
                <option value="Pickup - Nov. 13">November 13</option>
                <option value="Pickup - Nov. 20">November 20 (Pickup ONLY)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jb-os2">Who helped you with your order?</label>
              <input id="jb-os2" type="text" name="os2" class="form-control" maxlength="200">
            </div>
            <button type="submit" class="btn btn-outline-dark w-50">Buy Now</button>
          </form>

        </div>
      </div>
    </div>

    <div class="col-lg-4 my-2">
      <div class="card h-100">
        <div class="card-body d-flex flex-column">

          <!-- Bully Sampler: information -->
          <h5 class="card-title">Bully Sampler</h5>

          <h6 class="card-subtitle mb-4 text-muted">$20</h6>
          <div class="card-text text-left mb-4">
            <table class="table table-striped table-sm table-fit mx-auto">
              <tbody>
              <tr>
                <td>1 lb.</td>
                <td>Cheddar Cheese</td>
              </tr>
              <tr>
                <td>8 oz.</td>
                <td>Blueberry Preserves</td>
              </tr>
              </tbody>
            </table>
          </div>

          <!-- Bully Sampler: PayPal form -->
          <form class="mt-auto mx-lg-4"
                target="paypal"
                action="https://www.paypal.com/cgi-bin/webscr"
                method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="6K65ACF3YQ8D4">
            <div class="form-group">
              <label for="bs-os0">Shipment or Pickup?</label>
              <select id="bs-os0" name="os0" class="form-control">
                <option value="Jelly Box (Shipped)">Shipment $28.00 USD</option>
                <option value="Jelly Box (Pickup)">Pickup $20.00 USD</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bs-os1">Shipment / Pickup Date</label>
              <select id="bs-os1" name="os1" class="form-control">
                <option value="Ship - Nov. 13">November 13</option>
                <option value="Ship- Dec. 4">December 4 (Shipment ONLY)</option>
                <option value="Pickup - Nov. 13">November 13</option>
                <option value="Pickup - Nov. 20">November 20 (Pickup ONLY)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bs-os2">Who helped you with your order?</label>
              <input id="bs-os2" type="text" name="os2" class="form-control" maxlength="200">
            </div>
            <button type="submit" class="btn btn-outline-dark w-50">Buy Now</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <?php endblock() ?>
