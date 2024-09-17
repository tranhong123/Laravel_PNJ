<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>PNJ Store</title>
    <link rel="icon" type="images/x-icon" href="../../front/HinhAnh/logoxyz1.png" />
    <link rel="stylesheet" type="text/css" href="../../front/CSS/GioHang.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    <script type="text/javascript" src="../../front/JS/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="../../front/JS/main.js"></script>
    <script>
        let amountElement = document.getElementById('amount');
        let amount = amountElement.value;
        //console.log(amountElement)
        let render = (amount) => {
            amountElement.value = amount
        };
        //Handle Plus
        let handlePlus = () => {
            amount++;
            render(amount);
        };
        //Handle Minus
        let handleMinus = () => {
            if (amount > 1)
                amount--;
            render(amount);
        };

        amountElement.addEventListener('input', () => {
            amount = amountElement.value;
            amount = parseInt(amount);
            amount = (isNaN(amount) || amount == 0) ? 1 : amount;
        });
    </script>
</head>

<body>
    <div id="tygh_top_panel">
    <a href="/"><img src="../../front/HinhAnh/logoxyz1.png" style="width: 200px; height: auto;"></a>

    </div>
    <div id="tygh_content">
        <div id="title_cart">
            <span>GIỎ HÀNG</span>
        </div>
        <div id="row_fluid">
            <div id="box_list_cart">
                <table>
                    <tr >
                        <th>STT</th>
                        <th style="width: 97.5px;text-align: center;">Hình</th>
                        <th style="width:200px;text-align: center;">Tên</th>
                        <th style="width:97.5px;text-align: center;">Đơn giá</th>
                        <th style="width:97.5px;text-align: center;">Số lượng</th>
                        <th style="width:97.5px;text-align: center;">Thành tiền</th>
                        <th style="width:60px;text-align: center;float: right;">Xóa</th>
                    </tr>
                    <tbody id="chitietgiohang" style="width: 100%;height: auto;">
                        @foreach($carts as $cart)
                        <tr data-rowId="{{$cart->rowId}}">
                            <td>1</td>
                            <td style=" text-align: center">
                               <img src="{{$cart->options->image}}" style="width: 80px; height: 80px" alt="Hình ảnh " >
                            </td>
                            <td style="text-align: center">
                                {{$cart->name}}
                            </td>
                            <td style="text-align: center">{{$cart->price }}</td>
                            <td style="width: 80px;display: flex;align-items: center; height:85px">
                                <!-- Nút giảm số lượng -->
                                <button class="quantity-btn decrease-btn" data-rowId="{{$cart->rowId}}" onclick="updateQuantity('{{$cart->rowId}}', -1)">-</button>
                                <!-- Input số lượng -->
                                <input class="quantity-input" value="{{$cart->qty}}" min="1" data-rowId="{{$cart->rowId}}" style="width: 30px; text-align: center" />

                                <!-- Nút tăng số lượng -->
                                <button class="quantity-btn increase-btn" data-rowId="{{$cart->rowId}}" onclick="updateQuantity('{{$cart->rowId}}', 1)">+</button>
                            </td>

                            <td style="text-align: center">{{$cart->price * $cart->qty}}</td>
                            <td style="text-align: center">
                            <a href="#" onclick="removeCart('{{$cart->rowId}}'); return false;">
        <img onclick ="confirm('Bạn có muốn xóa không?') === true ? removeCartAndReload ('{{$cart->rowId}}'):''" src="../../front/HinhAnh/3807871.png" style="width: 30px; height: 30px" /> 
</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div id="ver" style="width: 80px;height: 39px; float: right;">
                    <input type="button" value="Xóa tất cả" id="btnXoa" onclick="confirm('Bạn chắc chắn muốn xóa?') === true ? destroyCart() : ''">
                </div>

            </div>
            <div id="span4">
                <div id="title_tom_tat">
                    <span>TÓM TẮT ĐƠN HÀNG</span>
                </div>
                <div id="list_tom_tat_thanh_toan">
                    <div style="width: 318px; height: 22px;">
                        <span style="width: 191px; height: 22px;text-align: left; float: left;">Sản phẩm</span>
                        <span style="width: 127px; height: 22px; text-align: right; float: right;" id="tongSP">{{ Cart::count() }}</span>
                    </div>
                    <div style="width: 318px; height: 22px;">
                        <span style="width: 191px; height: 22px;text-align: left; float: left;">Phí vận chuyển</span>
                        <span style="width: 127px; height: 22px; text-align: right; float: right;">Miễn phí</span>
                    </div>
                    <div style="width: 318px; height: 22px;">
                        <span style="width: 191px; height: 22px;text-align: left; float: left;font-weight: 700;">TẠM TÍNH</span>
                        <span id="TamTinh" style="width: 127px; height: 22px; text-align: right; float: right; color:#117c47">{{$subtotal}}đ</span>
                    </div>
                    <br>
                    <div id="italic_right">
                        <i>(Đã bao gồm Thuế VAT và Phí đóng gói cơ bản).</i>
                    </div>
                    <div id="box_tong_cong">
                        <div id="label_tong_cong">
                            <span>TỔNG CỘNG</span>
                        </div>
                        <div id="label_tong_cong">
                            <span id="TongCong" style="margin-left: 90px;">{{$total}}đ</span>
                        </div id="labeL_not_number">
                    </div>
                </div>
            </div>
        </div>
        <div id="box_bt_payment">
    <a id="bt_thanh_toan" href="/checkout">THANH TOÁN</a>
    <a href="/" id="bt_quay_lai" href="#" onclick="trove()">QUAY LẠI</a>
</div>

     </div>
   
    </div>

    <script>
    // JavaScript to change content when hovering over options
    document
      .querySelector(".left-div a:nth-child(2)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "block";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });

    document
      .querySelector(".left-div a:nth-child(3)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "block";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });

    document
      .querySelector(".left-div a:nth-child(4)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "block";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(5)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "block";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(6)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "block";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(7)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "block";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(8)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "block";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(9)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "block";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(10)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "block";
      });
    // Lắng nghe sự kiện khi chuột rời khỏi hover-content
  </script>
  <script>
    // Lấy tất cả các nút tăng và giảm số lượng
    function updateQuantity(rowId, change) {
    var quantityInput = $(".quantity-input[data-rowId='" + rowId + "']");
    if (quantityInput.length > 0) {
        var currentQty = parseInt(quantityInput.val());
        if (!isNaN(currentQty)) {
            var newQty = currentQty + change;
            if (newQty >= 0) {
              quantityInput.val(newQty);
              updateCart(rowId, newQty);
              window.location.reload();
       
            }
        } else {
            console.error("Current quantity is not a number.");
        }
    } else {
        console.error("Quantity input element not found.");
    }
}

  </script>
  <script>
   function removeCartAndReload(rowId) {
    // Thực hiện xóa giỏ hàng ở đây (ví dụ: thông qua AJAX)
    removeCart(rowId);

    // Load lại trang sau khi xóa giỏ hàng
    window.location.reload();
}

function deleteAndReload() {
    // Thực hiện xóa giỏ hàng ở đây (ví dụ: thông qua AJAX)
    destroyCart();

    // Load lại trang sau khi xóa giỏ hàng
    window.location.reload();
} 



</script>


</body>
