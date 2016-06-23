<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// предыдущий элемент
$items_prev = CIBlockElement::GetList(
    Array("ID"=>"DESC"),
    Array("IBLOCK_ID"=>$arResult["IBLOCK"]["ID"], "SECTION_ID"=>"", "ACTIVE"=>"Y", "<ID"=>$arResult["ID"]),
    false,
    Array("nTopCount"=>1),
    Array("ID", "NAME", "DETAIL_PAGE_URL", "PROPERTY_NAME_EN_ARTICLE")
);
$arResult["NP"]["PREV"] = $items_prev->GetNext();
if (SITE_ID == "EN" && !empty($arResult["NP"]["PREV"]["PROPERTY_NAME_EN_ARTICLE_VALUE"]))
    $arResult["NP"]["PREV"]["NAME"] = $arResult["NP"]["PREV"]["PROPERTY_NAME_EN_ARTICLE_VALUE"];

// следующий элемент
$items_next = CIBlockElement::GetList(
    Array("ID"=>"ASC"),
    Array("IBLOCK_ID"=>$arResult["IBLOCK"]["ID"], "SECTION_ID"=>"", "ACTIVE"=>"Y", ">ID"=>$arResult["ID"]),
    false,
    Array("nTopCount"=>1),
    Array("ID", "NAME", "DETAIL_PAGE_URL", "PROPERTY_NAME_EN_ARTICLE")
);
$arResult["NP"]["NEXT"] = $items_next->GetNext();
if (SITE_ID == "EN" && !empty($arResult["NP"]["NEXT"]["PROPERTY_NAME_EN_ARTICLE_VALUE"]))
    $arResult["NP"]["NEXT"]["NAME"] = $arResult["NP"]["NEXT"]["PROPERTY_NAME_EN_ARTICLE_VALUE"];

if (SITE_ID == "EN" && !empty($arResult["PROPERTIES"]["NAME_EN_ARTICLE"]["VALUE"]))
    $arResult["NAME"] = $arResult["PROPERTIES"]["NAME_EN_ARTICLE"]["VALUE"];

if (SITE_ID == "EN" && !empty($arResult["PROPERTIES"]["DESC_EN_ARTICLE"]["~VALUE"]["TEXT"]))
    $arResult["DETAIL_TEXT"] = $arResult["PROPERTIES"]["DESC_EN_ARTICLE"]["~VALUE"]["TEXT"];

if (SITE_ID == "EN" && !empty($arResult["PROPERTIES"]["PREVIEW_EN_ARTICLE"]["~VALUE"]["TEXT"]))
    $arResult["PREVIEW_TEXT"] = $arResult["PROPERTIES"]["PREVIEW_EN_ARTICLE"]["~VALUE"]["TEXT"];
