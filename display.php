<!-- Include PHP Connection -->
<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>RADIAN Consumables</title>
</head>

<body>
    <div class="container">
        <!-- Add Products Button -->
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add Product</a></button>

        <!-- Table of Products -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Radian Code</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Order Code</th>
                    <th scope="col">Description</th>
                    <th scope="col">Selling Price</th>
                    <th scope="col">UOM</th>
                    <th scope="col">Category</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP to fetch all data from Conaumables -->
                <?Php
                $sql = "SELECT * FROM `consumables`";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Read all fields from the database and assign variable names
                        $id = $row['id'];
                        $code = $row['Code'];
                        $supplier = $row['supplier'];
                        $order_code = $row['order_code'];
                        $description = $row['description'];
                        $sell_price = $row['sell_price'];
                        $uom = $row['uom'];
                        $category = $row['category'];
                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $code . '</td>
                    <td>' . $supplier . '</td>
                    <td>' . $order_code . '</td>
                    <td>' . $description . '</td>
                    <td>' . $sell_price . '</td>
                    <td>' . $uom . '</td>
                    <td>' . $category . '</td>
                    <td>
                    <button class="btn btn-primary m-1"><a href="" class="text-light">Update</a></button>
                    <button class="btn btn-danger m-1"><a href="" class="text-light">Delete</a></button>
                    </td>
                    </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>