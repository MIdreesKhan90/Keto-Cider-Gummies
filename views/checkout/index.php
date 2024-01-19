<?php
use yii\helpers\Url;

$this->title = Yii::$app->params['SiteName'];

$newRoot = Yii::$app->urlManager->baseUrl;
$imagePath = $newRoot.'/images/keto-cider';

$this->params['data'] = [
	'body_class'  => 'checkout-body',
];
?>
<main class="checkout-page main-page float-left w-100" id="wrapper">
  <!-- Summary Section -->
  <section class="summary-section mb-5 pb-5">
    <div class="container">
      <h2 class="text-center mb-5">Shopping Cart</h2>
      <?php if (isset($_SESSION['cart'])): 
          $product = $_SESSION['cart']['product'];
          $amount = number_format($product['amount'], 2, '.', '');
          $checkout->total = $amount;
        ?>
        <div class="row main-cart">
          <div class="col-lg-8">
            <div class="cart-product-items pe-lg-4">
              <div class="table-head d-none d-md-block">
                <div class="row align-items-center">
                  <div class="col-md-6">Product</div>
                  <div class="col-md-3 text-center">Price</div>
                  <div class="col-md-3 text-center">Subtotal</div>
                </div>
              </div>
              <div class="table-body">
                <div class="cart-item border-0">
                  <div class="row align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0 d-flex align-items-center">
                      <div class="bottle text-center">
                        <img src="<?= $imagePath; ?>/s1/<?=$product['product_key'];?>.jpg" alt="" class="img-fluid mx-auto">
                      </div>
                      <h4><?= $product['name']; ?></h4>
                    </div>
                    <div class="col-md-3 text-md-center">
                      <span class="me-3 d-md-none">Price: </span>
                      $<?=$amount;?>
                    </div>
                    <div class="col-md-3 text-md-center">
                      <span class="me-3 d-md-none">Subtotal: </span>
                      $<?=$amount;?>
                    </div>
                    <div class="col-12 col-md-10 offset-md-2">
                      <?php 
                       $is_subs = (isset($product['is_subs']) && $product['is_subs']) ? 'checked' : '';
                      ?>
                      <div class="purchase-term">
                        <input type="checkbox" class="me-1" id="purchase_term" data-product="<?=$product['product_key'];?>" <?=$is_subs;?>>
                        <label class="d-inline" for="purchase_term">Subscription - check this box to receive product <?=$product['subscription_terms'];?>.</label>
                        <p class="mb-0 mt-2 text pt-0">You will receive this  <?=$product['product_type'];?> <?=$product['receive_terms'];?> and your card will be charged $<?=$amount;?> automatically. You can cancel anytime by calling us at <canvas class="text-to-canvas phone"></canvas></p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <aside class="cart-summary">
              <h3>Summary</h3>
              
              <div class="summary-items">
                <div class="row">
                  <div class="col-6 text-start">Subtotal</div>
                  <div class="col-6 text-end">$<span id="subtotal"><?=$amount;?></span></div>
                  <div class="col-6 text-start">Tax</div>
                  <div class="col-6 text-end">- $<span id="tax">0.00</span></div>
                  
                  <?php if ($checkout->getPromoCodeWithInfo()): ?>
                    <div class="col-6 text-start">Promo Code</div>
                    <div class="col-6 text-end">- 
                      $<span id="promo_code"><?=number_format($checkout->getPromoCodeWithInfo(), 2, '.', '');?></span>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="order-total">
                <div class="row">
                  <div class="col-6 text-start">Order Total</div>
                  <div class="col-6 text-end">$<span id="total"><?=$checkout->total;?></span></div>
                </div>
              </div>
              <div class="discount-form">
                <form action="/checkout" method="GET">
                  <div class="input-group">
                    <input type="text" name="promo_code" id="promo_code" class="form-control" placeholder="Enter Promo Code">
                    <button class="button-discount" type="submit" id="promo_code">Apply Discount</button>
                  </div>
                </form>
              </div>
              <div class="text-center">
                <a href="/order" role="tab" class="button-checkout">Go to Checkout</a>
              </div>
           
            </aside>
          </div>
        </div>
      <?php else: ?>
        <div class="is-empty">
          <p class="mb-0">Your shopping cart is empty...</p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php
$this->registerJs(<<<JS
  // Update Items Id
  $(document).on('change', '#purchase_term', function(e){
    $.ajax({
      method: "POST",
      url: "/checkout/update-cart",
      data: { product_key: $(this).data('product'), is_subs: $(this).is(':checked') },
    })
  });
JS
);
?>