@extends('frontend.layouts.app')


@section('content')
    <div class="main-wrapper">
        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-max-width parallax-scroll-caption block-title">
                    <div class="inner">
                        <div class="hero-arrow"><i class="arrow-icon"></i></div>
                        <h5 class="hero-subtitle"><span>Dear Founders & Funders,</span></h5>
                        <div class="hero-title-wrapper">
                            <h1 class="hero-title"><span>Ask Us </span><span>
                                    Anything!</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Hero Section -->


        <!-- Main Content -->
        <div id="main-content">
            <!-- Main Page Content -->
            <div id="main-page-content" class="content-max-width">



                <!-- Row -->
                <div class="content-row full light-section" data-bgcolor="#eee">

                    <!-- <div id="map_canvas"></div> -->
                    <div class="map_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=turtle%20venture%20dhaka&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row row_padding_top light-section" data-bgcolor="#fff">

                    <h6 class="has-icon">Let's Talk</h6>

                    <hr><br>

                    <h1 class="has-mask-fill no-margins contact-has-mask-fill">Get</h1>
                    <h1 class="has-mask-fill contact-has-mask-fill">In Touch</h1>

                    <hr><br>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row row_padding_bottom light-section" data-bgcolor="#fff">

                    <!-- Contact Formular -->
                    <div id="contact-formular" style="margin-top: 0 !important;">

                        <div id="message"></div>

                        <form method="post" action="contact.php" name="contactform" id="contactform">
                            <div class="name-box has-animation" data-delay="100">
                                <input name="name" type="text" id="name" size="30" value=""
                                    placeholder="What's Your Name"><label class="input_label"></label>
                            </div>
                            <div class="email-box has-animation" data-delay="150">
                                <input name="email" type="text" id="email" size="30" value=""
                                    placeholder="Your Email"><label class="input_label"></label>
                            </div>
                            <div class="message-box has-animation" data-delay="100">
                                <textarea name="comments" cols="40" rows="4" id="comments"
                                    placeholder="Tell Us About Your Project"></textarea><label
                                    class="input_label slow"></label>
                            </div>

                            <div class="button-box has-animation" data-delay="100">
                                <div class="clapat-button-wrap parallax-wrap">
                                    <div class="clapat-button parallax-element">
                                        <div class="button-border outline parallax-element-second contact-parallax-element-second">
                                            <input type="submit" class="send_message" id="submit"
                                                value="Submit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--/Contact Formular -->
                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row light-section" data-bgcolor="#fff">

                    <div class="one_third has-animation" data-delay="100">

                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h5 class="no-margins">Email</h5>
                                <a href="mailto:studio@turtleveture.com"
                                    class="link"><span>studio@turtleveture.com</span></a>
                                <a href="mailto:connect@turtleveture.com"
                                    class="link"><span>connect@turtleveture.com</span></a>
                            </div>
                        </div>

                    </div>

                    <div class="one_third has-animation" data-delay="200">

                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h5 class="no-margins">Singapore Office</h5>
                                <p>160 Robinson Road #24-09 Singapore (068914)</p>

                                <h5 class="no-margins">Bangladesh Office</h5>
                                <p>House-62,Road 3, Block B Niketan, Dhaka 1212</p>
                            </div>
                        </div>

                    </div>

                    <div class=" one_third last has-animation" data-delay="300">

                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h5 class="no-margins">01682-154204</h5>
                                <p>Phone</p>
                            </div>
                        </div>

                    </div>

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