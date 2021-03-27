      
      <?php
          
         if(isset($_POST['dangnhap'])) 
         {
          if (isset($_POST['maildangnhap'])) {
             $ten_dn = $_POST['maildangnhap'];
           } 
          
          if(isset($_POST['password'])){
            $password = $_POST['password']; 
          }
          if($ten_dn == '' || $password == ''){
            echo "Hãy điền thông tin đầy đủ!";
          } 
          $con = mysqli_connect('localhost', 'root','','trasuacraloy');
         
             $password = md5($_POST['password']);
             $sql = "select * from thanhvien where email='$ten_dn' and mat_khau_tv='$password'";

             $rs = mysqli_query($con, $sql);
             $num = mysqli_num_rows($rs);
            if($num > 0) {
              session_start();
                  $_SESSION['ten_tv'] = $ten_dn;
                  header('Location:../trang_chu.php');
             }
                else {
                  header('Location:dangnhap.php');
                }
            
              
         }
         
?>
        



