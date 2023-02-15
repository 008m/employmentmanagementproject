<?php
include("connection.php");

$query = "SELECT *FROM FORM";
$data = mysqli_query($conn, $query);

$total= mysqli_num_rows($data);





if($total!=0)
{
    while($result = mysqli_fetch_assoc($data))
   {
    echo $result[firstname]." ".$result[lastname]." ".$result[email]." ".$result[phone]." ".$result[address]." ".$result[gender]." ".$result[hobby]." ".$result[startdate]."<br>";
   }
}


else
{
    echo "No record found";
}

?>