<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css rel="stylesheet" type="text/css">
<link href=https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css rel="stylesheet" type="text/css">
</head>
<body>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Zip</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
                <?php
                 $read_query="SELECT * FROM `crud`";
                $run_read_query= mysqli_query($conn,$read_query);
                //$fetch_query=mysqli_fetch_assoc($run_read_query);
                $count= 1;
                 while($fetch_query=mysqli_fetch_assoc($run_read_query))
                 { 
                    ?>
                <tr>
                  
                    <td><?php echo $count;?></td>
                    <td><?php echo $fetch_query['name'];?></td>
                    <td><?php echo $fetch_query['email'];?></td>
                    <td><?php echo $fetch_query['address'];?></td>
                    <td><?php echo $fetch_query['phonenumber'];?></td>
                    <td><?php echo $fetch_query['city'];?></td>
                    <td><?php echo $fetch_query['zip'];?></td>
                    <td><a href="update.php?id=<?php echo $fetch_query['id'];?>" class="btn btn-info">Update</a>
                        <a href="delete.php?id=<?php echo $fetch_query['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>    
                        <?php
                        $count++;
                        }
                        ?>
        </tbody>
    </table>

<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
</body>
</html>