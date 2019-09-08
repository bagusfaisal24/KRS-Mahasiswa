<?php
  include "../koneksi.php";

   $nim = $_GET['nim'];

   $query = mysqli_query($koneksi, "SELECT * FROM mhs WHERE nim = '$nim'");

   $res = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php 
  include "index.php";
   ?>
</head>
<body>
<div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Form Input Mahasiswa</h1>
            </div>
          </div>
        </div>

          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" method="post" action="updatemhs.php">
                <fieldset>

                  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">NIM</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nim" maxlength="30"placeholder="NIM" value="<?php echo $res['nim']?>" required="" disabled>
      </div>
    </div>
        <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">NAMA</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nama_mhs" maxlength="30" value="<?php echo $res['nama_mhs']?>"placeholder="Nama Lengkap" required="">
      </div>
    </div>
       <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">ALAMAT</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="alamat" value="<?php echo $res['alamat']?>" required="">
      </div>
    </div>
  
  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>

                </fieldset>
              </form>
            </div>
          </div>
          
   
      </div>
</body>
</html>