<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
CUtil::InitJSCore(array('window', 'popup'));
$GLOBALS["APPLICATION"]->SetAdditionalCSS("/bitrix/js/socialservices/css/ss.css");
$GLOBALS["APPLICATION"]->AddHeadScript("/bitrix/js/socialservices/ss.js");
?>