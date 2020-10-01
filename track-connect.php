<?php

// retrieve the Valuse sent from login form

$Track_Name = $Track_ID = $Conference_Name = "";

$Conference_Name = $_POST["Conference_Name"];
$Track_Name = $_POST["Track_Name"];
$Track_ID = $_POST["Track_ID"];


// Connection with ODBC
$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
if (!$Conn)
    {exit("Connection Failed: " . $conn);}



$result=odbc_exec($Conn,"insert into track (ConferenceName,trackname,trackID) VALUES ('$Conference_Name','$Track_Name','$Track_ID');");
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























