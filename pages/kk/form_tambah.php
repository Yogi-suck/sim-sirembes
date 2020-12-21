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
                  <h4>Tambah Data KK</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/kk/main.php" class="btn btn-danger">Kembali ke Data KK <i class="fas fa-chevron-right"></i></a>
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
                              <label>Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama_lengkap">
                            </div>
                            <div class="form-group">
                              <label>Nomer Induk Kependudukan</label>
                              <input type="text" class="form-control" name="nik">
                            </div>
                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select name='jenis_kelamin'>
                                  <option value='Laki-Laki'>Laki-Laki</option>
                                  <option value='Perempuan'>Perempuan</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Agama</label>
                              <select name='agama'>
                                  <option value='islam'>Islam</option>
                                  <option value='kristen'>Kristen</option>
                                  <option value='katholik'>Katholik</option>
                                  <option value='hindu'>Hindu</option>
                                  <option value='budha'>Budha</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Nama Orang Tua</label>
                              <input type="text" class="form-control" name="nama_orang_tua">
                            </div>
                            <div class="form-group">
                              <label>Nomer Dokumen Imigrasi</label>
                              <input type="text" class="form-control" name="ndi">
                            </div>
                            <div class="form-group">
                              <label>Status Hubungan Keluarga</label>
                              <select name='status_hubungan_keluarga'>
                                  <option value='Kepala Keluarga'>Kepala Keluarga</option>
                                  <option value='Istri'>Istri</option>
                                  <option value='Anak'>Anak</option>
                                  <option value='Menantu'>Menantu</option>
                                  <option value='Cucu'>Cucu</option>
                                  <option value='Orang Tua'>Orang Tua</option>
                                  <option value='Mertua'>Mertua</option>
                                  <option value='Famili Lain'>Famili Lain</option>
                                  <option value='Pembantu'>Pembantu</option>
                                  <option value='Lainnya'>Lainnya</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Pekerjaan</label>
                              <input type="text" class="form-control" name="pekerjaan">
                            </div>
                            <div class="form-group">
                              <label>Status Perkawinan</label>
                              <select name='status_perkawinan'>
                                  <option value='Belum kawin'>Belum kawin</option>
                                  <option value='Kawin'>Kawin</option>
                                  <option value='Cerai hidup'>Cerai hidup</option>
                                  <option value='Cerai mati'>Cerai mati</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                            <div class="form-group">
                              <label>Pendidikan</label>
                              <select name='pendidikan'>
                                  <option value='TAMAT SD / SEDERAJAT'>TAMAT SD / SEDERAJAT</option>
                                  <option value='SLTP/SEDERAJAT'>SLTP/SEDERAJAT</option>
                                  <option value='TIDAK / BELUM SEKOLAH'>TIDAK / BELUM SEKOLAH</option>
                                  <option value='BELUM TAMAT SD/SEDERAJAT'>BELUM TAMAT SD/SEDERAJAT</option>
                                  <option value='DIPLOMA IV/ STRATA I'>DIPLOMA IV/ STRATA I</option>
                                  <option value='AKADEMI/ DIPLOMA III/S. MUDA'>AKADEMI/ DIPLOMA III/S. MUDA</option>
                                  <option value='DIPLOMA I / II'>DIPLOMA I / II</option>
                                  <option value='STRATA III'>STRATA III</option>
                                  <option value='STRATA II'>STRATA II</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Kwarganegaraan</label>
                              <input type="text" class="form-control" name="kwarganegaraan">
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