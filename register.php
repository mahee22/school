<html>
<link href="CSS/layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/menu.css" rel="stylesheet" type="text/css" />
<script src="calender/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="calender/datepicker.css" />
<script src="calender/datepicker.js"></script>
<title> log-in</title>
<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
<script type="text/JavaScript">

<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<!--calender script
-->
<script type="text/javascript">
$(document).ready(function() {
	
		$('#dob').Zebra_DatePicker({
		direction: -1,
		view: 'years'
	});
});

</script>
</head>
<div id="Holder">
<div id="header"><img src= "Image/title.png" height="120" width="980"  />  </div>
<div id="navbar">
<nav>
  <ul>
	<li><a href="index.html">HOME</a></li>
	
  </ul>
</nav>
</div>
<div id="content">
 <p align="center" class="style1">REGISTRATION FORM    </p>
 <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
                <table width="400" border="3" align="center" bordercolor="#0000FF">
                <tr>
                <td align="center">FirstName</td>
                <td><label><input name="FirstName" type="text" id="FirstName" onblur="MM_validateForm('FirstName','','R');return document.MM_returnValue" />
                </label></td></tr>
                <tr>
				<td align="center">LastName</td>
                <td><label><input name="LastName" type="text" id="LastName" onblur="MM_validateForm('LastName','','R');return document.MM_returnValue"/>
                </label></td></tr> 
				<tr>
				<td align="center">MiddleName</td>
				<td><label><input name="MiddleName" type="text" id="MiddleName" onblur="MM_validateForm('MiddleName','','R');return document.MM_returnValue" />
				</label></td></tr>
				<tr>
				<td align="center">Gender</td> <td><label>Male</label><input name="Gender" type="radio" id="Gender" value="Male" />
                  <label>Female</label><input type="radio" name="Gender" value="Female" id="Female" /></td> </tr>
                <tr><td>MaritalStatus</td>
                <td><label> Single</label>
                        <input name="MaritalStatus" type="radio" id="MaritalStatus_0" value="Single" />
                        <label>Married</label>
                        <input type="radio" name="MaritalStatus" value="Married" id="MaritalStatus_1" />
                  </td> </tr>
                  <tr>
				  <td align="center">Country</td>
				  <td><select name="country">

<option value="" selected="selected">Select Country</option>

<option value="United States">United States</option>
	
<option value="United Kingdom">United Kingdom</option>

<option value="Afghanistan">Nigeria</option>

<option value="Saudi Arabia">Saudi Arabia</option>

<option value="Algeria">Algeria</option>

<option value="Germany">Germany</option>

<option value="France">France</option>

<option value="Angola">Angola</option>

<option value="Egypt">Egypt</option>

<option value="Antarctica">Brazil</option>

<option value="Antigua and Barbuda">Antigua and Barbuda</option>

<option value="Argentina">Argentina</option>

<option value="Armenia">Armenia</option>

<option value="Aruba">Aruba</option>

<option value="Australia">Australia</option>

<option value="Austria">Austria</option>

<option value="Azerbaijan">Azerbaijan</option>

<option value="Bahamas">Bahamas</option>

<option value="Bahrain">Bahrain</option>

<option value="Bangladesh">Bangladesh</option>

<option value="Barbados">Barbados</option>

<option value="Belarus">Belarus</option>

<option value="Belgium">Belgium</option>

<option value="Belize">Belize</option>

<option value="Benin">Benin</option>

<option value="Bermuda">Bermuda</option>

<option value="Bhutan">Bhutan</option>

<option value="Bolivia">Bolivia</option>

<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>

<option value="Botswana">Botswana</option>

<option value="Bouvet Island">Bouvet Island</option>

<option value="Brazil">Brazil</option>

<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>

<option value="Brunei Darussalam">Brunei Darussalam</option>

<option value="Bulgaria">Bulgaria</option>

<option value="Burkina Faso">Burkina Faso</option>

<option value="Burundi">Burundi</option>

<option value="Cambodia">Cambodia</option>

<option value="Cameroon">Cameroon</option>

<option value="Canada">Canada</option>

<option value="Cape Verde">Cape Verde</option>

<option value="Cayman Islands">Cayman Islands</option>

<option value="Central African Republic">Central African Republic</option>

<option value="Chad">Chad</option>

<option value="Chile">Chile</option>

<option value="China">China</option>

<option value="Christmas Island">Christmas Island</option>

<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>

<option value="Colombia">Colombia</option>

<option value="Comoros">Comoros</option>

<option value="Congo">Congo</option>

<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>

<option value="Cook Islands">Cook Islands</option>

<option value="Costa Rica">Costa Rica</option>

<option value="Cote D'ivoire">Cote D'ivoire</option>

<option value="Croatia">Croatia</option>

<option value="Cuba">Cuba</option>

<option value="Cyprus">Cyprus</option>

<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>

<option value="Djibouti">Djibouti</option>

<option value="Dominica">Dominica</option>

<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>

<option value="Egypt">Egypt</option>

<option value="El Salvador">El Salvador</option>

<option value="Equatorial Guinea">Equatorial Guinea</option>

<option value="Eritrea">Eritrea</option>

<option value="Estonia">Estonia</option>

<option value="Ethiopia">Ethiopia</option>

<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>

<option value="Fiji">Fiji</option>

<option value="Finland">Finland</option>

<option value="France">France</option>

<option value="French Guiana">French Guiana</option>

<option value="French Polynesia">French Polynesia</option>

<option value="French Southern Territories">French Southern Territories</option>

<option value="Gabon">Gabon</option>

<option value="Gambia">Gambia</option>

<option value="Georgia">Georgia</option>

<option value="Germany">Germany</option>

<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>

<option value="Greece">Greece</option>

<option value="Greenland">Greenland</option>

<option value="Grenada">Grenada</option>

<option value="Guadeloupe">Guadeloupe</option>

<option value="Guam">Guam</option>

<option value="Guatemala">Guatemala</option>

<option value="Guinea">Guinea</option>

<option value="Guinea-bissau">Guinea-bissau</option>

<option value="Guyana">Guyana</option>

<option value="Haiti">Haiti</option>

<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>

<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>

<option value="Honduras">Honduras</option>

<option value="Hong Kong">Hong Kong</option>

<option value="Hungary">Hungary</option>

<option value="Iceland">Iceland</option>

<option value="India">India</option>

<option value="Indonesia">Indonesia</option>

<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>

<option value="Iraq">Iraq</option>

<option value="Ireland">Ireland</option>

<option value="Israel">Israel</option>

<option value="Italy">Italy</option>

<option value="Jamaica">Jamaica</option>

<option value="Japan">Japan</option>

<option value="Jordan">Jordan</option>

<option value="Kazakhstan">Kazakhstan</option>

<option value="Kenya">Kenya</option>

<option value="Kiribati">Kiribati</option>

<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>

<option value="Korea, Republic of">Korea, Republic of</option>

<option value="Kuwait">Kuwait</option>

<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>

<option value="Latvia">Latvia</option>

<option value="Lebanon">Lebanon</option>

<option value="Lesotho">Lesotho</option>

<option value="Liberia">Liberia</option>

<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

<option value="Liechtenstein">Liechtenstein</option>

<option value="Lithuania">Lithuania</option>

<option value="Luxembourg">Luxembourg</option>

<option value="Macao">Macao</option>

<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>

<option value="Madagascar">Madagascar</option>

<option value="Malawi">Malawi</option>

<option value="Malaysia">Malaysia</option>

<option value="Maldives">Maldives</option>

<option value="Mali">Mali</option>

<option value="Malta">Malta</option>

<option value="Marshall Islands">Marshall Islands</option>

<option value="Martinique">Martinique</option>

<option value="Mauritania">Mauritania</option>

<option value="Mauritius">Mauritius</option>

<option value="Mayotte">Mayotte</option>

<option value="Mexico">Mexico</option>

<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>

<option value="Moldova, Republic of">Moldova, Republic of</option>

<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>

<option value="Montserrat">Montserrat</option>

<option value="Morocco">Morocco</option>

<option value="Mozambique">Mozambique</option>

<option value="Myanmar">Myanmar</option>

<option value="Namibia">Namibia</option>

<option value="Nauru">Nauru</option>

<option value="Nepal">Nepal</option>

<option value="Netherlands">Netherlands</option>

<option value="Netherlands Antilles">Netherlands Antilles</option>

<option value="New Caledonia">New Caledonia</option>

<option value="New Zealand">New Zealand</option>

<option value="Nicaragua">Nicaragua</option>

<option value="Niger">Niger</option>

<option value="Nigeria">Nigeria</option>

<option value="Niue">Niue</option>

<option value="Norfolk Island">Norfolk Island</option>

<option value="Northern Mariana Islands">Northern Mariana Islands</option>

<option value="Norway">Norway</option>

<option value="Oman">Oman</option>

<option value="Pakistan">Pakistan</option>

<option value="Palau">Palau</option>

<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>

<option value="Panama">Panama</option>

<option value="Papua New Guinea">Papua New Guinea</option>

<option value="Paraguay">Paraguay</option>

<option value="Peru">Peru</option>

<option value="Philippines">Philippines</option>

<option value="Pitcairn">Pitcairn</option>

<option value="Poland">Poland</option>

<option value="Portugal">Portugal</option>

<option value="Puerto Rico">Puerto Rico</option>

<option value="Qatar">Qatar</option>

<option value="Reunion">Reunion</option>

<option value="Romania">Romania</option>

<option value="Russian Federation">Russian Federation</option>

<option value="Rwanda">Rwanda</option>

<option value="Saint Helena">Saint Helena</option>

<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

<option value="Saint Lucia">Saint Lucia</option>

<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>

<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>

<option value="Samoa">Samoa</option>

<option value="San Marino">San Marino</option>

<option value="Sao Tome and Principe">Sao Tome and Principe</option>

<option value="Saudi Arabia">Saudi Arabia</option>

<option value="Senegal">Senegal</option>

<option value="Serbia and Montenegro">Serbia and Montenegro</option>

<option value="Seychelles">Seychelles</option>

<option value="Sierra Leone">Sierra Leone</option>

<option value="Singapore">Singapore</option>

<option value="Slovakia">Slovakia</option>

<option value="Slovenia">Slovenia</option>

<option value="Solomon Islands">Solomon Islands</option>

<option value="Somalia">Somalia</option>

<option value="South Africa">South Africa</option>

<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>

<option value="Spain">Spain</option>

<option value="Sri Lanka">Sri Lanka</option>

<option value="Sudan">Sudan</option>

<option value="Suriname">Suriname</option>

<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>

<option value="Swaziland">Swaziland</option>

<option value="Sweden">Sweden</option>

<option value="Switzerland">Switzerland</option>

<option value="Syrian Arab Republic">Syrian Arab Republic</option>

<option value="Taiwan, Province of China">Taiwan, Province of China</option>

<option value="Tajikistan">Tajikistan</option>

<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

<option value="Thailand">Thailand</option>

<option value="Timor-leste">Timor-leste</option>

<option value="Togo">Togo</option>

<option value="Tokelau">Tokelau</option>

<option value="Tonga">Tonga</option>

<option value="Trinidad and Tobago">Trinidad and Tobago</option>

<option value="Tunisia">Tunisia</option>

<option value="Turkey">Turkey</option>

<option value="Turkmenistan">Turkmenistan</option>

<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>

<option value="Tuvalu">Tuvalu</option>

<option value="Uganda">Uganda</option>

<option value="Ukraine">Ukraine</option>

<option value="United Arab Emirates">United Arab Emirates</option>

<option value="United Kingdom">United Kingdom</option>

<option value="United States">United States</option>

<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>

<option value="Uruguay">Uruguay</option>

<option value="Uzbekistan">Uzbekistan</option>

<option value="Vanuatu">Vanuatu</option>

<option value="Venezuela">Venezuela</option>

<option value="Viet Nam">Viet Nam</option>

<option value="Virgin Islands, British">Virgin Islands, British</option>

<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>

<option value="Wallis and Futuna">Wallis and Futuna</option>

<option value="Western Sahara">Western Sahara</option>

<option value="Yemen">Yemen</option>

<option value="Zambia">Zambia</option>

<option value="Zimbabwe">Zimbabwe</option>

</select></td></tr>
<tr>
				  <td align="center">State</td>
				  <td><select name="State">

<option value="" selected="selected">Select State</option>
<option value="Kano">Kano</option>
	
<option value="Kaduna">Kaduna</option>

<option value="Abuja">Abuja</option>

<option value="Adamawa">Adamawa</option>

<option value="Bauchi">Bauchi</option>

</select>  
<tr>
                <td align="center">Local Govt</td>
                <td><label><input type="text" name="City" id="City" /></label></td></tr> 
                <tr>
                <td align="center">Date of Birth</td>
                <td><label><input type="text" name="dob" id="dob" />
                </label></td></tr> 
<tr>
                <td align="center">UserName</td>
                <td><label><input name="UserName" type="text" id="UserName" onblur="MM_validateForm('FirstName','','R','UserName','','R');return document.MM_returnValue" />
                </label></td></tr>  
				<tr>
                <td align="center">Password</td>
                <td><label><input name="Password" type="text" id="Password" onblur="MM_validateForm('Password','','R');return document.MM_returnValue" />
                </label></td></tr>
				<tr>
                <td align="center">Email</td>
                <td><label>
                <input name="Email" type="text" id="Email" onblur="MM_validateForm('Email','','RisEmail');return document.MM_returnValue" />
                </label></td></tr>             
      </table><p>
	  
		
		<center><B><h2><a href="index.html">Back</a> &nbsp; &nbsp;&nbsp;<a href="success.php">Save </a> &nbsp; &nbsp;&nbsp;<a href="">Clear</a>
		</B></h2></center>
		
      <input type="hidden" name="MM_insert" value="form1">
 </form>              
              <div id="footer"><img src= "Image/ft.png" height="52" width="980"  /></div>
</div>
</div>
</div>
</div>
</body>
</html>
