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
<?$this->SetViewTarget('form');?>

<div class="catalog-detail__form" data-aos="fade-up">
    <div class="catalog-detail__form-title">задать вопрос по продукту или&nbsp;оставить заявку на закупку</div>
    <div class="catalog-detail__form-content">
        <form class="partners-requisites__form" data-form="catalog-detail" method ="POST">
            <?=bitrix_sessid_post()?>
            <div class="partners-requisites__form-top">
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">Имя</div>
                    <input name = "Name" class="input" data-input="" required data-mask-text="" data-parsley-pattern="^[А-Яа-яЁёs]+$" placeholder="Имя" id ="NameID">
                </div>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">Телефон</div>
                    <input name = "Phone" class="input" data-input="" required type="tel" placeholder="Телефон" data-mask-phone="" id = "PhoneID">
                </div>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">E-mail</div>
                    <input name = "Email" class="input" data-input="" required type="email" placeholder="E-mail" id = "EmailID">
                </div>
            </div>
            <div class="partners-requisites__form-area">
                <div class="input-wrapper input-wrapper_textarea" data-input-parent="">
                    <div class="input-wrapper__placeholder placeholder_background">Комментарий к заявке</div>
                    <input name = "Comments" class="textarea" data-input="" type="text" placeholder="Комментраий к заявке" >
                </div>
            </div>
            <div class="partners-requisites__form-bot">
                <div class="partners-requisites__form-policy">Нажимая на кнопку «Отправить», вы даете согласие с
                    <a class="partners-requisites__form-link" href="#"> политикой в отношении обработки персональных данных</a>
                </div>
                <button class="partners-requisites__form-btn btn-hover_parent" type="submit">
                    <div class="btn-hover_circle"></div>
                    <span>Отправить</span>
                </button>
                <input type="hidden"name="URI" value="<?=$_SERVER["REDIRECT_SCRIPT_URI"]?>"/>
                <input type="hidden"name="NAME" value="<?=$arResult['PREVIEW_PICTURE']['TITLE']?>"/>
            </div>
        </form>
    </div>
</div>

<?$this->EndViewTarget();?>

<div class="catalog-detail__inner" xmlns="http://www.w3.org/1999/html">
    <div class="catalog-detail__col slider">
        <div class="recipes-detail__gallery">
            <div class="recipes-detail__gallery-left">
                <div class="swiper gallery-thumbs-catalog">

                    <div class="swiper-wrapper">
                        <? foreach ($arResult['PROPERTIES']['GALERY']['VALUE'] as $key => $arItem):?>
                        <div class="swiper-slide">
                            <div class="catalog-detail__thumb-img">
                                <picture class="picture">
                                    <source type="image/webp" srcset="<?=$arItem['src']?>"><img class="picture__img" src="<?=$arItem['src']?>">
                                </picture>
                            </div>
                        </div>
                        <? endforeach;?>
                    </div>

                </div>
            </div>
            <div class="recipes-detail__gallery-right">
                <div class="catalog-card__icons">
                    <? if ($arResult['PROPERTIES']['NEW_TOP']['VALUE'][0] == "NEW"): ?>
                    <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                            <mask id="mask0_301_203" style="mask-type:alpha" maskunits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                            </mask>
                            <g mask="url(#mask0_301_203)">
                                <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                            </g>
                            <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                            <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                            <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                        </svg></div>
                    <? elseif ($arResult['PROPERTIES']['NEW_TOP']['VALUE'][0] == "TOP"): ?>
                    <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                            <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                            <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                            <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                        </svg></div>
                    <? endif;?>
                </div>
                <div class="recipes-detail__gallery-btns">
                    <div class="slider-btn btn-hover_parent recipes-detail__gallery-left-btn">
                        <div class="white-circle">
                            <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="slider-btn btn-hover_parent recipes-detail__gallery-right-btn">
                        <div class="white-circle right">
                            <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper swiper-gallery-catalog">
                    <div class="swiper-wrapper">
                        <? foreach ($arResult['PROPERTIES']['GALERY']['VALUE'] as $key => $arItem):?>
                        <div class="swiper-slide">
                            <div class="catalog-detail__img">
                                <picture class="picture">
                                    <source type="image/webp" srcset="<?=$arItem['src']?>"><img class="picture__img" src="<?=$arItem['src']?>">
                                </picture>
                            </div>
                        </div>
                        <? endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-detail__col info" data-aos="fade-up">
        <div class="catalog-detail__breadcrumbs desktop">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "navigation_news",
                array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            ); ?>
        </div><span class="catalog-detail__brandmark"><?=$arResult['PROPERTIES']['BRANDS']['NAME']?></span>
        <div class="catalog-detail__title"><?=$arResult['PREVIEW_PICTURE']['TITLE']?></div>
        <div class="catalog-detail__desk"><?=$arResult['PREVIEW_TEXT']?></div>
        <div class="catalog-detail__thumbs" data-aos="fade-up">
            <div class="catalog-detail__thumbs-top"><a class="catalog-hero__rec blue btn-hover_parent" href="#">
                    <div class="catalog-hero__rec-title">где купить</div>
                    <div class="catalog-hero__rec-text">Локальные, федеральные сети и маркетплейсы</div>
                    <div class="catalog-hero__rec-circle">
                        <div class="button button-arrow_right btn-hover_parent">
                            <div class="btn-hover_circle total-white"></div>
                            <div class="button button-arrow_right btn-hover_parent">
                                <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                    <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="catalog-detail__thumbs-row">
                <div class="catalog-hero__recomendations details"><a class="catalog-hero__rec blue btn-hover_parent" href="./assets/images/fabricat.pdf" download>
                        <div class="catalog-hero__rec-title">Рекомендации по выпеканию</div>
                        <div class="catalog-hero__rec-text">Файл PDF</div>
                        <div class="catalog-hero__rec-circle">
                            <div class="button button-arrow_right btn-hover_parent">
                                <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 3C12.75 2.58579 12.4142 2.25 12 2.25C11.5858 2.25 11.25 2.58579 11.25 3V9H9C8.07099 9 7.60649 9 7.21783 9.06156C5.07837 9.40042 3.40042 11.0784 3.06156 13.2178C3 13.6065 3 14.071 3 15C3 15.929 3 16.3935 3.06156 16.7822C3.40042 18.9216 5.07837 20.5996 7.21783 20.9384C7.60649 21 8.07099 21 9 21H15C15.929 21 16.3935 21 16.7822 20.9384C18.9216 20.5996 20.5996 18.9216 20.9384 16.7822C21 16.3935 21 15.929 21 15C21 14.071 21 13.6065 20.9384 13.2178C20.5996 11.0784 18.9216 9.40042 16.7822 9.06156C16.3935 9 15.929 9 15 9H12.75V3ZM12.75 9H11.25V15.8105C10.9273 15.483 10.5437 15.001 9.98553 14.297L8.58768 12.534C8.33034 12.2095 7.8586 12.155 7.53403 12.4123C7.20946 12.6697 7.15497 13.1414 7.41232 13.466L8.83857 15.2648C9.37175 15.9373 9.81172 16.4922 10.2055 16.8875C10.6096 17.2932 11.0582 17.6294 11.6313 17.7208C11.7534 17.7402 11.8766 17.75 12 17.75C12.1234 17.75 12.2466 17.7402 12.3687 17.7208C12.9418 17.6294 13.3904 17.2932 13.7945 16.8875C14.1883 16.4922 14.6283 15.9372 15.1614 15.2648L16.5877 13.466C16.845 13.1414 16.7905 12.6697 16.466 12.4123C16.1414 12.155 15.6697 12.2095 15.4123 12.534L14.0145 14.297C13.4563 15.001 13.0727 15.483 12.75 15.8105V9Z" fill="#0068FF"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <div class="catalog-hero__rec white btn-hover_parent" data-button-fade="recipec-video">
                        <div class="catalog-hero__rec-title">Рекомендации по выпеканию</div>
                        <div class="catalog-hero__rec-text">Видео</div>
                        <div class="catalog-hero__rec-circle">
                            <div class="button button-arrow_right btn-hover_parent">
                                <div class="btn-hover_circle total-white"></div><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 10.8696L8 8.7549C8 6.47285 10.6192 5.18375 12.4275 6.57579L16.1488 9.44043C17.5788 10.5413 17.5788 12.6978 16.1488 13.7987L12.4275 16.6633C10.6192 18.0554 8 16.7662 8 14.4842L8 12.3696L8 10.8696Z" fill="#0068FF"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-detail__accordeons accordion-container" data-aos="fade-up">
            <div class="ac ac-vacancies ac-catalog">
                <div class="ac-header ac-vacancies__top ac-trigger">
                    <h3 class="ac-vacancies__title"><?=$arResult['PROPERTIES']['PACKAGING']['NAME']?></h3>
                    <div class="ac-vacancies__btn">
                        <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                    </div>
                </div>
                <div class="ac-panel ac-catalog__bot">
                    <div class="ac-catalog__links">
                        <div class="ac-catalog__links-item active">Индивидуальная упаковка</div>
                        <div class="ac-catalog__links-item">Весовое</div>
                    </div>
                    <div class="ac-catalog__chars">
                        <div class="catalog-card__plugs">
                            <div class="catalog-card__plug">
                                <div class="catalog-card__plug-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <path d="M4.58505 10.9704C5.00547 9.17667 5.21568 8.27978 5.71035 7.61412C6.12854 7.0514 6.68728 6.60847 7.33058 6.32973C8.09156 6 9.01275 6 10.8551 6H13.1449C14.9872 6 15.9084 6 16.6694 6.32973C17.3127 6.60847 17.8715 7.0514 18.2896 7.61412C18.7843 8.27978 18.9945 9.17667 19.4149 10.9704L20.1462 14.0905C20.7859 16.8199 21.1058 18.1846 20.7522 19.2548C20.4553 20.1533 19.8496 20.9175 19.0425 21.4115C18.0812 22 16.6795 22 13.8761 22H10.1239C7.32049 22 5.91879 22 4.9575 21.4115C4.15044 20.9175 3.54466 20.1533 3.24781 19.2548C2.89423 18.1846 3.21409 16.8199 3.8538 14.0904L4.58505 10.9704Z" fill="#0068FF"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.5C12.8284 6.5 13.5 5.82843 13.5 5C13.5 4.17157 12.8284 3.5 12 3.5C11.1716 3.5 10.5 4.17157 10.5 5C10.5 5.82843 11.1716 6.5 12 6.5ZM12 8C13.6569 8 15 6.65685 15 5C15 3.34315 13.6569 2 12 2C10.3431 2 9 3.34315 9 5C9 6.65685 10.3431 8 12 8Z" fill="#0068FF"></path>
                                    </svg></div>
                                <div class="catalog-card__plug-text"><?=$arResult['PROPERTIES']['PACKAGING']['DESCRIPTION'][0]?></div>
                                <div class="catalog-card__plug-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="white"></rect>
                                        <path d="M12.75 11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11Z" fill="#0068FF"></path>
                                        <path d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z" fill="#0068FF"></path>
                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" stroke="#CEDFF5"></rect>
                                    </svg></div>
                            </div>
                            <div class="catalog-card__plug">
                                <div class="catalog-card__plug-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <path d="M9.92963 2.48L4.58963 5.45003C3.37963 6.12003 2.38965 7.80001 2.38965 9.18001V14.83C2.38965 16.21 3.37963 17.89 4.58963 18.56L9.92963 21.53C11.0696 22.16 12.9396 22.16 14.0796 21.53L19.4196 18.56C20.6296 17.89 21.6196 16.21 21.6196 14.83V9.18001C21.6196 7.80001 20.6296 6.12003 19.4196 5.45003L14.0796 2.48C12.9296 1.84 11.0696 1.84 9.92963 2.48Z" fill="#0068FF"></path>
                                        <path d="M3.16992 7.43994L11.9999 12.5499L20.7699 7.46991" stroke="#EAF3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 21.61V12.54" stroke="#EAF3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.9998 13.2401V9.58014L7.50977 4.1001" stroke="#EAF3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></div>
                                <div class="catalog-card__plug-text"><?=$arResult['PROPERTIES']['PACKAGING']['DESCRIPTION'][1]?></div>
                                <div class="catalog-card__plug-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="white"></rect>
                                        <path d="M12.75 11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11Z" fill="#0068FF"></path>
                                        <path d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z" fill="#0068FF"></path>
                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" stroke="#CEDFF5"></rect>
                                    </svg></div>
                            </div>
                            <div class="catalog-card__plug">
                                <div class="catalog-card__plug-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_758_8108)">
                                            <path d="M2.99999 18.9995C2.446 18.9995 2 19.4455 2 19.9995V21.9995C2 22.5535 2.446 22.9995 2.99999 22.9995H4.99997C5.55397 22.9995 5.99996 22.5535 5.99996 21.9995V20.9995H9.99993V21.9995C9.99993 22.5535 10.4459 22.9995 10.9999 22.9995H12.9999C13.5539 22.9995 13.9999 22.5535 13.9999 21.9995V20.9995H17.9999V21.9995C17.9999 22.5535 18.4459 22.9995 18.9998 22.9995H20.9998C21.5538 22.9995 21.9998 22.5535 21.9998 21.9995V19.9995C21.9998 19.4455 21.5538 18.9995 20.9998 18.9995H2.99999Z" fill="#0068FF"></path>
                                            <rect x="3.00098" y="10" width="7.99993" height="7.99993" rx="1" fill="#0068FF"></rect>
                                            <path d="M6.5 13C6.5 13.2761 6.72386 13.5 7 13.5C7.27614 13.5 7.5 13.2761 7.5 13H6.5ZM6.5 10V13H7.5V10H6.5Z" fill="#EAF3FF"></path>
                                            <rect x="13" y="10" width="7.99993" height="7.99993" rx="1" fill="#0068FF"></rect>
                                            <path d="M16.5 13C16.5 13.2761 16.7239 13.5 17 13.5C17.2761 13.5 17.5 13.2761 17.5 13H16.5ZM16.5 10V13H17.5V10H16.5Z" fill="#EAF3FF"></path>
                                            <rect x="8" y="1" width="7.99993" height="7.99993" rx="1" fill="#0068FF"></rect>
                                            <path d="M11.5 3.99997C11.5 4.27612 11.7239 4.49997 12 4.49997C12.2761 4.49997 12.5 4.27612 12.5 3.99997H11.5ZM11.5 1V3.99997H12.5V1H11.5Z" fill="#EAF3FF"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_758_8108">
                                                <rect width="24" height="24" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg></div>
                                <div class="catalog-card__plug-text"><?=$arResult['PROPERTIES']['PACKAGING']['DESCRIPTION'][2]?></div>
                                <div class="catalog-card__plug-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="white"></rect>
                                        <path d="M12.75 11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11Z" fill="#0068FF"></path>
                                        <path d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z" fill="#0068FF"></path>
                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" stroke="#CEDFF5"></rect>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ac ac-vacancies ac-catalog">
                <div class="ac-header ac-vacancies__top ac-trigger">
                    <h3 class="ac-vacancies__title"><?=$arResult['PROPERTIES']['STORAGE_CONDITION']['NAME']?></h3>
                    <div class="ac-vacancies__btn">
                        <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                    </div>
                </div>
                <div class="ac-panel ac-catalog__bot">
                    <div class="ac-catalog__save">
                        <div class="ac-catalog__save-item">
                            <div class="ac-catalog__save-title"><?=$arResult['PROPERTIES']['STORAGE_CONDITION']['VALUE'][0]?></div>
                            <div class="ac-catalog__save-text"><?=$arResult['PROPERTIES']['STORAGE_CONDITION']['DESCRIPTION'][0]?></div>
                        </div>
                        <div class="ac-catalog__save-item">
                            <div class="ac-catalog__save-title"><?=$arResult['PROPERTIES']['STORAGE_CONDITION']['VALUE'][1]?></div>
                            <div class="ac-catalog__save-text"><?=$arResult['PROPERTIES']['STORAGE_CONDITION']['DESCRIPTION'][1]?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ac ac-vacancies ac-catalog">
                <div class="ac-header ac-vacancies__top ac-trigger">
                    <h3 class="ac-vacancies__title">состав</h3>
                    <div class="ac-vacancies__btn">
                        <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                    </div>
                </div>
                <div class="ac-panel ac-catalog__bot">
                    <div class="ac-catalog__text"><?=$arResult['PROPERTIES']['COMPAUND']['VALUE']['TEXT']?></div>
                </div>
            </div>
            <div class="ac ac-vacancies ac-catalog">
                <div class="ac-header ac-vacancies__top ac-trigger">
                    <h3 class="ac-vacancies__title"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['NAME']?></h3>
                    <div class="ac-vacancies__btn">
                        <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                    </div>
                </div>
                <div class="ac-panel ac-catalog__bot">
                    <div class="ac-catalog__goods">
                        <div class="ac-catalog__goods-item">
                            <div class="ac-catalog__goods-title"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['VALUE'][0]?></div>
                            <div class="ac-catalog__goods-text"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['DESCRIPTION'][0]?></div>
                        </div>
                        <div class="ac-catalog__goods-item">
                            <div class="ac-catalog__goods-title"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['VALUE'][1]?></div>
                            <div class="ac-catalog__goods-text"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['DESCRIPTION'][1]?></div>
                        </div>
                        <div class="ac-catalog__goods-item">
                            <div class="ac-catalog__goods-title"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['VALUE'][2]?></div>
                            <div class="ac-catalog__goods-text"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['DESCRIPTION'][2]?></div>
                        </div>
                        <div class="ac-catalog__goods-item">
                            <div class="ac-catalog__goods-title"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['VALUE'][3]?></div>
                            <div class="ac-catalog__goods-text"><?=$arResult['PROPERTIES']['NUTRITIONAL_VALUE']['DESCRIPTION'][3]?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?$APPLICATION->ShowViewContent('form');?>

        <a class="catalog-detail__rect btn-hover_parent" href="<?=$arResult['PROPERTIES']['NEXT_PRODUCT']['DETAIL_PAGE_URL']?>">
            <div class="catalog-detail__rect-circle">
                <div class="catalog-hero__rec-circle">
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div>
                        <div class="button button-arrow_right btn-hover_parent">
                            <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-detail__rect-inner">
                <div class="catalog-detail__rect-texts">
                    <div class="catalog-detail__rect-title">следующий продукт</div>
                    <div class="catalog-detail__rect-desk"><?=$arResult['PROPERTIES']['NEXT_PRODUCT']['NAME']?></div>
                </div>
                <div class="catalog-detail__rect-box">
                    <div class="catalog-detail__rect-img">
                        <picture class="picture">
                            <source type="image/webp" srcset="<?=$arResult['PROPERTIES']['NEXT_PRODUCT']['PREVIEW_PICTURE']?>"><img class="picture__img" src="<?=$arResult['PROPERTIES']['NEXT_PRODUCT']['PREVIEW_PICTURE']?>">
                        </picture>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="popup popup-vacancies" data-popup-wrapper="catalog-detail" data-overlay-on>
    <div class="about-production__popup-btn" data-popup-close="catalog-detail">
        <div class="btn-hover_parent">
            <div class="btn-hover_circle white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
    </div>
    <div class="popup-vacancies__send" data-form-send="catalog-detail">
        <div class="popup-vacancies__send-inner">
            <div class="popup-vacancies__send-logo"><svg width="100" height="99" viewbox="0 0 100 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35.2969 11.3709C39.5183 -3.42101 60.4814 -3.42101 64.7028 11.3709C66.0509 16.0947 70.9041 18.8967 75.669 17.7023C90.5899 13.9622 101.071 32.1167 90.372 43.1685C86.9551 46.6979 86.9551 52.3018 90.372 55.8312C101.071 66.883 90.5899 85.0376 75.669 81.2975C70.9041 80.1031 66.0509 82.905 64.7028 87.6288C60.4814 102.421 39.5183 102.421 35.2969 87.6288C33.9488 82.905 29.0957 80.1031 24.3307 81.2975C9.40981 85.0376 -1.07173 66.883 9.62775 55.8312C13.0446 52.3018 13.0446 46.6979 9.62776 43.1685C-1.07173 32.1167 9.40981 13.9622 24.3307 17.7023C29.0957 18.8967 33.9488 16.0947 35.2969 11.3709ZM68.8767 39.1055C69.9705 37.7929 69.7932 35.8421 68.4806 34.7482C67.168 33.6544 65.2172 33.8317 64.1233 35.1443L49.8361 52.2889C48.3066 54.1244 47.3674 55.2399 46.5936 55.9386C46.2347 56.2626 46.0219 56.3918 45.9198 56.4411C45.8991 56.4512 45.8843 56.4572 45.875 56.4607C45.8657 56.4572 45.8509 56.4512 45.8302 56.4411C45.7281 56.3918 45.5153 56.2626 45.1564 55.9386C44.3827 55.2399 43.4434 54.1244 41.9139 52.2889L35.8767 45.0443C34.7828 43.7317 32.832 43.5544 31.5194 44.6482C30.2068 45.7421 30.0295 47.6929 31.1233 49.0055L37.2922 56.4082C38.6472 58.0345 39.8686 59.5006 41.0096 60.5308C42.251 61.6518 43.8146 62.6502 45.875 62.6502C47.9354 62.6502 49.499 61.6518 50.7404 60.5308C51.8814 59.5006 53.1028 58.0345 54.4577 56.4082L68.8767 39.1055Z" fill="#00FFE0"></path>
                </svg></div>
            <div class="popup-vacancies__send-title">Отправлено!</div>
            <div class="popup-vacancies__send-text">Спасибо. Мы свяжемся с вами в ближайшее время.</div>
            <div class="popup-vacancies__send-btn btn-hover_parent" data-popup-close="catalog-detail">
                <div class="btn-hover_circle"></div><span>Закрыть</span>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>
