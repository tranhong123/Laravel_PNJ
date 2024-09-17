<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\TrangSuc\TrangSucServiceInterface;
use Illuminate\Support\Facades\DB;
use App\Service\TheLoaiTrangSuc\TheLoaiTrangSucServiceInterface;
use App\Service\NhaSanXuat\NhaSanXuatServiceInterface;
use App\Service\NhaCungCap\NhaCungCapServiceInterface;


class ProductController extends Controller
{
    private $trangsucService;
    private $theloaitrangsucService;
    private $nhasanxuatService;

    private $nhacungcapService;


    public function __construct(TrangSucServiceInterface $trangsucService, TheLoaiTrangSucServiceInterface $theloaitrangsucService, NhaSanXuatServiceInterface $nhasanxuatService,  NhaCungCapServiceInterface $nhacungcapService)
    {
        $this->trangsucService = $trangsucService;
        $this->theloaitrangsucService = $theloaitrangsucService;
        $this->nhasanxuatService = $nhasanxuatService;

        $this->nhacungcapService = $nhacungcapService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchTerm = $request->get('search');
        $perPage = 10; // Số lượng mục mỗi trang
        $trangsucs = $this->trangsucService->searchAndPaginate('TenTrangSuc', $searchTerm, $perPage);
        return view('admin.product.index', compact('trangsucs'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloaitrangsuc = $this->theloaitrangsucService->all();
        $nhasanxuat = $this->nhasanxuatService->all();

        $nhacungcap = $this->nhacungcapService->all();

        return view('admin.product.create', compact('theloaitrangsuc', 'nhasanxuat',  'nhacungcap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $data['qty']= 0 ;
        $trangsuc = $this->trangsucService->create($data);
        return redirect('admin/product/' . $trangsuc->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($MaTrangSuc)
    {
        $trangsuc = $this->trangsucService->find($MaTrangSuc);
        return view('admin.product.show', compact('trangsuc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($MaTrangSuc)
    {
        $trangsuc = $this->trangsucService->find($MaTrangSuc);
        $theloaitrangsuc = $this->theloaitrangsucService->all();
        $nhasanxuat = $this->nhasanxuatService->all();

        $nhacungcap = $this->nhacungcapService->all();

        return view('admin.product.edit', compact('theloaitrangsuc', 'nhasanxuat',  'nhacungcap', 'trangsuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaTrangSuc)
    {
        $data = $request->all();
        $this->trangsucService->update($data, $MaTrangSuc);
        return redirect('admin/product/' . $MaTrangSuc);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaTrangSuc)
    {
        // Xóa các bản ghi liên quan trong bảng `anhtrangsuc`
        DB::table('anhtrangsuc')->where('MaTrangSuc', $MaTrangSuc)->delete();
        
        // Xóa sản phẩm từ bảng `trangsuc`
        $this->trangsucService->delete($MaTrangSuc);
        
        return redirect('admin/product/');
    }
    
}