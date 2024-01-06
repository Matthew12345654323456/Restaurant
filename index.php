<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        <?php include "style.css" ?>
    </style>

</head>
<?php
session_start();
if (isset($_SESSION['username'])) {
    ?>

    <body>
        <div class="wrapper">
            <div class="add-employee">
                <h3>Restaurant</h3>
                <div>
                    <a href="logout.php" class="logout">Logout</a>
                    <a href="add.php" class="add">Add Order</a>
                </div>
            </div>
            <div class="form-table">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Image's</th>
                        <th>Product's Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>

                    </tr>
                    <?php

                    include "config.php";

                    $sql = "select * from restaurant.order";
                    $query = mysqli_query($conn, $sql);
                    $no = 1;






                    foreach ($query as $data) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $data['customer_name'] ?>
                            </td>
                            <td><img width="300" height="168" src="<?php echo $data['image']; ?>" alt=""></td>
                            <td>
                                <?php echo $data['product_name'] ?>
                            </td>
                            <td>
                                <?php echo $data['price'] ?> IDR
                            </td>
                            <td>
                                <?php echo $data['number'] ?>
                            </td>
                            <td>
                                <?php echo $data['total_price'] ?> IDR
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id_order'] ?>" class="edit">Edit</a>
                                <a href="delete.php?id=<?php echo $data['id_order'] ?>" class="delete">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $no += 1;
                    }

} else {

    ?>
                    <a href="login.php"> Login First
                    </a>
                <?php
}
?>
            </table>
        </div>
    </div>
</body>


</html>