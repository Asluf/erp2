<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-dark">
    <div class="m-2">
        <a href="index.php" class="text-dark btn btn-lg btn-warning btn-outline-danger">Home</a>
    </div>
    <!-- Table -->
    <div class="container mt-5">
        <table class="table table-dark"  border="25">
            <tr class="table-warning">
                <th colspan="7" class="text-center">
                    <h3>CUSTOMER DETAILS</h3>
                </th>
            </tr>
            <tr class="table-dark">
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact Number</th>
                <th>District</th>
            </tr>

            <?php
            include('./backend/conn.php');
            $sql = "SELECT * FROM customer";
            $res = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr class='table-dark'> 
                        <td class='table-dark'>" . $row['title'] . "</td>
                        <td class='table-dark'>" . $row['first_name'] . "</td>
                        <td class='table-dark'>" . $row['last_name'] . "</td>
                        <td class='table-dark'>" . $row['contact_no'] . "</td>
                        <td class='table-dark'>" . $row['district'] . "</td>
                    
                    </tr>";
            }
            ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>