<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form action="" method="post">
    Fisrt operand:<input type="number" name="num1"><br>
    Operator: <select name="operator" id="">
        <option value="+" >+</option>
        <option value="-" >-</option>
        <option value="*" >*</option>
        <option value="/" >/</option>
    </select><br>
    Second operand: <input type="number" name="num2"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
}
?>


</body>
</html>
