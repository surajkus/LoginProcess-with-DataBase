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
   .logins{
    background-color:#13203B;
    width: 30%;
    height:60vh;
    border-radius: 20px;
    
  }
    h1{
    color: white;
    font-family:self;
    margin-top: 30px ;
     font-size:5vh;
    
  }
  form{
    margin: 50px;
    padding-top : 45px;
  }
  
  .texts{
    width: 16vw;
    padding-left:8px;
    height: 4vh;
    font-size:18px;
    border-radius :6px
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
        <form action="login_checker.php" class ="logins" method="post">
            <h1> Login Page</h1><br><br><br>
            <input type="text"  required placeholder ="Name" class ="texts" name ="Name"><br><br><br>
            <input type="password"  required  placeholder ="password" class ="texts"  name ="Password"><br><br><br>
            <button> login</button><br><br>
            <strong style> Already have on account? <a href="register.php">Register </a> </strong><br>
        </form>
    </center>
</body>
</html>