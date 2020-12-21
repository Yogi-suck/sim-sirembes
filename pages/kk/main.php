<?php
include "../../header.php";
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-30">
              <div class="card">
                <div class="card-header">
                  <h4>Data Kartu Keluarga Penduduk</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/kk/form_tambah.php" class="btn btn-danger">Tambah Data KK<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  	<?php
                  	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_kk");

					
                  	?>
                    <table class="table table-striped">
                      <tr>
                        <th>ID KK</th>
                        <th>Nama Lengkap</th>
                        <th>Nomer Induk Kependudukan</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Nama Orang Tua</th>
                        <th>Nomer Dokumen Imigrasi</th>
                        <th>Status Hubungan Keluarga</th>
                        <th>Pekerjaan</th>
                        <th>Status Perkawinan</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Kwarganegaraan</th>
                        <th>Action</th>
                      </tr>
                      <?php
                      while ($data = mysqli_fetch_array($sql)) {
                      ?>
                      <tr>
                        <td><?php echo $data ['id_kk'] ?></a></td>
                        <td class="font-weight-600"><?php echo $data ['nama_lengkap'] ?></td>
                        <td><?php echo $data ['nik'] ?></td>
                        <td><?php echo $data ['jenis_kelamin'] ?></div></td>
                        <td><?php echo $data ['agama'] ?></div></td>
                        <td><?php echo $data ['nama_orang_tua'] ?></div></td>
                        <td><?php echo $data ['ndi'] ?></div></td>
                        <td><?php echo $data ['status_hubungan_keluarga'] ?></div></td>
                        <td><?php echo $data ['pekerjaan'] ?></div></td>
                        <td><?php echo $data ['status_perkawinan'] ?></div></td>
                        <td><?php echo $data ['tgl_lahir'] ?></td>
                        <td><?php echo $data ['pendidikan'] ?></td>
                        <td><?php echo $data ['kwarganegaraan'] ?></td>
                        <td>
                          <a href="<?= $baseUrl; ?>pages/kk/form_edit.php?id_kk=<?= $data['id_kk']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= $baseUrl; ?>pages/kk/hapus.php?id_kk=<?= $data['id_kk']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
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