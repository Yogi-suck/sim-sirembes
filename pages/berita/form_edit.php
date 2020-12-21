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
                  <h4>Edit Berita</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/berita/main.php" class="btn btn-danger">Kembali ke Berita Utama <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  
                <?php
                include '../../lib/koneksi.php';
                $id_berita = $_GET['id_berita'];
                $data = mysqli_query($koneksi,"select * from tbl_berita where id_berita='$id_berita'");
                while($q=mysqli_fetch_array($data)){
                ?>

                <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>

                    <form action="simpan_edit.php" method="POST">
                    <input type="hidden" name="id_berita" value="<?php echo $q['id_berita']; ?>">

                    <div class="form-group">
                      <label>Pokok Berita</label>
                      <input type="text" class="form-control" name="kategori_berita" value="<?= $q['kategori_berita']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Isi Berita</label>
                      <textarea class="form-control" name="isi_berita"><?= $q['isi_berita']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Gambar</label>
                      <select name='gambar'>
                        <option <?php echo ($q['gambar'] == 'img_gotongroyong.jpg')?"selected":"" ?> value='img_gotongroyong.jpg'>Berita Gotong Royong</option>
                        <option <?php echo ($q['gambar'] == 'img_lelayu.jpg')?"selected":"" ?> value='img_lelayu.jpg'>Berita Lelayu</option>
                        <option <?php echo ($q['gambar'] == 'img_karangtaruna.jpg')?"selected":"" ?> value='img_karangtaruna.jpg'>Berita Karangtaruna</option>
                        <option <?php echo ($q['gambar'] == 'img_universal.jpg')?"selected":"" ?> value='img_universal.jpg'>Berita Tentang Sirembes</option>
                      </select>
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