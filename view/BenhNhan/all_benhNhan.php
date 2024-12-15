<div class="row__content">
          <h1 class="title">Danh sách bệnh nhân</h1>
          <a class="add" href="index.php?act=add_benhNhan">Thêm</a>
          <table>
                    <thead>
                              <tr>
                                        <th>Mã Bệnh Nhân</th>
                                        <th>Họ Tên</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Địa chỉ</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th>Ngày Đăng Ký</th>
                                        <th>Hành động</th>
                              </tr>
                    </thead>
                    <tbody>
                              <?php foreach ($data as $benhNhan): ?>
                                        <tr>
                                                  <td><?= $benhNhan['MaBenhNhan']; ?></td>
                                                  <td><?= $benhNhan['HoTen']; ?></td>
                                                  <td><?= $benhNhan['NgaySinh']; ?></td>
                                                  <td><?= $benhNhan['GioiTinh']; ?></td>
                                                  <td><?= $benhNhan['DiaChi']; ?></td>
                                                  <td><?= $benhNhan['SoDienThoai']; ?></td>
                                                  <td><?= $benhNhan['Email']; ?></td>
                                                  <td><?= $benhNhan['NgayDangKy']; ?></td>
                                                  <td>
                                                            <a class="edit"
                                                                      href="index.php?act=edit_benhNhan&MaBenhNhan=<?= $benhNhan['MaBenhNhan']; ?>">Sửa</a>
                                                            <a class="delete"
                                                                      href="index.php?act=delete_benhNhan&MaBenhNhan=<?= $benhNhan['MaBenhNhan']; ?>">Xóa</a>
                                                  </td>
                                        </tr>
                              <?php endforeach; ?>
                    </tbody>
          </table>
</div>