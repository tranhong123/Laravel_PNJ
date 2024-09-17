<?php

namespace App\Http\Controllers\Front;

use App\Service\TheLoaiTrangSuc\TheLoaiTrangSucServiceInterface;
use App\Http\Controllers\Controller;
use App\Service\TrangSuc\TrangSucServiceInterface;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    private $theloaitrangsucService;
    private $trangsucService;

    public function __construct(TrangSucServiceInterface $trangsucService, TheLoaiTrangSucServiceInterface $theloaitrangsucService)
    {
        $this->trangsucService = $trangsucService;
        $this->theloaitrangsucService = $theloaitrangsucService;
    }

    public function add($id)
    {
        $id = (int)$id;
        $trangsuc = $this->trangsucService->find($id);
        
        if (!$trangsuc) {
            return back()->withErrors(['msg' => 'Không tìm thấy trang sức']);
        }

        Cart::add([
            'id' => $trangsuc->MaTrangSuc,
            'name' => $trangsuc->TenTrangSuc,
            'qty' => 1,
            'price' => $trangsuc->GiaTrangSuc,
            'weight' => $trangsuc->weight ?? 0 , 
            'options' => [
                'image' => $trangsuc->AnhTrangSuc->first()->Anh,
            ],
 
        ]);
 
        return back();
    }

    public function index()
    {
        $menu = $this->theloaitrangsucService->Menu();
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.shop.cart', compact('carts', 'total', 'subtotal', 'menu'));
    }

    function delete(Request $request)
    {
        if($request->ajax()){
            $response ['cart']= Cart::remove($request->rowId);

            $response ['count'] = Cart::count();
            $response['total'] = Cart::total();
            $response ['subtotal'] = Cart::subtotal();

            return $response;
        }
        return back();
    }
    public function destroy(){
        Cart::destroy();

        
    }
    public function update(Request $request){
        if($request->ajax()){
            $response['cart'] = Cart::update($request->rowId, $request->qty);
            $response['count'] = Cart::count();
            $response['total'] = Cart::total();
            $response['subtotal'] = Cart::subtotal();
            return $response;
        }
        return back();
}
}