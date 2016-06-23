<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>
<div class="form-group">
	<div class="btn-group-justified">
		<a title="<?= $arParams["~AUTH_SERVICES"]["Facebook"]["NAME"]?>" href="javascript:void(0)" onclick="BxShowAuthFloat('<?= $arParams["~AUTH_SERVICES"]["Facebook"]["ID"]?>', '<?=$arParams["SUFFIX"]?>')" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span><?= GetMessage('SIGN_IN_WITH_FACEBOOK'); ?></a>
	</div>
</div>
<div class="form-group">
	<div class="btn-group-justified">
		<a title="<?= $arParams["~AUTH_SERVICES"]["GoogleOAuth"]["NAME"]?>" href="javascript:void(0)" onclick="BxShowAuthFloat('<?= $arParams["~AUTH_SERVICES"]["GoogleOAuth"]["ID"]?>', '<?=$arParams["SUFFIX"]?>')" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span><?= GetMessage('SIGN_IN_WITH_GOOGLE'); ?></a>
	</div>
</div>