<?php

$servername = "localhost";
$username = "root";
$password = "Ritesh@mysql@2402";
$database = "project_dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$employ_id = "";

if (isset($_POST['employ_id'])){
    $employ_id = $_POST["employ_id"];
}

$sql_1 = "delete from employees where emp_id = ".$employ_id;
// $sql_1 = "delete from department where emp_id = ".$employ_id;

if ($conn->query($sql_1) == TRUE ) {
    echo '
    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Peculiars</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="#">The Peculiars</a>
    </nav>
    <div class="bg-opacity">
        <div class="content">
            <div class="row d-flex h-100">
                <div class="align-self-center text-light mx-auto">
                <h2>Record Deleted Sucessfully.</h2>
                of Employee ID : '.$employ_id.'<br>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark fixed-bottom align-self-center justify-content-center">
        <a class="btn-floating btn-lg btn-email" type="button" role="button"><i class="fas fa-envelope-open-text white"></i></a>
        <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-square white"></i></a>
        <a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin white"></i></a>
        <a class="btn-floating btn-lg btn-whatsapp" type="button" role="button"><i class="fab fa-whatsapp white"></i></a>
    </nav>
</body>

</html>
    ';
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
    echo "Error: " . $sql_2 . "<br>" . $conn->error; 
}

$conn->close();

?>