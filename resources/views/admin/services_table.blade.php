@extends("admin.app")

@section("page_title")
<li class="breadcrumb-item">
    <a href="/admin/index" class="text-muted">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="/admin/services" class="text-muted">Services</a>
</li>
<li class="breadcrumb-item">
    <a href="#" class="text-muted">Services Table</a>
</li>
@endsection

@section("page_content")






<!--begin::Card-->
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-favourite text-primary"></i>
            </span>
            <h3 class="card-label">HTML(DOM) Sourced Data</h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline mr-2">
                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-download"></i>Export</button>
                <!--begin::Dropdown Menu-->
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <ul class="nav flex-column nav-hover">
                        <li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">
                            Choose an option:</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon la la-print"></i>
                                <span class="nav-text">Print</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon la la-copy"></i>
                                <span class="nav-text">Copy</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon la la-file-excel-o"></i>
                                <span class="nav-text">Excel</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon la la-file-text-o"></i>
                                <span class="nav-text">CSV</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon la la-file-pdf-o"></i>
                                <span class="nav-text">PDF</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--end::Dropdown Menu-->
            </div>
            <!--end::Dropdown-->
            <!--begin::Button-->
            <a href="#" class="btn btn-primary font-weight-bolder" data-target="#NewServiceModal" data-toggle="modal">
                <i class="la la-plus"></i>New Record</a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
            <thead>
                <tr>
                    <th>Service Name</th>
                    <th>Category</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($service as $ser)
                <tr>
                    <td>{{$ser->service_name}}</td>
                    <td>{{$ser->service_cate}}</td>
                    <td>{{$ser->service_photo}}</td>
                    <td>{{$ser->service_disc}}</td>
                    <td><a href="javascript:;" class="btn btn-sm btn-clean btn-icon EditeService" id="{{$ser->id}}" title="Edit details">
                            <i class="la la-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon DeleteService" id="{{$ser->id}}" title="Delete">
                            <i class="la la-trash"></i>
                        </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!--end::Card-->



<!--New Service Modal-->
<div class="modal fade" id="NewServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-title align-items-start flex-column">
                    <h3 class="card-label font-weight-bolder text-dark">
                        New Service
                    </h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1">List New Service to your
                        database</span>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">

                <!--begin::Content-->
                <!-- <div class="flex-row-fluid ml-lg-8"> -->
                <!--begin::Card-->
                <!-- <div class="card card-custom card-stretch"> -->

                <!--begin::Form-->

                <form class="form" method="post" action="/admin/services/table">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                                <h5 class="font-weight-bold mb-6">Service Info
                                </h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Photo</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/admin/media/users/blank.png)">
                                    <div class="image-input-wrapper" style="background-image: url(/admin/media/users/300_21.jpg)">
                                    </div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="service_photo" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Allowed file
                                    types: png, jpg,
                                    jpeg.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Service
                                Name</label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-lg form-control-solid" type="text" value="" placeholder="Tax Consultant" name="service_name" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Category</label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-lg form-control-solid" type="text" value="" placeholder="Accounting" name="service_cate" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Discription</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <textarea class="form-control" rows="3" name="service_disc" placeholder="This is the description of above topic" required></textarea>
                                </div>
                                <span class="form-text text-muted">We'll never
                                    share your email
                                    with anyone else.</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!-- </form> -->
                    <!--end::Form-->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!--end::Content-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submite" class="btn btn-primary font-weight-bold">Save
                    changes</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!--Edite Service Modal-->
<div class="modal fade" id="EditeServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-title align-items-start flex-column">
                    <h3 class="card-label font-weight-bolder text-dark">
                        New Service
                    </h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1">List New Service to your
                        database</span>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">

                <!--begin::Content-->
                <!-- <div class="flex-row-fluid ml-lg-8"> -->
                <!--begin::Card-->
                <!-- <div class="card card-custom card-stretch"> -->

                <!--begin::Form-->

                <form class="form" method="post" id="editform" action="">
                    @csrf
                    @method("PUT")
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                                <h5 class="font-weight-bold mb-6">Service Info
                                </h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Photo</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/admin/media/users/blank.png)">
                                    <div class="image-input-wrapper" style="background-image: url(/admin/media/users/300_21.jpg)">
                                    </div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="service_photo" id="service_photo" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Allowed file
                                    types: png, jpg,
                                    jpeg.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Service
                                Name</label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-lg form-control-solid" type="text" value="" placeholder="Tax Consultant" name="service_name" id="service_name" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Category</label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-lg form-control-solid" type="text" value="" placeholder="Accounting" name="service_cate" id="service_cate" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Discription</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <textarea class="form-control" rows="3" name="service_disc" id="service_disc" placeholder="This is the description of above topic" required></textarea>
                                </div>
                                <span class="form-text text-muted">We'll never
                                    share your email
                                    with anyone else.</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!-- </form> -->
                    <!--end::Form-->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!--end::Content-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submite" id="EditeService" class="btn btn-primary font-weight-bold">Save
                    changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section("footer_script")

<script src="/admin/plugins/custom/datatables/datatables.bundlec3e8.js?v=7.0.6"></script>

<script src="/admin/js/pages/crud/datatables/data-sources/htmlc3e8.js?v=7.0.6"></script>

<script>
    $(document).ready(function() {

        $(document).on('click', '.EditeService', function() {

            var id = $(this).attr('id');
            // alert(id);
            // $('#form_result').html('');
            $.ajax({
                url: "/admin/services/table/" + id + "/edit",
                dataType: "json",
                success: function(html) {
                    // $('#service_photo').val("hhhhhhh");
                    $('#service_name').val(html.data.service_name);
                    $('#service_cate').val(html.data.service_cate);
                    $('#service_disc').val(html.data.service_disc);
                    $('#editform').attr('action', '/admin/services/table/' + html.data.id);
                    console.log(html.data.service_name);
                    $('#EditeServiceModal').modal('show');
                }
            })
        });
    });
</script>


@endsection