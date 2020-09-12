@extends("site.app")
@section("seo_title",$service->service_name)
@section("page_title")
<h1 class="text-white mb-0">{{$service->service_name}}</h1>
@endsection

@section("page_content")
<!--services details start-->
<section class="service-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="service-details-wrap">
                <img src="/storage/service_photos/{{$service->service_photo}}" alt="{{$service->service_name}}" class="img-fluid rounded shadow-sm" />
                    <div class="services-detail-content mt-4">
                        <h4>Service Details</h4>
                        {{$service->service_disc}}


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sidebar-right pl-4">
                    <!--need help-->


                    <!-- Subscribe widget-->
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h5>Need Help?</h5>
                        </div>
                        <p>Fill your details below, our agent will contact you shorty</p>
                        <form action="/services/enquery" method="post">
                            @csrf
                            <input type="hidden" id="ser_cate" name="ser_cate" value="{{$service->id}}" placeholder="service">
                            <input type="hidden" id="service" name="service" value="{{$service->service_cate}}" placeholder="service">
                            <div class="form-group">
                                <input type="text" class="form-control input" id="fullname" name="fullname" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input" id="phone" name="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input" id="place" name="place" placeholder="Place" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input" id="district" name="district" placeholder="District" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Submit
                            </button>
                        </form>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
<!--services details end-->

<!--call to action section start-->
<section class="call-to-action py-5 gray-light-bg">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-md-7">
                <div class="subscribe-content">
                    <h3 class="mb-1">Consulting Agency for Your Business</h3>
                    <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-btn text-lg-right text-sm-left">
                    <a href="#" class="btn secondary-solid-btn">Become a Client</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action section end-->

@endsection