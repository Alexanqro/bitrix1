<?php

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], ["width" => 1200, "height" => 800],
        BX_RESIZE_IMAGE_EXACT,
        true);

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}


$arResult['MAIN_SECTION'] = $arResult['SECTION']['PATH'][0]['ID'];
$arResult['ACTIVE_SECTION'] = end($arResult['SECTION']['PATH']);

var_dump($arResult['SECTION']['PATH']);
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

//echo '<pre>';
//var_dump($arResult['SECTION']['PATH']);
//echo '</pre>';

$dbListFat = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        '!PROPERTY_FAT_CONTENT' => false,
        'SUBSECTION' => 'Y',
        'SECTION_ID'=>$arResult['ACTIVE_SECTION'],

    ],
    ['PROPERTY_FAT_CONTENT']


);

while($ar_fields = $dbListFat->Fetch()){
    $arResult['FAT_CONTENT'][] = $ar_fields;
}



$dbListTop = CIBlockElement::GetList(
    ['SORT' => 'ASC'],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'PROPERTY_NEW_TOP_VALUE' => 'TOP'

    ],
    ['PROPERTY_NEW_TOP']
);

while($ar_fields1 = $dbListTop->GetNext()){
    $arResult['NEW_TOP'] = $ar_fields1;
}



$db_brands = CIBlockElement::GetList(
    ["SORT"=>"ASC"],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        '!PROPERTY_FAT_CONTENT' => false,
        'SUBSECTION' => 'Y',
        'SECTION_ID'=>$arResult['ACTIVE_SECTION'],

    ],
    ['PROPERTY_BRANDS'],
    false

);

while($ar_fields1 = $db_brands->GetNext()){
    $arResult['BRANDS_VALUES'][] = $ar_fields1;
}
//echo '<pre>';
//print_r($arResult['BRANDS_VALUES']);
//echo '</pre>';
//

$db_brands1 = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => 4,
        "ID" => $_GET["brands"]
    ]
    );
if($ar_fields12 = $db_brands1->GetNext()){
    $arResult['BRANDS_VALUES1'] = $ar_fields12["NAME"];

}

echo '<pre>';
print_r($arResult['BRANDS_VALUES']);
echo '</pre>';

echo '<pre>';
print_r($arResult['BRANDS_VALUES1']);
echo '</pre>';


