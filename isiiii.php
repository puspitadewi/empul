<?php
require 'func.php';
$result = mysqli_query($conn, "SELECT * FROM datab");

if (isset($_POST["submit"])) {
  if (data($_POST) > 0) {
    echo "<script>
  alert('data baru ditambahkan');
  </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>

<?php include('templates/hmain.php') ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="container h-100 pt-5">
            <div class="row align-itemes-center h-100 align-middle">
              <div class="col-6 mx-auto">
                <div class="jumbotron">
                  <div class="card" style="width: 18rem;">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">alamat</th>
                          <th scope="col">No. Hp</th>
                          <th scope="col">harga/kg </th>
                        </tr>
                      </thead>
                      <tbody>
                        <center>
                          <h4>Daftar Orang</h4>
                          <br>
                        </center>
                        <?php $i = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                            <th scope="row"><?= $i;  ?></th>
                            <td><?= $row["alamat"];  ?></td>
                            <td><?= $row["hp"];  ?></td>
                            <td><?= $row["bobot"] * 3000;  ?>/(<?= $row["bobot"];  ?>)</td>
                          </tr>
                          <?php $i++; ?>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="container h-100 pt-5">
            <div class="row align-itemes-center h-100 align-middle">
              <div class="col-6 mx-auto">
                <div class="jumbotron">
                  <center>
                    <h3>Input data</h3>
                  </center>

                  <form action="" method="post">
                    <div class="form-group">
                      <label for="">alamat</label>
                      <input autocomplete="off" autofocus="on" type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">No Hp</label>
                      <input autocomplete="off" autofocus="on" type="text" name="hp" id="hp" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">bobot(min 0,5 kg)</label>
                    <input autocomplete="off" autofocus="on" type="text" name="bobot" id="bobot" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Jenis Barang</label>
                      <select name="Jenis Barang" class="form-control" >
                        <option value="">- Pilih</option>
                        <option value="">Plastik</option>
                        <option value="">Kaleng/Logam</option>
                        <option value="">Kertas</option>
                        <option value="">Kain Sisa</option>
                    </select>
                    </div>
                       
                    <button type="submit" name="submit" class="btn btn-warning btn-block">Submit</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include('templates/fmain.php') ?>