
<html>
<head>
<title>Welcome Admin</title>








<script type="text/javascript">
function systemfunction() {  

document.getElementById('createUser').style.display="none";
document.getElementById('systemfunction').style.display="inline";
}
</script>


<script type="text/javascript">
function createUser() {  

document.getElementById('systemfunction').style.display="none";
document.getElementById('createUser').style.display="inline";
document.getElementById('NewConference').style.display="none";
document.getElementById('NewTrack').style.display="none";
document.getElementById('NewReviewer').style.display="none";
//document.getElementById('titleCreate').style.display="none";
}
</script>




<!-- --------------------------------------------------------Conference Table ------------------------------------------- -->
<!-- Validate Function for conference Table-->
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Conference_Name.value == "") {alert('Conference Name is required.');frm.Conference_Name.focus();return false;}
if (frm.Start_Date.value == "") {alert('Start Date is required.');frm.Start_Date.focus();return false;}
if (frm.Select_a_time.value == "") {alert('Time is required.');frm.Select_a_time.focus();return false;}
if (frm.End_Date.value == "") {alert('End Date is required.');frm.End_Date.focus();return false;}
if (frm.Location.value == "") {alert('Location is required.');frm.Location.focus();return false;}
return true; }
</script>

<!-- --------------------------------------------------------Neweuser Table ------------------------------------------- -->
<!-- Validate Function for Neweuser Table-->
<script type="text/javascript">
function ValidateFormuser(frmu) {
if (frmu.uname.value == "") {alert('username is required.');frmu.uname.focus();return false;}
if (frmu.fname.value == "") {alert('frist name is required.');frmu.fname.focus();return false;}
if (frmu.lname.value == "") {alert('last name required.');frmu.lname.focus();return false;}
if (frmu.email.value == "") {alert('E-mail is required.');frmu.email.focus();return false;}
if (frmu.remail.value == "") {alert('Retype E-mail is required.');frmu.remail.focus();return false;}
if (frmu.company.value == "") {alert('company is required.');frmu.company.focus();return false;}
if (frmu.web.value == "") {alert('web is required.');frmu.web.focus();return false;}
if (frmu.phone.value == "") {alert('phone is required.');frmu.phone.focus();return false;}
if (frmu.aline1.value == "") {alert('Address line 1 is required.');frmu.aline1.focus();return false;}
if (frmu.aline2.value == "") {alert('Address line 2 is required.');frmu.aline2.focus();return false;}
if (frmu.city.value == "") {alert('city is required.');frmu.city.focus();return false;}
if (frmu.post.value == "") {alert('post code is required.');frmu.post.focus();return false;}
if (frmu.country.value == "") {alert('country is required.');frmu.country.focus();return false;}
if (frmu.pass.value == "") {alert('password is required.');frmu.pass.focus();return false;}
if (frmu.rpass.value == "") {alert('Retype password is required.');frmu.rpass.focus();return false;}

return true; }
</script>



<!--  Function to display the conference Table-->
<script type="text/javascript">
function NewConference() {  
document.getElementById('NewConference').style.display="inline";
document.getElementById('NewTrack').style.display="none";
document.getElementById('NewReviewer').style.display="none";
}
</script>
<!-- ---------------------------------------------------------------------------------------------------------------------------->


<!-- --------------------------------------------------------track Table ------------------------------------------- -->
<!-- Validate Function for track Table-->
<script>
    function checkDropdown () {
    var trackName = document.getElementById('Track_Name');
    if(!trackName.value) {  
        window.alert('You must select a Track Name');  
	return false;}
		
	var trackID = document.getElementById('Track_ID');
    if(!trackID.value) {  
        window.alert('You must select a Track ID');  	
        return false;}
}
</script>



<!--  Function to display the track Table-->
<script type="text/javascript">
function NewTrack() {  
document.getElementById('NewTrack').style.display="inline";
document.getElementById('NewConference').style.display="none";
document.getElementById('NewReviewer').style.display="none";
}
</script>
<!-- ---------------------------------------------------------------------------------------------------------------------------->

















<!-- --------------------------------------------------------Reviewers Table ------------------------------------------- -->
<!-- Validate Function for Reviewers Table-->
<script>
function ValidateForm2(frm) {
	
	
	
	if (frm.Reviewer_Name.value == "") {alert('Reviewer Name is required.');frm.Reviewer_Name.focus();return false;}
	if (frm.FromEmailAddress.value == "") {alert('Email address is required.');frm.FromEmailAddress.focus();return false;}
	if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.FromEmailAddress.focus();return false;}
	//if (Reviewer_Track.value == "") {alert('Reviewer Name is required.');Reviewer_Track.focus();return false;}
	
	var ReviewerTrack = document.getElementById('Reviewer_Track');
    if(!ReviewerTrack.value) {  
        window.alert('You must select a Reviewer Track.');  
	return false;}
    
	
	
	return true; }
</script>



<!--  Function to display the Reviewer Table-->
<script type="text/javascript">
function NewReviewer() {  
document.getElementById('NewReviewer').style.display="inline";
document.getElementById('NewConference').style.display="none";
document.getElementById('NewTrack').style.display="none";
}
</script>

<!-- ---------------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript">
                     function change_url(val) {
					
					window.alert(val);//
                        }
                    </script>





<style type="text/css" style="display:none">

#container{
	min-height: 100%;
	width: 100%;	
}

#middle{
	padding: 25px 0 60px;
	margin: 0 auto;
	width: 1040px;
}
#leftmenu{
	float: left;
	width: 240px;	
}
#right{
	float: right;
	width: 782px;
}
.content-top{
	background:;
	height: 12px;
	overflow: hidden;
}
.content-middle{
	background: ;
	padding: 10px 20px;
}
.leftmenu-top{
	background:;
	height: 10px;
	overflow: hidden;
	width: 240px;
}
.form .title{
	display: block;
	float: left;
	padding: 6px 0 0;
	width: 150px;
}
/* Menu */
.menu{
	list-style: none;
	margin: 9px auto;
	overflow: hidden;
	width: 199px;
}
.menu li{
	margin: 0 0 5px 0;
}
.menu li a:link, .menu li a:visited{
	background: ;
	color: #989393;		
	display: block;
	font-size: 1.2em;
	font-weight: bold;
	height: 37px;
	line-height: 37px;
	width: 199px;
	text-decoration: none;
	text-shadow: 1px 1px 1px #fff;
}
.menu li a:hover,
.menu li a.menu-focus{
	background-position: 0 -37px;
	color: #242625;
	text-decoration: none;
}
.menu a span{
	display: block;
	float: left;
	height: 30px;
	margin: 3px 12px 0 10px;
	width: 40px;
}
.menu-dashboard{background:  0 -30px no-repeat}
.menu-questions{background: 0 -30px no-repeat}
.menu-replies{background:  0 -30px no-repeat}
.menu-categories{background:  0 -30px no-repeat}
.menu-options{background:  0 -30px no-repeat}
.menu-users{background:  0 -30px no-repeat}
.menu-preview{background:  0 -30px no-repeat}
.menu-install{background: 0 -30px no-repeat}
.menu-logout{background:  0 -30px no-repeat}
.menu-focus .menu-dashboard, .menu a:hover .menu-dashboard,
.menu-focus .menu-questions, .menu a:hover .menu-questions,
.menu-focus .menu-replies, .menu a:hover .menu-replies,
.menu-focus .menu-categories, .menu a:hover .menu-categories,
.menu-focus .menu-options, .menu a:hover .menu-options,
.menu-focus .menu-users, .menu a:hover .menu-users,
.menu-focus .menu-preview, .menu a:hover .menu-preview,
.menu-focus .menu-install, .menu a:hover .menu-install,
.menu-focus .menu-logout, .menu a:hover .menu-logout{
	background-position: 0 0;
}
/* Errors */
.notice-box{
	margin: 0 0 10px 0;
	overflow: hidden;
	width: 742px;
}
.notice-top{
	background:  0 0 no-repeat;
	height: 2px;
	overflow: hidden;
}
.notice-middle{
	background:  0 0 repeat-y;	
	overflow: hidden;
	padding: 10px;
	position: relative;
}
.notice-bottom{
	background:  0 0 no-repeat;
	height: 5px;
	overflow: hidden;
}
</style>
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
 <!--<div id="banner"><a href="#"><img src="images/CairoUn.jpg" alt="" width="468" height="125" /></a></div>-->
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
<!-- <div id="topnav">
      <ul>
        <li><a  href="http://127.0.0.1:8887/home/master_project/homepage.html">----------</a>
          <ul>
           <li><a href="#Introduction">----------</a></li>
            <li><a href="#PreviousAchievements">----------</a></li>
            <li><a href="#GeneralTerms">----------</a></li>
          </ul>
        </li>
        <li><a href="http://localhost/home/lastwork/lastnews.html">----------</a>
          <ul>
            <li><a href="#">----------</a></li>
            <li><a href="#">----------</a></li>
            <li><a href="#">----------</a></li>
          </ul>
        </li>
        <li><a href="http://127.0.0.1:8887/home/master_project/licenses.html">----------</a>
          <ul>
            <li><a href="#">----------</a></li>
            <li><a href="#">----------</a></li>
            <li><a href="#">----------</a></li>
          </ul>
        </li>
        <li class="last"><a class="active" href="http://127.0.0.1:8887/home/master_project/newaccount.html">----------</a>
          <ul>
            <li><a href="#">----------</a></li>
            <li><a href="#">----------</a></li>
            <li><a href="#">----------</a></li>
          </ul>
        </li>
      </ul>
    </div>-->
    <br class="clear" />
  </div>
</div>





<div class="wrapper col3" >
  <div id="breadcrumb">
    <ul>
      <li class="first">File</li>
      <li>&#187;</li>
      <li><a href="#">Edit</a></li>
      <li>&#187;</li>
      <li><a href="#">Tools</a></li>
      <li>&#187;</li>
      <li><a href="#">Command</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Help</a></li>
    </ul>
  </div>
</div>








<div class="wrapper col4" style="color:#294E79; background-color:#FFFFFF;">
  <div id="container" style="color:#294E79; background-color:#FFFFFF;">
		<div id="middle" >
			<div id="leftmenu" >	
				<div class="leftmenu-top" ></div>
					<div class="leftmenu-middle" >
					
					<!--------------------- load conference------------------------>
					<!---------- step 1 connect--------------------------->
					<?php
						$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
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
											<span class="block bold" >Create New </span><span class="block">Conferences,Tracks, Reviewers and Users.</span><a href="#" class="notice-close"></a>
										</div>
										<div class="notice-bottom"></div>
								</div>
								
								
								
								
								
								
								<form action="" method="post" id="systemfunction" class="form pj-form" autocomplete="off" enctype="multipart/form-data" style="display: none;">
									<input type="hidden" id="action_name" name="user_create" value="1" />
									<p>
									<!--<label class="title">New Conferences</label>-->
										<input type="button" formaction="" value="New Conference" onclick="NewConference()" style="width:120px;height:25px">
									</p>
									<p>
									<!--<label class="title">New Tracks</label>-->
										<input type="button" formaction="" value="New Track"  onclick="NewTrack()" style="width:120px;height:25px">
									</p>
									<p>
									<!--<label class="title">New Reviewers</label>-->
										<input type="button" formaction="" value="New Reviewers"  onclick="NewReviewer()" style="width:120px;height:25px"></td>
									</p>
								</form>
								
								
								
								

								
								<form action="create2.php" method="post" id="createUser" class="form pj-form" autocomplete="off" enctype="multipart/form-data"  onsubmit="return ValidateFormuser(this);" style="display: none;">
									<input type="hidden" id="action_name" name="user_create" value="1" />
									please fill out the following form . the required are marked by(*)
Note that most commmon reason for failing to create an account is incorrect email address so please type your email address correctly.


for User user@user.com for Admin admin@admin.com
		
      <p>
			<label class="title">User/Admin  name (*)</label>
			<span class="inline_block">
				<input type="text" name="uname" class="pj-form-field w300 required" data-msg-required="This field is required.">
			</span>
		</p>
		<p>
			<label class="title"> First name (*)</label>
			<span class="inline_block">
				<input type="text" name="fname" class="pj-form-field w300 required" data-msg-required="This field is required.">
			</span>
		</p>
<p>
			<label class="title"> Last name(*)</label>
			<span class="inline_block">
				<input type="text" name="lname" class="pj-form-field w300 required" data-msg-required="This field is required.">
			</span>
		</p>
		
		<p>
			<label class="title"> E-mail (*)</label>
			<span class="inline_block">
				<input type="text" name="email" class="pj-form-field w300 required" data-msg-required="This field is required.">
			</span>
		</p>
<p>
			<label class="title"> Retype E-mail(*)</label>
			<span class="inline_block">
				<input type="text" name="remail" class="pj-form-field w300 required" data-msg-required="This field is required.">
			</span>
		</p>
		
		<p>
			<label class="title">Company/organization </label>
			<span class="inline_block">
				<input type="text" name="company" id="company" class="pj-form-field w300">
			</span>
		</p>
		<p>
			<label class="title">Web Site</label>
			<span class="inline_block">
			<input type="text" name="web" class="pj-form-field w300">
				
			</span>
		</p>
		<p>
			<label class="title">Phone</label>
			<span class="inline_block">
				<input type="text" name="phone" id="phone" class="pj-form-field w300">
			</span>
		</p>
		
		<p>
			<label class="title">Address Line 1  (*) </label>
			<span class="inline_block">
				<input type="text" name="aline1" class="pj-form-field w300">
			</span>
		</p>
		<p>
			<label class="title">Address Line 2  (*) </label>
			<span class="inline_block">
				<input type="text" name="aline2" class="pj-form-field w300">
			</span>
		</p>
		<p>
			<label class="title">City</label>
			<span class="inline_block">
				<input type="text" name="city" id="city" class="pj-form-field w300">
			</span>
		</p>
		<p>
			<label class="title">Post Code</label>
			<span class="inline_block">
				<input type="text" name="post" class="pj-form-field w300">
			</span>
		</p>
		<p>
			<label class="title">Country</label>
			<span class="inline_block">
				<select id="country" name="country" class="pj-form-field 250">
					<option value="">-- Choose--</option>
					<option value="1">Afghanistan</option><option value="2">?and Islands</option><option value="3">Albania</option><option value="4">Algeria</option><option value="5">American Samoa</option><option value="6">Andorra</option><option value="7">Angola</option><option value="8">Anguilla</option><option value="9">Antarctica</option><option value="10">Antigua and Barbuda</option><option value="11">Argentina</option><option value="12">Armenia</option><option value="13">Aruba</option><option value="14">Australia</option><option value="15">Austria</option><option value="16">Azerbaijan</option><option value="17">Bahamas</option><option value="18">Bahrain</option><option value="19">Bangladesh</option><option value="20">Barbados</option><option value="21">Belarus</option><option value="22">Belgium</option><option value="23">Belize</option><option value="24">Benin</option><option value="25">Bermuda</option><option value="26">Bhutan</option><option value="27">Bolivia, Plurinational State of</option><option value="28">Bonaire, Sint Eustatius and Saba</option><option value="29">Bosnia and Herzegovina</option><option value="30">Botswana</option><option value="31">Bouvet Island</option><option value="32">Brazil</option><option value="33">British Indian Ocean Territory</option><option value="34">Brunei Darussalam</option><option value="35">Bulgaria</option><option value="36">Burkina Faso</option><option value="37">Burundi</option><option value="38">Cambodia</option><option value="39">Cameroon</option><option value="40">Canada</option><option value="41">Cape Verde</option><option value="42">Cayman Islands</option><option value="43">Central African Republic</option><option value="44">Chad</option><option value="45">Chile</option><option value="46">China</option><option value="47">Christmas Island</option><option value="48">Cocos array(Keeling) Islands</option><option value="49">Colombia</option><option value="50">Comoros</option><option value="51">Congo</option><option value="52">Congo, the Democratic Republic of the</option><option value="53">Cook Islands</option><option value="54">Costa Rica</option><option value="55">C??d'Ivoire</option><option value="56">Croatia</option><option value="57">Cuba</option><option value="58">Cura?</option><option value="59">Cyprus</option><option value="60">Czech Republic</option><option value="61">Denmark</option><option value="62">Djibouti</option><option value="63">Dominica</option><option value="64">Dominican Republic</option><option value="65">Ecuador</option><option value="66">Egypt</option><option value="67">El Salvador</option><option value="68">Equatorial Guinea</option><option value="69">Eritrea</option><option value="70">Estonia</option><option value="71">Ethiopia</option><option value="72">Falkland Islands array(Malvinas)</option><option value="73">Faroe Islands</option><option value="74">Fiji</option><option value="75">Finland</option><option value="76">France</option><option value="77">French Guiana</option><option value="78">French Polynesia</option><option value="79">French Southern Territories</option><option value="80">Gabon</option><option value="81">Gambia</option><option value="82">Georgia</option><option value="83">Germany</option><option value="84">Ghana</option><option value="85">Gibraltar</option><option value="86">Greece</option><option value="87">Greenland</option><option value="88">Grenada</option><option value="89">Guadeloupe</option><option value="90">Guam</option><option value="91">Guatemala</option><option value="92">Guernsey</option><option value="93">Guinea</option><option value="94">Guinea-Bissau</option><option value="95">Guyana</option><option value="96">Haiti</option><option value="97">Heard Island and McDonald Islands</option><option value="98">Holy See array(Vatican City State)</option><option value="99">Honduras</option><option value="100">Hong Kong</option><option value="101">Hungary</option><option value="102">Iceland</option><option value="103">India</option><option value="104">Indonesia</option><option value="105">Iran, Islamic Republic of</option><option value="106">Iraq</option><option value="107">Ireland</option><option value="108">Isle of Man</option><option value="109">Israel</option><option value="110">Italy</option><option value="111">Jamaica</option><option value="112">Japan</option><option value="113">Jersey</option><option value="114">Jordan</option><option value="115">Kazakhstan</option><option value="116">Kenya</option><option value="117">Kiribati</option><option value="118">Korea, Democratic People's Republic of</option><option value="119">Korea, Republic of</option><option value="120">Kuwait</option><option value="121">Kyrgyzstan</option><option value="122">Lao People's Democratic Republic</option><option value="123">Latvia</option><option value="124">Lebanon</option><option value="125">Lesotho</option><option value="126">Liberia</option><option value="127">Libya</option><option value="128">Liechtenstein</option><option value="129">Lithuania</option><option value="130">Luxembourg</option><option value="131">Macao</option><option value="132">Macedonia, The Former Yugoslav Republic of</option><option value="133">Madagascar</option><option value="134">Malawi</option><option value="135">Malaysia</option><option value="136">Maldives</option><option value="137">Mali</option><option value="138">Malta</option><option value="139">Marshall Islands</option><option value="140">Martinique</option><option value="141">Mauritania</option><option value="142">Mauritius</option><option value="143">Mayotte</option><option value="144">Mexico</option><option value="145">Micronesia, Federated States of</option><option value="146">Moldova, Republic of</option><option value="147">Monaco</option><option value="148">Mongolia</option><option value="149">Montenegro</option><option value="150">Montserrat</option><option value="151">Morocco</option><option value="152">Mozambique</option><option value="153">Myanmar</option><option value="154">Namibia</option><option value="155">Nauru</option><option value="156">Nepal</option><option value="157">Netherlands</option><option value="158">New Caledonia</option><option value="159">New Zealand</option><option value="160">Nicaragua</option><option value="161">Niger</option><option value="162">Nigeria</option><option value="163">Niue</option><option value="164">Norfolk Island</option><option value="165">Northern Mariana Islands</option><option value="166">Norway</option><option value="167">Oman</option><option value="168">Pakistan</option><option value="169">Palau</option><option value="170">Palestine, State of</option><option value="171">Panama</option><option value="172">Papua New Guinea</option><option value="173">Paraguay</option><option value="174">Peru</option><option value="175">Philippines</option><option value="176">Pitcairn</option><option value="177">Poland</option><option value="178">Portugal</option><option value="179">Puerto Rico</option><option value="180">Qatar</option><option value="181">R?ion</option><option value="182">Romania</option><option value="183">Russian Federation</option><option value="184">Rwanda</option><option value="185">Saint Barth?my</option><option value="186">Saint Helena, Ascension and Tristan da Cunha</option><option value="187">Saint Kitts and Nevis</option><option value="188">Saint Lucia</option><option value="189">Saint Martin array(French part)</option><option value="190">Saint Pierre and Miquelon</option><option value="191">Saint Vincent and the Grenadines</option><option value="192">Samoa</option><option value="193">San Marino</option><option value="194">Sao Tome and Principe</option><option value="195">Saudi Arabia</option><option value="196">Senegal</option><option value="197">Serbia</option><option value="198">Seychelles</option><option value="199">Sierra Leone</option><option value="200">Singapore</option><option value="201">Sint Maarten array(Dutch part)</option><option value="202">Slovakia</option><option value="203">Slovenia</option><option value="204">Solomon Islands</option><option value="205">Somalia</option><option value="206">South Africa</option><option value="207">South Georgia and the South Sandwich Islands</option><option value="208">South Sudan</option><option value="209">Spain</option><option value="210">Sri Lanka</option><option value="211">Sudan</option><option value="212">Suriname</option><option value="213">Svalbard and Jan Mayen</option><option value="214">Swaziland</option><option value="215">Sweden</option><option value="216">Switzerland</option><option value="217">Syrian Arab Republic</option><option value="218">Taiwan, Province of China</option><option value="219">Tajikistan</option><option value="220">Tanzania, United Republic of</option><option value="221">Thailand</option><option value="222">Timor-Leste</option><option value="223">Togo</option><option value="224">Tokelau</option><option value="225">Tonga</option><option value="226">Trinidad and Tobago</option><option value="227">Tunisia</option><option value="228">Turkey</option><option value="229">Turkmenistan</option><option value="230">Turks and Caicos Islands</option><option value="231">Tuvalu</option><option value="232">Uganda</option><option value="233">Ukraine</option><option value="234">United Arab Emirates</option><option value="235">United Kingdom</option><option value="236">United States</option><option value="237">United States Minor Outlying Islands</option><option value="238">Uruguay</option><option value="239">Uzbekistan</option><option value="240">Vanuatu</option><option value="241">Venezuela, Bolivarian Republic of</option><option value="242">Viet Nam</option><option value="243">Virgin Islands, British</option><option value="244">Virgin Islands, U.S.</option><option value="245">Wallis and Futuna</option><option value="246">Western Sahara</option><option value="247">Yemen</option><option value="248">Zambia</option><option value="249">Zimbabwe</option>				</select>
			</span>
		</p>
		<p>
			<label class="title">Password</label>
			<span class="pj-form-field-custom pj-form-field-custom-before">
				<span class="pj-form-field-before"><abbr class="pj-form-field-icon-password"></abbr></span>
				<input type="password" name="pass" class="pj-form-field required w200" data-msg-required="This field is required.">
			</span>
		</p>
		<p>
			<label class="title"> Retype Password</label>
			<span class="pj-form-field-custom pj-form-field-custom-before">
				<span class="pj-form-field-before"><abbr class="pj-form-field-icon-password"></abbr></span>
				<input type="password" name="rpass" class="pj-form-field required w200" data-msg-required="This field is required.">
			</span>
		</p>
		
		<p>
			<label class="title">&nbsp;</label>
			<input type="submit" value="Save" class="pj-button">
	
		</p>
	
				Note : leave first name if you do not have one . if you  are not sure how divid your name into the first and last name, 

you may also be interesed about our policy for using personal information<a href="http://127.0.0.1:8887/home/master_project/policy.PHP" target="_blank">Our Policy</a> <p></p>	
							
								</form>
								
								
								
								
								
								
								
								
								
								
								
								
								
							</div>
						<div class="content-bottom"></div>
				</div> <!-- content -->
				<div class="clear_both"></div>	
			</div> <!-- middle -->	
			
			
			
			
			
			
			
			
			
<!------------------------------------------------------- php ang design of table (conference)------------------------------------------------------------------->					
			
			
		<div class="wrapper col3" style="color:#294E79; background-color:#FFFFFF;" >	
				<div class="fl_right"  >
					<?php
						$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
						if (!$Conn)
							{exit("Connection Failed: " . $conn);}

							$sql = "SELECT Max(conference.ConferenceID) AS MaxOfConferenceID FROM conference";
							$result=odbc_exec($Conn,$sql);
							while(odbc_fetch_row($result)){
							for($i=1;$i<=odbc_num_fields($result);$i++){
							$max = odbc_result($result,$i);
																		}
															}
					?>
 
 <!-- target="store-credentials"-->
				<form name="conference-form" action="conference-connect.php"  method="post" id="NewConference"   onsubmit="return ValidateForm(this);" style="display: none;" >
					
						<table style="color:#294E79; background-color:#FFFFFF; font-size: 100%;">
                        <tr>
							<th align="left">Conference ID:</th>
                            <td align="left"> <input id="Conference_ID" type="text" name="Conference_ID" maxlength="50" size="5" value="<?php echo $max+1;?>"></td>
						</tr>
						<tr>
							<th align="left"> Conference Name: </th>
							<td align="left" width="70%"> <input id="Conference_Name" type="text" name="Conference_Name" maxlength="100" size="35"></td>
						</tr>	                
                        <tr>   
							<th align="left">Start Date: </th>
							<td align="left"> <input id="Start_Date" type="date" name="Start_Date"> </td>
						</tr>
                        <tr>   
							<th align="left">Select a time: </th>
							<td align="left"> <input id="Select_a_time" type="time" name="Select_a_time"> </td>
						</tr>
						<tr>
							<th align="left">End Date:</th>
                            <td align="left"> <input id="End_Date" type="date" name="End_Date"> </td>
						</tr>
						<tr>
                            <th align="left">Location:</th>
                            <td align="left"> <input id="Location" type="text" name="Location" size="35"</td>
                        </tr>               
                         <tr>
							<td align="center"> <input type="submit" value="Insert" style="color:black;" ></td>
                            <td align="center" > <input type="reset" value="Clear"></td>
                        </tr>    
                        
					</table>
			
				</form>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------->
		
		
		
		
		
		
		
		
		
		
		
		
	
<!------------------------------------------------------- php ang design of table (Track)------------------------------------------------------------------->				
					<?php
						$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
						if (!$Conn)
						{exit("Connection Failed: " . $conn);}

						$sql = "SELECT ConferenceName  FROM conference where ConferenceID=(SELECT Max(conference.ConferenceID) AS MaxOfConferenceID FROM conference)";
						$result=odbc_exec($Conn,$sql);
						while(odbc_fetch_row($result)){
						for($i=1;$i<=odbc_num_fields($result);$i++){
						$lastName = odbc_result($result,$i);
																	}
														}
					?>
 
 <!-- target="store-credentials"-->
 
				<form  action="track-connect.php" method="post" onsubmit="return checkDropdown();" id="NewTrack"   style="display: none;">
					<table style="color:#294E79; background-color:#FFFFFF; font-size: 100%;">
						<tr>
							<th align="left"> Conference Name: </th>
							<td align="left" width="70%"> <input type="text" name="Conference_Name" maxlength="100" size="35" value="<?php echo $lastName;?>"></td>
                        </tr>
						<tr>
							<th align="left"> Track Name: </th>
							<td align="left" width="50%"><select id="Track_Name" name="Track_Name"><option></option>
                                                           <?php 
																$sql = "SELECT trackName FROM track";
																$result=odbc_exec($Conn,$sql);
																while ($row = odbc_fetch_array($result)){
																echo "<option value=\"trackName\">" . $row['trackName'] . "</option>";}															
															?>
                                                         </select>
							</td>
						</tr>
						<tr>
							<th align="left">Track ID:</th>
                            <td align="left"> <select id="Track_ID"  name="Track_ID" ><option></option><!--  name="Track_ID[]"     multiple="multiple" -->
                                                           <?php 
																$sql = "SELECT trackID FROM track";
																$result=odbc_exec($Conn,$sql);
																while ($row = odbc_fetch_array($result)){
																echo "<option value=\"trackID\">" . $row['trackID'] . "</option>";}															
															?>
                                                         </select>
                                                         </select>
							</td>
						</tr>                       
                        <tr>
							<td align="center"> <input type="submit" value="submit" style="color:black;"  ></td>
							<td></td>
						</tr>    
                        
					</table>
				</form>
		
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------->		
		
		






<!------------------------------------------------------- php ang design of table (Reviewer)------------------------------------------------------------------->		
	
					<?php
						$Conn = odbc_connect ( "meshaal" , "" , ""  );// odbc name
						if (!$Conn)
						{exit("Connection Failed: " . $conn);}

						$sql = "SELECT Max(reviewers.ReviewerID) AS MaxOfReviewerID FROM reviewers";
						$result=odbc_exec($Conn,$sql);
						while(odbc_fetch_row($result)){
						for($i=1;$i<=odbc_num_fields($result);$i++){
						$max = odbc_result($result,$i);
																	}
														}
					?>
 
 
 
 <!-- target="store-credentials"-->
 
					<form name="reviewers-form" action="reviewers-conn.php"  method="post"   id="NewReviewer"  onsubmit="return ValidateForm2(this);" style="display: none;">
						<table style="color:#294E79; background-color:#FFFFFF; font-size: 100%;">
							<tr>
								<th align="left"><b>Reviewer ID:</b></th>
								<td align="left"> <input type="text" name="Reviewer_ID" id="Reviewer_ID" maxlength="50" size="5" value="<?php echo $max+1;?>"  ></td>
							</tr>
							<tr>
								<th align="left"><b>Reviewer Name:</b> </th>
								<td align="left" width="70%"> <input type="text" name="Reviewer_Name" id="Reviewer_Name" maxlength="100" size="35" </td>
							</tr> 
							<tr>   
								<th align="left"><b>Reviewer E-mail:</b></th>
								<td align="left"> <input id="FromEmailAddress" type="email" name="Reviewer_Email" size="25" autocomplete="off" value="" autocorrect="off" autocapitalize="off" spellcheck="false" aria-required="true"  </td>
							</tr>
							<tr>
								<th align="left"><b>Reviewer Track:</b></th>
								<td align="left" width="50%"><select id="Reviewer_Track" name="Reviewer_Track" >
                                                           <option></option>
                                                           <option value="Math">Math</option>
                                                           <option value="Statistical">Statistical</option>
                                                           <option value="CS">CS</option>
                                                           <option value="IS">IS</option>
                                                           <option value="IT">IT</option>
                                                           <option value="Software Engineering">Software Engineering</option>
                                                         </select>
								</td>
							</tr>
							<tr>
								<td align="center"> <input type="submit" value="Insert" style="color:black;" ></td>
								<td align="center" > <input type="reset" value="Clear"></td>
							</tr>                           
						</table>
					</form>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------->	










	
		
		
		
		
		
		
		
		
				</div>	
			</div>
	</div> <!-- container -->	
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
    <p class="fl_left"> <a href="#">ISSR Conference</a> ISSR &copy;2016 <a href="#">Cairo University</a></p>
    <p class="fl_right">product by <a target="_blank" href="" title="">ISSR Conference</a></p>
    <br class="clear" />
  </div>
</div>







	
</body>
</html>