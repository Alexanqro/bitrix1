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
$jsnInf = htmlspecialchars($jsnInf);

$newElement = new CIBlockElement;

$arDataProduct = [
    "IBLOCK_ID" => 5,
    "NAME" => "Данные с формы",
    "PREVIEW_TEXT" => $jsnInf,
];
$newElement->Add($arDataProduct);


