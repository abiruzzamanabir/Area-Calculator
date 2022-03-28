<?php
include_once "./function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Area Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-5">
                    <div class="form-container">
                        <div class="form-icon"><i class="fa fa-area-chart"></i></div>
                        <h3 class="title">Area Calculator</h3>
                        <form action="" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label>Area of</label>
                                <select class="form-select currency mt-3" name="type" aria-label="Default select example">
                                    <option selected>Select Your Currency</option>
                                    <option value="reactangle">Reactangle</option>
                                    <option value="square">Square</option>
                                    <option value="triangle">Triangle</option>
                                    <option value="circle">Circle</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Width</label>
                                <input class="form-control mt-3" type="number" name="width" placeholder="Enter Width">
                            </div>
                            <div class="form-group">
                                <label>Height</label>
                                <input class="form-control mt-3" type="number" name="height" placeholder="Enter Height">
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Calculate</button>
                            <div class="mt-5 text-center">
                                <?php

                                if (isset($_POST['submit'])) {
                                    $type = $_POST['type'];
                                    $width = $_POST['width'];
                                    $height = $_POST['height'];

                                    if ($type == 'reactangle') {
                                        if (empty($width) || empty($height)) {
                                            echo "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                        else {
                                            $area=getArea($type, $width, $height);
                                            echo "<p class=\"alert alert-success d-flex justify-content-between\"> {$area} <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                    }else if ($type == 'square') {
                                        if (empty($width)){
                                            echo "<p class=\"alert alert-danger d-flex justify-content-between\">First Field is Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                        else {
                                            $area=getArea($type, $width, $height);
                                            echo "<p class=\"alert alert-success d-flex justify-content-between\"> {$area} <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                    }
                                    else if ($type == 'triangle') {
                                        if (empty($width) || empty($height)){
                                            echo "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                        else {
                                            $area=getArea($type, $width, $height);
                                            echo "<p class=\"alert alert-success d-flex justify-content-between\"> {$area} <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                    }
                                    else if ($type == 'circle') {
                                        if (empty($width)){
                                            echo "<p class=\"alert alert-danger d-flex justify-content-between\">First Field is Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                        else {
                                            $area=getArea($type, $width, $height);
                                            echo "<p class=\"alert alert-success d-flex justify-content-between\"> {$area} <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                    }else{
                                        echo "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                    }
                            }



                                ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>