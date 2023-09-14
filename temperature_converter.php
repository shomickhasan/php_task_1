<?php

    if( $_SERVER["REQUEST_METHOD"] == "POST"){
        $Celsius_value = $_POST['Celsius_value'];
        $result = temperature_converter($Celsius_value);

    }

    function temperature_converter($value){
       return (($value * 9/5) + 32);
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
                <h5>Temperature Converter</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="enter  Celsius value " class="form-control" name="Celsius_value">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Check">
                    </div>
                </form>
            </div>
            <div class="card-footer">
               <h1 class="text-center"><?php printf('%f',(isset($result))? $result :0)  ?> &deg;F</h1>
            </div>
        </div>
    </div>
</body>
</html>
