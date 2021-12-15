<?php
include "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        .center {
              margin: auto;
              width: 50%;
              border: 3px solid #000000;
              padding: 10px;
            }
    </style>
</head>
<body>
    <div class="center mt-5">
    <div class="container" >
        <div class="text-align:center">
            <h2><span style="text-align:center"></span> Employee Register</h2><br><br>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-success" onclick="location.href='view.php'" type="button">View</button>
        </div>
        <div class="col-md-6">
        <form action="" method="" id="formid">
            <div class="form-group">
                <label for=""><h5> Name </h5></label>                
                <input type="text" name="name" id="name" placeholder="Enter your Name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for=""><h5> Email ID </h5></label>
                <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for=""><h5>Phone Number </h5></label>
                <input type="tel" name="number" id="number" placeholder="Enter your Phone Number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for=""><h5>City </h5></label>
                <input type="text" name="city" id="city" placeholder="Enter your City" class="form-control" required>
            </div><br>
            <div class="form-group">
                <button class="btn btn-primary me-md-5" id="button" > Insert </button>
            </div>
        </form>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#button").on("click",function(){
            const name = $("#name").val();
            const email = $("#email").val();
            const number = $("#number").val();
            const city = $("#city").val();
                if(name !="" && email !="" && number !="" && city != ""){
                        $.ajax({
                        url: "insertdb.php",
                        type: "POST",
                        data: $("#formid").serialize(),
                        success: function(d){
                           
                            location.href = "view.php";
                            alert(d);
                        }
                        });
                }else{
                    alert("Please Fill all the Data Required");
                }

            });
        });
    </script>
</body>
</html>


