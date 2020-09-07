@extends("site.app")
@section("page_title")
<h1 class="text-white mb-0">{{$service->service_name}}</h1>
<!-- <div class="custom-breadcrumb">
    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
        <li class="list-inline-item breadcrumb-item"><a href="/">HOME</a></li>
        <li class="list-inline-item breadcrumb-item active">SERVICES</li>
        <li class="list-inline-item breadcrumb-item active">SERVICE</li>
    </ol>
</div> -->
@endsection

@section("page_content")
<!--services details start-->
<section class="service-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="service-details-wrap">
                    <img src="/img/slider-img-2.jpg" alt="services" class="img-fluid rounded shadow-sm" />
                    <div class="services-detail-content mt-4">
                        <h4>Services Details</h4>
                        <p>{{$service->service_disc}}</p>

                        <p>Seamlessly coordinate high-quality functionalities and bricks-and-clicks methods of
                            empowerment. Authoritatively cultivate adaptive bandwidth and collaborative intellectual
                            capital. Uniquely build open-source experiences without market positioning customer
                            service. Dramatically strategize resource sucking outsourcing through state of the art
                            vortals. Quickly aggregate enterprise portals with cross-platform e-business.</p>
                        <ul class="list-unstyled tech-feature-list mb-3">
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Foreclosure</strong>
                                consultant Human consulting
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                                Immigration, Information
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>SEO</strong> Optimization consultant</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Rapidiously</strong> conceptualize communities</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong>
                                pharmacist Creative consultant
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Monotonectally</strong>
                                customize B2B core competencies
                            </li>
                        </ul>

                        <p>Enthusiastically matrix future-proof internal or "organic" sources through covalent
                            communities. Synergistically incubate reliable metrics whereas client-focused
                            technologies. Completely embrace multifunctional scenarios without orthogonal benefits.
                            Competently enhance equity invested data with performance based niches. Assertively
                            aggregate professional catalysts for change metrics.</p>

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
                            <input type="hidden" id="district" name="service" value="{{$service->id}}" placeholder="service">
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