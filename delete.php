<?php
include("connection.php");
    $id = $_GET['id'];
    $delete_query="DELETE FROM crud WHERE id =$id ";
    mysqli_query($conn,$delete_query);
?>
<script>
    location="read.php";
</script>