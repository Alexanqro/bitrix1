<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <nav class="header-nav">
        <?
                foreach($arResult as $arItem):
                    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                        continue;
                    ?>
                    <?if($arItem["SELECTED"]):?>
                    <li class="header-nav__item" href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></li>
                <?else:?>
                    <li class="header-nav__item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></li>
                <?endif?>

                <?endforeach?>
    </nav>

<? endif?>


