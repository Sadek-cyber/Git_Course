
<!DOCTYPE html>
<html lang="en-US">

<head> <meta charset="utf-8">
</head>
<body>



<?php 


// retrieve the username and password sent from login form


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$user = $_POST["email"];
    $pass = $_POST["password"];
	}
	
$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
$sql = "select username,password from users WHERE username = '$user' AND password = '$pass'";
$result=odbc_exec($Conn,$sql);

$counter=0;
 while(odbc_fetch_row($result))
 {
	 if(strpos($user, '@admin') === false){
    $counter=1;
	}else{
	$counter=2;
		}
  }   

if ($counter == 1){
		echo "<script>alert('Your Username and Password are Valid. Thank you.')</script>"; 
		echo "<script>alert('Welcome $user ')</script>";
		echo "<script>window.open('http://127.0.0.1:8887/home/master_project/mainhomepage.html','_self')</script>";
		exit;
} elseif($counter == 2){		
		echo "<script>alert('Your Username and Password are Valid. Thank you.')</script>"; 
		echo "<script>alert('Welcome $user ')</script>";
		echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
		exit;		
	}else{
			echo "<script>alert('Your Username and Password are Not Valid.')</script>";
			echo "<script>window.open('http://127.0.0.1:8887/home/master_project/homepage.html','_self')</script>";
			exit;
		}
		
		
		
odbc_close($Conn); 


?>



</body>
</html>