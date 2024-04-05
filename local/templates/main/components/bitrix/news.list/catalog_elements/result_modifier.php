<?php

// ресайз
foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE'],
        ["width" => 1200, "height" => 800],
        BX_RESIZE_IMAGE_EXACT,
        true);
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}

// получение родительского раздела

$arResult['MAIN_SECTION'] = $arResult['SECTION']['PATH'][0];

// получение текущего раздела

$arResult['CURRENT_SECTION'] = end($arResult['SECTION']['PATH']);


// получение данных с подразделов родительского раздела

$rsSections = CIBlockSection::GetList(
    false,
    [
    'IBLOCK_ID'=>$arParams['IBLOCK_ID'],
    'SECTION_ID'=>$arResult['MAIN_SECTION']['ID'],
    ],
    false,
    ['NAME', 'CODE', 'SECTION_PAGE_URL']
);

while ($sectionList = $rsSections->GetNext()) {
    $arResult['SECTIONS'][] = $sectionList;
}


// получение значений свойства FAT_CONTENT по разделам

$dbListFat = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        "INCLUDE_SUBSECTIONS" => "Y",
        'SECTION_ID' => $arResult['CURRENT_SECTION']['ID'],
    ],
    [
        'PROPERTY_FAT_CONTENT'
    ]
);

while($ar_fields = $dbListFat->Fetch()) {
    $arResult['FAT_CONTENT'][] = $ar_fields;
}


// получение ID свойства BRANDS по текущим разделам

$brandsId = [];
$db_brands = CIBlockElement::GetList(
    ["SORT"=>"ASC"],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'INCLUDE_SUBSECTIONS' => 'Y',
        'SECTION_ID' => $arResult['CURRENT_SECTION']['ID'],
    ],
    [
        'PROPERTY_BRANDS'
    ]
);

while($ar_fields1 = $db_brands->GetNext()){
    $brandsId[] = $ar_fields1['PROPERTY_BRANDS_VALUE'];
}

// получение ID и имен свойства BRANDS

if(!empty($brandsId)){
$db_brands1 = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => 4,
        "ID" => $brandsId,
    ],
    [
        'ID',
        'NAME'
    ]
    );


    while($ar_fields12 = $db_brands1->GetNext()) {
        $arResult['BRANDS'][] = $ar_fields12;
    }
}


$db_top = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        "INCLUDE_SUBSECTIONS" => "Y",
        'SECTION_ID' => $arResult['CURRENT_SECTION']['ID'],
        'PROPERTY_NEW_TOP_VALUE' => "TOP"
    ],
    ['PROPERTY_NEW_TOP']
);

while($ar_fieldss = $db_top->GetNext()){
    $arResult['TOP'][] = $ar_fieldss;
}


//dd($arResult['TOP']);
//dd($arResult['FAT_CONTENT']);