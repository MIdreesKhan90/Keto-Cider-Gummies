<?php

use app\helpers\UtilityHelper;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$session         = Yii::$app->session;
$next_page       = Url::to([$session['home_page_url'] . '/checkout-ltv']);

$payment_method  = 'credit_card';
$auto_rebill_day = '21';
$previous_order  = FALSE;
$product         = Yii::$app->params['upsell'];
$newRoot         = Yii::$app->urlManager->baseUrl;
if (isset($_SESSION['previous_order'])) {
    $previous_order = $_SESSION['previous_order'];
    if (isset($_SESSION['previous_order']['payment_processor']) && $_SESSION['previous_order']['payment_processor'] !== 'credit_card') {
        $payment_method  = 'paypal';
        $auto_rebill_day = '28';
    }
}

?>

<section class="uncomplete-banner-sectione">
    <div class="container">
        <h6>DO NOT CLOSE OR NAVIGATE AWAY FROM THIS PAGE</h6>
        <h1 class="page-title">YOUR ORDER IS NOT COMPLETE!</h1>
    </div>
</section>
<section class="limited-offer-section">
    <div class="container">
        <h6>LIMITED TIME OFFER</h6>
        <h1 class="page-title"><span>KETO</span> BHB MAX</h1>
        <p>Unleash the maximum weight loss power of the Keto diet!</p>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <img src="<?= $newRoot; ?>/images/keto-cider/product/bhb-max-product.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5">
                <div class="bhb-max-content">
                    <h2><span>Keto</span> <b>BHB Max</b> is engineered to Push your <b>Keto Diet Results</b> to the
                        <span>EXTREME</span>!
                    </h2>
                    <ul>
                        <li>Premium Beta-hydroxybutyrate formula</li>
                        <li>Prime Energy Boost Blocks</li>
                        <li>Keto Flu Supercharges Metabolism</li>
                        <li>Promotes Sustainable Weight Loss</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="login-section bhb-offer-section">
    <div class="container login-container">
        <h2 class="title">limited-time only</h2>
        <div class="bhb-offer-content">
            <h3 class="title">GET Keto BHB Max at <span>50%</span> off!</h3>
            <p>OFFER EXPIRES ONCE YOUR ORDER IS COMPLETED</p>
            <ul class="bhb-offer-list">
                <li>Magnesium Beta Hydroxybutyrate</li>
                <li>Calcium Beta Hydroxybutyrate</li>
                <li>Sodium Beta Hydroxybutyrate</li>
            </ul>
        </div>
    </div>
</section>
<section class="bhb-gummies-section">
    <div class="container">
        <h1 class="title">Keto Cider Gummies <span>and</span> Keto BHB Max</h1>
        <p>Take your weight loss results to the extreme!</p>
        <div class="bhb-gummies-content">
            <img src="<?= $newRoot; ?>/images/keto-cider/vip-price-image.png" alt="">
            <ul>
                <li>Formulated specifically for the Keto diet</li>
                <li>Promotes high energy levels</li>
                <li>Accelerates Weight Loss</li>
                <li>92% of our customers add Keto BHB Max to their orders!</li>
            </ul>
        </div>
    </div>
</section>

<main>
    <div class="page-wrapper">

        <section class="bhb-gummies-section">
            <div class="container">
                <div class="bhb-runing-offer-content">
                    <p>Take your weight loss results to the extreme!</p>
                    <h1 class="page-title">Keto Cider Gummies <span>and</span> Keto BHB Max</h1>
                    <div class="bhb-runing-offer-card">
                        <h3>YES! I want to accelerate my results for $<?= $product['amount']; ?></h3>
                        <?php $form = ActiveForm::begin([
                            'id'                   => 'upsell_form',
                            'enableAjaxValidation' => TRUE,
                        ]); ?>

                        <input type="hidden" name="next_page" value="<?= $next_page; ?>">

                        <?php
                        echo $form->field($model, 'previous_order_id')
                            ->hiddenInput(['value' => $previous_order['id']  ?? ''])
                            ->label(FALSE);
                        echo $form->field($model, 'product_id')->hiddenInput(['value' => 'upsell'])->label(FALSE);
                        ?>
                        <div class="text-center">
                            <?php if ($payment_method == 'credit_card') : ?>
                                <button id="submitBtn" class="btn complete-order button">
                                    COMPLETE MY ORDER
                                </button>
                            <?php else : ?>
                                <div id="paypal-button-container" class="text-center"></div>

                            <?php endif; ?>

                            <?php
                            echo $form->field(
                                $model,
                                'terms',
                                ['options' => ['class' => 'step3-tac']]
                            )
                                ->checkbox(['checked' => 'false'])
                                ->label(
                                    '<div class="subscription-terms text-center"><p>I agree to the <a href="' . Url::to(['/terms']) . '">Subscription Terms and Conditions.</a></p></div>',
                                    ['class' => 'custom-control-label d-block']
                                );
                            ?>

                        </div>
                        <div class="terms-conditions-row">
                            <p class="subscription-part">
                                Terms and Conditions: For your benefit, you will be registered in our auto shipment program. After <?= $auto_rebill_day ?> days of placing your order, we will send you a one-month supply of Keto Krush BHB each month for a low price of $<?= $product['amount'] ?> (including free shipping). The card you provide today
                                <br>
                                will be charged every month. If you would like to cancel anytime, simply email <?= Yii::$app->params['EmailAddress'] ?> or call <?= Yii::$app->params['PhoneNumber'] ?>. No strings attached. No hidden charges. No hidden commitments. Cancel any time.</p>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                    <a href="<?= $next_page ?>" class="accelerate-results">No, thanks. I will wait for years to go above average.</a>
                </div>
        </section>
    </div>


    <?php
    if ($payment_method == 'paypal' && $client_id = Yii::$app->params['paypal_client_id'] ?? FALSE) :
    ?>
        <script src="https://www.paypal.com/sdk/js?client-id=<?= $client_id ?>&vault=true&disable-funding=credit,card,bancontact,blik,eps,giropay,mybank,ideal,p24,sepa,sofort,venmo" data-sdk-integration-source="button-factory"></script>

        <script>
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
                onInit: function(data, actions) {
                 check_form();
                // Disable the buttons
                actions.disable();
                $('#upsell_form').on('change', function(event) {
                    if ($("#upsellform-previous_order_id") !== "" && $("#upsellform-terms:checked").val() == 1) {
                        actions.enable();
                    } else {
                        actions.disable();
                    }
                }).change();
                },
                onClick: function() {

                $("#upsell_form").yiiActiveForm('validate', true);

                },
                createSubscription: function(data, actions) {
                    var subscription = actions.subscription.create({
                        'plan_id': '<?= $product['pp_code']; ?>',
                    });
                    var capture_order = subscription.then(function(res) {
                        sub_id = res;
                        pp_upsell_submit('#upsell_form', res);
                    });
                    console.log(subscription);

                    return subscription;

                },
                onApprove: function(data, actions) {
                    document.getElementById("upsell_pp_form").submit()
                    pp_confirm(data.subscriptionID, "<?= $next_page ?>");
                    data.subscriptionID
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
    endif;
    $this->registerJsFile(
        Url::to(['/js/order.js?v=1']),
        ['depends' => 'yii\web\JqueryAsset']
    );

    $upsell_process = Url::to(['/order/upsell-process']);
    $this->registerJs(
        <<<JS

$(function() {

     make_order('#upsell_form', '#submitBtn', "$upsell_process");
})


JS
    )
    ?>

    <!-- Modal -->
    <div class="modal fade hide" id="errModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body err-modal-content">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
<section class="page-description-section">
    <div class="container">
        <p>Disclaimer: These statements have not been evaluated by the Food and Drug Administration. This product is
            not intended to diagnose, treat, cure, or prevent any disease.</p>
    </div>
</section>