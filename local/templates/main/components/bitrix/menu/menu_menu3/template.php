<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
    <div class="footer-content__subcol-top">
        <nav class="footer-content__nav">
            <ul class="footer-content__nav-list">
                <?
                foreach($arResult as $arItem):
                    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                        continue;
                    ?>
                    <?if($arItem["SELECTED"]):?>
                    <li class="footer-content__nav-item" href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></li>
                <?else:?>
                    <li class="footer-content__nav-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></li>
                <?endif?>

                <?endforeach?>
            </ul>
        </nav>
    </div>
<? endif?>