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
                  <h4>Berita Dusun Penungkulan</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/berita/form_tambah.php" class="btn btn-danger">Tambah Berita Baru<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  	<?php
                  	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_berita");

					
                  	?>
                    <table class="table table-striped">
                      <tr>
                        <th>ID Berita</th>
                        <th>Pokok Berita</th>
                        <th>Isi Berita</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                      <?php
                      while ($data = mysqli_fetch_array($sql)) {
                      ?>
                      <tr>
                        <td><?php echo $data ['id_berita'] ?></a></td>
                        <td class="font-weight-600"><?php echo $data ['kategori_berita'] ?></td>
                        <td><?php echo $data ['isi_berita'] ?></td>
                        <td><img src="<?= $baseUrl; ?>assets/img/news/<?=$data['gambar'];?>"height="100" width="120"></td>
                        <td>
                          <a href="<?= $baseUrl; ?>pages/berita/form_edit.php?id_berita=<?= $data['id_berita']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= $baseUrl; ?>pages/berita/hapus.php?id_berita=<?= $data['id_berita']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>

                      <?php } ?>

                    </table> 
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