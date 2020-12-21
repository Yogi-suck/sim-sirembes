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
                  <h4>Tambah Data Kelahiran</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/kelahiran/main.php" class="btn btn-danger">Kembali ke Data Kelahiran <i class="fas fa-chevron-right"></i></a>
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
                              <label>Nama Penduduk</label>
                              <input type="text" class="form-control" name="nama_penduduk">
                            </div>
                            <div class="form-group">
                              <label>Tanggal Kematian</label>
                              <input type="date" class="form-control" name="tgl_kematian">
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