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
                  <h4>Tambah Data Penduduk</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/penduduk/main.php" class="btn btn-danger">Kembali ke Data Penduduk <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  
                <?php
                include '../../lib/koneksi.php';
                $id_penduduk = $_GET['id_penduduk'];
                $data = mysqli_query($koneksi,"select * from tbl_penduduk where id_penduduk='$id_penduduk'");
                while($q=mysqli_fetch_array($data)){
                ?>

                <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>

                    <form action="simpan_edit.php" method="POST">
                    <input type="hidden" name="id_penduduk" value="<?php echo $q['id_penduduk']; ?>">

                    <div class="form-group">
                      <label>Nama Penduduk</label>
                      <input type="text" class="form-control" name="nama_penduduk" value="<?= $q['nama_penduduk']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Alamat Penduduk</label>
                      <input type="text" class="form-control" name="alamat_penduduk" value="<?= $q['alamat_penduduk']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Nomer hp</label>
                      <input type="text" class="form-control" name="nomer_hp" value="<?= $q['nomer_hp']; ?>">
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