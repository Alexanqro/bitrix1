<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("news");

var_dump($_REQUEST);
?>

<?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/news.php"); ?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>