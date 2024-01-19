<?php

use Codeception\Module\Yii2;
use yii\helpers\Url;

$this->title = 'Checkout - ' . Yii::$app->params['SiteName'];

$session = Yii::$app->session;
$next_page = Url::to([$session['home_page_url'] . '/thankyou']);
$newRoot = Yii::$app->urlManager->baseUrl;

$this->params['data'] = [
    'canonical' => $newRoot . '/keto-cider/checkout-ltv',
];
?>

<!--  Main Container -->
<main class="checkoutltv-page">
    <section class="section-2 section-1 reminder-content-section">
        <div class="container">
            <h6>Important Reminder</h6>
            <h1 class="page-title">READ <span>BEFORE</span> COMPLETING YOUR ORDER</h1>
            <ul class="quiz-tabs nav nav-pills">
                <?php for ($x = 1; $x <= 5; $x++) {
                    $active = ($x == 1) ? 'active' : '';
                    echo '<li class="tab-' . $x . ' ' . $active . '">' . $x . '</li>';
                } ?>
            </ul>
            <div class="reminder-content">
                <div class="tab-description">
                    <?php
                    $quizzes = [
                        ['content' => '<p><span>Keto Cider Gummies</span> is a powerful weight loss supplement that makes it easier to maintain a low-calorie diet. It harnesses the concentrated power of ACV (Apple Cider Vinegar), a proven and tested ingredient known for its ability to aid in appetite control and digestion, thereby promoting effective weight loss.</p>'],

                        ['content' => '<p>To achieve sustainable weight loss, discipline and consistency are crucial. By seamlessly incorporating <span>Keto Cider Gummies</span> into your routine, you can effectively manage your calorie intake and help your body adapt to a low-calorie diet. Monitoring your food consumption and staying committed to your diet are key factors in attaining optimal weight loss results.</p>'],

                        ['content' => '<p><span>Keto Cider Gummies</span> are not merely a short-term solution for shedding pounds. The true challenge lies in maintaining your desired weight over the long term. Therefore, it is highly recommended to continue taking Keto Cider Gummies even after reaching your target weight. This ongoing support can assist you in maintaining a healthier diet and sustaining your achievements for an extended period.</p>'],

                        ['content' => '<p>Maximize the benefits of <span>Keto Cider Gummies</span> by fully embracing the fundamental objectives of the Keto diet. Familiarize yourself with the diet and focus on following your meal plans. <span>Keto Cider Gummies</span> serves as an essential partner on your weight loss journey, supporting you in achieving tangible and sustainable weight loss by enhancing your ability to effectively manage calorie intake.</p>'],

                        ['content' => '
              <h5>Be a Keto Cider Gummies VIP!</h5>
              <h6>As a VIP customer, you enjoy exclusive privileges such as:</h6>
                <ul>
                <li><span>VIP</span> Loyalty Pricing</li>
                <li><span>VIP</span> Price Lock Guarantee</li>
                <li><span>VIP</span> Account Specialists</li>
                <li><span>VIP</span>-exclusive offers</li>
                  </ul>'],
                    ];
                    ?>
                    <?php foreach ($quizzes as $key => $quiz) :
                        $ctr = $key + 1;
                        $active = ($ctr == 1) ? 'active' : '';
                        $next = $ctr + 1;
                        $dataNext = '.quiz-' . $next;
                        $dataTab = '.tab-' . $next;
                    ?>
                        <div class="quizzes quiz-<?= $ctr; ?> <?= $active; ?>" data-next="<?= $dataNext; ?>" data-tab="<?= $dataTab; ?>">
                            <div class="body">
                                <?= $quiz['content']; ?>
                                <div class="text-center">
                                    <?php if ($ctr == 5) { ?>
                                        <a href="<?= $next_page; ?>" style="width: fit-content;" class="btn next-tab-button button button-next button-<?= $ctr; ?>">COMPLETE ORDER</a>
                                    <?php } else { ?>
                                        <button type="button" class="btn next-tab-button button button-next button-<?= $ctr; ?>">NEXT</button>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<section class="page-description-section">
    <div class="container">
        <p>Disclaimer: These statements have not been evaluated by the Food and Drug Administration. This product is
            not intended to diagnose, treat, cure, or prevent any disease.</p>
    </div>
</section>
<?php
$this->registerJs(
    <<<JS
  $('button.button-next').on('click', function(){
    const parent = $(this).parents(".quizzes");
    const next = parent.data('next');
    const tab = parent.data('tab');

    parent.removeClass('active').addClass('done');
    $(next).addClass('active');

    $('.tab li').removeClass('active');
    $(tab).addClass('active');
  });

JS
);
?>