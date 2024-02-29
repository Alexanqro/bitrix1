<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();



foreach ($arResult['ITEMS'] as $key => $arItem) {

//    echo '<pre>';
//    var_dump($arItem['DETAIL_PICTURE']);
//    echo '</pre>';
//    exit();


    $resize = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], ["width" => 670, "height" => 1000],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true);

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}

//echo '<pre>';
//var_dump($arItem['DETAIL_PICTURE']);
//echo '</pre>';
//exit();