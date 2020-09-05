@extends("admin.app")

@section("page_title")
<li class="breadcrumb-item">
    <a href="/admin/index" class="text-muted">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="#" class="text-muted">Products</a>
</li>
@endsection

@section("page_content")
<h1>PRODUCTS</h1>
<a href="/admin/products/table">Click to table</a>
@endsection

@section("page_nav")
<a href="/admin/products/table" class="btn btn-light-primary btn-sm font-weight-bold mr-2">
    Table
</a>
@endsection