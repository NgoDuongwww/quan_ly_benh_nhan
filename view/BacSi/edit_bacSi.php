<div class="row__content">
          <h1 class="title">Sửa Bác Sĩ</h1>
          <form action="index.php?act=edit_bacSi" method="post" class="form form__add">
                    <input type="hidden" name="MaBacSi" value="<?= $data['MaBacSi']; ?>">

                    <div class="form__group">
                              <label for="HoTen">Họ Tên</label>
                              <input type="text" id="HoTen" name="HoTen" class="input input--1"
                                        value="<?= $data['HoTen']; ?>" >
                    </div>

                    <div class="form__group">
                              <label for="SoDienThoai">Số Điện Thoại</label>
                              <input type="text" id="SoDienThoai" name="SoDienThoai" class="input input--1"
                                        value="<?= $data['SoDienThoai']; ?>" >
                    </div>

                    <div class="form__group">
                              <label for="Email">Email</label>
                              <input type="Email" id="Email" name="Email" class="input input--1"
                                        value="<?= $data['Email']; ?>" >
                    </div>

                    <button type="submit" class="btn btn--primary">Cập Nhật</button>
          </form>
</div>