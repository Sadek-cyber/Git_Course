
<!DOCTYPE html>
<html lang="en-US">

<head> <meta charset="utf-8">
</head>
<body>


<?php


// retrieve the Valuse sent from form
$Reviewer_ID = $Reviewer_Name = $Reviewer_Email = $Reviewer_Track = "";  // intial Values

$Reviewer_ID = $_POST["Reviewer_ID"];
$Reviewer_Name = $_POST["Reviewer_Name"];
$Reviewer_Email = $_POST["Reviewer_Email"];
$Reviewer_Track = $_POST["Reviewer_Track"];




// validation on Email
/*if(!preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $Reviewer_Email)) 
   {
     print( "<br><br><hr><center><b>Please enter a valid email.</b><br><br></center><br><br>");
     echo '<span>Please enter a valid email.</span>';  
        exit;  
    }*/



// Connection with ODBC
$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
if (!$Conn)
    {exit("Connection Failed: " . $Conn);}



// insertion values into database table
$result=odbc_exec($Conn,"insert into reviewers (ReviewerID,ReviewerName,ReviewerEmail,ReviewerTrack) VALUES ('$Reviewer_ID','$Reviewer_Name','$Reviewer_Email','$Reviewer_Track');");
if($result){
       echo "<script>alert('Your information has been sent. Thank you.')</script>"; 
	   echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
           }else{
               echo "<script>alert('Your information has not been sent. Please Try Again.')</script>";
			   echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
                }





odbc_close($Conn); // close the connection
  
?>


<!--<input type="button" value="Close this window" onclick="window.close();">-->
</body>
</html>


