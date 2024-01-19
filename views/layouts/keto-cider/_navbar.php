<?php

use yii\helpers\Url;

$home_page = Url::to([$session['home_page_url'] ?? '/']);
$newRoot = Yii::$app->urlManager->baseUrl;

?>

<!-- Header -->
<!-- <header class="order-header">
    <nav class="navbar navbar-light justify-content-between px-0">
        <div class="container">
            <div class="d-flex align-items-md-center w-100">
                <div class="left mr-3">
                    <a href="<?= Url::to([$session['home_page_url']]); ?>" class="logo" role="tab">
                        <img src="<?= $newRoot; ?>/images/keto-cider/logo.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="right text-lg-end">
                    <div class="d-flex justify-content-end align-items-end align-items-center flex-wrap flex-lg-nowrap ps-2">
                        <div class="secure mb-md-0">
                            <img src="<?= $newRoot; ?>/images/keto-cider/secure-seals.png" alt="" class="img-fluid">
                        </div>
                        Phone Container
                        <div class="phone-container mx-md-4">
                            <div class="text">
                                <div class="label">Call Us At:</div>
                                <a class="value" href="tel:<?= Yii::$app->params['PhoneNumber'] ?>"><?= Yii::$app->params['PhoneNumber'] ?></a>
                            </div>
                        </div>
                        Order Button
                        <div class="buy-container">
                            <a href="<?= Url::to([$session['order_page_url']]); ?>" class="btn site-btn d-md-block d-none">Order</a>
                            <div class="menuIcon"><span></span></div>
                            <div class="menuMain">
                                <nav class="navigation">
                                    <ul>
                                        <li><a href="<?= Url::to([$session['order_page_url']]); ?>">Order</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </nav>
</header> -->


<header class="header-section">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= Url::to([$session['home_page_url']]); ?>"><img src="<?= $newRoot; ?>/images/keto-cider/logo.png" class="desktop-logo" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/mobile-logo.png" class="mobile-logo" alt=""></a>
                <div class="secure-logo-images">
                    <img src="<?= $newRoot; ?>/images/keto-cider/company-logo/norton-secured-logo.png" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/company-logo/verisign-secured-logo.png" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/company-logo/mc-afee-secure-logo.png" alt="">
                </div>
                <div class="contact-number d-flex align-items-center">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/call-icon.png" alt="">
                    <div>
                        <p class="m-0">Call Toll Free To Order:</p>
                        <a href="tel:<?= Yii::$app->params['PhoneNumber'] ?>"><?= Yii::$app->params['PhoneNumber'] ?></a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= Url::to([$session['order_page_url']]); ?>">Order</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
</header>