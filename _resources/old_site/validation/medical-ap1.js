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
	
	document.getElementById('business_name').style.border = borderStyle;
	document.getElementById('business_phone').style.border = borderStyle;
	document.getElementById('business_phone_ext').style.border = borderStyle;
	document.getElementById('business_address').style.border = borderStyle;
	document.getElementById('business_city').style.border = borderStyle;
	document.getElementById('business_state').style.border = borderStyle;
	document.getElementById('business_zip').style.border = borderStyle;
	document.getElementById('contact_firstname').style.border = borderStyle;
	document.getElementById('contact_lastname').style.border = borderStyle;
	document.getElementById('contact_title').style.border = borderStyle;
	document.getElementById('contact_phone').style.border = borderStyle;
	document.getElementById('contact_email').style.border = borderStyle;
	document.getElementById('effective_month').style.border = borderStyle;
	document.getElementById('effective_year').style.border = borderStyle;
	document.getElementById('coverage_error').style.border = borderStyle;
	document.getElementById('dependent1_firstname').style.border = borderStyle;
	document.getElementById('dependent1_lastname').style.border = borderStyle;
	document.getElementById('dependent2_firstname').style.border = borderStyle;
	document.getElementById('dependent2_lastname').style.border = borderStyle;
	document.getElementById('dependent3_firstname').style.border = borderStyle;
	document.getElementById('dependent3_lastname').style.border = borderStyle;
	document.getElementById('dependent4_firstname').style.border = borderStyle;
	document.getElementById('dependent4_lastname').style.border = borderStyle;
	document.getElementById('dependent5_firstname').style.border = borderStyle;
	document.getElementById('dependent5_lastname').style.border = borderStyle;
	document.getElementById('dependent6_firstname').style.border = borderStyle;
	document.getElementById('dependent6_lastname').style.border = borderStyle;
	document.getElementById('dependent7_firstname').style.border = borderStyle;
	document.getElementById('dependent7_lastname').style.border = borderStyle;
	document.getElementById('dependent8_firstname').style.border = borderStyle;
	document.getElementById('dependent8_lastname').style.border = borderStyle;
	document.getElementById('dependent9_firstname').style.border = borderStyle;
	document.getElementById('dependent9_lastname').style.border = borderStyle;
	document.getElementById('dependent10_firstname').style.border = borderStyle;
	document.getElementById('dependent10_lastname').style.border = borderStyle;
}

function validateForm()
{
	var errorTextBorder = '2px #FF0000 solid';
	var valid = true;
	var message = '';
	resetFormControls();

if(valid && isBlank(document.getElementById('business_name').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Business Name</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('business_name').style.border = errorTextBorder;
		new Effect.Highlight('business_name', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
	
if(valid && isBlank(document.getElementById('business_phone').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Business Phone Number</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('business_phone').style.border = errorTextBorder;
		new Effect.Highlight('business_phone', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

if(valid && isBlank(document.getElementById('business_address').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Business Address</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('business_address').style.border = errorTextBorder;
		new Effect.Highlight('business_address', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('business_city').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>City</strong> for your business</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('business_city').style.border = errorTextBorder;
		new Effect.Highlight('business_city', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('business_state').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>State</strong> for your business</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('business_state').style.border = errorTextBorder;
		new Effect.Highlight('business_state', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('business_zip').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Zip Code</strong> for your business</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('business_zip').style.border = errorTextBorder;
		new Effect.Highlight('business_zip', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('contact_firstname').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>First Name</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('contact_firstname').style.border = errorTextBorder;
		new Effect.Highlight('contact_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('contact_lastname').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Last Name</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('contact_lastname').style.border = errorTextBorder;
		new Effect.Highlight('contact_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('contact_email').value) || properEmail(document.getElementById('contact_email').value)))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Email Address</strong>. <small>Ex: "yourname@gmail.com"</small></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('contact_email').style.border = errorTextBorder;
		new Effect.Highlight('contact_email', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('contact_title').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Business Title</strong>.<small>(ex: "Office Assistant" or "Manager")</small></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('contact_title').style.border = errorTextBorder;
		new Effect.Highlight('contact_title', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && isBlank(document.getElementById('contact_phone').value))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Contact Number</strong></p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('contact_phone').style.border = errorTextBorder;
		new Effect.Highlight('contact_phone', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('effective_month').value) || !isNumeric(document.getElementById('effective_month').value)))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Month</strong> when you would like this policy to begin.<br />Please enter <strong>only numbers</strong> in this field.</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('effective_month').style.border = errorTextBorder;
		new Effect.Highlight('effective_month', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('effective_year').value) || !isNumeric(document.getElementById('effective_year').value)))
	{
		message = '<p><strong>Error:</strong></p><p>Please enter a valid <strong>Year</strong> when you would like this policy to begin.</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('effective_year').style.border = errorTextBorder;
		new Effect.Highlight('effective_year', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && ( (document.medicalap1.applying_for[0].checked == false) && (document.medicalap1.applying_for[1].checked == false) && (document.medicalap1.applying_for[2].checked == false) && (document.medicalap1.applying_for[3].checked == false)) )
	{
		message = '<p><strong>Error:</strong></p><p>Please select the <strong>Type of Coverage</strong> you are requesting</p>';
		//document.getElementById('business_name').focus();
		window.scrollTo(0,0)
		//Element.scrollTo('errorDiv');
		document.getElementById('coverage_error').style.border = errorTextBorder;
		//new Effect.Highlight('effective_year', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent1_firstname').value)) && (isBlank(document.getElementById('dependent1_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent1_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent1_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent1_firstname').value)) && (!isBlank(document.getElementById('dependent1_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent1_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent1_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent1_firstname').value)) && (((document.medicalap1.dependent1_sex[0].checked == false) && (document.medicalap1.dependent1_sex[1].checked == false)) || (isBlank(document.getElementById('dependent1_age').value)) || (isBlank(document.getElementById('dependent1_zip').value)) || (!isNumeric(document.getElementById('dependent1_age').value)) || (!isNumeric(document.getElementById('dependent1_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[1].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent2_firstname').value)) && (isBlank(document.getElementById('dependent2_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent2_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent2_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent2_firstname').value)) && (!isBlank(document.getElementById('dependent2_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent2_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent2_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent2_firstname').value)) && (((document.medicalap1.dependent2_sex[0].checked == false) && (document.medicalap1.dependent2_sex[1].checked == false)) || (isBlank(document.getElementById('dependent2_age').value)) || (isBlank(document.getElementById('dependent2_zip').value)) || (!isNumeric(document.getElementById('dependent2_age').value)) || (!isNumeric(document.getElementById('dependent2_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[2].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent3_firstname').value)) && (isBlank(document.getElementById('dependent3_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent3_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent3_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent3_firstname').value)) && (!isBlank(document.getElementById('dependent3_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent3_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent3_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent3_firstname').value)) && (((document.medicalap1.dependent3_sex[0].checked == false) && (document.medicalap1.dependent3_sex[1].checked == false)) || (isBlank(document.getElementById('dependent3_age').value)) || (isBlank(document.getElementById('dependent3_zip').value)) || (!isNumeric(document.getElementById('dependent3_age').value)) || (!isNumeric(document.getElementById('dependent3_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[3].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent4_firstname').value)) && (isBlank(document.getElementById('dependent4_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent4_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent4_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent4_firstname').value)) && (!isBlank(document.getElementById('dependent4_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent4_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent4_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent4_firstname').value)) && (((document.medicalap1.dependent4_sex[0].checked == false) && (document.medicalap1.dependent4_sex[1].checked == false)) || (isBlank(document.getElementById('dependent4_age').value)) || (isBlank(document.getElementById('dependent4_zip').value)) || (!isNumeric(document.getElementById('dependent4_age').value)) || (!isNumeric(document.getElementById('dependent4_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[4].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent5_firstname').value)) && (isBlank(document.getElementById('dependent5_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent5_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent5_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent5_firstname').value)) && (!isBlank(document.getElementById('dependent5_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent5_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent5_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent5_firstname').value)) && (((document.medicalap1.dependent5_sex[0].checked == false) && (document.medicalap1.dependent5_sex[1].checked == false)) || (isBlank(document.getElementById('dependent5_age').value)) || (isBlank(document.getElementById('dependent5_zip').value)) || (!isNumeric(document.getElementById('dependent5_age').value)) || (!isNumeric(document.getElementById('dependent5_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[5].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent6_firstname').value)) && (isBlank(document.getElementById('dependent6_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent6_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent6_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent6_firstname').value)) && (!isBlank(document.getElementById('dependent6_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent6_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent6_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent6_firstname').value)) && (((document.medicalap1.dependent6_sex[0].checked == false) && (document.medicalap1.dependent6_sex[1].checked == false)) || (isBlank(document.getElementById('dependent6_age').value)) || (isBlank(document.getElementById('dependent6_zip').value)) || (!isNumeric(document.getElementById('dependent6_age').value)) || (!isNumeric(document.getElementById('dependent6_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[6].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent7_firstname').value)) && (isBlank(document.getElementById('dependent7_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent7_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent7_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent7_firstname').value)) && (!isBlank(document.getElementById('dependent7_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent7_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent7_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent7_firstname').value)) && (((document.medicalap1.dependent7_sex[0].checked == false) && (document.medicalap1.dependent7_sex[1].checked == false)) || (isBlank(document.getElementById('dependent7_age').value)) || (isBlank(document.getElementById('dependent7_zip').value)) || (!isNumeric(document.getElementById('dependent7_age').value)) || (!isNumeric(document.getElementById('dependent7_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[7].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent8_firstname').value)) && (isBlank(document.getElementById('dependent8_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent8_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent8_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent8_firstname').value)) && (!isBlank(document.getElementById('dependent8_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent8_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent8_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent8_firstname').value)) && (((document.medicalap1.dependent8_sex[0].checked == false) && (document.medicalap1.dependent8_sex[1].checked == false)) || (isBlank(document.getElementById('dependent8_age').value)) || (isBlank(document.getElementById('dependent8_zip').value)) || (!isNumeric(document.getElementById('dependent8_age').value)) || (!isNumeric(document.getElementById('dependent8_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[8].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent9_firstname').value)) && (isBlank(document.getElementById('dependent9_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent9_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent9_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent9_firstname').value)) && (!isBlank(document.getElementById('dependent9_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent9_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent9_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent9_firstname').value)) && (((document.medicalap1.dependent9_sex[0].checked == false) && (document.medicalap1.dependent9_sex[1].checked == false)) || (isBlank(document.getElementById('dependent9_age').value)) || (isBlank(document.getElementById('dependent9_zip').value)) || (!isNumeric(document.getElementById('dependent9_age').value)) || (!isNumeric(document.getElementById('dependent9_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[9].style.background= "red";
		valid = false;
	}
//DEPENTENTS VALIDATION
if(valid && (!isBlank(document.getElementById('dependent10_firstname').value)) && (isBlank(document.getElementById('dependent10_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>Last Name</strong></p>';
		window.scrollTo(0,0);
		document.getElementById('dependent10_lastname').style.border = errorTextBorder;
		new Effect.Highlight('dependent10_lastname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (isBlank(document.getElementById('dependent10_firstname').value)) && (!isBlank(document.getElementById('dependent10_lastname').value)))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is is missing a <strong>First Name</strong></p>';
		window.scrollTo(0,0)
		document.getElementById('dependent10_firstname').style.border = errorTextBorder;
		new Effect.Highlight('dependent10_firstname', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
if(valid && (!isBlank(document.getElementById('dependent10_firstname').value)) && (((document.medicalap1.dependent10_sex[0].checked == false) && (document.medicalap1.dependent10_sex[1].checked == false)) || (isBlank(document.getElementById('dependent10_age').value)) || (isBlank(document.getElementById('dependent10_zip').value)) || (!isNumeric(document.getElementById('dependent10_age').value)) || (!isNumeric(document.getElementById('dependent10_zip').value))))
	{
		message = '<p><strong>Error:</strong></p><p>One of the <strong>employees</strong> you listed is <strong>missing</strong> some information.<br /><strong>Ages</strong> and <strong>Zip codes</strong> can only contain numbers.</p>';
		window.scrollTo(0,0)
		tbl = document.getElementById("dependents");
		tbl.rows[10].style.background= "red";
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
		document.medicalap1.submit();
	}
}
