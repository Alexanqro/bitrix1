<?php

//echo '<pre>';
//print_r($arResult['ITEMS']);
//echo '</pre>';
//die();

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], ["width" => 1200, "height" => 800],
        BX_RESIZE_IMAGE_EXACT,
        true);

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}


$arResult['MAIN_SECTION'] = $arResult['SECTION']['PATH'][0]['ID'];

$arFilter = [
    'IBLOCK_ID'=>$arParams['IBLOCK_ID'],
    'GLOBAL_ACTIVE'=>'Y',
    'SECTION_ID'=>$arResult['MAIN_SECTION'],
    'DEPTH_LEVEL'=>2,
];

$rsSections = CIBlockSection::GetList(
    ['SORT'=>'ASC'],
    $arFilter,
    false,
    ['NAME', 'CODE', 'SECTION_PAGE_URL', 'ID']
);

while ($sectionList = $rsSections->GetNext()) {

    $arResult['SECTIONS'][] = $sectionList;

}

//echo '<pre>';
//print_r($arResult['SECTION']);
//echo '</pre>';
//die();
if ($arResult['SECTION']['PATH'][1]){
    $arResult['CURRENT_SECTION'] = $arResult['SECTION']['PATH'][1]['CODE'];
}

//echo '<pre>';
//print_r($arResult['SECTIONS']);
//echo '</pre>';
//die();



//$sectionsId = [];
//
//$rsSections = CIBlockSection::GetList(
//    [
//        "ID" => "asc"
//    ],
//    [
//        "SECTION_ID" => $arResult['SECTION']['PATH'][0]["ID"],
//        "ACTIVE" => 'Y',
//        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
//    ],
//    [
//        false
//    ],
//    [
//        "NAME",
//        "SECTION_PAGE_URL",
//        "CODE",
//    ]
//);
//
//while ($res = $rsSections->GetNext()) {
//    $arResult["SUB_SECTIONS"][]= $res;
//}
//
//if ($arResult['SECTION']['PATH'][1]) {
//    $arResult['CURRENT_SECTION'] = $arResult['SECTION']['PATH'][1]['CODE'];
//}
//
//echo '<pre>';
//print_r($arResult['SUB_SECTIONS']);
//echo '</pre>';
//die();
