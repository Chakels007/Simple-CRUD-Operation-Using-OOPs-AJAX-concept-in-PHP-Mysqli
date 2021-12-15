<?php 
    include "db.php";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
</head>
<body>

    <div class="container border border-dark mt-4">
    
    <table class="table table-hover mt-8">
    <thead>
        <div class="mt-4" style="text-align: center;">
            <h3> Employee Details</h3>            
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" onclick="window.location='insert.php';" type="button">Add User</button>
        </div>
        <tr>
        <!-- <th scope="col">ID</th> -->
          <th scope="col">Name</th>
          <th scope="col">Email ID</th>
          <th scope="col">Phone Number</th>
          <th scope="col">City</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
  </thead>
  <tbody>
                <?php 
                    $fetchdata = new DB_con;
                    $sql = $fetchdata->selectdata();
	        		while($row=mysqli_fetch_array($sql))
		        		{
		        			echo"<tr>";
                            // echo"<td>" . $row["id"] . "</td>";
		        			echo"<td>" . $row["name"] . "</td>";
		        			echo"<td>" . $row["email"] . "</td>";
		        			echo"<td>" . $row["number"] . "</td>";
                            echo"<td>" . $row["city"] . "</td>"; ?>
		        			<td><button type='button' class='btn btn-sm btn-info edit' data-id="<?php echo $row['id']; ?>">Edit</td>
		        			<td><button type='button' class='btn btn-sm btn-danger del' data-id="<?php echo $row['id']; ?>">Delete</td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		        			</tr>
                            
		        <?php }?> 
		        	
		        
  </tbody>
 </table>
 </div> 
        <div id="response">
            <p></p>
        </div>
</body>
<script>
    $(document).on("click",".del",function(){
        
        const row = $(this);
        const id = $(this).attr("data-id");
        $.ajax({
            url: "delete.php",
            type: "POST",
            data: {id: id},
            success : function(response){
                alert(response);
                del.closest("tr").hide();
                
                

            }
        })
    });
</script>

<script>
    $(document).on("click",".edit", function(){
        alert("Do you wanna edit?");
        const row = $(this);
        const id = $(this).attr("data-id");
        $("#id").val(id);

        var name = row.closest("tr").find("td:eq(0)").text();
        $("#name").val(name);
        
        var email = row.closest("tr").find("td:eq(1)").text();
        $("#email").val(email);
        
        var number = row.closest("tr").find("td:eq(2)").text();
        $("#number").val(number);
        
        var city = row.closest("tr").find("td:eq(3)").text();
        $("#city").val(city);
        // alert(city);

        $.ajax({
            url: "edit.php",
            type: "POST",
            data: {id:id, name:name, number:number, city:city},
            success : function(resp){
                $("#response").html(resp);
                // window.location.href = "edit.php";
            }
        })

    });
</script>
</html>      