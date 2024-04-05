<?php

use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

header('Content-Type: application/json; charset=UTF-8');

Loader::includeModule('iblock');

$jsnData = file_get_contents('php://input');
$jsnDataAr = json_decode($jsnData, true);

if ($_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest' && $_SERVER['REQUEST_METHOD'] !== 'POST'){
    exit;
}

if($jsnDataAr['sessid'] !== bitrix_sessid()){
    exit;
}

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

$jsnDataStr = '';

foreach($jsnDataAr as $key => $value){
    $jsnDataStr .= $key . ':' . $value . PHP_EOL;
}

$jsnDataStr = htmlspecialchars($jsnDataStr);

$newElement = new CIBlockElement;

$arDataProduct = [
    "IBLOCK_ID" => 5,
    "NAME" => "Данные с формы",
    "PREVIEW_TEXT" => $jsnDataStr,
];

if (!$newElement->Add($arDataProduct)){
    $errors[] = $newElement->LAST_ERROR;
    echo json_encode(['errors' => $errors]);
    exit();
}

echo json_encode('Element save');
exit();























