function resetFormControls()
{
	var borderStyle = '2px #CCCCCC solid';
	document.getElementById('name').style.border = borderStyle;
	document.getElementById('email').style.border = borderStyle;
	document.getElementById('email2').style.border = borderStyle;
	document.getElementById('phone').style.border = borderStyle;
	document.getElementById('inquiry').style.border = borderStyle;
}

function validateForm()
{
	var errorTextBorder = '2px #FF0000 solid';
	var valid = true;
	var message = '';
	
	resetFormControls();

	if(valid && isBlank(document.getElementById('name').value))
	{
		message = '<p><strong>Error:</strong></p><ul><li>Please enter a valid <strong>Name</strong></li></ul>';
		document.getElementById('name').focus();
		document.getElementById('name').style.border = errorTextBorder;
		new Effect.Highlight('name', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

if(valid && (isBlank(document.getElementById('email').value) || properEmail(document.getElementById('email').value)))
	{
		message = '<p><strong>Error:</strong></p><ul><li>Please enter a valid <strong>Email Address</strong>. <small>Ex: "yourname@gmail.com"</small></li></ul>';
		document.getElementById('email').focus();
		document.getElementById('email').style.border = errorTextBorder;
		new Effect.Highlight('email', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

if(valid && !compareEmails())
	{
		message = '<p><strong>Error:</strong></p><ul><li>The <strong>email addresses</strong> you entered don\'t match.</li></ul>';
		document.getElementById('email').focus();
		document.getElementById('email').style.border = errorTextBorder;
		document.getElementById('email2').style.border = errorTextBorder;
		new Effect.Highlight('email', {startcolor:'#FFD2D2', duration: 4})
		new Effect.Highlight('email2', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

if(valid && isBlank(document.getElementById('phone').value))
	{
		message = '<p><strong>Error:</strong></p><ul><li>Please enter a 10-digit <strong>Phone Number</strong>. <small>Ex: "951-123-8593"</small></li></ul>';
		document.getElementById('phone').focus();
		document.getElementById('phone').style.border = errorTextBorder;
		new Effect.Highlight('phone', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}

if(valid && isBlank(document.getElementById('inquiry').value))
	{
		message = '<p><strong>Error:</strong></p><ul><li>Please enter the details of <strong>Your Inquiry</strong>.</li></ul>';
		document.getElementById('inquiry').focus();
		document.getElementById('inquiry').style.border = errorTextBorder;
		new Effect.Highlight('inquiry', {startcolor:'#FFD2D2', duration: 4})
		valid = false;
	}
	//TEEEEEEEEEEEEEEEEEEEEEEST
//if(valid && isBlank(document.getElementById('blankmessage').value))
//	{
//		message = '<p><strong>Error:</strong></p><ul><li>Please enter the details of <strong>Your Inquiry</strong>.</li></ul>';
//		document.getElementById('blankmessage').focus();
//		new Effect.Highlight('blankmessage', {startcolor:'#FFD2D2', duration: 4})
//		valid = false;
//	}
	
//if(valid && (!isInteger(document.getElementById('fieldName').value) || !isInteger(document.getElementById('fieldName').value) || !isInteger(document.getElementById('fieldName'))))
//
//	if(valid && !validatePhone(document.getElementById('fieldName').value))
//	{
//		message = 'You have entered an invalid fax';
//		document.getElementById('fieldName').focus();
//		valid = false;
//	}
//
//	if(valid && !validatePhone(document.getElementById('fieldName').value))
//	{
//		message = 'You have entered an invalid phone';
//		document.getElementById('fieldName').focus();
//		valid = false;
//	}
//
//	
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
		//alert("At this point, we\'ve verified the we have all the required feilds on this form.\n\nThe form would have been submitted now.\n\n (This message will not be here in the final version.)");
		//I'd like to popup a modal window here.
		//document.contactform.reset();
		//this.form.submit();
		document.contactemailform.submit();
	}
}
