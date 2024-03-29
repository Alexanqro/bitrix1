<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? if (!empty($arResult['ITEMS'])):?>
<div class="swiper main-news__swiper">
    <div class="swiper-wrapper">
        <? foreach($arResult['ITEMS'] as $key => $arItem):?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a class="swiper-slide main-news__card" href="<?= $arResult["ITEMS"][$key]['DETAIL_PAGE_URL']?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="main-news__card-img">
                <picture class="picture">
                    <source type="image/webp" srcset="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                    <img class="picture__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                </picture>
                <span class="main-news__card-plug"><?= $arResult['SECTION'][$arItem['IBLOCK_SECTION_ID']]['NAME']?></span>
            </div>
            <p class="main-news__card-date"><?=$arItem['DATE_CREATE']?></p>
            <p class="main-news__card-title"><?=$arItem['NAME']?></p>
            <? endforeach;?>
        </a>

    </div>
</div>
<?endif;?>









