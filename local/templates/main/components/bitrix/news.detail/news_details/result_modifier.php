<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$dateCreate = CIBlockFormatProperties::DateFormat(
    'j F Y',
    MakeTimeStamp(
        $arResult["DATE_CREATE"],
        CSite::GetDateFormat()
    )
);
$arResult['DATE_CREATE'] = $dateCreate;


$db_list = CIBlockSection::GetList(
    ['SORT' => 'ASC'],
    ['ID' => $arResult['IBLOCK_SECTION_ID']],
    true);

if ($ar_result = $db_list->GetNext()) {
    $arResult['SECTION_NAME'] = mb_strtolower($ar_result['NAME']);
} else {
    $arResult['SECTION_NAME'] = 'Пусто';
}

//echo '<pre>';
//print_r($arResult['PREVIEW_PICTURE']);
//
//echo '</pre>';