<?php
include('config.php');
$r=$_GET['re'];
$query1="DELETE from nameofrecord where SerialNo='$r'";
$query2="DELETE from costrecord where SerialNo='$r'";

$date=mysqli_query($conn,$query1);
$date1=mysqli_query($conn,$query2);
if($date){
    header("location:welcome.php");

}
else{

}

?>