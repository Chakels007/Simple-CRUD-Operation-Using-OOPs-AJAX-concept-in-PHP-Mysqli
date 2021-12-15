<?php 
include "db.php";

$id = $_POST['id'];

// echo $id;

$record = new DB_con;

$sql = $record->fetchdata($id);

// print_r($sql);
while($row =mysqli_fetch_array($sql))
{
    $name = $row['name'];
    $email = $row['email'];
    $number = $row['number'];
    $city = $row['city'];

    ?>

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .center {
              margin: auto;
              width: 60%;
              border: 3px solid #73AD21;
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
        <div class="col-md-6">
        <form action="editdb.php" method="POST" id="formid">
            <div class="form-group">
                <label for=""><h5> Name </h5></label>                
                <input type="text" name="name" id="name" value="<?php echo $name; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for=""><h5> Email ID </h5></label>
                <input type="email" name="email" id="email" value="<?php echo $email;?>" class="form-control" required> 
            </div>
            <div class="form-group">
                <label for=""><h5>Phone Number </h5></label>
                <input type="tel" name="number" id="number" value="<?php echo $number;?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for=""><h5>City </h5></label>
                <input type="text" name="city" id="city" value="<?php echo $city;?>" class="form-control" required>
            </div><br>
            <div class="form-group">
                <button class="btn btn-primary" name="update"> Update </button>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </div>
        </form>
        </div>
        </div>
        </div>
    </body>




<?php }?>

