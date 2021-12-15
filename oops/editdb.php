<?php 
include "db.php";

$insertdata = new DB_con;

if(isset($_POST['update'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $city = $_POST['city'];
    $id = $_POST['id'];
    
    $sql = $insertdata->update($name,$email,$number,$city,$id);
    if($sql){
        echo '<script>alert("Record Updated Successfully")</script>';
        echo '<script>window.location.href="view.php"</script>';
    }
}


?>