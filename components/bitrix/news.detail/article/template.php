<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!-- Hero -->
<div id="hero-container-blog">
    <div id="carouselBlog" class="carousel slide featured" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>)">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="caption-title"><h1><?= $arResult["NAME"] ?></h1></div>
                        <div class="p-n-articles">
                            <? if($arResult["NP"]["PREV"]) { ?>
                                <div class="p-article">
                                    <div class="pna-title"><?= GetMessage('Previous_article') ?></div>
                                    <a href="<?= $arResult["NP"]["PREV"]["DETAIL_PAGE_URL"] ?>"><?= $arResult["NP"]["PREV"]["NAME"] ?></a>
                                </div>
                            <? } ?>
                            <? if($arResult["NP"]["NEXT"]) { ?>
                                <div class="n-article">
                                    <div class="pna-title"><?= GetMessage('Next_article') ?></div>
                                    <a href="<?= $arResult["NP"]["NEXT"]["DETAIL_PAGE_URL"] ?>"><?= $arResult["NP"]["NEXT"]["NAME"] ?></a>
                                </div>
                            <? } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->

    <div class="home-header">
        <div class="home-logo osLight"><span class="fa fa-home"></span> 24 cyprus <strong></strong></div>
        <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
        <!-- <div class="blog-nav">
            <ul>
                <li><a href="/"><?= GetMessage('HOME') ?></a></li>
            </ul>
        </div> -->
        <div class="blog-nav">
            <ul>
                <li class="select-lang">
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-o btn-gray dropdown-toggle">
                            <span class="dropdown-label"><?= GetMessage('LANGUAGE') ?></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-select sel-lan">
                            <li <? if(SITE_DIR == '/') echo 'class="active"';?>><input type="radio" name="ds1" <? if(SITE_DIR == '/') echo 'checked="checked"';?>><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Rus</a></li>
                            <li <? if(SITE_DIR == '/en/') echo 'class="active"';?>><input type="radio" name="ds1" <? if(SITE_DIR == '/en/') echo 'checked="checked"';?>><a href="/en/<?= $arItem["DETAIL_PAGE_URL"] ?>">Eng</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/"><?= GetMessage('HOME') ?></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Content -->
<div class="home-content">
    <div class="home-wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="post-top">
                    <div class="post-share">
                        <div class="ps-social"><a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google"><span class="fa fa-google-plus"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-blue"><span class="fa fa-linkedin"></span></a></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-content">
                    <?= $arResult["DETAIL_TEXT"] ?>
                </div>
                <div class="f-pn-articles">
                    <? if($arResult["NP"]["PREV"]) { ?>
                        <a href="<?= $arResult["NP"]["PREV"]["DETAIL_PAGE_URL"] ?>" class="f-p-article">
                            <div class="fpna-title"><?= GetMessage('Previous_article') ?></div>
                            <span class="fpna-header"><?= $arResult["NP"]["PREV"]["NAME"] ?></span>
                            <span class="fa fa-angle-left pull-left pn-icon"></span>
                        </a>
                    <? } ?>
                    <? if($arResult["NP"]["NEXT"]) { ?>
                        <a href="<?= $arResult["NP"]["NEXT"]["DETAIL_PAGE_URL"] ?>" class="f-n-article">
                            <div class="fpna-title"><?= GetMessage('Next_article') ?></div>
                            <span class="fpna-header"><?= $arResult["NP"]["NEXT"]["NAME"] ?></span>
                            <span class="fa fa-angle-right pull-right pn-icon"></span>
                        </a>
                    <? } ?>
                    <div class="clearfix"></div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "related",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "COMPONENT_TEMPLATE" => "blog-list",
                        "DETAIL_URL" => "#SITE_DIR#/articles/#ELEMENT_CODE#.html",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("DETAIL_PICTURE",""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "information",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "3",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "visual",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("NAME_EN_ARTICLE", "PREVIEW_EN_ARTICLE"),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC"
                    )
                );?>
            <!--<h2 class="osLight align-left"><span>4</span> Comments</h2>
                <div class="post-comments">
                    <div class="comment">
                        <div class="commentAvatar">
                            <img class="avatar" src="<?= SITE_TEMPLATE_PATH ?>/images/avatar-3.png" alt="avatar">
                            <div class="commentArrow bg-w"><span class="fa fa-caret-left"></span></div>
                        </div>
                        <div class="commentContent bg-w">
                            <div class="commentName">Rust Cohle</div>
                            <div class="commentBody">
                                It is a long established fact that a reader will be distracted by the readable content
                            </div>
                            <div class="commentActions">
                                <div class="commentTime"><span class="icon-clock"></span> 1 day ago</div>
                                <ul>
                                    <li><a href="#"><span class="icon-action-undo"></span></a></li>
                                    <li><a href="#"><span class="icon-like"></span> 13</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="comment reply">
                        <div class="commentAvatar">
                            <img class="avatar" src="<?= SITE_TEMPLATE_PATH ?>/images/avatar-1.png" alt="avatar">
                            <div class="commentArrow bg-w"><span class="fa fa-caret-left"></span></div>
                        </div>
                        <div class="commentContent bg-w">
                            <div class="commentName">John Smith</div>
                            <div class="commentBody">
                                Comment posted by me. I have the power to remove it.
                            </div>
                            <div class="commentActions">
                                <div class="commentTime"><span class="icon-clock"></span> 2 hours ago</div>
                                <ul>
                                    <li><a href="#"><span class="fa fa-trash-o"></span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="comment">
                        <div class="commentAvatar">
                            <img class="avatar" src="<?= SITE_TEMPLATE_PATH ?>/images/avatar-5.png" alt="avatar">
                            <div class="commentArrow bg-w"><span class="fa fa-caret-left"></span></div>
                        </div>
                        <div class="commentContent bg-w">
                            <div class="commentName">Alex Rogers</div>
                            <div class="commentBody">
                                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                            </div>
                            <div class="commentActions">
                                <div class="commentTime"><span class="icon-clock"></span> 20 minutes ago</div>
                                <ul>
                                    <li><a href="#"><span class="icon-action-undo"></span></a></li>
                                    <li><a href="#"><span class="icon-like"></span> 13</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="comment">
                        <div class="commentAvatar">
                            <img class="avatar" src="<?= SITE_TEMPLATE_PATH ?>/images/avatar-2.png" alt="avatar">
                            <div class="commentArrow bg-w"><span class="fa fa-caret-left"></span></div>
                        </div>
                        <div class="commentContent bg-w">
                            <div class="commentName">Jane Smith</div>
                            <div class="commentBody">
                                Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                            </div>
                            <div class="commentActions">
                                <div class="commentTime"><span class="icon-clock"></span> 5 minutes ago</div>
                                <ul>
                                    <li><a href="#"><span class="icon-action-undo"></span></a></li>
                                    <li><a href="#"><span class="icon-like"></span> 13</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div> -->
                <h2 class="osLight align-left"><?= GetMessage('Leave a Comment') ?></h2>
                <form role="form" class="pb20">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea placeholder="Comment" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="#" class="btn btn-green"><?= GetMessage('Post comment') ?></a>
                    </div>
                </form>
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
