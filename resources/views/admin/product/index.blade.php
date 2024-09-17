@extends('admin.layout.master')
@section('title','Product')
@section('body')
<!-- Main -->
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Trang Sức
                    <div class="page-title-subheading">
                        Xem, thêm, sửa, xóa và quản lý sản phẩm
                    </div>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Thêm sản phẩm
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    <form>
                        <div class="input-group">
                            <input type="search" name="search" id="search" value="{{ request('search') }}" placeholder="TÌm kiếm ...    " class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;
                                    Tìm kiếm
                                </button>
                            </span>
                        </div>
                    </form>

                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn btn-focus">Tuần này</button>
                            <button class="active btn btn-focus">Mọi lúc</button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Mã trang sức</th>
                                <th>Ảnh trang sức/ Tên trang sức</th>
                                <th class="text-center">Giá trang sức</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Featured</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($trangsucs as $trangsuc)
                            <tr>
                                <td class="text-center text-muted">#{{ $trangsuc->MaTrangSuc }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                         
                                              
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $trangsuc->TenTrangSuc }}</div>
                                                <div class="widget-subheading opacity-7">
                                                    {{ $trangsuc->NhaSanXuat->TenNhaSanXuat }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $trangsuc->GiaTrangSuc }}</td>
                                <td class="text-center">{{ $trangsuc->SoLuong }}</td>
                                <td class="text-center">
                                    <div class="badge badge-success mt-2">
                                        True
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="/admin/product/{{ $trangsuc->MaTrangSuc }}" class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                        Details
                                    </a>
                                    <a href="./admin/edit/{{ $trangsuc->MaTrangSuc }}" data-toggle="tooltip" title="Edit" data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                        <span class="btn-icon-wrapper opacity-8">
                                            <i class="fa fa-edit fa-w-20"></i>
                                        </span>
                                    </a>
                                    <form class="d-inline" action="./admin/product/{{ $trangsuc->MaTrangSuc }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm" type="submit" data-toggle="tooltip" title="Delete" data-placement="bottom" onclick="return confirm('Do you really want to delete this item?')">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-trash fa-w-20"></i>
                                            </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-block card-footer">
                        {{ $trangsucs->links('pagination::bootstrap-5', ['show_prev_next' => false]) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection
