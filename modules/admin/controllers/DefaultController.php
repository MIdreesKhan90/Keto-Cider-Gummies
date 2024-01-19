<?php

namespace app\modules\admin\controllers;

use app\helpers\UtilityHelper;
use app\models\LoginForm;
use yii\helpers\Url;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions() {

        return [
            'error'   => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class'           => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : NULL,
            ],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');

    }

    public function actionLogout() {

        \Yii::$app->user->logout();

        return $this->redirect(Url::to(['/admin']));
    }

    public function actionLogin() {

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->login()) {
            return $this->redirect(Url::to(['/admin/orders']));
        }

        return $this->render('login', ['model' => $model]);

    }

}
