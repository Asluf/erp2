<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        label{
            color: white;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="m-2">
        <a href="index.php" class="text-dark btn btn-lg btn-warning btn-outline-danger">Home</a>
    </div>

    <!-- Form -->
    <div class="form-container">
        <h3 class="text-center text-light">Customer Registration Form</h3>
        <form id="customer-form">
            <label for="title">Title:</label>
            <select name="title" id="title">
                <option value="Select">Select</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Dr">Dr</option>
            </select><br><br>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name"><br><br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name"><br><br>
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number"><br><br>
            <label for="district">District:</label>
            <select name="district" id="district">
                <option value="Select">Select</option>
                <?php
                include('./backend/conn.php');
                $sql = "SELECT * FROM district";
                $res = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<option value=" . $row['id'] . ">" . $row['district'] . "</option>";
                }
                ?>

            </select><br><br>
            <div class="text-center">
                <input type="submit" class="btn btn-lg btn-warning" id="btn-submit" value="Register">
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#customer-form").submit(function(e) {
                e.preventDefault();

                var title = $("#title").val();
                var firstName = $("#first_name").val();
                var lastName = $("#last_name").val();
                var contactNumber = $("#contact_number").val();
                var district = $("#district").val();

                if (!title || title === "Select" || !firstName || !lastName || !contactNumber || district === "Select") {
                    Swal.fire("Please fill in all fields.");
                    return;
                }

                // Create data object
                var data = {
                    title: title,
                    first_name: firstName,
                    last_name: lastName,
                    contact_number: contactNumber,
                    district: district
                };

                // Send AJAX request
                $.ajax({
                    type: "POST",
                    url: "./backend/save_customer.php",
                    data: data,
                    success: function(response) {
                        if (response == true) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Customer has been registered",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                position: "top-end",
                                icon: "error",
                                title: "An error occurred",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        // Handle error (e.g., show error message, log, etc.)
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>