<?php

use yii\helpers\Url;

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= Url::to([$session['home_page_url'] ?? '/']); ?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= Url::to([$session['home_page_url'] ?? '/']); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link go-to-checkout" href="<?= Url::to([$session['order_page_url'] ?? '/order']); ?>">Order</a>

            </div>
        </div>
    </div>
</nav>