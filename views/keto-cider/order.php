<?php

use Codeception\Module\Yii2;
use yii\bootstrap4\ActiveForm;
use app\helpers\UtilityHelper;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Keto Cider Gummies | Order';
$order_link  = Url::to(['/order']);
$next_page   = Url::to(['/keto-cider/upsell']);
$newRoot     = Yii::$app->urlManager->baseUrl;

?>

<section class="order-hero-section">
    <div class="container">
        <h1 class="page-title">ORDER <span>KETO CIDER</span> BELOW</h1>
        <p>EXPERIENCE FAST, EFFECTIVE, and SUSTAINABLE WEIGHT LOSS!</p>
        <img src="<?= $newRoot; ?>/images/keto-cider/blog-post-images/order-hero-image.jpg" class="img-fluid" alt="">
        <h3>91% of customers see exceptional results with regular use!</h3>
    </div>
</section>
<section class="order-commit-section">
    <div class="container">
        <h1 class="title">Discover the True Power of Keto with <span>Keto Cider Gummies</span>!</h1>
        <p>See what our satisfied customers have to say about our formula!</p>
        <div class="row">
            <div class="col-lg-4">
                <div class="order-commit-card">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/red-quote-copy-excerpt-svgrepo-com.png" class="red-quote-img" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/toppng.com-five-star-rating.png" alt="" class="card-rating-img">
                    <p>Easily the best weight loss supplement I’ve ever tried!</p>
                    <div class="avatar">
                        <p><b>Terry P. 43</b> years old</p>
                        <p><img src="<?= $newRoot; ?>/images/keto-cider/icon/verified-svgrepo-com.png" alt="">Verified Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-commit-card">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/red-quote-copy-excerpt-svgrepo-com.png" class="red-quote-img" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/toppng.com-five-star-rating.png" alt="" class="card-rating-img">
                    <p>Keto Cider gummies is the only supplement that worked for me!</p>
                    <div class="avatar">
                        <p><b>Carl B. 35</b> years old</p>
                        <p><img src="<?= $newRoot; ?>/images/keto-cider/icon/verified-svgrepo-com.png" alt="">Verified Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-commit-card">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/red-quote-copy-excerpt-svgrepo-com.png" class="red-quote-img" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/toppng.com-five-star-rating.png" alt="" class="card-rating-img">
                    <p>I’ve been following Keto for years, and Keto Cider gummies just took it to a new level!</p>
                    <div class="avatar">
                        <p><b>Errol G. 33</b> years old</p>
                        <p><img src="<?= $newRoot; ?>/images/keto-cider/icon/verified-svgrepo-com.png" alt="">Verified Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-commit-card">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/red-quote-copy-excerpt-svgrepo-com.png" class="red-quote-img" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/toppng.com-five-star-rating.png" alt="" class="card-rating-img">
                    <p>It feels good to lose weight easily! Keto Cider Gummies is the real deal!</p>
                    <div class="avatar">
                        <p><b>Matt J. 35</b> years old</p>
                        <p><img src="<?= $newRoot; ?>/images/keto-cider/icon/verified-svgrepo-com.png" alt="">Verified Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-commit-card">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/red-quote-copy-excerpt-svgrepo-com.png" class="red-quote-img" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/toppng.com-five-star-rating.png" alt="" class="card-rating-img">
                    <p>No stress. No frustration. Keto Cider Gummies work!</p>
                    <div class="avatar">
                        <p><b>Jeff P. 48</b> years old</p>
                        <p><img src="<?= $newRoot; ?>/images/keto-cider/icon/verified-svgrepo-com.png" alt="">Verified Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-commit-card">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/red-quote-copy-excerpt-svgrepo-com.png" class="red-quote-img" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/icon/toppng.com-five-star-rating.png" alt="" class="card-rating-img">
                    <p>I can’t imagine my life now without Keto Cider Gummies</p>
                    <div class="avatar">
                        <p><b>Ben N. 31</b> years old</p>
                        <p><img src="<?= $newRoot; ?>/images/keto-cider/icon/verified-svgrepo-com.png" alt="">Verified Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order-unlock-power-section">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?= $newRoot; ?>/images/keto-cider/product/order-unlock-product.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 class="title text-start">UNLOCK THE POWER OF <span>KETO WITH KETO CIDER GUMMIES</span>!</h1>
                <ul>
                    <li>Advanced Weight Loss Technology</li>
                    <li>Superior Diet Control</li>
                    <li>Improved Nutrient Absorption</li>
                    <li>Accelerated Metabolism</li>
                    <li>100% Money-Back Guarantee</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="order-transform-section">
    <div class="container">
        <div class="order-transform-content">
            <h1 class="title">Transform your body for less than <span>$2 a day</span>!</h1>
            <img src="<?= $newRoot; ?>/images/keto-cider/transform-section-image.jpg" alt="" class="img-fluid transform-section-image">
            <hr>
            <h1 class="title">FORMULATED TO CHANGE LIVES</h1>
            <p>Introducing <span>Keto Cider Gummies</span>, a superior weight loss formula that offers a safe,
                effective, and
                dependable approach to shedding those unwanted pounds. Our exceptional formula provides a superior
                and sustainable method to achieve remarkable weight loss results. By harnessing the full potential
                of ACV (Apple Cider Vinegar), each delightful gummy is packed with our ultra-potent formula, giving
                you
                an easy and convenient way to stay on top of your diet and weight loss goals.</p>
            <p>To ensure your satisfaction, we offer an industry-leading 100% money-back guarantee on all purchases.
                If, for any reason, you are not completely satisfied with your order, simply give us a call and we
                will provide a full refund of your purchase price. It's as simple as that!</p>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="<?= $newRoot; ?>/images/keto-cider/product/thankyou-banner-product.png" alt="" class="img-fluid transform-product">
                </div>
                <div class="col-lg-7">
                    <ul>
                        <li>Advanced Natural Weight Loss Formula</li>
                        <li>Designed and Formulated to Boost Keto Diet Results</li>
                        <li>100% money-back guarantee</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="important-section">
    <div class="container">
        <h1>IMPORTANT!</h1>
        <h3>READ BEFORE COMPLETING YOUR ORDER</h3>
        <p>See what our satisfied customers have to say about our formula!</p>
        <div class="important-card">
            <p><span>Achieving weight loss requires focus and dedication.</span> Keto Cider Gummies aims to simplify
                the weight loss journey by assisting individuals in transitioning to a healthier lifestyle. With the
                support of
                Keto Cider Gummies, you can effectively manage your food and calorie intake, empowering you to stay
                focused and reach your fitness goals.</p>
        </div>
        <div class="important-card">
            <p><span>No supplement can make you lose weight overnight.</span> It takes time for your body to adapt
                to the changes in your diet and lifestyle. However, you can have confidence that Keto Cider Gummies
                is the best
                weight loss formula to guide you on your path to success.</p>
        </div>
        <div class="important-card">
            <p><span>Maintaining healthy habits is crucial.</span> By incorporating Keto Cider Gummies into your
                daily fitness routine, you can overcome hunger pangs and cravings, enabling you to adhere to your
                chosen diet.
                Keto Cider Gummies is versatile and can effectively support you in various restrictive weight loss
                diets.</p>
        </div>
        <div class="important-card">
            <p><span>Take advantage of your VIP Bonus!</span> Your purchase today automatically qualifies you as a
                VIP customer. Simply place your order and register your account for free to unlock exclusive
                benefits. As a VIP
                customer, you will receive special discounts, free products, bonuses, and locked-in pricing!</p>
        </div>
    </div>
</section>
<section class="comparison-section">
    <div class="container">
        <h1 class="title"><span>Keto Cider Gummies</span> vs Other Weight Loss Pills</h1>
        <div class="comparison-product-content">
            <div class="row gx-lg-5">
                <div class="col-lg-6">
                    <img src="<?= $newRoot; ?>/images/keto-cider/product/keto-cider-product.png" alt="" class="img-fluid mx-auto d-block">
                    <div class="comparison-product-left">
                        <h6>Superior Weight Loss</h6>
                        <p>Naturally, burn fat and lose weight!</p>
                    </div>
                    <div class="comparison-product-left">
                        <h6>Natural Diet Support</h6>
                        <p>Supports appetite suppression</p>
                    </div>
                    <div class="comparison-product-left comparison-product-127px">
                        <h6>Advanced Nutrient Bioavailability</h6>
                        <p>Supports overall health while on a low-calorie diet</p>
                    </div>
                    <div class="comparison-product-left">
                        <h6>Caffeine and Stimulant-free</h6>
                        <p>Safe and effective to take daily!</p>
                    </div>
                    <div class="comparison-product-left comparison-product-83px">
                        <h6>EXCLUSIVE VIP BENEFITS</h6>
                        <p>Get up to 50% off every month!</p>
                    </div>
                    <div class="comparison-product-left">
                        <h6>100% Money-Back Guarantee</h6>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="<?= $newRoot; ?>/images/keto-cider/product/maximizer-product.png" alt="" class="img-fluid mx-auto d-block">
                    <div class="comparison-product-right">
                        <h6>Unverified weight loss benefits</h6>
                    </div>
                    <div class="comparison-product-right">
                        <h6>Potentially hazardous with long-term use</h6>
                    </div>
                    <div class="comparison-product-right comparison-product-127px">
                        <h6>Unverified weight loss benefits</h6>
                    </div>
                    <div class="comparison-product-right">
                        <h6>Can cause caffeine crashes and mood swing</h6>
                    </div>
                    <div class="comparison-product-right comparison-product-83px">
                        <h6>NO LONG-TERM BENEFITS</h6>
                    </div>
                    <div class="comparison-product-right">
                        <h6>Minimal customer <br> support</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <p><span>Keto Cider Gummies</span> is made to exceed the capabilities of conventional weight loss
                supplements. Our objective is to provide a sustainable formula for weight loss that encourages a
                healthy and natural
                approach, enabling you to maintain your progress in the long run.</p>
            <p>What truly sets <span>Keto Cider Gummies</span> apart is its unmatched versatility. Our formula
                seamlessly aligns with the principles of the Keto diet and other restrictive weight loss diets,
                empowering you to achieve your long-term weight loss goals
                while remaining dedicated to your chosen plan. The exceptional quality of our formula lies in its
                ability to adapt to different weight loss stages and approaches. This extraordinary adaptability is
                why many of our customers remain loyal to our product for months and even years!</p>
            <img src="<?= $newRoot; ?>/images/keto-cider/description-card-image.jpg" class="img-fluid" alt="">
        </div>
    </div>
</section>
<section class="sustainable-section">
    <div class="container">
        <div class="sustainable-content">
        <h1 class="title">FASTER, SAFER, AND MORE SUSTAINABLE WEIGHT LOSS</h1>
        <p>Our main objective in developing <span>Keto Cider Gummies</span> was to enhance and simplify the weight
            loss journey for individuals dedicated to adopting a healthier lifestyle. Through extensive research and
            ongoing refinement, we have created an advanced solution that utilizes cutting-edge techniques to
            maximize
            weight loss and make it easier for anyone to lose weight.</p>
        <p>In our pursuit of optimal weight loss results, we are excited to introduce two revolutionary supplements:
            <b>Acai Max</b> and <b>PreFiber Max</b>.
            These exceptionalproducts perfectly complement <span>Keto Cider Gummies</span>, providing a
            comprehensive and well-rounded weight loss experience. By incorporating Acai Max and PreFiber Max into
            your daily routine,
            you can expect to achieve faster, more sustainable weight loss results.
        </p>
        </div>
        <div class="sustainable-product">
            <div class="row gx-lg-5">
                <div class="col-lg-6">
                    <div class="sustainable-product-card">
                        <img src="<?= $newRoot; ?>/images/keto-cider/product/acai-max-produect.png" alt="" class="img-fluid">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Acai Max</h5>
                            <h6>Normally $89.95</h6>
                        </div>
                        <p>is an elite weight loss formula that features highly concentrated extracts of Acai berry
                            to help improve digestion and appetite suppression to maximize your weight loss results
                        </p>
                        <button type="button" class="btn button">View Label</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sustainable-product-card prefiber-max-product-card">
                        <img src="<?= $newRoot; ?>/images/keto-cider/product/prefiber-max-product.png" alt="" class="img-fluid">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>PreFiber Max</h5>
                            <h6>Normally $89.95</h6>
                        </div>
                        <p>is a premium dietary fiber supplement equipped with superior prebiotic fiber
                            that helps enhance digestive health while optimizing fat absorption and metabolism.</p>
                        <button type="button" class="btn button">View Label</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="combo-section">
    <div class="container">
        <h1 class="title">THE MOST COMPLETE <span>WEIGHT LOSS</span> COMBO</h1>
        <p><span>Keto Cider Gummies</span> has revolutionized the concept of weight loss by providing an easy and
            hassle-free
            transition to the Keto diet. Building upon this innovation, our two premium supplement boosters take you
            even further, providing a safe, effective, and comprehensive solution to sustain your long-term weight
            loss goals.</p>
        <p>All three supplements are expertly formulated to deliver a powerful combination of
            weight-loss compounds that have a significant impact on your diet and metabolism. It is important to
            emphasize that we recommend taking all three supplements <span>ONLY</span> if you are fully committed
            and motivated
            to achieve rapid weight loss.</p>
        <p>Acai Max and PreFiber Max normally retail for $89.95 each, but if you
            order both supplements with Keto Cider Gummies, you only pay a total of $139.95, for a massive savings
            of $140 every month!</p>
        <div class="badge-logo">
            <img src="<?= $newRoot; ?>/images/keto-cider/badge-100-logo.png" alt="">
            <img src="<?= $newRoot; ?>/images/keto-cider/badge-logo.png" alt="">
        </div>
        <hr>
    </div>
</section>


<section class="order-section combo-section pt-0">
    <?php $form = ActiveForm::begin([
        'id'                   => 'make-order',
        'enableAjaxValidation' => TRUE,
        'layout'               => 'default',
    ]); ?>

    <?=
    /** @var TYPE_NAME $model */
    $form->field($model, 'keyword')
        ->hiddenInput(['value' => $_GET['keyword'] ?? ''])
        ->label(FALSE) ?>
    <?= $form->field($model, 'adgroupid')
        ->hiddenInput(['value' => $_GET['adgroupid'] ?? ''])
        ->label(FALSE) ?>
    <?= $form->field($model, 'utm_campaign')
        ->hiddenInput(['value' => $_GET['utm_campaign'] ?? ''])
        ->label(FALSE) ?>
    <?= $form->field($model, 'utm_content')
        ->hiddenInput(['value' => $_GET['utm_content'] ?? ''])
        ->label(FALSE) ?>

    <input type="hidden" name="next_page" value="<?= $next_page ?>">

    <!-- order section 8 -->
    <section class="order-section-8 ">
        <div class="container text-center">
            <div class="section-title">
            <h1 class="title">SELECT AN <span>OPTION BELOW</span></h1>
            <div class="optionsWrap">
                <div class="optionsList">
                    <?php
                    $default_product = 'prod2';
                    $product_options = [
                        'prod1' => [
                            'days' => 30,
                            'months' => 'one-month',
                            'image' => $newRoot . '/images/keto-cider/order/gallerythumnail-1.png',
                            'save' => '$50',
                            'cost' => '$2.66',
                            'description' => '1 Month Pro'
                        ],
                        'prod2' => [
                            'days' => 30,
                            'months' => 'one-month',
                            'image' => $newRoot . '/images/keto-cider/order/gallerythumnail-2.png',
                            'save' => '$170',
                            'cost' => '$4.66',
                            'description' => '1 Month Extreme'
                        ],
                        'prod3' => [
                            'days' => 90,
                            'months' => 'three-month',
                            'image' => $newRoot . '/images/keto-cider/order/gallerythumnail-3.png',
                            'save' => '$650',
                            'cost' => '$3.11',
                            'description' => '3 Month Extreme'
                        ],
                    ];
                    ?>
                    <?php foreach ($product_options as $key => $productInfo) :
                        $product = Yii::$app->params[$key];
                        $class_attr = str_replace("_", "-", $key);
                    ?>
                        <div class="orderProductBox">
                            <input type="radio" name="product_id" data-pp="<?= $product['pp_code'] ?>" data-amount="<?= $product['amount']; ?>" data-type="<?= $product['name'] ?>" data-days="<?= $productInfo['days'] ?>" data-months="<?= $productInfo['months'] ?>" data-image="<?= $productInfo['image'] ?>" data-save="<?= $productInfo['save'] ?>" data-cost="<?= $productInfo['cost'] ?>" data-description="<?= $productInfo['description'] ?>" value="<?= $key; ?>" id="<?= $key; ?>" <?= ($key == $default_product) ? 'checked' : ''; ?>>
                            <label for="<?= $key; ?>" class="orderProductInnerBox <?= $class_attr; ?>">
                                <img src="<?= $newRoot; ?>/images/keto-cider/order/<?= $class_attr; ?>.jpg" class="img-fluid normalImg" alt="">
                                <img src="<?= $newRoot; ?>/images/keto-cider/order/<?= $class_attr; ?>-selected.jpg" class="img-fluid selectedImg" alt="">
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- order section 8 -->
    <section class="paymentdetails combo-section pb-90">
        <div class="container">
            <?php // $form->field($model, 'productId') 
            ?>
            <h1 class="title"><span>START</span> YOUR ORDER</h1>
            <div class="form-step">
                <div class="form-header">
                    <h1>Step 1</h1>
                    <p>Enter your shipping information</p>
                </div>
                <div class="formout form-content">
                    <div class="form-controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <?= $form->field($model, 'firstName', ['options' => ['class' => 'form-group']])->textInput()->input('text', ['placeholder' => '']) ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'lastName', ['options' => ['class' => 'form-group']])->textInput()->input('text', ['placeholder' => '']) ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'email', ['options' => ['class' => 'form-group']])->textInput()->input('email', ['placeholder' => '']) ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'phone', ['options' => ['class' => 'form-group']])->textInput()->input('tel', ['placeholder' => '', 'maxlength' => 16]) ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'shippingAddress1', ['options' => ['class' => 'form-group']])->textInput()->input('text', ['placeholder' => '']) ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'shippingCity', ['options' => ['class' => 'form-group']])->textInput()->input('text', ['placeholder' => '']) ?>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <?= $form->field(
                                        $model,
                                        'shippingState',
                                        ['options' => ['class' => 'form-group col-md-8']]
                                    )
                                        ->dropDownList(
                                            $model->getStates(),
                                            ['prompt' => '']
                                        ) ?>
                                    <?= $form->field($model, 'shippingZip', ['options' => ['class' => 'form-group col-md-4 ps-md-0']])->textInput()->input('tel', ['placeholder' => '']) ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field(
                                    $model,
                                    'shippingCountry',
                                    ['options' => ['class' => 'form-group']]
                                )
                                    ->dropDownList(
                                        $model->getCountries(),
                                        ['onchange' => 'getState(this.value, "[name=\'OrderForm[shippingState]\']")']
                                    ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center pricButton continue_check_2">
                        <button id="continue-step-two" class="first_step_button btn-common button button-order">Continue To
                            Step 2</button>
                    </div>
                </div>
            </div>
            <div class="second_step form-step form-step-2">
                <div class="form-header">
                    <h1>Step 2</h1>
                    <p>Choose your payment method</p>
                </div>
                <div class="form-content">
                    <div class="payment-methods">
                        <?php
                        $payment_options = [
                            'credit_card' => 'Pay with Credit or Debit Card <br> <img src="' . $newRoot . '/images/cc/cc-icons.png" class="img-fluid ml-3">',
                            'paypal' => 'Pay with Paypal <br> <img src="' . $newRoot . '/images/keto-cider/icon/payment-cards-2.png" class="img-fluid ml-3 orderpaypalt">',
                        ];

                        $model->payment_processor = 'credit_card';
                        echo $form->field($model, 'payment_processor')
                            ->radioList(
                                $payment_options,
                                [
                                    'encode'   => FALSE,
                                    'onchange' => '
                        if($("[name=\'OrderForm[payment_processor]\']:checked").val() !== "credit_card"){
                        $(".cc_field input, .cc_field select").blur();
                        $(".cc_field").hide(); $(".pp_field").show();}else{$(".cc_field").show(); $(".pp_field").hide();  $(".cc_field input, .cc_field select").blur(); }'
                                ]
                            )
                            ->label(FALSE) ?>

                    </div>
                </div>
            </div>
            <div class="third_step">
                <div class="form-step form-step-3">
                    <div class="form-header">
                        <h1>Step 3</h1>
                        <p>Credit/Debit Card Information</p>
                    </div>
                    <div class="form-content">
                        <div class="lableh cc_field">
                            <input type="hidden" name="OrderForm[creditCardType]" id="ccType" value="">
                            <div class="row labels mmp">
                                <?= $form->field(
                                    $model,
                                    'fields_expmonth',
                                    ['options' => ['class' => 'form-group cc_field col-12']]
                                )
                                    ->dropDownList(
                                        $model->getMonths(),
                                        [
                                            'prompt'   => [
                                                'text'    => 'Select Credit Card',
                                                'options' => [
                                                    'disabled' => TRUE,
                                                    'selected' => TRUE
                                                ]
                                            ],
                                            'onchange' => '$("[name=\'OrderForm[fields_expyear]\']").blur();'
                                        ]
                                    ) ?>
                                <?= $form->field($model, 'cardNumber', ['options' => ['class' => 'form-group cc_field col-12']])->textInput(['type' => 'tel', 'maxlength' => TRUE, 'placeholder' => 'Card Number']) ?>
                                <?= $form->field(
                                    $model,
                                    'fields_expmonth',
                                    ['options' => ['class' => 'form-group cc_field col-6']]
                                )
                                    ->dropDownList(
                                        $model->getMonths(),
                                        [
                                            'prompt'   => [
                                                'text'    => 'Month',
                                                'options' => [
                                                    'disabled' => TRUE,
                                                    'selected' => TRUE
                                                ]
                                            ],
                                            'onchange' => '$("[name=\'OrderForm[fields_expyear]\']").blur();'
                                        ]
                                    ) ?>
                                <?= $form->field(
                                    $model,
                                    'fields_expyear',
                                    ['options' => ['class' => 'form-group cc_field col-6']]
                                )
                                    ->dropDownList(
                                        $model->getYears(),
                                        [
                                            'prompt'   => [
                                                'text'    => 'Year',
                                                'options' => [
                                                    'disabled' => TRUE,
                                                    'selected' => TRUE
                                                ]
                                            ],
                                            'onchange' => '$("[name=\'OrderForm[fields_expmonth]\']").blur();'
                                        ]
                                    ) ?>
                                <?= $form->field($model, 'cvv', ['options' => ['class' => 'form-group cc_field col-12']])->textInput(['type' => 'tel', 'maxlength' => TRUE, 'placeholder' => 'Security Code']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordercartin combo-summary">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="cart-table cart combo-summary">
                                  <div class="cartsubtitle">
                                      <div class="cartsubtitlel">SUMMARY</div>
                                  </div>
                                  <div class="cartprodes">
                                      <div class="cart-product-thumb order_det_img">
                                          <img src="" class="product-thumb img-fluid" alt="Product Thumb">
                                      </div>
                                      <div class="d-flex justify-content-between flex-fill align-items-center">
                                        <div class="cart-product-name">
                                            <h4 id="productDesc">Keto Cider Gummies</h4>
                                            <p id="productDescTwo" class="product-description"></p>
                                        </div>
                                        <div class="cart-product-price m-0 ml-3"><span id="product_price"></span></div>
                                      </div>
                                  </div>
                                  <div class="cartprodes summary-content">
                                      <div class="cart-product-thumb order_det_img">
                                      <div class="free-delivery">
                                <img src="<?= $newRoot; ?>/images/keto-cider/free-delivery.png" class="img-fluid" alt="">
                            </div>
                                      </div>
                                      <div class="d-flex justify-content-between flex-fill align-items-center">
                                        <div class="cart-product-name">
                                            <h4 id="productDesc">Express Shipping</h4>
                                            <p class="product_type">(1-2 Day Shipping)</p>
                                        </div>
                                        <div class="cart-product-price m-0 ml-3">FREE</div>
                                      </div>
                                  </div>
                                  <div class="cartfoot">
                                    <div class="left">
                                      <div class="cartshipt">
                                          <div class="cartshiptl">
                                              <h4 class="shipping-text">Express Shipping</h4>
                                          </div>
                                          <div class="cartshiptr"><span class="shipping-amount">FREE</span></div>
                                      </div>
                                      <div class="shipping">
                                          <h4 class="shipping-text">Shipping Free</h4>
                                          <div class="pwidth">$<span id="shipping_price">0.00</span></div>
                                      </div>
                                      <div class="subtotalt">
                                          <div>Tax</div>
                                          <div class="pwidth">$0.00</div>
                                      </div>
                                      <div class="total cartt">
                                          <div class="ototal">
                                              <h3>Order Total</h3>
                                          </div>
                                          <div class="cart_totalout pwidth">
                                            <span class="cart-total" style="color: #c71721;"></span>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="right">
                                      <div class="saving-banner">
                                        <div class="top">YOU’RE SAVING <span class="product_saving color-yellow"></span> TODAY!</div>
                                        <div class="middle">Cost per day: <span class="product_cost_per_day"></span></div>
                                        <div class="bot">In 3 months call us for VIP and pay only $1.50/day</div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="special-timer text-center">
                    <div>Special Pricing ends in</div>
                    <span id="countdown"></span>
                  </div>
                  <div class="fill_card_details conditions">
                      <?php
                          echo $form->field($model, 'terms', ['options' => ['class' => 'step3-tac']])->checkbox(['checked'=> 'true'])->label('<p>Click the checkbox to agree to the  <a href="/terms">Subscription
                      Terms and Conditions.</a></p>')
                      ?>
                      <div class="step3-text description">
                        <p class="cart_text terms_text">
                        Terms and Conditions: For your benefit, you will be registered in our auto shipment program. After <span class="terms_day"></span> days of placing your order, we will send you a <span class="terms_month"></span> supply of <span class="terms_product"></span> each <span class="terms_month"></span> for a low price of <span class="terms_amount"></span> (including free shipping). The card you provide today will be charged every month. If you would like to cancel anytime, simply email <a href="mailto:<?= Yii::$app->params['EmailAddress'] ?>"><?= Yii::$app->params['EmailAddress'] ?></a> or call <a href="tel:<?= Yii::$app->params['PhoneNumber'] ?>"><?= Yii::$app->params['PhoneNumber'] ?></a>. No strings attached. No hidden charges. No hidden commitments. Cancel any time.
                        </p>
                      </div>
                      
                  </div>








                <div class="combo-section pt-0">
                    <div class="description-card">
                        <p>Disclaimer: These statements have not been evaluated by the Food and Drug Administration. This
                            product is not intended to diagnose, treat, cure, or prevent any disease.</p>
                    </div>
                    <div class="form-group text-center ppbtn">
                        <?= \yii\bootstrap4\Html::submitButton('COMPLETE MY ORDER', ['class' => 'cc_field btn-common width-240 mx-auto button button-order', 'id' => 'submitBtn']) ?>
                        <div id="paypal-button-container" class="text-center pp_field" style="display: none;"></div>
                    </div>
                </div>
                <div class="secure-logo-images position-static">
                    <img src="<?= $newRoot; ?>/images/keto-cider/company-logo/norton-secured-logo.png" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/company-logo/verisign-secured-logo.png" alt="">
                    <img src="<?= $newRoot; ?>/images/keto-cider/company-logo/mc-afee-secure-logo.png" alt="">
                </div>
            </div>
    </section>
    <?php ActiveForm::end(); ?>
    </div>
</section>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=<?= UtilityHelper::getCustomParameters('paypal_client_id'); ?>&vault=true&disable-funding=credit,card,bancontact,blik,eps,giropay,mybank,ideal,p24,sepa,sofort,venmo" data-sdk-integration-source="button-factory"></script>
<script>
    function check_fields() {
        var checking = 0;
        $.each($("#make-order input[aria-required=true], #orderform-shippingstate"),
            function(index) {
                if ($(this).val() == '') {
                    checking++
                }
            });
        return checking;
    }
    var field_error = 0;
    var sub_id = '';
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'horizontal',
            tagline: false,
        },
        funding: {
            disallowed: [paypal.FUNDING.CREDIT, paypal.FUNDING.CARD, paypal.FUNDING.VENMO, paypal.FUNDING.ELV],
        },
        // onInit is called when the button first renders
        onInit: function(data, actions) {
            //  check_form();
            // Disable the buttons
            actions.disable();
            //$('#make-order').yiiActiveForm('validateAttribute', 'firstName');
            // Listen for changes to the checkbox
            $('#make-order').on('change', function(event) {
                console.log(check_fields());
                if (($("[name='OrderForm[payment_processor]']:checked").val() == 'paypal') && (
                        check_fields() == 0)) {
                    $("#make-order").yiiActiveForm('validate', true);
                }
            });
            $("#make-order").on('afterValidate', function(event, messages, errorAttributes) {
                field_error = 0;
                if (Object.keys(errorAttributes).length === 0 && $("#make-order").find('.is-invalid')
                    .length === 0) {
                    field_error = 0;
                    actions.enable();
                } else {
                    var error_msg = '';
                    $.each(messages, function(key, value) {
                        if (value != '') {
                            error_msg += value + '<br>';
                            field_error++;
                        }
                    })
                    $('.err-modal-content').html(error_msg);
                    actions.disable();
                }
                return false;
            })
        },
        // onClick is called when the button is clicked
        onClick: function() {
            if (field_error > 0) {
                $('#errModal').modal('show').on('hidden.bs.modal', function() {
                    $("#make-order").yiiActiveForm('validate', true);
                });
            }
        },
        createSubscription: function(data, actions) {

            var subscription = actions.subscription.create({
                'plan_id': $("input[name=product_id]:checked").data('pp'),
            })
            var capture_order = subscription.then(function(res) {
                sub_id = res;
                pp_submit('#make-order', res);
            });
            console.log(subscription);
            return subscription;
        },
        onApprove: function(data, actions) {
            pp_confirm(data.subscriptionID, "<?= $next_page ?>");
        },
        onError: function(err) {
            console.log(err);
            $('.err-modal-content').html(err);
            $('#errModal').modal('show');
            pp_fail(sub_id, err);
        },
        onCancel: function(data) {
            pp_cancel(sub_id)
        }
    }).render('#paypal-button-container');
</script>
<?php

$this->registerJsFile(Url::to(['/js/order.js?v=1.1']), ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile(Url::to(['/js/cleave.js']), ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile(Url::to(['/js/countdown.js']), ['depends' => 'yii\web\JqueryAsset']);
$this->registerJs(
    <<<JS
    $(function () {
      $('[name=product_id]').on('change',function (){
        var selectedProduct = $('[name=product_id]:checked')

        $('.product-thumb').attr('src',selectedProduct.data('image'))
        $(".cart-total, #product_price").html('$'+selectedProduct.data('amount').toFixed(2));
        $(".product-description").html(selectedProduct.data('description'));
         $(".product_saving").html(selectedProduct.data('save'));
        $(".product_cost_per_day").html(selectedProduct.data('cost'));
      }).change();

        make_order("#make-order", "#submitBtn", '$order_link/make-order');
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

        $(".second_step,.third_step").hide();
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
                     $(".third_step").show();

                       $.post('$order_link/step-one', $('#make-order').serialize(), function (data) {
                   console.log(data);
                    });
                     $("html,body").animate({
                         scrollTop: $(".second_step").offset().top

                       }, 200);

             }


        })


    });
JS
);

?>
<!-- Modal -->
<div class="modal fade hide" id="errModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body err-modal-content">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="prod1" tabindex="-1" role="dialog" style="background: #000000a6;">
    <div class="modal-dialog" role="document">
        <button type="button" class="close" style="color: #fff; opacity: 0.9" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <img src="<?= $newRoot; ?>/images/keto-cider/order/prod1.jpg" alt="" class="img-responsive center-block img-fluid">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="prod2" tabindex="-1" role="dialog" style="background: #000000a6;">
    <div class="modal-dialog" role="document">
        <button type="button" class="close" style="color: #fff; opacity: 0.9" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <img src="<?= $newRoot; ?>/images/keto-cider/order/prod2.jpg" alt="" class="img-responsive center-block img-fluid">
    </div>
</div>