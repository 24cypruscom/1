<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult["ITEMS"] as $k => $arItem) {

    if (SITE_ID == "EN" && !empty($arItem["PROPERTIES"]["NAME_EN_ARTICLE"]["VALUE"]))
        $arResult["ITEMS"][$k]["NAME"] = $arItem["PROPERTIES"]["NAME_EN_ARTICLE"]["VALUE"];

    if (SITE_ID == "EN" && !empty($arItem["PROPERTIES"]["PREVIEW_EN_ARTICLE"]["VALUE"]["TEXT"]))
        $arResult["ITEMS"][$k]["PREVIEW_TEXT"] = $arItem["PROPERTIES"]["PREVIEW_EN_ARTICLE"]["VALUE"]["TEXT"];

}

