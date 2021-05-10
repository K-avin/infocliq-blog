<!DOCTYPE html>
<html lang="en">
@extends('layouts.head')

<body>
    @extends('layouts.loader')

    @extends('layouts.header')

    <!-- Hero section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-text">
                    <h2>Bulid <span>Your</span> <br>Dreem Website</h2>
                    <h4>Discover the Unique Team that understands your need to stand out in
                        the Digital World.</h4>
                    <!-- <form class="hero-subscribe-from">
      <input type="text" placeholder="Enter your email">
      <button class="site-btn sb-gradients">Get Started</button>
     </form> -->
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/laptop.png') }}" class="laptop-image" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- ***** Services Area Start ***** -->
    <section class="mosh--services-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-10">
                        <h2>What We Do ?</h2>
                        <p>This is how we work on Projects</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/trophy.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>No1 in Sales!</h4>
                            <p>Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit
                                am.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/edit.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Documentation inside</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/video-camera.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Modern Design</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/presentation.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Marketing Strategist</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/gamepad.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Play with colors</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/atomic.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Mix &amp; Match</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/safebox.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Worth the money</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/settings-2.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Modern elements</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-feature-area d-flex mb-70">
                        <div class="feature-icon mr-30">
                            <img src="{{ asset('img/core-img/alarm-clock.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>24 Hours support</h4>
                            <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn mosh-btn">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->


    <!-- ***** Service Area Start ***** -->
    <section class="about-section spad mosh-service-area clearfix features-section
   gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mosh-service-slides owl-carousel">
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>01.</h2>
                            <h4 class="service-h4">No1 in Sales!</h4>
                            <p class="service-p">Etiam nec odio vestibulum est mattis effic iturut
                                magna.
                                Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>02.</h2>
                            <h4 class="service-h4">Online Marketing</h4>
                            <p class="service-p">Etiam nec odio vestibulum est mattis effic iturut
                                magna.
                                Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>03.</h2>
                            <h4 class="service-h4">Modern Design</h4>
                            <p class="service-p">Etiam nec odio vestibulum est mattis effic iturut
                                magna.
                                Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>04.</h2>
                            <h4 class="service-h4">No1 in Sales!</h4>
                            <p class="service-p">Etiam nec odio vestibulum est mattis effic iturut
                                magna.
                                Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>05.</h2>
                            <h4 class="service-h4">Online Marketing</h4>
                            <p class="service-p">Etiam nec odio vestibulum est mattis effic iturut
                                magna.
                                Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>06.</h2>
                            <h4 class="service-h4">Modern Design</h4>
                            <p class="service-p">Etiam nec odio vestibulum est mattis effic iturut
                                magna.
                                Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                    </div>
                </div>
                <!-- Discover More btn -->
                <div class="col-12 text-center mt-100">
                    <a href="#" class="btn mosh-btn-service">Discover</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Workflow Area Start ***** -->
    <section class="mosh-workflow-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-0">
                        <h2>Our Work Flow</h2>
                        <p>This is how we work on Projects</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="workflow-img">
            <img src="{{ asset('img/core-img/work-progress.png') }}" alt="">
        </div>

        <div class="workflow-slides-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mosh-workflow-slides owl-carousel">
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>1.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>This is the first step</h4>
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna.
                                        Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>2.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>This is the second step</h4>
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna.
                                        Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>3.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>This is the third step</h4>
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna.
                                        Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>4.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>This is the fourth step</h4>
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna.
                                        Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->




    <!-- Fact section end -->
    <section class="newsletter-section gradient-bg">
        <div class="container text-white">
            <div class="col-12">
                <div class="mosh-cool-facts-area mb-10">
                    <div class="row">
                        <!-- Single Cool Fact-->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact">
                                <div class="counter-area">
                                    <h3><span class="counter">08</span></h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Processing</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cool Fact-->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact">
                                <div class="counter-area">
                                    <h3>+<span class="counter">12</span></h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cool Fact-->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact">
                                <div class="counter-area">
                                    <h3><span class="counter">1523</span>K</h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Followers on instagram</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cool Fact-->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact">
                                <div class="counter-area">
                                    <h3><span class="counter">10</span></h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Finished Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review section -->
                    <div class="row">
                        <div class="col-lg-8 push-8">
                            <img src="{{ asset('img/quote.png') }}" alt="" class="quote mb-5">
                            <div class="review-text-slider owl-carousel">
                                <div class="review-text">
                                    <p>"We are also committed to ensuring a great developer experience. Our modules
                                        do not ship as features. You won;t need to worry about overrides with us.
                                        All the site buider needs to do is enable the modules, make the required tweaks,
                                        if any, and capture the config in their own feature.”</p>
                                </div>
                                <div class="review-text">
                                    <p>"We are also committed to ensuring a great developer experience. Our modules
                                        do not ship as features. You won;t need to worry about overrides with us.
                                        All the site buider needs to do is enable the modules, make the required tweaks,
                                        if any, and capture the config in their own feature.”</p>
                                </div>
                                <div class="review-text">
                                    <p>"We are also committed to ensuring a great developer experience. Our modules
                                        do not ship as features. You won;t need to worry about overrides with us.
                                        All the site buider needs to do is enable the modules, make the required tweaks,
                                        if any, and capture the config in their own feature.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 pr-0 pull-3">
                            <div class="review-meta-slider owl-carousel pt-5">
                                <div class="author-meta">
                                    <div class="author-avatar set-bg" data-setbg="{{asset('img/review/1.jpg')}}"></div>
                                    <div class="author-name">
                                        <h4>Aaron Ballance</h4>
                                        <p>Ceo Bitcoin</p>
                                    </div>
                                </div>
                                <div class="author-meta">
                                    <div class="author-avatar set-bg" data-setbg="{{asset('img/review/2.jpg')}}"></div>
                                    <div class="author-name">
                                        <h4>Jackson Nash</h4>
                                        <p>Head of Design</p>
                                    </div>
                                </div>
                                <div class="author-meta">
                                    <div class="author-avatar set-bg" data-setbg="{{asset('img/review/3.jpg')}}"></div>
                                    <div class="author-name">
                                        <h4>Katy Abrams</h4>
                                        <p>Product Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Review section end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Fact section end -->

    @extends('layouts.footer')
    
    @extends('layouts.scripts')
</body>

</html>
