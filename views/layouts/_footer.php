<?php

/* @var $this yii\web\View */


use yii\helpers\Url;


?>

<footer>
    <div class="bg-dark">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/468x60?text=Logo" alt="logo" class="img-fluid mb-2">
                    <p class="text-white-50 small text-center text-md-left">Copyright <?=date('Y') ?> <span class="red">|</span>   <?= Yii::$app->params['SiteName'] ?> Inc <span class="red">|</span> All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center">
                        <div class="text-center">
                            <a  href="tel:<?= Yii::$app->params['PhoneNumber'] ?>">
                              <?= Yii::$app->params['PhoneNumber'] ?>
                            </a>

                        </div>
                        <ul class="nav  d-flex  my-4 mt-md-0 mb-md-0  mx-auto mr-md-0">
                            <li class="px-2"><a href="<?= Url::to([$session['home_page_url'] ?? '/']); ?>" class="">HOME</a></li>
                            <li class="px-2"><a href="<?= Url::to([$session['order_page_url'] ?? '/order']); ?>" class="">ORDER</a></li>
                        </ul>
                    </div>
                    <div class="row mt-4">

                        <ul class="nav d-flex ml-auto font-14">
                            <li class="px-2"><a href="<?= Url::to(['/privacy']); ?>" class="">Privacy Policy</a></li>
                            <li class="px-2"><a href="<?= Url::to(['/terms']); ?>" class="">Terms & Conditions</a></li>
                            <li class="px-2"><a href="<?= Url::to(['/return']); ?>" class="">Return Policy</a></li>
                            <li class="px-2"><a href="<?= Url::to(['/dmca']); ?>" class="">DMCA</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
