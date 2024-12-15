<div class="row__content">
          <h1 class="title">Danh sách loại thuốc</h1>
          <a class="add" href="index.php?act=add_loaiThuoc">Thêm</a>
          <table>
                    <thead>
                              <tr>
                                        <th>Mã Loại Thuốc</th>
                                        <th>Tên Loại Thuốc</th>
                                        <th>Mô Tả</th>
                                        <th>Hành động</th>
                              </tr>
                    </thead>
                    <tbody>
                              <?php foreach ($data as $loaiThuoc): ?>
                                        <tr>
                                                  <td><?= $loaiThuoc['MaLoaiThuoc']; ?></td>
                                                  <td><?= $loaiThuoc['TenLoaiThuoc']; ?></td>
                                                  <td><?= $loaiThuoc['MoTa']; ?></td>
                                                  <td>
                                                            <a class="edit"
                                                                      href="index.php?act=edit_loaiThuoc&MaLoaiThuoc=<?= $loaiThuoc['MaLoaiThuoc']; ?>">Sửa</a>
                                                            <a class="delete"
                                                                      href="index.php?act=delete_loaiThuoc&MaLoaiThuoc=<?= $loaiThuoc['MaLoaiThuoc']; ?>">Xóa</a>
                                                  </td>
                                        </tr>
                              <?php endforeach; ?>
                    </tbody>
          </table>
</div>