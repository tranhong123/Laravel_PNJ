<?php

namespace App\Providers;

use App\Models\TrangSuc;
use App\Models\TheLoaiTrangSuc;
use App\Repositories\TrangSuc\TrangSucRepository;
use App\Repositories\TrangSuc\TrangSucRepositoryInterface;
use App\Service\TrangSuc\TrangSucService;
use App\Service\TrangSuc\TrangSucServiceInterface;
use App\Repositories\TheLoaiTrangSuc\TheLoaiTrangSucRepository;
use App\Repositories\TheLoaiTrangSuc\TheLoaiTrangSucRepositoryInterface;
use App\Service\TheLoaiTrangSuc\TheLoaiTrangSucService;
use App\Service\TheLoaiTrangSuc\TheLoaiTrangSucServiceInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Service\User\UserService;
use App\Service\User\UserServiceInterface;


use App\Service\NhaSanXuat\NhaSanXuatService;
use App\Service\NhaSanXuat\NhaSanXuatServiceInterface;
use App\Repositories\NhaSanXuat\NhaSanXuatRepository;
use App\Repositories\NhaSanXuat\NhaSanXuatRepositoryInterface;

use App\Service\NhaCungCap\NhaCungCapService;
use App\Service\NhaCungCap\NhaCungCapServiceInterface;
use App\Repositories\NhaCungCap\NhaCungCapRepository;
use App\Repositories\NhaCungCap\NhaCungCapRepositoryInterface;

// use App\Service\TacGia\TacGiaService;
// use App\Service\TacGia\TacGiaServiceInterface;
// use App\Repositories\TacGia\TacGiaRepository;
// use App\Repositories\TacGia\TacGiaRepositoryInterface;



use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\DonHang\DonHangRepositoryInterface;
use App\Service\DonHang\DonHangService;
use App\Service\DonHang\DonHangServiceInterface;


use App\Repositories\ChiTietDonHang\ChiTietDonHangRepository;
use App\Repositories\ChiTietDonHang\ChiTietDonHangRepositoryInterface;
use App\Service\ChiTietDonHang\ChiTietDonHangService;
use App\Service\ChiTietDonHang\ChiTietDonHangServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //TrangSuc
        $this->app->singleton(
            TrangSucRepositoryInterface::class,
            TrangSucRepository::class
        );
        $this->app->singleton(
            TrangSucServiceInterface::class,
            TrangSucService::class
        );
        $this->app->singleton(
            TheLoaiTrangSucRepositoryInterface::class,
            TheLoaiTrangSucRepository::class
        );
        $this->app->singleton(
            TheLoaiTrangSucServiceInterface::class,
            TheLoaiTrangSucService::class
        );
        $this->app->singleton(
            DonHangRepositoryInterface::class,
            DonHangRepository::class
        );
        $this->app->singleton(
            DonHangServiceInterface::class,
            DonHangService::class
        );
        $this->app->singleton(
            ChiTietDonHangRepositoryInterface::class,
            ChiTietDonHangRepository::class
        );
        $this->app->singleton(
            ChiTietDonHangServiceInterface::class,
            ChiTietDonHangService::class
        );
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );
        $this->app->singleton(
            NhaSanXuatRepositoryInterface::class,
            NhaSanXuatRepository::class
        );
        $this->app->singleton(
            NhaSanXuatServiceInterface::class,
            NhaSanXuatService::class
        );

        $this->app->singleton(
            NhaCungCapRepositoryInterface::class,
            NhaCungCapRepository::class
        );
        $this->app->singleton(
            NhaCungCapServiceInterface::class,
            NhaCungCapService::class
        );


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
