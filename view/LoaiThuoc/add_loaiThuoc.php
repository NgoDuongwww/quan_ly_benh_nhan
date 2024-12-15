<div class="row__content">
          <h1 class="title">Thêm Loại Thuốc</h1>
          <form action="index.php?act=add_loaiThuoc" method="post" class="form form__add">
                    <div class="form__group">
                              <label for="tenLoaiThuoc">Tên Loại Thuốc</label>
                              <input type="text" id="tenLoaiThuoc" name="TenLoaiThuoc" class="input input--1"
                                        placeholder="Nhập tên loại thuốc" required>
                    </div>
                    <div class="form__group">
                              <label for="moTa">Mô Tả</label>
                              <input type="text" id="moTa" name="MoTa" class="input input--1" placeholder="Nhập mô tả">
                    </div>
                    <button type="submit" class="btn btn--primary">Thêm</button>
          </form>

</div>