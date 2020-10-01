
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
<div class="aspNetHidden"></div>
</div>
<div class="aspNetHidden">
</div>
<div>
<br /><br /><br />
<div style="font-size:16px; color:#CC0000;">
<?php
$Conn = odbc_connect ( "meshaal" , "" , ""  );

$FirstName1 = $LastName1 = $FromEmailAddress1 = $Country1 = $Organization1 = $website1 = $mycheckbox[] ="";
$FirstName2 = $LastName2 = $FromEmailAddress2 = $Country2 = $Organization2 = $website2 = $mycheckbox[] ="";
$FirstName3 = $LastName3 = $FromEmailAddress3 = $Country3 = $Organization3 = $Website3 = $mycheckbox[] ="";
$title = $abstract = $keyword = $avatar = $skip_CaptchaCode ="";
// retrieve the Valuse sent from login form
$FirstName1 = $_POST["FirstName1"];
$LastName1 = $_POST["LastName1"];
$FromEmailAddress1 = $_POST["FromEmailAddress1"];
$Country1 = $_POST["Country1"];
$Organization1 = $_POST["Organization1"];
$website1 = $_POST["website1"];
//$mycheckbox = $_POST["mycheckbox"];
$FirstName2 = $_POST["FirstName2"];
$LastName2 = $_POST["LastName2"];
$FromEmailAddress2 = $_POST["FromEmailAddress2"];
$Country2 = $_POST["Country2"];
$Organization2 = $_POST["Organization2"];
$website2 = $_POST["website2"];
$FirstName3 = $_POST["FirstName3"];
$LastName3 = $_POST["LastName3"];
$FromEmailAddress3 = $_POST["FromEmailAddress3"];
$Country3 = $_POST["Country3"];
$Organization3 = $_POST["Organization3"];
$website3 = $_POST["website3"];
$title = $_POST["title"];
$abstract = $_POST["abstract"];
$keyword = $_POST["keyword"];
//$skip_CaptchaCode = $_POST["skip_CaptchaCode"];
$avatar = $_FILES['avatar'];





/*if($_FILES['avatar']['error'] > 0){
    die('An error ocurred when uploading.');
}
if(!getimagesize($_FILES['avatar']['tmp_name'])){
    die('Please ensure you are uploading an image.');
}
// Check filetype
if($_FILES['avatar']['type'] != 'image/png'){
    die('Unsupported filetype uploaded.');
}
// Check filesize
if($_FILES['avatar']['size'] > 500000){
    die('File uploaded exceeds maximum upload size.');
}
// Check if the file exists
if(file_exists('upload/' . $_FILES['avatar']['name'])){
    die('File with that name already exists.');
}
// Upload file
if(!move_uploaded_file($_FILES['avatar']['tmp_name'], 'upload/' . $_FILES['avatar']['name'])){
    die('Error uploading file - check destination is writeable.');
}
die('File uploaded successfully.');*/







/* ///////////// this code is activation (good) ////////////////////////////////////////////////////////////*/
$fileExistsFlag = 0; 
$avatar = $_FILES['avatar']['name'];
$query = "SELECT avatar FROM authorinformation WHERE avatar='$avatar'"; 
$result=odbc_exec($Conn,$query);

while(odbc_fetch_row($result)){
	for($i=1;$i<=odbc_num_fields($result);$i++){
	      if(['avatar']==$avatar){
            $fileExistsFlag = 1;
                           }
                              }
}
echo $fileExistsFlag;							  
/*if($fileExistsFlag==0){
	$query = "INSERT INTO authorinformation(avatar) VALUES ('$avatar')";
    $result=odbc_exec($Conn,$query);
}*/
///////////////////////////////////////////////////////////////////////////////////	
	




/* this code from w3schools with some Changes	
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["avatar"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
//////////////////////////////////////////////////////////////////////////////////////////////////


					  
					  
					  
/*if($fileExistsFlag == 0) { 
$result = move_uploaded_file($_FILES["avatar"]["tmp_name"],"files/".$_FILES['avatar']['name']);
   if($result) { 
      echo "Your file <html><b><i>".$avatar."</i></b></html> has been successfully uploaded"; 
       $query = "INSERT INTO authorinformation(avatar) VALUES ('$avatar')";
               }
   else { 
   echo "Sorry !!! There was an error in uploading your file"; 
        } 

                        } */     



$stm=odbc_exec($Conn,"insert into authorinformation (FirstName1,LastName1,FromEmailAddress1,Country1,Organization1,website1,FirstName2,LastName2,FromEmailAddress2,Country2,Organization2,website2,FirstName3,LastName3,FromEmailAddress3,Country3,Organization3,website3,title,abstract,keyword,avatar,skip_CaptchaCode) VALUES 
('$FirstName1','$LastName1','$FromEmailAddress1','$Country1','$Organization1','$website1','$FirstName2','$LastName2','$FromEmailAddress2','$Country2','$Organization2','$website2','$FirstName3','$LastName3','$FromEmailAddress3','$Country3','$Organization3','$website3','$title','$abstract','$keyword','$avatar','$skip_CaptchaCode');");

$sql = "SELECT FromEmailAddress1, FromEmailAddress2, FromEmailAddress3 FROM authorinformation WHERE (FromEmailAddress1='$FromEmailAddress1' AND FromEmailAddress2='$FromEmailAddress2' AND FromEmailAddress3='$FromEmailAddress3') ;";
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
//print_r( array_values($result));
//echo $result;

$subject="Paper submission MULTIBLE";
$body="Dear Auther,

Your paper has been submitted successfully.

Best regards,
ISSR ADMISSION ";



include 'C:\Program Files\EasyPHP-12.1\home\Mail\email.php';

			if($result==true){
				echo "<script>alert('Your information has been sent. Thank you.')</script>";
				echo "<script>window.open('http://127.0.0.1:8887/home/master_project/authorinformation.html','_self')</script>";
				exit;	
			}else{
				echo "<script>alert('Failer in the Sent Informathon.')</script>";
				echo "<script>window.open('http://127.0.0.1:8887/home/master_project/authorinformation.html','_self')</script>";
				exit;				
			}
			
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
</div> 
</body>
</html>