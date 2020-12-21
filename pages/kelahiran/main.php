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
                  <h4>Data Kelahiran</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/kelahiran/form_tambah.php" class="btn btn-danger">Tambah Data Kelahiran<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  	<?php
                  	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_kelahiran");

					
                  	?>
                    <table class="table table-striped">
                      <tr>
                        <th>ID Kelahiran</th>
                        <th>Nama Penduduk</th>
                        <th>Tanggal Lahir</th>
                        <th>Action</th>
                      </tr>
                      <?php
                      while ($data = mysqli_fetch_array($sql)) {
                      ?>
                      <tr>
                        <td><?php echo $data ['id_kelahiran'] ?></a></td>
                        <td class="font-weight-600"><?php echo $data ['nama_penduduk'] ?></td>
                        <td><?php echo $data ['tgl_lahir'] ?></td>
                        <td>
                          <a href="<?= $baseUrl; ?>pages/kelahiran/form_edit.php?id_kelahiran=<?= $data['id_kelahiran']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= $baseUrl; ?>pages/kelahiran/hapus.php?id_kelahiran=<?= $data['id_kelahiran']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
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