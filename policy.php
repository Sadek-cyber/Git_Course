<!DOCTYPE html PUBLIC >
<head>
<title>Our Policy</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<script type="text/javascript">
function ValidateForm(frm) {
if (frm.name.value == "") {alert('Name is required.');frm.name.focus();return false;}
if (frm.email.value == "") {alert('Email address is required.');frm.email.focus();return false;}
if (frm.email.value.indexOf("@") < 1 || frm.email.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.email.focus();return false;}
return true; }
</script>


<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar">
    <!--<div id="clientlogin">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Login</legend>
          <input type="text" value="Email&hellip;"  onfocus="this.value=(this.value=='Email&hellip;')? '' : this.value ;" />
          <input type="text" value="Password&hellip;"  onfocus="this.value=(this.value=='Password&hellip;')? '' : this.value ;" />
          <input type="submit" name="login" id="login" value="GO" />
        </fieldset>
      </form>
    </div>-->
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
    </div>
  </div>
</div>  
<div class="wrapper col2">
<div><img src="images/cairoUn.png" alt="Cairo Logo" width="100" height="100" align="left" style="padding-left: 4%;" /></div>
<div><img src="images/issr.png" alt="ISSR Logo" width="90" height="90" align="right" style="padding-right: 4%;" /></div>
  <div id="header">
    <div id="logo">
      <h1>Cairo University</h1>
      <h1><a href="http://issr.cu.edu.eg/en/">ISSR</a></h1>
      <p>The Conference System</p>
    </div>
    <div id="topnav">
      <ul>
        <li><a href="http://127.0.0.1:8887/home/master_project/mainhomepage.html">Home page</a>
          <ul>
            <li><a href="#">Introduction</a></li>
            <li><a href="#">Previous achievements</a></li>
            <li><a href="#">General Terms</a></li>
          </ul>
        </li>
        <li><a class="active" href="http://127.0.0.1:8887/home/master_project/policy.php">Policy</a>
          <ul>
            <li><a href="#">using ISSR Conf</a></li>
            <li><a href="#">Other Requirements</a></li>
            <li><a href="#">Write A Comment</a></li>
          </ul>
        </li>
        <li><a href="http://127.0.0.1:8887/home/master_project/contactus.html">Contact Us</a>
          <ul>
            <li><a href="#">Contacting ISSR Conf</a></li>
            <li><a href="#">How To Find Us</a></li>
            <li><a href="#">Quick Links</a></li>
          </ul>
        </li>
        <li class="last"><a href="http://127.0.0.1:8887/home/master_project/authorinformation.html">Registration</a>
          <ul>
            <li><a href="#">Author Information</a></li>
            <li><a href="#">Upload a File</a></li>
            <li><a href="#">Send your Research</a></li>
          </ul>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first"></li>
      <li>&#187;</li>
      <li><a href="#">Privacy</a></li>
      <li>&#187;</li>
      <li><a href="#">Latest News</a></li>
      <li>&#187;</li>
      <li><a href="#">Contacting ISSR Conf</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Company Information</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1>This page explains our requirements to conferences using ISSR Conf.</h1>
      <img class="imgr" src="images/po1.jpg" alt="Policy" width="125" height="125" />
      <p>If you have questions or comments about these requirements, you can <a href=""> contact us.</a></p>
      <p>Why Have a Policy?</p>
      <img class="imgl" src="images/po2.jpg" alt="" width="125" height="125" />
      <p>A simple answer is "because we care about our reputation". In the beginning, EasyChair was used by several conferences and workshops in computer science organized by leading scientists in their areas. Now, it is used by thousands of conferences organized by scientists, organizations, associations, professional conference organizers and invidividuals. If one of these conferences does not comply with generally accepted ethical standards, it may, directly or indirectly, harm EasyChair.
         Our policy, or code of behavior, is explained below. The parallel submission requirement below is EasyChair-specific, others can be considered as general fair policy guidelines to conference organizers.
         If some of the requirements explained below are not applicable to you (for example, your conference has no Web page or you use EasyChair for teaching students), you can ignore them.</p>
<!--  <p></p>
      <p></p>
      <h2>Table(s)</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
          </tr>
          <tr class="dark">
            <td>Value 5</td>
            <td>Value 6</td>
            <td>Value 7</td>
            <td>Value 8</td>
          </tr>
          <tr class="light">
            <td>Value 9</td>
            <td>Value 10</td>
            <td>Value 11</td>
            <td>Value 12</td>
          </tr>
          <tr class="dark">
            <td>Value 13</td>
            <td>Value 14</td>
            <td>Value 15</td>
            <td>Value 16</td>
          </tr>
        </tbody>
      </table>-->
	  <?php
	  $Conn = odbc_connect ( "meshaal" , "" , ""  );
	  
	  // name
	 $sql = "SELECT commentname  FROM policy where ID=(SELECT Max(policy.ID) AS MaxOfpolicyID FROM policy)";
	 $result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $thirdname = odbc_result($result,$i);
		 }
		}
		
	$sql = "SELECT commentname  FROM policy where ID=(SELECT Max(policy.ID)-1 AS MaxOfpolicyID FROM policy)";
	$result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $secondname = odbc_result($result,$i);
		 }
		}
		
		
	$sql = "SELECT commentname  FROM policy where ID=(SELECT Max(policy.ID)-2 AS MaxOfpolicyID FROM policy)";
	$result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $firstname = odbc_result($result,$i);
		 }
		}
		
		
		
		// date
		$sql = "SELECT commentdate  FROM policy where ID=(SELECT Max(policy.ID) AS MaxOfpolicyID FROM policy)";
	 $result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $thirddate = odbc_result($result,$i);
		 }
		}
	//	$thirddate =date("m-d-Y", time());
		
		
		
		
		$sql = "SELECT commentdate  FROM policy where ID=(SELECT Max(policy.ID)-1 AS MaxOfpolicyID FROM policy)";
	 $result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $seconddate = odbc_result($result,$i);
		 }
		}
		//$seconddate =date("m-d-Y", time());
		
		
		
		$sql = "SELECT commentdate  FROM policy where ID=(SELECT Max(policy.ID)-2 AS MaxOfpolicyID FROM policy)";
	 $result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $firstdate = odbc_result($result,$i);
		 }
		}
		//$firstdate =date("m-d-Y", time());
		
		
		
		
		
		// time
		$sql = "SELECT commenttime  FROM policy where ID=(SELECT Max(policy.ID) AS MaxOfpolicyID FROM policy)";
	 $result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $thirdtime = odbc_result($result,$i);
		 }
		}
		//$thirdtime = date("g:i a.", time());
		
		
		
		
		$sql = "SELECT commenttime  FROM policy where ID=(SELECT Max(policy.ID)-1 AS MaxOfpolicyID FROM policy)";
	 $result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
         $secondtime = odbc_result($result,$i);
		 }
		}
		//$secondtime = date("g:i a.", time());
		
		
		
		
		$sql = "SELECT commenttime  FROM policy where ID=(SELECT Max(policy.ID)-2 AS MaxOfpolicyID FROM policy)";
		$result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
		 
         $firsttime = odbc_result($result,$i);
		 }
		}
		//$firsttime = date("g:i a.", time());
		
		
		
		
		
		
		// commene
		$sql = "SELECT commenttext  FROM policy where ID=(SELECT Max(policy.ID) AS MaxOfpolicyID FROM policy)";
		$result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
		 
         $thirdcomment = odbc_result($result,$i);
		 }
		}
		
		$sql = "SELECT commenttext  FROM policy where ID=(SELECT Max(policy.ID)-1 AS MaxOfpolicyID FROM policy)";
		$result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
		 
         $secondcomment = odbc_result($result,$i);
		 }
		}
		
		
		$sql = "SELECT commenttext  FROM policy where ID=(SELECT Max(policy.ID)-2 AS MaxOfpolicyID FROM policy)";
		$result=odbc_exec($Conn,$sql);
		while(odbc_fetch_row($result))
		{
         for($i=1;$i<=odbc_num_fields($result);$i++)
		 {
		 
         $firstcomment = odbc_result($result,$i);
		 }
		}
	  ?>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <div id="comments">
        <h2>Comments</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote"><label id=""><small><?php echo $firstname;?> </small></label></span></div>
            <div class="submitdate"><a href="#"><label><?php echo $firstdate." At ".$firsttime;?> </label></a></div>
            <p><label><small><?php echo $firstcomment;?> </small></label></p>
          </li>
          <li class="comment_even">
            <div class="author"><img class="avatar" src="" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote"><label><small><?php echo $secondname;?> </small></label></span></div>
            <div class="submitdate"><a href="#"><label><?php echo $seconddate." At ".$secondtime;?></label></a></div>
            <p><label><small><?php echo $secondcomment;?> </small></label></p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote"><label><small><?php echo $thirdname;?> </small></label></span></div>
            <div class="submitdate"><a href="#"><label><?php echo $thirddate." At ".$thirdtime;?></label></a></div>
            <p><label><small><?php echo $thirdcomment;?> </small></label></p>
          </li>
        </ul>
      </div>
      <h2>Write A Comment</h2>
      <div id="respond">
        <form action="policy-comment.php" method="post" onsubmit="return ValidateForm(this);">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10" value=""></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Other Requirements</h2>
        <ul>
          <li><a href="#">no parallel submission process</a></li>
          <li><a href="#">who is organizing the conference ?</a>
            <ul>
              <li><a href="#">university and other organization</a></li>
              <li><a href="#">company and academic association</a></li>
              <li><a href="#">an individual</a></li>
            </ul>
          </li>
          <li><a href="#">email address</a>
            <ul>
              <li><a href="#">preferably belongs to the domain of a university</a></li>
                <ul>
                  <li><a href="#">recognized academic institution</a></li>
                  <li><a href="#">major company</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">contact phone number</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title"><img src="images/ver.jpg" alt="" width="100" height="100" />Verifiable Information Principle</h2>
        <p>All information included on the Web pages and in any announcements of your conference should be <b>authentic and verifiable.</b></p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="holder">
        <h2>Strictly no Spam</h2>
        <p>We do not spam our users and do not sell or otherwise distribute their email addresses.</p>
        <ul>
          <li><a href="#">targets the intended audience.</a></li>
          <li>one-click unsubscribe link.</li>
          <li><a href="#">single mailing list.</a></li>
        </ul>
        <p>The concrete organization of your mailing lists can be different, as long as email recipients do not complain.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
     <div class="flickrbox">
    <!--<h2 class="title">Flickr</h2>
        <ul>
          <li><a href="#"><img src="../images/demo/80x80.gif" alt="" /></a></li>
          <li><a href="#"><img src="../images/demo/80x80.gif" alt="" /></a></li>
          <li class="last"><a href="#"><img src="../images/demo/80x80.gif" alt="" /></a></li>
          <li><a href="#"><img src="../images/demo/80x80.gif" alt="" /></a></li>
          <li><a href="#"><img src="../images/demo/80x80.gif" alt="" /></a></li>
          <li class="last"><a href="#"><img src="../images/demo/80x80.gif" alt="" /></a></li>
        </ul>-->
        <br class="clear" />
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="footer">
    <div class="footbox">
      <h2>Address</h2>
      <ul>
        <li><a href="#">Mailing Address: 5 Ahmed Zewail St. - formerly Tharwat - Orman - Giza.</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Zip</h2>
      <ul>
        <li><a href="#">12613</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Tel</h2>
      <ul>
        <li><a href="#">33358355 - 33358496</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>E-mail</h2>
      <ul>
        <li><a href="http://dean_issr@cu.edu.eg">dean_issr@cu.edu.eg</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Quick Links</h2>
      <ul>
        <li><a href="http://issr.cu.edu.eg/ar/home/">Main Page</a></li>
        <li><a href="http://issr.cu.edu.eg/ar/home/">Call Us</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Institute of Statistical Studies and Research - Cairo University<a href="#"></a></p>
    <p class="fl_right">ISSR<a target="_blank" href="http://127.0.0.1:8887/home/master_project/homepage.html" title="Free Conference Website">-System</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>