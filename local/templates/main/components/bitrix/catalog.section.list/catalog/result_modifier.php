<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


foreach ($arResult['SECTIONS'] as $key => $arItem){
    if(!empty($arItem['UF_COLOR2'])){
        $rs = CUserFieldEnum::GetList([], ['ID' => $arItem['UF_COLOR2']]);
        $ar = $rs->GetNext();
        $arResult['SECTIONS'][$key]['UF_COLOR2'] = $ar['VALUE'];
    }

    if(!empty($arItem['PICTURE'])) {
        $resize = CFile::ResizeImageGet($arItem['PICTURE'], ["width" => 1200, "height" => 1200], BX_RESIZE_IMAGE_EXACT, true);
        $arResult['SECTIONS'][$key]['PICTURE']['SRC'] = $resize['src'];
    }

    if(!empty($arItem['DETAIL_PICTURE'])){
        $resize = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], ["width" => 1200, "height" => 1200], BX_RESIZE_IMAGE_EXACT, true);
        $arResult['SECTIONS'][$key]['DETAIL_PICTURE'] = $resize['src'];
    }
}



?>
<!--//$APPLICATION->restartBuffer();-->
<!---->
<!--//echo '<pre>';-->
<!--////-->
<!--//-->
<!--//-->
<!--//echo '</pre>';-->
<!---->
<!---->



<!---->

<?php
//   echo '<pre>';
//   var_dump($arResult);
//   echo '</pre>';
//
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
//dd($arResult['SECTIONS']);

//?>