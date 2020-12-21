<?php
include "../../header.php";
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Tambah Berita</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/berita/main.php" class="btn btn-danger">Kembali ke Berita Utama<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <div class="section-title mt-0">Text</div>

                            <form action="simpan_tambah.php" method="POST">

                            <div class="form-group">
                              <label>Pokok Berita</label>
                              <input type="text" class="form-control" name="kategori_berita">
                            </div>
                            <div class="form-group">
                              <label>Isi Berita</label>
                              <textarea class="form-control" name="isi_berita"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Gambar</label>
                              <select name='gambar'>
                                  <option value='img_gotongroyong.jpg'>Berita Gotong Royong</option>
                                  <option value='img_lelayu.jpg'>Berita Lelayu</option>
                                  <option value='img_karangtaruna.jpg'>Berita Karangtaruna</option>
                                  <option value='img_universal.jpg'>Berita Tentang Sirembes</option>
                              </select>
                            </div> 
                            
                          <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
     

<?php
include "../../footer.php";
?>