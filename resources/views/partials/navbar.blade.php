<!--================= Header Section Start Here =================-->
<header id="rtsHeader" class="rts-header1">
    <div class="navbar-sticky">
        <div class="navbar-part navbar-part1">
            <div class="container">
                <div class="navbar-inner">
                    <a href="{{ route('index') }}" class="logo"><img src="assets/images/logo.svg" alt="sportius-logo" width="70px"></a>
                    <a href="{{ route('index') }}" class="logo-sticky"><img src="assets/images/logosticky.svg" width="70px" alt="sportius-logo"></a>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li><a class="menu-item" href="{{ route('index') }}">Home </a>
                                    <ul class="">
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="{{ route('index') }}">Positions <i class="fal fa-angle-down"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('fixtures') }}">Fixtures </a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link"
                                                href="{{ route('standings') }}">Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="{{ route('index') }}">Rangers FC <i class="fal fa-angle-down"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('about') }}">Club Info </a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link"
                                                href="{{ route('news') }}">News</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="{{ route('players') }}">Players </a>
                                    <ul class="">
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="{{ route('shop') }}">Shop </a>
                                    <ul class="">
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="{{ route('contact') }}">Reach Out </a>
                                    <ul class="">
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <select class="custom-select select-hidden">
                                            <option value="hide">All Categorys</option>
                                            <option value="all">All</option>
                                            <option value="league">League</option>
                                            <option value="club">Club</option>
                                            <option value="team">Team</option>
                                            <option value="player">Player</option>
                                            <option value="match">Match</option>
                                            <option value="score">Score</option>
                                        </select>
                                        <div class="input-div">
                                            <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                            <input id="searchInput1" class="search-input" type="text"
                                                placeholder="Search by keyword or #">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="hamburger-menu aitem">
                        <div class="hamburger-menu-inner">
                            <span></span>
                            <span class=""></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/products/product1.png" alt="product-thumb">
                    </div>
                    <div class="item-wrapper">
                        <span class="product-name">Parachute Jacket</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/products/product2.png" alt="product-thumb">
                    </div>
                    <div class="item-wrapper">
                        <span class="product-name">Narrow Trouser</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/products/product6.png" alt="product-thumb">
                    </div>
                    <div class="item-wrapper">
                        <span class="product-name">Bellyless Hoodie</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="checkout.html" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="cart.html" class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div>
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <button class="slide-bar-close ml--30"><i class="fal fa-times"></i></button>
            <div class="offset-widget offset-logo mb-30">
                <a href="{{ route('index') }}">
                    <img src="{{ asset("../assets/images/logosticky.svg") }}" alt="logo" width="100px">
                </a>
            </div>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu side-mobile-menu1">
            <ul id="mobile-menu-active">
                <li><a class="mm-link" href="{{ route('index') }}" aria-expanded="false">Home </a></li>
                <li class="has-dropdown firstlvl"><a class="mm-link" href="{{ route('index') }}">Positions <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mm-collapse" style="height: 0px;">
                        <li><a href="{{ route('fixtures') }}">Fixtures </a></li>
                        <li><a href="{{ route('standings') }}">Tables</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl"><a class="mm-link" href="{{ route('index') }}">Rangers FC <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mm-collapse" style="height: 0px;">
                        <li><a href="{{ route('about') }}">Club Info </a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                    </ul>
                </li>
                <li><a class="mm-link" href="{{ route('players') }}" aria-expanded="false">Players </a></li>
                <li><a class="mm-link" href="{{ route('shop') }}" aria-expanded="false">Shop </a></li>
                <li><a class="mm-link" href="{{ route('contact') }}" aria-expanded="false">Reach Out </a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
        <div class="side-bar-social-links">
            <a href="#0" class="platform"><i
                    class="fab fa-facebook-f"></i></a>
            <a href="#0" class="platform"><i
                    class="fab fa-twitter"></i></a>
            <a href="#0" class="platform"><i
                    class="fab fa-youtube"></i></a>
        </div>
    </aside>
    <!-- slide-bar end -->
    @if(Route::is('index'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="swiper bannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-single banner-single-1 banner-bg">
                        <div class="container">
                            <div class="banner-content">
                                <span class="pretitle">RANGERS FOOTBALL CLUB</span>
                                <h1 class="banner-heading">RANGERS F.C & <br> THE NNL CHAMPIONSHIP</h1>
                                <div class="banner-btn-area">
                                    <a href="#0" class="team-btn banner-btn">OUR PLAYERS <i
                                            class="far fa-long-arrow-right ml--5"></i></a>
                                    <a href="#0" class="nxt-match-btn banner-btn">NEXT MATCH <i
                                            class="far fa-long-arrow-right ml--5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-single banner-single-1_2 banner-bg">
                        <div class="container">
                            <div class="banner-content">
                                <span class="pretitle">PRIDE OF THE SOUTH-EAST</span>
                                <h1 class="banner-heading">THE HUNTERS <BR>
                                   8X NPFL CUP WINNERS</h1>
                                <div class="banner-btn-area">
                                    <a href="#0" class="team-btn banner-btn">OUR TEAM <i
                                            class="far fa-long-arrow-right ml--5"></i></a>
                                    <a href="#0" class="nxt-match-btn banner-btn">NEXT MATCH <i
                                            class="far fa-long-arrow-right ml--5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-single banner-single-3 banner-bg">
                        <div class="container">
                            <div class="banner-content">
                                <span class="pretitle">RANGERS INTERNATIONAL</span>
                                <h1 class="banner-heading">THE GIANTS <BR>
                                    BUILDING A FOUNDATION</h1>
                                <div class="banner-btn-area">
                                    <a href="" class="team-btn banner-btn">OUR TEAM <i
                                            class="far fa-long-arrow-right ml--5"></i></a>
                                    <a href="#0" class="nxt-match-btn banner-btn">NEXT MATCH <i
                                            class="far fa-long-arrow-right ml--5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-pagination-area">
            <h5 class="slide-range">01</h5>
            <div class="swiper-pagination"></div>
            <h5 class="slide-range">03</h5>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @elseif (Route::is('fixtures'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="inner-page-banner banner-bg">
            <div class="container">
                <div class="banner-content">
                    <div class="page-path">
                        <ul>
                            <li><a class="home-page-link" href="{{ route('index') }}">Home</a></li>
                            <li><a class="current-page" href="javascript:void(0);">Match Schedules</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">MATCH SCHEDULES</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @elseif (Route::is('standings'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="inner-page-banner banner-bg">
            <div class="container">
                <div class="banner-content">
                    <div class="page-path">
                        <ul>
                            <li><a class="home-page-link" href="{{ route('index') }}">Home</a></li>
                            <li><a class="current-page" href="javascript:void(0);">NPFL Point Table</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">NPFL LEAGUE STANDINGS</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @elseif(Route::is('players'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="inner-page-banner banner-bg">
            <div class="container">
                <div class="banner-content">
                    <div class="page-path">
                        <ul>
                            <li><a class="home-page-link" href="{{ route('index') }}">Home</a></li>
                            <li><a class="current-page" href="javascript:void(0);">Our Team</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">THE HUNTERS</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @elseif(Route::is('news'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="inner-page-banner banner-bg">
            <div class="container">
                <div class="banner-content">
                    <div class="page-path">
                        <ul>
                            <li><a class="home-page-link" href="{{ route('index') }}">Home</a></li>
                            <li><a class="current-page" href="javascript:void(0);">Rangers Insights</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">Rangers Insights</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @elseif(Route::is('shop'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="inner-page-banner banner-bg">
            <div class="container">
                <div class="banner-content">
                    <div class="page-path">
                        <ul>
                            <li><a class="home-page-link" href="{{ route('index') }}">Home</a></li>
                            <li><a class="current-page" href="javascript:void(0);">Rangers Merch</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">OUR MERCH</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @elseif(Route::is('about'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="inner-page-banner banner-bg">
            <div class="container">
                <div class="banner-content">
                    <div class="page-path">
                        <ul>
                            <li><a class="home-page-link" href="{{ route('index') }}">Home</a></li>
                            <li><a class="current-page" href="javascript:void(0);">Our History</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">Our Story</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @elseif(Route::is('contact'))
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner1">
        <div class="inner-page-banner banner-bg">
            <div class="container">
                <div class="banner-content">
                    <div class="page-path">
                        <ul>
                            <li><a class="home-page-link" href="{{ route('index') }}">Home</a></li>
                            <li><a class="current-page" href="javascript:void(0);">Reach Out</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
    @endif
</header>
<!--================= Header Section End Here =================-->
