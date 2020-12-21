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
                  <h4>Tambah Data Kematian</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/kematian/main.php" class="btn btn-danger">Kembali ke Data Kematian<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  
                <?php
                include '../../lib/koneksi.php';
                $id_kematian  = $_GET['id_kematian'];
                $data = mysqli_query($koneksi,"select * from tbl_kematian where id_kematian ='$id_kematian'");
                while($q=mysqli_fetch_array($data)){
                ?>

                <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>

                    <form action="simpan_edit.php" method="POST">
                    <input type="hidden" name="id_kematian " value="<?php echo $q['id_kematian ']; ?>">

                    <div class="form-group">
                      <label>Nama Penduduk</label>
                      <input type="text" class="form-control" name="nama_penduduk" value="<?= $q['nama_penduduk']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Kematian</label>
                      <input name="tgl_kematian" type="date" value="<?php echo date('Y-m-d',strtotime($q['tgl_kematian'])) ?>"/>
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