<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h2 class="osLight align-left"><?= GetMessage('Related Articles') ?></h2>
<div class="row pb20">
    <? foreach($arResult["ITEMS"] as $arItem) { ?>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="article bg-w">
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="image"><img src="<?= $arItem["DETAIL_PICTURE"]["RESIZE_IMGS"]["src"] ?>" alt="<?= $arItem["NAME"] ?>"></a>
            <div class="article-category"><a href="javascript:void(0)" class="text-green"><?= $arResult["NAME"] ?></a></div>
            <h3 class="osLight"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a></h3>
        </div>
    </div>
    <? } ?>
</div>
