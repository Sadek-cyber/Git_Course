
<!DOCTYPE html>
<html lang="en-US">

<head> <meta charset="utf-8">
</head>


<body>


<?php
// retrieve the Valuse sent from login form

$ConferenceID = $Conference_Name = $Conference_ID = $Start_Date = $Select_a_time = $End_Date = $Location ="";





$Start_Date = date("m-d-Y", time());
$End_Date = date("m-d-Y", time());
$Select_a_time = date("g:i a.", time());

$ConferenceID = $_POST["Conference_ID"];
$Conference_Name = $_POST["Conference_Name"];
$Start_Date = $_POST["Start_Date"];
$Select_a_time = $_POST["Select_a_time"]; 
$End_Date = $_POST["End_Date"];
$Location = $_POST["Location"];


// Connection with ODBC
$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
if (!$Conn)
    {exit("Connection Failed: " . $conn);}


// insertion values into database table




$result=odbc_exec($Conn,"insert into conference (ConferenceID,ConferenceName,StartDate,selectedTime,EndDate,Location) VALUES ('$ConferenceID','$Conference_Name','$Start_Date','$Select_a_time','$End_Date','$Location');");

      
if($result){
       echo "<script>alert('Your information has been sent. Thank you.')</script>"; 
	   echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
           }else{
               echo "<script>alert('Your information has not been sent. Please Try Again.')</script>";
			   echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
                }

  
   
  
odbc_close($Conn); // close the connection


?>
<script type="text/javascript">
   //window.close();
</script>


<!--<input type="button" value="Close this window" onclick="window.close();">-->
</body>
</html>


