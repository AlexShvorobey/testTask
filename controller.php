<?php
use Classes\BookClass;
use Classes\MagazineClass;

var_dump($_SESSION); die();
if ($_POST['type'] == 'Book') {
    $type = 'Book';
    $item = new BookClass();
    $item->setTitle($_POST['title']);
    $item->setNumberOfPages($_POST['number_of_pages']);
    $item->setPrice($_POST['price']);
} elseif ($_POST['type'] == 'Magazine') {
    $type = 'Magazine';
    $item = new MagazineClass();
    $item->setTitle($_POST['title']);
    $item->setNumberOfPages($_POST['number_of_pages']);
    $item->setPrice($_POST['price']);
}
?>

<!DOCTYPE html>

<html lang="">
<head>
    <title>Result</title>
    <meta charset="utf-8">

</head>

<style>

</style>
<body>
Type: <?php echo $type ?> <br>
Title: <?php echo $item->getTitle() ?> <br>
Number of pages:: <?php echo $item->getNumberOfPages() ?> <br>
Price: <?php echo $item->getPrice() ?> <br>
</body>
</html>