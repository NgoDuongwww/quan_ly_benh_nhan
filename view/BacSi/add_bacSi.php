<div class="row__content">
          <h1 class="title">Thêm Bác Sĩ</h1>
          <form action="index.php?act=add_bacSi" method="post" class="form form__add">

                    <div class="form__group">
                              <label for="hoTen">Họ Tên</label>
                              <input type="text" id="hoTen" name="HoTen" class="input input--1"
                                        placeholder="Nhập họ tên bác sĩ" required>
                    </div>

                    <div class="form__group">
                              <label for="soDienThoai">Số Điện Thoại</label>
                              <input type="text" id="soDienThoai" name="SoDienThoai" class="input input--1"
                                        placeholder="Nhập số điện thoại" >
                    </div>

                    <div class="form__group">
                              <label for="email">Email</label>
                              <input type="email" id="email" name="Email" class="input input--1"
                                        placeholder="Nhập email" >
                    </div>

                    <button type="submit" class="btn btn--primary">Thêm</button>
          </form>
</div>