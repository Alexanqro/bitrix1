<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


foreach ($arResult['SECTIONS'] as $key => $value){
    if(!empty($value['UF_COLOR2'])){
        $rs = CUserFieldEnum::GetList(array(), array('ID' => $value['UF_COLOR2']));
        $ar = $rs->GetNext();
        $arResult['SECTIONS'][$key]['UF_COLOR2'] = $ar['VALUE'];
    }
}
//$APPLICATION->restartBuffer();

//echo '<pre>';
////
//
//
//echo '</pre>';








    echo '<pre>';
    var_dump($arResult);
    echo '</pre>';

if (!function_exists('dd')) {
    function dd($var) {
        global $APPLICATION;

        $APPLICATION->RestartBuffer();
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die();
    }
}

dd($arResult);

?>