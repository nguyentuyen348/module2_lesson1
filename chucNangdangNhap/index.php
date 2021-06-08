<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<form action="" method="post">
    <div class="login">
        <h2>Login</h2>
        <label>
            Username:
            <input type="text" name="username" size="30"
            placeholder="username">
        </label>
        <br>
        <label>
            Password:
            <input type="password" name="password" size="30"
            placeholder="password">
        </label>
        <input type="submit" value="Sign in">
    </div>
</form>

<?php
if ($_SERVER["REQUET_METHOD"]=="POST"){
    $username= $_REQUEST["username"];
    $password= $_REQUEST["password"];

    if ($username==="admin"&&$password==="admin"){
        echo "<h3>Welcome<span style='color: #CD214F'>".$username."</span> 
     to website </h3> ";
    }else{
        echo "<h3><span style='color: #CD214F'>Login Error</span></h3>";
    }
}
?>

</body>
</html>
