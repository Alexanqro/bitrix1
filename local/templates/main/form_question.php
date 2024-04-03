<?php

use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;
use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

header('Content-Type: application/json; charset=UTF-8');

Loader::includeModule('iblock');


$jsnData = file_get_contents('php://input');
$jsnDataStr = htmlspecialchars($jsnData);
$jsnDataAr = json_decode($jsnData, true);

$errors = [];

if (!preg_match('/^[\p{Cyrillic}]+$/u', $jsnDataAr['Name'])) {
    $errors[] = "Имя может содержать только буквы русского алфавита";
}
if (!preg_match('/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/', $jsnDataAr['Phone'])) {
    $errors[] = "Неверный формат номера телефона";
}
if (!filter_var($jsnDataAr['Email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Неверный формат электронной почты";
}

if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    exit;
}

    $newElement = new CIBlockElement;

    $arDataProduct = [
        "IBLOCK_ID" => 5,
        "NAME" => "Данные с формы",
        "PREVIEW_TEXT" => $jsnDataStr,
    ];
    $newElement->Add($arDataProduct);


    $message = "Форма успешно отправлена";



