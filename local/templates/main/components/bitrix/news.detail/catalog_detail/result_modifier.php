<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();




foreach ($arResult['PROPERTIES']['GALERY']['VALUE'] as $index => $picture) {
    if(!empty($picture)) {
        $res = CFile::ResizeImageGet($picture, [1248, 1248], BX_RESIZE_IMAGE_EXACT);
        $arResult['PROPERTIES']['GALERY']['VALUE'][$index] = $res;
    }
}


echo '<pre>';

print_r($arResult["PROPERTIES"]);
echo '</pre>';
