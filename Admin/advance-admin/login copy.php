<?php
    session_start();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" method="POST">
                                    <hr />
                                    <h5>Web PHP 521</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="txtuser" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="txtpass" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a> 
                                            </span>
                                        </div>
                                        <button type="submit" name="txtsub" class="btn btn-primary " >Login Now</button>
                                     
                                     <!-- /*<a href="index.html" class="btn btn-primary "></a> -->
                                    <hr />
                                    Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
                                    </form>
                                    <?php
                                      include('control.php');
                                      $get_data=new data_register();
                                      $login=$get_data->login($_POST['txtuser'],$_POST['txtpass']);
                                      if(isset($_POST['txtsub'])){
                                        // kiểm tra nút đăng ký đã ấn hay chưa
                                       if(empty($_POST['txtuser'])||empty($_POST['txtpass']) )
                                       echo "<script> alert('Ban chua nhap du du lieu')</script>";
                                    else
                                        {
                                            //Dem so ban ghi thoa man dieu kien
                                            if(mysqli_num_rows($login)==1){
                                                $_SESSION['user']=$_POST['txtuser'];
                                                echo"<script> alert('Thanh cong')
                                                
                                                </script>";
                                             }
                                            else echo"<script>  alert('Khong thuc thi duoc')</script>";
                                        }
                                          
                                      }
                                    
                                    
                                    ?>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
