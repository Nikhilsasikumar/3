@extends("admin.app")

@section("page_title")
<li class="breadcrumb-item">
    <a href="/admin/index" class="text-muted">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="#" class="text-muted">Provider</a>
</li>
@endsection

@section("page_content")
<h1>Provider</h1>
<a href="/admin/provider/table">Click to table</a>
@endsection