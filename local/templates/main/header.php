<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<!doctype html>
<html lang=<?=LANGUAGE_ID?>>

<head>

    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/assets.php');?>

</head>

<body class="body">
<div><?php $APPLICATION->ShowPanel();?></div>
    <div class="wrapper">
        <?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/header.php"); ?>
        <?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/header_menu_overlay.php"); ?>
        <main class="main">





