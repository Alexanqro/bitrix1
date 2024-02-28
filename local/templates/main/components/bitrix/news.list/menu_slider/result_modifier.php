<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php

//echo '<pre>';
//var_dump($arResult['ITEMS']);
//echo '</pre>';
//
//exit();

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 2000, "height" => 760), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['HEIGHT'] = $resize['height'];
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['WIDTH'] = $resize['width'];
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];

}

echo '<pre>';
var_dump($arItem);
echo '</pre>';

exit();


?>