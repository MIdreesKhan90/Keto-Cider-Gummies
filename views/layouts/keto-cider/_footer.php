<?php

use yii\helpers\Url;

$newRoot = Yii::$app->urlManager->baseUrl;

?>

<footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?=$newRoot;?>/images/keto-cider/logo.png" alt="" class="footer-logo">
                </div>
                <div class="col-lg-6">
                    <div class="footer-menu">
                        <div class="footer-contact">
                            <div class="contact-number d-flex align-items-center">
                                <img src="<?=$newRoot;?>/images/keto-cider/icon/call-icon.png" alt="">
                                <div>
                                    <p class="m-0">Call Toll Free To Order:</p>
                                    <a href="tel:<?= Yii::$app->params['PhoneNumber'] ?>"><?= Yii::$app->params['PhoneNumber'] ?></a>
                                </div>
                            </div>
                            <a href="<?= Url::to([$session['order_page_url']]); ?>" class="order-button button">ORDER NOW</a>
                        </div>
                        <ul>
                            <li><a href="<?= Url::to(['/privacy']); ?>">Privacy</a></li>
                            <li><a href="<?= Url::to(['/terms']); ?>">Terms & Conditions</a></li>
                            <li><a href="<?= Url::to(['/return']); ?>">Return Policy</a></li>
                            <li><a href="<?= Url::to(['/dmca']); ?>">DMCA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <p>© Copyright <?= date('Y'); ?> | Keto Cider Gummies | All Rights Reserved.</p>
        </div>
    </footer>

 <!-- order section disclaimer -->
 <!-- <section class="section-disclaimer">
            <div class="container text-center">
                <div class="disclaimer-row">
                    <p>† Disclaimer: These statements have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease. Product results may vary from person to person.
                    </p>
                </div>
            </div>
        </section> -->
        <!-- order section disclaimer -->

<!-- <footer>
    <div class="container">
        <div class="row flex-column justify-content-center align-items-center">
            <div class="col-12 text-center">
            <a href="/" role="tab"><img src="<?=$newRoot;?>/images/keto-cider/logo.png" class="img-fluid" /></a>
            </div>
            <div class="col-auto mt-3">
                <div class="call">
                    <a class="value" href="tel:<?= Yii::$app->params['PhoneNumber'] ?>"><?= Yii::$app->params['PhoneNumber'] ?></a>
                </div>
            </div>
            <div class="col-12">
                <div class="footer-contain">
                    <nav class="navbar navbar-default my-4">
                        <ul class="nav navbar-nav flex-row justify-content-center">
                            <li><a href="<?= Url::to(['/privacy']); ?>">Privacy Policy</a></li>
                            <li><a href="<?= Url::to(['/terms']); ?>">Terms & Conditions</a></li>
                            <li><a href="<?= Url::to(['/return']); ?>">Return Policy</a></li>
                            <li><a href="<?= Url::to(['/dmca']); ?>">DMCA</a></li>
                        </ul>
                    </nav>/.navbar-collapse -->
                    <!-- <p class="text-center">Keto Cider Gummies. © <?= date('Y'); ?>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer> -->
