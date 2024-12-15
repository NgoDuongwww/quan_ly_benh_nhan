<div class="row__content">
          <h1 class="title">Sửa Loại Thuốc</h1>
          <form action="index.php?act=edit_loaiThuoc" method="post" class="form form__add">
                    <input type="hidden" name="MaLoaiThuoc" value="<?= $data['MaLoaiThuoc']; ?>">
                    <div class="form__group">
                              <label for="tenLoaiThuoc">Tên Loại Thuốc</label>
                              <input type="text" id="tenLoaiThuoc" name="TenLoaiThuoc" class="input input--1"
                                        value="<?= $data['TenLoaiThuoc']; ?>">
                    </div>
                    <div class="form__group">
                              <label for="moTa">Mô Tả</label>
                              <input type="text" id="moTa" name="MoTa" class="input input--1"
                                        value="<?= $data['MoTa']; ?>">
                    </div>
                    <button type="submit" class="btn btn--primary">Cập Nhật</button>
          </form>
</div>