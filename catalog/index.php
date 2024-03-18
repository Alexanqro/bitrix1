<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Katalog");

var_dump($_REQUEST);
//die(
//
//);
?><?

if (!isset($_REQUEST['SECTION_CODE'])){
    require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/catalog/sections.php");
}

    if (isset($_REQUEST['SECTION_CODE']) && !isset($_REQUEST['ELEMENT_CODE'])){
        require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/catalog/elements.php");
    }

    if (isset($_REQUEST['ELEMENT_CODE'])){
        require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/catalog/detail.php");
    }

?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>