<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <title>PNJ Store</title>
    <link rel="icon" type="images/x-icon" href="../../front/HinhAnh/logoxyz1.png" />
    <link rel="stylesheet" type="text/css" href="../../front/css/ThanhToan.css" />
    <script type="text/javascript" src="jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="ThanhToan.js"></script>
  </head>
  <body>
    <div id="tygh_top_panel1">
    <a href="/"><img src="../../front/HinhAnh/logoxyz1.png" style="width: 200px; height: auto;"></a>
    </div>
    <div id="tygh_content1">
    <form id="main" action="" method="post" class="checkout-form">
      @csrf
      <div id="checkout_step">
        <div id="title_cart1">Thanh toán</div>
        <div id="box_info_step">
          <div id="box_info_step1">
            <div id="info_dia_chi_giao_hang">
              <div id="tt_dia_chi">Địa chỉ giao hàng</div>
              <div id="data_ct_address">
            
              <div class="row">
                <div class="control_group">
                  <label>Họ và tên</label><br />
                  <input name="tenkhachhang" id="hovaten" type="text" placeholder="Họ và tên" />
                </div>
                <div class="control_group" style="margin-top: 20px;">
                  <label>Email</label><br />
                  <input name="email" id="email" type="text" placeholder="Email" />
                </div>
                <div class="control_group" style="margin-top: 20px;">
                  <label>Điện thoại</label><br />
                  <input name="sodienthoai" id="sodienthoai" type="text" placeholder="Số điện thoại của bạn" />
                </div>
                <div class="control_group" style="margin-top: 20px;">
                  <label>Địa chỉ</label><br />
                  <input name="diachi" id="diachi" type="text" placeholder="Địa chỉ của bạn" />
                </div>


              </div>

            </div>
            </div>
          </div>
          <div id="box_info_step2">
            <div id="info_dia_chi_giao_hang1">
              <div id="tt_dia_chi1" style="padding-left: 200px">
                Hình thức thanh toán
              </div>
              <div id="data_ct_address1">
                <input
                  type="radio"
                  id="html"
                  name="fav_language"
                  value="HTML"
                />
                <label for="html" style="font-weight: bold; font-size: 14px"
                  >Giao hàng và thu tiền tận nơi</label
                ><br />
                <p>
                  Nhân viên bưu điện tại địa phương sẽ giao hàng đến quí khách
                  tại địa điểm mà quí khách đã ghi ở trên. Trong trường hợp quí
                  khách đi vắng, vui lòng uỷ thác cho người khác nhận hàng và
                  thanh toán tiền thay. Trong một số trường hợp nhân viên bưu
                  điện đến phát mà không có người nhận, nhân viên bưu điện sẽ để
                  lại tin nhắn mời khách hàng đến bưu điện nhận hàng.
                </p>
                <input type="radio" id="css" name="fav_language" value="CSS" />
                <label for="css" style="font-weight: bold; font-size: 14px"
                  >Thẻ ATM có Internet Banking</label
                ><br />
                <p>
                  Thanh toán bằng thẻ ATM do các ngân hàng sau phát hành và được
                  ưu tiên xử lý đơn hàng trước (miễn phí phí thanh toán qua
                  thẻ)<br />
                  Lưu ý: thẻ ATM hoặc tài khoản của bạn phải đăng ký dịch vụ
                  Internet Banking với ngân hàng mới sử dụng được hình thức
                  thanh toán này
                </p>
                <input
                  type="radio"
                  id="javascript"
                  name="fav_language"
                  value="JavaScript"
                />
                <label
                  for="javascript"
                  style="font-weight: bold; font-size: 14px"
                  >Thẻ VISA/Master Card/JCB</label
                >
                <p>
                  Thanh toán bằng thẻ tín dụng Visa hoặc MasterCard và được ưu
                  tiên xử lý đơn hàng trước. Hệ thống thanh toán qua cổng OnePay
                  hỗ trợ tính năng bảo mật Verified By Visa và MasterCard
                  SecureCode
                </p>
              </div>
            </div>
          </div>
          <div id="ghi_chu_giao_hang" style="margin-left: 378px">
            <div id="tt_dia_chi3">GHI CHÚ GIAO HÀNG</div>
            <textarea
              id="w3review"
              name="w3review"
              rows="4"
              cols="50"
              placeholder="Ghi chú"
            ></textarea>
            <p style="text-align: center">Phí vận chuyển: Miễn phí</p>
            <div id="box_bt_payment">
              <input
                style="border: none"
                onclick="kiemTraInput()"
                id="bt_thanh_toan"
                type="submit"
                value="Thanh toán"
              />
              <a id="bt_quay_lai" href="/cart">QUAY LẠI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <div id="footer">
      <div id="tygh_footer">
        <div id="row_foot">
          <div id="span5_footer">
            <div id="span4">
              <span>VỀ CÔNG TY</span><br />
              <a href="#">Giới thiệu công ty</a>
              <a href="#">Tuyển dụng</a>
              <a href="#">Góc báo chí</a>
              <a href="#">Chương trình đại lý</a>
              <a href="#">Chính sách bảo mật</a>
              <a href="#">Chính sách đổi trả</a>
            </div>
            <div id="span4">
              <span>TRỢ GIÚP</span><br />
              <a href="#">Quy định sử dụng</a>
              <a href="#">Hướng dẫn mua hàng</a>
              <a href="#">Phương thức thanh toán</a>
              <a href="#">Phương thức vận chuyển</a>
              <a href="#">Các câu hỏi thường gặp</a>
              <a href="#">Ứng dụng đọc ebook</a>
            </div>
            <div id="span4">
              <span style="width: 105px">TIN TỨC SÁCH</span><br />
              <a href="#">Tin tức</a>
              <a href="#">Chân dung</a>
              <a href="#">Điểm sách</a>
              <a href="#">Phê bình</a>
            </div>
            <div id="Tai_Ung_Dung">
              <span>TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</span>
              <img src="../../front/HinhAnh/icon-appstore.png" />
              <img
                src="../../front/HinhAnh/icon-googleplay.png"
                style="margin-left: 10px"
              />
            </div>
          </div>
          <div id="span7_footer">
            <div class="span8">
              <span>CHẤP NHẬN THANH TOÁN</span>
              <img src="../../front/HinhAnh/visa.jpg" />
              <img src="../../front/HinhAnh/master_card.jpg" />
              <img src="../../front/HinhAnh/jcb.jpg" />
              <img src="../../front/HinhAnh/atm.jpg" />
              <img src="../../front/HinhAnh/cod.jpg" />
              <img src="../../front/HinhAnh/payoo.jpg" />
              <span style="margin-top: 10px">THANH TOÁN AN TOÀN</span>
              <img src="../../front/HinhAnh/verify_visa.jpg" />
              <img src="../../front/HinhAnh/mastercard_securecode.jpg" />
              <img src="../../front/HinhAnh/onepay.jpg" />
            </div>
            <div class="span8">
              <span>ĐỐI TÁC VẬN CHUYỂN</span>
              <img src="../../front/HinhAnh/logovnb.png" />
              <img src="../../front/HinhAnh/vn-post.jpg" />
              <img src="../../front/HinhAnh/dhl.jpg" style="width: 184px; height: 52px" />
            </div>
            <div class="span8">
              <span>ĐỐI TÁC BÁN HÀNG</span>
              <img src="../../front/HinhAnh/lazada.jpg" />
              <img src="../../front/HinhAnh/shopee.jpg" />
              <img src="../../front/HinhAnh/amazon.jpg" />
            </div>
          </div>
        </div>
     
        <div id="copyright">
          <div id="row_fuild">
            <img src="../../front/HinhAnh/logo_so_cong_thuong.png" style="float: left" />
            <div id="span13">
              <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG COM</p>
              <span
                >Địa chỉ: 52/2 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân Phú,
                Hồ Chí Minh</span
              ><br />
              <span
                >MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày
                10/03/2011</span
              ><br />
              <span
                >Tel: 028.73008182 - Fax: 028.39733234 - Email:
                <a href="#">hotro@pnj.com</a></span
              >
            </div>
            <div id="span20">
              <p>WEBSITE CÙNG HỆ THỐNG</p>
              <img
                src="../../front/HinhAnh/logo_hotdeal_2x.png"
                style="width: 152px; height: 22px"
              />
              <img
                src="../../front/HinhAnh/logo_yesgo_2x.png"
                style="width: 146px; height: 40px"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
