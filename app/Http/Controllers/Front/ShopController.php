<?php

namespace App\Http\Controllers\Front;

use App\Models\TrangSuc;

use App\Http\Controllers\Controller;
use App\Service\TrangSuc\TrangSucServiceInterface;
use App\Service\TheLoaiTrangSuc\TheLoaiTrangSucServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $trangsucService;
    private $theloaitrangsucService;
    public function __construct(TrangSucServiceInterface $trangsucService, TheLoaiTrangSucServiceInterface $theloaitrangsucService)
    {
        $this->trangsucService = $trangsucService;
        $this->theloaitrangsucService = $theloaitrangsucService;
    }

    public function ChiTietTrangSuc($id)
    {
        $menu = $this->theloaitrangsucService->Menu();
        $trangsuc = $this->trangsucService->find($id);
        $trangsuclienquan = $this->trangsucService->SanPhamLienQuan($trangsuc);
        return view('front.shop.ChiTietTrangSuc', compact('trangsuc', 'trangsuclienquan', 'menu'));
    }





    public function DanhMucTrangSuc($id, Request $request)
    {
        $menu = $this->theloaitrangsucService->Menu();
        $trangsuc = $this->trangsucService->all();
        $theloaitrangsuc = $this->theloaitrangsucService->find($id);
        $getTheLoaiTrangSuc = $this->theloaitrangsucService->getTrangSucByTheLoai($theloaitrangsuc);

        return view('front.shop.DanhMucTrangSuc', compact('trangsuc', 'menu', 'getTheLoaiTrangSuc'));
    }
  public function TimKiemTrangSuc(Request $request)
{
    $searchTerm = $request->input('search');
    $menu = $this->theloaitrangsucService->Menu();
    // Tìm trang suc có tên chứa từ khóa tìm kiếm
    $trangsuc = TrangSuc::where('TenTrangSuc', 'like', "%$searchTerm%")->paginate(10);

    return view('front.shop.TimKiemTrangSuc', compact('trangsuc', 'menu', 'searchTerm'));
}


}
