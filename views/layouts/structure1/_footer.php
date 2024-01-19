<?php

use yii\helpers\Url;

$newRoot = Yii::$app->urlManager->baseUrl;

?>
<!-- order section disclaimer -->
<section class="section-disclaimer">
    <div class="container text-center">
        <div class="disclaimer-row">
            <p>Disclaimer: These statements have not been evaluated by the Food and Drug Administration.
                <br />This product is not intended to diagnose, treat, cure, or prevent any disease.
            </p>
        </div>
    </div>
</section>
<!-- order section disclaimer -->
<footer>
    <div class="container">
        <div class="row flex-column justify-content-center align-items-center">
            <div class="col-12 text-center">
            <a href="/" role="tab"><img src="<?=$newRoot;?>/images/keto-cider/logo.svg" class="img-fluid" /></a>
            </div>
            <div class="col-auto mt-3">
                <div class="call">
                    <div class="label text-gold">QUESTIONS?</div>
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
                    </nav><!-- /.navbar-collapse -->
                    <p class="text-center">Keto Cider Gummies. © <?= date('Y'); ?>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
