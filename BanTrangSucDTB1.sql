USE BanSach;
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE TheLoaiSach (
    MaTheLoaiSach INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TheLoaiSach NVARCHAR(100)
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE NhaXuatBan (
    MaNhaXuatBan INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TenNhaXuatBan NVARCHAR(100) NOT NULL,
    DiaChi NVARCHAR(250),
    SoDienThoai NVARCHAR(10)
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE KhachHang (
    MaKhachHang INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TenKhachHang NVARCHAR(100) NOT NULL,
    DiaChi NVARCHAR(250),
    SoDienThoai NVARCHAR(10)
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE TacGia (
    MaTacGia INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TenTacGia NVARCHAR(100) NOT NULL,
    DiaChi NVARCHAR(250),
    SoDienThoai NVARCHAR(10)
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE Sach (
    MaSach INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TenSach NVARCHAR(100) NOT NULL,
    MaTheLoaiSach INT,
    MaTacGia INT,
    MaNhaXuatBan INT,
    SoLuong INT,
    GhiChu LONGTEXT,
    CONSTRAINT FK_TheLoaiSach FOREIGN KEY (MaTheLoaiSach) REFERENCES TheLoaiSach(MaTheLoaiSach),
    CONSTRAINT FK_TacGia FOREIGN KEY (MaTacGia) REFERENCES TacGia(MaTacGia),
    CONSTRAINT FK_NhaXuatBan FOREIGN KEY (MaNhaXuatBan) REFERENCES NhaXuatBan(MaNhaXuatBan)
);

use bansach;
CREATE TABLE ChiTietDonHang (
    MaChiTietDonHang INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    MaDonHang INT NOT NULL,
    MaSach INT,
    SoLuong INT,
    TongTien INT,
    CONSTRAINT FK_ChiTietDonHang_Sach FOREIGN KEY (MaSach) REFERENCES Sach(MaSach),
    CONSTRAINT FK_ChiTietDonHang_DonHang FOREIGN KEY (MaDonHang) REFERENCES DonHang(MaDonHang)
);

CREATE TABLE DonHang (
    MaDonHang INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TenKhachHang NVARCHAR(100) NOT NULL,
    Email NVARCHAR(100) NOT NULL,
    SoDienThoai NVARCHAR(100) NOT NULL
);
ALTER TABLE DonHang
ADD DiaChi NVARCHAR(255);
ALTER TABLE ChiTietDonHang
ADD GiaSach INT;

ALTER TABLE DonHang
ADD created_at datetime;


DELETE FROM DonHang WHERE MaDonHang > 0;
DELETE FROM ChiTietDonHang WHERE MaChiTietDonHang > 0;

ALTER TABLE users
ADD _token text;







-- SQLINES LICENSE FOR EVALUATION USE ONLY
use BanSach;
INSERT INTO Sach (TenSach, MaTheLoaiSach, MaTacGia, MaNhaXuatBan, SoLuong, GhiChu, GiaSach, MaNhaCungCap)
VALUES 
    ('Book Title 1', 1, 1, 1, 10, 'Some notes 1',1,1),
    ('Book Title 2', 2, 2, 2, 15, 'Some notes 2',1,1),
    ('Book Title 3', 1, 3, 1, 20, 'Some notes 3',1,1),
    ('Book Title 4', 3, 4, 3, 5, 'Some notes 4',1,1),
    ('Book Title 5', 2, 5, 2, 8, 'Some notes 5',1,1),
    ('Book Title 6', 1, 6, 1, 12, 'Some notes 6',1,1),
    ('Book Title 7', 2, 7, 2, 11, 'Some notes 7',1,1),
    ('Book Title 8', 3, 8, 3, 6, 'Some notes 8',1,1),
    ('Book Title 9', 1, 9, 1, 14, 'Some notes 9',1,1),
    ('Book Title 10', 2, 10, 2, 9, 'Some notes 10',1,1);

CREATE TABLE NhaCungCap (
    MaNhaCungCap INT AUTO_INCREMENT PRIMARY KEY,
    TenNhaCungCap NVARCHAR(100) NOT NULL,
    DiaChi NVARCHAR(250),
    SoDienThoai NVARCHAR(10)
);
use bansach;
ALTER TABLE Sach
ADD COLUMN MaNhaCungCap INT,
ADD CONSTRAINT FK_NhaCungCap_Sach FOREIGN KEY (MaNhaCungCap) REFERENCES NhaCungCap(MaNhaCungCap);


-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE NguoiDung (
    UserID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Pass NVARCHAR(50) NOT NULL,
    Per INT
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE NhanVien (
    MaNhanVien INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TenNhanVien NVARCHAR(50) NOT NULL,
    GioiTinh NVARCHAR(10),
    DiaChi NVARCHAR(250),
    SoDienThoai NVARCHAR(20),
    NgaySinh DATE
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE HoaDonBan (
    MaHoaDonBan INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    NgayBan DATETIME(3),
    MaNhanVien INT,
    MaKhachHang INT,
    TongTien DECIMAL(18, 0),
    FOREIGN KEY (MaNhanVien) REFERENCES NhanVien(MaNhanVien),
    FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang)
);


-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE TinTuc (
    MaTinTuc INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TieuDe NVARCHAR(250),
    NoiDung LONGTEXT,
    ThoiGianDang DATETIME(3),
    UserID INT,
    FOREIGN KEY (UserID) REFERENCES NguoiDung(UserID)
);
use bansach;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    email_verified_at TIMESTAMP,
    password VARCHAR(255),
    remember_token VARCHAR(100),
    level int
);
ALTER TABLE users
ADD _token text;
ALTER TABLE users
ADD description TEXT;
ALTER TABLE users
ADD created_at datetime;
ALTER TABLE users
ADD updated_at datetime;


ALTER TABLE sach

ADD created_at datetime;
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE ChiTietHoaDonBan (
    MaCTHoaDonBan INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    MaHoaDonBan INT,
    MaSach INT,
    SoLuong INT,
    DonGia DECIMAL(18, 0),
    ThanhTien DECIMAL(18, 0),
    FOREIGN KEY (MaHoaDonBan) REFERENCES HoaDonBan(MaHoaDonBan),
    FOREIGN KEY (MaSach) REFERENCES Sach(MaSach)
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE HoaDonNhap (
    MaHoaDonNhap INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    NgayNhap DATETIME(3),
    MaNhanVien INT,
    MaNhaCungCap INT,
    TongTien DECIMAL(18, 0),
    FOREIGN KEY (MaNhanVien) REFERENCES NhanVien(MaNhanVien),
    FOREIGN KEY (MaNhaCungCap) REFERENCES NhaCungCap(MaNhaCungCap)
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE ChiTietHoaDonNhap (
    MaCTHoaDonNhap INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    MaHoaDonNhap INT,
    MaSach INT,
    SoLuong INT,
    DonGia DECIMAL(18, 0),
    ThanhTien DECIMAL(18, 0),
    FOREIGN KEY (MaHoaDonNhap) REFERENCES HoaDonNhap(MaHoaDonNhap),
    FOREIGN KEY (MaSach) REFERENCES Sach(MaSach)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE KhuyenMai (
	MaKhuyenMai INT AUTO_INCREMENT PRIMARY KEY,
    MaSach INT,
    KhuyenMai DOUBLE,
    NgayBatDau DATE,
    NgayKetThuc DATE,
	FOREIGN KEY (MaSach) REFERENCES Sach(MaSach)
);




-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE AnhSach (
	MaAnh INT AUTO_INCREMENT PRIMARY KEY,
    MaSach INT,
    Anh varchar(500),
	FOREIGN KEY (MaSach) REFERENCES Sach(MaSach)
);




-- SQLINES DEMO *** u mẫu cho bảng TheLoaiSach
-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO TheLoaiSach (TheLoaiSach) VALUES 
('Khoa học'), 
('Văn học'), 
('Lịch sử'), 
('Tâm lý'),
('Huyền bí'),
('Kỹ nghệ'),
('Thể thao'),
('Âm nhạc'),
('Mỹ thuật'),
('Kinh doanh');

-- SQLINES DEMO *** u mẫu cho bảng NhaXuatBan
-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO NhaXuatBan (TenNhaXuatBan, DiaChi, SoDienThoai) VALUES 
('Nhà xuất bản A', 'Địa chỉ A', '0123456789'),
('Nhà xuất bản B', 'Địa chỉ B', '0987654321'),
('Nhà xuất bản C', 'Địa chỉ C', '0123498765'),
('Nhà xuất bản D', 'Địa chỉ D', '0987123456'),
('Nhà xuất bản E', 'Địa chỉ E', '0123456789'),
('Nhà xuất bản F', 'Địa chỉ F', '0987654321'),
('Nhà xuất bản G', 'Địa chỉ G', '0123498765'),
('Nhà xuất bản H', 'Địa chỉ H', '0987123456'),
('Nhà xuất bản I', 'Địa chỉ I', '0123456789'),
('Nhà xuất bản J', 'Địa chỉ J', '0987654321');

-- SQLINES DEMO *** �p dữ liệu cho các bảng còn lại tương tự với câu lệnh INSERT tương ứng

-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO KhachHang (TenKhachHang, DiaChi, SoDienThoai) VALUES 
('Khách hàng A', 'Địa chỉ A', '0123456789'),
('Khách hàng B', 'Địa chỉ B', '0987654321'),
('Khách hàng C', 'Địa chỉ C', '0123498765'),
('Khách hàng D', 'Địa chỉ D', '0987123456'),
('Khách hàng E', 'Địa chỉ E', '0123456789'),
('Khách hàng F', 'Địa chỉ F', '0987654321'),
('Khách hàng G', 'Địa chỉ G', '0123498765'),
('Khách hàng H', 'Địa chỉ H', '0987123456'),
('Khách hàng I', 'Địa chỉ I', '0123456789'),
('Khách hàng J', 'Địa chỉ J', '0987654321');

-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO TacGia (TenTacGia, DiaChi, SoDienThoai) VALUES 
('Tác giả A', 'Địa chỉ A', '0123456789'),
('Tác giả B', 'Địa chỉ B', '0987654321'),
('Tác giả C', 'Địa chỉ C', '0123498765'),
('Tác giả D', 'Địa chỉ D', '0987123456'),
('Tác giả E', 'Địa chỉ E', '0123456789'),
('Tác giả F', 'Địa chỉ F', '0987654321'),
('Tác giả G', 'Địa chỉ G', '0123498765'),
('Tác giả H', 'Địa chỉ H', '0987123456'),
('Tác giả I', 'Địa chỉ I', '0123456789'),
('Tác giả J', 'Địa chỉ J', '0987654321');

-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO Sach (TenSach, MaTheLoaiSach, MaTacGia, MaNhaXuatBan, SoLuong, GhiChu) VALUES 
('Sách A', 1, 1, 1, 50, 'Ghi chú cho Sách A'),
('Sách B', 2, 2, 2, 30, 'Ghi chú cho Sách B'),
('Sách C', 3, 3, 3, 20, 'Ghi chú cho Sách C'),
('Sách D', 4, 4, 4, 40, 'Ghi chú cho Sách D'),
('Sách E', 5, 5, 5, 60, 'Ghi chú cho Sách E'),
('Sách F', 6, 6, 6, 25, 'Ghi chú cho Sách F'),
('Sách G', 7, 7, 7, 35, 'Ghi chú cho Sách G'),
('Sách H', 8, 8, 8, 45, 'Ghi chú cho Sách H'),
('Sách I', 9, 9, 9, 55, 'Ghi chú cho Sách I'),
('Sách J', 10, 10, 10, 65, 'Ghi chú cho Sách J');


-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO Sach (TenSach, MaTheLoaiSach, MaTacGia, MaNhaXuatBan, SoLuong, GhiChu)
VALUES 
    ('Sach 1', 1, 1, 1, 10, 'Ghi chú 1'),
    ('Sach 2', 1, 1, 1, 15, 'Ghi chú 2'),
    ('Sach 3', 1, 1, 1, 20, 'Ghi chú 3'),
    ('Sach 4', 1, 1, 1, 25, 'Ghi chú 4'),
    ('Sach 5', 1, 1, 1, 30, 'Ghi chú 5'),
    ('Sach 6', 1, 1, 1, 35, 'Ghi chú 6'),
    ('Sach 7', 1, 1, 1, 40, 'Ghi chú 7'),
    ('Sach 8', 1, 1, 1, 45, 'Ghi chú 8'),
    ('Sach 9', 1, 1, 1, 50, 'Ghi chú 9'),
    ('Sach 10', 1, 1, 1, 55, 'Ghi chú 10'),
    ('Sach 11', 1, 1, 1, 60, 'Ghi chú 11'),
    ('Sach 12', 1, 1, 1, 65, 'Ghi chú 12'),
    ('Sach 13', 1, 1, 1, 70, 'Ghi chú 13'),
    ('Sach 14', 1, 1, 1, 75, 'Ghi chú 14'),
    ('Sach 15', 1, 1, 1, 80, 'Ghi chú 15'),
    ('Sach 16', 1, 1, 1, 85, 'Ghi chú 16'),
    ('Sach 17', 1, 1, 1, 90, 'Ghi chú 17'),
    ('Sach 18', 1, 1, 1, 95, 'Ghi chú 18'),
    ('Sach 19', 1, 1, 1, 100, 'Ghi chú 19'),
    ('Sach 20', 1, 1, 1, 105, 'Ghi chú 20');


-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO NhaCungCap (TenNhaCungCap, DiaChi, SoDienThoai) VALUES 
('Nhà cung cấp A', 'Địa chỉ A', '0123456789'),
('Nhà cung cấp B', 'Địa chỉ B', '0987654321'),
('Nhà cung cấp C', 'Địa chỉ C', '0123498765'),
('Nhà cung cấp D', 'Địa chỉ D', '0987123456'),
('Nhà cung cấp E', 'Địa chỉ E', '0123456789'),
('Nhà cung cấp F', 'Địa chỉ F', '0987654321'),
('Nhà cung cấp G', 'Địa chỉ G', '0123498765'),
('Nhà cung cấp H', 'Địa chỉ H', '0987123456'),
('Nhà cung cấp I', 'Địa chỉ I', '0123456789'),
('Nhà cung cấp J', 'Địa chỉ J', '0987654321');

-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO NguoiDung (Pass, Per) VALUES 
('passA', 1),
('passB', 2),
('passC', 1),
('passD', 2),
('passE', 1),
('passF', 2),
('passG', 1),
('passH', 2),
('passI', 1),
('passJ', 2);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO NhanVien (TenNhanVien, GioiTinh, DiaChi, SoDienThoai, NgaySinh) VALUES 
('Nhân viên A', 'Nam', 'Địa chỉ A', '0123456789', '1990-01-01'),
('Nhân viênn B', 'Nam', 'Địa chỉ B', '0987654321', '1991-02-02'),
('Nhân viên C', 'Nữ', 'Địa chỉ C', '0123498765', '1992-03-03'),
('Nhân viên D', 'Nữ', 'Địa chỉ D', '0987123456', '1993-04-04'),
('Nhân viên E', 'Nam', 'Địa chỉ E', '0123456789', '1994-05-05'),
('Nhân viên F', 'Nam', 'Địa chỉ F', '0987654321', '1995-06-06'),
('Nhân viên G', 'Nữ', 'Địa chỉ G', '0123498765', '1996-07-07'),
('Nhân viên H', 'Nữ', 'Địa chỉ H', '0987123456', '1997-08-08'),
('Nhân viên I', 'Nam', 'Địa chỉ I', '0123456789', '1998-09-09'),
('Nhân viên J', 'Nam', 'Địa chỉ J', '0987654321', '1999-10-10');

-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO HoaDonBan (NgayBan, MaNhanVien, MaKhachHang, TongTien) VALUES
('2023-01-01', 1, 1, 100000),
('2023-01-02', 2, 2, 150000),
('2023-01-03', 3, 3, 200000),
('2023-01-04', 4, 4, 250000),
('2023-01-05', 5, 5, 300000),
('2023-01-06', 6, 6, 350000),
('2023-01-07', 7, 7, 400000),
('2023-01-08', 8, 8, 450000),
('2023-01-09', 9, 9, 500000),
('2023-01-10', 10, 10, 550000);


-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO ChiTietHoaDonBan (MaHoaDonBan, MaSach, SoLuong, DonGia, ThanhTien) VALUES
(1, 3, 2, 50000, 100000),
(2, 4, 3, 50000, 150000),
(3, 5, 4, 50000, 200000),
(4, 6, 5, 50000, 250000),
(5, 7, 6, 50000, 300000),
(6, 8, 7, 50000, 350000),
(7, 9, 8, 50000, 400000),
(8, 10, 9, 50000, 450000),
(9, 11, 10, 50000, 500000),
(10, 12, 11, 50000, 550000);


-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO HoaDonNhap (NgayNhap, MaNhanVien, MaNhaCungCap, TongTien) VALUES
('2023-01-01', 1, 1, 100000),
('2023-01-02', 2, 2, 150000),
('2023-01-03', 3, 3, 200000),
('2023-01-04', 4, 4, 250000),
('2023-01-05', 5, 5, 300000),
('2023-01-06', 6, 6, 350000),
('2023-01-07', 7, 7, 400000),
('2023-01-08', 8, 8, 450000),
('2023-01-09', 9, 9, 500000),
('2023-01-10', 10, 10, 550000);


-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO ChiTietHoaDonNhap (MaHoaDonNhap, MaSach, SoLuong, DonGia, ThanhTien) VALUES
(1, 3, 2, 50000, 100000),
(2, 4, 3, 50000, 150000),
(3, 5, 4, 50000, 200000),
(4, 6, 5, 50000, 250000),
(5, 7, 6, 50000, 300000),
(6, 8, 7, 50000, 350000),
(7, 9, 8, 50000, 400000),
(8, 10, 9, 50000, 450000),
(9, 11, 10, 50000, 500000),
(10, 12, 11, 50000, 550000);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO TinTuc (TieuDe, NoiDung, ThoiGianDang, UserID) VALUES
('Tin tức 1', 'Nội dung tin tức 1', '2023-01-01', 1),
('Tin tức 2', 'Nội dung tin tức 2', '2023-01-02', 2),
('Tin tức 3', 'Nội dung tin tức 3', '2023-01-03', 3),
('Tin tức 4', 'Nội dung tin tức 4', '2023-01-04', 4),
('Tin tức 5', 'Nội dung tin tức 5', '2023-01-05', 5),
('Tin tức 6', 'Nội dung tin tức 6', '2023-01-06', 6),
('Tin tức 7', 'Nội dung tin tức 7', '2023-01-07', 7),
('Tin tức 8', 'Nội dung tin tức 8', '2023-01-08', 8),
('Tin tức 9', 'Nội dung tin tức 9', '2023-01-09', 9),
('Tin tức 10', 'Nội dung tin tức 10', '2023-01-10', 10);

-- SQLINES DEMO *** i vào bảng KhuyenMai
-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO KhuyenMai (MaSach, KhuyenMai, NgayBatDau, NgayKetThuc)
VALUES 
(3, 0.1, '2024-04-01', '2024-04-30'),
(4, 0.15, '2024-04-05', '2024-04-20'),
(5, 0.2, '2024-03-25', '2024-04-10'),
(6, 0.1, '2024-04-10', '2024-05-01'),
(7, 0.05, '2024-04-15', '2024-04-30'),
(8, 0.2, '2024-04-01', '2024-04-15'),
(9, 0.15, '2024-04-08', '2024-04-25'),
(10, 0.1, '2024-04-20', '2024-05-05'),
(11, 0.2, '2024-04-02', '2024-04-18'),
(12, 0.1, '2024-04-12', '2024-04-28');


-- SQLINES DEMO *** i vào bảng AnhSach với đường dẫn ảnh nằm trong ổ D
-- SQLINES LICENSE FOR EVALUATION USE ONLY
INSERT INTO AnhSach (MaSach, Anh)
VALUES 
(3, 'D:DoAn3HinhAnhSach1.jpg');
--  SQLINES DEMO *** _2.jpg'),
--  SQLINES DEMO *** _3.jpg'),
--  SQLINES DEMO *** _4.jpg'),
--  SQLINES DEMO *** _5.jpg'),
--  SQLINES DEMO *** _6.jpg'),
--  SQLINES DEMO *** _7.jpg'),
--  SQLINES DEMO *** e_8.jpg'),
--  SQLINES DEMO *** e_9.jpg'),
--  SQLINES DEMO *** e_10.jpg');

SELECT * FROM AnhSach;









/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
Delimiter //

Create PROCEDURE `sp_theloaisach_get_by_id`(p_MaTheLoaiSach int)
    BEGIN
      SELECT  *
      FROM TheLoaiSach
      where MaTheLoaiSach= p_MaTheLoaiSach;
    END;
//

DELIMITER ;



-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE sp_theloaisach_GetAll()
BEGIN
    SELECT *
    FROM TheLoaiSach;
END;

/* SET ANSI_NULLS ON */
//

DELIMITER ;
CALL sp_theloaisach_GetAll();


/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
Delimiter //

Create PROCEDURE `sp_nhaxuatban_get_by_id`(p_MaNhaXuatBan int)
    BEGIN
      SELECT  *
      FROM NhaXuatBan
      where MaNhaXuatBan= p_MaNhaXuatBan;
    END;
//

DELIMITER ;



/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
Delimiter //

Create PROCEDURE `sp_khachhang_get_by_id`(p_MaKhachHang int)
    BEGIN
      SELECT  *
      FROM KhachHang
      where MaKhachHang= p_MaKhachHang;
    END;
//

DELIMITER ;



/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
Delimiter //

Create PROCEDURE `sp_tacgia_get_by_id`(p_MaTacGia int)
    BEGIN
      SELECT  *
      FROM TacGia
      where MaTacGia= p_MaTacGia;
    END;
//

DELIMITER ;




/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_sach_get_by_id_admin`(p_MaSach INT)
BEGIN
    --  SQLINES DEMO *** uc int;
    --  SQLINES DEMO ***  (select MaChuyenMuc from SanPhams where MaSanPham = @MaSanPham);
    SELECT S.MaSach,
        S.TenSach,
        TLS.TheLoaiSach AS TenTheLoai,
        TG.TenTacGia AS TenTacGia,
        NXB.TenNhaXuatBan AS TenNhaXuatBan,
        S.SoLuong,
        S.GhiChu,
        S.GiaSach,
        (
            SELECT JSON_ARRAYAGG(JSON_OBJECT('MaSach', sp.MaSach, 'TenSach', sp.TenSach)) 
            FROM Sach AS sp
            WHERE sp.MaTheLoaiSach = s.MaTheLoaiSach
            LIMIT 6
        ) AS list_json_sachlienquan
    FROM Sach AS s     
    INNER JOIN TheLoaiSach TLS ON S.MaTheLoaiSach = TLS.MaTheLoaiSach
    INNER JOIN TacGia TG ON S.MaTacGia = TG.MaTacGia
    INNER JOIN NhaXuatBan NXB ON S.MaNhaXuatBan = NXB.MaNhaXuatBan
    WHERE s.MaSach = p_MaSach;
END;
//

DELIMITER ;
ALTER TABLE Truyen
ADD COLUMN GiaTruyen float; -- DECIMAL(10, 2) là kiểu dữ liệu số thập phân, có 10 chữ số tổng cộng với 2 chữ số sau dấu thập phân. Bạn có thể điều chỉnh kiểu dữ liệu phù hợp với yêu cầu của mình.


CALL sp_sach_get_by_id_admin(3);


/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_sach_get_by_id_nguoidung`(p_MaSach INT)
BEGIN
    --  SQLINES DEMO *** uc int;
    --  SQLINES DEMO ***  (select MaChuyenMuc from SanPhams where MaSanPham = @MaSanPham);
    SELECT S.MaSach,
        S.TenSach,
        TLS.TheLoaiSach AS TenTheLoai,
        TG.TenTacGia AS TenTacGia,
        NXB.TenNhaXuatBan AS TenNhaXuatBan,
        S.SoLuong,
        S.GhiChu,
        (
            SELECT JSON_ARRAYAGG(JSON_OBJECT('MaSach', sp.MaSach, 'TenSach', sp.TenSach)) 
            FROM Sach AS sp
            WHERE sp.MaTheLoaiSach = s.MaTheLoaiSach
            LIMIT 6
        ) AS list_json_sachlienquan
    FROM Sach AS s     
    INNER JOIN TheLoaiSach TLS ON S.MaTheLoaiSach = TLS.MaTheLoaiSach
    INNER JOIN TacGia TG ON S.MaTacGia = TG.MaTacGia
    INNER JOIN NhaXuatBan NXB ON S.MaNhaXuatBan = NXB.MaNhaXuatBan
    WHERE s.MaSach = p_MaSach;
END;
//

DELIMITER ;



call `sp_sach_get_by_id_nguoidung`(7)






























/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
Delimiter //

Create PROCEDURE `sp_nhacungcap_get_by_id`(p_MaNhaCungCap int)
    BEGIN
      SELECT  *
      FROM NhaCungCap
      where MaNhaCungCap= p_MaNhaCungCap;
    END;
//

DELIMITER ;



/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
Delimiter //

Create PROCEDURE `sp_nguoidung_get_by_id`(p_UserID int)
    BEGIN
      SELECT  *
      FROM NguoiDung
      where UserID= p_UserID;
    END;
//

DELIMITER ;



/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
Delimiter //

Create PROCEDURE `sp_nhanvien_get_by_id`(p_MaNhanVien int)
    BEGIN
      SELECT  *
      FROM NhanVien
      where MaNhanVien= p_MaNhanVien;
    END;
//

DELIMITER ;




/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoadonban_get_by_id`(p_MaHoaDonBan INT)
BEGIN
    SELECT h.*, 
        (
            SELECT JSON_ARRAYAGG(JSON_OBJECT('MaChiTietHoaDonBan', c.MaChiTietHoaDonBan, 'MaHoaDonBan', c.MaHoaDonBan, 'MaSach', c.MaSach, 'SoLuong', c.SoLuong, 'DonGia', c.DonGia)) 
            FROM ChiTietHoaDonBan AS c
            WHERE h.MaHoaDonBan = c.MaHoaDonBan
        ) AS list_json_chitiethoadonban
    FROM HoaDonBan AS h
    WHERE  h.MaHoaDonBan = p_MaHoaDonBan;
END;
//

DELIMITER ;



execute sp_hoadonban_get_by_id  1


/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoadonnhap_get_by_id`(p_MaHoaDonNhap INT)
BEGIN
    SELECT h.*, 
        (
            SELECT JSON_ARRAYAGG(JSON_OBJECT('MaChiTietHoaDonNhap', c.MaChiTietHoaDonNhap, 'MaHoaDonNhap', c.MaHoaDonNhap, 'MaSach', c.MaSach, 'SoLuong', c.SoLuong, 'DonGia', c.DonGia)) 
            FROM ChiTietHoaDonNhap AS c
            WHERE h.MaHoaDonNhap = c.MaHoaDonNhap
        ) AS list_json_chitiethoadonnhap
    FROM HoaDonNhap AS h
    WHERE  h.MaHoaDonNhap = p_MaHoaDonNhap;
END;
//

DELIMITER ;



execute sp_hoadonnhap_get_by_id  1




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_tintuc_get_by_id` ( p_MaTinTuc INT)
BEGIN
    SELECT 
        TT.MaTinTuc,
        TT.TieuDe,
        TT.NoiDung,
        TT.ThoiGianDang,
        ND.UserID
    FROM 
        TinTuc TT
    INNER JOIN 
        NguoiDung ND ON TT.UserID = ND.UserID
    WHERE 
        TT.MaTinTuc = p_MaTinTuc;
END;
call `sp_tintuc_get_by_id`(1);









/* SET ANSI_NULLS ON */
//

DELIMITER ;


/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_theloaisach_create`(
    p_TheLoaiSach NVARCHAR(100)
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO TheLoaiSach(TheLoaiSach)
    VALUES (p_TheLoaiSach);
END;
//

DELIMITER ;


--  SQLINES DEMO *** --------------------
/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhaxuatban_create`(
    p_TenNhaXuatBan NVARCHAR(100),
    p_DiaChi NVARCHAR(250),
    p_SoDienThoai NVARCHAR(10)
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO NhaXuatBan(TenNhaXuatBan, DiaChi, SoDienThoai)
    VALUES (p_TenNhaXuatBan, p_DiaChi, p_SoDienThoai);
END;
//

DELIMITER ;






/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_khachhang_create`(
    p_TenKhachHang NVARCHAR(100),
    p_DiaChi NVARCHAR(250),
    p_SoDienThoai NVARCHAR(10)
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO KhachHang(TenKhachHang, DiaChi, SoDienThoai)
    VALUES (p_TenKhachHang, p_DiaChi, p_SoDienThoai);
END;
//

DELIMITER ;






/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_tacgia_create`(
    p_TenTacGia NVARCHAR(100),
    p_DiaChi NVARCHAR(250),
    p_SoDienThoai NVARCHAR(10)
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO TacGia(TenTacGia, DiaChi, SoDienThoai)
    VALUES (p_TenTacGia, p_DiaChi, p_SoDienThoai);
END;
//

DELIMITER ;





/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_sach_create`(
    p_TenSach NVARCHAR(100),
    p_MaTheLoaiSach INT,
    p_MaTacGia INT,
    p_MaNhaXuatBan INT,
    p_SoLuong INT,
    p_GhiChu LONGTEXT
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO Sach(TenSach, MaTheLoaiSach, MaTacGia, MaNhaXuatBan, SoLuong, GhiChu)
    VALUES (p_TenSach, p_MaTheLoaiSach, p_MaTacGia, p_MaNhaXuatBan, p_SoLuong, p_GhiChu);
END;
//

DELIMITER ;



/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhacungcap_create`(
    p_TenNhaCungCap NVARCHAR(100),
    p_DiaChi NVARCHAR(250),
    p_SoDienThoai NVARCHAR(10)
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO NhaCungCap(TenNhaCungCap, DiaChi, SoDienThoai)
    VALUES (p_TenNhaCungCap, p_DiaChi, p_SoDienThoai);
END;
//

DELIMITER ;




/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nguoidung_create`(
    p_Pass NVARCHAR(50),
    p_Per INT
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO NguoiDung(Pass, Per)
    VALUES (p_Pass, p_Per);
END;
//

DELIMITER ;




/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhanvien_create`(
    p_TenNhanVien NVARCHAR(50),
    p_GioiTinh NVARCHAR(10),
    p_DiaChi NVARCHAR(250),
    p_SoDienThoai NVARCHAR(20),
    p_NgaySinh DATE
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO NhanVien(TenNhanVien, GioiTinh, DiaChi, SoDienThoai, NgaySinh)
    VALUES (p_TenNhanVien, p_GioiTinh, p_DiaChi, p_SoDienThoai, p_NgaySinh);
END;
//

DELIMITER ;






/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoadonban_create`
(
    IN p_MaNhanVien NVARCHAR(50), 
    IN p_MaKhachHang NVARCHAR(250),
    IN p_NgayBan DATETIME(3),
    IN p_TongTien NVARCHAR(250),
    IN p_list_json_chitiethoadonban LONGTEXT
)
BEGIN
    DECLARE v_MaHoaDonBan INT;
    
    -- Insert vào bảng HoaDonBan
    INSERT INTO HoaDonBan
        (MaNhanVien, MaKhachHang, NgayBan, TongTien)
    VALUES
        (p_MaNhanVien, p_MaKhachHang, p_NgayBan, p_TongTien);
    
    -- Lấy ID của hoá đơn vừa thêm
    SET v_MaHoaDonBan = LAST_INSERT_ID();
    
    -- Nếu có danh sách chi tiết hoá đơn được cung cấp
    IF p_list_json_chitiethoadonban IS NOT NULL THEN
        -- Chèn các bản ghi vào bảng ChiTietHoaDonBan
        INSERT INTO ChiTietHoaDonBan
            (MaHoaDonBan, MaSach, SoLuong, DonGia, ThanhTien)
        SELECT
            v_MaHoaDonBan,
            JSON_VALUE(p.value, '$.maSach'),
            JSON_VALUE(p.value, '$.soLuong'),
            JSON_VALUE(p.value, '$.donGia'),
            JSON_VALUE(p.value, '$.thanhTien')
        FROM
            JSON_TABLE(p_list_json_chitiethoadonban,
                       '$[*]'
                        COLUMNS(
                            maSach INT PATH '$.maSach',
                            soLuong INT PATH '$.soLuong',
                            donGia DECIMAL(10,2) PATH '$.donGia',
                            thanhTien DECIMAL(10,2) PATH '$.thanhTien'
                        )
            ) AS p;
    END IF;
    
    SELECT ''; -- Trả về một kết quả rỗng
END;
//

DELIMITER ;



CALL `sp_hoadonban_create`(p_MaNhanVien = N'10',
    p_MaKhachHang = N'10',
    p_NgayBan = '2023-12-12',
	p_TongTien = N'100000',
    p_list_json_chitiethoadonban = N'[
        {
            "MaHoaDonBan": 5,
            "MaSach": 10,
            "SoLuong": 10,
            "DonGia": 10000,
            "ThanhTien": 100000
        }
    ]');

/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoadonnhap_create`
(
    IN p_MaNhanVien NVARCHAR(50), 
    IN p_MaNhaCungCap NVARCHAR(250),
    IN p_NgayNhap DATETIME(3),
    IN p_TongTien NVARCHAR(250),
    IN p_list_json_chitiethoadonnhap LONGTEXT
)
BEGIN
    DECLARE v_MaHoaDonNhap INT;
    
    -- Insert vào bảng HoaDonNhap
    INSERT INTO HoaDonNhap
        (MaNhanVien, MaNhaCungCap, NgayNhap, TongTien)
    VALUES
        (p_MaNhanVien, p_MaNhaCungCap, p_NgayNhap, p_TongTien);
    
    -- Lấy ID của hoá đơn vừa thêm
    SET v_MaHoaDonNhap = LAST_INSERT_ID();
    
    -- Nếu có danh sách chi tiết hoá đơn được cung cấp
    IF p_list_json_chitiethoadonnhap IS NOT NULL THEN
        -- Chèn các bản ghi vào bảng ChiTietHoaDonNhap
        INSERT INTO ChiTietHoaDonNhap
            (MaHoaDonNhap, MaSach, SoLuong, DonGia, ThanhTien)
        SELECT
            v_MaHoaDonNhap,
            JSON_VALUE(p.value, '$.maSach'),
            JSON_VALUE(p.value, '$.soLuong'),
            JSON_VALUE(p.value, '$.donGia'),
            JSON_VALUE(p.value, '$.thanhTien')
        FROM
            JSON_TABLE(p_list_json_chitiethoadonnhap,
                       '$[*]'
                        COLUMNS(
                            maSach INT PATH '$.maSach',
                            soLuong INT PATH '$.soLuong',
                            donGia DECIMAL(10,2) PATH '$.donGia',
                            thanhTien DECIMAL(10,2) PATH '$.thanhTien'
                        )
            ) AS p;
    END IF;
    
    SELECT ''; -- Trả về một kết quả rỗng
END;
//

DELIMITER ;



CALL `sp_hoadonnhap_create`(p_MaNhanVien = N'10',
    p_MaNhaCungCap = N'10',
    p_NgayNhap = '2023-12-12',
	p_TongTien = N'100000',
    p_list_json_chitiethoadonnhap = N'[
        {
			"MaHoaDonNhap": 5,
            "MaSach": 10,
            "SoLuong": 10,
            "DonGia": 10000,
            "ThanhTien": 100000
        }
    ]');






/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_tintuc_create`(
    p_TieuDe NVARCHAR(250),
    p_NoiDung LONGTEXT,
    p_ThoiGianDang DATETIME(3),
    p_UserID INT
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO TinTuc(TieuDe, NoiDung, ThoiGianDang, UserID)
    VALUES (p_TieuDe, p_NoiDung, p_ThoiGianDang, p_UserID);
END;
//

DELIMITER ;




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_khuyenmai_create`(
    p_MaSach INT,
    p_KhuyenMai DOUBLE,
    p_NgayBatDau DATE,
    p_NgayKetThuc DATE
)
BEGIN
    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO KhuyenMai(MaSach, KhuyenMai, NgayBatDau, NgayKetThuc)
    VALUES (p_MaSach, p_KhuyenMai, p_NgayBatDau, p_NgayKetThuc);
END;
//

DELIMITER ;
















/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
delimiter //

create PROCEDURE `sp_khach_update`(
p_Id int,
p_TenKH nvarchar(50),
p_GioiTinh tinyint,
p_DiaChi nvarchar(250),
p_SDT nvarchar(50),
p_Email nvarchar(250)
)
    BEGIN
		update KhachHangs set TenKH = p_TenKH where id = p_Id; 
    END;
//

delimiter ;








/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_theloaisach_update`
(
    p_Id int,
    p_TheLoaiSach nvarchar(100)
)
BEGIN
    UPDATE TheLoaiSach
    SET TheLoaiSach = p_TheLoaiSach
    WHERE MaTheLoaiSach = p_Id; 
END;
//

DELIMITER ;


call `sp_theloaisach_update`(11, N'Khoa học')


/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhaxuatban_update`
(
    p_Id int,
    p_TenNhaXuatBan nvarchar(100),
    p_DiaChi nvarchar(250),
    p_SoDienThoai nvarchar(10)
)
BEGIN
    UPDATE NhaXuatBan
    SET 
        TenNhaXuatBan = p_TenNhaXuatBan,
        DiaChi = p_DiaChi,
        SoDienThoai = p_SoDienThoai
    WHERE MaNhaXuatBan = p_Id; 
END;
//

DELIMITER ;






/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_khachhang_update`
(
    p_Id int,
    p_TenKhachHang nvarchar(100),
    p_DiaChi nvarchar(250),
    p_SoDienThoai nvarchar(10)
)
BEGIN
    UPDATE KhachHang
    SET 
        TenKhachHang = p_TenKhachHang,
        DiaChi = p_DiaChi,
        SoDienThoai = p_SoDienThoai
    WHERE MaKhachHang = p_Id; 
END;
//

DELIMITER ;







/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_tacgia_update`
(
    p_Id int,
    p_TenTacGia nvarchar(100),
    p_DiaChi nvarchar(250),
    p_SoDienThoai nvarchar(10)
)
BEGIN
    UPDATE TacGia
    SET 
        TenTacGia = p_TenTacGia,
        DiaChi = p_DiaChi,
        SoDienThoai = p_SoDienThoai
    WHERE MaTacGia = p_Id; 
END;
//

DELIMITER ;






/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_sach_update`
(
    p_Id int,
    p_TenSach nvarchar(100),
    p_MaTheLoaiSach int,
    p_MaTacGia int,
    p_MaNhaXuatBan int,
    p_SoLuong int,
    p_GhiChu longtext
)
BEGIN
    UPDATE Sach
    SET 
        TenSach = p_TenSach,
        MaTheLoaiSach = p_MaTheLoaiSach,
        MaTacGia = p_MaTacGia,
        MaNhaXuatBan = p_MaNhaXuatBan,
        SoLuong = p_SoLuong,
        GhiChu = p_GhiChu
    WHERE MaSach = p_Id; 
END;
//

DELIMITER ;





/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhacungcap_update`
(
    p_Id int,
    p_TenNhaCungCap nvarchar(100),
    p_DiaChi nvarchar(250),
    p_SoDienThoai nvarchar(10)
)
BEGIN
    UPDATE NhaCungCap
    SET 
        TenNhaCungCap = p_TenNhaCungCap,
        DiaChi = p_DiaChi,
        SoDienThoai = p_SoDienThoai
    WHERE MaNhaCungCap = p_Id; 
END;
//

DELIMITER ;





/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nguoidung_update`
(
    p_Id int,
    p_Pass nvarchar(50),
    p_Per int
)
BEGIN
    UPDATE NguoiDung
    SET 
        Pass = p_Pass,
        Per = p_Per
    WHERE UserID = p_Id; 
END;
//

DELIMITER ;





/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhanvien_update`
(
    p_Id int,
    p_TenNhanVien nvarchar(50),
    p_GioiTinh nvarchar(10),
    p_DiaChi nvarchar(250),
    p_SoDienThoai nvarchar(20),
    p_NgaySinh date
)
BEGIN
    UPDATE NhanVien
    SET 
        TenNhanVien = p_TenNhanVien,
        GioiTinh = p_GioiTinh,
        DiaChi = p_DiaChi,
        SoDienThoai = p_SoDienThoai,
        NgaySinh = p_NgaySinh
    WHERE MaNhanVien = p_Id; 
END;
//

DELIMITER ;












/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoa_don_ban_update`
(
    IN p_MaHoaDonBan INT,
    IN p_MaNhanVien NVARCHAR(50),
    IN p_MaKhachHang NVARCHAR(250),
    IN p_list_json_chitiethoadonban LONGTEXT
)
BEGIN
    -- Cập nhật thông tin của hoá đơn bán
    UPDATE HoaDonBan
    SET
        MaNhanVien = p_MaNhanVien,
        MaKhachHang = p_MaKhachHang
    WHERE MaHoaDonBan = p_MaHoaDonBan;

    -- Nếu danh sách chi tiết hoá đơn được cung cấp
    IF p_list_json_chitiethoadonban IS NOT NULL THEN
        -- Tạo bảng tạm thời để lưu trữ dữ liệu từ JSON
        CREATE TEMPORARY TABLE tmp_Results (
            MaCTHoaDonBan INT,
            MaHoaDonBan INT,
            MaSach INT,
            SoLuong INT,
            DonGia DECIMAL(10,2),
            ThanhTien DECIMAL(10,2)
        );

        -- Chèn dữ liệu từ JSON vào bảng tạm thời
        INSERT INTO tmp_Results (MaCTHoaDonBan, MaHoaDonBan, MaSach, SoLuong, DonGia, ThanhTien)
        SELECT
            JSON_VALUE(p.value, '$.maCTHoaDonBan'),
            JSON_VALUE(p.value, '$.maHoaDonBan'),
            JSON_VALUE(p.value, '$.maSach'),
            JSON_VALUE(p.value, '$.soLuong'),
            JSON_VALUE(p.value, '$.donGia'),
            JSON_VALUE(p.value, '$.thanhTien')
        FROM
            JSON_TABLE(p_list_json_chitiethoadonban,
                       '$[*]'
                        COLUMNS(
                            maCTHoaDonBan INT PATH '$.maCTHoaDonBan',
                            maHoaDonBan INT PATH '$.maHoaDonBan',
                            maSach INT PATH '$.maSach',
                            soLuong INT PATH '$.soLuong',
                            donGia DECIMAL(10,2) PATH '$.donGia',
                            thanhTien DECIMAL(10,2) PATH '$.thanhTien'
                        )
            ) AS p;

        -- Cập nhật thông tin chi tiết hoá đơn bán
        UPDATE ChiTietHoaDonBan AS c
        INNER JOIN tmp_Results AS t ON c.MaCTHoaDonBan = t.MaCTHoaDonBan
        SET
            c.SoLuong = t.SoLuong,
            c.DonGia = t.DonGia,
            c.ThanhTien = t.ThanhTien;
        
        -- Xóa bảng tạm thời
        DROP TEMPORARY TABLE IF EXISTS tmp_Results;
    END IF;
END;
//

DELIMITER ;



CALL `sp_hoa_don_ban_update`(p_MaHoaDonBan = N'39',
    p_MaNhanVien = N'8',
    p_MaKhachHang = N'10',
    p_list_json_chitiethoadonban = N'[
        {
			"MaCTHoaDonBan": 41,
            "MaHoaDonBan": 39,
            "MaSach": 8,
            "SoLuong": 10,
            "DonGia": 10000,
            "ThanhTien": 100000
        }
    ]');
-- SQLINES LICENSE FOR EVALUATION USE ONLY
select * from HoaDonBan where MaHoaDonBan = 39
-- SQLINES LICENSE FOR EVALUATION USE ONLY
select * from ChiTietHoaDonBan where MaCTHoaDonBan = 41






/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoa_don_nhap_update`
(
    IN p_MaHoaDonNhap INT,
    IN p_MaNhanVien NVARCHAR(50),
    IN p_MaNhaCungCap NVARCHAR(250),
    IN p_list_json_chitiethoadonnhap LONGTEXT
)
BEGIN
    -- Cập nhật thông tin của hoá đơn nhập
    UPDATE HoaDonNhap
    SET
        MaNhanVien = p_MaNhanVien,
        MaNhaCungCap = p_MaNhaCungCap
    WHERE MaHoaDonNhap = p_MaHoaDonNhap;

    -- Nếu danh sách chi tiết hoá đơn được cung cấp
    IF p_list_json_chitiethoadonnhap IS NOT NULL THEN
        -- Tạo bảng tạm thời để lưu trữ dữ liệu từ JSON
        CREATE TEMPORARY TABLE tmp_Results (
            MaCTHoaDonNhap INT,
            MaHoaDonNhap INT,
            MaSach INT,
            SoLuong INT,
            DonGia DECIMAL(10,2),
            ThanhTien DECIMAL(10,2)
        );

        -- Chèn dữ liệu từ JSON vào bảng tạm thời
        INSERT INTO tmp_Results (MaCTHoaDonNhap, MaHoaDonNhap, MaSach, SoLuong, DonGia, ThanhTien)
        SELECT
            JSON_VALUE(p.value, '$.maCTHoaDonNhap'),
            JSON_VALUE(p.value, '$.maHoaDonNhap'),
            JSON_VALUE(p.value, '$.maSach'),
            JSON_VALUE(p.value, '$.soLuong'),
            JSON_VALUE(p.value, '$.donGia'),
            JSON_VALUE(p.value, '$.thanhTien')
        FROM
            JSON_TABLE(p_list_json_chitiethoadonnhap,
                       '$[*]'
                        COLUMNS(
                            maCTHoaDonNhap INT PATH '$.maCTHoaDonNhap',
                            maHoaDonNhap INT PATH '$.maHoaDonNhap',
                            maSach INT PATH '$.maSach',
                            soLuong INT PATH '$.soLuong',
                            donGia DECIMAL(10,2) PATH '$.donGia',
                            thanhTien DECIMAL(10,2) PATH '$.thanhTien'
                        )
            ) AS p;
        
        -- Cập nhật hoặc chèn dữ liệu chi tiết hoá đơn nhập
        INSERT INTO ChiTietHoaDonNhap (MaHoaDonNhap, MaSach, SoLuong, DonGia, ThanhTien)
        SELECT
            tmp_Results.MaHoaDonNhap,
            tmp_Results.MaSach,
            tmp_Results.SoLuong,
            tmp_Results.DonGia,
            tmp_Results.ThanhTien
        FROM
            tmp_Results
        ON DUPLICATE KEY UPDATE
            SoLuong = VALUES(SoLuong),
            DonGia = VALUES(DonGia),
            ThanhTien = VALUES(ThanhTien);

        -- Xóa các bản ghi không tồn tại trong dữ liệu JSON
        DELETE C
        FROM ChiTietHoaDonNhap C
        LEFT JOIN tmp_Results R ON C.MaCTHoaDonNhap = R.MaCTHoaDonNhap
        WHERE R.MaCTHoaDonNhap IS NULL;

        -- Xóa bảng tạm thời
        DROP TEMPORARY TABLE IF EXISTS tmp_Results;
    END IF;
    
    SELECT ''; -- Trả về một kết quả rỗng
END;
//

DELIMITER ;





















/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoadonnhap_update`
(
    IN p_MaHoaDonNhap INT,
    IN p_MaNhaCungCap INT,
    IN p_MaNhanVien INT,
    IN p_list_json_chitiethoadonnhap LONGTEXT
)
BEGIN
    -- Cập nhật thông tin của hoá đơn nhập
    UPDATE HoaDonNhap
    SET
        MaNhaCungCap = p_MaNhaCungCap,
        MaNhanVien = p_MaNhanVien
    WHERE MaHoaDonNhap = p_MaHoaDonNhap;

    -- Nếu danh sách chi tiết hoá đơn được cung cấp
    IF p_list_json_chitiethoadonnhap IS NOT NULL THEN
        -- Tạo bảng tạm thời để lưu trữ dữ liệu từ JSON
        CREATE TEMPORARY TABLE tmp_Results (
            MaCTHoaDonNhap INT,
            MaHoaDonNhap INT,
            MaSach INT,
            SoLuong INT,
            ThanhTien DECIMAL(10,2),
            status INT
        );

        -- Chèn dữ liệu từ JSON vào bảng tạm thời
        INSERT INTO tmp_Results (MaCTHoaDonNhap, MaHoaDonNhap, MaSach, SoLuong, ThanhTien, status)
        SELECT
            JSON_VALUE(p.value, '$.MaCTHoaDonNhap'),
            JSON_VALUE(p.value, '$.MaHoaDonNhap'),
            JSON_VALUE(p.value, '$.MaSach'),
            JSON_VALUE(p.value, '$.SoLuong'),
            JSON_VALUE(p.value, '$.ThanhTien'),
            JSON_VALUE(p.value, '$.status')
        FROM
            JSON_TABLE(p_list_json_chitiethoadonnhap, '$[*]' COLUMNS(
                value JSON PATH '$'
            )) AS p;

        -- Chèn hoặc cập nhật dữ liệu chi tiết hoá đơn nhập
        INSERT INTO ChiTietHoaDonNhap (MaSach, MaHoaDonNhap, SoLuong, ThanhTien)
        SELECT
            tmp_Results.MaSach,
            tmp_Results.MaHoaDonNhap,
            tmp_Results.SoLuong,
            tmp_Results.ThanhTien
        FROM
            tmp_Results
        WHERE
            tmp_Results.status = 1
        ON DUPLICATE KEY UPDATE
            SoLuong = VALUES(SoLuong),
            ThanhTien = VALUES(ThanhTien);

        -- Cập nhật dữ liệu chi tiết hoá đơn nhập
        UPDATE ChiTietHoaDonNhap AS c
        INNER JOIN tmp_Results AS t ON c.MaCTHoaDonNhap = t.MaCTHoaDonNhap
        SET
            c.SoLuong = t.SoLuong,
            c.ThanhTien = t.ThanhTien
        WHERE
            t.status = 2;

        -- Xóa các bản ghi chi tiết hoá đơn nhập
        DELETE C
        FROM ChiTietHoaDonNhap C
        INNER JOIN tmp_Results R ON C.MaCTHoaDonNhap = R.MaCTHoaDonNhap
        WHERE R.status = 3;

        -- Xóa bảng tạm thời
        DROP TEMPORARY TABLE IF EXISTS tmp_Results;
    END IF;
    
    SELECT ''; -- Trả về một kết quả rỗng
END;
//

DELIMITER ;




/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_tintuc_update`
(
    p_MaTinTuc INT,
    p_TieuDe NVARCHAR(250),
    p_NoiDung LONGTEXT,
    p_ThoiGianDang DATETIME(3),
    p_UserID INT
)
BEGIN
    UPDATE TinTuc
    SET 
        TieuDe = p_TieuDe,
        NoiDung = p_NoiDung,
        ThoiGianDang = p_ThoiGianDang,
        UserID = p_UserID
    WHERE MaTinTuc = p_MaTinTuc;
END;
//

DELIMITER ;



-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_khuyenmai_update`(
    p_MaKhuyenMai INT,
    p_MaSach INT,
    p_KhuyenMai DOUBLE,
    p_NgayBatDau DATE,
    p_NgayKetThuc DATE
)
BEGIN
    UPDATE KhuyenMai
    SET MaSach = p_MaSach,
        KhuyenMai = p_KhuyenMai,
        NgayBatDau = p_NgayBatDau,
        NgayKetThuc = p_NgayKetThuc
    WHERE MaKhuyenMai = p_MaKhuyenMai;
END;
//

DELIMITER ;











/* SET ANSI_NULLS ON */
 
/* SET QUOTED_IDENTIFIER ON */
 

-- SQLINES LICENSE FOR EVALUATION USE ONLY
delimiter //

create PROCEDURE `sp_theloaisach_search` (p_page_index  INT, 
                                       p_page_size   INT,
									   p_the_loai_sach Nvarchar(50)
									   )
    BEGIN
        DECLARE v_RecordCount BIGINT;
        IF(p_page_size <> 0)
            THEN
                        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT(ROW_NUMBER() OVER(
                              ORDER BY TheLoaiSach ASC)) AS RowNumber, 
                              tls.MaTheLoaiSach,
							  tls.TheLoaiSach
                        FROM TheLoaiSach AS tls
					    WHERE  (p_the_loai_sach = '' Or tls.TheLoaiSach like Concat('%',p_the_loai_sach,'%'));                   
                        SELECT COUNT(*) INTO v_RecordCount
                        FROM tmp_Results1;
                        SELECT *, 
                               v_RecordCount AS RecordCount
                        FROM tmp_Results1
                        WHERE ROWNUMBER BETWEEN(p_page_index - 1) * p_page_size + 1 AND(((p_page_index - 1) * p_page_size + 1) + p_page_size) - 1
                              OR p_page_index = -1;
                        DROP TABLE tmp_Results1; 
            ELSE
                        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT(ROW_NUMBER() OVER(
                              ORDER BY TheLoaiSach ASC)) AS RowNumber, 
                              tls.MaTheLoaiSach,
							  tls.TheLoaiSach
                        FROM TheLoaiSach AS tls
					    WHERE  (p_the_loai_sach = '' Or tls.TheLoaiSach like Concat('%',p_the_loai_sach,'%'));                   
                        SELECT COUNT(*) INTO v_RecordCount
                        FROM tmp_Results2;
                        SELECT *, 
                               v_RecordCount AS RecordCount
                        FROM tmp_Results2;                        
                        DROP TABLE tmp_Results1; 
        END IF;
    END;
//

delimiter ;


execute sp_theloaisach_search 1,3,'Kinh doanh'









-- SQLINES LICENSE FOR EVALUATION USE ONLY
delimiter //

create PROCEDURE `sp_theloaisach1_search` ( 
    p_page_index INT, 
    p_page_size INT,
    p_the_loai_sach NVARCHAR(100),
    p_ma_the_loai_sach INT)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER (ORDER BY 
                CASE 
                    WHEN p_the_loai_sach = 'TheLoaiSach' THEN tls.TheLoaiSach 
                    ELSE tls.MaTheLoaiSach 
                END ASC)) AS RowNumber, 
            tls.MaTheLoaiSach,
            tls.TheLoaiSach,
            s.MaSach,
            s.TenSach,
            s.SoLuong,
            s.GhiChu
        FROM TheLoaiSach AS tls
        LEFT JOIN Sach AS s ON tls.MaTheLoaiSach = s.MaTheLoaiSach
        WHERE (p_the_loai_sach = '' OR tls.TheLoaiSach LIKE Concat('%' , p_the_loai_sach , '%'))
          OR (p_ma_the_loai_sach IS NULL OR tls.MaTheLoaiSach = p_ma_the_loai_sach);  

        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT *, v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE RowNumber BETWEEN (p_page_index - 1) * p_page_size + 1 
                           AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1;
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER (ORDER BY 
                CASE 
                    WHEN p_the_loai_sach = 'TheLoaiSach' THEN tls.TheLoaiSach 
                    ELSE tls.MaTheLoaiSach 
                END ASC)) AS RowNumber, 
            tls.MaTheLoaiSach,
            tls.TheLoaiSach,
            s.MaSach,
            s.TenSach,
            s.SoLuong,
            s.GhiChu
        FROM TheLoaiSach AS tls
        LEFT JOIN Sach AS s ON tls.MaTheLoaiSach = s.MaTheLoaiSach
        WHERE (p_the_loai_sach = '' OR tls.TheLoaiSach LIKE Concat('%' , p_the_loai_sach , '%'))
          AND (p_ma_the_loai_sach IS NULL OR tls.MaTheLoaiSach = p_ma_the_loai_sach);

        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT *, v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2;
    END IF;
END;


//

delimiter ;

CALL sp_theloaisach1_search(1, 3, 'SDFSDF', 1);










-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE sp_Sach_Theo_The_Loai_Sach (
    p_MaTheLoaiSach INT)
BEGIN
    SELECT Sach.MaSach, Sach.TenSach, TheLoaiSach.TheLoaiSach AS TenTheLoaiSach, TacGia.TenTacGia, NhaXuatBan.TenNhaXuatBan, Sach.SoLuong, Sach.GhiChu
    FROM Sach
    INNER JOIN TheLoaiSach ON Sach.MaTheLoaiSach = TheLoaiSach.MaTheLoaiSach
    LEFT JOIN TacGia ON Sach.MaTacGia = TacGia.MaTacGia
    LEFT JOIN NhaXuatBan ON Sach.MaNhaXuatBan = NhaXuatBan.MaNhaXuatBan
    WHERE Sach.MaTheLoaiSach = p_MaTheLoaiSach;
END;

execute sp_Sach_Theo_The_Loai_Sach 1
//

DELIMITER ;

call sp_Sach_Theo_The_Loai_Sach (1);


















-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhaxuatban_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_ten_nha_xuat_ban NVARCHAR(100)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenNhaXuatBan ASC)) AS RowNumber, 
            nxb.*
        FROM NhaXuatBan AS nxb
        WHERE (p_ten_nha_xuat_ban = '' OR nxb.TenNhaXuatBan LIKE Concat('%' , p_ten_nha_xuat_ban , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenNhaXuatBan ASC)) AS RowNumber, 
            nxb.*
        FROM NhaXuatBan AS nxb
        WHERE (p_ten_nha_xuat_ban = '' OR nxb.TenNhaXuatBan LIKE Concat('%' , p_ten_nha_xuat_ban , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;



call `sp_nhaxuatban_search`(1,3,N'Nhà xuất bản A')





-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_tacgia_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_ma_tac_gia INT,
    p_ten_tac_gia NVARCHAR(100)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenTacGia ASC)) AS RowNumber, 
            tg.MaTacGia,
            tg.TenTacGia
        FROM TacGia AS tg
        WHERE (p_ma_tac_gia = -1 OR tg.MaTacGia = p_ma_tac_gia)
              OR (p_ten_tac_gia = '' OR tg.TenTacGia LIKE Concat('%' , p_ten_tac_gia , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenTacGia ASC)) AS RowNumber, 
            tg.MaTacGia,
            tg.TenTacGia
        FROM TacGia AS tg
        WHERE (p_ma_tac_gia = -1 OR tg.MaTacGia = p_ma_tac_gia)
              OR (p_ten_tac_gia = '' OR tg.TenTacGia LIKE Concat('%' , p_ten_tac_gia , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;


call `sp_tacgia_search`(1,3,0,N'Tác giả A')







-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_sach_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_ma_sach INT,
    p_ten_sach NVARCHAR(100)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY s.TenSach ASC)) AS RowNumber, 
            s.MaSach,
            s.TenSach,
            tls.TheLoaiSach AS TenTheLoai,
          
            tg.TenTacGia,
         
            nxb.TenNhaXuatBan,
			s.SoLuong,
			s.GhiChu
        FROM Sach AS s
        LEFT JOIN TheLoaiSach AS tls ON s.MaTheLoaiSach = tls.MaTheLoaiSach
        LEFT JOIN TacGia AS tg ON s.MaTacGia = tg.MaTacGia
        LEFT JOIN NhaXuatBan AS nxb ON s.MaNhaXuatBan = nxb.MaNhaXuatBan
        WHERE (p_ma_sach = -1 OR s.MaSach = p_ma_sach)
              OR (p_ten_sach = '' OR s.TenSach LIKE Concat('%' , p_ten_sach , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY s.TenSach ASC)) AS RowNumber, 
            s.MaSach,
            s.TenSach,
           
            tls.TheLoaiSach AS TenTheLoai,
         
            tg.TenTacGia,
         
            nxb.TenNhaXuatBan,
			s.SoLuong,
			s.GhiChu
        FROM Sach AS s
        LEFT JOIN TheLoaiSach AS tls ON s.MaTheLoaiSach = tls.MaTheLoaiSach
        LEFT JOIN TacGia AS tg ON s.MaTacGia = tg.MaTacGia
        LEFT JOIN NhaXuatBan AS nxb ON s.MaNhaXuatBan = nxb.MaNhaXuatBan
        WHERE (p_ma_sach = -1 OR s.MaSach = p_ma_sach)
              OR (p_ten_sach = '' OR s.TenSach LIKE Concat('%' , p_ten_sach , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;


Call `sp_sach_search`(1,10,N'a')
-- SQLINES LICENSE FOR EVALUATION USE ONLY
select * from Sach




CREATE -- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE   PROCEDURE `sp_sach2_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_TenSach NVARCHAR(100)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY s.TenSach ASC)) AS RowNumber, 
            s.MaSach,
            s.TenSach,
            tls.TheLoaiSach AS TenTheLoai,
            tg.TenTacGia,
            nxb.TenNhaXuatBan,
			s.SoLuong,
			s.GhiChu
        FROM Sach AS s
        LEFT JOIN TheLoaiSach AS tls ON s.MaTheLoaiSach = tls.MaTheLoaiSach
        LEFT JOIN TacGia AS tg ON s.MaTacGia = tg.MaTacGia
        LEFT JOIN NhaXuatBan AS nxb ON s.MaNhaXuatBan = nxb.MaNhaXuatBan
        WHERE p_TenSach = '' OR s.TenSach LIKE Concat('%' , p_TenSach , '%');
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY s.TenSach ASC)) AS RowNumber, 
            s.MaSach,
            s.TenSach,
            tls.TheLoaiSach AS TenTheLoai,
            tg.TenTacGia,
            nxb.TenNhaXuatBan,
			s.SoLuong,
			s.GhiChu
        FROM Sach AS s
        LEFT JOIN TheLoaiSach AS tls ON s.MaTheLoaiSach = tls.MaTheLoaiSach
        LEFT JOIN TacGia AS tg ON s.MaTacGia = tg.MaTacGia
        LEFT JOIN NhaXuatBan AS nxb ON s.MaNhaXuatBan = nxb.MaNhaXuatBan
        WHERE p_TenSach = '' OR s.TenSach LIKE Concat('%' , p_TenSach , '%');
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;


Call `sp_sach2_search`(1,10,N'a')












-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhacungcap_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_ma_nha_cung_cap INT,
    p_ten_nha_cung_cap NVARCHAR(100)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenNhaCungCap ASC)) AS RowNumber, 
            nc.MaNhaCungCap,
            nc.TenNhaCungCap,
            nc.DiaChi,
            nc.SoDienThoai
        FROM NhaCungCap AS nc
        WHERE (p_ma_nha_cung_cap = -1 OR nc.MaNhaCungCap = p_ma_nha_cung_cap)
              OR (p_ten_nha_cung_cap = '' OR nc.TenNhaCungCap LIKE Concat('%' , p_ten_nha_cung_cap , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenNhaCungCap ASC)) AS RowNumber, 
            nc.MaNhaCungCap,
            nc.TenNhaCungCap,
            nc.DiaChi,
            nc.SoDienThoai
        FROM NhaCungCap AS nc
        WHERE (p_ma_nha_cung_cap = -1 OR nc.MaNhaCungCap = p_ma_nha_cung_cap)
              OR (p_ten_nha_cung_cap = '' OR nc.TenNhaCungCap LIKE Concat('%' , p_ten_nha_cung_cap , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;


CALL `sp_nhacungcap_search`(1,3,0,N'Nhà cung cấp A')

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_khachhang_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_ma_khach_hang INT,
    p_ten_khach_hang NVARCHAR(100)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenKhachHang ASC)) AS RowNumber, 
            kh.MaKhachHang,
            kh.TenKhachHang,
            kh.DiaChi,
            kh.SoDienThoai
        FROM KhachHang AS kh
        WHERE (p_ma_khach_hang = -1 OR kh.MaKhachHang = p_ma_khach_hang)
              OR (p_ten_khach_hang = '' OR kh.TenKhachHang LIKE Concat('%' , p_ten_khach_hang , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY TenKhachHang ASC)) AS RowNumber, 
            kh.MaKhachHang,
            kh.TenKhachHang,
            kh.DiaChi,
            kh.SoDienThoai
        FROM KhachHang AS kh
        WHERE (p_ma_khach_hang = -1 OR  kh.MaKhachHang = p_ma_khach_hang)
              OR (p_ten_khach_hang = '' OR kh.TenKhachHang LIKE Concat('%' , p_ten_khach_hang , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;


Call `sp_khachhang_search`(1,3,0,N'Khách hàng N')

-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nguoidung_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_user_id INT,
    p_permission INT
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY UserID ASC)) AS RowNumber, 
            nd.UserID,
            nd.Pass,
            nd.Per
        FROM NguoiDung AS nd
        WHERE (p_user_id = -1 OR nd.UserID = p_user_id)
              OR (p_permission = -1 OR nd.Per = p_permission);
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY UserID ASC)) AS RowNumber, 
            nd.UserID,
            nd.Pass,
            nd.Per
        FROM NguoiDung AS nd
        WHERE (p_user_id = -1 OR nd.UserID = p_user_id)
              OR (p_permission = -1 OR nd.Per = p_permission);
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;





-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_nhanvien_search`
(
    p_page_index  INT, 
    p_page_size   INT,
    p_ma_nhan_vien INT,
    p_ten_nhan_vien NVARCHAR(50),
    p_gioi_tinh NVARCHAR(10)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY MaNhanVien ASC)) AS RowNumber, 
            nv.MaNhanVien,
            nv.TenNhanVien,
            nv.GioiTinh,
            nv.DiaChi,
            nv.SoDienThoai,
            nv.NgaySinh
        FROM NhanVien AS nv
        WHERE (p_ma_nhan_vien = -1 OR nv.MaNhanVien = p_ma_nhan_vien)
              OR (p_ten_nhan_vien = '' OR nv.TenNhanVien LIKE Concat('%' , p_ten_nhan_vien , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY MaNhanVien ASC)) AS RowNumber, 
            nv.MaNhanVien,
            nv.TenNhanVien,
            nv.GioiTinh,
            nv.DiaChi,
            nv.SoDienThoai,
            nv.NgaySinh
        FROM NhanVien AS nv
        WHERE (p_ma_nhan_vien = -1 OR nv.MaNhanVien = p_ma_nhan_vien)
              OR (p_ten_nhan_vien = '' OR nv.TenNhanVien LIKE Concat('%' , p_ten_nhan_vien , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;






-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_tintuc_search`
(
    p_page_index    INT, 
    p_page_size     INT,
    p_ma_tin_tuc    INT,
    p_tieu_de       NVARCHAR(250)
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0)
    THEN

        CREATE TEMPORARY TABLE tmp_Results1 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY MaTinTuc ASC)) AS RowNumber, 
            tt.MaTinTuc,
            tt.TieuDe,
            tt.NoiDung,
            tt.ThoiGianDang
        FROM TinTuc AS tt
        WHERE (p_ma_tin_tuc = -1 OR tt.MaTinTuc = p_ma_tin_tuc)
              OR (p_tieu_de = '' OR tt.TieuDe LIKE Concat('%' , p_tieu_de , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results1;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results1
        WHERE ROWNUMBER BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        DROP TABLE tmp_Results1; 
    ELSE

        CREATE TEMPORARY TABLE tmp_Results2 AS
SELECT 
            (ROW_NUMBER() OVER(ORDER BY MaTinTuc ASC)) AS RowNumber, 
            tt.MaTinTuc,
            tt.TieuDe,
            tt.NoiDung,
            tt.ThoiGianDang
        FROM TinTuc AS tt
        WHERE (p_ma_tin_tuc = -1 OR tt.MaTinTuc = p_ma_tin_tuc)
              OR (p_tieu_de = '' OR tt.TieuDe LIKE Concat('%' , p_tieu_de , '%'));
                   
        SELECT COUNT(*) INTO v_RecordCount
        FROM tmp_Results2;

        SELECT 
            *,
            v_RecordCount AS RecordCount
        FROM tmp_Results2;

        DROP TABLE tmp_Results2; 
    END IF;
END;
//

DELIMITER ;







-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoadonban_search`
(
    p_page_index    INT, 
    p_page_size     INT,
    p_ma_hoa_don    INT,
    p_ma_nhan_vien  INT,
    p_ma_khach_hang INT
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0) THEN
        -- Tạo bảng tạm thời để lưu trữ kết quả truy vấn
        CREATE TEMPORARY TABLE tmp_Results1 (
            RowNumber INT,
            MaHoaDonBan INT,
            NgayBan DATETIME,
            MaNhanVien INT,
            MaKhachHang INT,
            TongTien DECIMAL(10,2),
            list_json_chitiethoadonban JSON
        );

        -- Thực hiện truy vấn và lưu kết quả vào bảng tạm thời
        INSERT INTO tmp_Results1 (RowNumber, MaHoaDonBan, NgayBan, MaNhanVien, MaKhachHang, TongTien, list_json_chitiethoadonban)
        SELECT 
            ROW_NUMBER() OVER (ORDER BY MaHoaDonBan ASC) AS RowNumber, 
            MaHoaDonBan,
            NgayBan,
            MaNhanVien,
            MaKhachHang,
            TongTien,
            (
                SELECT JSON_ARRAYAGG(c)
                FROM (
                    SELECT c.* FROM ChiTietHoaDonBan AS c WHERE hdb.MaHoaDonBan = c.MaHoaDonBan
                ) AS c
            ) AS list_json_chitiethoadonban
        FROM 
            HoaDonBan AS hdb
        WHERE 
            (p_ma_hoa_don = -1 OR hdb.MaHoaDonBan = p_ma_hoa_don)
            OR (p_ma_khach_hang = -1 OR hdb.MaKhachHang = p_ma_khach_hang);

        -- Lấy số lượng bản ghi
        SELECT COUNT(*) INTO v_RecordCount FROM tmp_Results1;

        -- Trả về kết quả phân trang
        SELECT 
            *, 
            v_RecordCount AS RecordCount
        FROM 
            tmp_Results1
        WHERE 
            RowNumber BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        -- Xóa bảng tạm thời
        DROP TEMPORARY TABLE IF EXISTS tmp_Results1; 
    ELSE
        -- Tạo bảng tạm thời để lưu trữ kết quả truy vấn
        CREATE TEMPORARY TABLE tmp_Results2 (
            RowNumber INT,
            MaHoaDonBan INT,
            NgayBan DATETIME,
            MaNhanVien INT,
            MaKhachHang INT,
            TongTien DECIMAL(10,2),
            list_json_chitiethoadonban JSON
        );

        -- Thực hiện truy vấn và lưu kết quả vào bảng tạm thời
        INSERT INTO tmp_Results2 (RowNumber, MaHoaDonBan, NgayBan, MaNhanVien, MaKhachHang, TongTien, list_json_chitiethoadonban)
        SELECT 
            ROW_NUMBER() OVER (ORDER BY MaHoaDonBan ASC) AS RowNumber, 
            MaHoaDonBan,
            NgayBan,
            MaNhanVien,
            MaKhachHang,
            TongTien,
            (
                SELECT JSON_ARRAYAGG(c)
                FROM (
                    SELECT c.* FROM ChiTietHoaDonBan AS c WHERE hdb.MaHoaDonBan = c.MaHoaDonBan
                ) AS c
            ) AS list_json_chitiethoadonban
        FROM 
            HoaDonBan AS hdb
        WHERE 
            (p_ma_hoa_don = -1 OR hdb.MaHoaDonBan = p_ma_hoa_don)
            OR (p_ma_khach_hang = -1 OR hdb.MaKhachHang = p_ma_khach_hang);

        -- Lấy số lượng bản ghi
        SELECT COUNT(*) INTO v_RecordCount FROM tmp_Results2;

        -- Trả về kết quả
        SELECT 
            *, 
            v_RecordCount AS RecordCount
        FROM 
            tmp_Results2;

        -- Xóa bảng tạm thời
        DROP TEMPORARY TABLE IF EXISTS tmp_Results2; 
    END IF;
END;
//

DELIMITER ;



call `sp_hoadonban_search`(1,3,10,10,10)







-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE `sp_hoadonnhap_search`
(
    p_page_index        INT, 
    p_page_size         INT,
    p_ma_hoa_don        INT,
    p_ma_nhan_vien      INT,
    p_ma_nha_cung_cap   INT
)
BEGIN
    DECLARE v_RecordCount BIGINT;

    IF (p_page_size <> 0) THEN
        -- Tạo bảng tạm thời để lưu trữ kết quả truy vấn
        CREATE TEMPORARY TABLE tmp_Results1 (
            RowNumber INT,
            MaHoaDonNhap INT,
            NgayNhap DATETIME,
            MaNhanVien INT,
            MaNhaCungCap INT,
            TongTien DECIMAL(10,2),
            list_json_chitiethoadonnhap JSON
        );

        -- Thực hiện truy vấn và lưu kết quả vào bảng tạm thời
        INSERT INTO tmp_Results1 (RowNumber, MaHoaDonNhap, NgayNhap, MaNhanVien, MaNhaCungCap, TongTien, list_json_chitiethoadonnhap)
        SELECT 
            ROW_NUMBER() OVER (ORDER BY MaHoaDonNhap ASC) AS RowNumber, 
            MaHoaDonNhap,
            NgayNhap,
            MaNhanVien,
            MaNhaCungCap,
            TongTien,
            (
                SELECT JSON_ARRAYAGG(c)
                FROM (
                    SELECT c.* FROM ChiTietHoaDonNhap AS c WHERE hdn.MaHoaDonNhap = c.MaHoaDonNhap
                ) AS c
            ) AS list_json_chitiethoadonnhap
        FROM 
            HoaDonNhap AS hdn
        WHERE 
            (p_ma_hoa_don = -1 OR hdn.MaHoaDonNhap = p_ma_hoa_don)
            OR (p_ma_nha_cung_cap = -1 OR hdn.MaNhaCungCap = p_ma_nha_cung_cap);

        -- Lấy số lượng bản ghi
        SELECT COUNT(*) INTO v_RecordCount FROM tmp_Results1;

        -- Trả về kết quả phân trang
        SELECT 
            *, 
            v_RecordCount AS RecordCount
        FROM 
            tmp_Results1
        WHERE 
            RowNumber BETWEEN (p_page_index - 1) * p_page_size + 1 AND ((p_page_index - 1) * p_page_size + 1) + p_page_size - 1
            OR p_page_index = -1;

        -- Xóa bảng tạm thời
        DROP TEMPORARY TABLE IF EXISTS tmp_Results1; 
    ELSE
        -- Tạo bảng tạm thời để lưu trữ kết quả truy vấn
        CREATE TEMPORARY TABLE tmp_Results2 (
            RowNumber INT,
            MaHoaDonNhap INT,
            NgayNhap DATETIME,
            MaNhanVien INT,
            MaNhaCungCap INT,
            TongTien DECIMAL(10,2),
            list_json_chitiethoadonnhap JSON
        );

        -- Thực hiện truy vấn và lưu kết quả vào bảng tạm thời
        INSERT INTO tmp_Results2 (RowNumber, MaHoaDonNhap, NgayNhap, MaNhanVien, MaNhaCungCap, TongTien, list_json_chitiethoadonnhap)
        SELECT 
            ROW_NUMBER() OVER (ORDER BY MaHoaDonNhap ASC) AS RowNumber, 
            MaHoaDonNhap,
            NgayNhap,
            MaNhanVien,
            MaNhaCungCap,
            TongTien,
            (
                SELECT JSON_ARRAYAGG(c)
                FROM (
                    SELECT c.* FROM ChiTietHoaDonNhap AS c WHERE hdn.MaHoaDonNhap = c.MaHoaDonNhap
                ) AS c
            ) AS list_json_chitiethoadonnhap
        FROM 
            HoaDonNhap AS hdn
        WHERE 
            (p_ma_hoa_don = -1 OR hdn.MaHoaDonNhap = p_ma_hoa_don)
            OR (p_ma_nha_cung_cap = -1 OR hdn.MaNhaCungCap = p_ma_nha_cung_cap);

        -- Lấy số lượng bản ghi
        SELECT COUNT(*) INTO v_RecordCount FROM tmp_Results2;

        -- Trả về kết quả
        SELECT 
            *, 
            v_RecordCount AS RecordCount
        FROM 
            tmp_Results2;

        -- Xóa bảng tạm thời
        DROP TEMPORARY TABLE IF EXISTS tmp_Results2; 
    END IF;
END;
//

DELIMITER ;




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE sp_SachKhuyenMai()
BEGIN
    DECLARE v_NgayKhuyenMai DATE;
    SET v_NgayKhuyenMai = NOW(3); 

    SELECT 
        s.MaSach, s.TenSach, s.SoLuong, s.GhiChu,
        km.KhuyenMai, km.NgayBatDau, km.NgayKetThuc
    FROM 
        Sach s
    INNER JOIN 
        KhuyenMai km ON s.MaSach = km.MaSach
    WHERE 
        v_NgayKhuyenMai BETWEEN km.NgayBatDau AND km.NgayKetThuc;
END;
//

DELIMITER ;







-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE sp_BaoCaoDoanhThu (
    p_Ngay DATE /* = NULL */,
    p_Thang INT /* = NULL */,
    p_Nam INT /* = NULL */)
BEGIN

    SELECT 
        Sach.MaSach,
        Sach.TenSach,
        KhachHang.TenKhachHang,
        NhanVien.TenNhanVien,
        SUM(ChiTietHoaDonBan.ThanhTien) AS DoanhThu
    FROM 
        ChiTietHoaDonBan
    INNER JOIN 
        HoaDonBan ON ChiTietHoaDonBan.MaHoaDonBan = HoaDonBan.MaHoaDonBan
    INNER JOIN 
        Sach ON ChiTietHoaDonBan.MaSach = Sach.MaSach
    INNER JOIN 
        KhachHang ON HoaDonBan.MaKhachHang = KhachHang.MaKhachHang
    INNER JOIN 
        NhanVien ON HoaDonBan.MaNhanVien = NhanVien.MaNhanVien
    WHERE 
        (p_Ngay IS NULL OR CONVERT(HoaDonBan.NgayBan, DATE) = p_Ngay)
        AND (p_Thang IS NULL OR MONTH(HoaDonBan.NgayBan) = p_Thang)
        AND (p_Nam IS NULL OR YEAR(HoaDonBan.NgayBan) = p_Nam)
    GROUP BY 
        Sach.MaSach,
        Sach.TenSach,
        KhachHang.TenKhachHang,
        NhanVien.TenNhanVien
    ORDER BY 
        Sach.MaSach;
END;

//

DELIMITER ;

CALL sp_BaoCaoDoanhThu('2023-01-01', NULL, NULL);
CALL sp_BaoCaoDoanhThu(NULL, 1, NULL);

CALL sp_BaoCaoDoanhThu(NULL, NULL, 2023);
CALL sp_BaoCaoDoanhThu('2023-01-01', 1, 2023);









-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE sp_ThongKeSachBanChay (
    p_NgayBatDau DATE,
    p_NgayKetThuc DATE,
    p_SoLuongSach INT
)
BEGIN
    SELECT 
        Sach.MaSach,
        Sach.TenSach,
        SUM(ChiTietHoaDonBan.SoLuong) AS TongSoLuongBan
    FROM 
        ChiTietHoaDonBan
    INNER JOIN 
        Sach ON ChiTietHoaDonBan.MaSach = Sach.MaSach
    INNER JOIN 
        HoaDonBan ON ChiTietHoaDonBan.MaHoaDonBan = HoaDonBan.MaHoaDonBan
    WHERE 
        HoaDonBan.NgayBan BETWEEN p_NgayBatDau AND p_NgayKetThuc
    GROUP BY 
        Sach.MaSach, Sach.TenSach
    ORDER BY 
        SUM(ChiTietHoaDonBan.SoLuong) DESC
    LIMIT p_SoLuongSach;
END;
//

DELIMITER ;







-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE sp_ThongKeSachTonKho()
BEGIN
    SELECT 
        Sach.MaSach,
        Sach.TenSach,
        Sach.SoLuong AS SoLuongNhap,
        IFNULL(SUM(ChiTietHoaDonBan.SoLuong), 0) AS SoLuongBan,
        (Sach.SoLuong - IFNULL(SUM(ChiTietHoaDonBan.SoLuong), 0)) AS SoLuongTonKho
    FROM 
        Sach
    LEFT JOIN 
        ChiTietHoaDonBan ON Sach.MaSach = ChiTietHoaDonBan.MaSach
    GROUP BY 
        Sach.MaSach, Sach.TenSach, Sach.SoLuong
    ORDER BY 
        SoLuongTonKho DESC;
END;

//

DELIMITER ;

call sp_ThongKeSachTonKho;









-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaHoaDonBan (
    p_MaHoaDonBan INT)
BEGIN

    -- SQLINES DEMO *** óa đơn bán trước
    DELETE FROM ChiTietHoaDonBan WHERE MaHoaDonBan = p_MaHoaDonBan;

    -- SQLINES DEMO *** án
    DELETE FROM HoaDonBan WHERE MaHoaDonBan = p_MaHoaDonBan;
END;
//

DELIMITER ;





-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaHoaDonNhap (
    p_MaHoaDonNhap INT)
BEGIN

    -- SQLINES DEMO *** óa đơn nhập trước
    DELETE FROM ChiTietHoaDonNhap WHERE MaHoaDonNhap = p_MaHoaDonNhap;

    -- SQLINES DEMO *** hập
    DELETE FROM HoaDonNhap WHERE MaHoaDonNhap = p_MaHoaDonNhap;
END;
//

DELIMITER ;






-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaKhachHang (
    p_MaKhachHang INT)
BEGIN

    -- SQLINES DEMO *** hóa đơn bán của khách hàng
    DROP TEMPORARY TABLE IF EXISTS tmp_ListHoaDonBan;
    CREATE TEMPORARY TABLE tmp_ListHoaDonBan (MaHoaDonBan INT);

    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO tmp_ListHoaDonBan (MaHoaDonBan)
    SELECT MaHoaDonBan FROM HoaDonBan WHERE MaKhachHang = p_MaKhachHang;

    -- SQLINES DEMO *** óa đơn bán của các hóa đơn thuộc khách hàng
    DELETE FROM ChiTietHoaDonBan WHERE MaHoaDonBan IN (SELECT MaHoaDonBan FROM tmp_ListHoaDonBan);

    -- SQLINES DEMO *** án của khách hàng
    DELETE FROM HoaDonBan WHERE MaKhachHang = p_MaKhachHang;

    -- X�... SQLINES DEMO ***
    DELETE FROM KhachHang WHERE MaKhachHang = p_MaKhachHang;
END;
//

DELIMITER ;




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaNguoiDung (
    p_UserID INT)
BEGIN

    -- SQLINES DEMO *** in của người dùng
    DELETE FROM TinTuc WHERE UserID = p_UserID;

    -- X�... SQLINES DEMO ***
    DELETE FROM NguoiDung WHERE UserID = p_UserID;
END;
//

DELIMITER ;






-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaNhaCungCap (
    p_MaNhaCungCap INT)
BEGIN

    -- SQLINES DEMO *** hóa đơn nhập của nhà cung cấp
    DROP TEMPORARY TABLE IF EXISTS tmp_ListHoaDonNhap;
    CREATE TEMPORARY TABLE tmp_ListHoaDonNhap (MaHoaDonNhap INT);

    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO tmp_ListHoaDonNhap (MaHoaDonNhap)
    SELECT MaHoaDonNhap FROM HoaDonNhap WHERE MaNhaCungCap = p_MaNhaCungCap;

    -- SQLINES DEMO *** óa đơn nhập của các hóa đơn thuộc nhà cung cấp
    DELETE FROM ChiTietHoaDonNhap WHERE MaHoaDonNhap IN (SELECT MaHoaDonNhap FROM tmp_ListHoaDonNhap);

    -- SQLINES DEMO *** hập của nhà cung cấp
    DELETE FROM HoaDonNhap WHERE MaNhaCungCap = p_MaNhaCungCap;

    -- X�... SQLINES DEMO ***
    DELETE FROM NhaCungCap WHERE MaNhaCungCap = p_MaNhaCungCap;
END;
//

DELIMITER ;




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaNhanVien (
    p_MaNhanVien INT)
BEGIN

    -- SQLINES DEMO *** hóa đơn bán và hóa đơn nhập của nhân viên
    DROP TEMPORARY TABLE IF EXISTS tmp_ListHoaDonBan;
    CREATE TEMPORARY TABLE tmp_ListHoaDonBan (MaHoaDonBan INT);
	DROP TEMPORARY TABLE IF EXISTS tmp_ListHoaDonNhap;
	CREATE TEMPORARY TABLE tmp_ListHoaDonNhap (MaHoaDonNhap INT);

    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO tmp_ListHoaDonBan (MaHoaDonBan)
    SELECT MaHoaDonBan FROM HoaDonBan WHERE MaNhanVien = p_MaNhanVien;

	-- SQLINES LICENSE FOR EVALUATION USE ONLY
	INSERT INTO tmp_ListHoaDonNhap (MaHoaDonNhap)
    SELECT MaHoaDonNhap FROM HoaDonNhap WHERE MaNhanVien = p_MaNhanVien;

    -- SQLINES DEMO *** óa đơn bán của các hóa đơn thuộc nhân viên
    DELETE FROM ChiTietHoaDonBan WHERE MaHoaDonBan IN (SELECT MaHoaDonBan FROM tmp_ListHoaDonBan);

	-- SQLINES DEMO *** óa đơn nhập của các hóa đơn thuộc nhân viên
    DELETE FROM ChiTietHoaDonNhap WHERE MaHoaDonNhap IN (SELECT MaHoaDonNhap FROM tmp_ListHoaDonNhap);

    -- SQLINES DEMO *** án của nhân viên
    DELETE FROM HoaDonBan WHERE MaNhanVien = p_MaNhanVien;

	-- SQLINES DEMO *** hập của nhân viên
    DELETE FROM HoaDonNhap WHERE MaNhanVien = p_MaNhanVien;

    -- X�... SQLINES DEMO ***
    DELETE FROM NhanVien WHERE MaNhanVien = p_MaNhanVien;
END;
//

DELIMITER ;





-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaNhaXuatBan (
    p_MaNhaXuatBan INT)
BEGIN

    -- SQLINES DEMO *** sách của nhà xuất bản
    DROP TEMPORARY TABLE IF EXISTS tmp_ListSach;
    CREATE TEMPORARY TABLE tmp_ListSach (MaNhaXuatBan INT);

    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO tmp_ListSach (MaNhaXuatBan)
    SELECT MaNhaXuatBan FROM Sach WHERE MaNhaXuatBan = p_MaNhaXuatBan;

    -- SQLINES DEMO *** óa đơn bán của các sách thuộc nhà xuất bản
    DELETE FROM ChiTietHoaDonBan WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

	-- SQLINES DEMO *** óa đơn nhập của các sách thuộc nhà xuất bản
    DELETE FROM ChiTietHoaDonNhap WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

    -- SQLINES DEMO *** nhà xuất bản
    DELETE FROM Sach WHERE MaNhaXuatBan = p_MaNhaXuatBan;

    -- SQLINES DEMO *** bản
    DELETE FROM NhaXuatBan WHERE MaNhaXuatBan = p_MaNhaXuatBan;
END;
//

DELIMITER ;





-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaSach (
    p_MaSach INT)
BEGIN

	-- SQLINES DEMO *** sách của nhà xuất bản
    DROP TEMPORARY TABLE IF EXISTS tmp_ListSach;
    CREATE TEMPORARY TABLE tmp_ListSach (MaNhaXuatBan INT);

    -- SQLINES DEMO *** óa đơn bán của các sách thuộc nhà xuất bản
    DELETE FROM ChiTietHoaDonBan WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

	-- SQLINES DEMO *** óa đơn nhập của các sách thuộc nhà xuất bản
    DELETE FROM ChiTietHoaDonNhap WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

    -- SQLINES DEMO *** nhà xuất bản
    DELETE FROM Sach WHERE MaSach = p_MaSach;

END;
//

DELIMITER ;




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaTacGia (
    p_MaTacGia INT)
BEGIN

    -- SQLINES DEMO *** sách của tác giả
    DROP TEMPORARY TABLE IF EXISTS tmp_ListSach;
    CREATE TEMPORARY TABLE tmp_ListSach (MaTacGia INT);

    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO tmp_ListSach (MaTacGia)
    SELECT MaTacGia FROM Sach WHERE MaTacGia = p_MaTacGia;

    -- SQLINES DEMO *** óa đơn bán của các sách thuộc tác giả
    DELETE FROM ChiTietHoaDonBan WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

	-- SQLINES DEMO *** óa đơn nhập của các sách thuộc tác giả
    DELETE FROM ChiTietHoaDonNhap WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

    -- SQLINES DEMO *** tác giả
    DELETE FROM Sach WHERE MaTacGia = p_MaTacGia;

    -- X�... SQLINES DEMO ***
    DELETE FROM TacGia WHERE MaTacGia = p_MaTacGia;
END;
//

DELIMITER ;




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaTheLoaiSach (
    p_MaTheLoaiSach INT)
BEGIN

    -- SQLINES DEMO *** sách của thể loại sách
    DROP TEMPORARY TABLE IF EXISTS tmp_ListSach;
    CREATE TEMPORARY TABLE tmp_ListSach (MaTheLoaiSach INT);

    -- SQLINES LICENSE FOR EVALUATION USE ONLY
    INSERT INTO tmp_ListSach (MaTheLoaiSach)
    SELECT MaTheLoaiSach FROM Sach WHERE MaTheLoaiSach = p_MaTheLoaiSach;

    -- SQLINES DEMO *** óa đơn bán của các sách thuộc thể loại sách
    DELETE FROM ChiTietHoaDonBan WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

	-- SQLINES DEMO *** óa đơn nhập của các sách thuộc thể loại sách
    DELETE FROM ChiTietHoaDonNhap WHERE MaSach IN (SELECT MaSach FROM tmp_ListSach);

    -- SQLINES DEMO *** thể loại sách
    DELETE FROM Sach WHERE MaTheLoaiSach = p_MaTheLoaiSach;

    -- SQLINES DEMO ***  sách
    DELETE FROM TheLoaiSach WHERE MaTheLoaiSach = p_MaTheLoaiSach;
END;
//

DELIMITER ;




-- SQLINES LICENSE FOR EVALUATION USE ONLY
DELIMITER //

CREATE PROCEDURE XoaTinTuc (
    p_MaTinTuc INT)
BEGIN

    -- X�... SQLINES DEMO ***
    DELETE FROM TinTuc WHERE MaTinTuc = p_MaTinTuc;
END;











/* SET ANSI_NULLS ON */
//

DELIMITER ;


/* SET QUOTED_IDENTIFIER ON */
 
-- SQLINES LICENSE FOR EVALUATION USE ONLY
delimiter //

create PROCEDURE `sp_login`(p_UserID INT, p_Pass nvarchar(50))
    BEGIN
      SELECT  *
      FROM NguoiDung
      where UserID= p_UserID and Pass = p_Pass;
    END;
//

delimiter ;

INSERT INTO Truyen (TenTruyen, MaTheLoaiTruyen, MaTacGia, MaNhaXuatBan, SoLuong, GhiChu, MaNhaCungCap) VALUES
('Truyện A', 1, 1, 1, 100, 'Ghi chú về truyện A', 1),
('Truyện B', 2, 2, 2, 200, 'Ghi chú về truyện B', 2),
('Truyện C', 3, 3, 3, 150, 'Ghi chú về truyện C', 3),
('Truyện D', 4, 4, 4, 120, 'Ghi chú về truyện D', 4),
('Truyện E', 5, 5, 5, 180, 'Ghi chú về truyện E', 5),
('Truyện F', 6, 6, 6, 220, 'Ghi chú về truyện F', 6),
('Truyện G', 7, 7, 7, 130, 'Ghi chú về truyện G', 7),
('Truyện H', 8, 8, 8, 170, 'Ghi chú về truyện H', 8),
('Truyện I', 9, 9, 9, 190, 'Ghi chú về truyện I', 9),
('Truyện J', 10, 10, 10, 110, 'Ghi chú về truyện J', 10);