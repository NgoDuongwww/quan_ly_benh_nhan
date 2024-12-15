<?php

function get_all_donThuoc()
{
          $sql = "SELECT 
                              dt.MaDonThuoc,
                              bn.HoTen AS HoTenBN,
                              bs.HoTen AS HoTenBS,
                              dt.NgayKeDon
                              FROM donthuoc dt
                              JOIN benhnhan bn ON dt.MaBenhNhan = bn.MaBenhNhan
                              JOIN bacsi bs ON dt.MaBacSi = bs.MaBacSi";
          return pdo_query($sql);
}

function get_donThuoc_by_MaDonThuoc($MaDonThuoc)
{
          $sql = "SELECT * FROM donthuoc WHERE MaDonThuoc = ?";
          return pdo_query_one($sql, $MaDonThuoc);
}


function add_donThuoc($MaBenhNhan, $MaBacSi, $NgayKeDon, $MaDonThuoc, $MaThuoc, $SoLuong, $DonVi, $CachDung)
{
          $sql_donthuoc = "INSERT INTO donthuoc(MaDonThuoc, MaBenhNhan, MaBacSi, NgayKeDon) VALUES(?, ?, ?, ?)";
          $MaDonThuoc = pdo_execute_return_lastInsertId($sql_donthuoc, $MaDonThuoc, $MaBenhNhan, $MaBacSi, $NgayKeDon);
          $sql_chitietdonthuoc = "INSERT INTO chitietdonthuoc(MaDonThuoc, MaThuoc, SoLuong, DonVi, CachDung) VALUES(?, ?, ?, ?, ?)";
          for ($i = 0; $i < count($MaThuoc); $i++) {
                    pdo_execute($sql_chitietdonthuoc, $MaDonThuoc, $MaThuoc[$i], $SoLuong[$i], $DonVi[$i], $CachDung[$i]);
          }
          return true;
}

function update_donThuoc($MaBenhNhan, $MaBacSi, $NgayKeDon, $MaDonThuoc)
{
          $sql = "UPDATE donthuoc SET MaBenhNhan = ?, MaBacSi = ?, NgayKeDon = ? WHERE MaDonThuoc = ?";
          return pdo_execute($sql, $MaBenhNhan, $MaBacSi, $NgayKeDon, $MaDonThuoc);
}

function delete_donThuoc($MaDonThuoc)
{
          $sql_chitietdonthuoc = "DELETE FROM chitietdonthuoc WHERE MaDonThuoc = ?";
          pdo_execute($sql_chitietdonthuoc, $MaDonThuoc);
          $sql = "DELETE FROM donthuoc WHERE MaDonThuoc = ?";
          return pdo_execute($sql, $MaDonThuoc);
}

// ================================= Chi tiết đơn thuốc ================================
function get_chitietdonthuoc_by_MaDonThuoc($MaDonThuoc)
{
          $sql = "SELECT 
                              ctdt.MaChiTiet,
                              dt.MaDonThuoc,
                              t.TenThuoc AS TenThuoc, 
                              ctdt.SoLuong,
                              ctdt.DonVi,
                              ctdt.CachDung
                              FROM chitietdonthuoc ctdt
                              JOIN donthuoc dt ON ctdt.MaDonThuoc = dt.MaDonThuoc
                              JOIN thuoc t ON ctdt.MaThuoc = t.MaThuoc
                              WHERE ctdt.MaDonThuoc = ?";
          return pdo_query($sql, $MaDonThuoc);
}