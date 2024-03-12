<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? if (!empty($arResult['ITEMS'])):?>
<div class="swiper main-news__swiper">
    <div class="swiper-wrapper">
        <? foreach($arResult['ITEMS'] as $arItem):?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>


        <a class="swiper-slide main-news__card" href="<? $arResult['SECTIONS']['CODE']?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

            <div class="main-news__card-img">
                <picture class="picture">
                    <source type="image/webp" srcset="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                    <img class="picture__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                </picture>
                <span class="main-news__card-plug"><?=$arItem['SECTIONS']['NAME']?></span>
            </div>
            <p class="main-news__card-date"><?=$arItem['SECTIONS']['DATE_CREATE']?></p>
            <p class="main-news__card-title"><?=$arItem['PREVIEW_TEXT']?></p>

        </a>

        <? endforeach;?>
    </div>
</div>
<?endif;?>

<?php
//
//echo '<pre>';
//print_r($arResult['ITEMS']);
//
//echo '</pre>';

?>










<!---->
<!---->
<?// if(!empty($arResult['ITEMS'])):?>
<!--    --><?// foreach($arResult['ITEMS'] as $key => $arItem):?>
<!--    <div class="swiper main-news__swiper">-->
<!--        <div class="swiper-wrapper">-->
<!--            <a class="swiper-slide main-news__card" href="#">-->
<!--                <div class="main-news__card-img">-->
<!--                    <picture class="picture">-->
<!--                        <source type="image/webp" srcset="--><?//=$arItem['PREVIEW_PICTURE']['SRC']?><!--">-->
<!--                        <img class="picture__img" src="--><?//=$arItem['PREVIEW_PICTURE']['SRC']?><!--">-->
<!--                    </picture>-->
<!--                    <span class="main-news__card-plug">--><?//=$arItem['SECTION_NAME']?><!--</span>-->
<!--                </div>-->
<!--                <p class="main-news__card-date">6 марта 2023</p>-->
<!--                <p class="main-news__card-title">--><?//=$arItem['PREVIEW_TEXT']?><!--</p>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--    --><?// endforeach;?>
<?// endif?>
<!---->
