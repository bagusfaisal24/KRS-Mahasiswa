<?php 
include "../koneksi.php";
      $nim=@$_GET['nim'];
      $sql =$koneksi->query("SELECT * from nilai where nim='$nim'");
      $x =$sql->fetch_row();
 ?>
<html>
<head>
  <?php 
  include "index.php";
   ?>
</head>
<body>
<div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Form Input Nilai</h1>
            </div>
          </div>
        </div>

          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" method="post" action="update_nilaidos.php">
                <fieldset>
                  <div class="form-group">
      <label class="col-lg-2 control-label">NIM</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nim" value="<?php echo $x[0] ?>" disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Kode MK</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="kode_kul" value="<?php echo $x[1] ?>" disabled>
      </div>
    </div>
                  
               
    <div class="form-group">
      <label class="col-lg-2 control-label">Nilai</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="nilai" value="<?php echo $x[2] ?>">
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