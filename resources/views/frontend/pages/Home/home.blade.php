@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Hero Section -->
    <div id="hero" class="has-image">
        <div id="hero-styles">
            <div id="hero-caption" class="content-max-width parallax-scroll-caption1">
                <div class="inner">
                <div class="hero-arrow"><i class="arrow-icon"></i></div>
                <div class="hero-subtitle"><span>Build your Venture </span><span>with Turtle
                    Venture Studio</span>
                </div>
                <div class="hero-title-wrapper">
                    <div class="hero-title">
                        <span>Collab, </span>
                        <span>Innovate, </span>
                        <span>Transform. </span>
                    </div>
                </div>
                </div>
            </div>
            <div id="hero-footer">
                <div class="hero-footer-right">
                <div class="button-wrap right scroll-down">
                    <div class="icon-wrap parallax-wrap">
                        <div class="button-icon parallax-element">
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="button-text sticky right">
                        <span data-hover="Scroll Down">
                            Scroll Down
                        </span>
                    </div>
                </div>
                </div>
            </div>
            <div id="hero-description" class="content-max-width">
                <div class="inner">
                <div class="one_half"></div>
                <div class="one_half last">
                    <div class="hero-text">
                        <span>
                            Turtle Venture Studio is a venture-building platform based in
                            Bangladesh that helps entrepreneurs turn their ideas into thriving
                            businesses.
                            <br><br>
                            Venture Studio is one of the greatest ways to build your venture
                            from scratch to a scalable business with the proper financial,
                            product-building, marketing, and fundraising support.
                        </span>
                    </div>
                    <br>
                    <div class="button-wrap right button-link large-btn has-animation animated">
                        <div class="icon-wrap parallax-wrap">
                            <div class="button-icon parallax-element">
                            <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                        <a target="_blank" href="https://tally.so/r/wzEgzM">
                            <div class="button-text sticky right">
                                <span class="apply-button" data-hover="Join our Cohort">
                                    Submit Application
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="hero-image-wrapper">
        <div id="hero-background-layer" class="parallax-scroll-image">
            <div id="hero-bg-image" style="background-image:url(images/about03.jpg)"></div>
        </div>
    </div>
    <!--/Hero Section -->

    <!-- Main Content -->
    <div id="main-content">
        <!-- Main Page Content -->
        <div id="main-page-content" class="content-max-width">

            <!-- Row -->
            <div class="content-row full light-section" data-bgcolor="#fff">

                <!-- Row -->
                <div class="content-row row_padding_top row_padding_bottom light-section change-header-color"
                    data-bgcolor="#fff">

                    <div class="one_fourth"></div>

                    <div class="two_fourth">
                        <h1 class="big-title has-mask-fill">Studio Offerings</h1>
                    </div>

                    <div class="one_fourth last"></div>

                    <hr>

                    <div class="one_fourth">
                        <h6 class="has-animation has-icon">What</h6>
                    </div>

                    <div class="two_fourth">
                        <p class="has-animation" data-delay="50">Receive $125,000 worth of services
                            and funding. Make your dream possible and spread it globally through
                            partners and networks.</p>
                    </div>

                    <hr>

                    <div class="one_fourth">
                        <h6 class="has-animation has-icon">Why</h6>
                    </div>

                    <div class="two_fourth">
                        <p class="has-animation" data-delay="50">We are introducing Turtle Venture
                            Studio in Bangladesh to help Bangladeshi early-stage startups and
                            founders with the right resources, funding, and enough venture-building
                            time to build the right ground-breaking products. Turtle venture studio
                            allows all the portfolio ventures to establish themselves as a global
                            business by incorporating their business in Singapore.</p>
                    </div>

                    <hr>

                    <div class="one_fourth">
                        <h6 class="has-animation has-icon">How</h6>
                    </div>

                    <div class="two_fourth">
                        <p class="has-animation" data-delay="50">Onboarding promising founders,
                            Intensive six months of venture building process, demo day in Singapore,
                            and fundraising.</p>
                    </div>

                    <div class="one_fourth last"></div>

                </div>
                <!--/Row -->

                <div class="content-row full light-section"
                    data-bgcolor="#171717">
                    <figure class="has-parallax has-parallax-content" data-delay="100">
                        <img src="{{asset('images/Web-Content-01.jpg')}}" alt="Image Title">
                        <div class="parallax-image-content content-max-width text-align-center">
                            <div class="outer">
                                <div class="inner">
                                    <h3 class="no-bg yellow-text padding-x">Receive $125,000 as
                                        Funding and
                                        Incorporate your venture in Bangladesh and Singapore and
                                        Many More.</h3>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>

                <!-- Row -->
                <!--                                    <div class="content-row row_padding_bottom light-section change-header-color full"-->
                <!--                                        data-bgcolor="#fff">-->

                <!--                                        <div class="moving-gallery fw-gallery">-->
                <!--                                            <ul class="wrapper-gallery">-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio001.jpg">-->
                <!--                                                </li>-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio002.jpg">-->
                <!--                                                </li>-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio003.jpg">-->
                <!--                                                </li>-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio004.jpg">-->
                <!--                                                </li>-->
                <!--                                            </ul>-->
                <!--                                        </div>-->

                <!--                                        <div class="moving-gallery bw-gallery">-->
                <!--                                            <ul class="wrapper-gallery">-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio002.jpg">-->
                <!--                                                </li>-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio001.jpg">-->
                <!--                                                </li>-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio004.jpg">-->
                <!--                                                </li>-->
                <!--                                                <li>-->
                <!--                                                    <img src="images/studio003.jpg">-->
                <!--                                                </li>-->
                <!--                                            </ul>-->
                <!--                                        </div>-->

                <!--                                    </div>-->
                <!--/Row -->
            </div>
            <!--/Row -->


            <!-- Row -->
            <div class="content-row full light-section" data-bgcolor="#fff">

                <!-- Row -->
                <div class="content-row row_padding_top row_padding_bottom row_padding_left row_padding_right full light-section change-header-color"
                    data-bgcolor="#fff">

                    <h1 class="has-mask-fill no-margins">Venture</h1>
                    <h1 class="has-mask-fill">Building Process</h1>
                    <hr>
                    <hr>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row light-section change-header-color" data-bgcolor="#fff">

                    <div class="one_third vertical-parallax" data-startparallax="-0.1"
                        data-endparallax="0">
                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa-solid fa-dollar"></i>
                            </div>
                            <div class="box-icon-content">
                                <h4 class="no-margins">Pre-Seed Funding</h4>
                                <p>Up to $125,000 of Investment, Complete Investment Readiness
                                    Support & Deal Room Preparation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="one_third vertical-parallax" data-startparallax="0"
                        data-endparallax="0"></div>

                    <div class="one_third last vertical-parallax" data-startparallax="-0.5"
                        data-endparallax="0">
                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <div class="box-icon-content">
                                <h4 class="no-margins">Product Development</h4>
                                <p>Product Road Map, Minimal Viable Product (MVP), Testing and
                                    Evolve</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row row_padding_bottom row_padding_left row_padding_right full light-section change-header-color"
                    data-bgcolor="#fff">

                    <div class="marquee-text-wrapper">
                        <h1 class="marquee-text big-title bw">Scaling Bangladeshi Startups to Go
                            Global.</h1>
                    </div>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row row_padding_bottom light-section change-header-color"
                    data-bgcolor="#fff">

                    <div class="one_third vertical-parallax" data-startparallax="-0.4"
                        data-endparallax="-0.1">
                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa-solid fa-line-chart"></i>
                            </div>
                            <div class="box-icon-content">
                                <h4 class="no-margins">Market Traction and Scaling</h4>
                                <p>Market Behavior Analysis, Go-to-market strategy (GTM Strategy),
                                    Market Traction</p>
                            </div>
                        </div>
                    </div>

                    <div class="one_third vertical-parallax" data-startparallax="0"
                        data-endparallax="0"></div>

                    <div class="one_third last vertical-parallax" data-startparallax="-0.2"
                        data-endparallax="-0.1">
                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa-solid fa-usd"></i>
                            </div>
                            <div class="box-icon-content">
                                <h4 class="no-margins">Demo Day and Fundraising</h4>
                                <p>Demo Day in Singapore, Networking and Fundraising</p>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <hr>

                </div>
                <!--/Row -->

            </div>
            <!--/Row -->

        </div>
        <!--/Main Page Content -->

        <!-- Page Navigation -->
        <div id="page-nav">
            <div class="page-nav-wrap">
                <div class="page-nav-caption content-max-width block-title marquee-title1">
                    <div class="inner">
                        <div class="hero-arrow"><i class="arrow-icon"></i></div>
                        <div class="next-hero-subtitle"><span>Turn your Ideas into Reality </span>
                        </div>
                        <a class="page-title" target="_blank" data-firstline="Click"
                            data-secondline="Here" href="https://tally.so/r/wzEgzM">
                            <div class="next-hero-title-wrapper">
                                <div class="next-hero-title"><span>Apply Now</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/Page Navigation -->
    </div>
    <!--/Main Content -->
</div>
@endsection