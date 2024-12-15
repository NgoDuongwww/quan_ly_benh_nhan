<?php

function get_all_dangKyKham()
{
          $sql = "SELECT  
                              dk.MaDangKy,
                              bn.HoTen AS HoTenBN,
                              bs.HoTen AS HoTenBS,
                              dk.NgayGioKham,
                              dk.TrangThai
                          FROM dangkykham dk
                          JOIN benhnhan bn ON dk.MaBenhNhan = bn.MaBenhNhan
                          JOIN bacsi bs ON dk.MaBacSi = bs.MaBacSi";
          return pdo_query($sql);
}

function get_dangkykham_by_MaDangKy($MaDangKy)
{
          $sql = "SELECT * FROM dangkykham WHERE MaDangKy = ?";
          return pdo_query_one($sql, $MaDangKy);
}

function get_dangKyKham_by_MaBenhNhan($MaBenhNhan)
{
          $sql = "SELECT * FROM dangkykham WHERE MaBenhNhan = ?";
          return pdo_query_one($sql, $MaBenhNhan);
}

function get_dangKyKham_by_MaBacSi($MaBacSi)
{
          $sql = "SELECT * FROM dangkykham WHERE MaBacSi = ?";
          return pdo_query_one($sql, $MaBacSi);
}

function add_dangKyKham($MaBenhNhan, $MaBacSi, $NgayGioKham, $TrangThai)
{
          $sql = "INSERT INTO dangkykham(MaBenhNhan, MaBacSi, NgayGioKham, TrangThai) VALUES(?, ?, ?, ?)";
          return pdo_execute($sql, $MaBenhNhan, $MaBacSi, $NgayGioKham, $TrangThai);
}

function update_dangKyKham($MaBenhNhan, $MaBacSi, $NgayGioKham, $TrangThai, $MaDangKy)
{
          $sql = "UPDATE dangkykham SET MaBenhNhan = ?, MaBacSi = ?, NgayGioKham = ?, TrangThai = ? WHERE MaDangKy = ?";
          return pdo_execute($sql, $MaBenhNhan, $MaBacSi, $NgayGioKham, $TrangThai, $MaDangKy);
}

function delete_dangKyKham($MaDangKy)
{
          $sql = "DELETE FROM dangkykham WHERE MaDangKy = ?";
          return pdo_execute($sql, $MaDangKy);
}
