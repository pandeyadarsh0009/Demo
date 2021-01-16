<? php include('conn.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Validation Using PHP</title>
</head>
<body>
<form align='center'action="" method="POST">
	<p><label for="name">First Name:</label></p>
	<p><input type="text" name="name"></p>

	<p><label for="name">Last Name:</label></p>
	<p><input type="text" name="name"></p>

	<p><label for="Email">Email:</label></p>
	<p><input type="Email" name="Email"></p>

	<p><label for="Date of Birth">Date of Birth:</label></p>
	<p><input type="text" name="Date of Birth"></p>


	<p><label for="Telephone">Telephone:</label></p>
	<p><input type="text" name="Telephone"></p>


	<p><label for="Designation">Designation:</label></p>
	<p><input type="text" name="Designation"></p>


	<p><label for="Gender">Gender:</label></p>
	<p><input type="radio" name="Gender"></p>Male
	<br/>
	<p><input type="radio" name="Gender"></p>Female


	<p><label for="Hobbies">Hobbies:</label></p>
	<p><input type="checkbox" name="Hobbies"></p>Singing

	<p><input type="checkbox" name="Hobbies"></p>Dancing

	<p><input type="checkbox" name="Hobbies"></p>Playing

	<p><input type="checkbox" name="Hobbies"></p>Reading
	<p></p>

	<input type="submit" name="Sign UP">


</form>
<? php
if(isset($_POST[submit])){
	$FirstName=$_POST['First Name'];
	$LastName=$_POST['Last Name'];
	$Email=$_POST['Email'];
	$DateofBirth=$_POST['DateofBirth'];
	$Telephone=$_POST['Telephone'];
	$Designation=$_POST['Designation'];
	$Gender=$_POST['Gender'];
	$Hobbies=$_POST['Hobbies'];
	if ($FirstName=="") {
		echo "Not Blank";
	}
	elseif ($Email=="") {
		echo "Not Blank";
	}
	else{
		$query="insert into demo (FirstName,LastName,Email,DateofBirth,Telephone,Designation,Gender,Hobbies) values ('$FirstName','$LastName','$Email','$DateofBirth','$Telephone','$Designation','$Gender','$Hobbies')";
		row = mysql_query($con,$query)
		if($row){
			echo "successful";
		}
_	}
}
?>

</body>
</html>