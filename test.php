<?php
include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("");
$APPLICATION->ShowHead();
?><div>
	 <?php $APPLICATION->ShowPanel();?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "Slaider",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>
arFilter = Array(
'IBLOCK_ID'=&gt;$arParams['IBLOCK_ID'],
'GLOBAL_ACTIVE'=&gt;'Y',
'PROPERTY'=&gt;Array('SRC'=&gt;'https://%')
);
$dbList = CIBlockSection::GetList(Array($by=&gt;$order), $arFilter, true);
$section=[];
while($arrResult = $dbList-&gt;GetNext())
{
$section[$arrResult['ID']]['SECTION_CODE'] = $arrResult['CODE'] . '/';
$section[$arrResult['ID']]['SECTION_NAME'] = $arrResult['NAME'];
}
$arResult['SECTIONS'] = $section;
foreach ($arResult['ITEMS'] as $index =&gt; $arItem) {
$dateCreate = CIBlockFormatProperties::DateFormat(
'j F Y',
MakeTimeStamp(
$arItem["DATE_CREATE"],
CSite::GetDateFormat()
)
);
$arResult['ITEMS'][$index]['DATE_CREATE'] = $dateCreate;
$arResult['ITEMS'][$index]['SECTION_NAME'] = mb_strtolower($section[$arItem['IBLOCK_SECTION_ID']]['SECTION_NAME']);
if(!empty($arItem["PREVIEW_PICTURE"]))
$newsPic = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'],[1200,800], BX_RESIZE_IMAGE_EXACT);
$arResult['ITEMS'][$index]['PREVIEW_PICTURE'] = $newsPic;
}