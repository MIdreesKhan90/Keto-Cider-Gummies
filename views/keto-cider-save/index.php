<?php

use Codeception\Module\Yii2;
use yii\bootstrap4\ActiveForm;
use app\helpers\UtilityHelper;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = ' Keto Cider Gummies Save';

$session     = Yii::$app->session;
$home_page = Url::to([$session['home_page_url'] ?? '/']);
$order_link  = Url::to(['/order']);
$next_page   = Url::to([$session['home_page_url'] . '/upsell']);

$newRoot = Yii::$app->urlManager->baseUrl;
?>
