<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
//
// Turgun
$categories=\app\models\Categories::find()->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
                <!--                -->
            </div>
        </div>
        <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <ul class="header-menu nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon fa fa-database"> </i>
                            Statistics
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon fa fa-edit"></i>
                            Projects
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon fa fa-cog"></i>
                            Settings
                        </a>
                    </li>
                </ul>        </div>
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="theme/assets/images/avatars/1.jpg" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    Alina Mclourd
                                </div>
                                <div class="widget-subheading">
                                    VP People Manager
                                </div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>        </div>
        </div>
    </div>
    <div class="ui-theme-settings">
        <!--        <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">-->
        <!--            <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>-->
        <!--        </button>-->
        <div class="theme-settings__inner">
            <div class="scrollbar-container">
                <div class="theme-settings__options-wrapper">
                    <h3 class="themeoptions-heading">Layout Options
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                <div class="switch-animate switch-on">
                                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Fixed Header
                                            </div>
                                            <div class="widget-subheading">Makes the header top fixed, always visible!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                <div class="switch-animate switch-on">
                                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Fixed Sidebar
                                            </div>
                                            <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Fixed Footer
                                            </div>
                                            <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>
                            Header Options
                        </div>
                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                            Restore Default
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Choose Color Scheme
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                    </div>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>Sidebar Options</div>
                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                            Restore Default
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Choose Color Scheme
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                    </div>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>Main Content Options</div>
                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Page Section Tabs
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div role="group" class="mt-2 btn-group">
                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                            Line
                                        </button>
                                        <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                            Shadow
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">

                        <!--                        Asosiy elementlar-->
                        <li class="app-sidebar__heading">Asosiy elementlar</li>
                        <!--                        Bosh sahifa-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->homeUrl?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-home"></i>
                                Bosh sahifa
                            </a>
                        </li>
                        <!--                        Sotuv amaliyoti-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sotuv-amaliyoti'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-cart"></i>
                                Sotuv amaliyoti
                            </a>
                        </li>
                        <!--                        Cheklar-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/cheklar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-news-paper"></i>
                                Cheklar
                            </a>
                        </li>
                        <!--                        Omborxona-->

                        <li class="app-sidebar__heading">Omborxona</li>
                        <!--                        Kirim qilish-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/kirim-qilish'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-download"></i>
                                Kirim qilish
                            </a>
                        </li>
                        <!--                        Tovarlar qoldig'i-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/tovaralar-qoldigi'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-box1"></i>
                                Tovarlar qoldig’i
                            </a>
                        </li>
                        <!--                        Rastadagi tovarlar-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/rastadagi-tovarlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-plugin"></i>
                                Rastadagi tovarlar
                            </a>
                        </li>
                        <!--                        Kam qolgan tovarlar-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/kam-qolgan-tovarlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-bell"></i>
                                Kam qolgan tovarlar
                            </a>
                        </li>
                        <!--                        Yaroqsiz tovarlar-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/yaroqsiz-tovarlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-attention"></i>
                                Yaroqsiz tovarlar
                            </a>
                        </li>

                        <!--                        Moliya-->
                        <li class="app-sidebar__heading">Moliya</li>
                        <!--                        Buxgalteriya-->
                        <li class="<?=strpos(Yii::$app->request->url,'buxgalteriya') ? 'mm-active': ''?>">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-graph"></i>
                                Buxgalteriya
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/buxgalteriya/debit-kredit'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Debit va Kredit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/buxgalteriya/dalolatnomalar'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Dalolatnomalar
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/buxgalteriya/tovar-aylanmasi'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Tovar aylanmasi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/buxgalteriya/tovarlar-harakati'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Tovarlar harakati
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/buxgalteriya/nakladnoylar'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Nakladnoylar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--                        Kassa-->
                        <li class="<?=strpos(Yii::$app->request->url,'kassa') ? 'mm-active': ''?>">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-user-female"></i>
                                Kassa
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/kassa/kassalar'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Kassalar
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/kassa/sotilgan-tovarlar'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Sotilgan tovarlar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--                        Playlist-->
                        <li class="<?=strpos(Yii::$app->request->url,'playlist') ? 'mm-active': ''?>">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                PlayList
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/playlist/joriy-playlist'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Joriy PlayList
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--                        Valyuta kursi-->
                        <li >
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/valyuta-kursi'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                <i class="metismenu-icon pe-7s-cash"></i>
                                Valyuta Kursi
                            </a>
                        </li>

                        <!--                        Kontragentlar-->
                        <li class="app-sidebar__heading">Kontragentlar</li>
                        <!--                        Mijozlar-->
                        <li class="<?=strpos(Yii::$app->request->url,'mijozlar') ? 'mm-active': ''?>">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-users"></i>
                                Mijozlar
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/mijozlar/royxat'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Ro’yxat
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/mijozlar/qarzdorlik'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Qarzdorlik
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/mijozlar/turlari'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Turlari
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--                        Mol yetkazuvchilar-->
                        <li class="<?=strpos(Yii::$app->request->url,'mol-yetkazuvchilar') ? 'mm-active': ''?>">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-car"></i>
                                Mol yetkazuvchilar
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/mol-yetkazuvchilar/royxat'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Ro’yxat
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/mol-yetkazuvchilar/qarzdorlik'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Qarzdorlik
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/mol-yetkazuvchilar/turlari'])?>" class="<?=Yii::$app->request->url==$urlqu? 'mm-active':''?>">
                                        <i class="metismenu-icon"></i>
                                        Turlari
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--                        Tovarlar-->
                        <li class="app-sidebar__heading">Tovarlar</li>
                        <!--                        Tovarlar ro’yxat-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/tovarlar-royxati'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-note2"></i>
                                Tovarlar ro'yxati
                            </a>
                        </li>
                        <!--                        Kategoriyalar-->
                        <li>
                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/kategoriyalar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-albums"></i>
                                Kategoriyalar
                            </a>
                        </li>

                        <!--                        Sozlamalar-->
                        <li class="app-sidebar__heading">Sozlamalar</li>
                        <!--                        Qo'shimcha sozlamalar-->
                        <li class="<?=strpos(Yii::$app->request->url,'qoshimcha') ? 'mm-active': ''?>">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-note"></i>
                                Qo'shimcha sozlama
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <!--                                Omborlar-->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/qoshimcha/omborlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Omborlar
                                    </a>
                                </li>
                                <!--                                Banklar-->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/qoshimcha/banklar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Banklar
                                    </a>
                                </li>
                                <!--                                Lavozimlar-->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/qoshimcha/lavozimlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Lavozimlar
                                    </a>
                                </li>
                                <!--                                Ishchi-hodimlar-->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/qoshimcha/ishchi-hodimlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Ishchi-hodimlar
                                    </a>
                                </li>
                                <!--                                Hududlar-->
                                <li class="<?=Yii::$app->controller->id=='qoshimcha' && Yii::$app->controller->action->id=='hududlar' ? 'mm-active': '' ?>">
                                    <a href="#">
                                        <i class="metismenu-icon"></i>
                                        Hududlar
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <!--                                        Viloyatlar-->
                                        <li>
                                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/qoshimcha/hududlar','type'=>'viloyatlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                                <i class="metismenu-icon"></i>
                                                Viloyatlar
                                            </a>
                                        </li>
                                        <!--                                        Tumanlar-->
                                        <li>
                                            <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/qoshimcha/hududlar','type'=>'tumanlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                                <i class="metismenu-icon"></i>
                                                Tumanlar
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--                        Sozlamalar-->
                        <li class="<?=strpos(Yii::$app->request->url,'sozlamalar') ? 'mm-active': ''?>">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-config"></i>
                                Sozlamalar
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <!--                                To’lov turlari -->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/tolov-turlari'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        To’lov turlari
                                    </a>
                                </li>
                                <!--                                Sotuv turlari-->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/sotuv-turlari'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Sotuv turlari
                                    </a>
                                </li>
                                <!--                                O’lchov birliklari-->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/olchov-birliklari'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        O’lchov birliklari
                                    </a>
                                </li>
                                <!--                                Printerlar-->
                                <li>
                                    <a  href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/printerlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Printerlar
                                    </a>
                                </li>
                                <!--                                Shablonlar-->
                                <li>
                                    <a  href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/shablonlar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Shablonlar
                                    </a>
                                </li>
                                <!--                                Zavod-fabrikalar-->
                                <li>
                                    <a  href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/zavod-fabrikalar'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Zavod-fabrikalar
                                    </a>
                                </li>
                                <!--                                Til-->
                                <li>
                                    <a  href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/til'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Til
                                    </a>
                                </li>
                                <!--                                Korxona haqida-->
                                <li>
                                    <a href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/sozlamalar/korxona-haqida'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                        <i class="metismenu-icon"></i>
                                        Korxona haqida
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--                        Dastur haqida-->
                        <li>
                            <a  href="<?=$urlqu=Yii::$app->urlManager->createUrl(['/dastur-haqida'])?>" class="<?= $urlqu==Yii::$app->request->url? 'mm-active': '' ?>">
                                <i class="metismenu-icon pe-7s-info"></i>
                                Dastur haqida
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <?=$content?>
            </div>
            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner">
                        <div class="app-footer-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        Footer Link 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        Footer Link 2
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="app-footer-right">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        Footer Link 3
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <div class="badge badge-success mr-1 ml-0">
                                            <small>NEW</small>
                                        </div>
                                        Footer Link 4
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
