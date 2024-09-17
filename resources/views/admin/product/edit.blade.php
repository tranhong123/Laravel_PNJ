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
                    Product
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="post" action="admin/product/{{$trangsuc->MaTrangSuc}}" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">Tên trang sức</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="TenTrangSuc" id="name" placeholder="Tên trang sức" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="product_category_id" class="col-md-3 text-md-right col-form-label">Thể loại trang sức</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="MaTheLoaiTrangSuc" id="product_category_id" class="form-control">
                                    <option value="">Thể loại trang sức</option>
                                    @foreach ($theloaitrangsuc as $tls)
                                    <option value={{$tls->MaTheLoaiTrangSuc}}>
                                        {{$tls->TheLoaiTrangSuc}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>



                       


                        <div class="position-relative row form-group">
                            <label for="brand_id" class="col-md-3 text-md-right col-form-label">Nhà sản xuất</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="MaNhaSanXuat" id="brand_id" class="form-control">
                                    <option value="">Nhà sản xuất</option>
                                    @foreach ($nhasanxuat as $nxb)
                                    <option value={{$nxb->MaNhaSanXuat}}>
                                        {{$nxb->TenNhaSanXuat}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="qty" class="col-md-3 text-md-right col-form-label">Số lượng</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="SoLuong" id="qty" placeholder="Số lượng" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="description" class="col-md-3 text-md-right col-form-label">Ghi chú</label>
                            <div class="col-md-9 col-xl-8">
                                <textarea class="form-control" name="GhiChu" id="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="price" class="col-md-3 text-md-right col-form-label">Giá trang sức</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="GiaTrangSuc" id="price" placeholder="Price" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="brand_id" class="col-md-3 text-md-right col-form-label">Nhà cung cấp</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="MaNhaCungCap" id="brand_id" class="form-control">
                                    <option value="">Nhà cung cấp</option>
                                    @foreach ($nhacungcap as $ncc)
                                    <option value={{$ncc->MaNhaCungCap}}>
                                        {{$ncc->TenNhaCungCap}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="#" class="border-0 btn btn-outline-danger mr-1">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-times fa-w-20"></i>
                                    </span>
                                    <span>Cancel</span>
                                </a>

                                <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                        <i class="fa fa-download fa-w-20"></i>
                                    </span>
                                    <span>Save</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->

@endsection