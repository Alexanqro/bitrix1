<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Главная страница");
$APPLICATION->SetTitle("Главная страница");
?>

<?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/main_slider.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/main_catalog.php"); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>