<?php

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . '/590.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/app.css');

$asset->addJs(SITE_TEMPLATE_PATH . '/assets/app.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/vendor.js');
