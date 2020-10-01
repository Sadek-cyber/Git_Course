
<!DOCTYPE html>
<html lang="en-US">

<head> <meta charset="utf-8">
     <style type="text/css">
        body {background-color:#F3F5F4; font-family:Verdana,Arial,Helvetica,sans-serif; text-align:center;}
        a:link,a:visited,a:active {color:#333333; font-size:14px;}
        a:hover {color:#CC0000; font-size:14px;}
    </style>
</head>
<body>
<br /><br /><br />
<div style="font-size:16px; color:#CC0000;">


<?php

$Conn = odbc_connect ( "meshaal" , "" , ""  );
if (!$Conn)
    {exit("Connection Failed: " . $conn);}

$name = $email = $comment ="";
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$sql="insert into policy (commentname,commentemail,commenttext) VALUES ('$name','$email','$comment')";
$result=odbc_exec($Conn,$sql);

echo "<script>alert('Your information has been sent. Thank you.')</script>";
echo "<script>window.open('http://127.0.0.1:8887/home/master_project/policy.php','_self')</script>";
exit;
//print( "<br><br><hr><center><b>Your information has been sent. Thank you.</b><br><br></center><br><br>");  
odbc_close($Conn); // close the connection
?>

</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br />

<div style="border-top:solid 1px #CCCCCC; padding-top:30px;">
            <a href="http://issr.cu.edu.eg/en/" target="_blank">
                ISSR Conf<br /><br />
                CLICK HERE to see our Site!
            </a>
</div> 