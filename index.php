<?php
ob_start();
session_start();

include_once "pdo.php";

include_once "model/bacsi.php";
include_once "model/benhnhan.php";
include_once "model/dangkykham.php";
include_once "model/donthuoc.php";
include_once "model/loaithuoc.php";
include_once "model/thuoc.php";

include_once "view/layout/header.php";

if (!isset($_SESSION['mynew']))
    $_SESSION['mynew'] = [];

$act = isset($_GET['act']) ? $_GET['act'] : '';

switch ($act) {
    // =============================== Bác sĩ ===================================
    case 'all_bacSi':
        $data = get_all_bacsi();
        include "view/BacSi/all_bacSi.php";
        break;
    case 'add_bacSi':
        if (isset($_POST['HoTen']) && isset($_POST['SoDienThoai']) && isset($_POST['Email'])) {
            add_bacsi($_POST['HoTen'], $_POST['SoDienThoai'], $_POST['Email']);
            header("location:index.php?act=all_bacSi");
        }
        include "view/BacSi/add_bacSi.php";
        break;
    case 'edit_bacSi':
        if (isset($_POST['HoTen']) && isset($_POST['SoDienThoai']) && isset($_POST['Email']) && isset($_POST['MaBacSi'])) {
            update_bacsi($_POST['HoTen'], $_POST['SoDienThoai'], $_POST['Email'], $_POST['MaBacSi']);
            header("location:index.php?act=all_bacSi");
            exit();
        }
        $data = get_bacsi_by_MaBacSi($_GET['MaBacSi']);
        include "view/BacSi/edit_bacSi.php";
        break;
    case 'delete_bacSi':
        delete_bacsi($_GET['MaBacSi']);
        header("location:index.php?act=all_bacSi");
        break;
    // ==========================================================================

    // =============================== Bệnh nhân ================================
    case 'all_benhNhan':
        $data = get_all_benhnhan();
        include "view/BenhNhan/all_benhNhan.php";
        break;
    case 'add_benhNhan':
        if (isset($_POST['HoTen']) && isset($_POST['NgaySinh']) && isset($_POST['GioiTinh']) && isset($_POST['DiaChi']) && isset($_POST['SoDienThoai']) && isset($_POST['Email']) && isset($_POST['NgayDangKy'])) {
            add_benhnhan($_POST['HoTen'], $_POST['NgaySinh'], $_POST['GioiTinh'], $_POST['DiaChi'], $_POST['SoDienThoai'], $_POST['Email'], $_POST['NgayDangKy']);
            header("location:index.php?act=all_benhNhan");
            exit();
        }
        include "view/BenhNhan/add_benhNhan.php";
        break;
    case 'edit_benhNhan':
        if (isset($_POST['HoTen']) && isset($_POST['NgaySinh']) && isset($_POST['GioiTinh']) && isset($_POST['DiaChi']) && isset($_POST['SoDienThoai']) && isset($_POST['Email']) && isset($_POST['NgayDangKy']) && isset($_POST['MaBenhNhan'])) {
            update_benhnhan($_POST['HoTen'], $_POST['NgaySinh'], $_POST['GioiTinh'], $_POST['DiaChi'], $_POST['SoDienThoai'], $_POST['Email'], $_POST['NgayDangKy'], $_POST['MaBenhNhan']);
            header("location:index.php?act=all_benhNhan");
            exit();
        }
        $data = get_benhnhan_by_MaBenhNhan($_GET['MaBenhNhan']);
        include "view/BenhNhan/edit_benhNhan.php";
        break;
    case 'delete_benhNhan':
        delete_benhnhan($_GET['MaBenhNhan']);
        header("location:index.php?act=all_benhNhan");
        break;
    // ==========================================================================

    // =============================== Đăng ký khám =============================
    case 'all_dangKyKham':
        $data = get_all_dangKyKham();
        include "view/DangKyKham/all_dangKyKham.php";
        break;
    case 'add_dangKyKham':
        if (isset($_POST['MaBenhNhan']) && isset($_POST['MaBacSi']) && isset($_POST['NgayGioKham']) && isset($_POST['TrangThai'])) {
            add_dangkykham($_POST['MaBenhNhan'], $_POST['MaBacSi'], $_POST['NgayGioKham'], $_POST['TrangThai']);
            header("location:index.php?act=all_dangKyKham");
        }
        $dataBenhNhan = get_all_benhnhan();
        $dataBacSi = get_all_bacsi();
        include "view/DangKyKham/add_dangKyKham.php";
        break;
    case 'edit_dangKyKham':
        if (isset($_POST['MaBenhNhan']) && isset($_POST['MaBacSi']) && isset($_POST['NgayGioKham']) && isset($_POST['TrangThai']) && isset($_POST['MaDangKy'])) {
            update_dangkykham($_POST['MaBenhNhan'], $_POST['MaBacSi'], $_POST['NgayGioKham'], $_POST['TrangThai'], $_POST['MaDangKy']);
            header("location:index.php?act=all_dangKyKham");
            exit();
        }
        $data = get_dangkykham_by_MaDangKy($_GET['MaDangKy']);
        $dataBenhNhan = get_all_benhnhan();
        $dataBacSi = get_all_bacsi();
        include "view/DangKyKham/edit_dangKyKham.php";
        break;
    case 'delete_dangKyKham':
        delete_dangkykham($_GET['MaDangKy']);
        header("location:index.php?act=all_dangKyKham");
        break;
    // ==========================================================================

    // =============================== Đơn thuốc ================================
    case 'all_donThuoc':
        $data = get_all_donThuoc();
        include "view/DonThuoc/all_donThuoc.php";
        break;
    case 'add_donThuoc':
        if (isset($_POST['MaBenhNhan']) && isset($_POST['MaBacSi']) && isset($_POST['NgayKeDon'])) {
            if (isset($_POST['MaDonThuoc'], $_POST['MaThuoc'], $_POST['SoLuong'], $_POST['DonVi'], $_POST['CachDung'])) {
                add_donThuoc(
                    $_POST['MaBenhNhan'],
                    $_POST['MaBacSi'],
                    $_POST['NgayKeDon'],
                    $_POST['MaDonThuoc'],
                    $_POST['MaThuoc'],
                    $_POST['SoLuong'],
                    $_POST['DonVi'],
                    $_POST['CachDung']
                );
                header("location:index.php?act=all_donThuoc");
                exit();
            } 
        }
        $dataBenhNhan = get_all_benhnhan();
        $dataBacSi = get_all_bacsi();
        $dataThuoc = get_all_thuoc();
        include "view/DonThuoc/add_donThuoc.php";
        break;
    case 'detail_donThuoc':
        $data_donThuoc = get_all_donThuoc();
        $data = get_chitietdonthuoc_by_MaDonThuoc($_GET['MaDonThuoc']);
        include "view/DonThuoc/detail_donThuoc.php";
        break;
    case 'edit_donThuoc':
        if (isset($_POST['MaBenhNhan']) && isset($_POST['MaBacSi']) && isset($_POST['NgayKeDon']) && isset($_POST['MaDonThuoc'])) {
            update_donthuoc($_POST['MaBenhNhan'], $_POST['MaBacSi'], $_POST['NgayKeDon'], $_POST['MaDonThuoc']);
            header("location:index.php?act=all_donThuoc");
            exit();
        }
        $data = get_donthuoc_by_MaDonThuoc($_GET['MaDonThuoc']);
        $dataBenhNhan = get_all_benhnhan();
        $dataBacSi = get_all_bacsi();
        include "view/DonThuoc/edit_donThuoc.php";
        break;
    case 'delete_donThuoc':
        delete_donthuoc($_GET['MaDonThuoc']);
        header("location:index.php?act=all_donThuoc");
        break;
    // ==========================================================================

    // =============================== Loại thuốc ===============================
    case 'all_loaiThuoc':
        $data = get_all_loaithuoc();
        include "view/LoaiThuoc/all_loaiThuoc.php";
        break;
    case 'add_loaiThuoc':
        if (isset($_POST['TenLoaiThuoc']) && isset($_POST['MoTa'])) {
            add_loaithuoc($_POST['TenLoaiThuoc'], $_POST['MoTa']);
            header("location:index.php?act=all_loaiThuoc");
        }
        include "view/LoaiThuoc/add_loaiThuoc.php";
        break;
    case 'edit_loaiThuoc':
        if (isset($_POST['TenLoaiThuoc'], $_POST['MoTa'], $_POST['MaLoaiThuoc'])) {
            update_loaithuoc($_POST['TenLoaiThuoc'], $_POST['MoTa'], $_POST['MaLoaiThuoc']);
            header("location:index.php?act=all_loaiThuoc");
            exit();
        }
        $data = get_loaithuoc_by_MaLoaiThuoc($_GET['MaLoaiThuoc']);
        include "view/LoaiThuoc/edit_loaiThuoc.php";
        break;
    case 'delete_loaiThuoc':
        delete_loaithuoc($_GET['MaLoaiThuoc']);
        header("location:index.php?act=all_loaiThuoc");
        break;
    // ==========================================================================

    // =============================== Thuốc ====================================
    case 'all_thuoc':
        $data = get_all_thuoc();
        include "view/Thuoc/all_thuoc.php";
        break;
    case 'add_thuoc':
        if (isset($_POST['TenThuoc']) && isset($_POST['MaLoaiThuoc']) && isset($_POST['SoLuong']) && isset($_POST['DonVi']) && isset($_POST['Gia'])) {
            add_thuoc($_POST['TenThuoc'], $_POST['MaLoaiThuoc'], $_POST['SoLuong'], $_POST['DonVi'], $_POST['Gia']);
            header("location:index.php?act=all_thuoc");
        }
        $dataLoaiThuoc = get_all_loaithuoc();
        include "view/Thuoc/add_thuoc.php";
        break;
    case 'edit_thuoc':
        if (isset($_POST['TenThuoc']) && isset($_POST['MaLoaiThuoc']) && isset($_POST['SoLuong']) && isset($_POST['DonVi']) && isset($_POST['Gia']) && isset($_POST['MaThuoc'])) {
            update_thuoc($_POST['TenThuoc'], $_POST['MaLoaiThuoc'], $_POST['SoLuong'], $_POST['DonVi'], $_POST['Gia'], $_POST['MaThuoc']);
            header("location:index.php?act=all_thuoc");
            exit();
        }
        $data = get_thuoc_by_MaThuoc($_GET['MaThuoc']);
        $dataLoaiThuoc = get_all_loaithuoc();
        include "view/Thuoc/edit_thuoc.php";
        break;
    case 'delete_thuoc':
        delete_thuoc($_GET['MaThuoc']);
        header("location:index.php?act=all_thuoc");
        break;
    // ==========================================================================
    default:
        include "view/main.php";
        break;
}