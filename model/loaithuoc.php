<?php

function get_all_loaithuoc()
{
          $sql = "SELECT * FROM loaithuoc";
          return pdo_query($sql);
}

function get_loaithuoc_by_MaLoaiThuoc($MaLoaiThuoc)
{
          $sql = "SELECT * FROM loaithuoc WHERE MaLoaiThuoc = ?";
          return pdo_query_one($sql, $MaLoaiThuoc);
}

function add_loaithuoc($TenLoaiThuoc, $MoTa)
{
          $sql = "INSERT INTO loaithuoc(TenLoaiThuoc, MoTa) VALUES(?,?)";
          return pdo_execute($sql, $TenLoaiThuoc, $MoTa);
}

function update_loaithuoc($TenLoaiThuoc, $MoTa, $MaLoaiThuoc)
{
          $sql = "UPDATE loaithuoc SET TenLoaiThuoc = ?, MoTa = ? WHERE MaLoaiThuoc = ?";
          return pdo_execute($sql, $TenLoaiThuoc, $MoTa, $MaLoaiThuoc);
}

function delete_loaithuoc($MaLoaiThuoc)
{
          $sql = "DELETE FROM loaithuoc WHERE MaLoaiThuoc = ?";
          return pdo_execute($sql, $MaLoaiThuoc);
}