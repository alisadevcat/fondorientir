<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                @foreach ($contacts as $contact)
                    <div class="col-md-4">
                        <div class="left_section">

                            <div class="row justify-content-between">
                                <div class="logo">
                                    <a href="/"><img src="/assets/images/logo1.png" alt="Logo"></a>
                                </div>
                            </div>

                            <div class="social">
                                <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                <!--Google +-->
                                <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                <!--Linkedin-->
                                <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                <!--Pinterest-->
                                <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            </div>
                            <!-- Top Social Section -->
                        </div>
                        <!-- Left Header Section -->
                    </div>

                    <div class="col-md-4">
                        <div>
                            <a href="/feedback/reception"><img src="/assets/images/banner.jpg" alt="receipt"></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="right_section">
                            <ul class="nav navbar-nav">
                                <li><a>Часы работы:{{ $contact->hours }}</a></li>
                                <li><a>Е-mail:{{ $contact->email }}</a></li>
                                <li><a>Адрес:{{ $contact->index }} {{ $contact->city }} {{ $contact->street }}</a></li>
                                <li><a>Схема проезда (интерактивная карта)</a></li>
                                <li><a href='#'>Миграционные новости</a></li>
                                <li><a href='#'>Трудовые споры</a></li>
                                <li><a href='#'>Гражданские споры</a></li>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Заказать обратный звонок</button>
                            </ul>
                            <!-- Language Section -->
                        </div>
                        <!-- Right Header Section -->
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Header Section -->


        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav container">
                            @foreach ($menuitems as $item)
                                @if (!!$item->children)
                                    <li class="dropdown m-menu-fw">
                                        <a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}"
                                            data-toggle="dropdown" class="dropdown-toggle">
                                            {{ $item->title }}
                                            <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="m-menu-content">
                                                    <ul class="col-sm-3">
                                                        @foreach ($item->children as $children)
                                                            <a
                                                                href="{{ $children->laravel_name ? route($children->laravel_name) : $children->url }}">{{ $children->title }}</a>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="dropdown m-menu-fw">
                                        <a
                                            href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">{{ $item->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->

    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->