<?php  
include_once("db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){


$name =$_POST["Name"];
$phone =$_POST["Phone"];
$password =md5($_POST["Password"]);


   $sql_check = "SELECT * FROM `register` WHERE `name`='$name'";
   $resust_check = mysqli_query($conn,$sql_check);
   $count =mysqli_num_rows($resust_check);
   if($count==0){

    $sql="INSERT INTO `register`(`Sno`, `name`, `phone`, `password`, `status`) VALUES
 (NULL,'$name','$phone','$password','1')";
 $result =mysqli_query($conn ,$sql);
 if($result ==1){
    header("Location: login.php");
 }
}
else {
    echo " user already register";
}
}

?>