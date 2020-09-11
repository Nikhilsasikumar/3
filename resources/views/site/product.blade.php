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
<!--services details start-->
<section class="service-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="service-details-wrap">
                <img src="/storage/product_photos/{{$product->product_photo}}" alt="{{$product->product_name}}" class="img-fluid rounded shadow-sm" />
                    <div class="services-detail-content mt-4">
                        <h4>Product Details</h4>
                        <p>{{$product->product_disc}}</p>

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
                        <form action="/product/enquery" method="post">
                            @csrf
                            <input type="hidden" id="product" name="product" value="{{$product->product_cate}}" placeholder="service">
                            <input type="hidden" type="hidden" id="pro_cate" name="pro_cate" value="{{$product->id}}" placeholder="service">
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
                                <input type="text" class="form-control input" id="qty" name="qty" placeholder="Required Quantity" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Submit
                            </button>
                        </form>
                    </aside>
                    <aside class="widget widget-recent-entries-custom">
                            <div class="widget-title">
                                <h6>Related Products</h6>
                            </div>
                            <ul>
                            @foreach($products as $prod)
                                <li class="clearfix">
                                    <div class="wi"><a href="/product/{{$prod->id}}"><img src="/storage/product_photos/{{$prod->product_photo}}" alt="recent post" class="img-fluid rounded"></a></div>
                                    <div class="wb"><strong >{{$prod->product_name}}</strong><a href="/product/{{$prod->id}}">{{$product->product_disc}}</a></div>
                                </li>
                                @endforeach
                                
                            </ul>
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