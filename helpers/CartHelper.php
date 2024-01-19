<?php
namespace app\helpers;
use Yii;

class CartHelper
{
  const DISCOUNT_FLAT = 1;
  const DISCOUNT_PERCENT = 2;

  public $products   = [];
  public $promo_code = [];
  public $promo_discount = FALSE;
  public $cart       = [];
  public $total = 0;

  public function __construct() {
    if (isset($_SESSION['cart'])) {
      $cart       = $_SESSION['cart'];
      $this->cart = $cart;
  
      foreach ($cart as $product_id => $product):
        if (!isset($product['name'])) {
          unset($_SESSION['cart'][$product_id]);
          header("Refresh:0");
          die();
          continue;
        }
        $this->setProduct($product_id, $product);
      endforeach;
    } else {
      $_SESSION['cart'] = array();
      $this->cart       = array();
    }
  }

  public function countProducts() {
    return count($this->cart);
  }

  public function getProducts() {
    return $this->products;
  }
  public function setProduct($product_id, $cartProduct) {

    $product = [];
    $product['product_id'] = $product_id;
    $product['name'] = isset($cartProduct['name']) ? $cartProduct['name'] : NULL;
    $product['amount'] = isset($cartProduct['amount']) ? $cartProduct['amount'] : NULL;
    $product['qty'] = isset($cartProduct['qty']) ? $cartProduct['qty'] : 1;
    $product['image'] = isset($cartProduct['image']) ? $cartProduct['image'] : NULL;
    $product['link'] = isset($cartProduct['link']) ? $cartProduct['link'] : NULL;
    $product['total'] = number_format($product['qty'] * $product['amount'], 2);
    $product['subscription_terms'] = isset($cartProduct['subscription_terms']) ? $cartProduct['subscription_terms'] : NULL;
    $product['receive_terms'] = isset($cartProduct['receive_terms']) ? $cartProduct['receive_terms'] : NULL;
    $product['product_type'] = isset($cartProduct['product_type']) ? $cartProduct['product_type'] : NULL;
    
    $this->total += $product['total'];

    array_push($this->products, $product);
  }

  public function getPromoCodeWithInfo() {

    $promo = FALSE;

    if(isset($_GET['promo_code']) && !empty($this->cart)){
      $post_promo_code = trim($_GET['promo_code']);

      if(isset($_SESSION['cart_promo_code'])) unset($_SESSION['cart_promo_code']);

      if(array_key_exists($post_promo_code, Yii::$app->params['promo_codes'])) {
        $_SESSION['cart_promo_code'] = Yii::$app->params['promo_codes'][$post_promo_code];
        $_SESSION['cart_promo_code']['code'] = $post_promo_code;
        
        $promo_code = $_SESSION['cart_promo_code'];
        $discount = $promo_code['discount'];

        if ($promo_code['type'] == CartHelper::DISCOUNT_PERCENT) {
          $discount = number_format(($discount / 100) * $this->total, 2);
        }

        if ($this->total >= $discount):
          $this->total = number_format($this->total - $discount, 2);
          $this->discount =  number_format($discount, 2);
        else :
          $this->discount =  number_format(0, 2);
        endif;

        return $this->discount;
      }
    }
    return FALSE;
  }
}