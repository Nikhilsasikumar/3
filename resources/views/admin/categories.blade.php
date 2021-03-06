@extends("admin.app")

@section("page_title")
<li class="breadcrumb-item">
    <a href="/admins" class="text-muted">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="#" class="text-muted">Categories</a>
</li>
@endsection

@section("page_content")

<!--begin::Row-->
<div class="row">
    @if(count($category)>0)
    @foreach($category as $ser)
    <div class="col-lg-6 col-xl-4 mb-5">
        <!--begin::Iconbox-->
        <div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
            <div class="card-body">
                <div class="d-flex align-items-center p-5">
                    <div class="mr-6">
                        <span class="svg-icon svg-icon-danger svg-icon-4x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
                                    <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3 " >{{$ser->cate_name}}</a>
                    </div>
                </div>
                <div class="example mt-2">
                    <div class="example-tools">
                        <span class="example-toggle editeCategory" id="{{$ser->id}}" data-toggle="tooltip" title="Edite"></span>
                        
                        <form method="post" action="/admin/categories/{{$ser->id}}">
                            @csrf
                            @method('DELETE')
                        <button onclick="return confirm('Are you sure')"  class=" deleteCategory btn" type="submite"  data-toggle="tooltip" title="Delete">D</button>
                    </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    @endforeach
    @else
    <h1>No Category Listed</h1>
    @endif
</div>

<!--New Service Modal-->
<div class="modal fade" id="NewProviderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-title align-items-start flex-column">
                    <h3 class="card-label font-weight-bolder text-dark">
                        New Category
                    </h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1">List New Category to your database</span>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="/admin/categories">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                                <h5 class="font-weight-bold mb-6">Category Info
                                </h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Category Name</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                <input class="form-control form-control-lg form-control-solid"  type="text" value="" placeholder="Marketing" name="cate_name" required />
                                </div>
                                <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submite" class="btn btn-primary font-weight-bold">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--Edite Service Modal-->
<div class="modal fade" id="EditeProviderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-title align-items-start flex-column">
                    <h3 class="card-label font-weight-bolder text-dark">
                        New Category
                    </h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1">List New Category to your database</span>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" id="editform" method="post" action="">
                    @csrf
                    @method("PUT")
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                                <h5 class="font-weight-bold mb-6">Category Info
                                </h5>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Category Name</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                <input class="form-control form-control-lg form-control-solid" id="cate_name" type="text" value="" placeholder="Marketing" name="cate_name" required />
                                </div>
                                <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submite" class="btn btn-primary font-weight-bold">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section("page_nav")
<a href="/admin/providers" class="btn btn-light-danger btn-sm font-weight-bold mr-2">
    Back
</a>
<a href="#" class="btn btn-primary font-weight-bolder" data-target="#NewProviderModal" data-toggle="modal">Category</a>
@endsection
@section("footer_script")

<script>
    $(document).ready(function() {
        $(document).on('click', '.editeCategory', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: "/admin/categories/" + id + "/edit",
                dataType: "json",
                success: function(html) {
                    $('#cate_name').val(html.data.cate_name);
                    $('#editform').attr('action', '/admin/categories/' + html.data.id);
                    $('#EditeProviderModal').modal('show');
                }
            })
        });

    });

</script>
@endsection
