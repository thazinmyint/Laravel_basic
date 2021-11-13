@extends('assignment.layouts.master')

@section('title','Home')

@section('content')

@include('assignment.layouts.header');

<style>
    .sc-hd-header .ui-searchbar-mod-type .ui-searchbar-type{
        position: absolute;
        top: 1px;
        left: 0;
    }
    .sc-hd-header .ui-searchbar-mod-type .ui-searchbar-main{
        margin-left: 111px;
    }
    .sc-hd-header .ui-searchbar-primary.ui-searchbar-size-middle .ui-searchbar-body .ui-searchbar-main{
        padding-top:1px;
        padding-bottom:1px;
    }
    .sc-hd-header .ui-searchbar-primary.ui-searchbar-size-middle .ui-searchbar-body .ui-searchbar-keyword{
        height:34px;
        line-height:100%;
    }
    .sc-hd.sc-hd-language .sc-hd-beacon div.sc-hd-m-lan.sc-hd-absolute-r{
        right: -15px;
        width: 80px;
    }
    @media only screen and ( max-width: 1021px ) {
        .sc-hd-rwd .sc-hd-ms-lv1 .sc-hd-m-notify .sc-hd-ms-title-top{
            overflow: hidden;
        }
    }
</style>

<link href="//s.alicdn.com/@i/sc-header-footer/20190418161359/header/entrances/global-home-header-v2-beta/header.css" rel="stylesheet" type="text/css">

<div
    id="J_SC_header"
    data-spm="scGlobalHomeHeader"
    class="sc-hd sc-hd-language  sc-hd-rwd-max-xl sc-hd-rwd  ui-header-rwd ui-header-biz-list-line  sc-hd-biztype-list ">
    <header class="sc-hd-header">
        <div class="sc-hd-row sc-hd-beacon">
            
                                                                                    
<div class="sc-hd-cell sc-hd-hide sc-hd-show-s sc-hd-float-l sc-hd-m-menu">
    <a href="javascript:;" class="sc-hd-ms-main-trigger">
        <i class="sc-hd-i-menu"></i>
        MENU
    </a>
    <div class="sc-hd-ms-frame">
        <div class="sc-hd-ms-lv1">
            <a href="javascript:;" class="sc-hd-ms-main-trigger">
            <i class="sc-hd-i-menu-x"></i>
                MENU
            </a>
            <ul></ul>
        </div>
        <div class="sc-hd-ms-lv2"></div>
    </div>
</div>

<div class="sc-hd-cell sc-hd-m-logo">
    <a href="//www.alibaba.com/" class="J-sc-hd-i-logo sc-hd-i-logo">
        Alibaba.com
    </a>
</div>

<div class="J-sc-hd-m-beaconnav sc-hd-cell sc-hd-hide-s sc-hd-m-beaconnav">
    <ul>
        <li class="J-sc-hd-ms-sourcing-solutions sc-hd-ms-dp-trigger">
            <span class="J-hd-beaconnav-title sc-hd-ms-title">
            Sourcing Solutions
            <i class="sc-hd-i-arr-dropdown"></i>
            </span>
        </li>
        <li class="J-sc-hd-ms-services-membership sc-hd-ms-dp-trigger">
            <span class="J-hd-beaconnav-title sc-hd-ms-title">
            Services & Membership
            <i class="sc-hd-i-arr-dropdown"></i>
            </span>
        </li>
        <li class="J-sc-hd-ms-help-community sc-hd-ms-dp-trigger">
            <span class="J-hd-beaconnav-title sc-hd-ms-title">
            Help & Community
            <i class="sc-hd-i-arr-dropdown"></i>
            </span>
        </li>
    </ul>
</div>
            
                                                                
<div class="sc-hd-cell sc-hd-m-lan sc-hd-absolute-r">
    <div class="ui-header-lan-wrap">
        <div class="ui-header-lan J-header-lan">
                                                                                                </div>
    </div>
</div>

<div class="J-hd-beaconnav-right-links sc-hd-cell sc-hd-hide-s sc-hd-m-beaconlink sc-hd-right-beacon sc-hd-absolute-r">
    <ul>
        <li>
            <a target="_blank" href="//www.alibaba.com/bulk?tracelog=fromhomeheader" rel="nofollow" title="Ready to Ship">
            Ready to Ship
            </a>
        </li>
        <li class="sc-hd-i-delimit"></li>
        <li>
            <a target="_blank" href="https://www.alibaba.com/tradeshows/calendar?tracelog=fromhomeheader" rel="nofollow" title="Trade Shows">
            Trade Shows
            </a>
        </li>
        <li class="sc-hd-i-delimit"></li>
        <li>
            <a target="_blank" href="//app.alibaba.com/?tracelog=header_cor_app" rel="nofollow" title="Get the App">
            Get the App
            </a>
        </li>
        <li class="sc-hd-i-delimit sc-language-delimit"></li>
    </ul>
</div>
</div>                    
<div class="sc-hd-row sc-hd-main">
    <div class="sc-hd-cell sc-hd-category">
        <div class="J-sc-hd-scc-category-unit sc-hd-scc-category-unit" data-role="scc-category-unit">
            <!--<a href="//www.alibaba.com/Products" target="_blank">-->
            <!--<img style="margin-left:25px;" src="//img.alicdn.com/tfs/TB17WDtpTtYBeNjy1XdXXXXyVXa-152-38.png" />-->
            <!--</a>-->
        </div>
    </div>
    <div class="sc-hd-cell sc-hd-searchbar-wrap">
        <div class="J-sc-hd-searchbar ui-searchbar ui2-searchbar ui-searchbar-size-middle ui-searchbar-primary ui-searchbar-mod-type">
            <div class="ui-searchbar-body">
                <form method="get" action="//www.alibaba.com/trade/search">
                    <input type="hidden" name="fsb" value="y"/>
                    <input class="ui-searchbar-field-type" type="hidden" name="IndexArea" value="product_en"/>
                    <input class="ui-searchbar-field-category" type="hidden" name="CatId" value=""/>
                    <div class="ui-searchbar-type">
                        <div class="ui-searchbar-type-value">
                            <span class="ui-searchbar-type-display">
                            Products
                            </span>
                            <span class="ui-searchbar-hollow-arrow"><em></em><b></b>
                            </span>
                        </div>
                    </div>
                    <div class="ui-searchbar-main" style="margin-left: 102px;">
                        <input type="text" class="ui-searchbar-keyword" name="SearchText" autocomplete="off"  x-webkit-speech="x-webkit-speech" x-webkit-grammar="builtin:translate" lang="en" placeholder="" />
                    </div>
                    <input type="submit" class="ui-searchbar-submit" value="Search" />
                    <span class="ui-searchbar-advanced"><a class="ui-searchbar-advanced-link" href="javascript:;"></a></span>
                </form>
            </div>
                    </div>
    </div>
    <div class="sc-hd-cell sc-hd-hide-s sc-hd-m-notify sc-hd-float-r">
        <div class="J-hd-m-notify-tab sc-hd-ms-tab sc-hd-ms-ma J-sc-hd-ms-ma" data-tab="ma">
            <!-- ma default dom begin -->
            <div class="J-hd-m-notify-tab-trigger sc-hd-ms-trigger sc-hd-ms-unsign" data-tab="ma">
                <div class="sc-hd-ms-icon sc-hd-i-unsignavatar"></div>
                <div class="sc-hd-ms-title-top">
                    <span class="sc-hd-ms-login">
                    <a rel="nofollow" href="//login.alibaba.com/?tracelog=hd_signin" data-val="ma_signin">
                    Sign In
                    </a>
                    </span>
                    <i class="sc-hd-i-delimit"></i>
                    <span class="sc-hd-ms-login">
                    <a href="//usmy.alibaba.com/user/join/join_step1.htm?tracelog=hd_joinfree" data-val="ma_joinfree">
                    
                    </a>
                    </span>
                </div>
                <div class="sc-hd-ms-title">
                    <a href="//i.alibaba.com/?tracelog=hd_ma" target="_blank" data-val="My Alibaba">
                    My Alibaba
                    </a>
                </div>
            </div>
            <div class="sc-hd-ms-panel">
                <a class="sc-hd-ms-maentry" target="_blank" href="//i.alibaba.com/index.htm">
                My Alibaba&nbsp;&nbsp;<i class="sc-hd-i-arr-r"></i>
                </a>
                <a class="sc-hd-ms-maentrys" target="_blank" href="//message.alibaba.com/message/default.htm#feedback/all" rel="nofollow" data-val="Message Center">
                Message Center
                </a>
                <a class="sc-hd-ms-maentrys" target="_blank" href="//mysourcing.alibaba.com/rfq/request/rfq_manage_list.htm?tracelog=header_manage_rfq" rel="nofollow" data-val="Manage RFQ">
                Manage RFQ
                </a>
                <a class="sc-hd-ms-maentrys" target="_blank" href="//biz.alibaba.com/order/list.htm" rel="nofollow" data-val="My Orders">
                My Orders
                </a>
                <a class="sc-hd-ms-maentrys" target="_blank" href="//usmy.alibaba.com/user/account_settings.htm?tracelog=ma_oversea_top_account" rel="nofollow" data-val="My Account">
                My Account
                </a>
                <div class="sc-hd-ms-line"></div>
                <a class="sc-hd-ms-maentrys" target="_blank" href="//rfq.alibaba.com/rfq/post.htm" data-val="Submit RFQ" rel="nofollow">
                Submit RFQ
                </a>
                <div class="sc-hd-ms-malabel">
                    Get multiple quotes within 24 hours!
                </div>
            </div>
            <!-- ma default dom end -->
        </div>
        <div class="J-hd-m-notify-tab sc-hd-ms-tab sc-hd-ms-order J-sc-hd-ms-order" data-tab="order">
            <!-- order default dom begin -->
            <div class="J-hd-m-notify-tab-trigger sc-hd-ms-trigger sc-hd-ms-last" data-tab="order">
                <a class="sc-hd-ms-icon sc-hd-i-taorder" data-val="ordericon" href="//biz.alibaba.com/order/list.htm?tracelog=hd_order" target="_blank"></a>
                <div class="sc-hd-ms-title-top">
                    <span class="sc-hd-sc-num sc-hd-ms-zero">0</span>
                </div>
                <div class="sc-hd-ms-title">
                    <a href="//biz.alibaba.com/order/list.htm?tracelog=hd_order" data-val="Orders" target="_blank">
                    Orders
                    </a>
                </div>
            </div>
            <div class="sc-hd-ms-panel sc-hd-ms-last">
                <div class="sc-hd-ms-order-entrys">
                    <div class="sc-hd-ms-order-entry">
                        <a href="//biz.alibaba.com/order/list.htm?buyerTodo=pay&amp;participantRole=buyer" data-val="Pending&nbsp;Payment" target="_blank">
                        Pending Payment
                        </a>
                    </div>
                    <div class="sc-hd-ms-order-entry">
                        <a href="//biz.alibaba.com/order/list.htm?buyerTodo=confirm&amp;participantRole=buyer" data-val="Pending&nbsp;Confirmation" target="_blank">
                        Pending Confirmation
                        </a>
                    </div>
                    <div class="sc-hd-ms-order-entry">
                        <a href="//biz.alibaba.com/order/list.htm?buyerTodo=all&amp;participantRole=buyer" data-val="Pending Actions" target="_blank">
                        Pending Actions
                        </a>
                    </div>
                </div>
                <div class="sc-hd-ms-simple-ver">
                    <a href="//tradeassurance.alibaba.com/?tracelog=hd_order_ta" data-val="Trade Assurance" target="_blank">
                        <div class="sc-hd-ms-left-desc">
                            <i class="sc-hd-i-logo-ta"></i>
                            Trade Assurance
                        </div>
                        <span class="sc-hd-ms-right-more">
                        Learn more
                        Learn more
                        <i class="sc-hd-i-arr-r-small"></i>
                        </span>
                    </a>
                    <div class="sc-hd-ms-actbtn">
                        <a href="//biz.alibaba.com/ta/draftBuyerBao.htm?tracelog=hd_order_ta_button" data-val="Order with Trade Assurance" target="_blank" class="sc-hd-ms-btn">
                        Order with Trade Assurance
                        </a>
                    </div>
                </div>
            </div>
            <!-- order default dom end -->
        </div>
        <div class="J-hd-m-notify-tab sc-hd-ms-tab sc-hd-ms-favorite J-sc-hd-ms-favorite" data-tab="favorite">
            <!-- favorite default dom begin -->
            <div class="J-hd-m-notify-tab-trigger J-hd-m-notify-tab-favorite-wrap sc-hd-ms-trigger sc-hd-ms-last" data-tab="favorite">
                <a class="sc-hd-ms-icon sc-hd-i-favorite" href="//us-favorite.alibaba.com/favorite2/favorite_home.htm#/favList?listType=product" data-val="favicon" target="_blank" title="Favorites"></a>
                <div class="J-sc-hd-num-wrap sc-hd-ms-title-top">
                    <span class="J-sc-hd-num sc-hd-sc-num sc-hd-ms-zero">0</span>
                </div>
                <div class="sc-hd-ms-title">
                    <a href="//us-favorite.alibaba.com/favorite2/favorite_home.htm#/favList?listType=product" target="_blank" data-val="Favorites">
                    Favorites
                    </a>
                </div>
            </div>
            <div class="sc-hd-ms-panel sc-hd-ms-last">
                <div class="sc-hd-ms-actbtn sc-hd-btn-viewall">
                    <a href="//us-favorite.alibaba.com/favorite2/favorite_home.htm#/favList?listType=product" target="_blank" class="sc-hd-ms-btn" data-val="View All Items">
                    View All Items
                    </a>
                </div>
                <div class="sc-hd-login-tips">
                    <a rel="nofollow" href="//us-favorite.alibaba.com/favorite2/favorite_home.htm#/favList?listType=product&amp;actionType=login" target="_blank" data-val="fav_signin">
                    Sign In
                    </a>
                     to manage and view all items.
                </div>
            </div>
            <!-- favorite default dom end -->
        </div>
    </div>
</div>
    </header>
</div>
    
@endsection
