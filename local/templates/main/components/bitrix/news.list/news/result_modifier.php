<?php

$rsSections = CIBlockSection::GetList(
    [],
    ['IBLOCK_ID' => $arParams['IBLOCK_ID']],
    ['NAME', 'CODE', 'SECTION_PAGE_URL']
);

while ($sectionList = $rsSections->GetNext()){
    $arResult['SECTION'][] = $sectionList;
}

//echo '<pre>';
//print_r($arResult);
//
//'</pre>';