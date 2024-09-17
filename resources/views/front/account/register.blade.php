<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>PNJ STORE</title>
    <link rel="icon" type="images/x-icon" href="../../front/HinhAnh/logoxyz1.png" />
    <link rel="stylesheet" type="text/css" href="../../front/css/DangKy.css" />
    <script type="text/javascript" src="myScript.js"></script>
    <script type="text/javascript" src="jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="DangKy.js"></script>
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
            <a style="width: 79px;height: 14px; text-align: left; margin-left: 10px;"><img src="../../front/HinhAnh/book.png">Trang Sức</a>
            <span style="text-align: left;">|</span>
            <a style="width: 82px;height: 14px; text-align: left; margin-left: 10px;"><img
                    src="../../front/HinhAnh/smartphone-call.png">PNJ Store</a>
        </div>
    </div>
    <div id="top_panel">
        <div id="row1">
            <div id="logo">
            <a href="/"> <img onclick="TroVeTrangChu()" src="../../front/HinhAnh/logoxyz1.png" style="width: 252px; height: 60px;"></a>
            </div>
            <div id="Tim_Kiem">
                <img src="../../front/HinhAnh/search.png">
                <input type="text" style="margin-top: 10px;" id="txtsearch" name="txtsearch"
                    placeholder="Tìm kiếm ...">
                <input type="button" style="border: 0px;" id="btnsearch" name="fname" value="Tìm kiếm ">
                <a href="GioHang.html">
                    <img src="../../front/HinhAnh/icons8-cart-64.png">
                </a>
                <div id="Dang_Nhap_Va_Dang_Ky">
                    <a href="/account/login/" style="width: 83px;height:13px;">Đăng nhập</a>
                    <span style="text-align: right;padding-top: 17px;">|</span>
                    <a href="/account/register/" style="width: 65px;height:13px;">Đăng ký</a>
                </div>
            </div>

        </div>
    </div>
    <div id="header1">
        <div id="header">
            <nav class="container">
                <!-- <a href="" id="logo_menu">
                        <img src="../../front/HinhAnh/icons8-list-50.png" style="width: 30px; height: 30px;margin-top: 7px;">
                    </a> -->
                <ul id="main-menu">
                    <li>
                        <img src="../../front/HinhAnh/icons8-list-50.png"
                            style="width: 30px; height: 30px;margin-top: 7px;float: left;">
                        <a href="#" style="color: #f3f3f3;width: 150px; margin-left: 60px;">Trang Sức</a>
                        <ul id="main-menu">
                    <li>
                    <img src="../../front/HinhAnh/icons8-list-50.png"
                            style="width: 30px; height: 30px;margin-top: 7px;float: left;">
                        <a href="#" style="color: #f3f3f3;width: 150px; margin-left: 60px;">Trang Sức</a>
                        <ul class="sub-menu">
                        @foreach($menu as $theloaitrangsuc)
                            <li><a href="shop/danhmuctrangsuc/{{$theloaitrangsuc->MaTheLoaiTrangSuc}}">{{$theloaitrangsuc->TheLoaiTrangSuc}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="Ho_Tro">
                <b><a><img src="../../front/HinhAnh/phone-68-24.png" style="margin-right: 5px;">Hotline: 1900 6401</a></b>
                <span style="color: white;">|</span>
                <b><a href="#" id="Ho_Tro_Truc_Tuyen"><img src="../../front/HinhAnh/speech-bubble-24.png"
                            style="margin-right: 5px;">Hỗ trợ trực tuyến</a></b>
            </div>
        </div>
        
    </div>

    <div id="object_container">
        <div id="body-content">
            <div id="login">
            <form action="" method="post">
          @csrf
          <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
          <input type="text" id="email" name="name" placeholder="Name" />
          <input type="text" id="email" name="email" placeholder="Email" />
          <input type="password" id="matkhau" name="password" placeholder="Mật khẩu" />
          <input type="password" id="xacnhanmatkhau" name="password_confirmation" placeholder="Xác nhận mật khẩu" />


          <input id="btnlogin" type="submit" value="Đăng ký" />
          <a href="./login">
            <p>Đã có tài khoản? Đăng Nhập Ngay</p>
          </a>

          <span style="float: left">Hoặc đăng nhập bằng:</span><br />
    
           <img src="../../front/HinhAnh/google_signin_dark.png" style="width: 138px; height: 30px; float: left;margin-top: 10px;margin-left: 20px;">
                <img src="../../front/HinhAnh/facebook_signin_dark.png" style="width: 185px; height: 30px;margin-top: 10px;">
        </form>
            </div>
        </div>
    </div>
   
    <div id="footer">
        <div id="tygh_footer">
            <div id="news_letter">
                <label>ĐĂNG KÝ NHẬN EMAIL
                <span>Đăng ký nhận thông tin mới nhất về trang sức</span></label>
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
                        <span style="width: 105px;">TIN TỨC SÁCH</span><br>
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