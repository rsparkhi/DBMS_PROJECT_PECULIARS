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

$search_value=$_GET["search"];

$sql="select * from employees where emp_id like '".$search_value."'";

$res=$conn->query($sql);

while($row=$res->fetch_assoc()){
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    </head>
    
    <body>
        <div>
            <nav class="navbar fixed-top navbar-dark bg-dark justify-content-center">
                <a class="navbar-brand" href="#">The Peculiars</a>
            </nav>
        </div>
        <div class="p-5 bg-opacity">
            <div class="p-5 content">
                <div class="row d-flex h-100">
                    <div class="col-sm-6 text-align-center align-self-center justify-content-center text-white mx-auto">
                        Name: '.$row["emp_name"].'
                    </div>
                    <div class="col-sm-6 text-align-center align-self-center text-white mx-auto">
                        Email: '.$row["emp_email"].'
                    </div>
                    <div class="col-sm-6 text-align-center align-self-center text-white mx-auto">
                        Employee ID: '.$row["emp_id"].'
                    </div>
                    <div class="col-sm-6 text-align-center align-self-center text-white mx-auto">
                        Employee Mobile Number: '.$row["emp_mobile"].'
                    </div>
                    <div class="col-sm-6 text-align-center align-self-center text-white mx-auto">
                        Post: '.$row["post"].'
                    </div>
                    <div class="col-sm-6 text-align-center align-self-center text-white mx-auto">
                        Date of Joining: '.$row["hire_date"].'
                    </div>
                    <div class="col-sm-6 text-align-center align-self-center text-white mx-auto">
                        Salary: '.$row["salary"].'
                    </div>
                    <div class="col-sm-6 text-align-center align-self-center text-white mx-auto">
                        Department ID: '.$row["dept_id"].'
                    </div>
                </div>
            </div>
        </div>
        </div>
        <nav class="navbar navbar-dark bg-dark fixed-bottom justify-content-center">
            <a class="btn-floating btn-lg btn-email" type="button" role="button"><i
                    class="fas fa-envelope-open-text white"></i></a>
            <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i
                    class="fab fa-facebook-square white"></i></a>
            <a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin white"></i></a>
            <a class="btn-floating btn-lg btn-whatsapp" type="button" role="button"><i
                    class="fab fa-whatsapp white"></i></a>
        </nav>
    </body>
    
    </html>
    ';
}       
?>