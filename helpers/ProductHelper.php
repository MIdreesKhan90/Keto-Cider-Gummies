<?php
namespace app\helpers;

use Yii;
use yii\helpers\Html;

class ProductHelper
{
  public static function getAllProducts() {
    $products = [];

    foreach(Yii::$app->params['all_products'] as $productID => $product)
    {
      $product['product_id'] = $productID;
      $products[$productID] = $product;
    }
    return $products;
  }

  public static function getSpecificProducts($specific) {
    $specificProducts = [];
    $products = self::getAllProducts();

    foreach(Yii::$app->params[$specific] as $productID)
    {
      if(array_key_exists(trim($productID), $products)) {
        $product = $products[$productID];
        $specificProducts[$productID] = $product;
      }
    }

    return $specificProducts;
  }

  public static function getProductByID($productID) {
    $product = [];
    if(array_key_exists(trim($productID), self::getAllProducts())) {
      $product = Yii::$app->params['all_products'][$productID];
    }
    return $product;
  }
}