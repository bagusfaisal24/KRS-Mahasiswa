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
              <form class="form-horizontal" method="post" action="query_mk.php">
                <fieldset>

                  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Kode Mata Kuliah</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="kd_kul" maxlength="30" id="inputNama" placeholder="Kode MK" required="">
      </div>
    </div>
                  <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nama_kul" maxlength="30" id="inputNama" placeholder="Mata Kuliah" required="">
      </div>
    </div>
       <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Semester</label>
      <div class="col-lg-10">
      
  <input type="text" class="form-control"  name="semester" id="semester" required="">
      </div>
   
  </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Jam</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="jam" id="inputJam" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">pengampu</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="pengampu" id="inputJam" required="">
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