<?php
    include('connect.php');
    class data_product{
        public function insert_product($name, $number, $pic,$cate,$date,$price,$despro){
            global $conn;
            $insert="insert into product(NamePro, NumberPro, Picture,CategoryPro, DatePro,PricePro,DesPro)
            values('$name','$number','$pic','$cate','$date','$price','$despro')";
            $run=mysqli_query($conn,$insert);
            return $run;

            }
        public function insert_category($name, $description)
        {
            global $conn;
            $insert="insert into category(NameCatye, Description)
            values('$name','$description')";
            $run=mysqli_query($conn,$insert);
            return $run;
        }
        public function select_category(){
            global $conn;
            $sql="Select * from category ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_product(){
            global $conn;
            $select="select * from product";
            $run=mysqli_query($conn,$select);
            return $run;
        }
        public function delete_product($id){
            global $conn;
            $sql="delete from product where ID_product=$id ";//id là số nên k cần nháy
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_product_id($id){
            global $conn;
            $select="select * from product where ID_product=$id ";
            $run=mysqli_query($conn,$select);
            return $run;
        }
        public function update_product($name, $number, $pic,$cate,$date,$price,$despro,$id){
            global $conn;
            $sql="update product set NamePro='$name',NumberPro='$number', Picture='$pic',CategoryPro='$cate', DatePro='$date',PricePro='$price',DesPro='$despro' where ID_product='$id'";
            echo $sql;
            $run=mysqli_query($conn,$sql);
            return $run;

        }
    }
?>
    <?php 
        include('connect.php');
        // chèn trang connect vào bảng giảng đường
        // xây dựng lớp tên là data_giangduong trong đó chứa hàm liên quan
        // dữ liệu giảng đường
        class data_register{
            public function insert_user($tennd,$mk,$tendiachi,$anh,$gioitinh,$sothich,$email)
            {
                global $conn;
                $sql="insert into register(username,password,gender,hobby,avatar,email,address) values('$tennd','$mk','$gioitinh','$sothich','$anh','$email','$tendiachi')";// trong ngoac giang duong la tên trường
                $run=mysqli_query($conn,$sql);
                return $run;
            }
            public function select_user($user){
                global $conn;
                $sql="Select * from register where username= '$user'";
                echo $sql;
                $run=mysqli_query($conn,$sql);
                return $run;
            }
           public function login($user, $pass)
           {
            global $conn;
            $select="select * from register where username='$user'
            and password='$pass'";
            $run=mysqli_query($conn,$select);
                return $run;
           }
        }
          
        ?>
