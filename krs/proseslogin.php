      <?php
      include("koneksi.php");
        $username = $_POST['username'];
        $password = $_POST['password'];

        	    $sql = mysqli_query($koneksi, "select * from tb_login where username = '$username' and password = '$password'");
                $data = mysqli_fetch_array($sql);
                $cek = mysqli_num_rows($sql);
                echo $cek;
                if ($cek==1) {
                    if($data['level']=="admin"){
                        $_SESSION['kode_user']=$data['kode_user'];
                        $_SESSION['level']="admin";
                        header("location:admin/index.php");
                    }else if($data['level']=="mhs"){
                        $_SESSION['kode_user']==$data['kode_user'];
                        $_SESSION['level']="mhs";
                        header("location:indexmhs.php");
                    }elseif ($data['level']=="dosen") {
                        $_SESSION['kode_user']==$data['kode_user'];
                        $_SESSION['level']="dosen";
                        header("location:dosen/index.php");
                    }
                }
                else{
                   // header("Location: loginasli.php");
                }


       ?>
