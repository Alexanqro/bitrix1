<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

echo '123';


foreach ($arResult['ITEMS'] as $key => $arItem) {
    $resize = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], ["width" => 670, "height" => 1000],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true);

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $resize['src'];
}