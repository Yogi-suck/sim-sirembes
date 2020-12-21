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
                  <h4>Data Penduduk</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/penduduk/form_tambah.php" class="btn btn-danger">Tambah Data Penduduk <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  	<?php
                  	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_penduduk");

					
                  	?>
                    <table class="table table-striped">
                      <tr>
                        <th>ID Penduduk</th>
                        <th>Nama Penduduk</th>
                        <th>Alamat Penduduk</th>
                        <th>Nomer hp</th>
                        <th>Action</th>
                      </tr>
                      <?php
                      while ($data = mysqli_fetch_array($sql)) {
                      ?>
                      <tr>
                        <td><?php echo $data ['id_penduduk'] ?></a></td>
                        <td class="font-weight-600"><?php echo $data ['nama_penduduk'] ?></td>
                        <td><?php echo $data ['alamat_penduduk'] ?></td>
                        <td><div class="badge badge-warning"><?php echo $data ['nomer_hp'] ?></div></td>
                        <td>
                          <a href="<?= $baseUrl; ?>pages/penduduk/form_edit.php?id_penduduk=<?= $data['id_penduduk']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= $baseUrl; ?>pages/penduduk/hapus.php?id_penduduk=<?= $data['id_penduduk']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
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