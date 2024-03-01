<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as $key => $arItem){
    if(!empty($arItem['UF_COLOR2'])){
        $rs = CUserFieldEnum::GetList([], ['ID' => $arItem['UF_COLOR2']]);
        $ar = $rs->GetNext();
        $arResult['SECTIONS'][$key]['UF_COLOR2'] = $ar['VALUE'];
    }
//
    if(!empty($arItem['UF_IMG_D'])) {
        $resize = CFile::ResizeImageGet($arItem['UF_IMG_D'], ["width" => 1200, "height" => 706], BX_RESIZE_IMAGE_EXACT, true);
        $arResult['SECTIONS'][$key]['UF_IMG_D'] = $resize['src'];
    }

    if(!empty($arItem['UF_IMG_M'])){
        $resize = CFile::ResizeImageGet($arItem['UF_IMG_M'], ["width" => 630, "height" => 240], BX_RESIZE_IMAGE_EXACT, true);
        $arResult['SECTIONS'][$key]['UF_IMG_M'] = $resize['src'];
    }
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

