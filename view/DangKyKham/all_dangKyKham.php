<div class="row__content">
          <h1 class="title">Danh sách loại đăng ký khám</h1>
          <a class="add" href="index.php?act=add_dangKyKham">Thêm</a>
          <table>
                    <thead>
                              <tr>
                                        <th>Mã Đăng Ký</th>
                                        <th>Bệnh Nhân</th>
                                        <th>Bác Sĩ</th>
                                        <th>Ngày Giờ Khám</th>
                                        <th>Trạng Thái</th>
                                        <th>Hành động</th>
                              </tr>
                    </thead>
                    <tbody>
                              <?php foreach ($data as $maDangKy): ?>
                                        <tr>
                                                  <td><?= $maDangKy['MaDangKy']; ?></td>
                                                  <td><?= $maDangKy['HoTenBN']; ?></td>
                                                  <td><?= $maDangKy['HoTenBS']; ?></td>
                                                  <td><?= $maDangKy['NgayGioKham']; ?></td>
                                                  <td><?= $maDangKy['TrangThai']; ?></td>
                                                  <td>
                                                            <a class="edit"
                                                                      href="index.php?act=edit_dangKyKham&MaDangKy=<?= $maDangKy['MaDangKy']; ?>">Sửa</a>
                                                            <a class="delete"
                                                                      href="index.php?act=delete_dangKyKham&MaDangKy=<?= $maDangKy['MaDangKy']; ?>">Xóa</a>
                                                  </td>
                                        </tr>
                              <?php endforeach; ?>
                    </tbody>
          </table>
</div>