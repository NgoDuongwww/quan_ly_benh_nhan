<div class="row__content">
          <h1 class="title">Thêm Thuốc</h1>
          <form action="index.php?act=add_thuoc" method="post" class="form form__add">

                    <div class="form__group">
                              <label for="TenThuoc">Tên Thuốc</label>
                              <input type="text" id="TenThuoc" name="TenThuoc" class="input input--1"
                                        placeholder="Nhập tên thuốc" required>
                    </div>

                    <div class="form__group">
                              <label for="MaLoaiThuoc">Loại Thuốc</label>
                              <select id="MaLoaiThuoc" name="MaLoaiThuoc" class="input input--1" required>
                                        <?php foreach ($dataLoaiThuoc as $loaiThuoc): ?>
                                                  <option value="<?= $loaiThuoc['MaLoaiThuoc']; ?>">
                                                            <?= $loaiThuoc['TenLoaiThuoc']; ?>
                                                  </option>
                                        <?php endforeach; ?>
                              </select>
                    </div>

                    <div class="form__group">
                              <label for="SoLuong">Số Lượng</label>
                              <input type="number" id="SoLuong" name="SoLuong" class="input input--1"
                                        placeholder="Nhập số lượng" required>
                    </div>

                    <div class="form__group">
                              <label for="DonVi">Đơn Vị</label>
                              <input type="text" id="DonVi" name="DonVi" class="input input--1"
                                        placeholder="Nhập đơn vị" required>
                    </div>

                    <div class="form__group">
                              <label for="Gia">Giá</label>
                              <input type="number" id="Gia" name="Gia" class="input input--1" placeholder="Nhập giá"
                                        required>
                    </div>

                    <button type="submit" class="btn btn--primary">Thêm</button>
          </form>
</div>