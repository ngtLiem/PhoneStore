                    <div class="col-12 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-2">
                          Danh mục
                          <br>
                          <select class="form-control form-control-lg" name="lsp" id="lsp">
                          <option value="<?php echo $mlsp; ?>" selected hidden><?php echo $lsp; ?></option>
                          <?php
                            $sql = "SELECT * FROM loai_sp";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              $result = $conn->query($sql);
                              $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                              foreach ($result_all as $row) {
                                echo "<option value=" .$row["LSP_MA"]. ">".$row["LSP_TEN"]. "</option>";
                              }                          
                            } else {
                              echo "<option value=''>Không có dữ liệu</option>";
                            }
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 px-3 col-8">
                          Tên sản phẩm
                        <input type="text" name="tensp" class="form-control form-control-lg" value="<?php echo $tensp; ?>">
                      </div>
                      <div class="mb-3 px-3 col-2">
                          Giá (VNĐ)
                        <input min="1000" max="10000000000" step="1000" type="number" name="giasp" class="form-control form-control-lg" value="<?php echo $giasp; ?>">
                      </div>
                    </div>
                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-12">
                          Mô tả sản phẩm
                        <textarea row="20" name="tinhnangsp" style="height: 150px;" class="form-control form-control-lg"><?php echo $tinhnangsp; ?></textarea>
                      </div>
                    </div>
                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">                    
                      <div class="mb-3 px-3 col-2">
                          Nhà phân phối
                          <br>
                          <select class="form-control form-control-lg" name="nguonsp" id="nguonsp">
                            <option value="<?php echo $manguonsp; ?>" selected hidden><?php echo $nguonsp; ?></option>
                            <?php
                              $sql = "SELECT * FROM nguon_hang";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                $result = $conn->query($sql);
                                $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                foreach ($result_all as $row) {
                                  echo "<option value=" .$row["NH_ID"]. ">".$row["NH_TENNGUON"]. "</option>";
                                }                          
                              } else {
                                echo "<option value=''>Không có dữ liệu</option>";
                              }
                            ?>
                          </select>
                        </div>                      
                      <div class="mb-3 px-3 col-2">
                        Đơn vị tính
                        <br>
                        <input type="text" name="dvtsp" class="form-control form-control-lg" value="<?php echo $dvtsp; ?>">
                      </div>
                      <div class="mb-3 px-3 col-2">
                          Số lượng
                        <input readonly min="1" max="10000" step="1" type="number" name="slsp" class="form-control form-control-lg" value="<?php echo $slsp; ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Tải ảnh sản phẩm:
                          <br>
                          <input type="hidden" name="old_productImg" value="<?php echo $anhsp;?>" accept="image/*">
                          <input class="mt-3" type="file" name="productImg" id="productImg" accept="image/*">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          <div id="preview">
                            <img id="old_img" src="../assets/img/product_img/<?php echo $anhsp;?>" class="rounded-circle avatar avatar-xxl ms-4" alt="">
                          </div>
                          <script>
                            var input = document.getElementById("productImg");
                            var preview = document.getElementById("preview");

                            input.addEventListener("change", function() {
                              preview.innerHTML = ""; // clear previous preview
                              var files = this.files;
                              for (var i = 0; i < files.length; i++) {
                                var file = files[i];
                                if (!file.type.startsWith("image/")){ continue } // skip non-image files
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                  var img = document.createElement("img");
                                  img.src = e.target.result;
                                  img.width = 1000; // set width for preview images
                                  img.className = "avatar avatar-xxl me-3";
                                  preview.appendChild(img); // append image to preview div
                                };
                                reader.readAsDataURL(file); // read file as data url
                              }
                            });
                          </script>
                      </div>
                    </div>