<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="webPHP";
    $conn=mysqli_connect($server,$user,$pass,$database);
    mysqli_query($conn,'set names"utf8"');
    
    
    ?>
 </body>
 </html>