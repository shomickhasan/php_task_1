<?php
if( $_SERVER["REQUEST_METHOD"] == "POST"){
    $mark = $_POST['mark'];
    $result = grade_calculator($mark);

}

    function grade_calculator($mark){
    //(A, B, C, D, F)
        if($mark>=90){
            return "A";
        }
        else if($mark>=80 && $mark< 90){
            return "B";
        }
        else if($mark>=70 && $mark< 80){
            return "C";
        }
        else if($mark>=60 && $mark< 70){
            return "D";
        }
        else {
            return "F";
        }
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
            <h5 class="text-center">Grade Calculator</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <input type="enter  Celsius value " class="form-control" name="mark">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Check">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <h1 class="text-center"><?php echo isset($result)? $result :'' ?></h1>
        </div>
    </div>
</div>
</body>
</html>

