<?php

$arResult['MAIN_SECTION'] = $arResult['SECTION']['PATH'][0]['ID'];

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

var_dump($arResult);