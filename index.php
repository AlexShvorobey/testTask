<?php
session_start();
$signature = md5(rand(1, 50));
$_SESSION['session_key'] = $signature;
// Why is it here?
?>
<!DOCTYPE html>

<html>
<head>
    <title>Store</title>
    <meta charset="utf-8">

</head>

<style>

</style>
<body>

<form action='controller.php' method="POST">

    Type: <label>
        <select name="type">
            <option value="Book">Book</option>
            <option value="Magazine">Magazine</option>
        </select>
    </label>
    <br>
    <hr>
    Title: <input type="text" name="title">
    <br>
    <hr>
    Number of pages: <input type='text' name='number_of_pages'>
    <br>
    <hr>
    Price: <input type='text' name='price'>
    <br><hr>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
