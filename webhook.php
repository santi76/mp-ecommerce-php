<?php
require_once 'vendor/autoload.php';

$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_encode($json);

$logFile = fopen("log-mp-1.txt", 'a') or die("Error creando archivo");
fwrite($logFile, $data);
fclose($logFile);


    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan::find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription::find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice::find_by_id($_POST["id"]);
            break;
    }


$logFile = fopen("log-mp-2.txt", 'a') or die("Error creando archivo");
fwrite($logFile, $payment);
fclose($logFile);


ob_clean();
header("HTTP/1.1 200 OK");

?>