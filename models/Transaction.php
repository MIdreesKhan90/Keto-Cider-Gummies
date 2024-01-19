<?php
namespace app\models;
use Yii;
use yii\base\Model;
use app\helpers\UtilityHelper;
use app\models\Forms\OrderForm;
class Transaction extends Model
{
    public $url;
    protected $output;
    protected $baseUrl;
    protected $password;
    protected $username;
    public $ResStatus;
    public $ulinkt;
    public function config($api_username, $api_password, $lime_light_url) {
        $this->url = $lime_light_url . '/admin/transact.php';
    }
    public function NewOrder($request = [], $campaignId) {
        $model = new \app\models\Forms\OrderForm();
        $tranType = 'Sale';
        $method = 'NewOrder';
        $ipAddress = $this->getClientIp();
        $default['method'] = $method; // Required - Creates a new order.
        $default['tranType'] = $tranType; // Required, cannot be blank.  Tells what kind of credit card sale to run.
        $default['ipAddress'] = $ipAddress; // A - 15 Characters Max.  Required - Customer's IP Address
        $default['campaignId'] = $campaignId; // N - Integer.  Required - Valid Lime Light campaign id to use for the order
        /* --------- */
        $data = $this->checkRequest($request);
        if (is_array($data)) {
            $data = $default + $data;
        }
        //echo $data['expirationDate'];
        $this->APIConnect($this->url, $data);
    }
    public function checkRequest($request = []) {
        $model = new \app\models\Forms\OrderForm();
        /* sessionID */
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $shippingId     = isset($_REQUEST['shippingId']) ? $this->shippingId() : '5';
            $shippingAmount = isset($_REQUEST['shippingId']) ? $this->shippingAmount() : '0';
            $model->productId = isset($_REQUEST['product_id']) ? $_REQUEST['product_id'] : '';
            $model->creditCardType = ($model->creditCardType == 'mastercard') ? 'master' : $model->creditCardType;
            $model->cardNumber = isset($model->cardNumber) ? str_replace('-', '', $model->cardNumber) : FALSE;
            $model->billingSameAsShipping = 'YES';
        /**
         * Importing in array
         */
        $array = [
            'sessionId' => '16649768579659',
            'productId' => $model->productId,
            'firstName' => $model->firstName,
            'lastName'  => $model->lastName,
            'phone'     => $model->phone,
            'email'     => $model->email,
            'shippingAddress1' => $model->shippingAddress1,
            'shippingZip'      => $model->shippingZip,
            'shippingCity'     => $model->shippingCity,
            'shippingCountry'  => $model->shippingCountry,
            'shippingState'    => $model->shippingState,
            'shippingId' => $shippingId,
            'billingSameAsShipping' => 'YES',
            'billingAddress1' => $model->shippingAddress1,
            'billingZip'      => $model->shippingZip,
            'billingCity'     => $model->shippingCity,
            'billingCountry'  => $model->shippingCountry,
            'billingState'    => $model->shippingState,
            'creditCardType'   => $model->creditCardType,
            'creditCardNumber' => $model->cardNumber,
            'expirationDate'   => $model->fields_expmonth . $model->fields_expyear,
            'CVV'              => $model->cvv,
        ];
        $errorMsg = '';
        foreach ($array as $key => $value) {
            if ($value == FALSE) {
                $errorMsg .= 'Error(s) was found. Invalid  <b>' . $key . '</b><br>';
            }
        }
        $errorMsg = trim($errorMsg);
        if (!empty($errorMsg)) {
            return $errorMsg;
        } else {
            return $array;
        }
    }
    }
    public function APIConnect($url, $input) {
        $username = Yii::$app->params['UserName'];
        $password = Yii::$app->params['PassWord'];
        if (is_array($input)) {
            $api_info = [
                'username' => $username,
                'password' => $password,
            ];
            $data = $api_info + $input;
            $curlSession = curl_init();
            curl_setopt($curlSession, CURLOPT_URL, $url);
            curl_setopt($curlSession, CURLOPT_HEADER, 0);
            curl_setopt($curlSession, CURLOPT_POST, 1);
            curl_setopt($curlSession, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curlSession, CURLOPT_TIMEOUT, 5000);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curlSession, CURLOPT_FOLLOWLOCATION, TRUE);
            $rawResponse = curl_exec($curlSession);
            $this->output = $this->APIOutputConverter($rawResponse);
            curl_close($curlSession);
        } else {
            $this->output = $input;
        }
    }
    public function getInfo() {
        if (is_array($this->output)) {
            if (isset($this->output['responseCode'])){
                $responseCode = $this->output['responseCode'];
                //echo $responseCode;
                if(isset($this->output['errorMessage'])){
                    $errorMessage = $this->output['errorMessage'];
                }else{
                    $errorMessage = '';
                }
            }else{
                $responseCode = $this->output['response_code'];
                $errorMessage = $this->output['error_message'];
            }
            if(!empty($errorMessage) && $responseCode != '100'){
                $this->output = $errorMessage;
            } else {
                $this->output = $responseCode;
            }
        }
        return $this->output;
    }
    public function APIOutputConverter($rawResponse) {
        if (strpos($rawResponse, '&')) {
            $response = explode('&', $rawResponse);
            $output = array();
            $count = count($response);
            for ($i = 0; $i < $count; $i++) {
                $splitAt = strpos($response[$i], "=");
                $output[trim(substr($response[$i], 0, $splitAt))] = trim(substr(urldecode($response[$i]), ($splitAt + 1)));
            }
        } else {
            $output = $rawResponse;
        }
        return $output;
    }
    public function getClientIp() {
        $ipAddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipAddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipAddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipAddress = 'UNKNOWN';
        return $ipAddress;
    }
}
