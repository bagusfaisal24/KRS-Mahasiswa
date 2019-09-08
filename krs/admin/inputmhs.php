<!DOCTYPE html>
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
              <h1 id="forms">Form Input Mahasiswa</h1>
            </div>
          </div>
        </div>

          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" method="post" action="querymhs.php">
                <fieldset>

                  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">NIM</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nim" maxlength="30" id="inputNama" placeholder="NIM" required="">
      </div>
    </div>
        <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">NAMA</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nama_mhs" maxlength="30" id="inputNama" placeholder="Nama Lengkap" required="">
      </div>
    </div>
  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Alamat</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="alamat" id="inputNama" placeholder="Alamat Lengkap" required="">
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