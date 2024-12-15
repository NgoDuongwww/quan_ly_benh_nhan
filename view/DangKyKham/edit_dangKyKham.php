<div class="row__content">
          <h1 class="title">Sửa Đăng Ký Khám</h1>
          <form action="index.php?act=edit_dangKyKham" method="post" class="form form__add">
                    <input type="hidden" name="MaDangKy" value="<?= $data['MaDangKy']; ?>">

                    <div class="form__group">
                              <label for="MaBenhNhan">Bệnh Nhân</label>
                              <select id="MaBenhNhan" name="MaBenhNhan" class="input input--1">
                                        <?php
                                        foreach ($dataBenhNhan as $benhNhan) {
                                                  $selected = ($benhNhan['MaBenhNhan'] == $data['MaBenhNhan']) ? 'selected' : '';
                                                  echo "<option value='{$benhNhan['MaBenhNhan']}' {$selected}>{$benhNhan['HoTen']}</option>";
                                        }
                                        ?>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="MaBacSi">Bác Sĩ</label>
                              <select id="MaBacSi" name="MaBacSi" class="input input--1">
                                        <?php
                                        foreach ($dataBacSi as $bacSi) {
                                                  $selected = ($bacSi['MaBacSi'] == $data['MaBacSi']) ? 'selected' : '';
                                                  echo "<option value='{$bacSi['MaBacSi']}' {$selected}>{$bacSi['HoTen']}</option>";
                                        }
                                        ?>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="NgayGioKham">Ngày Giờ Khám</label>
                              <input type="datetime-local" id="NgayGioKham" name="NgayGioKham" class="input input--1"
                                        value="<?= date('Y-m-d\TH:i', strtotime($data['NgayGioKham'])); ?>">
                    </div>

                    <div class="form__group">
                              <label for="TrangThai">Trạng Thái</label>
                              <select id="TrangThai" name="TrangThai" class="input input--1">
                                        <option value="Chưa khám" <?= ($data['TrangThai'] == 'Chưa khám') ? 'selected' : ''; ?>>Chưa khám</option>
                                        <option value="Đã khám" <?= ($data['TrangThai'] == 'Đã khám') ? 'selected' : ''; ?>>Đã khám</option>
                                        <option value="Hủy" <?= ($data['TrangThai'] == 'Hủy') ? 'selected' : ''; ?>>Hủy
                                        </option>
                              </select>
                    </div>

                    <button type="submit" class="btn btn--primary">Cập Nhật</button>
          </form>
</div>