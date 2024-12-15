<div class="row__content">
          <h1 class="title">Danh sách bác sĩ</h1>
          <a class="add" href="index.php?act=add_bacSi">Thêm</a>
          <table>
                    <thead>
                              <tr>
                                        <th>Mã Bác Sĩ</th>
                                        <th>Họ Tên</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th>Hành động</th>
                              </tr>
                    </thead>
                    <tbody>
                              <?php foreach ($data as $bacSi): ?>
                                        <tr>
                                                  <td><?= $bacSi['MaBacSi']; ?></td>
                                                  <td><?= $bacSi['HoTen']; ?></td>
                                                  <td><?= $bacSi['SoDienThoai']; ?></td>
                                                  <td><?= $bacSi['Email']; ?></td>
                                                  <td>
                                                            <a class="edit"
                                                                      href="index.php?act=edit_bacSi&MaBacSi=<?= $bacSi['MaBacSi']; ?>">Sửa</a>
                                                            <a class="delete"
                                                                      href="index.php?act=delete_bacSi&MaBacSi=<?= $bacSi['MaBacSi']; ?>">Xóa</a>
                                                  </td>
                                        </tr>
                              <?php endforeach; ?>
                    </tbody>
          </table>
</div>