<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['PROPERTIES']['GALERY']['VALUE'] as $key => $arItem) {
    if(!empty($arItem)) {
        $resize = CFile::ResizeImageGet(
            $arItem,
            ["width" => 1248, "height" => 1248],
            BX_RESIZE_IMAGE_EXACT);
        $arResult['PROPERTIES']['GALERY']['VALUE'][$key] = $resize;
    }
}
?>


<?php
$dbList = CIBlockElement::GetList(
    ["SORT"=>"ASC"],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ID' => $arResult["PROPERTIES"]['NEXT_PRODUCT']['VALUE']
    ],
    false,
    false,
    ['NAME', 'DETAIL_PAGE_URL', 'PREVIEW_PICTURE']
);

while($ar_fields = $dbList->GetNext()){
    $arResult["PROPERTIES"]['NEXT_PRODUCT'] = $ar_fields;
}

$resize = CFile::ResizeImageGet(
    $arResult['PROPERTIES']['NEXT_PRODUCT']['PREVIEW_PICTURE'],
    ["width" => 1248, "height" => 1248],
    BX_RESIZE_IMAGE_EXACT);

$arResult['PROPERTIES']['NEXT_PRODUCT']['PREVIEW_PICTURE'] = $resize['src'];


$res = CIBlockElement::GetByID($arResult["PROPERTIES"]['BRANDS']['VALUE']);


while ($ar_res = $res->GetNext()){
    $arResult['PROPERTIES']['BRANDS'] = $ar_res;
}



$dbList = CIBlockElement::GetList(
    ["SORT"=>"ASC"],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ID' => $arResult["PROPERTIES"]['BRANDS']['VALUE']
    ],
    [
        'PROPERTY_BRANDS'
    ],
    false

);

while($ar_fields = $dbList->GetNext()){
    $arResult['BRANDS'] = $ar_fields;
}


echo '<pre>';
print_r($arResult['BRANDS']);
echo '</pre>';
