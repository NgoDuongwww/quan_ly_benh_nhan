<div class="row__content">
          <h1 class="title">Thêm Đơn Thuốc</h1>
          <form action="index.php?act=add_donThuoc" method="post">
                    <table class="form__table">
                              <tr>
                                        <td><label for="MaBenhNhan">Bệnh Nhân:</label></td>
                                        <td>
                                                  <select name="MaBenhNhan" id="MaBenhNhan">
                                                            <option value="">-- Chọn bệnh nhân --</option>
                                                            <?php foreach ($dataBenhNhan as $benhnhan): ?>
                                                                      <option value="<?= $benhnhan['MaBenhNhan'] ?>">
                                                                                <?= $benhnhan['HoTen'] ?>
                                                                      </option>
                                                            <?php endforeach; ?>
                                                  </select>
                                        </td>
                              </tr>
                              <tr>
                                        <td><label for="MaBacSi">Bác Sĩ:</label></td>
                                        <td>
                                                  <select name="MaBacSi" id="MaBacSi">
                                                            <option value="">-- Chọn bác sĩ --</option>
                                                            <?php foreach ($dataBacSi as $bacsi): ?>
                                                                      <option value="<?= $bacsi['MaBacSi'] ?>">
                                                                                <?= $bacsi['HoTen'] ?>
                                                                      </option>
                                                            <?php endforeach; ?>
                                                  </select>
                                        </td>
                              </tr>
                              <tr>
                                        <td><label for="NgayKeDon">Ngày Kê Đơn:</label></td>
                                        <td><input type="date" name="NgayKeDon" id="NgayKeDon"></td>
                              </tr>
                              <tr>
                                        <td><label for="MaDonThuoc">Mã Đơn Thuốc:</label></td>
                                        <td><input type="text" name="MaDonThuoc" id="MaDonThuoc"></td>
                              </tr>

                              <tr>
                                        <td><label for="Thuoc">Thuốc:</label></td>
                                        <td>
                                                  <table id="thuoc-container">
                                                            <tr>
                                                                      <th>Thuốc</th>
                                                                      <th>Số Lượng</th>
                                                                      <th>Đơn Vị</th>
                                                                      <th>Cách Dùng</th>
                                                                      <th>Hành Động</th>
                                                            </tr>
                                                            <tr class="thuoc-group">
                                                                      <td>
                                                                                <select name="MaThuoc[]">
                                                                                          <option value="">-- Chọn thuốc
                                                                                                    --</option>
                                                                                          <?php foreach ($dataThuoc as $thuoc): ?>
                                                                                                    <option
                                                                                                              value="<?= $thuoc['MaThuoc'] ?>">
                                                                                                              <?= $thuoc['TenThuoc'] ?>
                                                                                                    </option>
                                                                                          <?php endforeach; ?>
                                                                                </select>
                                                                      </td>
                                                                      <td><input type="number" name="SoLuong[]" min="1">
                                                                      </td>
                                                                      <td>
                                                                                <select name="DonVi[]">
                                                                                          <option value="">-- Chọn đơn
                                                                                                    vị --</option>
                                                                                          <option value="Hộp">Hộp
                                                                                          </option>
                                                                                          <option value="Vỉ">Vỉ</option>
                                                                                          <option value="Viên">Viên
                                                                                          </option>
                                                                                </select>
                                                                      </td>

                                                                      <td><textarea name="CachDung[]"
                                                                                          rows="2"></textarea></td>
                                                                      <td><button type="button"
                                                                                          class="btn btn--danger remove-thuoc">Xóa</button>
                                                                      </td>
                                                            </tr>
                                                  </table>
                                                  <button type="button" class="btn btn--secondary" id="add-thuoc">Thêm
                                                            Thuốc</button>
                                        </td>
                              </tr>
                              <tr>
                                        <td colspan="2" style="text-align: center;">
                                                  <button type="submit" class="btn btn--primary">Thêm Đơn Thuốc</button>
                                        </td>
                              </tr>
                    </table>
          </form>
</div>

<script>
          document.getElementById('add-thuoc').addEventListener('click', function () {
                    const container = document.getElementById('thuoc-container');
                    const thuocGroup = document.querySelector('.thuoc-group');
                    const newGroup = thuocGroup.cloneNode(true);

                    // Reset values for cloned group
                    newGroup.querySelectorAll('input, select, textarea').forEach(function (field) {
                              field.value = '';
                    });

                    // Append new group
                    container.appendChild(newGroup);

                    // Add event listener for remove button
                    newGroup.querySelector('.remove-thuoc').addEventListener('click', function () {
                              newGroup.remove();
                    });
          });

          document.querySelectorAll('.remove-thuoc').forEach(function (button) {
                    button.addEventListener('click', function () {
                              button.closest('tr').remove();
                    });
          });
</script>