<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult["ITEMS"] as $k => $arItem) {
    $arResult["ITEMS"][$k]["DETAIL_PICTURE"]["RESIZE_IMGS"] = array();

    if (is_array($arItem["DETAIL_PICTURE"])) {
        $arFile = $arItem["DETAIL_PICTURE"];
        $tmpImg = CFile::ResizeImageGet($arFile, array('width' => 540, 'height' => 540), BX_RESIZE_IMAGE_EXACT, true);
        $arResult["ITEMS"][$k]["DETAIL_PICTURE"]["RESIZE_IMGS"] = $tmpImg;
    } else {
        $arResult["ITEMS"][$k]["DETAIL_PICTURE"]["RESIZE_IMGS"]["src"] = $this->GetFolder() . "/images/no_photo.png";
    }

    if (SITE_ID == "EN" && !empty($arItem["PROPERTIES"]["NAME_EN_ARTICLE"]["VALUE"]))
        $arResult["ITEMS"][$k]["NAME"] = $arItem["PROPERTIES"]["NAME_EN_ARTICLE"]["VALUE"];

    if (SITE_ID == "EN" && !empty($arItem["PROPERTIES"]["PREVIEW_EN_ARTICLE"]["VALUE"]["TEXT"]))
        $arResult["ITEMS"][$k]["PREVIEW_TEXT"] = $arItem["PROPERTIES"]["PREVIEW_EN_ARTICLE"]["VALUE"]["TEXT"];

}

