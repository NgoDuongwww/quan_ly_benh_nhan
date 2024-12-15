<?php

function get_all_thuoc()
{
  $sql = "SELECT Thuoc.MaThuoc, Thuoc.TenThuoc, Thuoc.SoLuong, Thuoc.DonVi, Thuoc.Gia, 
                   LoaiThuoc.TenLoaiThuoc 
            FROM Thuoc
            JOIN LoaiThuoc ON Thuoc.MaLoaiThuoc = LoaiThuoc.MaLoaiThuoc";
  return pdo_query($sql);
}

function get_thuoc_by_MaThuoc($MaThuoc)
{
  $sql = "SELECT * FROM thuoc WHERE MaThuoc = ?";
  return pdo_query_one($sql, $MaThuoc);
}

function add_thuoc($TenThuoc, $MaLoaiThuoc, $SoLuong, $DonVi, $Gia)
{
  $sql = "INSERT INTO thuoc(TenThuoc, MaLoaiThuoc, SoLuong, DonVi, Gia) VALUES(?, ?, ?, ?, ?)";
  return pdo_execute($sql, $TenThuoc, $MaLoaiThuoc, $SoLuong, $DonVi, $Gia);
}

function update_thuoc($TenThuoc, $MaLoaiThuoc, $SoLuong, $DonVi, $Gia, $MaThuoc)
{
  $sql = "UPDATE thuoc SET TenThuoc = ?, MaLoaiThuoc = ?, SoLuong = ?, DonVi = ?, Gia = ? WHERE MaThuoc = ?";
  return pdo_execute($sql, $TenThuoc, $MaLoaiThuoc, $SoLuong, $DonVi, $Gia, $MaThuoc);
}

function delete_thuoc($MaThuoc)
{
  $sql_chitietdonthuoc = "DELETE FROM chitietdonthuoc WHERE MaThuoc = ?";
  pdo_execute($sql_chitietdonthuoc, $MaThuoc);
  $sql = "DELETE FROM thuoc WHERE MaThuoc = ?";
  return pdo_execute($sql, $MaThuoc);
}