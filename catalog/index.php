<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Katalog");
?>

<?

$secCode = $urlArr[2];
$elemCode = $urlArr[3];


if (!isset($secCode)){
    require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/catalog/sections.php");
}

    if (isset($secCode) && !isset($elemCode)){
        require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/catalog/elements.php");
    }

    if (isset($elemCode)){
        require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/catalog/detail.php");
    }

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>