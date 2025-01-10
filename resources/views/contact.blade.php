@include('partials.head')

@include('partials.navbar')

<!--contact-area start-->
<div class="contact-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <form class="contact-form mb-10">
                    <h3 class="post-title mb-35">Custom Request</h3>
                    <span class="sub-title">Must-have pieces selected every month want style Ideas and
                        Treats?</span>
                    <div class="info-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="input-box mb-20">
                                    <input type="text" id="validationDefault01" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="input-box mail-input mb-20">
                                    <input type="email" id="validationDefault02" placeholder="E-mail Address"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="input-box number-input mb-30">
                                    <input type="number" id="validationDefault03" placeholder="Phone Number"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="input-box sub-input mb-30">
                                    <input type="text" id="validationDefault04" placeholder="Subject..." required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="input-box text-input mb-20">
                                    <textarea name="Message" id="validationDefault05" cols="30" rows="10"
                                        placeholder="Enter message" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 mb-15">
                                <button type="submit" class="form-btn form-btn4">
                                    Get A Quote
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="right-side">
                    <div class="get-in-touch">
                        <h3 class="section-title2">
                            Get In Touch
                        </h3>
                        <div class="contact">
                            <ul>
                                <li class="one">
                                    Enugu Nigeria
                                </li>
                                <li class="two"><a href="tel:+2349057868978">+234 (905) 786 897 8</a>
                                    <a href="tel:61463895748">091222025748</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-button">
                        <div class="btn-1">
                            <a href="#">Get Support On Call <i class="fal fa-headphones-alt"></i></a>
                        </div>
                        <div class="btn-2">
                            <a href="#">Get Direction <i class="rt-location-dot"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <p><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.523387631094!2d7.487530374992321!3d6.455167993536308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3c8dd6eaaab%3A0x7e152a9401b029cd!2sRangers%20International%20Football%20Club!5e0!3m2!1sen!2sng!4v1734701538250!5m2!1sen!2sng"
                height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>
</div>
<!--contact-area end-->

<!--================= Sponsors Section Start Here =================-->
<div class="rts-sponsors-section rts-sponsors-section2 section-gap section-bg">
    <div class="container">
        <div class="section-title-area section-title-area2 text-center mb--50">
            <h1 class="section-title">BRAND SPONSORS</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-2 col-md-4 col-sm-6">
                <a href="#" class="sponsor-single"><img src="assets/images/brands/1.png" alt="sponsor" width="100px"></a>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <a href="#" class="sponsor-single"><img src="assets/images/brands/2.png" alt="sponsor" width="100px"></a>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <a href="#" class="sponsor-single"><img src="assets/images/brands/3.png" alt="sponsor" width="100px"></a>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <a href="#" class="sponsor-single"><img src="assets/images/brands/4.png" alt="sponsor" width="100px"></a>
            </div>
        </div>
        <div class="row justify-content-center last-child">
            <div class="col-xl-2 col-md-4 col-sm-6">
                <a href="#" class="sponsor-single"><img src="assets/images/brands/5.png" alt="sponsor" width="100px"></a>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <a href="#" class="sponsor-single"><img src="assets/images/brands/6.png" alt="sponsor" width="100px"></a>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <a href="#" class="sponsor-single"><img src="assets/images/brands/7.png" alt="sponsor" width="100px"></a>
            </div>
        </div>
    </div>
</div>
<!--================= Sponsors Table Section End Here =================-->

@include('partials.footer')
