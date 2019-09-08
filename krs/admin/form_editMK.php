<?php
  include "../koneksi.php";

   $kd_kul = $_GET['kd_kul'];

   $query = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE kd_kul = '$kd_kul'");

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
              <h1 id="forms">Form Input Mata Kuliah</h1>
            </div>
          </div>
        </div>

          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" method="post" action="update_mk.php">
                <fieldset>

                  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Kode Mata Kuliah</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="kd_kul" maxlength="50" id="inputNama" value="<?php echo $res['kd_kul']?>" required="">
      </div>
    </div>
                  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nama_kul" maxlength="50" id="inputNama" value="<?php echo $res['nama_kul']?>" required="">
      </div>
    </div>
       <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Semester</label>
      <div class="col-lg-10">
      
  <input type="text" class="form-control"  name="semester" id="semester" value="<?php echo $res['semester'] ?>" required="">
      </div>
   
  </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Jam</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="jam" id="inputJam" value="<?php echo $res['jam']?>" required="">
      </div>
    </div>
                  
               
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Pengampu</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="pengampu"  value="<?php echo $res['pengampu']?>"id="inputPengampu" required="">
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