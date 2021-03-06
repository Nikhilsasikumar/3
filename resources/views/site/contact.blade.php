@extends("site.app")
@section("seo_title","Contact Us | Our Phone number $siteinfo->phone and email $siteinfo->email ")
@section("page_title")
<h1 class="text-white mb-0">Contact Us</h1>
<div class="custom-breadcrumb">
    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
        <li class="list-inline-item breadcrumb-item"><a href="/">Home</a></li>
        <li class="list-inline-item breadcrumb-item active">Contact Us</li>
    </ol>
</div>
@endsection

@section("page_content")
<!--contact us promo start-->
<section class="contact-us-promo pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                    <div class="card-body py-5">
                        <div class="pb-2">
                            <span class="ti-mobile icon-sm color-secondary"></span>
                        </div>
                        <div><a href="tel:{{$siteinfo->phone}}">
                            <h5 class="mb-0">Call Us</h5>
                            <p class="text-muted mb-0">{{$siteinfo->phone}}</p></a>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                    <div class="card-body py-5">
                        <div class="pb-2">
                            <span class="ti-email icon-sm color-secondary"></span>
                        </div>
                        <div><a href="mailto:{{$siteinfo->email}}">
                            <h5 class="mb-0">Mail Us</h5>
                            <p class="text-muted mb-0">{{$siteinfo->email}}</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                    <div class="card-body py-5">
                        <div class="pb-2">
                            <span class="ti-headphone-alt icon-sm color-secondary"></span>
                        </div>
                        <div>
                            <h5 class="mb-0">WhatsApp</h5>
                            <p class="text-muted mb-0">{{$siteinfo->whatsapp}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact us promo end-->

<!--contact us section start-->
<section class="contact-us-section ptb-100">
    <div class="container contact">
        <div class="col-12 pb-3 message-box d-none">
            <div class="alert alert-danger"></div>
        </div>
        <div class="row justify-content-around">
            <div class="col-md-6">
                <div class="contact-us-form gray-light-bg rounded p-5">
                    <h4>Ready to get started?</h4>
                    <form action="#" method="POST" id="contactForm" class="contact-us-form">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-us-content">
                    <h2>Looking for a excellent Business idea?</h2>
                    <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                    <a href="{{$siteinfo->mapdirection}}" target="_blank"class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                    <hr class="my-5">

                    <h5>Our Headquarters</h5>
                    <address>
                        {{$siteinfo->address1}} <br>
                       {{$siteinfo->address2}}
                    </address>
                    <br>
                    <span>Phone:<a href="tel:{{$siteinfo->phone}}"> {{$siteinfo->phone}}</a></span> <br>
                    <span>Email: <a href="mailto:{{$siteinfo->email}}" class="link-color">{{$siteinfo->email}}</a></span>

                </div>
            </div>
        </div>
    </div>
</section>
<!--contact us section end-->

<!--google map block start-->
<div class="google-map">
    <iframe src="{{$siteinfo->map}}" height="450" style="border:0;" allowfullscreen=""></iframe>
</div>

<!--google map block end-->
@endsection