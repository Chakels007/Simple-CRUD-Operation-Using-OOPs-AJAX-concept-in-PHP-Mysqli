<?php 
include "db.php";

$deletedata = new DB_con;

$id = $_POST['id'];
// echo $id;

if(isset($_POST['id'])){

    $sql = $deletedata -> delete($id);
    
    if($sql){
        echo "Record Deleted Successfully";
        // echo "<script>window.location.href='view.php'</script>";
    }
    
}
?>