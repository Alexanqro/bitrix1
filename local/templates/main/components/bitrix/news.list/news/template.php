<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!---->

<!---->


<div class="news-content__categories" data-aos="fade-up">
    <div class="news-content__categories-wrapper">
        <a class="news-content__categories-item <?if(!isset($_REQUEST['SECTION_CODE'])):?>active<? endif;?> btn-hover_parent no-scale" href="/news/">
            <div class="btn-hover_circle white"></div><span>все</span>
        </a>
        <? foreach ($arResult['SECTIONS'] as $key => $arSection): ?>
        <a class="news-content__categories-item <?if($_REQUEST['SECTION_CODE'] == $arSection['CODE']):?>active<? endif;?> btn-hover_parent no-scale" href="<?= $arSection['SECTION_PAGE_URL']?>">
            <div class="btn-hover_circle white"></div><span><?= $arSection['NAME']?></span>
        </a>

        <?endforeach;?>
    </div>
</div>

<div class="news-content__listing" data-aos="fade-up">
    <? foreach($arResult['ITEMS'] as $key => $arItem):?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a class="news-card" href="<?= $arItem['DETAIL_PAGE_URL']?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="news-card__top">
                <div class="news-card__plug"><?= $arResult['SECTIONS'][$arItem['IBLOCK_SECTION_ID']]['NAME']  ?></div>
                <div class="news-card__bg">
                    <picture class="picture">
                        <source type="<?= $arItem['PREVIEW_PICTURE']['SRC']?>">
                        <img class="picture__img" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                    </picture>
                </div>
            </div>
            <div class="news-card__bot">
                <div class="news-card__date"><?= $arItem['DATE_CREATE']?></div>
                <div class="news-card__title"><?= $arItem['PREVIEW_TEXT']?></div>
            </div>
        </a>

    <?endforeach;?>
</div>



