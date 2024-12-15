<div class="row__content">
          <h1 class="title">Danh sách thuốc</h1>
          <a class="add" href="index.php?act=add_thuoc">Thêm</a>
          <table>
                    <thead>
                              <tr>
                                        <th>Mã Thuốc</th>
                                        <th>Tên Loại Thuốc</th>
                                        <th>Mã Loại Thuốc</th>
                                        <th>Số lượng</th>
                                        <th>Đơn vị</th>
                                        <!-- <th>Giá</th> -->
                                        <th>Hành động</th>
                              </tr>
                    </thead>
                    <tbody>
                              <?php foreach ($data as $thuoc): ?>
                                        <tr>
                                                  <td><?= $thuoc['MaThuoc']; ?></td>
                                                  <td><?= $thuoc['TenThuoc']; ?></td>
                                                  <td><?= $thuoc['TenLoaiThuoc']; ?></td>
                                                  <td><?= $thuoc['SoLuong']; ?></td>
                                                  <td><?= $thuoc['DonVi']; ?></td>
                                                  <!-- <td><?= $thuoc['Gia']; ?></td> -->
                                                  <td>
                                                            <a class="edit"
                                                                      href="index.php?act=edit_thuoc&MaThuoc=<?= $thuoc['MaThuoc']; ?>">Sửa</a>
                                                            <a class="delete"
                                                                      href="index.php?act=delete_thuoc&MaThuoc=<?= $thuoc['MaThuoc']; ?>">Xóa</a>
                                                  </td>
                                        </tr>
                              <?php endforeach; ?>
                    </tbody>
          </table>
</div>