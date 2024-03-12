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


<?//
//echo '<pre>';
//print_r($arResult['SECTIONS']);
//echo '</pre>';
//die();sdsdsd
//?>


<? foreach ($arResult['SECTIONS'] as $arSection)?>
<div class="news-content__categories" data-aos="fade-up">
    <div class="news-content__categories-wrapper">
<!--        <a class="news-content__categories-item active btn-hover_parent no-scale" href="--><?//= $arSection['CODE']?><!--">-->
<!--            <div class="btn-hover_circle white"></div><span>--><?//= $arSection['NAME']?><!--</span>-->
<!--        </a>-->
        <a class="news-content__categories-item btn-hover_parent no-scale" href="<?= $arSection['CODE']?>">
            <div class="btn-hover_circle white"></div><span><?= $arSection['NAME']?></span>
        </a>

    </div>
</div>
<? foreach($arResult['ITEMS'] as $arItem):?>
<div class="news-content__listing" data-aos="fade-up">
    <a class="news-card" href="<?= $arItem['CODE']?>">
        <div class="news-card__top">
            <div class="news-card__plug"><?= $arItem['SECTION']['NAME']?></div>
            <div class="news-card__bg">
                <picture class="picture">
                    <source type="<?= $arItem['PREVIEW_PICTURE']['SRC']?>"><img class="picture__img" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                </picture>
            </div>
        </div>
        <div class="news-card__bot">
            <div class="news-card__date"><?= $arItem['PREVIEW_PICTURE']['TIMESTAMP_X']?></div>
            <div class="news-card__title"><?= $arItem['PREVIEW_TEXT']?></div>
        </div>
    </a>
</div>
        <?endforeach;?>



