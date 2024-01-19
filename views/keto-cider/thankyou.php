<?php

use yii\helpers\Url;

$this->title = 'Thank You! - ' . Yii::$app->params['SiteName'];

$session     = Yii::$app->session;
$home_page = Url::to([$session['home_page_url'] ?? '/']);
$newRoot     = Yii::$app->urlManager->baseUrl;

$this->params['data'] = [
  'canonical'   => $newRoot  . '/keto-cider/thankyou',
];
?>
<!-- Main Container -->
<section class="thanksyou-hero-section">
        <div class="container">
            <h1 class="page-title"><span>Thank you</span> for your order!</h1>
            <h4>be a vip customer now</h4>
            <div class="register-button">
                <p><img src="<?=$newRoot;?>/images/keto-cider/icon/down-arrow.png" alt="">Register now for <a href="#">Free</a><img src="<?=$newRoot;?>/images/keto-cider/icon/down-arrow.png" alt=""></p>
            </div>
            <div class="row">
                <div class="col-lg-5 text-end">
                    <img src="<?=$newRoot;?>/images/keto-cider/product/thankyou-banner-product.png" alt="" class="thanksyou-hero-product-image img-fluid">
                </div>
                <div class="col-lg-7">
                    <ul class="thanksyou-hero-list">
                        <li>VIP Loyalty Discount</li>
                        <li>VIP Extra Discount - Essential Supplements</li>
                        <li>VIP Account Specialists</li>
                        <li>VIP Price Lock Guarantee</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<main class="thankyou-page <?php if (str_contains($home_page, 'store')) echo 's2' ?>">
  <section class="sec_2 login-section">
    <div class="container login-container">
      <div class="wrapper">
      <h2>limited-time only</h2>
            <h5>Register your <span>vip Account</span> now</h5>

        <link rel="stylesheet" href="https://cdn.eztexting.com/assets/signup-forms/signup-forms-styles.min.css" type="text/css">
        <form class="c-web-form p-0" ngNoForm method="POST" action="https://widgy-lb.prd.cfire.io/EZ/widget/subscribe" style="background:transparent; border: none">
          <input type="hidden" name="serializedData" id="jwt" value="eyJlbmMiOiJBMTI4R0NNIiwiYnJhbmQiOiJFWiIsImFsZyI6ImRpciIsIndpZGdldElkIjoiMTY0ZjBkZDEtMTNkNS00MjlkLWE5Y2ItYjk3ZGQ1MDVjYjY0In0..Ww_IpqoYZPq8D6fI.RhEUXJuL5aPFoPuUdgqVSo7XYdhL2ayvgtanlmVM83t6BPhGm7iRhRjfr-JnmA9FzfV3up-dRPKaLqx_NVCUWbjlWlkKF1EDRKG0TMnRpLSy1p3vBauq7UMy0IZZFKneyntweqMFFnUtGdVhF04xVOQRtZ1zKkHDH1p_3E5ZCM5-bjw59xWa2vGBFaO43Ju1h_KsDtBJiYiB8SaB99Uu4vfvrAnnMcO4jDOjie1XO_Smmg.xb0oOdKhTpvpAxvOWhVQBQ">

          <ul class="c-web-form__be-errors"></ul>
          <div>
            <div class="c-web-form__control-group form-group">
             <div class="c-web-form__error" id="c-web-form-phoneNumber-error"></div>
              <input value="" type="tel" name="phoneNumber" id="c-web-form-phoneNumber" placeholder="Enter your phone number here" maxlength="20">
            </div>
          </div>

          <div class="c-web-form__control-group">
            <input class="c-web-form__checkbox" type="checkbox" id="c-web-form-agree" checked>

          </div>
          <div class="c-web-form__control-group">
            <button type="submit" class="c-web-form__submit button submit-button" disabled>Submit</button>
          </div>
          <div class="description">
                <h3><span>VIP CUSTOMERS</span> GET EXCLUSIVE ACCESS TO THESE AMAZING BENEFITS!</h3>
                <div class="row">
                    <div class="col-lg-8">
                        <ul>
                            <li><b>VIP</b> Loyalty Discount</li>
                            <li><b>VIP</b> Extra Discount – Essential Supplements</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul>
                            <li><b>VIP</b> Account Specialists</li>
                            <li><b>VIP</b> Price Lock Guarantee</li>
                        </ul>
                    </div>
                </div>
            </div>
          <p class="c-success-message">Thank you for signing up! You will receive an SMS message shortly</p>

        </form>
        <script type="text/javascript" src="https://cdn.eztexting.com/assets/signup-forms/signup-forms-validation.min.js"></script>
      </div>
    </div>
  </section>
</main>



<section class="page-description-section">
        <div class="container">
            <p>Disclaimer: These statements have not been evaluated by the Food and Drug Administration. This product is
                not intended to diagnose, treat, cure, or prevent any disease.</p>
        </div>
    </section>