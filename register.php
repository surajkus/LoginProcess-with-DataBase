<?php
include_once("db.php");
if(isset($_SESSION["user"])){
   header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
  *{
    margin: 0;
  }
  body{
    width: 100%;
    background-color: #a19a9aff;
  }
 
  .register{
    background-color:#13203B;
    width: 30%;
    height:60vh;
    border-radius: 20px;
    
  }

  form{
    margin: 40px;
    padding-top : 90px;
  }
  
  .text{
    width: 16vw;
    padding-left:8px;
    height: 4vh;
    font-size:18px;
    border-radius :6px;
    position: relative;
    top:20px;
    
  }
  h1{
    color: white;
    font-family:self;
    font-size:5vh;
       
    
  }
  button{
    border-radius: 6px;
    width: 10vw;
    height: 4vh;
    background-color: green;
    color: white;
    font-style: bold;
  }
  ::placeholder{
    font-size:14px;
  }
  strong{
    color: white;
  }
  strong a{
    font-family:self;
    color: blue;
  }
  </style>


<body>
  <center>
    <form action  ="register_checker.php" class ="register"  method ="post">
      <h1>Register Page</h1><br>
      <input  type="text"  required placeholder ="Name" class ="text" name="Name"><br><br><br>
      <input type="Number"  required placeholder ="Phone" class ="text"  name="Phone"><br><br><br>
      <input type="Password"  required placeholder ="Password"  class ="text"  name="Password"><br><br><br><br>
      <button>Register
        </button><br><br>
        <strong style> Already have on account? <a href="login.php">Login </a> </strong> <br>
      </form>
    </center>
</body>
</html>