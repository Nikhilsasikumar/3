@extends("admin.app")

@section("page_title")
<li class="breadcrumb-item">
    <a href="/admins" class="text-muted">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="#" class="text-muted">Provider</a>
</li>
@endsection

@section("page_content")
<h1>Provider</h1>
<a href="/admin/provider/table">Click to table</a>
@endsection

@section("page_nav")
<a href="/admin/categories" class="btn btn-light-danger btn-sm font-weight-bold mr-2">
    Category
</a>
<a href="/admin/providers/table" class="btn btn-light-primary btn-sm font-weight-bold mr-2">
    Table
</a>
@endsection