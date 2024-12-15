<?php

function get_all_bacsi()
{
          $sql = "SELECT * FROM bacsi";
          return pdo_query($sql);
}

function get_bacsi_by_MaBacSi($MaBacSi)
{
          $sql = "SELECT * FROM bacsi WHERE MaBacSi = ?";
          return pdo_query_one($sql, $MaBacSi);
}

function add_bacsi($HoTen, $SoDienThoai, $Email)
{
          $sql = "INSERT INTO bacsi (HoTen, SoDienThoai, Email) VALUES (?,?,?)";
          pdo_execute($sql, $HoTen, $SoDienThoai, $Email);
}

function update_bacsi($HoTen, $SoDienThoai, $Email, $MaBacSi)
{
          $sql = "UPDATE bacsi SET HoTen = ?, SoDienThoai = ?, Email = ? WHERE MaBacSi = ?";
          pdo_execute($sql, $HoTen, $SoDienThoai, $Email, $MaBacSi);
}

function delete_bacsi($MaBacSi)
{
          $sql_donthuoc = "DELETE FROM donthuoc WHERE MaBacSi = ?";
          pdo_execute($sql_donthuoc, $MaBacSi);
          $sql_dangkykham = "DELETE FROM dangkykham WHERE MaBacSi = ?";
          pdo_execute($sql_dangkykham, $MaBacSi);
          $sql = "DELETE FROM bacsi WHERE MaBacSi = ?";
          pdo_execute($sql, $MaBacSi);
}