<?php

// Connect database using PDO (PHP Data Objects) libary
// Create connect
try {
    $conn = new PDO("mysql:host=localhost;dbname=student_manager", "root", "");
    // Setting mode error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect Runing...";
} catch (PDOException $e) {
    echo "Connnect error" . $e->getMessage();
}
$sql = "INSERT INTO students(name,address) VALUE (:name,:address)";
if (isset($_POST["name"]) && isset($_POST["address"])) {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST["name"]);
    $stmt->bindParam(':address', $_POST["address"]);
    $result = $stmt->execute();
    echo $result;
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
