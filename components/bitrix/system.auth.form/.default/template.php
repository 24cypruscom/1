<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
    <?
    if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
        ShowMessage($arResult['ERROR_MESSAGE']);
    ?>
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="signinLabel">Sign In</h4>
            </div>
            <div class="modal-body">
                <form role="form" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                    <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                    <?foreach ($arResult["POST"] as $key => $value):?>
                        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                    <?endforeach?>
                    <input type="hidden" name="AUTH_FORM" value="Y" />
                    <input type="hidden" name="TYPE" value="AUTH" />
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

                    <div class="signOr"><?= GetMessage('OR'); ?></div>
                    <div class="form-group">
                        <input
                            type="text"
                            placeholder="<?=GetMessage("AUTH_LOGIN")?>"
                            class="form-control"
                            name="USER_LOGIN"
                            maxlength="50"
                            required="required"
                            value="<?=$arResult["USER_LOGIN"]?>"
                        >
                    </div>
                    <div class="form-group">
                        <input
                            type="password"
                            placeholder="<?=GetMessage("AUTH_PASSWORD")?>"
                            class="form-control"
                            name="USER_PASSWORD"
                            maxlength="50"
                            required="required"
                            autocomplete="off"
                        >
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox custom-checkbox">
                                    <label>
                                        <input
                                            type="checkbox"
                                            id="USER_REMEMBER_frm"
                                            name="USER_REMEMBER"
                                            value="Y"
                                        >
                                        <span class="fa fa-check"></span>
                                        <?= GetMessage("AUTH_REMEMBER_SHORT") ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6 align-right">
                                <p class="help-block"><a href="#" class="text-green"><?= GetMessage('FORGOT_PASSWORD'); ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <input type="submit" class="btn btn-lg btn-green" value="<?= GetMessage("SIGN_IN") ?>">
                        </div>
                    </div>
                    <p class="help-block"><?= GetMessage('DONT_HAVE_ACCOUNT'); ?> <a href="#" class="modal-su text-green"><?= GetMessage("SIGN_UP") ?></a></p>
                </form>
            </div>
        </div>
    </div>
</div>