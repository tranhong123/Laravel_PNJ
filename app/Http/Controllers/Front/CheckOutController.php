<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\ChiTietDonHang\ChiTietDonHangServiceInterface;
use App\Service\DonHang\DonHangServiceInterface;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Service\TheLoaiTrangSuc\TheLoaiTrangSucServiceInterface;

class CheckOutController extends Controller
{
    private $donHangService;
    private $chiTietDonHangService;
    private $theloaitrangsucService;

    public function __construct(
        DonHangServiceInterface $donHangService,
        ChiTietDonHangServiceInterface $chiTietDonHangService,
        TheLoaiTrangSucServiceInterface $theloaitrangsucService
    ) {
        $this->donHangService = $donHangService;
        $this->chiTietDonHangService = $chiTietDonHangService;
        $this->theloaitrangsucService = $theloaitrangsucService;
    }
    public function index()
    {
        $menu = $this->theloaitrangsucService->Menu();
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.checkout.index', compact('carts', 'total', 'subtotal', 'menu'));
    }
    public function addOrder(Request $request)
    {
        // dd($request->all());
        //01. Thêm đơn hàng
        $donhang = $this->donHangService->create($request->all());
        //02. Thêm chi tiết đơn hàng
        $carts = Cart::content();
        foreach ($carts as $cart) {
            $data = [
                'MaDonHang' => $donhang->MaDonHang,
                'MaTrangSuc' => $cart->id,
                'SoLuong' => $cart->qty,
                'GiaTrangSuc' => $cart->price,
                'TongTien' => $cart->qty * $cart->price

            ];
            $this->chiTietDonHangService->create($data);
        }
        //03. Xóa giỏ hàng
        Cart::destroy();
        //04. Trả về kết quả thông báo
        return "Bạn đã đặt hàng thành công";
    }
}
