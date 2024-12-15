<div class="row__content">
          <h1 class="title">Sửa Đơn Thuốc</h1>
          <form action="index.php?act=edit_donThuoc" method="post" class="form form__add">
                    <!-- Trường ẩn lưu mã đơn thuốc -->
                    <input type="hidden" name="MaDonThuoc" value="<?= $data['MaDonThuoc']; ?>">

                    <!-- Trường chọn bệnh nhân -->
                    <div class="form__group">
                              <label for="maBenhNhan">Bệnh Nhân</label>
                              <select id="maBenhNhan" name="MaBenhNhan" class="input input--1" required>
                                        <?php foreach ($dataBenhNhan as $benhNhan): ?>
                                                  <option value="<?= $benhNhan['MaBenhNhan']; ?>"
                                                            <?= $benhNhan['MaBenhNhan'] == $data['MaBenhNhan'] ? 'selected' : ''; ?>>
                                                            <?= $benhNhan['HoTen']; ?>
                                                  </option>
                                        <?php endforeach; ?>
                              </select>
                    </div>

                    <!-- Trường chọn bác sĩ -->
                    <div class="form__group">
                              <label for="maBacSi">Bác Sĩ</label>
                              <select id="maBacSi" name="MaBacSi" class="input input--1" required>
                                        <?php foreach ($dataBacSi as $bacSi): ?>
                                                  <option value="<?= $bacSi['MaBacSi']; ?>" <?= $bacSi['MaBacSi'] == $data['MaBacSi'] ? 'selected' : ''; ?>>
                                                            <?= $bacSi['HoTen']; ?>
                                                  </option>
                                        <?php endforeach; ?>
                              </select>
                    </div>

                    <!-- Trường chọn ngày kê đơn -->
                    <div class="form__group">
                              <label for="ngayKeDon">Ngày Kê Đơn</label>
                              <input type="datetime-local" id="ngayKeDon" name="NgayKeDon" class="input input--1"
                                        value="<?= date('Y-m-d\TH:i', strtotime($data['NgayKeDon'])); ?>" required>
                    </div>

                    <!-- Nút cập nhật -->
                    <button type="submit" class="btn btn--primary">Cập Nhật</button>
          </form>
</div>