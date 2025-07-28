<?php
include_once("db.php");
$name =$_POST["Name"];
$password =md5($_POST["Password"]);
  $sql = "SELECT * FROM `register` WHERE `name`= '$name'";
  $result =mysqli_query($conn ,$sql);
  $count_res =mysqli_num_rows($result);

  if($count_res==1){
    
 $sqli ="SELECT * FROM `register` WHERE `name`='$name' AND `password` ='$password'";
$resul_check= mysqli_query($conn,$sqli);
   $count =mysqli_num_rows($resul_check);
   if($count==1){
    $_SESSION["Name"] =$name;
    $_SESSION["user"]="active";
    header("Location: index.php");
   }
   else{
    echo "password incorrect";
   }
  
}
else{
    echo "user do'nt exist";
}




?>