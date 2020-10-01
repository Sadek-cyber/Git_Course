<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>New Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout2/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
	  <h1>Cairo University</h1>
      <h1><a href="index.html">ISSR</a></h1>
      <p>The Conference System</p>
    </div>
    <div id="banner"><a href="#"><img src="images/CairoUn.jpg" alt="" width="468" height="125" /></a></div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="search">
      <ul>
        <li>Tel: xxxxx xxxxxxxxxx</li>
        <li class="last">Mail: info@domain.com</li>
      </ul>
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
    </div>
       <div id="topnav">
      <ul>
        <li><a  href="http://127.0.0.1:8887/home/master_project/homepage.html">Overview</a>
          <ul>
           <li><a href="#Introduction">Supported Models</a></li>
            <li><a href="#PreviousAchievements">ISSR Conference Users</a></li>
            <li><a href="#GeneralTerms">Contact Us</a></li>
          </ul>
        </li>
        <li><a href="http://127.0.0.1:8887/home/master_project/lastnews.html">Last News</a>
          <ul>
            <li><a href="#">Our Gallary</a></li>
            <li><a href="#">Our Videos</a></li>
            <li><a href="#">our Photos</a></li>
          </ul>
        </li>
        <li><a href="http://127.0.0.1:8887/home/master_project/licenses.html">Licenses</a>
          <ul>
            <li><a href="#">Conference Licenses</a></li>
            <li><a href="#">License Management</a></li>
            <li><a href="#">Some restrictions</a></li>
          </ul>
        </li>
        <li class="last"><a class="active" href="http://127.0.0.1:8887/home/master_project/newaccount.html">New Account </a>
          <ul>
            <li><a href="#">Create New</a></li>
            <li><a href="#">Helps</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
      <li>&#187;</li>
      <li><a href="#">Grand Parent</a></li>
      <li>&#187;</li>
      <li><a href="#">Parent</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Child</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
<!--<h1>Headline 1 Colour and Size</h1>
    <h2>Headline 2 Colour and Size</h2>
    <h3>Headline 3 Colour and Size</h3>
    <h4>Headline 4 Colour and Size</h4>
    <h5>Headline 5 Colour and Size</h5>
    <h6>Headline 6 Colour and Size</h6>
    <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
    <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
    <ul>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <li>Etiam vel sapien et est adipiscing commodo.</li>
      <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>
      <li>Donec et dui dolor, in lacinia leo.</li>
      <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>
    </ul>
    <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet nibh fames nulla curabitudin.</p>
    <ol>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <li>Etiam vel sapien et est adipiscing commodo.</li>
      <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>
      <li>Donec et dui dolor, in lacinia leo.</li>
      <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>
	  
    </ol>-->
	<form name="conference-form" action="php_checkbox.php"  method="post" id="AdminWork"     >
							
			<?php
 
///conection

$conn = odbc_connect ( "meshaal" , "" , ""  ) ;//or die (odbc_errormsg());// odbc name
if (!$conn )
 {
 exit
 ("Error connecting to database: ".$conn);
 }
/// select
$result_review=odbc_exec($conn,"select * from reviewers  ;");
$result_paper=odbc_exec($conn,"select * from paper  ;");
   

/// table paper
echo "<h2> Paper Table<h2>";

/// table 

echo "<table border='1'>
<tr>
<th> check</th>
<th>paper_sn </th>
<th>paper_id </th>
<th>conference_id </th>
<th>paper_titel</th>
<th>abstract</th>
<th>keyword</th>


</tr>";

  while ($row_paper =odbc_fetch_array($result_paper)){
	echo "<tr>";
  echo "<td>";echo '<input type="radio" name="product[]" value=" '. $row_paper['paper_sn'] .' "> '; echo"</td>";
    echo "<td>" . $row_paper['paper_sn'] . "</td>";
	echo "<td>" . $row_paper['paper_id'] . "</td>";
    echo "<td>" . $row_paper['ConferenceID'] . "</td>";
    echo "<td>" . $row_paper['title'] . "</td>";
    echo "<td>" . $row_paper['abstract'] . "</td>";
	echo "<td>" . $row_paper['keywords'] . "</td>";

    echo "</tr>";
  }
    echo "</table>";
	

/// table reviewers
echo "<h2> Reviewers Table<h2>";

echo "<table border='1'>
<tr>
<th>check</th>
<th>ReviewerID </th>
<th>ReviewerName </th>
<th>ReviewerEmail</th>
<th>ReviewerTrack</th>
</tr>";

  while ($row_review =odbc_fetch_array($result_review)){
	echo "<tr>";
	echo "<td>";echo '<input type="checkbox" name="check_list[]" value=" '. $row_review['ReviewerEmail'] .' "> '; echo"</td>";
    echo "<td>" . $row_review['ReviewerID'] . "</td>";
    echo "<td>" . $row_review['ReviewerName'] . "</td>";
    echo "<td>" . $row_review['ReviewerEmail'] . "</td>";
    echo "<td>" . $row_review['ReviewerTrack'] . "</td>";
    echo "</tr>";
  }
    echo "</table>";

?>
   <!-------------end loop------------------------>               
			     <input type="submit" name="submit" Value="Submit"/>
								 <input type="reset" name="reset" value="reset">
 
								 
 
<?php

$conn = odbc_connect ( "meshaal" , "" , ""  ) ;//or die (odbc_errormsg());// odbc name
if (!$conn )
 {
 exit
 ("Error connecting to database: ".$conn);
 }
if(isset($_POST['submit'])){

if(!empty($_POST['check_list'])&& !empty($_POST['product'])) {
	
// Counting number of checked checkboxes.
//$checked_count = count($_POST['check_list']);
//echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.


foreach($_POST['check_list'] as $select_review_email) {
foreach($_POST['product'] as $select_paper_sn) {
	
//echo "<p>".$select_review ."</p>";
//echo "<p>".$select_paper ."</p>";
///////isert----------------------------
$stm=odbc_exec ($conn, "INSERT INTO new_work (ReviewerEmail, paper_sn) VALUES ( '$select_review_email','$select_paper_sn' );"); 

$sql = "SELECT ReviewerEmail FROM new_work WHERE (ReviewerEmail='$select_review_email' ) ;";
$stm=odbc_exec ($conn, "$sql"); 
$email=odbc_fetch_row($stm);

$stm=odbc_exec ($conn, $sql);

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

$subject="ISSR Admission";
$body="Dear Reviewer,

You have been choosed to as reviewer for a paper.

login to your account using the below URL http://127.0.0.1:8887/home/master_project/homepage.html.

Best regards,
ISSR ADMISSION ";



include 'C:\Program Files\EasyPHP-12.1\home\Mail\email.php';

if($stm){
       echo "<script>alert('Your information has been saved and send Email to reviewer. Thank you.')</script>"; 
	 //  echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
	   
	   
  //odbc_close($conn);
           }else{
               echo "<script>alert('Your information has not been sent. Please Try Again.')</script>";
			 //  echo "<script>window.open('http://127.0.0.1:8887/home/master_project/system-function.php','_self')</script>";
                }
}
}
}
else{
	echo "<script>alert('Please Select a paper and  Atleast One reviewer. Thank you.')</script>"; 

}


}


	
	?>							
		</form>		
		
  </div>
</div>
<div class="wrapper col5">
  <div id="footer">
    <div class="footbox">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Other Information !</h2>
      <ul>
        <li><a href="#">Business Terms &amp; Conditions &raquo;</a></li>
        <li><a href="#">Disability Philosophy &raquo;</a></li>
        <li class="last"><a href="#">Contact Our Company &raquo;</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Company Details !</h2>
      <address>
      Company Name<br />
      Street Name &amp; Number<br />
      Town<br />
      Postcode/Zip<br />
      </address>
      Tel: xxxxx xxxxxxxxxx 
      <!-- --> 
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">----- &copy; 2016 - ------------ - <a href="#">Domain Name</a></p>
    <p class="fl_right">product by <a target="_blank" href="" title="">ISSR Conference</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>