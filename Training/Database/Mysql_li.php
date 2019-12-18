<?php
// Connect database using MySQLi Procedural library
// Create connection
$conn = mysqli_connect("localhost", "root", "", "student_manager");

// Check connection
if ($conn) {
    echo "Connect success";
} else {
    die("Connect Error" . mysqli_connect_error());
}
$sql = "INSERT INTO students(name,address) VALUE (?,?)";
if (isset($_POST["name"]) && isset($_POST["address"])) {
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $_POST["name"], $_POST["address"]);
    $stmt->execute();
    echo mysqli_insert_id($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="POST">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name..."/>
                </div>
                <div class="form-group">
                    <input type="address" name="address" class="form-control" placeholder="Address..."/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
