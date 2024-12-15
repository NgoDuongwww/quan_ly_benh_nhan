<?php

function get_all_benhnhan()
{
          $sql = "SELECT * FROM benhnhan";
          return pdo_query($sql);
}

function get_benhnhan_by_MaBenhNhan($MaBenhNhan)
{
          $sql = "SELECT * FROM benhnhan WHERE MaBenhNhan = ?";
          return pdo_query_one($sql, $MaBenhNhan);
}

function add_benhnhan($HoTen, $NgaySinh, $GioiTinh, $DiaChi, $SoDienThoai, $Email, $NgayDangKy)
{
          $sql = "INSERT INTO benhnhan(HoTen, NgaySinh, GioiTinh, DiaChi, SoDienThoai, Email, NgayDangKy) VALUES(?, ?, ?, ?, ?, ?, ?)";
          pdo_execute($sql, $HoTen, $NgaySinh, $GioiTinh, $DiaChi, $SoDienThoai, $Email, $NgayDangKy);
}

function update_benhnhan($HoTen, $NgaySinh, $GioiTinh, $DiaChi, $SoDienThoai, $Email, $NgayDangKy, $MaBenhNhan)
{
          $sql = "UPDATE benhnhan SET HoTen = ?, NgaySinh = ?, GioiTinh = ?, DiaChi = ?, SoDienThoai = ?, Email = ?, NgayDangKy = ? WHERE MaBenhNhan = ?";
          pdo_execute($sql, $HoTen, $NgaySinh, $GioiTinh, $DiaChi, $SoDienThoai, $Email, $NgayDangKy, $MaBenhNhan);
}

function delete_benhnhan($MaBenhNhan)
{
          $sql_donthuoc = "DELETE FROM donthuoc WHERE MaBenhNhan = ?";
          pdo_execute($sql_donthuoc, $MaBenhNhan);
          $sql_dangkykham = "DELETE FROM dangkykham WHERE MaBenhNhan = ?";
          pdo_execute($sql_dangkykham, $MaBenhNhan);
          $sql = "DELETE FROM benhnhan WHERE MaBenhNhan = ?";
          pdo_execute($sql, $MaBenhNhan);
}