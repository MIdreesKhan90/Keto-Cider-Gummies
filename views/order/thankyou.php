<?php
use yii\helpers\Url;

$this->title = 'Thank you!';

$session = Yii::$app->session;
$home_page = Url::to([$session['home_page_url'] ?? '/']);

$this->params['data'] = [
	'body_class'  => 'thankyou-body',
];
?>
<main class="thankyou-page main-page float-left w-100" id="wrapper">
  <div class="container text-center">
    <h1>Thank You!</h1>
    <h2>Your Order Is Complete.</h2>
    <p>Call Us With Any Questions<br><canvas class="text-to-canvas phone"></canvas></p>
    <a href="<?=$home_page;?>" class="button">Go Back to Home Page</a>
  </div>
</main>