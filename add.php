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
            <h3>Add Order</h3>
        </div>  
        <div class="form-table">
            <form action="prosesadd.php" method="post" enctype = "multipart/form-data">
                <div class="employee">
                    <div>
                        <label for="name">Name :</label>
                        <input type="text" placeholder="Enter Name" name="name" required>
                    </div>
                    <div>
                        <label for="product">Product Name :</label>
                        <input type="text" placeholder="Enter Product Name" name="product" required>
                    </div>
                    <div>
                        <label for="date">Date :</label>
                        <input type="date" name="date" required>
                    </div>
                    <div>
                        <label for="quantity">Quantity :</label>
                        <input type="number" placeholder="Enter Quantity" name="quantity" required>
                    </div>
                    <div>
                        <label for="price">Price :</label>
                        <input type="number" placeholder="Enter Price" name="price" required>
                    </div>
                    <div>
                        <label for="total_price">Total Price :</label>
                        <input type="number" placeholder="Enter Total Price" name="total_price" required>
                    </div>
                   
                    <div>
                        <label for="image">Image :</label>
                        <input type="file"  name="image"  required>
                    </div>
                    <div>

                        <div>
                            <input type="submit" value="Submit">
                            <a href="index.php">View Table</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>


</html>