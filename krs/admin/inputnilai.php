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
              <h1 id="forms">Form Input Nilai</h1>
            </div>
          </div>
        </div>

          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" method="post" action="query_nilai.php">
                <fieldset>
                  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">NIM</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nim" maxlength="30" id="inputNama" placeholder="NIM" required="">
      </div>
    </div>
     
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Kode MK</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="kd_kul" id="inputMK" placeholder="Kode Mata Kuliah"required="">
      </div>
    </div>
                  
               
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nilai</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="nilai" maxlength="3" id="inputNilai" required="">
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