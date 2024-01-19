<?php
use yii\helpers\Url;

$this->title = Yii::$app->params['SiteName'];

$session = Yii::$app->session;
$order_page = Url::to([$session['order_page_url'] ?? '/order']);

$newRoot = Yii::$app->urlManager->baseUrl;
$imagePath = $newRoot.'/images/keto-cider';
$products = Yii::$app->params['all_products'];
?>
<main class="home-page main-page float-left" id="wrapper">
    <!--- Banner -->
    <div class="s1-banner w-100 float-left">
        <div class="large-container w-100 float-left horizontal-center">
            <div class="container">
                <div class="banner-data w-100 float-left">
                    <p>
                        Welcome to <strong>ketocidergummies.com</strong>, your trusted source for high-quality supplements to support
                        your well-being. We are committed to providing you with premium products and helping you achieve
                        your health goals.</p>

                        <p>At<strong>ketocidergummies.com</strong>, we understand the importance of maintaining a healthy lifestyle.
                        That's why we offer a carefully selected range of supplements that are backed by scientific
                        research and manufactured using the highest quality ingredients.</p>

                        <p>We prioritize your health and safety, ensuring that all our supplements undergo rigorous testing
                        and meet strict quality standards.</p>

                        <p>Your satisfaction is our top priority. Our dedicated customer support team is always here to
                        assist you and provide personalized recommendations based on your unique requirements.</p>

                        <p>Choose<strong>ketocidergummies.com</strong> for reliable, effective, and trusted supplements that support your
                        journey towards optimal health. Start prioritizing your well-being today and experience the
                        difference with our exceptional products.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--- /Banner -->

    <!--- Middle -->
    <div class="w-100 float-left mb-5 pb-5 product-section">
        <div class="s1-product-section w-100 float-left">
            <div class="container">
                <h2 class="text-center">All Products</h2>
                <div class="data-row w-100 float-left">
                    <div class="row row-flex row-flex-wrap">
                        <?php foreach($products as $key => $product): ?>
                        <div class="col-6 col-sm-6 col-md-4 col-xl-2">
                            <div class="product-box w-100 float-left text-center <?=$key;?>">
                                <div class="product-img w-100 float-left">
                                    <img src="<?=$imagePath;?>/s1/<?=$key;?>.jpg" alt="">
                                </div>
                                <div class="product-title w-100 float-left"><?=$product['name'];?></div>
                                <p><?=strtoupper($product['description']);?></p>
                                <div class="product-box-bottom w-100 float-left">
                                    <div class="product-price">
                                        $<?= number_format((float)$product['amount'], 2, '.', ''); ?></div>
                                    <div class="cart-btn w-100 float-left">
                                        <button class="btn-add-to-cart" data-product="<?=$key;?>">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- /Middle -->
</main>
<?php
$this->registerJs(<<<JS
  // AJAX call to Set selected product session
  $('.product-box .btn-add-to-cart').on('click', function(e){
    e.preventDefault();
    $.post('$order_page/order-select', {'product': $(this).data('product')}, function (data) {
      window.location.href = '/checkout';
    });
    return;
  });
JS
);
?>