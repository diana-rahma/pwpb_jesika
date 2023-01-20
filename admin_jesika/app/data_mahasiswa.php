 
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Ikan</th>
                    <th>spesifikasi</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_ikan");
                    while($mhs = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5'><?php echo $no; ?></td>
                    <td><?php echo $mhs['nama_ikan']; ?> </td>
                    <td><?php echo $mhs['spesifikasi']; ?></td>
                    <td><?php echo $mhs['deskripsi']; ?></td>
                    <td><?php echo $mhs['foto']; ?></td>
                    <td>..</td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

