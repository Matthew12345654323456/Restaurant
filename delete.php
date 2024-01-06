<?php
include "config.php";


$id = $_GET['id'];


$sql = "delete from restaurant.order where id_order = '$id'";


$query = mysqli_query($conn, $sql);


if ($query) {
    echo "
            <script>
                alert('Delete Employee');
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