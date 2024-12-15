<div class="row__content">
          <h1 class="title">Thêm Đăng Ký Khám</h1>
          <form action="index.php?act=add_dangKyKham" method="post" class="form form__add">
                    <div class="form__group">
                              <label for="maBenhNhan">Bệnh Nhân</label>
                              <select id="maBenhNhan" name="MaBenhNhan" class="input input--1" required>
                                        <option value="">Chọn Bệnh Nhân</option>
                                        <?php
                                        foreach ($dataBenhNhan as $benhNhan) {
                                                  echo "<option value='{$benhNhan['MaBenhNhan']}'>{$benhNhan['HoTen']}</option>";
                                        }
                                        ?>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="maBacSi">Bác Sĩ</label>
                              <select id="maBacSi" name="MaBacSi" class="input input--1" required>
                                        <option value="">Chọn Bác Sĩ</option>
                                        <?php
                                        foreach ($dataBacSi as $bacSi) {
                                                  echo "<option value='{$bacSi['MaBacSi']}'>{$bacSi['HoTen']}</option>";
                                        }
                                        ?>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="NgayGioKham">Ngày Giờ Khám</label>
                              <input type="datetime-local" id="NgayGioKham" name="NgayGioKham" class="input input--1"
                                        required>
                    </div>

                    <div class="form__group">
                              <label for="trangThai">Trạng Thái</label>
                              <select id="trangThai" name="TrangThai" class="input input--1" required>
                                        <option value="Chưa khám">Chưa khám</option>
                                        <option value="Đã khám">Đã khám</option>
                                        <option value="Hủy">Hủy</option>
                              </select>
                    </div>

                    <button type="submit" class="btn btn--primary">Thêm</button>
          </form>
</div>