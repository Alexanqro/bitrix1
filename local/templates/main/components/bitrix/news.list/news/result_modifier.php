<?php

$rsSections = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams['IBLOCK_ID']),array(), array('NAME', 'CODE'));

while ($sectionList = $rsSections->GetNext()){
    $arResult['SECTIONS'][] = $sectionList;
}

//echo '<pre>';
//print_r($arResult['ITEMS']);
//
//echo '</pre>';