<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php $thisPage="Medical Insurance Quote Request | for businesses and groups"; ?>
<?php include("_html_head.php"); ?>
<?php include("_js_moo_and_boxover.php"); ?>
<script type="text/javascript" src="validation/validation_functions.js"></script>
<script type="text/javascript" src="validation/medical-ap1.js"></script>
</head>
<body>
	
<div id="popup"></div>
<div id="wrapper-top">
<div id="mast">
<h1><a href="https://bmgadministrators.com/" title="home"><img src="images/logo.gif" alt="Benefits Management Group" /></a></h1>
	<ul id="nav">
		<li><a href="https://bmgadministrators.com/" id="navIndex">Home</a></li>
		<li><a href="https://bmgadministrators.com/contact.php" id="navContact">Contact</a></li>
		<li><a href="https://bmgadministrators.com/medical.php" id="navMedical" class="current">Medical</a></li>
		<li><a href="https://bmgadministrators.com/dental.php" id="navDental">Dental</a></li>
		<li><a href="https://bmgadministrators.com/vision.php" id="navVision">Vision</a></li>
		<li><a href="https://bmgadministrators.com/chiropractic.php" id="navChiropractic">Chiropractic</a></li>
	</ul>
</div><!-- /mast  -->

</div><!-- /wrapper-top -->

<div id="banner" class="banner-medical-ap"><!-- /SPECIFIC TO THIS PAGE -->
</div><!-- banner  -->

<div id="wrapper-subnav">
	<div id="subnav">
		<ul id="subnav">
			<li><a href="https://bmgadministrators.com/medical.php" id="subnavPi">Medical Insurance Information</a></li>
			<li><a href="https://bmgadministrators.com/medical-ap1.php" id="subnavMedApply1" class="current">Business / Group Application</a></li>
			<li><a href="https://bmgadministrators.com/medical-ap2.php" id="subnavMedApply2">Individual / Family Application</a></li>
		</ul>
	</div><!-- /subnav -->
</div><!-- /wrapper-subnav -->

<div id="errorDiv" style="display:none;">
</div><!-- /errorDiv -->

<div id="apptop"></div><!-- /apptop -->

<div id="applicationwrapper">
<div id="application">
<h2>Medical Insurance Quote Request</h2>
<h3>For businesses and groups</h3>
<!-- Form Action  -->
<form name="medicalap1" action="email_scripts/_medicalap1.php" method="post" id="medicalap1">
<!-- /Form Action  -->
<fieldset>
	<legend>Business Information</legend>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><label for="business_name">Business Name:</label><br /><input name="business_name" type="text" id="business_name" class="namefield"/></td>
	<td><label for="business_phone">Phone:</label><br /><input name="business_phone" type="text" id="business_phone" class="namefield"/></td>
	<td><label for="business_phone_ext"><small>(ext)</small></label><br /><input name="business_phone_ext" type="text" id="business_phone_ext" size="3"/></td>
  </tr>
  <tr>
    <td><label for="business_address">Mailing Address:</label><br /><input name="business_address" type="text" id="business_address" class="namefield"/></td>
	<td><label for="business_suite">Suite/Box:</label><br /><input name="business_suite" type="text" id="business_suite" size="3"/></td>
    <td><label for="business_city">City:</label><br /><input name="business_city" type="text" id="business_city"/></td>
    <td><label for="business_state">State:</label><br /><input name="business_state" type="text" id="business_state" size="3"/></td>
	<td><label for="business_zip">Zip:</label><br /><input name="business_zip" type="text" id="business_zip" size="7"/></td>
  </tr>
</table>
</fieldset>
<fieldset>
	<legend>Contact Information</legend>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><label for="contact_firstname">First Name:</label><br /><input name="contact_firstname" type="text" id="contact_firstname" class="namefield"/></td>
    <td><label for="contact_lastname">Last Name:</label><br /><input name="contact_lastname" type="text" id="contact_lastname" class="namefield"/></td>
	<td><label for="contact_email">Email:</label><br /><input name="contact_email" type="text" id="contact_email" class="namefield"/></td>
  </tr>
  <tr>
    <td><label for="contact_title">Business Title:</label><br /><input name="contact_title" type="text" id="contact_title" class="namefield"/></td>
    <td><label for="contact_phone">Phone:</label><br /><input name="contact_phone" type="text" id="contact_phone" class="namefield"/></td>
    <td><label for="contact_ext"><small>(ext)</small></label><br /><input name="contact_ext" type="text" id="contact_ext" size="3"/></td>
  </tr>
</table>
</fieldset>
<fieldset>
	<legend>Plan Coverage Details</legend>
	<table border="0" cellspacing="0" cellpadding="0">
  <tr rowspan="3">
    <td colspan="2" style="padding-bottom:15px;"><div id="coverage_error"><label for="applying_for"><strong>Type of Coverage Desired:</strong></label><span id="help_bug" title="header=[<img src='images/information.png' style='vertical-align:middle'>&nbsp;&nbsp;Coverage Types:] body=[To understand more about <strong>PPO</strong> vs <strong>HMO</strong> medical insurance, please select the product information tab above to learn more. Or, you can always call us as (951) 684-0211.] cssbody=[tip_body] cssheader=[tip_header]"><img src="images/help.png" alt="" width="16" height="16" border="none" /></span></div></td>
    <td width="278" style="padding-bottom:15px;padding-left:60px;" ><label for="effective_date"><strong>Requested Effective Date:</strong></label><span id="help_bug" title="header=[<img src='images/information.png' style='vertical-align:middle'>&nbsp;&nbsp;Effective Date:] body=[This is the date that you are requesting that your coverage become effective. Actual effective dates are determined by carrier.] cssbody=[tip_body] cssheader=[tip_header]"><img src="images/help.png" alt="" width="16" height="16" border="none" /></span></td>
  </tr>
  <tr>
    <td width="96"><input type="radio" name="applying_for" value="hmo_only" id="hmo_only" class="noborder"/> <label for="hmo_only">HMO</label></td>
	<td width="154"><input type="radio" name="applying_for" value="hmo_and_ppo" id="hmo_and_ppo" class="noborder"/> <label for="hmo_and_ppo">HMO &amp; PPO</label></td>
    <td style="padding-left:60px;"><small>(MM/DD/YYYY)</small></td>
  </tr>
  <tr>
    <td><input type="radio" name="applying_for" id="ppo_only" value="ppo_only" class="noborder" /> <label for="ppo_only">PPO</label></td>
	<td><input type="radio" name="applying_for" id="not_sure" value="not_sure" class="noborder" /> <label for="not_sure">Not Sure</label></td>
	<td style="padding-left:60px;"><input name="effective_month" type="text" id="effective_month" size="2"/> /01/ <input name="effective_year" type="text" id="effective_year" size="4"/></td>
  </tr>
</table>
</fieldset>
<fieldset>
	<legend>List of Employees:</legend>
	<p><em>* Please list the employees who will be covered by this medical policy.</em></p>
<table cellspacing="0" cellpadding="0" id="dependents">
  <tr>
    <td>First Name</td>
	<td>Last Name</td>
    <td>Sex</td>
	<td>Age</td>
    <td>Home Zip</td>
    <td>Coverage</td>
  </tr>
<!-- begin dependent -->
  <tr>
    <td><input name="dependent1_firstname" type="text" id="dependent1_firstname" class="shortnamefield" ></td>
	<td><input name="dependent1_lastname" type="text" id="dependent1_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent1_sex" value="m" id="dependent1_sex_m" class="noborder" /><label for="dependent1_sex_m">M</label>
	<input type="radio" name="dependent1_sex" value="f" id="dependent1_sex_f" class="noborder" /><label for="dependent1_sex_f">F</label></td>
	<td><input name="dependent1_age" type="text" id="dependent1_age" size="2"/></td>
	<td><input name="dependent1_zip" type="text" id="dependent1_zip" size="5"/></td>
    <td><select name="dependent1_coverage">
			<option value="employee">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent2_firstname" type="text" id="dependent2_firstname" class="shortnamefield" ></td>
	<td><input name="dependent2_lastname" type="text" id="dependent2_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent2_sex" value="m" id="dependent2_sex_m" class="noborder" /><label for="dependent2_sex_m">M</label>
	<input type="radio" name="dependent2_sex" value="f" id="dependent2_sex_f" class="noborder" /><label for="dependent2_sex_f">F</label></td>
	<td><input name="dependent2_age" type="text" id="dependent2_age" size="2"/></td>
	<td><input name="dependent2_zip" type="text" id="dependent2_zip" size="5"/></td>
    <td><select name="dependent2_coverage">
			<option value="employee">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent3_firstname" type="text" id="dependent3_firstname" class="shortnamefield" ></td>
	<td><input name="dependent3_lastname" type="text" id="dependent3_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent3_sex" value="m" id="dependent3_sex_m" class="noborder" /><label for="dependent3_sex_m">M</label>
	<input type="radio" name="dependent3_sex" value="f" id="dependent3_sex_f" class="noborder" /><label for="dependent3_sex_f">F</label></td>
	<td><input name="dependent3_age" type="text" id="dependent3_age" size="2"/></td>
	<td><input name="dependent3_zip" type="text" id="dependent3_zip" size="5"/></td>
    <td><select name="dependent3_coverage">
			<option value="employee">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent4_firstname" type="text" id="dependent4_firstname" class="shortnamefield" ></td>
	<td><input name="dependent4_lastname" type="text" id="dependent4_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent4_sex" value="m" id="dependent4_sex_m" class="noborder" /><label for="dependent4_sex_m">M</label>
	<input type="radio" name="dependent4_sex" value="f" id="dependent4_sex_f" class="noborder" /><label for="dependent4_sex_f">F</label></td>
	<td><input name="dependent4_age" type="text" id="dependent4_age" size="2"/></td>
	<td><input name="dependent4_zip" type="text" id="dependent4_zip" size="5"/></td>
    <td><select name="dependent4_coverage">
			<option value="employee_only">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent5_firstname" type="text" id="dependent5_firstname" class="shortnamefield" ></td>
	<td><input name="dependent5_lastname" type="text" id="dependent5_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent5_sex" value="m" id="dependent5_sex_m" class="noborder" /><label for="dependent5_sex_m">M</label>
	<input type="radio" name="dependent5_sex" value="f" id="dependent5_sex_f" class="noborder" /><label for="dependent5_sex_f">F</label></td>
	<td><input name="dependent5_age" type="text" id="dependent5_age" size="2"/></td>
	<td><input name="dependent5_zip" type="text" id="dependent5_zip" size="5"/></td>
    <td><select name="dependent5_coverage">
			<option value="employee_only">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent6_firstname" type="text" id="dependent6_firstname" class="shortnamefield" ></td>
	<td><input name="dependent6_lastname" type="text" id="dependent6_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent6_sex" value="m" id="dependent6_sex_m" class="noborder" /><label for="dependent6_sex_m">M</label>
	<input type="radio" name="dependent6_sex" value="f" id="dependent6_sex_f" class="noborder" /><label for="dependent6_sex_f">F</label></td>
	<td><input name="dependent6_age" type="text" id="dependent6_age" size="2"/></td>
	<td><input name="dependent6_zip" type="text" id="dependent6_zip" size="5"/></td>
    <td><select name="dependent6_coverage">
			<option value="employee_only">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent7_firstname" type="text" id="dependent7_firstname" class="shortnamefield" ></td>
	<td><input name="dependent7_lastname" type="text" id="dependent7_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent7_sex" value="m" id="dependent7_sex_m" class="noborder" /><label for="dependent7_sex_m">M</label>
	<input type="radio" name="dependent7_sex" value="f" id="dependent7_sex_f" class="noborder" /><label for="dependent7_sex_f">F</label></td>
	<td><input name="dependent7_age" type="text" id="dependent7_age" size="2"/></td>
	<td><input name="dependent7_zip" type="text" id="dependent7_zip" size="5"/></td>
    <td><select name="dependent7_coverage">
			<option value="employee_only">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent8_firstname" type="text" id="dependent8_firstname" class="shortnamefield" ></td>
	<td><input name="dependent8_lastname" type="text" id="dependent8_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent8_sex" value="m" id="dependent8_sex_m" class="noborder" /><label for="dependent8_sex_m">M</label>
	<input type="radio" name="dependent8_sex" value="f" id="dependent8_sex_f" class="noborder" /><label for="dependent8_sex_f">F</label></td>
	<td><input name="dependent8_age" type="text" id="dependent8_age" size="2"/></td>
	<td><input name="dependent8_zip" type="text" id="dependent8_zip" size="5"/></td>
    <td><select name="dependent8_coverage">
			<option value="employee_only">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent9_firstname" type="text" id="dependent9_firstname" class="shortnamefield" ></td>
	<td><input name="dependent9_lastname" type="text" id="dependent9_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent9_sex" value="m" id="dependent9_sex_m" class="noborder" /><label for="dependent9_sex_m">M</label>
	<input type="radio" name="dependent9_sex" value="f" id="dependent9_sex_f" class="noborder" /><label for="dependent9_sex_f">F</label></td>
	<td><input name="dependent9_age" type="text" id="dependent9_age" size="2"/></td>
	<td><input name="dependent9_zip" type="text" id="dependent9_zip" size="5"/></td>
    <td><select name="dependent9_coverage">
			<option value="employee_only">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
<!-- begin dependent -->
  <tr>
    <td><input name="dependent10_firstname" type="text" id="dependent10_firstname" class="shortnamefield" ></td>
	<td><input name="dependent10_lastname" type="text" id="dependent10_lastname" class="shortnamefield" ></td>
	<td><input type="radio" name="dependent10_sex" value="m" id="dependent10_sex_m" class="noborder" /><label for="dependent10_sex_m">M</label>
	<input type="radio" name="dependent10_sex" value="f" id="dependent10_sex_f" class="noborder" /><label for="dependent10_sex_f">F</label></td>
	<td><input name="dependent10_age" type="text" id="dependent10_age" size="2"/></td>
	<td><input name="dependent10_zip" type="text" id="dependent10_zip" size="5"/></td>
    <td><select name="dependent10_coverage">
			<option value="employee_only">Employee Only</option>
			<option value="employee_and_spouse">Employee + Spouse</option>
			<option value="employee_and_children">Employee + Children</option>
			<option value="employee_and_family">Employee + Family</option>
		</select></td>
  </tr>
<!-- end dependent -->
</table>
<p><small>* For your convenience, quote requests with more than 10 <br />employees may email or fax us a list at (951) 787-9273 </small></p>
</fieldset>
<p id="buttons-grey"><a href="javascript:submitForm();">Submit</a></p>
<p id="loading" style="display:none;text-align:center;"><br /><img src="images/loading.gif" alt="" /></p>
</form>
</div><!-- /application -->
</div><!-- /applicationwrapper -->
<div id="appbottom">
</div><!-- /appbottom -->

<?php include("_footer.php"); ?>

</body>
</html>