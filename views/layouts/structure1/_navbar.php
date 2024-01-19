<?php

use yii\helpers\Url;

$home_page = Url::to([$session['home_page_url'] ?? '/']);
$newRoot = Yii::$app->urlManager->baseUrl;

?>

<!-- Header -->
<header class="order-header">
  <nav class="navbar navbar-light justify-content-between px-0">
    <div class="container">
      <div class="d-flex align-items-md-center w-100">
        <div class="left mr-3">
          <a href="<?=Url::to([$session['home_page_url']]);?>" class="logo" role="tab">
            <img src="<?= $newRoot; ?>/images/keto-cider/logo.svg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="right text-lg-end">
          <div class="d-flex justify-content-end align-items-end align-items-center flex-wrap flex-lg-nowrap ps-2">
            <div class="secure mb-md-0">
              <img src="<?= $newRoot; ?>/images/keto-cider/secure-seals.png" alt="" class="img-fluid">
            </div>
            <!-- Phone Container -->
            <div class="phone-container mx-md-4">
              <div class="text">
                <div class="label">Call Us At:</div>
                <a class="value" href="tel:<?= Yii::$app->params['PhoneNumber'] ?>"><?= Yii::$app->params['PhoneNumber'] ?></a>
              </div>
            </div>
            <!-- Order Button -->
            <div class="buy-container">
              <a href="<?=Url::to([$session['order_page_url']]);?>" class="btn site-btn d-md-block d-none">Order</a>
              <div class="menuIcon"><span></span></div>
            <div class="menuMain">
                    <nav class="navigation">
                        <ul>
                            <li><a href="<?=Url::to([$session['order_page_url']]);?>">Order</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
          </div>
        </div>

      </div>
  </nav>
</header>