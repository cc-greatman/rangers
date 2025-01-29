@include('partials.head')

@include('partials.navbar')

<!--================= Latest Match Start Here =================-->
<div class="rts-latest-match">
    <div class="container">
        <div class="latest-match-inner">
            <div class="club-area">
                <div class="club-logo"><img src="assets/images/items/clubs.png" alt=""></div>
                <div class="content">
                    <h3 class="club-text" style="font-size: 35px !important;">EL-KANEMI<BR>
                        RANGERS INTL</H3>
                </DIV>
                <span class="match-type">NFPL MATCH</span>
            </div>
            <div class="match-countdown-area">
                <div class="countdown">
                    <div class="countdown-el days-c">
                        <span class="value" id="days">0</span>
                    </div>
                    <span class="letter">D</span>
                    <div class="countdown-el hours-c">
                        <span class="value" id="hours">0</span>
                    </div>
                    <span class="letter">H</span>
                    <div class="countdown-el mins-c">
                        <span class="value" id="mins">0</span>
                    </div>
                    <span class="letter">M</span>
                    <div class="countdown-el seconds-c">
                        <span class="value" id="seconds">0</span>
                    </div>
                    <span class="letter">S</span>
                </div>
            </div>
            <a style="margin-top: 20px;" href="https://seniorbarman.com/rangers/" target="_blank" class="ticket-btn">BUY TICKETS</a>
        </div>
    </div>
</div>
<!--================= Latest Match End Here =================-->


<!--================= Point Table Section Start Here =================-->
<div class="rts-point-table-section section-gap">
    <div class="container">
        <div class="section-title-area section-title-area1 text-center mb--50">
            <h1 class="section-title"><span class="pretitle">STANDINGS</span>NPFL STANDING</h1>
        </div>
        <div class="table-area table-full">
            <table class="table table-bordered">
                <thead class="thead-dark">
                </thead>
                <tbody>
                    <tr class="head-tr">
                        <th scope="col">POSITION</th>
                        <th scope="col">CLUB NAME</th>
                        <th scope="col">PL</th>
                        <th scope="col">GD</th>
                        <th scope="col">PTS</th>
                    </tr>
                    <tr>
                        <td><span class="position-number">01</span></td>
                        <td>
                            <div class="player-name-area">
                                <h4 class="player-name">Remo Stars FC</h4>
                            </div>
                        </td>
                        <td><span class="match-count">20</span></td>
                        <td><span class="win-count">12</span></td>
                        <td><span class="draw-count">39</span></td>
                    </tr>
                    <tr>
                        <td><span class="position-number">02</span></td>
                        <td>
                            <div class="player-name-area">
                                <h4 class="player-name">Rivers United FC</h4>
                            </div>
                        </td>
                        <td><span class="match-count">20</span></td>
                        <td><span class="win-count">7</span></td>
                        <td><span class="draw-count">34</span></td>
                    </tr>
                    <tr>
                        <td><span class="position-number">03</span></td>
                        <td>
                            <div class="product-title-area">
                                <h4 class="player-name">Shooting Stars Sports Club (3SC)</h4>
                            </div>
                        </td>
                        <td><span class="match-count">19</span></td>
                        <td ><span class="win-count">5</span></td>
                        <td><span class="draw-count">33</span></td>
                    </tr>
                    <tr style="background-color: #e41b23 !important;">
                        <td style="background-color: #e41b23 !important;"><span class="position-number" style="color: #fff !important;">04</span></td>
                        <td style="background-color: #e41b23 !important;">
                            <div class="product-title-area">
                                <h4 class="player-name" style="color: #fff !important;">Rangers F.C.</h4>
                            </div>
                        </td>
                        <td style="background-color: #e41b23 !important;"><span class="match-count" style="color: #fff !important;">20</span></td>
                        <td style="background-color: #e41b23 !important;"><span class="win-count" style="color: #fff !important;">6</span></td>
                        <td style="background-color: #e41b23 !important;"><span class="draw-count" style="color: #fff !important;">31</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="button-area"><a href="javascript:void(0);" class="full-table-btn">VIEW FULL TABLE</a></div>
    </div>
</div>
<!--================= Point Table Section End Here =================-->

<!--================= Blog Section Start Here =================-->
<div class="rts-blog-section section-gap">
    <div class="container">
        <div class="section-title-area section-title-area1 text-center mb--50">
            <h1 class="section-title"><span class="pretitle">NEWS</span>RANGERS INSIGHTS</h1>
        </div>
        <div class="blog-area">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-12">
                    <div class="blog-item">
                        <div class="blog-picture" style="border-radius: 25px;"><img src="{{ asset("./assets/images/blog/blog1.jpg") }}" style="object-fit: cover !important;" alt=""></div>
                        <div class="contents-wrapper">
                            <div class="contents">
                                <div class="d-block">
                                    <a href="javascript:void(0);" class="blog-catagory">FOOTBALL</a>
                                    <a href="javascript:void(0);" class="blog-title">RANGERS STOP RIVERS UNITED, MAINTAIN UNBEATEN STREAK</a>
                                </div>
                                <div class="author-info">
                                    <div class="author-dp"><img src="{{ asset("./assets/images/items/author2.png") }}"
                                            alt="author-dp"></div>
                                    <div class="content">
                                        <a href="javascript:void(0);" class="author-name">Igbokwe Emenike</a>
                                        <div class="blog-date">
                                            <div class="date">June 21, 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px;">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-picture" style="border-radius: 25px;"><img src="{{ asset("./assets/images/blog/blog1.jpg") }}" alt=""></div>
                        <div class="contents-wrapper">
                            <div class="contents">
                                <div class="d-block">
                                    <a href="javascript:void(0);" class="blog-catagory">FOOTBALL</a>
                                    <a href="javascript:void(0);" class="blog-title">RANGERS STOP RIVERS UNITED, MAINTAIN UNBEATEN STREAK</a>
                                </div>
                                <div class="author-info">
                                    <div class="author-dp"><img src="{{ asset("./assets/images/items/author2.png") }}"
                                            alt="author-dp"></div>
                                    <div class="content">
                                        <a href="javascript:void(0);" class="author-name">Igbokwe Emenike</a>
                                        <div class="blog-date">
                                            <div class="date">June 21, 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-picture" style="border-radius: 25px;"><img src="{{ asset("./assets/images/blog/blog2.jpg") }}" alt=""></div>
                        <div class="contents-wrapper">
                            <div class="contents">
                                <div class="d-block">
                                    <a href="javascript:void(0);" class="blog-catagory">FOOTBALL</a>
                                    <a href="javascript:void(0);" class="blog-title">RANGERS MGT. CONDOLES FAMILY OF LATE IGBOJAH</a>
                                </div>
                                <div class="author-info">
                                    <div class="author-dp"><img src="{{ asset("./assets/images/items/author2.png") }}"
                                            alt="author-dp"></div>
                                    <div class="content">
                                        <a href="#0" class="author-name">IFUNAYA NNAJI</a>
                                        <div class="blog-date">
                                            <div class="date">May 1, 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-picture" style="border-radius: 25px;"><img src="{{ asset("./assets/images/blog/blog3.jpg") }}" alt=""></div>
                        <div class="contents-wrapper">
                            <div class="contents">
                                <div class="d-block">
                                    <a href="javascript:void(0);" class="blog-catagory">FOOTBALL</a>
                                    <a href="javascript:void(0);" class="blog-title">RANGERS STOP RIVERS UNITED, MAINTAIN UNBEATEN STREAK</a>
                                </div>
                                <div class="author-info">
                                    <div class="author-dp"><img src="{{ asset("./assets/images/items/author3.png") }}"
                                            alt="author-dp"></div>
                                    <div class="content">
                                        <a href="javascript:void(0);" class="author-name">CLUB DA AUTHOR</a>
                                        <div class="blog-date">
                                            <div class="date">September 16, 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px;">
                <div class="col-xl-12 col-md-12">
                    <div class="blog-item">
                        <div class="blog-picture" style="border-radius: 25px;"><img src="{{ asset("./assets/images/blog/blog1.jpg") }}" style="object-fit: cover !important; "alt=""></div>
                        <div class="contents-wrapper">
                            <div class="contents">
                                <div class="d-block">
                                    <a href="javascript:void(0);" class="blog-catagory">FOOTBALL</a>
                                    <a href="javascript:void(0);" class="blog-title">RANGERS STOP RIVERS UNITED, MAINTAIN UNBEATEN STREAK</a>
                                </div>
                                <div class="author-info">
                                    <div class="author-dp"><img src="{{ asset("./assets/images/items/author2.png") }}"
                                            alt="author-dp"></div>
                                    <div class="content">
                                        <a href="javascript:void(0);" class="author-name">Igbokwe Emenike</a>
                                        <div class="blog-date">
                                            <div class="date">June 21, 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= BLog Details Section End Here =================-->

<!--================= Match Result Start Here =================-->
<div class="rts-match-result-section">
    <div class="row">
        <div class="swiper rts-sixSlide-over">
            <div class="swiper-wrapper">
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">Feburary 2, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Rangers Int'l</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ikorodu.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Ikorodu City</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">Feburary 9, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/bayelsa.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Bayelsa United</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Rangers Intl</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">Feburary 16, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Rangers intl</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/remo.png") }}" class="score-number"  width="65px" height="65px" alt="">
                                <span class="club-name">Remo Stars</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">Feburary 19, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/abia.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Abia Warriors</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number"  width="65px" height="65px" alt="">
                                <span class="club-name">Rangers intl</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">Feburary 23, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Rangers Intl</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/sunshine.png") }}" class="score-number"  width="65px" height="65px" alt="">
                                <span class="club-name">Sunshine Stars</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">March 2, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/kano.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Kano Pillars</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number"  width="65px" height="65px" alt="">
                                <span class="club-name">Rangers Intl</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">March 9, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Rangers Intl</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/awka.png") }}" class="score-number"  width="65px" height="65px" alt="">
                                <span class="club-name">Akwa United</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-item">
                    <div class="match-single">
                        <span class="match-date">March 16, 2025. 4PM</span>
                        <div class="match-scores">
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/ranger.png") }}" class="score-number" width="65px" height="65px" alt="">
                                <span class="club-name">Rangers Intl</span>
                            </div>
                            <div class="colon">:</div>
                            <div class="club">
                                <img src="{{ asset("./assets/images/matches/kwara.png") }}" class="score-number"  width="65px" height="65px" alt="">
                                <span class="club-name">Kwara United</span>
                            </div>
                        </div>
                        <div class="match-review">
                            <a href="https://seniorbarman.com/rangers/" class="review-link smry">GET TICKETS</a>
                            <div class="play-btn play-video"><a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                    class="review-link vdo">VIDEO</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Match Result Section End Here =================-->

<!--================= About Section Start Here =================-->
<div class="rts-about-section">
    <div class="about-inner">
        <div class="about-thumb"><img src="{{ asset("./assets/images/about/aboutthumb.webp") }}" alt="about-thumb" width="700px"></div>
        <div class="contents">
            <div class="section-title-area section-title-area1 text-start mb--50">
                <h1 class="section-title"><span class="pretitle">History</span>Rangers F.C</h1>
            </div>
            <div class="quote-box">
                <p>Rangers International F.C is a Nigerian professional association football team founded in 1970. Based in Enugu, the Rangers play their home games at the Nnamdi Azikiwe Stadium.</p>
                <span class="quote-author">Wikipedia</span>
            </div>
        </div>
    </div>
</div>
<!--================= Match Result Section End Here =================-->


<!--================= Shop Section Start Here =================-->
<div class="rts-shop-section section-gap">
    <div class="container">
        <div class="top-wrapper">
            <div class="section-title-area section-title-area1 text-start mb--50">
                <h1 class="section-title"><span class="pretitle">SHOP</span>MERCH PRODUCTS</h1>
            </div>
            <a href="{{ route('shop') }}" class="more-details-btn">MORE PRODUCTS <i
                    class="far fa-long-arrow-right ml--10"></i></a>
        </div>
        <div class="swiper rts-cmmnSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product-item">
                        <a href="javascript:void(0);" class="product-thumb"><img
                                src="{{ asset("assets/images/products/product1.png") }}" alt="product-thumb"></a>
                        <div class="contents">
                            <div class="rating-area">
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star blank-star"><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="product-name">THE WORLD CUP-2018 FOOTBALL</a>
                            <div class="product-action-area">
                                <span class="product-price d-block">$59</span>
                                <a href="javascript:void(0);" class="addto-cart">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item">
                        <a href="javascript:void(0);" class="product-thumb"><img
                                src="{{ asset("assets/images/products/product2.png") }}" alt="product-thumb"></a>
                        <div class="contents">
                            <div class="rating-area">
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star blank"><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="product-name">MEN FOOTBALL SHORTS</a>
                            <div class="product-action-area">
                                <div class="product-action-area">
                                    <span class="product-price d-block">$49</span>
                                    <a href="javascript:void(0);" class="addto-cart">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-tag-area">
                            <div class="product-tag discount-tag">-29%</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item">
                        <a href="javascript:void(0);" class="product-thumb"><img
                                src="{{ asset("assets/images/products/product3.png") }}" alt="product-thumb"></a>
                        <div class="contents">
                            <div class="rating-area">
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star blank-star"><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="product-name">MEN FOOTBALL JERSEY (NEW)</a>
                            <div class="product-action-area">
                                <div class="product-action-area">
                                    <span class="product-price d-block">$55</span>
                                    <a href="javascript:void(0);" class="addto-cart">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-tag-area">
                            <div class="product-tag new-tag">NEW</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item">
                        <a href="javascript:void(0);" class="product-thumb"><img
                                src="{{ asset("assets/images/products/product4.png") }}" alt="product-thumb"></a>
                        <div class="contents">
                            <div class="rating-area">
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star blank-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star blank-star"><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="product-name">MEN FOOTBALL JERSEY</a>
                            <div class="product-action-area">
                                <span class="product-price d-block">$60</span>
                                <a href="javascript:void(0);" class="addto-cart">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Shop Section End Here =================-->

@include('partials.sponsors')


<!--================= Product-details Section Start Here =================-->
<div class="product-details-popup-wrapper">
    <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
        <div class="product-details-popup">
            <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
            <div class="details-product-area">
                <div class="product-thumb-area">
                    <div class="product-thumb-filter-group">
                        <div class="thumb-filter filter-btn active" data-show=".one"><img
                                src="assets/images/products/gloves.png" alt="product-thumb-filter"></div>
                        <div class="thumb-filter filter-btn" data-show=".two"><img
                                src="assets/images/products/product1.png" alt="product-thumb-filter"></div>
                        <div class="thumb-filter filter-btn" data-show=".three"><img
                                src="assets/images/products/product2.png" alt="product-thumb-filter"></div>
                    </div>
                    <div class="cursor"></div>
                    <div class="thumb-wrapper one filterd-items figure">
                        <div class="product-thumb zoom" onmousemove="zoom(event)"
                            style="background-image: url(assets/images/products/prod.jpg)"><img
                                src="assets/images/products/prod.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <div class="thumb-wrapper two filterd-items hide">
                        <div class="product-thumb zoom" onmousemove="zoom(event)"
                            style="background-image: url(assets/images/products/prod.jpg)"><img
                                src="assets/images/products/prod.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <div class="thumb-wrapper three filterd-items hide">
                        <div class="product-thumb zoom" onmousemove="zoom(event)"
                            style="background-image: url(assets/images/products/prod.jpg)"><img
                                src="assets/images/products/prod.jpg" alt="product-thumb">
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div class="product-status">
                        <span class="product-catagory">Dress</span>
                        <div class="rating-stars-group">
                            <div class="rating-star"><i class="fas fa-star"></i></div>
                            <div class="rating-star"><i class="fas fa-star"></i></div>
                            <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                            <span>10 Reviews</span>
                        </div>
                    </div>
                    <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                    <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                    <p>
                        Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                        completely modern design and you feel comfortable to put on this hijab.
                        Buy it at the best price.
                    </p>
                    <div class="product-bottom-action">
                        <div class="cart-edit">
                            <div class="quantity-edit action-item">
                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                <input type="text" class="input" value="01" />
                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                            Add To
                            Cart</a>
                        <a href="wishlist.html" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                    </div>
                    <div class="product-uniques">
                        <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                        <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                        <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                    </div>
                    <div class="share-social">
                        <span>Share:</span>
                        <a class="platform" href="http://facebook.com/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="platform" href="http://twitter.com/" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a class="platform" href="http://behance.com/" target="_blank"><i
                                class="fab fa-behance"></i></a>
                        <a class="platform" href="http://youtube.com/" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                        <a class="platform" href="http://linkedin.com/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Product-details Section End Here =================-->
<script>
    // Target date: January 29, 2025, 3:00 PM WAT
    const targetDate = new Date("2025-01-29T15:00:00+01:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const difference = targetDate - now;

        if (difference > 0) {
            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const mins = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            // Add leading zeros for single digits
            document.getElementById("days").textContent = String(days).padStart(2, "0");
            document.getElementById("hours").textContent = String(hours).padStart(2, "0");
            document.getElementById("mins").textContent = String(mins).padStart(2, "0");
            document.getElementById("seconds").textContent = String(seconds).padStart(2, "0");
        } else {
            // Timer has expired
            document.getElementById("days").textContent = "00";
            document.getElementById("hours").textContent = "00";
            document.getElementById("mins").textContent = "00";
            document.getElementById("seconds").textContent = "00";
        }
    }

    // Update countdown every second
    setInterval(updateCountdown, 1000);
    // Initialize countdown immediately
    updateCountdown();
</script>

@include('partials.footer')
