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
                        <span class="ti-announcement icon-md color-secondary"></span>
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