<?php

use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;
use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

header('Content-Type: application/json; UTF-8');

Loader::includeModule('iblock');


$jsnInf = file_get_contents('php://input');
var_dump($jsnInf);
$jsnInf = json_decode($jsnInf,true);
var_dump($jsnInf);

var_dump($jsnInf);



$error = false;
if (!preg_match('/^[\p{Cyrillic}]+$/u', $jsnInf['Name'])) {
    $error = true;
    $message = "Имя может содержать только буквы русского и латинского алфавитов";

}
elseif (!preg_match('/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/', $jsnInf['Phone'])) {
    $error = true;
    $message = "Номер телефона может содержать только цифры, скобки, тире и плюс";
}
elseif (!filter_var($jsnInf['Email'], FILTER_VALIDATE_EMAIL)) {
    $error = true;
    $message = "Неверный формат электронной почты";
}

$jsnInf = mb_convert_encoding($jsnInf,'UTF-8');
$jsnInf = json_encode($jsnInf, true);
$jsnInf = htmlspecialchars($jsnInf);

if (!$error)
{
    $newElement = new CIBlockElement;

    $arDataProduct = [
        "IBLOCK_ID" => 5,
        "NAME" => "Данные с формы",
        "PREVIEW_TEXT" => $jsnInf,
    ];
    $newElement->Add($arDataProduct);


    $message = "Форма успешно отправлена";
}


echo CUtil::PhpToJSObject(array(
    "error" => $error,
    "message" => $message
));
?>