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
                  
                <?php
                include '../../lib/koneksi.php';
                $id_kk = $_GET['id_kk'];
                $data = mysqli_query($koneksi,"select * from tbl_kk where id_kk='$id_kk'");
                while($q=mysqli_fetch_array($data)){
                ?>

                <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>

                    <form action="simpan_edit.php" method="POST">
                    <input type="hidden" name="id_kk" value="<?php echo $q['id_kk']; ?>">

                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" value="<?= $q['nama_lengkap']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Nomer Induk Kependudukan</label>
                      <input type="text" class="form-control" name="nik" value="<?= $q['nik']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select name='jenis_kelamin'>
                        <option <?php echo ($q['jenis_kelamin'] == 'Laki-Laki')?"selected":"" ?> value='Laki-Laki'>Laki-Laki</option>
                        <option <?php echo ($q['jenis_kelamin'] == 'Perempuan')?"selected":"" ?> value='Perempuan'>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <select name='agama'>
                        <option <?php echo ($q['agama'] == 'islam')?"selected":"" ?> value='islam'>Islam</option>
                        <option <?php echo ($q['agama'] == 'kristen')?"selected":"" ?> value='kristen'>Kristen</option>
                        <option <?php echo ($q['agama'] == 'katholik')?"selected":"" ?> value='katholik'>Katholik</option>
                        <option <?php echo ($q['agama'] == 'hindu')?"selected":"" ?> value='hindu'>Hindu</option>
                        <option <?php echo ($q['agama'] == 'budha')?"selected":"" ?> value='budha'>Budha</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Orang Tua</label>
                      <input type="text" class="form-control" name="nama_orang_tua" value="<?= $q['nama_orang_tua']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Nomer Dokumen Imigrasi</label>
                      <input type="text" class="form-control" name="ndi" value="<?= $q['ndi']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Status Hubungan Keluarga</label>
                      <select name='status_hubungan_keluarga'>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Kepala Keluarga')?"selected":"" ?> value='Kepala Keluarga'>Kepala Keluarga</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Istri')?"selected":"" ?> value='Istri'>Istri</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Anak')?"selected":"" ?> value='Anak'>Anak</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Menantu')?"selected":"" ?> value='Menantu'>Menantu</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Cucu')?"selected":"" ?> value='Cucu'>Cucu</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Orang Tua')?"selected":"" ?> value='Orang Tua'>Orang Tua</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Mertua')?"selected":"" ?> value='Mertua'>Mertua</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Famili Lain')?"selected":"" ?> value='Famili Lain'>Famili Lain</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Pembantu')?"selected":"" ?> value='Pembantu'>Pembantu</option>
                        <option <?php echo ($q['status_hubungan_keluarga'] == 'Lainnya')?"selected":"" ?> value='Lainnya'>Lainnya</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" value="<?= $q['pekerjaan']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Status Perkawinan</label>
                      <select name='status_perkawinan'>
                        <option <?php echo ($q['status_perkawinan'] == 'Belum kawin')?"selected":"" ?> value='Belum kawin'>Belum kawin</option>
                        <option <?php echo ($q['status_perkawinan'] == 'Kawin')?"selected":"" ?> value='Kawin'>Kawin</option>
                        <option <?php echo ($q['status_perkawinan'] == 'Cerai hidup')?"selected":"" ?> value='Cerai hidup'>Cerai hidup</option>
                        <option <?php echo ($q['status_perkawinan'] == 'Cerai mati')?"selected":"" ?> value='Cerai mati'>Cerai mati</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir" value="<?= $q['tgl_lahir']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Pendidikan</label>
                      <select name='pendidikan'>
                        <option <?php echo ($q['pendidikan'] == 'TAMAT SD / SEDERAJAT')?"selected":"" ?> value='TAMAT SD / SEDERAJAT'>TAMAT SD / SEDERAJAT</option>
                        <option <?php echo ($q['pendidikan'] == 'SLTP/SEDERAJAT')?"selected":"" ?> value='SLTP/SEDERAJAT'>SLTP/SEDERAJAT</option>
                        <option <?php echo ($q['pendidikan'] == 'TIDAK / BELUM SEKOLAH')?"selected":"" ?> value='TIDAK / BELUM SEKOLAH'>TIDAK / BELUM SEKOLAH</option>
                        <option <?php echo ($q['pendidikan'] == 'BELUM TAMAT SD/SEDERAJAT')?"selected":"" ?> value='BELUM TAMAT SD/SEDERAJAT'>BELUM TAMAT SD/SEDERAJAT</option>
                        <option <?php echo ($q['pendidikan'] == 'DIPLOMA IV/ STRATA I')?"selected":"" ?> value='DIPLOMA IV/ STRATA I'>DIPLOMA IV/ STRATA I</option>
                        <option <?php echo ($q['pendidikan'] == 'AKADEMI/ DIPLOMA III/S. MUDA')?"selected":"" ?> value='AKADEMI/ DIPLOMA III/S. MUDA'>AKADEMI/ DIPLOMA III/S. MUDA</option>
                        <option <?php echo ($q['pendidikan'] == 'DIPLOMA I / II')?"selected":"" ?> value='DIPLOMA I / II'>DIPLOMA I / II</option>
                        <option <?php echo ($q['pendidikan'] == 'STRATA III')?"selected":"" ?> value='STRATA III'>STRATA III</option>
                        <option <?php echo ($q['pendidikan'] == 'STRATA II')?"selected":"" ?> value='STRATA II'>STRATA II</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kwarganegaraan</label>
                      <input type="text" class="form-control" name="kwarganegaraan" value="<?= $q['kwarganegaraan']; ?>">
                    </div>
                    
                    
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
     

<?php
include "../../footer.php";
?>