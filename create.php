<?php
if(isset($_POST['send'])){


$Name= $_POST['Name'];
$email= $_POST['email'];
$message= $_POST['message'];

if (empty($_POST['Name']) OR empty ($_POST['email'])){
echo  "Wrong";
}else{
  $con = mysqli_connect('localhost','root','','Form');
  if(!$con){
    die("con".mysqli_connect_error());
  }else{
  $sql = "INSERT INTO contact (Name, email, message) VALUES ('$Name','$email','$message')";
if(mysqli_query($con,$sql)){
  echo "Added";

}else{
  die("Error".$sql.mysqli_error($con));
}
  }
}

 mysqli_close($con);

}
 ?>
