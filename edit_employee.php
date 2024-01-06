<?php
session_start();
include "config.php";


$id = $_POST['id'];
$name = $_POST['customer_name'];
$product = $_POST['product_name'];
$date = $_POST['date'];
$number = $_POST['quantity'];
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

$sql = "update restaurant.order set customer_name = '$name', product_name = '$product', date = '$date', number = '$number', price = $price, total_price = $total_price, image = '$upload_image' where id_order = '$id' ";


$query = mysqli_query($conn, $sql);


if ($query) {
    echo "
            <script>
                alert('Edit Employee');
                location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Failed');
                location.href = 'index.php';
            </script>
        ";
} 

}
else{
        echo "
            <script>
                alert('Failed');
                location.href = 'index.php';
            </script>
        ";
}
