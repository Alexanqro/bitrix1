<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title><?$APPLICATION->ShowTitle?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <?$APPLICATION->ShowHead();?>
    <?require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/assets.php');?>

</head>

<body class="body">
<div><?php $APPLICATION->ShowPanel();?></div>
    <div class="wrapper">
        <?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/templ/header.php"); ?>
        <main class="main">





