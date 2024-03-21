<?php

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


if ($arResult['SECTION']['PATH'][1]){
    $arResult['CURRENT_SECTION'] = $arResult['SECTION']['PATH'][1]['CODE'];
}

$dbList = CIBlockElement::GetList(
    ["SORT"=>"ASC"],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ID' => $arResult["PROPERTIES"]
    ],
    false,
    false

);

while($ar_fields = $dbList->GetNext()){
    $arResult['STORAGE1'] = $ar_fields;
}

//echo '<pre>';
//print_r($_GET);
//echo '</pre>';



