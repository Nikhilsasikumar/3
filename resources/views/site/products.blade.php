@extends("site.app")
@section("page_title")
<h1 class="text-white mb-0">Products</h1>
<div class="custom-breadcrumb">
    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
        <li class="list-inline-item breadcrumb-item"><a href="/">Home</a></li>
        <li class="list-inline-item breadcrumb-item active">Products</li>
    </ol>
</div>
@endsection

@section("page_content")
<!--our work or portfolio section start-->
<section class="our-portfolio-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>Check Our Quality Work</h2>
                    <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
                        develop end-to-end customer service without extensive data.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center pb-2">
                    <button type="button" class="filter-btn" data-mixitup-control data-filter="all">All</button>
                    <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">Branding</button>
                    <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">Animation</button>
                    <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">Others</button>
                </div>
                <div class="portfolio-container" id="MixItUp">
                    @foreach($product as $pro)
                    <div class="mix portfolio-item branding" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="product/{{$pro->id}}">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="img/portfolios/3.jpg" alt="portfolio" />
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">{{$pro->product_name}}</h5>
                                    <p>Design</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <div class="mix portfolio-item other animation" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="project-details.html" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="img/portfolios/2.jpg" alt="portfolio" />
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                    <p>Web, Design</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item animation" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="project-details.html" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="img/portfolios/4.jpg" alt="portfolio" />
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                                    <p>Flyer Design</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item branding" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="project-details.html" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="img/portfolios/1.jpg" alt="portfolio" />
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                    <p>Web, Design</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item animation other" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="project-details.html" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="img/portfolios/5.jpg" alt="portfolio" />
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Wall Painting Design</h5>
                                    <p>Painting Design</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item branding " data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="project-details.html" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="img/portfolios/6.jpg" alt="portfolio" />
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                    <p>Corporate Design</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div class="gap"></div>
                    <div class="gap"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our work or portfolio section end-->


<!--counter section start-->
<section class="call-to-action ptb-100 gradient-overlay" style="background: url('img/slider-img-3.jpg')no-repeat top center / cover fixed">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="call-to-action-content text-white">
                    <h2 class="text-white mb-1">Looking for Quality Services ?</h2>
                    <p>Progressively deliver market-driven quality vectors rather than goal-oriented niche markets.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-btn text-lg-right text-sm-left">
                    <a href="#" class="btn outline-white-btn">Contact us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--counter section end-->


<!--testimonial section start-->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading mb-5 text-center">
                    <h2>Testimonials What Clients Say</h2>
                    <p class="lead">
                        Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                        e-business. Conveniently innovate compelling internal.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">
                    <div class="item">
                        <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                            <blockquote>
                                Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                            </blockquote>
                            <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                <div class="d-flex align-items-center">
                                    <img src="img/client-1.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" />
                                    <div class="client-info">
                                        <h5 class="mb-0">Austin Cesar</h5>
                                        <small class="mb-0">Team Leader</small>
                                    </div>
                                </div>
                                <div class="client-ratting">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                    </ul>
                                    <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                            <blockquote>
                                Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                            </blockquote>
                            <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                <div class="d-flex align-items-center">
                                    <img src="img/client-2.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" />
                                    <div class="client-info">
                                        <h5 class="mb-0">Pirtle Karol</h5>
                                        <small class="mb-0">Team Leader</small>
                                    </div>
                                </div>
                                <div class="client-ratting">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                    </ul>
                                    <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                            <blockquote>
                                Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.
                            </blockquote>
                            <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                <div class="d-flex align-items-center">
                                    <img src="img/client-3.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" />
                                    <div class="client-info">
                                        <h5 class="mb-0">Joe Pirtle</h5>
                                        <small class="mb-0">Marketing Head</small>
                                    </div>
                                </div>
                                <div class="client-ratting">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                    </ul>
                                    <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                            <blockquote>
                                Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                            </blockquote>
                            <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                <div class="d-flex align-items-center">
                                    <img src="img/client-4.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" />
                                    <div class="client-info">
                                        <h5 class="mb-0">Kaly Dash</h5>
                                        <small class="mb-0">Marketing Manager</small>
                                    </div>
                                </div>
                                <div class="client-ratting">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                    </ul>
                                    <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial section end-->


<!--client section start-->
<div class="client-section ptb-100 gray-light-bg">
    <div class="container">
        <!--clients logo start-->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                    <div class="item single-client">
                        <img src="img/clients-logo-01.png" alt="client logo" class="client-img">
                    </div>
                    <div class="item single-client">
                        <img src="img/clients-logo-02.png" alt="client logo" class="client-img">
                    </div>
                    <div class="item single-client">
                        <img src="img/clients-logo-03.png" alt="client logo" class="client-img">
                    </div>
                    <div class="item single-client">
                        <img src="img/clients-logo-04.png" alt="client logo" class="client-img">
                    </div>
                    <div class="item single-client">
                        <img src="img/clients-logo-05.png" alt="client logo" class="client-img">
                    </div>
                    <div class="item single-client">
                        <img src="img/clients-logo-06.png" alt="client logo" class="client-img">
                    </div>
                    <div class="item single-client">
                        <img src="img/clients-logo-07.png" alt="client logo" class="client-img">
                    </div>
                    <div class="item single-client">
                        <img src="img/clients-logo-08.png" alt="client logo" class="client-img">
                    </div>
                </div>
            </div>
        </div>
        <!--clients logo end-->
    </div>
</div>
<!--client section start-->
@endsection