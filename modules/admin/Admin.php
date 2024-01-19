<?php

namespace app\modules\admin;


use app\helpers\UtilityHelper;
use http\Exception;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;

/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = "@app/modules/admin/views/layouts/admin.php";

    public $defaultRoute = "default/index";

    public $ips;

    public function behaviors()
    {

        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [

                    [
                        'allow' => true,
                        'controllers' => ['admin/*'],
                        'roles' => ['@'],
                        'ips' => $this->ips,
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['admin/default'],
                        'actions' => ['login'],
                        'roles' => ['?'],
                        'ips' => $this->ips,
                    ],



                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->ips = UtilityHelper::getCustomParameters('ip_white_list');
        parent::init();

        if(in_array(Yii::$app->request->userIP,$this->ips)){
            Yii::$app->user->loginUrl = Url::to(['/admin/default/login']);
        }

        // custom initialization code goes here
    }
}
