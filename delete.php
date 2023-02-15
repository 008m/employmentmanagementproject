<?php
include("connection.php");
$id=$_GET[''];
$query ="DELETE FROM FORM WHERE id='$id'";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "Record Deleted";
}
else
{
    echo"Failed";
}

?>