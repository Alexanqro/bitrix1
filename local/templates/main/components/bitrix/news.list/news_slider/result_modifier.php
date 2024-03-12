<?php

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], ["width" => 1200, "height" => 800],
        BX_RESIZE_IMAGE_EXACT,
        true);

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}

$rsSections = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams['IBLOCK_ID']),array(), array('NAME', 'CODE'));

while ($sectionList = $rsSections->GetNext()){
 $arResult['SECTIONS'][] = $sectionList;
}














//
//if (!function_exists('dd')) {
//    function dd($var)
//    {
//        global $APPLICATION;
//
//        $APPLICATION->RestartBuffer();
//        echo '<pre>';
//        var_dump($var);
//        echo '</pre>';
//        die();
//    }
//}
//dd($arResult['ITEMS']);
//
//exit();
////?>
