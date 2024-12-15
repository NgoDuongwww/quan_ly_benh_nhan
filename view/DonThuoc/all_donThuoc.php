<div class="row__content">
          <h1 class="title">Danh sách Đơn thuốc</h1>
          <a class="add" href="index.php?act=add_donThuoc">Thêm</a>
          <table>
                    <thead>
                              <tr>
                                        <th>Mã Đơn Thuốc</th>
                                        <th>Bệnh Nhân</th>
                                        <th>Bác Sĩ Kê Đơn</th>
                                        <th>Ngày Kê Đơn</th>
                                        <th>Hành động</th>
                              </tr>
                    </thead>
                    <tbody>
                              <?php foreach ($data as $donThuoc): ?>
                                        <tr>
                                                  <td><?= $donThuoc['MaDonThuoc']; ?></td>
                                                  <td><?= $donThuoc['HoTenBN']; ?></td>
                                                  <td><?= $donThuoc['HoTenBS']; ?></td>
                                                  <td><?= $donThuoc['NgayKeDon']; ?></td>
                                                  <td>
                                                            <a class="detail"
                                                                      href="index.php?act=detail_donThuoc&MaDonThuoc=<?= $donThuoc['MaDonThuoc']; ?>">Chi tiết</a>
                                                            <a class="edit"
                                                                      href="index.php?act=edit_donThuoc&MaDonThuoc=<?= $donThuoc['MaDonThuoc']; ?>">Sửa</a>
                                                            <a class="delete"
                                                                      href="index.php?act=delete_donThuoc&MaDonThuoc=<?= $donThuoc['MaDonThuoc']; ?>">Xóa</a>
                                                  </td>
                                        </tr>
                              <?php endforeach; ?>
                    </tbody>
          </table>
</div>