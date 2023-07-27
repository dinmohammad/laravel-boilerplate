@extends('frontend.layouts.app')


@section('content')
    <div class="main-wrapper">
        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-max-width parallax-onscroll">
                    <div class="inner">
                        <div class="hero-arrow"><i class="arrow-icon"></i></div>
                        <h5 class="hero-subtitle"><span>Learn about our advisors</span></h5>
                        <div class="hero-title-wrapper">
                            <h1 class="hero-title">
                                Advisors<span> & Mentors</span>
                            </h1>
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
                <div class="content-row light-section">
                    <div class="our-team-wrapper">
                        <div class="row" id="advisor-div">
                           
<!-- 
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class="single-people-wrap">
                                    <div class="single-people-img overflow-hidden">
                                        <img
                                            class="bd-placeholder-img card-img-top" width="100%" height="200"
                                            src="./images/razy.jpeg"
                                        />
                                    </div>

                                    <div class="single-people-body py-2 px-2">
                                        <h5 class="card-title">Razy Shah</h5>
                                        <span>
                                            Entrepreneur, <br/>
                                            INDEPENDENT ANGEL INVESTOR, <br/>
                                            MARKETING ADVISOR
                                        </span>
                                        <ul class="our-team-social-wrap d-flex gap-2">
                                            <li>
                                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            


                            </div> -->

                            <!-- <div class="col-sm-6 col-lg-4 mb-4">
                                <div class="single-people-wrap">
                                    <div class="single-people-img overflow-hidden">
                                        <img
                                            class="bd-placeholder-img card-img-top" width="100%" height="200"
                                            src="./images/rashed.jpeg"
                                        />
                                    </div>

                                    <div class="single-people-body py-2 px-2">
                                        <h5 class="card-title">Mustafa Rasheed</h5>
                                        <span>
                                            Angel Investor, <br/>
                                            ADVISORY BOARD MEMBER, <br/>
                                            STARTUP ECOSYSTEM PROFESSIONAL
                                        </span>
                                        <ul class="our-team-social-wrap d-flex gap-2">
                                            <li>
                                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            </div> -->

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




@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        $(document).ready(function() {
            const bearerToken = '4a0bb387952ba2e6f961f724327477031f038503a54548724bf44870cfa973e137387e93546487a4d359d7e2deef2982299118cae8eafbc9625a08c99134e268b66372b3bcb283b98fe8b4e67f1178f895e460b12ea63884bdaadc767ec0066fab3e00e43061a79fb4e25787c61b4267a4442ebf78e562e32233ac718da1023d';
            const baseUrl = 'http://localhost:1337'
            const apiUrl = `${baseUrl}/api/teams?populate=*&filters[type]=advaisor`;

            axios({
                method: 'GET', // Replace with the HTTP method you need (GET, POST, PUT, DELETE, etc.)
                url: apiUrl,
                data: {},
                headers: {
                    'Authorization': `Bearer ${bearerToken}`,
                    'Content-Type': 'application/json', 
                },
            })
            .then(response => {
                var advisorDataArray = response.data.data;
                $('#advisor-div').empty();

                for (var i = 0; i < advisorDataArray.length; i++) {
                    var advisorData = advisorDataArray[i];
                    console.log('advisorData:', advisorData);

                    var advisorDataHTML = `
                        <div class="col-sm-6 col-lg-4 mb-4">
                            <div class="single-people-wrap">
                                <div class="single-people-img overflow-hidden">
                                    <img
                                        class="bd-placeholder-img card-img-top" width="100%" height="200"
                                        src="${baseUrl}${advisorData.attributes.photo.data.attributes.url}"
                                    />
                                </div>

                                <div class="single-people-body py-2 px-2">
                                    <h5 class="card-title">${advisorData.attributes.name}</h5>
                                    <span>${advisorData.attributes.designation}</span>
                                    <ul class="our-team-social-wrap d-flex gap-2">
                                        <li>
                                            <a href="${advisorData.attributes.facebook}"><i class="fa-brands fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="${advisorData.attributes.linkedin}"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    `;
                    $('#advisor-div').append(advisorDataHTML);
                }

                
            })
            .catch(error => {
                console.error('Request failed:', error.response);
            });

        });
    </script>

@endsection