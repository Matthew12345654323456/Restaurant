<?php
session_start();
require "config.php";

$name = $_POST['name'];
$product = $_POST['product'];
$date = $_POST['date'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total_price = $_POST['total_price'];

$image = $_FILES['image'];
$imagefilename = $image['name'];
$imagefiletmp = $image['tmp_name'];
$filename_separate = explode('.', $imagefilename);
$file_extension = strtolower(end($filename_separate));
$extension = array('jpeg', 'jpg', 'png');
if (in_array($file_extension, $extension)) {
    $upload_image = 'image/' . $imagefilename;
    move_uploaded_file($imagefiletmp, $upload_image);

    $sql = "insert into restaurant.order values('', '$name', '$product', '$date', '$quantity', '$price', '$total_price', '$upload_image')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>
            alert ('Order berhasil');
            location.href='index.php';
            </script>";
    } else {
        echo "<script>
            alert ('Order gagal');
            location.href='neworder.php';
            </script>";
    }
}




?>