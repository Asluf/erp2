<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
        a {
            min-width: 250px;
            margin-right: 30px;
        }

        @media only screen and (max-width: 800px) {
            a {
                margin-top: 10px;

            }
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Welcome to the ERP System</h1>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-light">Please select an option from the menu</h2>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="btn btn-lg btn-primary" href="customer_list.php">Customer List</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-lg btn-primary" href="customer_form.php">Add Customer </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="btn btn-lg btn-warning" href="item_list.php">Item List</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-lg btn-warning" href="item_form.php">Add Item </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="btn btn-lg btn-secondary" href="invoice_report.php">Invoice Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-lg btn-secondary" href="item_report.php">Item Report</a>
                    </li>

                </ul>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>