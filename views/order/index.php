<?php
use Codeception\Module\Yii2;
use yii\bootstrap5\ActiveForm;
use app\helpers\UtilityHelper;
use app\helpers\CartHelper;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Order';

$order_link = Url::to(['/order']);
$next_page = Url::to(['/order/thankyou']);
$newRoot = Yii::$app->urlManager->baseUrl;
$imagePath = $newRoot.'/images/keto-cider';

$this->params['data'] = [
  'body_class'  => 'order-page',
];

$product = $_SESSION['cart']['product'];
$amount = number_format($product['amount'], 2, '.', '');

$product_id = (isset($product['is_subs']) && $product['is_subs']) ? $product['subs_id'] : $product['id'];
$total = $amount;
$promo_code = [];

if (isset($_SESSION['promo_code'])) {
  $promo_code = $_SESSION['promo_code'];
}
?>
<main class="order-page main-page float-left w-100" id="wrapper">
  <?php $form = ActiveForm::begin(['id'=>'make-order','enableAjaxValidation'=>TRUE,'layout'=>'default',]); ?>
    <?= $form->field($model, 'keyword', ['options' => ['class'=>'']])->hiddenInput(['value' => (isset($_GET['keyword'])) ? $_GET['keyword'] : ''])->label(FALSE) ?>
    <?= $form->field($model, 'adgroupid', ['options' => ['class'=>'']])->hiddenInput(['value' => (isset($_GET['adgroupid'])) ? $_GET['adgroupid'] : ''])->label(FALSE) ?>
    <?= $form->field($model, 'utm_campaign', ['options' => ['class'=>'']])->hiddenInput(['value' => (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : ''])->label(FALSE) ?>
    <?= $form->field($model, 'utm_content', ['options' => ['class'=>'']])->hiddenInput(['value' => (isset($_GET['utm_content'])) ? $_GET['utm_content'] : ''])->label(FALSE) ?>
    <input type="hidden" name="next_page" value="<?= $next_page ?>">

    <input type="hidden" name="product_id" value="<?= $product_id; ?>">

    <!-- Summary Section -->
    <section class="summary-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="cart-product-items pe-lg-4">
              <div class="table-head d-none d-md-block">
                <div class="row align-items-center">
                  <div class="col-md-10">Product</div>
                  <div class="col-md-2 text-center">Price</div>
                </div>
              </div>
              <div class="table-body">
                <div class="cart-item">
                  <div class="row align-items-center">
                    <div class="col-md-10 mb-md-0 d-flex align-items-center">
                      <div class="seal">
                        <img src="<?= $imagePath; ?>/s1/money-back.png" alt="" class="img-fluid mx-auto">
                      </div>
                      <h4>90-Day Money Back <br class="d-none d-md-block">Guarantee</h4>
                    </div>
                    <div class="col-md-2 text-md-center text-end">
                      <span class="me-2 d-md-none">Price: </span> FREE
                    </div>
                  </div>
                </div>
                <div class="cart-item border-0">
                  <div class="row align-items-center">
                    <div class="col-md-10 mb-md-0 d-flex align-items-center">
                      <div class="seal">
                        <img src="<?= $imagePath; ?>/s1/express-shipping.png" alt="" class="img-fluid mx-auto">
                      </div>
                      <h4>Express Shipping <span>(1-2 Day Shipping)</span></h4>
                    </div>
                    <div class="col-md-2 text-md-center text-end">
                      <span class="me-2 d-md-none">Price: </span> FREE
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <aside class="cart-summary">
              <h3>Summary</h3>
              <div class="summary-items">
                <div class="cart-item ">
                  <div class="details">
                    <div class="bottle text-center">
                      <img src="<?= $imagePath; ?>/s1/<?=$product['product_key'];?>.jpg" alt="" class="img-fluid mx-auto">
                    </div>
                    <div class="text">
                      <h4><?= $product['name']; ?></h4>
                      Quantity: 1
                    </div>
                  </div>
                  <div class="price">$<?=number_format($amount, 2, '.', '');?></div>
                </div>

                <?php if ($promo_code): ?>
                  <?php 
                    $discount = $promo_code['discount'];
            
                    if ($promo_code['type'] == 2) {
                      $discount = number_format(($discount / 100) * $amount, 2);
                    }
            
                    if ($amount >= $discount){
                      $total = number_format($amount - $discount, 2);
                      $discount =  number_format($discount, 2);
                    }else{
                      $discount =  number_format(0, 2);
                    }
                  ?>
                  <div class="cart-item py-2">
                    <div class="details">
                      <div class="text">
                        <h4 class="small">PROMO CODE: <?=$promo_code['code']; ?></h4>
                      </div>
                    </div>
                    <div class="price">- $<?=number_format($discount, 2, '.', '');?></div>
                  </div>
                <?php endif; ?>

              </div>
              
              <div class="order-total">
                <div class="row">
                  <div class="col-6 text-start">Order Total</div>
                  <div class="col-6 text-end">$<span id="total"><?=number_format($total, 2, '.', '');?></span></div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Seals Section -->
    <section class="seals-section">
      <div class="container text-center">
        <div class="scroll-bar">Scroll Down to Complete Checkout</div>
        <div class="seals">
          <img src="<?= $imagePath; ?>/s1/money-back2.png" class="img-fluid mx-md-3 mx-2" alt="">
          <img src="<?= $imagePath; ?>/s1/made-in-usa.png" class="img-fluid mx-md-3 mx-2" alt="">
        </div>
      </div>
    </section>
    <!-- Order Process -->
    <section class="order-section">
      <div class="container">
        <!-- Step 1 -->
        <div class="panel first_step mt-0">
          <h3 class="head">
            <div class="step">Step 1: </div>
            <div class="label">Shipping Information</div>
          </h3>
          <div class="body">
            <div class="row">
              <div class="col-md-6">
                <?= $form->field($model, 'firstName', 
                  ['inputOptions' => ['placeholder' => 'First Name'], 'options' => ['class'=>'input-form']]) ?>
              </div>
              <div class="col-md-6">
                <?= $form->field($model, 'lastName',
                  ['inputOptions' => ['placeholder' => 'Last Name'], 'options' => ['class'=>'input-form']]) ?>
              </div>
              <div class="col-md-6">
                <?= $form->field($model, 'email',
                  ['inputOptions' => ['placeholder' => 'Email Address'], 'options' => ['class'=>'input-form']])
                    ->textInput()->input('email',['maxlength' => true]) ?>
              </div>
              <div class="col-md-6">
                <?= $form->field($model, 'phone',
                  ['inputOptions' => ['placeholder' => 'Phone'], 'options' => ['class'=>'input-form']])
                    ->textInput()->input('tel', ['maxlength' => true]) ?>
              </div>
              <div class="col-md-6">
                <?= $form->field($model, 'shippingAddress1',
                  ['inputOptions' => ['placeholder' => 'Shipping Address'], 'options' => ['class'=>'input-form']]) ?>
              </div>
              <div class="col-md-6">
                <?= $form->field($model,'shippingCity',
                  ['inputOptions' => ['placeholder' => 'Shipping City'], 'options' => ['class'=>'input-form']]) ?>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <?= $form->field($model, 'shippingCountry', ['options' => ['class' => 'input-form']])->dropDownList($model->getCountries(), ['onchange' => 'getState(this.value, "[name=\'OrderForm[shippingState]\']")']) ?>
                  </div>
                  <div class="col-md-6">
                    <?= $form->field($model, 'shippingState', ['options' => ['class' => 'input-form']])->dropDownList($model->getStates(), ['prompt' => 'Select State / Province']) ?>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <?= $form->field($model,'shippingZip',
                  ['inputOptions' => ['placeholder' => 'Shipping Zip'], 'options' => ['class'=>'input-form']])->input('tel') ?>
              </div>
            </div>
            <div class="text-center button-container">
              <button type="button" class="btn first_step_button gradient-button">Continue To Step 2</button>
            </div>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="panel second_step" style="display: none;">
          <h3 class="head">
            <div class="step">Step 2: </div>
            <div class="label">Credit Card Information</div>
          </h3>
          <div class="body">
            <div class="payment-method">
              <?= $form->field($model, 'payment_processor', ['options' => ['class'=>'']])->hiddenInput(['value' => 'credit_card'])->label(FALSE); ?>      
            </div>
            <div class="row">
            
              <div class="col-md-12">
              <input type="hidden" name="OrderForm[creditCardType]" id="ccType" value="">
                <?= $form->field($model,'cardNumber', ['inputOptions' => ['placeholder' => 'Credit Card Number'], 'options' => ['class' => 'input-form cc_field']])->textInput(['maxlength' => TRUE])->input('tel') ?>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-6">
                    <?= $form->field($model, 'fields_expmonth',
                    ['options' => ['class' => 'input-form cc_field']])->dropDownList($model->getMonths(), 
                      ['prompt' => ['text' => 'MONTH', 'options' => ['disabled' => TRUE, 'selected' => TRUE]],'onchange' => '$("[name=\'OrderForm[fields_expyear]\']").blur();']) ?>
                  </div>
                  <div class="col-6">
                    <?= $form->field($model, 'fields_expyear',
                      ['options' => ['class' => 'input-form cc_field']])
                      ->dropDownList($model->getYears(),
                        ['prompt' => ['text' => 'YEAR', 'options' => ['disabled' => TRUE, 'selected' => TRUE]],'onchange' => '$("[name=\'OrderForm[fields_expmonth]\']").blur();']) ?>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <?= $form->field($model, 'cvv',
                  ['inputOptions' => ['placeholder' => 'CVV'], 'options' => ['class' => 'input-form cc_field']])->textInput(['maxlength' => TRUE]) ?>
                </div>
            </div>
            <div class="agree-checkbox">
              <?= $form->field($model, 'terms', ['options' => ['class' => 'input-form']])->checkbox(['checked' => 'true'])->label('<small>Click the checkbox to agree to the <a href="'. Url::to(['/terms']) .'">Subscription Terms and Conditions.</a></small>') ?>
            </div>
            <div class="text-center button-container">
              <?= \yii\bootstrap5\Html::submitButton('COMPLETE MY ORDER', ['class' => 'btn cc_field gradient-button', 'id' => 'submitBtn']) ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php ActiveForm::end(); ?>
</main>
<!-- Modal -->
<div class="modal hide" id="errModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body err-modal-content">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJsFile(Url::to(['/js/order.js']), ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile(Url::to(['/js/cleave.js']), ['depends' => 'yii\web\JqueryAsset']);
$this->registerJs(<<<JS
  // Form Submit Event
  make_order("#make-order", "#submitBtn", '$order_link/make-order2');
  
  var cleave = new Cleave('#orderform-cardnumber', {
            delimiter: '-',
            creditCard: true,
            onCreditCardTypeChanged: function (type) {
                type = type.split("15")[0];
                $('#orderform-cardnumber').removeClass('amex visa mastercard discover unknown').addClass(type);
                $('.creditCardType-box > div').removeClass('active');
                if (type != 'unknown') {
                    $('.cc-' + type).addClass('active');
                    $('#ccType').val(type);
                }
            }
        });

  $(".second_step").hide();
  $(".first_step_button").click(function(e) {
    e.preventDefault();
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-firstname');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-lastname');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-email');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-phone');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-shippingaddress1');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-shippingcity');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-shippingcountry');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-shippingstate');
    $('#make-order').yiiActiveForm('validateAttribute', 'orderform-shippingzip');

    if($('.first_step').has('.is-invalid').length === 0 && check_form_fields('.first_step')){
      $(".second_step").show();

      $("html,body").animate({ scrollTop: $(".second_step").offset().top }, 200);
    }
  });

  function check_form_fields(step) {
      var checking = 0;

      $.each($( step + " input[aria-required=true], #orderform-shippingstate"),
          function (index) {
              if ($(this).val() == '') {
                  checking++
              }
          });

      if(checking == 0){
          return true
      }else{
          return false
      }
  }
JS
);
?>