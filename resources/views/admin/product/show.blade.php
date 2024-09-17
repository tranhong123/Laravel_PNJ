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
                <div class="card-body display_data">

              

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Product Images</label>
                        <div class="col-md-9 col-xl-8">
                            <p><a href="./product-image.html">Manage images</a></p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Product Details</label>
                        <div class="col-md-9 col-xl-8">
                            <p><a href="./product-detail.html">Manage details</a></p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Nhà sản xuất</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$trangsuc->NhaSanXuat->TenNhaSanXuat}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="product_category_id" class="col-md-3 text-md-right col-form-label">Thể loại</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$trangsuc->TheLoaiTrangSuc->TheLoaiTrangSuc}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">Tên sách</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$trangsuc->TenTrangSuc}}</p>
                        </div>
                    </div>



                    <div class="position-relative row form-group">
                        <label for="price" class="col-md-3 text-md-right col-form-label">Giá sách</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$trangsuc->GiaTrangSuc}}</p>
                        </div>
                    </div>



                    <div class="position-relative row form-group">
                        <label for="qty" class="col-md-3 text-md-right col-form-label">Số lượng</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$trangsuc->SoLuong}}</p>
                        </div>
                    </div>


                    <div class="position-relative row form-group">
                        <label for="featured" class="col-md-3 text-md-right col-form-label">Nổi bật</label>
                        <div class="col-md-9 col-xl-8">
                            <p>Yes</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="description" class="col-md-3 text-md-right col-form-label">Mô tả</label>
                        <div class="col-md-9 col-xl-8">
                            <p>Frieren</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->

@endsection