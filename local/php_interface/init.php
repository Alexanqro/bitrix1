<?php

use Bitrix\Main\Application;
use Bitrix\Main\Web\Uri;
use Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {exit;}

Loader::includeModule("highloadblock");

$request = Application::getInstance()->getContext()->getRequest();

$postData = Application::getInstance()->getContext()->getRequest()->getPostList()->toArray();
$getData = Application::getInstance()->getContext()->getRequest()->getQueryList()->toArray();

$mySession = Application::getInstance()->getSession();

$context = Application::getInstance()->getContext();
$isAjax = $request->isAjaxRequest();

$uri = new Uri($request->getRequestUri());

$urlArr = array_diff(explode('/', $uri->getPath()), ['']);
