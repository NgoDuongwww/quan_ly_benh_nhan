<div class="row__content">
          <h1 class="title">Sửa Thuốc</h1>
          <form action="index.php?act=edit_thuoc" method="post" class="form form__add">
                    <input type="hidden" name="MaThuoc" value="<?= $data['MaThuoc']; ?>">

                    <div class="form__group">
                              <label for="tenThuoc">Tên Thuốc</label>
                              <input type="text" id="tenThuoc" name="TenThuoc" class="input input--1"
                                        value="<?= $data['TenThuoc']; ?>">
                    </div>
                    
                    <div class="form__group">
                              <label for="maLoaiThuoc">Loại Thuốc</label>
                              <select id="maLoaiThuoc" name="MaLoaiThuoc" class="input input--1">
                                        <?php foreach ($dataLoaiThuoc as $loaiThuoc): ?>
                                                  <option value="<?= $loaiThuoc['MaLoaiThuoc']; ?>"
                                                            <?= (isset($data['MaLoaiThuoc']) && $loaiThuoc['MaLoaiThuoc'] == $data['MaLoaiThuoc']) ? 'selected' : ''; ?>>
                                                            <?= $loaiThuoc['TenLoaiThuoc']; ?>
                                                  </option>
                                        <?php endforeach; ?>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="soLuong">Số Lượng</label>
                              <input type="number" id="soLuong" name="SoLuong" class="input input--1"
                                        value="<?= $data['SoLuong']; ?>">
                    </div>

                    <div class="form__group">
                              <label for="donVi">Đơn Vị</label>
                              <input type="text" id="donVi" name="DonVi" class="input input--1"
                                        value="<?= $data['DonVi']; ?>">
                    </div>

                    <div class="form__group">
                              <label for="gia">Giá</label>
                              <input type="number" id="gia" name="Gia" class="input input--1"
                                        value="<?= $data['Gia']; ?>">
                    </div>

                    <button type="submit" class="btn btn--primary">Cập Nhật</button>
          </form>

</div>