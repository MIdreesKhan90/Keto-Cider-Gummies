<?php
namespace app\helpers;

use app\helpers\UtilityHelper;

class LimeLightHelper {

  const TRANSACTION_URL = '/admin/transact.php';

  static public function getLimelightUrlInstance(){
    return 'https://totalwellnesscrm.limelightcrm.com';
  }
  static public function getLimelightUsername(){
    //return 'tengenixplus.com';
    return 'BrandNew';
  }
  static public function getLimelightPassword(){
    //return '3q4nc6yc8ycMm';
    return '2SY6nsen3JdpHn';
  }
  
  static private function doCurlPostRequest($domainUrl, $postParams) {

    //return ['responseCode'=>100, 'orderId' => strtotime('now')];

    $postParams['username'] = self::getLimelightUsername();
    $postParams['password'] = self::getLimelightPassword();

    $url = self::getLimelightUrlInstance().$domainUrl;
    
    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $url);
    curl_setopt($curlSession, CURLOPT_HEADER, 0);
    curl_setopt($curlSession, CURLOPT_POST, 1);
    curl_setopt($curlSession, CURLOPT_POSTFIELDS, http_build_query($postParams));
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlSession, CURLOPT_TIMEOUT, 5000);
    curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curlSession, CURLOPT_FOLLOWLOCATION, TRUE);

    $rawResponse = curl_exec($curlSession);
    curl_close($curlSession);
    
    $finalResp = json_decode ( $rawResponse, true );
    
    if($finalResp === NULL){
      $finalResp = self::parseResponse($rawResponse);

      if(isset($finalResp['error_message'])){
        $finalResp['errorMessage'] = $finalResp['error_message'];
      }
    }
    return $finalResp;
  }

  public static function parseResponse($response)
  {
      $array = [];
      $exploded = explode('&', $response);
      foreach ($exploded as $explode) {
          $line = explode('=', $explode);
          if (isset($line[1])) {
              $array[$line[0]] = urldecode($line[1]);
          } else {
              $array[] = $explode;
          }
      }
      return $array;
  }

  static public function getGatewayIdViaCampaign($campaignId, $cardType = false){
      if($campaignId == UtilityHelper::getCustomParameters('ccCampaign')){
          return Gateways::getGateway(Gateways::PRODUCT_MUC, $cardType);
      }
      return false;
  }
  static public function createNewOrder($request, $campaignId, $isPaypal = FALSE){
    $tranType = 'Sale';
    $method = 'NewOrder';

    $default['method'] = $method; 
    $default['tranType'] = $tranType; 
    $default['ipAddress'] = UtilityHelper::getClientIp();
    $default['campaignId'] = $campaignId; 

    $data = self::checkRequest($request);
    if (is_array($data)) {
      $data = array_merge($default, $data);
    }else{
      return ['errorMessage' => $data];
    }
    
    if($isPaypal == false){
      //we only choose specific gateway when its not paypal transaction
      $cardType = '';//$data['creditCardType'];
      $cardType = isset($data['creditCardType']) ? $data['creditCardType'] : '';

      if($cardType === '')
        $cardType = false;
    }

    $order = false;
    
    $time1 = microtime(true);
    $resp = self::doCurlPostRequest(self::TRANSACTION_URL, $data);
    $time2 = microtime(true);
    
    return $resp;
  }
  static public function createNewOrderObject($data){

      $order = new Orders();
      $order->status = Orders::STATUS_PENDING;
      $order->orderId = 0;

      if(isset($data['previousOrderId'])){
          $oldOrder = Orders::findOne(['orderId' => $data['previousOrderId']]);

          $order->productId = $data['productId'];
          $order->campaignId = $data['campaignId'];
          $order->isExpeditedShipping = in_array($data['shippingId'], [UtilityHelper::getCustomParameters('cc.and.paypal.shipping.id'), UtilityHelper::getCustomParameters('ca.expedited.shipping.id')]) ? 1 : 0;


          $order->firstName = $oldOrder->firstName;
          $order->lastName = $oldOrder->lastName;
          $order->email = $oldOrder->email;
          $order->phone = $oldOrder->phone;
          $order->shippingAddress1 = $oldOrder->shippingAddress1;

          $order->shippingZip = $oldOrder->shippingZip;
          $order->shippingCity = $oldOrder->shippingCity;
          $order->shippingCountry = $oldOrder->shippingCountry;
          $order->shippingState = $oldOrder->shippingState;
          $order->billingSameAsShipping = $oldOrder->billingSameAsShipping;
          $order->billingAddress1 = $oldOrder->billingAddress1;
          $order->billingZip = $oldOrder->billingZip;
          $order->billingCity = $oldOrder->billingCity;
          $order->billingCountry = $oldOrder->billingCountry;
          $order->billingState = $oldOrder->billingState;
          $order->creditCardType = $oldOrder->creditCardType;

          if(isset($data['forceGatewayId']))
              $order->gatewayId = $data['forceGatewayId'];

          if($order->creditCardType !== 'paypal'){
              $order->last4 = $oldOrder->last4;
              $order->expirationDate = $oldOrder->expirationDate;
          }
          $order->save();
      }else{


          $order->firstName = $data['firstName'];
          $order->lastName = $data['lastName'];
          $order->email = $data['email'];
          $order->phone = $data['phone'];
          $order->shippingAddress1 = $data['shippingAddress1'];

          $order->shippingZip = $data['shippingZip'];
          $order->shippingCity = $data['shippingCity'];
          $order->shippingCountry = $data['shippingCountry'];
          $order->shippingState = $data['shippingState'];
          //$order->shippingId = $data['shippingId'];
          $order->billingSameAsShipping = $data['billingSameAsShipping'] == 'yes' ? 1 : 0;
          $order->billingAddress1 = $data['billingAddress1'];
          $order->billingZip = $data['billingZip'];
          $order->billingCity = $data['billingCity'];
          $order->billingCountry = $data['billingCountry'];
          $order->billingState = $data['billingState'];
          $order->creditCardType = $data['creditCardType'];
          if($order->creditCardType !== 'paypal'){
              $order->last4 = substr($data['creditCardNumber'], -4);
              $order->expirationDate = $data['expirationDate'];
          }
          $order->isExpeditedShipping = in_array($data['shippingId'], [UtilityHelper::getCustomParameters('cc.and.paypal.shipping.id'), UtilityHelper::getCustomParameters('ca.expedited.shipping.id')]) ? 1 : 0;
          $order->campaignId = $data['campaignId'];
          //$order->productId = $data['productId'];

          // if(isset($data['forceGatewayId']))
          //     $order->gatewayId = $data['forceGatewayId'];

          $order->save();
          $allProducts = UtilityHelper::getAllProducts();
          foreach($data['offers'] as $offerInfo){
              $orderItem = new OrderItems();
              $orderItem->orderId = $order->id;
              $orderItem->productId = $offerInfo['product_id'];
              foreach($allProducts as $name => $info){
                  if($info['product_id'] == $orderItem->productId){
                      $orderItem->name = $name;
                      break;
                  }
              }
              $orderItem->quantity = $offerInfo['quantity'];
              $orderItem->save();
          }
      }
      return $order;
  }
  static public function checkRequestData($data) {

      $data = trim($data);
      if (isset($data) && !empty($data) && !is_null($data)) {
          $param = $data;
      } else {
          $param = FALSE;
      }

      return $param;
  }
  static public function validateData($data, $regex = '', $count = '') {

      if ($data) {
          if (!isset($regex) || $regex == '') {
              $regex = 'a-zA-Z0-9 \s';
          }
          if (!isset($count) || $count == '') {
              $count = '*';
          } else {
              $count = '{' . $count . '}';
          }
          $regex = '[' . $regex . ']';
          $preg = '/^' . $regex . $count . '$/';

          if (preg_match($preg, $data)) {
              return $data;
          } else {
              return FALSE;
          }

      } else {
          return FALSE;
      }
  }
  static public function checkRequest($request = []) {
    /*
      * STRUCTURE OF REQUIRED
      *
      *
      $array = ['lastName' => $lastName,
      'phone'    => $phone,
      'email'    => $email,

      'shippingAddress1' => $shippingAddress1,
      'shippingZip'      => $shippingZip,
      'shippingCity'     => $shippingCity,
      'shippingCountry'  => $shippingCountry,
      'shippingState'    => $shippingState,

      'shippingId' => $shippingId,

      'billingSameAsShipping' => $billingSameAsShipping,

      'billingAddress1' => $billingAddress1,
      'billingZip'      => $billingZip,
      'billingCity'     => $billingCity,
      'billingCountry'  => $billingCountry,
      'billingState'    => $billingState,

      'creditCardType' => $creditCardType,
      ];

    */

    /* SESSION ID */
    $sessionId = isset($request['sessionId']) ? $request['sessionId'] : FALSE; 
    $array['sessionId'] = self::validateData($sessionId, '', '0,32');

    /* PRODUCT */
    $productId = isset($request['productId']) ? $request['productId'] : FALSE;
    $array['productId'] = self::validateData($productId, '0-9', '0,32');
    
    /**
     * PERSONAL info req
     */
    $firstName = isset($request['firstName']) ? $request['firstName'] : FALSE; //A - Max 64 Characters
    $array['firstName'] = self::validateData($firstName, 'a-zA-Z \s', '2,64');

    $lastName = isset($request['lastName']) ? $request['lastName'] : FALSE; //A - Max 64 Characters
    $array['lastName'] = self::validateData($lastName, 'a-zA-Z \s', '2,64');

    $array['email'] = isset($request['email']) ? $request['email'] : FALSE;

    $phone = isset($request['phone']) ? $request['phone'] : FALSE; //N - Max 18 Characters
    $array['phone'] = self::validateData($phone, '0-9', '4,18');


    /**
     * SHIPPING info req
     */
    $shippingAddress1 = isset($request['shippingAddress1']) ? $request['shippingAddress1'] : FALSE; //A - Max 64 Characters
    $array['shippingAddress1'] = self::validateData($shippingAddress1, '', '2,64');

    $shippingZip = isset($request['shippingZip']) ? $request['shippingZip'] : FALSE; //A - Max 10 Characters
    $array['shippingZip'] = self::validateData($shippingZip, '0-9a-zA-Z \s', '4,10');

    $shippingCity = isset($request['shippingCity']) ? $request['shippingCity'] : FALSE; //A - Max 32 Characters
    $array['shippingCity'] = self::validateData($shippingCity, '', '2,32');

    $shippingCountry = isset($request['shippingCountry']) ? $request['shippingCountry'] : FALSE; // 2 character country value*. Required - Customer's shipping country
    $array['shippingCountry'] = self::validateData($shippingCountry, '', '2');

    $shippingState = isset($request['shippingState']) ? $request['shippingState'] : FALSE; //A - Max 32 Characters ##For US states use the 2 character abbreviation;
    $array['shippingState'] = self::validateData($shippingState, '', '2,32');

    /**
     * SHIPPING ID
     */
    $shippingId = isset($request['shippingId']) ? $request['shippingId'] : FALSE; //N - Integer. Required - Valid Lime Light shipping id to use for the order
    $array['shippingId'] = self::validateData($shippingId, '0-9', '1,64');

    /**
     * billingSameAsShipping req
     */
    $billingSameAsShipping = isset($request['billingSameAsShipping']) ? $request['billingSameAsShipping'] : 'YES';
    if ($billingSameAsShipping) {
        $billingSameAsShipping = strtolower(self::validateData($billingSameAsShipping, 'a-zA-Z', '0,3'));
        $array['billingSameAsShipping'] = $billingSameAsShipping;
    }
    // A - YES or NO (case insensitive)
    // If left blank, will default to yes and will copy all the shipping columns into the billing columns.
    // if (isset($request['promoCode'])) {
    //     $array['promoCode'] = $request['promoCode'];
    // }

    if ($billingSameAsShipping == 'yes') {
        /**
         * BILLING info A - YES
         */
        $billingAddress1 = $shippingAddress1;
        $billingZip = $shippingZip;
        $billingCity = $shippingCity;
        $billingCountry = $shippingCountry;
        $billingState = $shippingState;
    } else {

        /**
         * BILLING info A - NO
         */
        $billingAddress1 = isset($request['billingAddress1']) ? $request['billingAddress1'] : FALSE;
        $billingAddress1 = self::validateData($billingAddress1, '', '2,64');

        $billingZip = isset($request['billingZip']) ? $request['billingZip'] : FALSE;
        $billingZip = self::validateData($billingZip, '0-9a-zA-Z', '4,10');

        $billingCity = isset($request['billingCity']) ? $request['billingCity'] : FALSE;
        $billingCity = self::validateData($billingCity, '', '2,32');

        $billingCountry = isset($request['billingCountry']) ? $request['billingCountry'] : FALSE;
        $billingCountry = self::validateData($billingCountry, '', '2');

        $billingState = isset($request['billingState']) ? $request['billingState'] : FALSE;
        $billingState = self::validateData($billingState, '', '2,32');
    } // Billing properties

    $array['billingAddress1'] = $billingAddress1;
    $array['billingZip'] = $billingZip;
    $array['billingCity'] = $billingCity;
    $array['billingCountry'] = $billingCountry;
    $array['billingState'] = $billingState;
    /**
     * PAYMENT TYPE req*
     */
    $creditCardType = isset($request['creditCardType']) ? $request['creditCardType'] : FALSE;
    $array['creditCardType'] = self::validateData($creditCardType, 'a-zA-Z \_ ', '4,12');
    /**
     * Credit Card types
     *
     *
     * amex, visa, master, discover, checking,
     * offline, solo, maestro, switch, boleto,
     * paypal, diners, hipercard, aura, eft_germany,
     * giro, amazon, icepay, bitcoin_pg, eurodebit, sepa
     *
     */


    /*
      * Conditional Importing info
      *
      *
      * If payment method is paypal
      * and if is there is already sent order and we awaiting token
    */
    if ($creditCardType !== 'paypal') {

        $creditCardNumber = isset($request['creditCardNumber']) ? $request['creditCardNumber'] : FALSE; // N - Max 20 digits
        $creditCardNumber = self::validateData($creditCardNumber, '0-9', '8,20');

        $expirationDate = isset($request['expirationDate']) ? $request['expirationDate'] : FALSE; // N - MMYY example ## 0316
        $expirationDate = self::validateData($expirationDate, '0-9', '4');

        $CVV = isset($request['CVV']) ? $request['CVV'] : FALSE; //N - Max 4 digits
        $CVV = self::validateData($CVV, '0-9', '2,4');

        $array['creditCardNumber'] = $creditCardNumber;
        $array['expirationDate'] = $expirationDate;
        $array['CVV'] = $CVV;
    } elseif (isset($request['alt_pay_token']) && isset($request['alt_pay_payer_id'])) {
        $array['alt_pay_token'] = $request['alt_pay_token'];
        $array['alt_pay_payer_id'] = $request['alt_pay_payer_id'];
        $array['alt_pay_return_url'] = 'https://return.dummy.url';
    }

    /*
      * If there is Errors put it in $errorMsg
      *
      * foreach FALSE make a new line with error message
      * $errorMsg = @string
      *
      */
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