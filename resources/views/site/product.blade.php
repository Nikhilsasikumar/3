@extends("site.app")
@section("page_title")
<h1 class="text-white mb-0">Product</h1>
<div class="custom-breadcrumb">
    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
        <li class="list-inline-item breadcrumb-item"><a href="/">Home</a></li>
        <li class="list-inline-item breadcrumb-item active">Products</li>
        <li class="list-inline-item breadcrumb-item active">Product</li>
    </ol>
</div>
@endsection

@section("page_content")
<!--project details section start-->
<section class="project-details-section ptb-100">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-12 col-lg-8">
                <div class="img-wrap mb-md-4 mb-lg-0">
                    <img src="/img/hero-bg7.jpg" alt="project" class="img-fluid rounded shadow-sm" />
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <!--all services list-->
                <aside class="widget widget-categories">
                    <div class="widget-title">
                        <h5>All Services</h5>
                    </div>
                    <ul class="all-service-list">
                        <li><a href="#">Financial Services Consulting</a></li>
                        <li><a href="#">Consumer Product Consulting</a></li>
                        <li><a href="#">Global Consumer insights</a></li>
                        <li><a href="#">Independent contractor</a></li>
                        <li><a href="#">Creative Idea Development</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                    </ul>
                </aside>
            </div>
        </div>

        <!--project details row start-->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="project-details-content">
                    <h5>Project Description</h5>
                    <p>Synergistically syndicate frictionless architectures via global e-services. Assertively
                        pontificate adaptive e-tailers rather than cross-unit results. Assertively engineer top-line
                        portals through one-to-one growth strategies. Efficiently.</p>
                    <p>Proactively reinvent standards compliant applications before timely ROI. Uniquely negotiate
                        installed base results rather than resource-leveling e-markets. Continually plagiarize
                        magnetic technologies vis-a-vis synergistic infomediaries. Globally communicate progressive
                        users without resource maximizing growth strategies. Objectively evolve enterprise.</p>
                    <p>Collaboratively conceptualize flexible best practices via cooperative methodologies. Assertively negotiate an expanded array of alignments with 24/365 "outside the box" thinking. Assertively enable fully researched vortals rather than alternative niche markets.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="project-details-feature">
                    <ul class="list-unstyled tech-feature-list">
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Foreclosure</strong>
                            consultant Human resource consulting
                        </li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                            Immigration consultant, Information consulting
                        </li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>SEO</strong> Optimization Creative consultant</li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Rapidiously</strong> conceptualize strategic before communities</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="project-details-feature">
                    <ul class="list-unstyled tech-feature-list">
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong>
                            pharmacist Creative consultant
                        </li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Monotonectally</strong>
                            customize B2B core competencies
                        </li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Immigration</strong> consultant, Information consulting</li>
                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong> pharmacist Creative consultant</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--project details row end-->
    </div>
</section>
<!--project details section end-->

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