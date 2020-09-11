@extends("site.app")
@section("page_title")
<h1 class="text-white mb-0">About Us</h1>
<div class="custom-breadcrumb">
    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
        <li class="list-inline-item breadcrumb-item"><a href="/">Home</a></li>
        <li class="list-inline-item breadcrumb-item active">About Us</li>
    </ol>
</div>
@endsection

@section("page_content")

<!--promo section start-->
<section class="promo-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                    <div class="promo-block-icon mr-4">
                        <span class="fas fa-brain icon-md color-primary"></span>
                    </div>
                    <div class="promo-block-content">
                        <h5>Cyber Security</h5>
                        <p>Enthusiastically scale mission-critical imperatives rather than an expanded array.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                    <div class="promo-block-icon mr-4">
                        <span class="fas fa-bezier-curve icon-md color-primary"></span>
                    </div>
                    <div class="promo-block-content">
                        <h5>Creative Design</h5>
                        <p>Compellingly promote collaborative products without synergistic schemas. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                    <div class="promo-block-icon mr-4">
                        <span class="fas fa-life-ring icon-md color-primary"></span>
                    </div>
                    <div class="promo-block-content">
                        <h5>Cloud Services</h5>
                        <p>Rapidiously create cooperative resources rather than client-based leadership skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--promo section end-->

<!--about us section start-->
<section class="about-us-section ptb-100">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-12 col-lg-5">
                <div class="video-promo-content mb-md-4 mb-lg-0">
                    <h2>Our Mission & Vission</h2>
                    <p>Interactively develop timely niche markets before extensive imperatives. Professionally
                        repurpose interoperable growth strategies before effective core competencies.</p>
                    <ul class="list-unstyled tech-feature-list">
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Cost</strong>
                            Accounting Fundamentals
                        </li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                            Cash Management
                        </li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                    </ul>
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="counter-single">
                                <h4 class="mb-0 color-secondary">4566</h4>
                                <strong>Total Project</strong>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="counter-single">
                                <h4 class="mb-0 color-secondary">25002</h4>
                                <strong>Total Customer</strong>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="counter-single">
                                <h4 class="mb-0 color-secondary">4566</h4>
                                <strong>Total Project</strong>
                            </div>
                        </div>
                    </div>
                    <div class="action-btns mt-4">
                        <a href="/services" class="btn primary-solid-btn mr-2"> Our Services</a>
                        <a href="/products" class="btn secondary-solid-btn mr-2">Our Products</a>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card border-0 shadow-sm text-white">
                    <img src="img/about-1.jpg" alt="video" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </div>
</section>
<!--about us section end-->

<!--our work process section start-->
<section class="work-process-new ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>We Deliver Our Services Few Process</h2>
                    <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                        disseminate outsourcing through revolutionary.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="work-process-wrap text-center">
                    <div class="single-work-process">
                        <div class="work-process-icon-wrap secondary-bg rounded-circle">
                            <i class="ti-vector icon-md text-white"></i>
                            <span class="process-step primary-bg text-white shadow-sm">1</span>
                        </div>
                        <div class="work-process-content mt-4">
                            <h5>Generate Ideas</h5>
                            <p>Compellingly harness reliable methodologies and web services. </p>
                        </div>
                    </div>
                    <div class="single-work-process">
                        <div class="work-process-icon-wrap secondary-bg rounded-circle">
                            <i class="ti-layout-list-thumb icon-md text-white"></i>
                            <span class="process-step primary-bg text-white shadow-sm">2</span>
                        </div>
                        <div class="work-process-content mt-4">
                            <h5>Collect Contents</h5>
                            <p>Proactively pursue high-quality cooperative applications. </p>
                        </div>
                    </div>
                    <div class="single-work-process">
                        <div class="work-process-icon-wrap secondary-bg rounded-circle">
                            <i class="ti-palette icon-md text-white"></i>
                            <span class="process-step primary-bg text-white shadow-sm">3</span>
                        </div>
                        <div class="work-process-content mt-4">
                            <h5>Create Design</h5>
                            <p>Continually exploit worldwide products maximizing alignments. </p>
                        </div>
                    </div>
                    <div class="single-work-process">
                        <div class="work-process-icon-wrap secondary-bg rounded-circle">
                            <i class="ti-cup icon-md text-white"></i>
                            <span class="process-step primary-bg text-white shadow-sm">4</span>
                        </div>
                        <div class="work-process-content mt-4">
                            <h5>Launch Project</h5>
                            <p>Dramatically exploit strategic innovation market-driven schemas. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our work process section end-->


<!--testimonial section start-->
<section class="testimonial-section ptb-100 gray-light-bg">
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
                        <div class="testimonial-single shadow-sm white-bg rounded p-4">
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
                        <div class="testimonial-single shadow-sm white-bg rounded p-4">
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
                        <div class="testimonial-single shadow-sm white-bg rounded p-4">
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
                        <div class="testimonial-single shadow-sm white-bg rounded p-4">
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
<div class="client-section ptb-100">
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