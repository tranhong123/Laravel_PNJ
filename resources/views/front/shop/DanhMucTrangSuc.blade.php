<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>PNJ Store</title>
    <link rel="icon" type="images/x-icon" href="../../front/HinhAnh/logoxyz1.png" />
    <link rel="stylesheet" type="text/css" href="../../front/CSS/TrangSucTheoDanhMuc.css" />
    <script type="text/javascript" src="../../front/myScript.js"></script>
    <script type="text/javascript" src="../../front/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            //Tìm tất cả các li có sub-menu và thêm vào nó class has-child
            $('.sub-menu').parent('li').addClass('has-child')
        });
    </script>
</head>
<body>
<div id="Dau_Trang_Web">
        <div id="container">
            <a style="width: 108px;height: 14px; text-align: left;"><img src="../../front/HinhAnh/cargo-truck.png">Miễn phí giao
                hàng</a>
            <span style="text-align: left;">|</span>
            <a style="width: 79px;height: 14px; text-align: left; margin-left: 10px;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZbRP46o1JoKPVokHkyERmOdV7uLrS8E73Tg&s">
               Trang sức đa dạng </a>
            <span style="text-align: left;">|</span>
            <a style="width: 82px;height: 14px; text-align: left; margin-left: 10px;"><img src="data:image/png;base64,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">PNJ Store</a>
        </div>
    </div>
    <div id="top_panel">
        <div id="row1">
            <div id="logo">
            <a href="/"> <img onclick="TroVeTrangChu()" src="../../front/HinhAnh/logoxyz1.png" style="width: 252px; height: 60px;"></a>
            </div>
            <form id="TimKiemForm"   action="{{ url('shop/timkiemtrangsuc') }}" method="GET">
            <div id="Tim_Kiem">
                <img src="../../front/HinhAnh/search.png">
                <input type="text" style="margin-top: 10px;" id="txtsearch" name="txtsearch" placeholder="Tìm kiếm ">
                <input type="button" style="border: none;" id="btnsearch" name="fname" value="Tìm kiếm">
                <a href="GioHang.html">

                </a>
                <div id="Dang_Nhap_Va_Dang_Ky">
                    <a href="/account/login/" style="width: 83px;height:13px;">Đăng nhập</a>
                    <span style="text-align: right;padding-top: 17px;">|</span>
                    <a href="/account/register/" style="width: 65px;height:13px;">Đăng ký</a>
                </div>
            </div>
 </form>

   

        </div>
    </div>
    <div id="header1">
        <div id="header">
            <nav class="container">
                <ul id="main-menu">
                    <li>
                        <img src="../../front/HinhAnh/icons8-list-50.png"
                            style="width: 30px; height: 30px;margin-top: 7px;float: left;">
                        <a href="#" style="color: #f3f3f3;width: 150px; margin-left: 60px;">Trang Sức</a>
                        <ul class="sub-menu">
                    
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="Ho_Tro">
                <b><a><img src="../../front/HinhAnh/phone-68-24.png" style="margin-right: 5px;">Hotline: 1900 6401</a></b>
                <span style="color: white;">|</span>
                <b><a href="#" id="Ho_Tro_Truc_Tuyen"><img src="../../front/HinhAnh/speech-bubble-24.png"
                            style="margin-right: 5px;">Hỗ trợ trực tuyến</a>
                </b>
            </div>
        </div>
    </div>
    <div id="wrapper_TrangSucTheoDanhMuc">
        <div id="span14">
            <div id="breadcrumbs">
                <span><a href="" style="text-decoration: none; color: #000;">Trang chủ</a></span>
                <span>></span>
                <span><a href="" style="text-decoration: none;color: #000;">Trang sức theo danh mục</a></span>
            </div>
        </div>
        <div id="row">
            <div id="span3">
            <img src="../../front/HinhAnh/bannerdoc.jpg" style="  min-height: 600px;  width: 278px;">
            </div>
            <div id="span9">
                <div class="mainbox2_title">
                    <span id="mainbox2_title_span">Trang Sức Theo Danh Mục</span><br>
                    <span>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
                </div>
                <div id="mainbox2_body">
                @foreach($getTheLoaiTrangSuc as $trangsuc)
                <div class="compact_active">
                        <div class="product_thumb">
                            <span class="thumb_discount">-15%</span>
                            <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                        </div>
                        <a href="{{ url('shop/trangsuc/' . $trangsuc->MaTrangSuc) }}" class="product_title_mainbox2_body">{{$trangsuc->TenTrangSuc}}</a>
                        <span class="author">  {{$trangsuc->NhaSanXuat->TenNhaSanXuat}}</span>
                        <span class="old_price"><strike>499.000đ</strike></span><br>
                        <span class="price">  {{$trangsuc->GiaTrangSuc}}đ</span>
                    </div>

                    @endforeach
                    
                
                    <a id="read_all" href="#">Xem tất cả >></a>
                </div>
              
           
                <div id="pagination_bottom">
                    <span>Trang 1/124</span>
                    <a class="cm_history" style="background-color:#2ba40d;" href="#">1</a>
                    <a class="cm_history" href="#">2</a>
                    <a class="cm_history" href="#">3</a>
                    <a class="cm_history" href="#">4</a>
                    <a class="cm_history" href="#">5</a>
                    <a class="cm_history" href="#">6</a>
                    <a class="cm_history" href="#">7</a>
                    <a class="cm_history" href="#">8</a>
                    <a class="cm_history" href="#">></a>
                    <a class="cm_history" href="#">2 - 16</a>
                </div>
            </div>
        </div>
    
    </div>

    
    <div id="footer">
        <div id="tygh_footer">
            <div id="news_letter">
                <label>ĐĂNG KÝ NHẬN EMAIL
                <span>Đăng ký nhận thông tin sách mới, sách bán</span></label>
                <div id="input_group">
                    <input type="text" id="Ten_Cua_Ban" name="Ten_Cua_Ban" placeholder="Tên của bạn">
                    <input type="text" id="Email_Cua_Ban" name="Email_Cua_Ban" placeholder="Nhập email của bạn">
                    <select id="Chon_The_Loai_Sach">
                        <option value="0">Thể loại yêu thích</option>
                        <option value="1">Tất cả</option>
                        <option value="2">Nhẫn</option>
                        <option value="3">Vòng Tay</option>
                        <option value="4">Vòng Cổ</option>
                        <option value="5">Bông Tai</option>
                        <option value="6">Dây Chuyền</option>
                        <option value="7">Lắc Tay</option>
                        <option value="8">Mặt Đá</option>
                        <option value="9">Trang Sức Cho Bé</option>
              
                    </select>
                    <input type="button" id="Dang_Ky_Ngay" name="fname" value="ĐĂNG KÝ NGAY">
                </div>
            </div>
            <div id="row_foot">
                <div id="span5_footer">
                    <div id="span4">
                        <span>VỀ CÔNG TY</span><br>
                        <a href="#">Giới thiệu công ty</a>
                        <a href="#">Tuyển dụng</a>
                        <a href="#">Góc báo chí</a>
                        <a href="#">Chương trình đại lý</a>
                        <a href="#">Chính sách bảo mật</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                    <div id="span4">
                        <span>TRỢ GIÚP</span><br>
                        <a href="#">Quy định sử dụng</a>
                        <a href="#">Hướng dẫn mua hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Các câu hỏi thường gặp</a>
                        <a href="#">Ứng dụng đọc ebook</a>
                    </div>
                    <div id="span4">
                        <span style="width: 105px;">TIN TỨC </span><br>
                        <a href="#">Tin tức</a>
                        <a href="#">Chân dung</a>
                        <a href="#">Điểm sách</a>
                        <a href="#">Phê bình</a>
                    </div>
                    <div id="Tai_Ung_Dung">
                        <span>TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</span>
                        <img src="../../front/HinhAnh/icon-appstore.png">
                        <img src="../../front/HinhAnh/icon-googleplay.png" style="margin-left: 10px;">
                    </div>
                </div>
                <div id="span7_footer">
                    <div class="span8">
                        <span>CHẤP NHẬN THANH TOÁN</span>
                        <img src="../../front/HinhAnh/visa.jpg">
                        <img src="../../front/HinhAnh/master_card.jpg">
                        <img src="../../front/HinhAnh/jcb.jpg">
                        <img src="../../front/HinhAnh/atm.jpg">
                        <img src="../../front/HinhAnh/cod.jpg">
                        <img src="../../front/HinhAnh/payoo.jpg">
                        <span style="margin-top: 10px;">THANH TOÁN AN TOÀN</span>
                        <img src="../../front/HinhAnh/verify_visa.jpg">
                        <img src="../../front/HinhAnh/mastercard_securecode.jpg">
                        <img src="../../front/HinhAnh/onepay.jpg">
                    </div>
                    <div class="span8">
                        <span>ĐỐI TÁC VẬN CHUYỂN</span>
                        <img src="../../front/HinhAnh/logovnb.png">
                        <img src="../../front/HinhAnh/vn-post.jpg">
                        <img src="../../front/HinhAnh/dhl.jpg" style="width: 184px;height: 52px;">
                    </div>
                    <div class="span8">
                        <span>ĐỐI TÁC BÁN HÀNG</span>
                        <img src="../../front/HinhAnh/lazada.jpg">
                        <img src="../../front/HinhAnh/shopee.jpg">
                        <img src="../../front/HinhAnh/amazon.jpg">
                    </div>
                </div>
            </div>
            
            <div id="copyright">
                <div id="row_fuild">
                    <img src="../../front/HinhAnh/logo_so_cong_thuong.png" style="float: left;">
                    <div id="span13">
                    <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ TRANG SỨC QUỐC TẾ</p>
                        <span>Địa chỉ: 147 PHẠM NGŨ LÃO, thành phố Hải Dương</span><br>
                        <span>MST: 0123123123 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày 10/03/2011</span><br>
                        <span>Tel: 0288161281 - Fax: 0333222111 - Email: <a href="#">hotro@pnj.com</a></span>
                    </div>
                    <div id="span20">
                        <p>WEBSITE CÙNG HỆ THỐNG</p>
                        <img src="../../front/HinhAnh/logo_hotdeal_2x.png" style="width: 152px;height: 22px;">
                        <img src="../../front/HinhAnh/logo_yesgo_2x.png" style="width: 146px;height: 40px;">
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>