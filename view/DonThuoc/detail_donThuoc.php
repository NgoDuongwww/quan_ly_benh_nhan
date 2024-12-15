<div class="row__content">
          <h1 class="title">Chi Tiết Đơn Thuốc</h1>

          <div class="info">
                    <p>Mã đơn thuốc: <span><?= $data[0]['MaDonThuoc']; ?></span></p>
                    <p>Bệnh nhân: <span><?= $data_donThuoc[0]['HoTenBN']; ?></span></p>
                    <p>Bác sĩ kê đơn: <span><?= $data_donThuoc[0]['HoTenBS']; ?></span></p>
                    <p>Ngày kê đơn: <span><?= $data_donThuoc[0]['NgayKeDon']; ?></span></p>
          </div>
          <table>
                    <thead>
                              <tr>
                                        <th>STT</th>
                                        <th>Tên Thuốc</th>
                                        <th>Số Lượng</th>
                                        <th>Đơn Vị</th>
                                        <th>Cách Dùng</th>
                                        <!-- <th>Hành Động</th> -->
                              </tr>
                    </thead>
                    <tbody>
                              <?php foreach ($data as $index => $chiTiet): ?>
                                        <tr>
                                                  <td><?= $index + 1; ?></td>
                                                  <td><?= $chiTiet['TenThuoc']; ?></td>
                                                  <td><?= $chiTiet['SoLuong']; ?></td>
                                                  <td><?= $chiTiet['DonVi']; ?></td>
                                                  <td><?= $chiTiet['CachDung']; ?></td>
                                                  <!-- <td>
                                                            <a class="edit"
                                                                      href="index.php?act=edit_chiTietDonThuoc&MaChiTiet=<?= $chiTiet['MaChiTiet']; ?>">Sửa</a>
                                                            <a class="delete"
                                                                      href="index.php?act=delete_chiTietDonThuoc&MaChiTiet=<?= $chiTiet['MaChiTiet']; ?>">Xóa</a>
                                                  </td> -->
                                        </tr>
                              <?php endforeach; ?>
                    </tbody>
          </table>
</div>