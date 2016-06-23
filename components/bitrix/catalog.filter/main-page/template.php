<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="search-panel">
    <form class="form-inline" role="form" id="main-page-form" action="<?= SITE_DIR; ?>property/" name="arrFilter">
        <div class="form-group">
            <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                <span class="dropdown-label"><?=GetMessage("CITY");?> </span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-select repl">
                <? foreach ($arResult["ITEMS"]["PROPERTY_3"]["LIST"] as $k => $arItem) { ?>
                    <li <? if($k <= 0) echo 'class="active"'; ?>>
                        <input
                            type="radio"
                            name="arrFilterShort_pf[CITY]"
                            <? if($k <= 0) echo 'checked="checked"'; ?>
                            value="<?= $k; ?>"
                        >
                        <a href="javascript:void(0)"><?= GetMessage($arItem); ?></a>
                    </li>
                <? } ?>
            </ul>
        </div>
        <div class="form-group">
            <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                <span class="dropdown-label"><?=GetMessage("TYPE_OF_PROPERTY");?> </span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-select repl">
                <? foreach ($arResult["ITEMS"]["PROPERTY_4"]["LIST"] as $k => $arItem) { ?>
                    <li <? if($k <= 0) echo 'class="active"'; ?>>
                        <input
                            type="radio"
                            name="arrFilterShort_pf[TYPEPROPERTY]"
                            <? if($k <= 0) echo 'checked="checked"'; ?>
                            value="<?= $k; ?>"
                        >
                        <a href="javascript:void(0)"><?= GetMessage($arItem); ?></a>
                    </li>
                <? } ?>
            </ul>
        </div>
        <div class="form-group hidden-xs adv">
            <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                <span class="dropdown-label"><?=GetMessage("BEDROOMS");?> </span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-select repl">
                <? foreach ($arResult["ITEMS"]["PROPERTY_9"]["LIST"] as $k => $arItem) { ?>
                    <li <? if($k <= 0) echo 'class="active"'; ?>>
                        <input
                            type="radio"
                            name="arrFilterShort_pf[BEDROOMS]"
                            <? if($k <= 0) echo 'checked="checked"'; ?>
                            value="<?= $k; ?>"
                        >
                        <a href="javascript:void(0)"><?= $arItem; ?></a>
                    </li>
                <? } ?>
            </ul>
        </div>
        <div class="form-group hidden-xs adv">
            <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                <span class="dropdown-label"><?=GetMessage("BATHROOMS");?> </span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-select repl">
                <? foreach ($arResult["ITEMS"]["PROPERTY_10"]["LIST"] as $k => $arItem) { ?>
                    <li <? if($k <= 0) echo 'class="active"'; ?>>
                        <input
                            type="radio"
                            name="arrFilterShort_pf[BATHROOMS]"
                            <? if($k <= 0) echo 'checked="checked"'; ?>
                            value="<?= $k; ?>"
                        >
                        <a href="javascript:void(0)"><?= $arItem; ?></a>
                    </li>
                <? } ?>
            </ul>
        </div>
        <div class="form-group hidden-xs adv">
            <div class="input-group repl">
                <div class="input-group-addon">&euro;</div>
                <input class="form-control price" type="text" placeholder="<?= GetMessage("FROM"); ?>" name="arrFilterShort_cf[1][LEFT]" value="<?= $arResult["MIN_PRICE"] ?>">
            </div>
        </div>
        <div class="form-group hidden-xs adv">
            <div class="input-group repl">
                <div class="input-group-addon">&euro;</div>
                <input class="form-control price" type="text" placeholder="<?= GetMessage("TO"); ?>" name="arrFilterShort_cf[1][RIGHT]" value="<?= $arResult["MAX_PRICE"] ?>">
            </div>
        </div>
        <div class="form-group hidden-xs adv findF">
            <div class="radio custom-radio"><label><input type="radio" class="ch" name="FILTER_NAME" value="arrFilterShort" checked="checked"><span class="fa fa-circle"></span> <?= GetMessage("FOR_RENT") ?></label></div>
            <? /*<div class="checkbox custom-checkbox"><label><input type="checkbox" name="arrFilter_pf[SECTION_ID]" value="2"><span class="fa fa-check"></span> <?= GetMessage("FOR_RENT") ?></label></div>*/?>
        </div>
        <div class="form-group hidden-xs adv findF">
            <div class="radio custom-radio"><label><input type="radio" class="ch" name="FILTER_NAME" value="arrFilterLong"><span class="fa fa-circle"></span> <?= GetMessage("FOR_LONG_RENT") ?></label></div>
            <? /*<div class="checkbox custom-checkbox"><label><input type="checkbox" name="arrFilter_pf[SECTION_ID]" value="1"><span class="fa fa-check"></span> <?= GetMessage("FOR_SALE") ?></label></div>*/?>
        </div>
        <div class="form-group hidden-xs adv findF">
            <div class="radio custom-radio"><label><input type="radio" class="ch" name="FILTER_NAME" value="arrFilterSale"><span class="fa fa-circle"></span> <?= GetMessage("FOR_SALE") ?></label></div>
            <? /*<div class="checkbox custom-checkbox"><label><input type="checkbox" name="arrFilter_pf[SECTION_ID]" value="1"><span class="fa fa-check"></span> <?= GetMessage("FOR_SALE") ?></label></div>*/?>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-green" name="set_filter" value="<?= GetMessage("SEARCH"); ?>"/>
	    <input type="hidden" name="set_filter" value="Y"/>
            <a href="#" class="btn btn-o btn-white pull-right visible-xs" id="advanced">Advanced Search <span class="fa fa-angle-up"></span></a>
        </div>
    </form>
</div>