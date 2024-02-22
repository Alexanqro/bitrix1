<?php

$menu = [];

$menuColCnt = ceil(count($arResult) / 2);

foreach ($arResult as $key => $item) {
    if ($key < $menuColCnt) {
        $menu[0][] = $item;
    } else {
        $menu[1][] = $item;
    }
}

$arResult = $menu;


