<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="blog-content">
    <div class="home-wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <h2 class="osLight"><?= GetMessage($arResult["NAME"]) ?></h2>
                <div class="row">
                <? foreach($arResult["ITEMS"] as $k => $arItem) { ?>
                    <?
                    switch ($k) {
                        case 0:
                        case 3:
                            $size = 8;
                            break;
                        case 1:
                        case 2:
                            $size = 4;
                            break;
                        default:
                            $size = 4;
                    }
                    ?>
                    <div class="col-xs-12 col-sm-<?=$size?> col-md-<?=$size?> col-lg-<?=$size?>">
                        <div class="article">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="image"><img src="<?= $arItem["DETAIL_PICTURE"]["RESIZE_IMGS"]["src"] ?>" alt="<?= $arItem["NAME"] ?>"></a>
                            <div class="article-category"><a href="javascript:void(0)" class="text-green"><?= GetMessage($arResult["NAME"]) ?></a></div>
                            <h3 class="osLight"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a></h3>
                            <p><?= $arItem["PREVIEW_TEXT"] ?></p>
                        </div>
                    </div>
                    <? if($k == 1 || $k == 3) { echo '</div><div class="row">'; } elseif($k == 6) { echo '</div>'; } ?>
                <? } ?>
<? /*
                <div class="blog-pagination">

                    <a href="#" class="btn btn-o btn-round btn-green"><span class="fa fa-angle-left"></span> Older Articles</a>
                    <a href="#" class="btn btn-o btn-round btn-green pull-right">Newer Articles <span class="fa fa-angle-right"></span></a>
                    <div class="clearfix"></div>
                </div>
     */ ?>

            </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                            <h2 class="osLight h-r"><?= GetMessage('CATEGORY') ?></h2>
                            <ul class="blog-r-nav">
                              <li><a href="<?=SITE_DIR?>property/?FILTER_NAME=arrFilterSale&arrFilterSale_pf[CITY]=&arrFilterSale_cf[1][LEFT]=123&arrFilterSale_cf[1][RIGHT]=19000000&arrFilterSale_pf[BEDROOMS]=&arrFilterSale_pf[BATHROOMS]=&arrFilterSale_pf[TYPE_PROPERTY]=6&set_filter=%D0%9D%D0%B0%D0%B9%D1%82%D0%B8&set_filter=Y"><?= GetMessage('FLATS') ?></a></li>
                              <li><a href="<?=SITE_DIR?>property/?FILTER_NAME=arrFilterSale&arrFilterSale_pf[CITY]=&arrFilterSale_cf[1][LEFT]=123&arrFilterSale_cf[1][RIGHT]=19000000&arrFilterSale_pf[BEDROOMS]=&arrFilterSale_pf[BATHROOMS]=&arrFilterSale_pf[TYPE_PROPERTY]=40&set_filter=%D0%9D%D0%B0%D0%B9%D1%82%D0%B8&set_filter=Y"><?= GetMessage('HOMES') ?></a></li>
                              <li><a href="<?=SITE_DIR?>property/?FILTER_NAME=arrFilterSale&arrFilterSale_pf[CITY]=&arrFilterSale_cf[1][LEFT]=123&arrFilterSale_cf[1][RIGHT]=19000000&arrFilterSale_pf[BEDROOMS]=&arrFilterSale_pf[BATHROOMS]=&arrFilterSale_pf[TYPE_PROPERTY]=5&set_filter=%D0%9D%D0%B0%D0%B9%D1%82%D0%B8&set_filter=Y"><?= GetMessage('VILLAS') ?></a></li>
                              <li><a href="<?=SITE_DIR?>property/?FILTER_NAME=arrFilterSale&arrFilterSale_pf[CITY]=&arrFilterSale_cf[1][LEFT]=123&arrFilterSale_cf[1][RIGHT]=19000000&arrFilterSale_pf[BEDROOMS]=&arrFilterSale_pf[BATHROOMS]=&arrFilterSale_pf[TYPE_PROPERTY]=46&set_filter=%D0%9D%D0%B0%D0%B9%D1%82%D0%B8&set_filter=Y"><?= GetMessage('OFFICES') ?></a></li>
                              <li><a href="<?=SITE_DIR?>property/?FILTER_NAME=arrFilterSale&arrFilterSale_pf[CITY]=&arrFilterSale_cf[1][LEFT]=123&arrFilterSale_cf[1][RIGHT]=19000000&arrFilterSale_pf[BEDROOMS]=&arrFilterSale_pf[BATHROOMS]=&arrFilterSale_pf[TYPE_PROPERTY]=45&set_filter=%D0%9D%D0%B0%D0%B9%D1%82%D0%B8&set_filter=Y"><?= GetMessage('LAND') ?></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2 class="osLight h-r"><?= GetMessage('CONTACTS') ?></h2>
                            <ul class="blog-r-nav">
                                <li><?= GetMessage('PHONE') ?></li>
                                <li><?= GetMessage('ADDRESS') ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>
