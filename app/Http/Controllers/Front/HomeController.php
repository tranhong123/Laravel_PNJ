<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\TrangSuc\TrangSucServiceInterface;
use App\Service\TheLoaiTrangSuc\TheLoaiTrangSucServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $trangsucService;
    private $theloaitrangsucService;

    public function __construct(TrangSucServiceInterface $trangsucService,TheLoaiTrangSucServiceInterface $theloaitrangsucService)
    {
        $this->trangsucService = $trangsucService;
        $this->theloaitrangsucService = $theloaitrangsucService;
    }
    public function index()
    {
        $menu = $this->theloaitrangsucService->Menu();
        $Nhan = $this->trangsucService->Nhan();
        $VongTay = $this->trangsucService->VongTay();
        $LacTay = $this->trangsucService->LacTay();
        $VongCo = $this->trangsucService->VongCo();
        $NhanCuoi = $this->trangsucService->NhanCuoi();
        $VongA = $this->trangsucService->VongA();
        $DayChuyen = $this->trangsucService->DayChuyen();
        $BongTai = $this->trangsucService->BongTai();
        $DayCo = $this->trangsucService->DayCo();
        
        // Gom tất cả các biến compact vào một mảng compact
        $data = compact('menu','Nhan', 'VongTay', 'LacTay', 'LacTay', 'VongCo', 'NhanCuoi', 'VongA', 'DayChuyen', 'BongTai','DayCo');
        
        return view('front.index', $data);
    }
}
