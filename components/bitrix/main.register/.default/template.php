<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="modal fade" id="signup" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="signupLabel">Sign Up</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data" onsubmit="submitForm()">
                    <input type="hidden" name="REGISTER[LOGIN]" value="temp_login">
                    <?
                    if($arResult["BACKURL"] <> ''):
                        ?>
                        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                        <?
                    endif;
                    ?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "register",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "FORGOT_PASSWORD_URL" => "",
                            "PROFILE_URL" => "#SITE_URL#/profile/",
                            "REGISTER_URL" => "",
                            "SHOW_ERRORS" => "Y"
                        )
                    );?>
                    <div class="signOr">OR</div>
                    <div class="form-group">
                        <input
                            type="text"
                            placeholder="<?= GetMessage('FIRST_NAME') ?>"
                            class="form-control"
                            name="REGISTER[NAME]"
                        >
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            placeholder="<?= GetMessage('LAST_NAME') ?>"
                            class="form-control"
                            name="REGISTER[LAST_NAME]"
                        >
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            placeholder="<?= GetMessage('EMAIL') ?>"
                            class="form-control"
                            name="REGISTER[EMAIL]"
                        >
                    </div>
                    <div class="form-group">
                        <input
                            type="password"
                            placeholder="<?= GetMessage('PASSWORD') ?>"
                            class="form-control"
                            name="REGISTER[PASSWORD]"
                            autocomplete="off"
                        >
                    </div>
                    <div class="form-group">
                        <input
                            type="password"
                            placeholder="<?= GetMessage('CONFIRM_PASSWORD') ?>"
                            class="form-control"
                            name="REGISTER[CONFIRM_PASSWORD]"
                        >
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <input
                                type="submit"
                                name="register_submit_button"
                                class="btn btn-lg btn-green"
                                value="<?= GetMessage('SIGN_UP') ?>"
                            >
                        </div>
                    </div>
                    <p class="help-block"><?= GetMessage('REGISTERED') ?> <a href="#" class="modal-si text-green"><?= GetMessage('SIGN_IN') ?></a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#signup").on("submit", function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?=POST_FORM_ACTION_URI?>',
                type: 'post',
                data: data,
                success: function(d) {
                    $(this).hide(500);
                    /*$('#signup .modalbody').html('<pre>' + d + '</pre>');*/
                }
            });
        });
    });
</script>