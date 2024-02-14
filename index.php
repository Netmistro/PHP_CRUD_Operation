<?php
// Database Connection
include 'connect.php';
// On Sumbit of Form
if (isset($_POST['submit'])) {
    $ProductCode = $_POST['ProductCode'];
    $Supplier = $_POST['Supplier'];
    $OrderCode = $_POST['OrderCode'];
    $Description = $_POST['Description'];
    $SellPrice = $_POST['SellPrice'];
    $UOM = $_POST['UOM'];
    $Category = $_POST['Category'];

    $sql = "INSERT INTO `consumables`(code, supplier, order_code, description, sell_price, UOM, category) VALUES ('$ProductCode', '$Supplier', '$OrderCode', '$Description','$SellPrice','$UOM','$Category')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data Inserted Successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>RADIAN Consumable Inventory</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <!-- Product Code -->
            <div class="mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" class="form-control" placeholder="Product Code" name="ProductCode" autocomplete="off">
            </div>
            <!-- Supplier -->
            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <input type="text" class="form-control" placeholder="Supplier" name="Supplier">
            </div>
            <!-- Order Code -->
            <div class="mb-3">
                <label class="form-label">Order Code</label>
                <input type="text" class="form-control" placeholder="Order Code" name="OrderCode" autocomplete="off">
            </div>
            <!-- Description of Product -->
            <div class="mb-3">
                <label class="form-label">Product Description</label>
                <input type="text" class="form-control" placeholder="Product Description" name="Description" autocomplete="off">
            </div>
            <!-- Selling Price -->
            <div class="mb-3">
                <label class="form-label">Selling Price</label>
                <input type="text" class="form-control" placeholder="Sell Price" name="SellPrice" autocomplete="off">
            </div>
            <!-- Unit of Measure -->
            <div class="mb-3">
                <label class="form-label">UOM</label>
                <input type="text" class="form-control" placeholder="Unit of Measure" name="UOM">
            </div>
            <!-- Category -->
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" placeholder="Product Category" name="Category">
            </div>
            <!-- Button -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>