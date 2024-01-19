<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\helpers\UtilityHelper;
$session = Yii::$app->session;
$product_layout = $session['product_layout'] ?? '';
$layout_folder = '';
if($product_layout !== ''){
    $layout_class = "app\assets\\" .UtilityHelper::Camelize($product_layout , '-') . "Asset";
    $layout_class::register($this);
    $layout_folder = $product_layout . '/';
}else{
    app\assets\AppAsset::register($this);
}
$data = $this->params['data'] ?? '';
$canonicalUrl    = $data['canonical'] ?? $_SERVER['REQUEST_URI'];
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?=Yii::$app->view->title ?? Yii::$app->params['SiteName'] ?></title>
    <link rel="canonical"
          href="https://<?php echo $_SERVER['SERVER_NAME'] ?><?= $canonicalUrl ?>">
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<script>
    var _learnq = _learnq || [];
</script>
<?php
require_once $layout_folder . "_navbar.php";
?>
<div class="page-wrapper" style="min-height: 70vh">
    <?= $content ?>
</div>
<?php require_once $layout_folder . "_footer.php"; ?>
<?php $this->endBody() ?>
<?php
unset($_GET['url']);
$thisGet = json_encode($_GET);
?>
<script>
    var str;
    var urlArray = <?=$thisGet ?>;
    var links = document.querySelectorAll("a:not([role='tab'])");
    var forms = document.querySelectorAll("form");
    function queryParams(source) {
        var array = [];
        for (var key in source) {
            array.push(encodeURIComponent(key) + "=" + encodeURIComponent(source[key]));
        }
        return array.join("&");
    }
    if (urlArray.length === 0) {
        str = '';
    } else {
        str = '?' + queryParams(urlArray);
    }
    links.forEach(function (item) {
        item.setAttribute("href", item.href += str);
    });
    forms.forEach(function (item) {
        item.setAttribute("action", item.action += str);
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
