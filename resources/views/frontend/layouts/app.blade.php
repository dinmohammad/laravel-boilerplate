<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="UTF-8" />
       <title>{{ config('app.name') }}</title>
       <meta name="title" content="Fostering Bangladeshi Startups Go Global | Turtle Venture Studio " />
       <meta name="description"
           content="We are Bangladesh’s first venture studio, which combines both the venture capital and accelerator model, wants to focus on helping early-stage startups by providing them with finance and training." />
       <meta name="keywords"
           content="Startups, Bangladesh, Venture Studio, Best Startup Venture Studio, Turtle Venture Studio" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <meta name="author" content="Turtle Venture Studio" />
       <meta property="og:type" content="page" />
       <meta property="og:title" content="Fostering Bangladeshi Startups Go Global | Turtle Venture Studio" />
       <meta property="og:description"
           content="We are Bangladesh’s first venture studio, which combines both the venture capital and accelerator model, wants to focus on helping early-stage startups by providing them with finance and training." />
       <meta name="twitter:card" content="turtle_venture_studio" />
       <meta name="twitter:title" content="Fostering Bangladeshi Startups Go Global | Turtle Venture Studio" />
       <meta name="twitter:description"
           content="We are Bangladesh’s first venture studio, which combines both the venture capital and accelerator model, wants to focus on helping early-stage startups by providing them with finance and training." />
       <meta name="twitter:image" content="https://turtleventure.studio/images/meta.png" />
       <meta property="og:image" content="https://turtleventure.studio/images/meta.png" />
       <meta property="og:image:width" content="1200" />
       <meta property="og:image:height" content="630" />
       <meta name="brand_name" content="Turtle Venture Studio" />
       <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
       <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
       <link href="{{ asset('css/all.min.css')}}" rel="stylesheet" />
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
       <!-- Google tag (gtag.js) -->
       <script async src="https://www.googletagmanager.com/gtag/js?id=G-7K0LPMBLDF"></script>
       <script>
           window.dataLayer = window.dataLayer || [];
           function gtag(){dataLayer.push(arguments);}
           gtag('js', new Date());

           gtag('config', 'G-7K0LPMBLDF');
       </script>

       @yield('styles')
   </head>
   <body class="hidden hidden-ball smooth-scroll" data-primary-color="#f6be00">


        <main>
            <!-- Preloader -->
            <div class="preloader-wrap" data-firstline="Stay" data-secondline="Relaxed">
                <div class="outer">
                    <div class="inner">
                        <div class="trackbar">
                            <ul class="preloader-intro">
                                <li class="preloader-list">collab</li>
                                <li class="preloader-list">innovate</li>
                                <li class="preloader-list">transform</li>
                            </ul>
                            <div class="loadbar"></div>
                        </div>
                        <div class="percentage-wrapper">
                            <div class="percentage" id="precent"></div>
                        </div>
                        <div class="percentage-intro">Please Wait</div>
                    </div>
                </div>
            </div>
            <!--/Preloader -->

            <div class="cd-index cd-main-content">
                <!-- Page Content -->
                <div id="page-content" class="light-content" data-bgcolor="#171717">
                    <!-- Header -->
                    @include('frontend.includes.header')
                    <!--/Header -->

                    <!-- Content Scroll -->
                    <div id="content-scroll">
                        <!-- Main -->
                        <div id="main">
                            @yield('content')
                        </div>
                        <!--/Main -->

                        <!-- Footer -->
                        @include('frontend.includes.footer')
                        <!--/Footer -->
                    </div>
                    <!--/Content Scroll -->

                    <div id="app"></div>
                </div>
                <!--/Page Content -->
            </div>
        </main>

        <!--cd cover layer START -->
        <div class="cd-cover-layer"></div>
        <div id="magic-cursor">
            <div id="ball">
                <div id="ball-drag-x"></div>
                <div id="ball-drag-y"></div>
                <div id="ball-loader"></div>
            </div>
        </div>
        <div id="clone-image">
            <div class="hero-translate"></div>
        </div>
        <div id="rotate-device"></div>
        <!--/cd cover layer END -->


        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/Draggable.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/EasePack.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js'></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&sensor=false"></script>
        <script src="{{ asset('js/clapatwebgl.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/common.js') }}"></script>
        <script src="{{ asset('js/contact.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

       @yield('scripts')
   </body>
</html>
