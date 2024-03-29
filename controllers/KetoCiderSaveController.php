<?php

namespace app\controllers;

use app\models\Forms\UpsellForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\widgets\ActiveForm;

class KetoCiderSaveController extends Controller
{

    public function beforeAction($action) {

        $session = Yii::$app->session;
        $session['product_layout'] = 'keto-cider-save';
        $session['home_page_url'] = '/keto-cider-save';
        $session['order_page_url'] = '/keto-cider-save/order';
        $session['test'] = 'test';
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex() {

        $model = new \app\models\Forms\OrderForm();

        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }

        if ($model->load(\Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('index',
                             ['model' => $model,]);
    }

    public function actionUpsell() {
        $model = new UpsellForm();
        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return \yii\bootstrap4\ActiveForm::validate($model);
        }

        return $this->render('upsell', ['model' => $model]);
    }

    public function actionThankyou(){


        if (isset($_SESSION['previous_order'])) {
            unset($_SESSION['previous_order']);
        }

        return $this->render('thankyou', []);

    }
    public function actionCheckoutLtv() {
      return $this->render('checkout-ltv');
    }
}
