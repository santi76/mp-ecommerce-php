<?php
require_once 'vendor/autoload.php';

   MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); // Either

$payment = MercadoPago\Payment::find_by_id($id_mp);
$merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);

mail('santisayago@gmail.com', 'certificado MP', print_r($payment, true));

ob_clean();
header("HTTP/1.1 200 OK");

?>