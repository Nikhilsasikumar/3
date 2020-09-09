@extends("site.app")
@section("page_title")
<h1 class="text-white mb-0">SERVICES</h1>
<div class="custom-breadcrumb">
    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
        <li class="list-inline-item breadcrumb-item"><a href="/">HOME</a></li>
        <li class="list-inline-item breadcrumb-item active">SERVICES</li>
    </ol>
</div>
@endsection

@section("page_content")
<section class="promo-block ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="single-promo-block promo-hover-bg-1 hover-image shadow-lg p-5 rounded">
                    <div class="promo-block-icon mb-3">
                        <span class="ti-vector icon-md color-primary"></span>
                    </div>
                    <div class="promo-block-content">
                        <h5>Creative Design</h5>
                        <p>Compellingly promote collaborative products without synergistic schemas. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-promo-block promo-hover-bg-2 hover-image shadow-lg p-5 rounded">
                    <div class="promo-block-icon mb-3">
                        <span class="ti-lock icon-md color-primary"></span>
                    </div>
                    <div class="promo-block-content">
                        <h5>Cyber Security</h5>
                        <p>Enthusiastically scale mission-critical imperatives rather than an expanded array.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-promo-block promo-hover-bg-3 hover-image shadow-lg p-5 rounded">
                    <div class="promo-block-icon mb-3">
                        <span class="ti-cloud icon-md color-primary"></span>
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
<!--promo block with hover effect end-->

<!--services section start-->
<section class="services-section ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-heading text-center mb-4">
                    <h2>First Class Business Solutions for You</h2>
                    <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                        foster tactical solutions without enabled value.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($service as $ser)
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                    <div class="service-icon mr-4">
                        <span class="ti-briefcase icon-md color-secondary"></span>
                    </div>
                    <div class="services-content-wrap">
                        <h5>{{$ser->service_name}}</h5>
                        <p class="mb-0">{{$ser->service_disc}}</p>
                        <a href="service/{{$ser->id}}" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
<!--services section end-->

<!--testimonial section start-->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading mb-5 text-center">
                    <h2>Look What Our Clients Say</h2>
                    <p class="lead">
                        Rapidiously morph transparent  Conveniently innovate compelling internal.
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-heading text-center mb-5">
                    <h5><a href="/services">Our Partners</a></h5>
                  
                </div>
            </div>
        </div>
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