<div class="row__content">
          <h1 class="title">Sửa Bác Sĩ</h1>
          <form action="index.php?act=edit_benhNhan" method="post" class="form form__add">
                    <input type="hidden" name="MaBenhNhan" value="<?= $data['MaBenhNhan']; ?>">

                    <div class="form__group">
                              <label for="hoTen">Họ Tên</label>
                              <input type="text" id="hoTen" name="HoTen" class="input input--1"
                                        value="<?= $data['HoTen']; ?>">
                    </div>

                    <div class="form__group">
                              <label for="ngaySinh">Ngày Sinh</label>
                              <input type="date" id="ngaySinh" name="NgaySinh" class="input input--1"
                                        value="<?= $data['NgaySinh']; ?>">
                    </div>

                    <div class="form__group">
                              <label for="gioiTinh">Giới Tính</label>
                              <select id="gioiTinh" name="GioiTinh" class="input input--1">
                                        <option value="Nam" <?= $data['GioiTinh'] == 'Nam' ? 'selected' : ''; ?>>Nam
                                        </option>
                                        <option value="Nữ" <?= $data['GioiTinh'] == 'Nữ' ? 'selected' : ''; ?>>Nữ</option>
                                        <option value="Khác" <?= $data['GioiTinh'] == 'Khác' ? 'selected' : ''; ?>>Khác
                                        </option>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="diaChi">Địa Chỉ</label>
                              <input type="text" id="diaChi" name="DiaChi" class="input input--1"
                                        value="<?= $data['DiaChi']; ?>" placeholder="Nhập địa chỉ">
                    </div>

                    <div class="form__group">
                              <label for="soDienThoai">Số Điện Thoại</label>
                              <input type="text" id="soDienThoai" name="SoDienThoai" class="input input--1"
                                        value="<?= $data['SoDienThoai']; ?>" placeholder="Nhập số điện thoại">
                    </div>

                    <div class="form__group">
                              <label for="email">Email</label>
                              <input type="email" id="email" name="Email" class="input input--1"
                                        value="<?= $data['Email']; ?>" placeholder="Nhập email">
                    </div>

                    <div class="form__group">
                              <label for="ngayDangKy">Ngày Đăng Ký</label>
                              <input type="date" id="ngayDangKy" name="NgayDangKy" class="input input--1"
                                        value="<?= $data['NgayDangKy']; ?>">
                    </div>

                    <button type="submit" class="btn btn--primary">Cập Nhật</button>
          </form>
</div>