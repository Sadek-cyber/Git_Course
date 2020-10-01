<!DOCTYPE html>
<html lang="en-US">

<head>
<script type="text/javascript">
                     function change_url(val) {
				  
					
					window.alert('val');
                        }
                    </script>
<meta charset="utf-8">
<style type="text/css">
 table.center {
    margin: 0px auto;
    margin-top: 13%;

}
</style>
<title>Admin work</title>


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  $(function() {
    $( "#datepickers" ).datepicker();
  });
  </script>




</head>

<body style="background-color:lightgrey;" >
<h1><center>Admin work</center></h1>
<div class="wrapper col4" style="color:#294E79; background-color:#FFFFFF;">
  <div id="container" style="color:#294E79; background-color:#FFFFFF;">
		<div id="middle" >
			<div id="leftmenu" >	
				<div class="leftmenu-top" ></div>
					<div class="leftmenu-middle" >
					
					<!--------------------- load conference------------------------>
					<!---------- step 1 connect--------------------------->
					<?php
						$Conn = odbc_connect ( "users" , "" , ""  );// odbc name
						if (!$Conn)
							{exit("Connection Failed: " . $conn);}
						?>
						
						<!----------------------------try fun
						<script type="text/javascript">
                     function change_url(val) {
                  var result_conf_id = val;
				  
					var sql = "SELECT trackName FROM conference where ConferenceID = val";
					var result=odbc_exec($Conn,$sql);
					window.alert(var result)
                        }
                    </script>  
                    -------------------------------------------->
    
						<tr>
							<th align="left">Conference Name: </th>
							<td align="left" width="50%"><select id="ConferenceName" name="ConferenceName" onchange="change_url(this.value);"  > <option></option>
                                                           <?php 
																$sql = "SELECT * FROM conference";
																$result=odbc_exec($Conn,$sql);
																while ($row = odbc_fetch_array($result)){
																echo "<option value=" . $row['ConferenceID'] . ">  " . $row['ConferenceName'] . "</option>";}															
															?>
                                                            </select>
							</td>
						</tr>
						
						
					
					
										<!---------- step 2 fill combobox------------------------->
	
										
							 
										
										

						<!------------------------------------------------------------------->
						
						<div class="leftmenu-bottom"></div>
			</div>
			
				<div id="right" >
						<div class="content-top"></div>
							<div class="content-middle" id="content">
								<div class="notice-box">
									<div class="notice-top"></div>
										<div class="notice-middle" id="titleCreate">
											<span class="notice-info">&nbsp;</span>
										</div>
										<div class="notice-bottom"></div>
								</div>
								
	<!--------------------------------------------start form hide -----style="display: none;"--------------------------------------------->							
		<form name="conference-form" action="conference-connect.php"  method="post" id="NewConference"   onsubmit="return ValidateForm(this);"  >
							
			<?php
 
///conection

$conn = odbc_connect ( "users" , "" , ""  ) ;//or die (odbc_errormsg());// odbc name
if (!$conn )
 {
 exit
 ("Error connecting to database: ".$conn);
 }
/// select
$result=odbc_exec($conn,"select * from reviewers  ;");
$result2=odbc_exec($conn,"select * from paper  ;");
echo "<h2> Reviewers Table<h2>";

/// table 

echo "<table border='1'>
<tr>
<th>check</th>
<th>ReviewerID </th>
<th>ReviewerName </th>
<th>ReviewerEmail</th>
<th>ReviewerTrack</th>
</tr>";

  while ($row =odbc_fetch_array($result)){
	echo "<tr>";
	echo "<td>";echo '<input type="checkbox" name="product" value=" '. $row['ReviewerID'] .' "> '; echo"</td>";
    echo "<td>" . $row['ReviewerID'] . "</td>";
    echo "<td>" . $row['ReviewerName'] . "</td>";
    echo "<td>" . $row['ReviewerEmail'] . "</td>";
    echo "<td>" . $row['ReviewerTrack'] . "</td>";
    echo "</tr>";
  }
    echo "</table>";




///conection


echo "<h2> paper table<h2>";

/// table 

echo "<table border='1'>
<tr>
<th> check</th>
<th>paper_id </th>
<th>conference_id </th>
<th>paper_titel</th>
<th>abstract</th>
<th>keyword</th>


</tr>";

  while ($row =odbc_fetch_array($result2)){
	echo "<tr>";
	echo "<td>";echo '<input type="radio" name="product" value=" '. $row['paper_id'] .' "> '; echo"</td>";
    echo "<td>" . $row['paper_id'] . "</td>";
    echo "<td>" . $row['ConferenceID'] . "</td>";
    echo "<td>" . $row['paper_titel'] . "</td>";
    echo "<td>" . $row['abstract'] . "</td>";
	echo "<td>" . $row['keyword'] . "</td>";

    echo "</tr>";
  }
    echo "</table>";

?>
 </form>
 
 
 <!------------------end form hide-------------------------------------------------------------------->
 
 
 <!---------------------------------------------------->
<form name="conference-form" action="admin_work.php"  method="post"  target="store-credentials" >

           	<table align="" bgcolor="white" frame="box" width="250" height="125" border="2" bordercolor="black" class="" style="vertical-align:top"> 


                  
                         <tr>
			    <td align="center"> <input type="button" value="Send Email+insert in work table" style="color:black;" ></td>
                            <td align="center" > <input type="reset" value="Clear"></td>
                        </tr>    
                        
	       </table>					
								
		</form>						




</body>
</html> 

