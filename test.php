<?php
include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("TEST");
$APPLICATION->ShowHead();
?><div>
	 <?php $APPLICATION->ShowPanel();?>

<?

     $arFilter = [
             'ID' => 5
     ];

echo '<pre>';
print_r($arFilter);
echo '</pre>';


?>

     <?php
     $APPLICATION->IncludeComponent(
         "bitrix:news.list",
         "catalog_elements",
         array(
             "ACTIVE_DATE_FORMAT" => "d.m.Y",
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
             "FILTER_NAME" => "arrFilter",
             "HIDE_LINK_WHEN_NO_DETAIL" => "N",
             "IBLOCK_ID" => "2",
             "IBLOCK_TYPE" => "Slaider",
             "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
             "PARENT_SECTION_CODE" => $_REQUEST["SECTION_CODE"],
             "PREVIEW_TRUNCATE_LEN" => "",
             "PROPERTY_CODE" => array(
                 0 => "NEW_TOP",
                 1 => "NUTRITIONAL_VALUE",
                 2 => "COMPAUND",
                 3 => "STORAGE_CONDITION",
                 4 => "PACKAGING",
                 5 => "",
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
             "COMPONENT_TEMPLATE" => "catalog_elements"
         ),
         false
     ); ?>
</div>
