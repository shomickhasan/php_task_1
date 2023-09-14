<?php

if( $_SERVER["REQUEST_METHOD"] == "POST"){
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $result = ($number1 > $number2) ? $number1 : $number2;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Module 1 Assignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="m-0 auto">
<div class="col-md-6 offset-3">


    <div class="card mt-5">
        <div class="card-header">
            <h5 class="text-center">Comparison Tool</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <input placeholder="Enter First Number" type= "number" class="form-control" name="number1"> </br>
                    <input placeholder="Enter Second Number" type= "number" class="form-control" name="number2">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Check">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <h1 class="text-center">
                <?php 
                if(!empty($result)){
                echo "The larger number is: " . $result;
            }
                ?>
            </h1>
        </div>
    </div>
</div>
</body>
</html>
