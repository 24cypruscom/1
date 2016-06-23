<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult["AUTH_SERVICES"]):?>
    <?
    $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "flat",
        array(
            "AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
            "AUTH_URL"=>$arResult["AUTH_URL"],
            "POST"=>$arResult["POST"],
            "POPUP"=>"Y",
            "SUFFIX"=>"form",
        ),
        $component,
        array("HIDE_ICONS"=>"Y")
    );
    ?>
<?endif?>