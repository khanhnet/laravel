@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection
@section('content-header')
<!-- Content Header -->
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sách danh mục</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<!-- Content -->
<div class="container-fluid">
    @can('permission','add-category')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" data-toggle="tooltip" data-placement="bottom" title="Thêm mới"><i class="fa fa-plus" aria-hidden="true"></i></button>
    @endcan
    <p></p>
    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh mục mới</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <div class="container my-4">
                        <table id="categories_table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh danh mục</th>
                                    <th>Danh mục cha</th>
                                    <th>Tên danh mục</th>
                                    <th>Thời gian</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@include('admin.includes.categories.create')
@include('admin.includes.categories.edit')
@endsection

@section('script')
<script>
    var getdata='{{ route('categories.getdata') }}';
    var store_category='{{ route('categories.store') }}';
</script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="/js/admin/category.js"></script>
@endsection

