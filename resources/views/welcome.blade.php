@extends('layout.app')

@section('content')
    <div class="intro">
        @php
            $locale = session()->get('locale');
        @endphp

        <!--Start Home-->
        <div class="home_type full-height home__menu">
            <div class="side side-left container" style="background-image: url(/images/home_personal.jpg);">
                <div class="overlayer">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h1 class="fit__text">@lang('website.home.i_am') <span id="typed"></span></h1>
                            <div id="typed-strings">
                                <span>@lang('website.home.my_name')</span>
                                <span>@lang('website.home.web_developer')</span>
                                <span>@lang('website.home.from')</span>
                            </div>
                            <div class="more_info">
                                <a href="#contact" target="_self" class="bgColor">@lang('website.home.hire_me')</a>
                            </div><!--.more_info-->
                        </div><!--.display-table-cell-->
                    </div><!--.display-table-->
                </div><!--.overlayer-->
            </div><!--.side-->
        </div><!--.home_type-->
        <!--End Home-->


        <!--Start Menu-->
        <div class="mob-menu-overlay"></div>
        <div class="mob-menu">
            <div class="mob-menu-content">
                <div class="float-left">
                    <h3 class="menu-title">
                        <a href="http://www.ideas-factory.org/geeky">Oswaldo Montes</a>
                    </h3>
                </div>
                <div class="float-right">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="side side-right">
            <div class="home-lines">
                <div class="linesContent">
                    <span class="home-line"></span>
                    <span class="home-line"></span>
                    <span class="home-line"></span>
                    <span class="home-line"></span>
                </div>
            </div>
            <div class="intro-content">
                <div class="menu">
                    <!--Menu Items-->
                    <ul id="menu" class="list-unstyled menu_list">
                        <li class="menu-item ">
                            <span><a href="#home">@lang('website.home.home')</a></span>
                        </li>
                        <li class="menu-item ">
                            <span><a href="#about">@lang('website.menu.about')</a></span>
                        </li>
                        <li class="menu-item ">
                            <span><a href="#resume">@lang('website.menu.resume')</a></span>
                        </li>
                        <li class="menu-item ">
                            <span><a href="#services">@lang('website.menu.services')</a></span>
                        </li>
                        <li class="menu-item ">
                            <span><a href="#portfolio">@lang('website.menu.works')</a></span>
                        </li>
                        <li class="menu-item">
                            <span><a href="#contact">@lang('website.menu.contact')</a></span>
                        </li>
                    </ul>
                </div><!--.menu-->
            </div><!--.intro-content-->
        </div><!--.side-->
        <!--End Menu-->
    </div><!-- /intro -->

    <div class="pag-e page-right">
        <div id="pt-main" class="pt-perspective page-inner">

            @include('menus.about')

            @include('menus.resume')

            @include('menus.services')

            @include('menus.works')

            @include('menus.blog')

            @include('menus.contact')

        </div><!--.page-inner-->
    </div><!--.page-right-->
@endsection
