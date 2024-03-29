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

// получение ID родительского раздела

$arResult['MAIN_SECTION'] = $arResult['SECTION']['PATH'][0]['ID'];

// получение ID текущего раздела

$arPath = end($arResult['SECTION']['PATH']);
$arResult['CURRENT_SECTION'][] = $arPath['ID'];

// получение данных с подразделов родительского раздела

$rsSections = CIBlockSection::GetList(
    ['SORT'=>'ASC'],
    [
    'IBLOCK_ID'=>$arParams['IBLOCK_ID'],
    'SECTION_ID'=>$arResult['MAIN_SECTION'],
    'DEPTH_LEVEL'=>2
    ],
    false,
    ['NAME', 'CODE', 'SECTION_PAGE_URL', 'ID']
);

while ($sectionList = $rsSections->GetNext()) {
    $arResult['SECTIONS'][] = $sectionList;
}

// получение символьного кода активного раздела

if ($arResult['SECTION']['PATH'][1]){
    $arResult['ACTIVE_SECTION'] = $arResult['SECTION']['PATH'][1]['CODE'];
}

// получение значений свойства FAT_CONTENT по разделам

$dbListFat = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        '!PROPERTY_FAT_CONTENT' => false,
        "INCLUDE_SUBSECTIONS" => "Y",
        'SECTION_ID' => $arResult['CURRENT_SECTION'],
    ],
    ['PROPERTY_FAT_CONTENT']
);

while($ar_fields = $dbListFat->Fetch()){
    $arResult['FAT_CONTENT'][] = $ar_fields;
}

// получение значений свойства TOP_NEW

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

// получение ID свойства BRANDS по текущим разделам

$brandsId = [];
$db_brands = CIBlockElement::GetList(
    ["SORT"=>"ASC"],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        '!PROPERTY_BRANDS' => false,
        'INCLUDE_SUBSECTIONS' => 'Y',
        'SECTION_ID' => $arResult['CURRENT_SECTION'],

    ],
    ['PROPERTY_BRANDS']
);

while($ar_fields1 = $db_brands->GetNext()){
    $brandsId[] = $ar_fields1['PROPERTY_BRANDS_VALUE'];

}

// получение ID и имен свойства BRANDS

$db_brands1 = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => 4,
        "ID" => $brandsId,
    ],
    ['ID', 'NAME']
    );

if(!empty($brandsId)){
while($ar_fields12 = $db_brands1->GetNext()) {
    $arResult['BRANDS'][] = $ar_fields12;
}
}


