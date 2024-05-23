<?php
  
$con = mysqli_connect("localhost","root", '',"db_connect");

$lalo = $_POST['lalo'];
$lola = $_POST['lola'];
$alol= $_POST['alol'];

$sql = "INSERT INTO `info` (`Num`, `Email/Username`, `Password`) VALUES ('0', '$lalo', '$lola', '$alol');"

$rs = mysqli_query($con, $sql);

if($rs)
{
  echo "Login sucessful";
}

?>