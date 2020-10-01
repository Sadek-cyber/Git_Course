<?php 

// Connection with ODBC
$Conn = odbc_connect ( "meshaal" , "" , ""  ) ;//or die (odbc_errormsg());// odbc name
if (!$Conn )
 {
 exit
 ("Error connecting to database: ".$Conn);
 }

/*
#$sql = "select * from users";
//$result=odbc_exec($conn,"select * from usersx;");


///////////////////////////////////////////////////////////

while(odbc_fetch_row($result)){
        for($i=1;$i<=odbc_num_fields($result);$i++){
       // echo "Result is ".odbc_result($result,$i);
        //echo "  <br>";
    }
}


//odbc_close($conn); // close the connection

*/







// retrieve the username and password sent from login form
$vfname = $vlname =$vemail= $vremail="";

 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  

   if (empty($_POST["uname"])) {
    //exit("return");
    echo "usernane  is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {
    $uname = $_POST["uname"];// collect value of input field
  }
  
  if (empty($_POST["fname"])) {
    echo " First Name is required";
    echo "  <br>";
    exit("plz go back and add missing value");
    
  } else {
    $vfname= $_POST["fname"];// collect value of input field
  //echo "Hello".$user;
  }


  if (empty($_POST["lname"])) {
   // exit("return");
    echo "Last name is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } else {
    $vlname = $_POST["lname"];// collect value of input field

  }
if (empty($_POST["email"])) {
  //exit("return");
    echo " Email is required";
echo "  <br>";
    exit("plz go back and add missing value");

  } else {
    $vemail = $_POST["email"];// collect value of input field
  //echo "Hello".$user;
  }


  if (empty($_POST["remail"])) {
    //exit("return");
    echo "Retype email is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {
    $vremail = $_POST["remail"];// collect value of input field
  }
if (empty($_POST["company"])) {
  //exit("return");
    echo " company is  required";
echo "  <br>";
    exit("plz go back and add missing value");

  } else {
    $company = $_POST["company"];// collect value of input field
  //echo "Hello".$user;
  }


 
  if (empty($_POST["web"])) {
  //exit("return");
    echo " web is required";
echo "  <br>";
    exit("plz go back and add missing value");

  } else {
    $web = $_POST["web"];// collect value of input field
  //echo "Hello".$user;
  }


  if (empty($_POST["phone"])) {
    //exit("return");
    echo "phone is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {
    $phone = $_POST["phone"];// collect value of input field
  }
 

  if (empty($_POST["aline1"])) {
    //exit("return");
    echo "address 1 is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {

    $aline1 = $_POST["aline1"];// collect value of input field
  }
   if (empty($_POST["aline2"])) {
    //exit("return");
    echo "address 2 is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {

    $aline2 = $_POST["aline2"];// collect value of input field
  }
if (empty($_POST["city"])) {
    //exit("return");
    echo "city is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {

    $city = $_POST["city"];// collect value of input field
  }
  if (empty($_POST["post"])) {
    //exit("return");
    echo "post is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {

    $post = $_POST["post"];// collect value of input field
  }
 

  if (empty($_POST["country"])) {
    //exit("return");
    echo "country is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {

    $country = $_POST["country"];// collect value of input field
  }
}
if (empty($_POST["pass"])) {
    //exit("return");
    echo "password is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {

    $password = $_POST["pass"];// collect value of input field
  }

if (empty($_POST["rpass"])) {
    //exit("return");
    echo "Retype password is required";
    echo "  <br>";
    exit("plz go back and add missing value");
  } 
  else {
    $retypepassword = $_POST["rpass"];// collect value of input field

   //$retypepassword = $_POST["password"];// collect value of input field

   }
   



  $stmt = odbc_prepare($Conn, "INSERT INTO users (Fname, Lname,email,username,company,web,phone,aline1,aline2,city,post,country,password) VALUES('$vfname', '$vlname','$vemail','$uname','$company','$web','$phone',' $aline1','$aline2','$city ','$post',' $country','$password');" ); 

 //////////////////////send email ///////////////////////////////////
  
$sql = "SELECT email FROM users WHERE email='$vemail';";
$stm=odbc_exec ($Conn, "$sql"); 
$email=odbc_fetch_row($stm);

$stm=odbc_exec ($Conn, $sql);

//while(odbc_fetch_row($stm)){
        // for($i=1;$i<=odbc_num_fields($stm);$i++){
        //$result=odbc_result($stm,$i).", ".$result;
    //}s
//} 


$result = array();
        while (odbc_fetch_row($stm))
		for ($i=1;$i<=odbc_num_fields($stm);$i++) {
		$result[] = odbc_result($stm,$i);
		}
print_r( array_values($result));
//echo $result;

$subject="ISSR Admission";
$body="Dear $uname,

Your account has been created use the below URL to browes your account,

http://127.0.0.1:8887/home/master_project/homepage.html

Best regards,
ISSR ADMISSION ";
include 'C:\Program Files\EasyPHP-12.1\home\Mail\email.php';

if (!odbc_execute($stmt)) { 
 // error  
   
echo "<script>alert('Your information has not been sent. Please Try Again.')</script>";
echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
}
 else {
  


 echo "<script>alert(' Your information has been sent. we well send email to active your account . Thank you.')</script>"; 

echo "<script> window.close('http://127.0.0.1:8887/home/master_project/create2.php')</script>";
echo "<script> window.open('http://127.0.0.1:8887/home/master_project/homepage.html')</script>";



$page = 'http://127.0.0.1:8887/home/master_project/homepage.html';
header('location: '.$page);
  //odbc_close($conn);
}







?>