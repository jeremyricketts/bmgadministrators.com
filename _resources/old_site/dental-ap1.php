<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php $thisPage="PPO Dental Insurance Application"; ?>
<?php include("_html_head.php"); ?>
<?php include("_js_moo_and_boxover.php"); ?>
<script type="text/javascript" src="validation/validation_functions.js"></script>
<script type="text/javascript" src="validation/dental-ap1.js"></script>
</head>
<body>
	
<div id="popup"></div>
<script language="javascript" type="text/javascript">

window.onload = external;

function dep_wrap_open()
        {
            if ($('dependents_wrapper').style.display == 'none')
            {
				new Effect.BlindDown('dependents_wrapper');
				new Effect.Appear('dependents_wrapper');       
            }
       }
function dep_wrap_close()
		{
            if ($('dependents_wrapper').style.display != 'none')
            {
				new Effect.BlindUp('dependents_wrapper');
				new Effect.Fade('dependents_wrapper');            
            }
        }
</script>
<div id="wrapper-top">
<div id="mast">
<h1><a href="https://bmgadministrators.com/" title="home"><img src="images/logo.gif" alt="Benefits Management Group" /></a></h1>
	<ul id="nav">
		<li><a href="https://bmgadministrators.com/" id="navIndex">Home</a></li>
		<li><a href="https://bmgadministrators.com/contact.php" id="navContact">Contact</a></li>
		<li><a href="https://bmgadministrators.com/medical.php" id="navMedical">Medical</a></li>
		<li><a href="https://bmgadministrators.com/dental.php" id="navDental" class="current">Dental</a></li>
		<li><a href="https://bmgadministrators.com/vision.php" id="navVision">Vision</a></li>
		<li><a href="https://bmgadministrators.com/chiropractic.php" id="navChiropractic">Chiropractic</a></li>
	</ul>
</div><!-- /mast  -->

</div><!-- /wrapper-top -->

<div id="banner" class="banner-dental-ap"><!-- /SPECIFIC TO THIS PAGE -->
</div><!-- banner  -->

<div id="wrapper-subnav">
	<div id="subnav">
		<ul id="subnav">
			<li><a href="https://bmgadministrators.com/dental.php" id="subnavPi">Dental Insurance Information</a></li>
			<li><a href="https://bmgadministrators.com/dental-ap1.php" id="subnavDentApply1" class="current">HMO Dental Application</a></li>
			<li><a href="https://bmgadministrators.com/dental-ap2.php" id="subnavDentApply2">PPO Dental Application</a></li>
		</ul>
	</div><!-- /subnav -->
</div><!-- /wrapper-subnav -->

<div id="errorDiv" style="display:none;">
</div><!-- /errorDiv -->

<div id="apptop">
</div><!-- /apptop -->

<div id="applicationwrapper">
<div id="application">
<h2>PPO Dental Insurance Application</h2>
<h3>For individuals and families</h3>
<div id="sub-app-heading">To apply for Business/Group coverage, please <a href="contact.php" id="sub-app-heading">contact us</a> to begin the application process.</div>
<!-- Form Action  -->
<form name="dentalap1" action="email_scripts/_dentalap1.php" method="post" id="dentalap1">
<!-- /Form Action  -->
<fieldset>
	<legend>Your Information</legend>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><label for="firstname">First Name:</label><br /><input name="firstname" type="text" id="firstname" class="namefield"/></td>
    <td><label for="middlename">MI</label><br /><input name="middlename" type="text" id="middlename" size="2"/></td>
    <td colspan="2"><label for="lastname">Last Name:</label><br /><input name="lastname" type="text" id="lastname" class="namefield"/></td>
  </tr>
  <tr>
    <td><label for="address">Address:</label><br /><input name="address" type="text" id="address" class="namefield"/></td>
    <td><label for="city">City:</label><br /><input name="city" type="text" id="city"/></td>
    <td><label for="state">State:</label><br /><input name="state" type="text" id="state" size="3"/></td>
	<td><label for="zip">Zip:</label><br /><input name="zip" type="text" id="zip" size="7"/></td>
  </tr>
  <tr>
    <td><label for="social_security_number">Social Security No:</label><br /><input name="social_security_number" type="text" id="social_security_number" class="namefield"/></td>
    <td><label for="birthdate">Birthdate: <small>(MM/DD/YY)</small></label><br /><input name="birthdate" type="text" id="birthdate"/></td>
    <td colspan="2"><label for="sex" id="gender_area">Sex:</label><br />
	<input type="radio" name="sex" value="m" id="sex_m" class="noborder" /><label for="sex_m" style="margin-left:4px;">M</label>
	<input type="radio" name="sex" value="f" id="sex_f" class="noborder" /><label for="sex_f" style="margin-left:4px;">F</label></td>
	</tr>
	<tr>
    	<td><label for="phone">Phone: </label><br /><input name="phone" type="text" id="phone" class="namefield"/></td>
		<td><label for="ext"><small>(ext)</small></label><br /><input name="ext" type="text" id="ext" size="4"/></td>
		<td colspan="2"><label for="email">Email:</label><br /><input name="email" type="text" id="email" class="namefield"/></td>
  	</tr>
</table>
</fieldset>
<fieldset>
	<legend>Plan Coverage</legend>
	<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-bottom:15px;"><strong id="apply_for_choices">This Policy Would Insure:</strong><span id="help_bug" title="header=[<img src='images/information.png' style='vertical-align:middle'>&nbsp;&nbsp;Options:] body=[<strong>Self:</strong> You are applying for coverage for yourself only.<br /><strong>Self &amp; Spouse:</strong> You are applying for coverage for both yourself and your spouse.<br /><strong>Self &amp; Child(ren):</strong> You are applying for coverage for yourself and your child(ren).<br /><strong>Self &amp; Family:</strong> You are applying for coverage for yourself, your spouse and your child(ren).] cssbody=[tip_body] cssheader=[tip_header]"><img src="images/help.png" alt="" width="16" height="16" border="none" /></span></td>
    <td></td>
	<td width="50px"></td>
    <td style="padding-bottom:15px;"><strong>Effective Date:</strong><span id="help_bug" title="header=[<img src='images/information.png' style='vertical-align:middle'>&nbsp;&nbsp;Effective Date:] body=[This is the date that you would like your coverage to start. Effective dates are all on the 1st of the month. Enrollments received by the 20th of each month will become effective the 1st of the following month.] cssbody=[tip_body] cssheader=[tip_header]"><img src="images/help.png" alt="" width="16" height="16" border="none" /></span></td>
  </tr>
  <tr>
    <td><input type="radio" name="applying_for" value="self_only" id="self_only" onclick="dep_wrap_close();" class="noborder"/><label for="self_only" style="margin-left:4px;">Self Only</label></td>
    <td><input type="radio" name="applying_for" value="self_and_children" id="self_and_children" onclick="dep_wrap_open();" class="noborder"/><label for="self_and_children" style="margin-left:4px;">Self &amp; Children</label></td>
	<td width="50px"></td>
    <td><small>(MM/DD/YYYY)</small></td>
  </tr>
  <tr>
    <td><input type="radio" name="applying_for" value="self_and_spouse" id="self_and_spouse" onclick="dep_wrap_open();" class="noborder"/><label for="self_and_spouse" style="margin-left:4px;">Self &amp; Spouse</label></td>
    <td><input type="radio" name="applying_for" value="self_and_family" id="self_and_family" onclick="dep_wrap_open();" class="noborder"/><label for="self_and_family" style="margin-left:4px;">Self &amp; Entire Family</label></td>
	<td width="50px"></td>
    <td><input name="effective_month" type="text" id="effective_month" size="2"/> /01/ <input name="effective_year" type="text" id="effective_year" size="4"/></td>
  </tr>
</table>
</fieldset>
<div id="dependents_wrapper" style="display:none;">
<fieldset>
	<legend>List Enrolling Dependents: (if any)</legend>
	<p><i>* Please include any spouse or child that will be covered by this policy.</i></p>
<table border="0" cellspacing="0" cellpadding="0" id="dependents">
  <tr>
    <td colspan="3"></td>
    <td colspan="3" align="center" style="border-bottom:1px solid #CCCCCC;">Birthday</td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Name</td>
    <td>Relation</td>
    <td>Sex</td>
    <td>Mo</td>
    <td>Day</td>
    <td>Year</td>
    <td width="110px;" align="right">Student<span id="help_bug" title="header=[<img src='images/information.png' style='vertical-align:middle'>&nbsp;&nbsp;Fulltime Student] body=[To qualify as a student, a policy dependant must be actively enrolled in a minimum of 8 units with a maximum age of 25 years.  Proof of student enrollment or registration may be required.] cssbody=[tip_body] cssheader=[tip_header]"><img src="images/help.png" alt="" width="16" height="16" border="none" /></span></td>
  </tr>
 <tr>
    <td><input name="dependent1_name" type="text" id="dependent1_name" class="namefield" /></td>
    <td><input name="dependent1_relationship" type="text" id="dependent1_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent1_sex" value="male" id="dependent1_m" class="noborder"/><label for="dependent1_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent1_sex" value="female" id="dependent1_f" class="noborder"/><label for="dependent1_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent1_bday_month" type="text" id="dependent1_bday_month" size="2"/></td>
    <td><input name="dependent1_bday_day" type="text" id="dependent1_bday_day" size="2"/></td>
    <td><input name="dependent1_bday_year" type="text" id="dependent1_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent1_student" id="dependent1_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent2_name" type="text" id="dependent2_name" class="namefield" /></td>
    <td><input name="dependent2_relationship" type="text" id="dependent2_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent2_sex" value="male" id="dependent2_m" class="noborder"/><label for="dependent2_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent2_sex" value="female" id="dependent2_f" class="noborder"/><label for="dependent2_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent2_bday_month" type="text" id="dependent2_bday_month" size="2"/></td>
    <td><input name="dependent2_bday_day" type="text" id="dependent2_bday_day" size="2"/></td>
    <td><input name="dependent2_bday_year" type="text" id="dependent2_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent2_student" id="dependent2_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent3_name" type="text" id="dependent3_name" class="namefield" /></td>
    <td><input name="dependent3_relationship" type="text" id="dependent3_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent3_sex" value="male" id="dependent3_m" class="noborder"/><label for="dependent3_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent3_sex" value="female" id="dependent3_f" class="noborder"/><label for="dependent3_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent3_bday_month" type="text" id="dependent3_bday_month" size="2"/></td>
    <td><input name="dependent3_bday_day" type="text" id="dependent3_bday_day" size="2"/></td>
    <td><input name="dependent3_bday_year" type="text" id="dependent3_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent3_student" id="dependent3_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent4_name" type="text" id="dependent4_name" class="namefield" /></td>
    <td><input name="dependent4_relationship" type="text" id="dependent4_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent4_sex" value="male" id="dependent4_m" class="noborder"/><label for="dependent4_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent4_sex" value="female" id="dependent4_f" class="noborder"/><label for="dependent4_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent4_bday_month" type="text" id="dependent4_bday_month" size="2"/></td>
    <td><input name="dependent4_bday_day" type="text" id="dependent4_bday_day" size="2"/></td>
    <td><input name="dependent4_bday_year" type="text" id="dependent4_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent4_student" id="dependent4_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent5_name" type="text" id="dependent5_name" class="namefield" /></td>
    <td><input name="dependent5_relationship" type="text" id="dependent5_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent5_sex" value="male" id="dependent1_m" class="noborder"/><label for="dependent5_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent5_sex" value="female" id="dependent1_f" class="noborder"/><label for="dependent5_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent5_bday_month" type="text" id="dependent5_bday_month" size="2"/></td>
    <td><input name="dependent5_bday_day" type="text" id="dependent5_bday_day" size="2"/></td>
    <td><input name="dependent5_bday_year" type="text" id="dependent5_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent5_student" id="dependent5_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent6_name" type="text" id="dependent6_name" class="namefield" /></td>
    <td><input name="dependent6_relationship" type="text" id="dependent6_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent6_sex" value="male" id="dependent6_m" class="noborder"/><label for="dependent6_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent6_sex" value="female" id="dependent6_f" class="noborder"/><label for="dependent6_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent6_bday_month" type="text" id="dependent6_bday_month" size="2"/></td>
    <td><input name="dependent6_bday_day" type="text" id="dependent6_bday_day" size="2"/></td>
    <td><input name="dependent6_bday_year" type="text" id="dependent6_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent6_student" id="dependent6_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent7_name" type="text" id="dependent7_name" class="namefield" /></td>
    <td><input name="dependent7_relationship" type="text" id="dependent7_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent7_sex" value="male" id="dependent7_m" class="noborder"/><label for="dependent7_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent7_sex" value="female" id="dependent7_f" class="noborder"/><label for="dependent7_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent7_bday_month" type="text" id="dependent7_bday_month" size="2"/></td>
    <td><input name="dependent7_bday_day" type="text" id="dependent7_bday_day" size="2"/></td>
    <td><input name="dependent7_bday_year" type="text" id="dependent7_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent7_student" id="dependent7_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent8_name" type="text" id="dependent8_name" class="namefield" /></td>
    <td><input name="dependent8_relationship" type="text" id="dependent8_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent8_sex" value="male" id="dependent8_m" class="noborder"/><label for="dependent8_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent8_sex" value="female" id="dependent8_f" class="noborder"/><label for="dependent8_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent8_bday_month" type="text" id="dependent8_bday_month" size="2"/></td>
    <td><input name="dependent8_bday_day" type="text" id="dependent8_bday_day" size="2"/></td>
    <td><input name="dependent8_bday_year" type="text" id="dependent8_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent8_student" id="dependent8_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent9_name" type="text" id="dependent9_name" class="namefield" /></td>
    <td><input name="dependent9_relationship" type="text" id="dependent9_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent9_sex" value="male" id="dependent9_m" class="noborder"/><label for="dependent9_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent9_sex" value="female" id="dependent9_f" class="noborder"/><label for="dependent9_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent9_bday_month" type="text" id="dependent9_bday_month" size="2"/></td>
    <td><input name="dependent9_bday_day" type="text" id="dependent9_bday_day" size="2"/></td>
    <td><input name="dependent9_bday_year" type="text" id="dependent9_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent9_student" id="dependent9_student" type="checkbox" value="yes" /></td>
  </tr>
  <tr>
    <td><input name="dependent10_name" type="text" id="dependent10_name" class="namefield" /></td>
    <td><input name="dependent10_relationship" type="text" id="dependent10_relationship" class="relationfield" /></td>
    <td width="100">
	<input type="radio" name="dependent10_sex" value="male" id="dependent10_m" class="noborder"/><label for="dependent10_m" style="margin-left:4px;">M</label>
	<input type="radio" name="dependent10_sex" value="female" id="dependent10_f" class="noborder"/><label for="dependent10_f" style="margin-left:4px;">F</label></td>
    <td><input name="dependent10_bday_month" type="text" id="dependent10_bday_month" size="2"/></td>
    <td><input name="dependent10_bday_day" type="text" id="dependent10_bday_day" size="2"/></td>
    <td><input name="dependent10_bday_year" type="text" id="dependent10_bday_year" size="4"/></td>
    <td width="110px;" align="center"><input name="dependent10_student" id="dependent10_student" type="checkbox" value="yes" /></td>
  </tr>
</table>
<p><small>* For your convenience, applicants with more than 10 <br />dependents may email or fax us a list at (951) 787-9273 </small></p>
</fieldset>
</div><!-- /dependents_wrapper -->

<?php include("_terms.php"); ?>

<p id="buttons-grey"><a href="#" onclick="javascript:submitForm();">Submit</a></p>
<p id="loading" style="display:none;text-align:center;"><br /><img src="images/loading.gif" alt="" /></p>
</form>
</div><!-- /application -->
</div><!-- /applicationwrapper -->
<div id="appbottom">
</div><!-- /appbottom -->

<?php include("_footer.php"); ?>

</body>
</html>