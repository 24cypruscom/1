<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="hero-container-blog">
    <div id="carouselBlog" class="carousel slide featured" data-ride="carousel">
        <ol class="carousel-indicators">
            <? foreach($arResult["ITEMS"] as $k => $arItem) { ?>
                <li data-target="#carouselBlog" data-slide-to="<?=$k?>" <?if($k==0){?>class="active"<?}?>></li>
            <? } ?>
        </ol>
        <div class="carousel-inner">
            <? foreach($arResult["ITEMS"] as $k => $arItem) { ?>
                <div class="item <?if($k==0){?>active<?}?>" style="background-image: url(<?= $arItem["DETAIL_PICTURE"]["SRC"]?>)">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="carousel-title"><?= GetMessage('FEATURED') ?></div>
                            <div class="caption-title"><?= $arItem["NAME"] ?></div>
                            <div class="caption-subtitle"><?= $arItem["PREVIEW_TEXT"] ?></div>
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn-lg btn-o btn-white"><?= GetMessage('MORE') ?></a>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
        <a class="left carousel-control" href="#carouselBlog" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
        <a class="right carousel-control" href="#carouselBlog" role="button" data-slide="next"><span class="fa fa-chevron-right"></span></a>
    </div>

    <!-- Header -->

    <div class="home-header">
        <div class="home-logo osLight"><span class="fa fa-home"></span> 24cyprus <strong></strong></div>
        <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
        <div class="blog-nav">
            <ul>
                <li class="select-lang">
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-o btn-gray dropdown-toggle">
                            <span class="dropdown-label"><?= GetMessage('LANGUAGE') ?></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-select sel-lan">
                            <li <? if(SITE_DIR == '/') echo 'class="active"';?>><input type="radio" name="ds1" <? if(SITE_DIR == '/') echo 'checked="checked"';?>><a href="/articles/">Rus</a></li>
                            <li <? if(SITE_DIR == '/en/') echo 'class="active"';?>><input type="radio" name="ds1" <? if(SITE_DIR == '/en/') echo 'checked="checked"';?>><a href="/en/articles/">Eng</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/"><?= GetMessage('HOME') ?></a></li>
            </ul>
        </div>
    </div>
</div>
