<?php


	  $FullName=$_POST['FullName'];
		$number=$_POST['number'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$catname=$_POST['catname'];
		$gender=$_POST['gender'];



		if (empty($_POST['FullName']) OR empty ($_POST['number']))OR empty($_POST['email'])OR empty($_POST['password'])OR empty($_POST['catname'])){
		echo  "Wrong";
		}else{
		  $con = mysqli_connect('localhost','root','','Form');
		  if(!$con){
		    die("con".mysqli_connect_error());
		  }else{
		  $sql = "INSERT INTO Adoption-Process-Form (FullName, number, email, password, catname, gender) VALUES ('$FullName','$number','$password','$catname','$gender')";
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


?>
