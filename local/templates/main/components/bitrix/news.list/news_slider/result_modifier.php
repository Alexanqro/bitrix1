<?php

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], ["width" => 1200, "height" => 800],
        BX_RESIZE_IMAGE_EXACT,
        true);

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}


$rsSections = CIBlockSection::GetList(
    [],
    ['IBLOCK_ID' => $arParams['IBLOCK_ID']],
    ['NAME', 'CODE', 'SECTION_PAGE_URL', 'ID']
);

while ($sectionList = $rsSections->GetNext()){
    $arResult['SECTION'][$sectionList['ID']] = $sectionList;

}

foreach ($arResult['ITEMS'] as $index => $arItem) {
    $dateCreate = CIBlockFormatProperties::DateFormat('j F Y', MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()));
    $arResult['ITEMS'][$index]['DATE_CREATE'] = $dateCreate;
}

//echo '<pre>';
//
//print_r($arResult['ITEMS']);
//echo '</pre>';











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
