<script type="text/javascript">
  function chuyentrang_dangnhap(){
    location.href='../../taikhoan/dangnhap.php';
  }
</script>
<style>
  .bs-example-modal-lg{
    background:url("../../images/hh3-1493052173.jpg") no-repeat;
    background-size: cover;
  }
</style>
<nav class="navbar  navbar-expand-lg navbar-light menu-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
       
      <a class="navbar-brand " href="../../trang_chu.php">Craloy</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <ul class="nav navbar-nav">
      <?php
      if(isset($_SESSION["ten_tv"])){
        include("user_button.php");
    ?>
    <?php   
      }else{
      
    ?>
      <li class="dropdown taikhoan">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown" style="color:#ffff;"><span class="glyphicon glyphicon-user"></span> Tài khoản <span class="caret"></span></a>
            <div class="dropdown-menu log-in">                        
              <div class="row">
              <div class="can-le-2">
              <div class="col-sm-12 text-center">
                <button class="btn btn-info btn-block" style="display: block; " onclick="return chuyentrang_dangnhap();"> Đăng nhập </button>
              <div class="col-sm-12 ">
                <p>Chưa có tài khoản? <a href="../../taikhoan/dangki.php">Đăng ký</a> ngay</p>
              </div>
              
            </div>
            </div>
          </li>
    <?php
      }
    ?>
      
    </ul>
    <div class="collapse navbar-collapse ">
      <ul class="nav navbar-nav">
        <li class="active hidden1"><a href="../../product.php">Giới thiệu sản phẩm </a></li>
        <li class="hidden1"><a href="../../join.php">Join DingTea Family</a></li>
        <li class="hidden1"><a href="../orderdetails.php">Giỏ hàng </a></li>
        <li class="hidden1"><a href="../../contact.php">Liên hệ </a></li>
      </ul></div>
      <ul class="nav navbar-nav navbar-right menu-right">
        <button data-toggle="modal" data-target=".bs-example-modal-lg" style="display: block; "type="button"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
      </ul>
    <!-- /.navbar-collapse -->
  </div>
 
</nav>
<section>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <button data-toggle="modal" data-target=".bs-example-modal-lg" style="display: block; "type="button"><span class="glyphicon glyphicon-remove"></span></button>
                  <div class="can-le">
                            <div class="col-sm-4 col-xs-6">
                            <ul>
                              <li><a href="../../about.php">Thương hiệu</a></li>
                              <li><a href="../../latest_news.php">Tin tức</a></li>
                              <li><a href="../../product.php">Sản phẩm</a></li>
                              <li><a href="../../menu_pro.php">MENU</a></li>
                              <li><a href="../../join.php">JOIN</a></li>
                              <br><br>
                            </ul>
                          </div>
                            <div class="col-sm-4 col-xs-6">
                            <ul>
                              <li><a href="../orderdetails.php">Giỏ hàng </a></li>
                              <li><a href="../../contact.php">Liên hệ</a></li>
                              <li><a href="../../FAQ.php">Câu hỏi</a></li>
                              <br><br>
                            </ul>
                          </div>
                          <div class="col-sm-4 col-xs-12">
                            <br><br>
                              <h4>CONTACT US</h4>
                              <p>01-23456789</p>
                              <hr class="one">
                              <h4>TASTING ROOM</h4>
                              <p>21F-2, No. 88, Sec. 1, Huizhong Rd., Xitun Dist., Taichung City 407, Taiwan (R.O.C.)</p>
                              <hr class="one">
                              <h4>HOURS</h4>
                              <p>Monday - Friday AM8:30-PM5:30</p>
                              <h4>FOLLOW US</h4>
                          </div>
                </div>
               </div> 
                </section>