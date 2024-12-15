<div class="row__content">
          <h1 class="title">Thêm Bệnh Nhân</h1>
          <form action="index.php?act=add_benhNhan" method="post" class="form form__add">

                    <div class="form__group">
                              <label for="HoTen">Họ Tên</label>
                              <input type="text" id="HoTen" name="HoTen" class="input input--1"
                                        placeholder="Nhập họ tên bệnh nhân" required>
                    </div>

                    <div class="form__group">
                              <label for="NgaySinh">Ngày Sinh</label>
                              <input type="date" id="NgaySinh" name="NgaySinh" class="input input--1" required>
                    </div>

                    <div class="form__group">
                              <label for="gioiTinh">Giới Tính</label>
                              <select id="gioiTinh" name="GioiTinh" class="input input--1" required>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="DiaChi">Địa Chỉ</label>
                              <input type="text" id="DiaChi" name="DiaChi" class="input input--1"
                                        placeholder="Nhập địa chỉ">
                    </div>

                    <div class="form__group">
                              <label for="SoDienThoai">Số Điện Thoại</label>
                              <input type="text" id="SoDienThoai" name="SoDienThoai" class="input input--1"
                                        placeholder="Nhập số điện thoại">
                    </div>

                    <div class="form__group">
                              <label for="Email">Email</label>
                              <input type="Email" id="Email" name="Email" class="input input--1"
                                        placeholder="Nhập Email">
                    </div>

                    <div class="form__group">
                              <label for="NgayDangKy">Ngày Đăng Ký</label>
                              <input type="date" id="NgayDangKy" name="NgayDangKy" class="input input--1" required>
                    </div>

                    <button type="submit" class="btn btn--primary">Thêm</button>
          </form>
</div>