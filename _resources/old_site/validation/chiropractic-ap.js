function resetFormControls()
{
	var borderStyle = '2px #898A8A solid';
	
	tbl = document.getElementById("dependents");
	tbl.rows[1].style.background= "#898A8A";
	tbl.rows[2].style.background= "#898A8A";
	tbl.rows[3].style.background= "#898A8A";
	tbl.rows[4].style.background= "#898A8A";
	tbl.rows[5].style.background= "#898A8A";
	tbl.rows[6].style.background= "#898A8A";
	tbl.rows[7].style.background= "#898A8A";
	tbl.rows[8].style.background= "#898A8A";
	tbl.rows[9].style.background= "#898A8A";
	tbl.rows[10].style.background= "#898A8A";
	tbl.rows[11].style.background= "#898A8A";
	
	document.getElementById('firstname').style.border = borderStyle;
	document.getElementById('middlename').style.border = borderStyle;
	document.getElementById('lastname').style.border = borderStyle;
	document.getElementById('address').style.border = borderStyle;
	document.getElementById('city').style.border = borderStyle;
	document.getElementById('state').style.border = borderStyle;
	document.getElementById('zip').style.border = borderStyle;
	document.getElementById('social_security_number').style.border = borderStyle;
	document.getElementById('birthdate').style.border = borderStyle;
	document.getElementById('gender_area').style.border = borderStyle;
	document.getElementById('phone').style.border = borderStyle;
	document.getElementById('ext').style.border = borderStyle;
	document.getElementById('email').style.border = borderStyle;
	document.getElementById('apply_for_choices').style.border = borderStyle;
	document.getElementById('self_only').style.border = borderStyle;
	document.getElementById('self_and_children').style.border = borderStyle;
	document.getElementById('self_and_spouse').style.border = borderStyle;
	document.getElementById('self_and_family').style.border = borderStyle;
	document.getElementById('effective_month').style.border = borderStyle;
	document.getElementById('effective_year').style.border = borderStyle;
	document.getElementById('dependent1_name').style.border = borderStyle;
	document.getElementById('dependent2_name').style.border = borderStyle;
	document.getElementById('dependent3_name').style.border = borderStyle;
	document.getElementById('dependent4_name').style.border = borderStyle;
	document.getElementById('dependent5_name').style.border = borderStyle;
	document.getElementById('dependent6_name').style.border = borderStyle;
	document.getElementById('dependent7_name').style.border = borderStyle;
	document.getElementById('dependent8_name').style.border = borderStyle;
	document.getElementById('dependent9_name').style.border = borderStyle;
	document.getElementById('dependent10_name').style.border = borderStyle;
	document.getElementById('termserror').style.background= "#898A8A";
}

function validateForm()
{
	var errorTextBorder = '2px #FF0000 solid';
	var valid = true;
	var message = '';
	resetFormControls();

if(valid && isBlank(document.getElementById('firstname').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('firstname').style.border = errorTextBorder;
		new Effect.Highlight('firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
	
if(valid && isBlank(document.getElementById('lastname').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Last Name</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('lastname').style.border = errorTextBorder;
		new Effect.Highlight('lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

if(valid && isBlank(document.getElementById('address').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Address</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('address').style.border = errorTextBorder;
		new Effect.Highlight('address', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('city').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>City</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('city').style.border = errorTextBorder;
		new Effect.Highlight('city', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('state').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>State</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('state').style.border = errorTextBorder;
		new Effect.Highlight('state', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('zip').value) || !isNumeric(document.getElementById('zip').value)))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Zip Code</strong>.</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('zip').style.border = errorTextBorder;
		new Effect.Highlight('zip', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('social_security_number').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Social Security Number</strong></p><p><b>Please Note:</b><br /><small>We require a social security number in the process of application. <br />Our website is encrypted and you can review our strict <a href=\"privacy.php" target=\"_blank\">Privacy Policy</a>.<br />However if you\'d rather apply by phone, please <a href=\"contact.php\" target=\"_blank\">contact us</a>.</small></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('social_security_number').style.border = errorTextBorder;
		new Effect.Highlight('social_security_number', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('birthdate').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Birth Date</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('birthdate').style.border = errorTextBorder;
		new Effect.Highlight('birthdate', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (document.chiropracticap.sex[0].checked == false) && (document.chiropracticap.sex[1].checked == false))
	{
		message = '<p><strong>Error:</strong></p><p>Please select a valid <strong>Gender</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('gender_area').style.border = errorTextBorder;
		//new Effect.Highlight('contact_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('phone').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Phone Number</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('phone').style.border = errorTextBorder;
		new Effect.Highlight('phone', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('email').value) || properEmail(document.getElementById('email').value)))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Email Address</strong>. <small>Ex: "yourname@gmail.com"</small></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('email').style.border = errorTextBorder;
		new Effect.Highlight('email', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && ((document.chiropracticap.applying_for[0].checked == false) && (document.chiropracticap.applying_for[1].checked == false) && (document.chiropracticap.applying_for[2].checked == false) && (document.chiropracticap.applying_for[3].checked == false)))
	{
		message = '<p><strong>Error:</strong></p><p>Who is to be covered by this policy? Please <strong>select an option</strong> below.</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('apply_for_choices').style.border = errorTextBorder;
		//new Effect.Highlight('contact_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('effective_month').value) || !isNumeric(document.getElementById('effective_month').value)))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Month</strong> that you would like this policy to take effect.</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('effective_month').style.border = errorTextBorder;
		new Effect.Highlight('effective_month', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('effective_year').value) || !isNumeric(document.getElementById('effective_year').value)))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Year</strong> that you would like this policy to take effect.</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('effective_year').style.border = errorTextBorder;
		new Effect.Highlight('effective_year', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

if(valid && (document.chiropracticap.applying_for[0].checked == true) && (!isBlank(document.getElementById('dependent1_name').value)))
	{
		message = '<p><strong>Error:</strong></p><p>You have selected that is policy is for <b>yourself only</b>, yet you\'ve entered names in the dependents fields.  Either select another option or delete the names of the dependents you have entered.</p>';
		window.scrollTo(0,0)
		document.getElementById('apply_for_choices').style.border = errorTextBorder;
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}
if(valid && (document.chiropracticap.applying_for[1].checked == true) && (isBlank(document.getElementById('dependent1_name').value)))
	{
		message = '<p><strong>Error:</strong></p><p>You have selected that is policy is for <b>Yourself and Children</b>, but have not entered any children\'s names as dependents. Please list them below, beginning on the first line.</p>';
		window.scrollTo(0,0)
		document.getElementById('apply_for_choices').style.border = errorTextBorder;
		tbl = document.getElementById("dependents");
		tbl.rows[2].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}
if(valid && (document.chiropracticap.applying_for[2].checked == true) && (isBlank(document.getElementById('dependent1_name').value)))
	{
		message = '<p><strong>Error:</strong></p><p>You have selected that is policy is for <b>Yourself and Spouse</b>, but have not entered the name of your spouse as dependent. Please this information, beginning on the first line.</p>';
		window.scrollTo(0,0)
		document.getElementById('apply_for_choices').style.border = errorTextBorder;
		tbl = document.getElementById("dependents");
		tbl.rows[2].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}
if(valid && (document.chiropracticap.applying_for[3].checked == true) && (isBlank(document.getElementById('dependent1_name').value)))
	{
		message = '<p><strong>Error:</strong></p><p>You have selected that is policy is for <b>Yourself and Entire Family</b>, but have not listed any family members as dependents. Please list them below, beginning on the first line.</p>';
		window.scrollTo(0,0)
		document.getElementById('apply_for_choices').style.border = errorTextBorder;
		tbl = document.getElementById("dependents");
		tbl.rows[2].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

//DEPENTENTS VALIDATION

if(valid && (!isBlank(document.getElementById('dependent1_name').value)) && (((document.chiropracticap.dependent1_sex[0].checked == false) && (document.chiropracticap.dependent1_sex[1].checked == false)) || (isBlank(document.getElementById('dependent1_relationship').value)) || (isBlank(document.getElementById('dependent1_bday_month').value)) || (isBlank(document.getElementById('dependent1_bday_day').value)) || (isBlank(document.getElementById('dependent1_bday_year').value))  || (!isNumeric(document.getElementById('dependent1_bday_month').value)) || (!isNumeric(document.getElementById('dependent1_bday_day').value)) || (!isNumeric(document.getElementById('dependent1_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<p><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[2].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent2_name').value)) && (((document.chiropracticap.dependent2_sex[0].checked == false) && (document.chiropracticap.dependent2_sex[1].checked == false)) || (isBlank(document.getElementById('dependent2_relationship').value)) || (isBlank(document.getElementById('dependent2_bday_month').value)) || (isBlank(document.getElementById('dependent2_bday_day').value)) || (isBlank(document.getElementById('dependent2_bday_year').value))  || (!isNumeric(document.getElementById('dependent2_bday_month').value)) || (!isNumeric(document.getElementById('dependent2_bday_day').value)) || (!isNumeric(document.getElementById('dependent2_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[3].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent3_name').value)) && (((document.chiropracticap.dependent3_sex[0].checked == false) && (document.chiropracticap.dependent3_sex[1].checked == false)) || (isBlank(document.getElementById('dependent3_relationship').value)) || (isBlank(document.getElementById('dependent3_bday_month').value)) || (isBlank(document.getElementById('dependent3_bday_day').value)) || (isBlank(document.getElementById('dependent3_bday_year').value))  || (!isNumeric(document.getElementById('dependent3_bday_month').value)) || (!isNumeric(document.getElementById('dependent3_bday_day').value)) || (!isNumeric(document.getElementById('dependent3_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[4].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent4_name').value)) && (((document.chiropracticap.dependent4_sex[0].checked == false) && (document.chiropracticap.dependent4_sex[1].checked == false)) || (isBlank(document.getElementById('dependent4_relationship').value)) || (isBlank(document.getElementById('dependent4_bday_month').value)) || (isBlank(document.getElementById('dependent4_bday_day').value)) || (isBlank(document.getElementById('dependent4_bday_year').value))  || (!isNumeric(document.getElementById('dependent4_bday_month').value)) || (!isNumeric(document.getElementById('dependent4_bday_day').value)) || (!isNumeric(document.getElementById('dependent4_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[5].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}
	
if(valid && (!isBlank(document.getElementById('dependent5_name').value)) && (((document.chiropracticap.dependent5_sex[0].checked == false) && (document.chiropracticap.dependent5_sex[1].checked == false)) || (isBlank(document.getElementById('dependent5_relationship').value)) || (isBlank(document.getElementById('dependent5_bday_month').value)) || (isBlank(document.getElementById('dependent5_bday_day').value)) || (isBlank(document.getElementById('dependent5_bday_year').value))  || (!isNumeric(document.getElementById('dependent5_bday_month').value)) || (!isNumeric(document.getElementById('dependent5_bday_day').value)) || (!isNumeric(document.getElementById('dependent5_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[6].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent6_name').value)) && (((document.chiropracticap.dependent6_sex[0].checked == false) && (document.chiropracticap.dependent6_sex[1].checked == false)) || (isBlank(document.getElementById('dependent6_relationship').value)) || (isBlank(document.getElementById('dependent6_bday_month').value)) || (isBlank(document.getElementById('dependent6_bday_day').value)) || (isBlank(document.getElementById('dependent6_bday_year').value))  || (!isNumeric(document.getElementById('dependent6_bday_month').value)) || (!isNumeric(document.getElementById('dependent6_bday_day').value)) || (!isNumeric(document.getElementById('dependent6_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[7].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent7_name').value)) && (((document.chiropracticap.dependent7_sex[0].checked == false) && (document.chiropracticap.dependent7_sex[1].checked == false)) || (isBlank(document.getElementById('dependent7_relationship').value)) || (isBlank(document.getElementById('dependent7_bday_month').value)) || (isBlank(document.getElementById('dependent7_bday_day').value)) || (isBlank(document.getElementById('dependent7_bday_year').value))  || (!isNumeric(document.getElementById('dependent7_bday_month').value)) || (!isNumeric(document.getElementById('dependent7_bday_day').value)) || (!isNumeric(document.getElementById('dependent7_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[8].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent8_name').value)) && (((document.chiropracticap.dependent8_sex[0].checked == false) && (document.chiropracticap.dependent8_sex[1].checked == false)) || (isBlank(document.getElementById('dependent8_relationship').value)) || (isBlank(document.getElementById('dependent8_bday_month').value)) || (isBlank(document.getElementById('dependent8_bday_day').value)) || (isBlank(document.getElementById('dependent8_bday_year').value))  || (!isNumeric(document.getElementById('dependent8_bday_month').value)) || (!isNumeric(document.getElementById('dependent8_bday_day').value)) || (!isNumeric(document.getElementById('dependent8_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[9].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent9_name').value)) && (((document.chiropracticap.dependent9_sex[0].checked == false) && (document.chiropracticap.dependent9_sex[1].checked == false)) || (isBlank(document.getElementById('dependent9_relationship').value)) || (isBlank(document.getElementById('dependent9_bday_month').value)) || (isBlank(document.getElementById('dependent9_bday_day').value)) || (isBlank(document.getElementById('dependent9_bday_year').value))  || (!isNumeric(document.getElementById('dependent9_bday_month').value)) || (!isNumeric(document.getElementById('dependent9_bday_day').value)) || (!isNumeric(document.getElementById('dependent9_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[10].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}

if(valid && (!isBlank(document.getElementById('dependent10_name').value)) && (((document.chiropracticap.dependent10_sex[0].checked == false) && (document.chiropracticap.dependent10_sex[1].checked == false)) || (isBlank(document.getElementById('dependent10_relationship').value)) || (isBlank(document.getElementById('dependent10_bday_month').value)) || (isBlank(document.getElementById('dependent10_bday_day').value)) || (isBlank(document.getElementById('dependent10_bday_year').value))  || (!isNumeric(document.getElementById('dependent10_bday_month').value)) || (!isNumeric(document.getElementById('dependent10_bday_day').value)) || (!isNumeric(document.getElementById('dependent10_bday_year').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>dependents</strong> you listed is <strong>missing</strong> some information.<br /><strong>Birthdays</strong> can only contain numbers.</p><p><b>Note:</b><br />If you are only applying for yourself and have no dependents, please delete the names of the dependents you entered.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[11].style.background= "red";
		new Effect.BlindDown('dependents_wrapper');
		valid = false;
	}	

if(valid && (document.chiropracticap.terms[0].checked == false))
	{
		message = '<p><strong>Error:</strong></p><p>To submit an application, you must <strong>agree to the terms</strong> at the bottom of this application.';
		window.scrollTo(0,0)
		document.getElementById('termserror').style.background= "red";
		//document.getElementById('terms').style.border = errorTextBorder;
		valid = false;
	}
	
if(!valid)
	{
		document.getElementById('errorDiv').innerHTML = message;
		Effect.Appear('errorDiv', {duration: 2});
		return false;
	}
	else
	{
		return true;
	}
}

function submitForm()
{
	if(validateForm() == true)
	{
		//do next task
		//do next task
		document.getElementById('buttons-grey').style.display = 'none';
		Element.scrollTo('loading');
		new Effect.Appear('loading', {duration: 1});
		document.chiropracticap.submit();
	}
}