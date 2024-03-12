<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php


foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], ["width" => 1840, "height" => 760],
        BX_RESIZE_IMAGE_EXACT,
        true);

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}


//if (!function_exists('dd')) {
//    function dd($var) {
//        global $APPLICATION;
//
//        $APPLICATION->RestartBuffer();
//        echo '<pre>';
//        var_dump($var);
//        echo '</pre>';
//        die();
//    }
//}
//
//dd($arResult);

?>