<div class="header-production" data-overlay-on data-header-component="production">
    <div class="header-production__inner">
        <div class="header-production__inner-top mobile">
            <div class="header-production__inner-back" data-production-close>
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 7.53558L6.46484 11.0711" stroke="#EAF3FF" stroke-width="1.33333"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9.99969 7.53589L6.46387 4.00006" stroke="#EAF3FF" stroke-width="1.33333"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="header-production__inner-title">Продукция</div>
        </div>
        <div class="header-production__items">
            <div class="main-catalog__list header-prod">
                <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"header_catalog", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "Slaider",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "ID",
			1 => "DESCRIPTION",
			2 => "PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_COLOR2",
			1 => "UF_IMG_D",
			2 => "UF_IMG_M",
			3 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "header_catalog"
	),
	false
);?>
            </div>
        </div>
    </div>
</div>