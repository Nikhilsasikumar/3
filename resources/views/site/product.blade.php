@extends("site.app")
@section("page_title")
<h1 class="text-white mb-0">{{$product->product_name}}</h1>
<!-- <div class="custom-breadcrumb">
    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
        <li class="list-inline-item breadcrumb-item"><a href="/">Home</a></li>
        <li class="list-inline-item breadcrumb-item active">Products</li>
        <li class="list-inline-item breadcrumb-item active">Product</li>
    </ol>
</div> -->
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
                        <h5>Product Details</h5>
                    </div>
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
                </aside>
            </div>
        </div>

        <!--project details row start-->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="project-details-content">
                    <h5>Product Description</h5>
                    <p>{{$product->product_disc}}</p>

                </div>
            </div>
        </div>

        <div class="align-items-center justify-content-center col-md-6">

            <div class="widget-title">
                <br>
                <h5>Need Help?</h5>
            </div>
            <p>Fill your details below, our agent will contact you shorty</p>
            <form action="/product/enquery" method="post">
                @csrf
                <input type="hidden" id="product" name="product" value="2" placeholder="service">
                <div class="form-group">
                    <input type="text" class="form-control input" id="fullname" name="fullname" placeholder="Full Name" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input" id="phone" name="phone" placeholder="Phone Number" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input" id="place" name="place" placeholder="Place" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input" id="district" name="district" placeholder="District" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input" id="qty" name="qty" placeholder="Required Quantity" required="">
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Submit
                </button>
            </form>

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