<?php
include "db.php";

$insertdb = new DB_con();

$name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $city = $_POST['city'];

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['city'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $city = $_POST['city'];



        $insertdata = $insertdb->insert($name,$email,$number,$city);
        if($insertdata){
            echo "Record inserted successfully";
            // echo "window.location.href='view.php'";
        }else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }



    }




?>