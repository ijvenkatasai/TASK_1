<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
    }
    body {
      
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    
    </style>
  <title>LOGIN</title>
</head>
<body>
    <div class="form-container">
<h2 style="text-align: center;">LOGIN PAGE</h2>
    <form action="sample.php"  method="post" style="text-align: center;">
        <b>USERNAME:</b>
        <input type="text" name="username"><br><br>
        <b>PASSWORD:</b>
        <input type="password" name="password"><br><br>
        <input type="submit" name="signin" value="Submit">
    </form>
    <?php
$username=$_POST["username"];
$password=$_POST["password"];
echo "USERNAME:{$username} <br>";
echo "PASSWORD:{$password}";

?> 
    </div>
    
    
</body>
</html> 
