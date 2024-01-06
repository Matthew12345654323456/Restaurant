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


<body>
    <div class="wrapper">
        <div class="add-employee">
            <h3>Edit Employee</h3>
        </div>
        <div class="form-table">
            <form action="edit_employee.php" method="post"  enctype = "multipart/form-data">
                <div class="employee"> 
                    <?php
                    include "config.php";
                    $id = $_GET['id'];


                    $sql = "select * from restaurant.order where id_order = '$id'";
                    $query = mysqli_query($conn, $sql);


                    foreach ($query as $data) {
                    ?>
                        <input type="text" value="<?php echo $id ?>" name="id" hidden>
                        <div>
                            <label for="customer_name">Name :</label>
                            <input type="text" value="<?php echo $data['customer_name'] ?>" name="customer_name">
                        </div>
                        <div>
                            <label for="product_name">Product :</label>
                            <input type="text" value="<?php echo $data['product_name'] ?>" name="product_name">
                        </div>
                        <div>
                            <label for="date">Date :</label>
                            <input type="date" value="<?php echo $data['date'] ?>" name="date">
                        </div>
                        <div>
                            <label for="quantity">Quantity :</label>
                            <input type="text" value="<?php echo $data['number'] ?>" name="quantity">
                        </div>
                        <div>
                            <label for="price">Price :</label>
                            <input type="text" value="<?php echo $data['price'] ?>" name="price">
                        </div>
                        <div>
                            <label for="total_price">Total Price :</label>
                            <input type="text" value="<?php echo $data['total_price'] ?>" name="total_price">
                        </div>
                        <div>
                            <label for="image">Image :</label>
                            <input type="file" value="<?php echo $data['image'] ?>" name="image">
                        </div>
                        <div>
                            <div>
                                <input type="submit" value="Submit">
                                <a href="index.php">View Table</a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>


</html> 