<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="header-main__navigation-col">
        <nav class="header-main__navigation-nav">
            <?
            foreach($arResult[0] as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <?if($arItem["SELECTED"]):?>
                <a class="header-main__navigation-link" href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a>
            <?else:?>
                <a class="header-main__navigation-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <?endif?>

            <?endforeach?>
        </nav>
    </div class="header-main__navigation-col">
    <div class="header-main__navigation-col">
        <nav class="header-main__navigation-nav">
            <?foreach($arResult[1] as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <?if($arItem["SELECTED"]):?>
                <a class="header-main__navigation-link" href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a>
            <?else:?>
                <a class="header-main__navigation-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <?endif?>

            <?endforeach?>
        </nav>
    </div class="header-main__navigation-col">
<?endif?>
