<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */
//

//echo '<pre>';
//print_r($arResult);
//echo '</pre>';
//die();


if (empty($arResult))
    return "";


$strReturn .=
    '<div class="breadcrumbs">
    <div class="breadcrumbs-wrapper">
        <div class="breadcrumbs-wrapper__row">
           ';

$itemSize = count($arResult);

foreach ($arResult as $key => $arItem) {

    if ($key < $itemSize - 1) {
        $strReturn .= '<a class="breadcrumbs__item" href="' . $arItem['LINK'] . '">' . $arItem['TITLE'] . '</a>';
        $strReturn .= '<div class="breadcrumbs__arrow">
                <svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                    <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                </svg>
            </div>';
    } else {
        $strReturn .= '<div class="breadcrumbs__current active">' . $arItem['TITLE'] . '</div>';
    }
}
$strReturn .= '</div>
    </div>
</div>';
print_r($arResult) ;
die();
return $strReturn; ?>

