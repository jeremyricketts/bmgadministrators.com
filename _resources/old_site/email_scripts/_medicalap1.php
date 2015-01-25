<?php
/* PHP Form Mailer - phpFormMailer v2.1, last updated 30th Nov 2005 - check back often for updates!
   (easy to use and more secure than many cgi form mailers) FREE from:
                  www.TheDemoSite.co.uk
      Should work fine on most Unix/Linux platforms */

// ------- three variables you MUST change below  -------------------------------------------------------
$valid_ref1="https://bmgadministrators.com/medical-ap1.php";// change "Your--domain" to your domain
$valid_ref2="https://www.bmgadministrators.com/medical-ap1.php";// change "Your--domain" to your domain
$replyemail="swpark@ark-insurance.com";//change to your email address
// ------------------------------------------------------------

//clean input in case of header injection attempts!
function clean_input_4email($value, $check_all_patterns = true)
{
 $patterns[0] = '/content-type:/';
 $patterns[1] = '/to:/';
 $patterns[2] = '/cc:/';
 $patterns[3] = '/bcc:/';
 if ($check_all_patterns)
 {
  $patterns[4] = '/\r/';
  $patterns[5] = '/\n/';
  $patterns[6] = '/%0a/';
  $patterns[7] = '/%0d/';
 }
 //NOTE: can use str_ireplace as this is case insensitive but only available on PHP version 5.0.
 //return preg_replace($patterns, ""($value));
 return preg_replace($patterns, "", strtolower($value));
}

$business_name = clean_input_4email($_POST["business_name"]);
$business_phone = clean_input_4email($_POST["business_phone"]);
$business_phone_ext = clean_input_4email($_POST["business_phone_ext"]);
$business_address = clean_input_4email($_POST["business_address"]);
$business_suite = clean_input_4email($_POST["business_suite"]);
$business_city = clean_input_4email($_POST["business_city"]);
$business_state = clean_input_4email($_POST["business_state"]);
$business_zip = clean_input_4email($_POST["business_zip"]);
$contact_firstname = clean_input_4email($_POST["contact_firstname"]);
$contact_lastname = clean_input_4email($_POST["contact_lastname"]);
$contact_email = clean_input_4email($_POST["contact_email"]);
$contact_title = clean_input_4email($_POST["contact_title"]);
$contact_phone = clean_input_4email($_POST["contact_phone"]);
$contact_ext = clean_input_4email($_POST["contact_ext"]);
$applying_for = clean_input_4email($_POST["applying_for"]);
$effective_month = clean_input_4email($_POST["effective_month"]);
$effective_year = clean_input_4email($_POST["effective_year"]);
//------------------------------
$dependent1_firstname = clean_input_4email($_POST["dependent1_firstname"]);
$dependent1_lastname = clean_input_4email($_POST["dependent1_lastname"]);
$dependent1_sex = clean_input_4email($_POST["dependent1_sex"], false);
$dependent1_age = clean_input_4email($_POST["dependent1_age"]);
$dependent1_zip = clean_input_4email($_POST["dependent1_zip"]);
$dependent1_coverage = clean_input_4email($_POST["dependent1_coverage"], false);
//------------------------------
$dependent2_firstname = clean_input_4email($_POST["dependent2_firstname"]);
$dependent2_lastname = clean_input_4email($_POST["dependent2_lastname"]);
$dependent2_sex = clean_input_4email($_POST["dependent2_sex"], false);
$dependent2_age = clean_input_4email($_POST["dependent2_age"]);
$dependent2_zip = clean_input_4email($_POST["dependent2_zip"]);
$dependent2_coverage = clean_input_4email($_POST["dependent2_coverage"], false);
//------------------------------
$dependent3_firstname = clean_input_4email($_POST["dependent3_firstname"]);
$dependent3_lastname = clean_input_4email($_POST["dependent3_lastname"]);
$dependent3_sex = clean_input_4email($_POST["dependent3_sex"], false);
$dependent3_age = clean_input_4email($_POST["dependent3_age"]);
$dependent3_zip = clean_input_4email($_POST["dependent3_zip"]);
$dependent3_coverage = clean_input_4email($_POST["dependent3_coverage"], false);
//------------------------------
$dependent4_firstname = clean_input_4email($_POST["dependent4_firstname"]);
$dependent4_lastname = clean_input_4email($_POST["dependent4_lastname"]);
$dependent4_sex = clean_input_4email($_POST["dependent4_sex"], false);
$dependent4_age = clean_input_4email($_POST["dependent4_age"]);
$dependent4_zip = clean_input_4email($_POST["dependent4_zip"]);
$dependent4_coverage = clean_input_4email($_POST["dependent4_coverage"], false);
//------------------------------
$dependent5_firstname = clean_input_4email($_POST["dependent5_firstname"]);
$dependent5_lastname = clean_input_4email($_POST["dependent5_lastname"]);
$dependent5_sex = clean_input_4email($_POST["dependent5_sex"], false);
$dependent5_age = clean_input_4email($_POST["dependent5_age"]);
$dependent5_zip = clean_input_4email($_POST["dependent5_zip"]);
$dependent5_coverage = clean_input_4email($_POST["dependent5_coverage"], false);
//------------------------------
$dependent6_firstname = clean_input_4email($_POST["dependent6_firstname"]);
$dependent6_lastname = clean_input_4email($_POST["dependent6_lastname"]);
$dependent6_sex = clean_input_4email($_POST["dependent6_sex"], false);
$dependent6_age = clean_input_4email($_POST["dependent6_age"]);
$dependent6_zip = clean_input_4email($_POST["dependent6_zip"]);
$dependent6_coverage = clean_input_4email($_POST["dependent6_coverage"], false);
//------------------------------
$dependent7_firstname = clean_input_4email($_POST["dependent7_firstname"]);
$dependent7_lastname = clean_input_4email($_POST["dependent7_lastname"]);
$dependent7_sex = clean_input_4email($_POST["dependent7_sex"], false);
$dependent7_age = clean_input_4email($_POST["dependent7_age"]);
$dependent7_zip = clean_input_4email($_POST["dependent7_zip"]);
$dependent7_coverage = clean_input_4email($_POST["dependent7_coverage"], false);
//------------------------------
$dependent8_firstname = clean_input_4email($_POST["dependent8_firstname"]);
$dependent8_lastname = clean_input_4email($_POST["dependent8_lastname"]);
$dependent8_sex = clean_input_4email($_POST["dependent8_sex"], false);
$dependent8_age = clean_input_4email($_POST["dependent8_age"]);
$dependent8_zip = clean_input_4email($_POST["dependent8_zip"]);
$dependent8_coverage = clean_input_4email($_POST["dependent8_coverage"], false);
//------------------------------
$dependent9_firstname = clean_input_4email($_POST["dependent9_firstname"]);
$dependent9_lastname = clean_input_4email($_POST["dependent9_lastname"]);
$dependent9_sex = clean_input_4email($_POST["dependent9_sex"], false);
$dependent9_age = clean_input_4email($_POST["dependent9_age"]);
$dependent9_zip = clean_input_4email($_POST["dependent9_zip"]);
$dependent9_coverage = clean_input_4email($_POST["dependent9_coverage"], false);
//------------------------------
$dependent10_firstname = clean_input_4email($_POST["dependent10_firstname"]);
$dependent10_lastname = clean_input_4email($_POST["dependent10_lastname"]);
$dependent10_sex = clean_input_4email($_POST["dependent10_sex"], false);
$dependent10_age = clean_input_4email($_POST["dependent10_age"]);
$dependent10_zip = clean_input_4email($_POST["dependent10_zip"]);
$dependent10_coverage = clean_input_4email($_POST["dependent10_coverage"], false);
//------------------------------

$error_msg='ERROR - Your information was not submitted due to an internal error. \n Please let us know about this so we can correct it.';

$success_sent_msg='<META HTTP-EQUIV="Refresh" Content= "0; URL=https://bmgadministrators.com/thanks_quote.php">';
//$success_sent_msg='<p>Debug</p>';

$replymessage = "Dear $contact_firstname,

    This is a confirmation email from The Benefits Management Group. You have submitted an \"Online Quote Request for Medical Insurance for Businesses and Groups\". A copy of the information you submitted is included below. One of our representatives will be contacting you soon to further assist you.

    Sincerely,

        The Benefits Management Group
        (951) 684-0211
        www.bmgadministrators.com

		
Here is a copy of the quote request you submitted:

======== Medical Insurance for businesses and groups =========

BUSINESS INFORMATION:

	Business Name:  $business_name
	Phone Number:  $business_phone (ext:$business_phone_ext)
	Address: 	
                $business_address
	            $business_suite
                $business_city, $business_state $business_zip

MAIN CONTACT INFORMATION:

	Name:  $contact_firstname  $contact_lastname
	Email:  $contact_email
	Business Title:  $contact_title
	Phone number:  $contact_phone (ext:$contact_ext)

APPLICATION DETAILS:

	Applying For:  $applying_for
	Requested Effective Date:  $effective_month/01/$effective_year

EMPLOYEES TO COVER:
(The employees and associates who will be covered by this medical policy...)

";

if($dependent1_firstname == "")
{
	$replymessage .= "        You have not included any dependents for this policy\n\n";
}
if($dependent1_firstname != "")
{
	$replymessage .= "        Dependent One:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent1_firstname $dependent1_lastname\n";
	$replymessage .= "        Gender: $dependent1_sex\n";
	$replymessage .= "        Zip Code: $dependent1_zip\n";
	$replymessage .= "        Coverage Type: $dependent1_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent2_firstname != "")
{
	$replymessage .= "        Dependent Two:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent2_firstname $dependent2_lastname\n";
	$replymessage .= "        Gender: $dependent2_sex\n";
	$replymessage .= "        Zip Code: $dependent2_zip\n";
	$replymessage .= "        Coverage Type: $dependent2_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent3_firstname != "")
{
	$replymessage .= "        Dependent Three:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent3_firstname $dependent3_lastname\n";
	$replymessage .= "        Gender: $dependent3_sex\n";
	$replymessage .= "        Zip Code: $dependent3_zip\n";
	$replymessage .= "        Coverage Type: $dependent3_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent4_firstname != "")
{
	$replymessage .= "        Dependent Four:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent4_firstname $dependent4_lastname\n";
	$replymessage .= "        Gender: $dependent4_sex\n";
	$replymessage .= "        Zip Code: $dependent4_zip\n";
	$replymessage .= "        Coverage Type: $dependent4_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent5_firstname != "")
{
	$replymessage .= "        Dependent Five:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent5_firstname $dependent5_lastname\n";
	$replymessage .= "        Gender: $dependent5_sex\n";
	$replymessage .= "        Zip Code: $dependent5_zip\n";
	$replymessage .= "        Coverage Type: $dependent5_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent6_firstname != "")
{
	$replymessage .= "        Dependent Six:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent6_firstname $dependent6_lastname\n";
	$replymessage .= "        Gender: $dependent6_sex\n";
	$replymessage .= "        Zip Code: $dependent6_zip\n";
	$replymessage .= "        Coverage Type: $dependent6_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent7_firstname != "")
{
	$replymessage .= "        Dependent Seven:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent7_firstname $dependent7_lastname\n";
	$replymessage .= "        Gender: $dependent7_sex\n";
	$replymessage .= "        Zip Code: $dependent7_zip\n";
	$replymessage .= "        Coverage Type: $dependent7_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent8_firstname != "")
{
	$replymessage .= "        Dependent Eight:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent8_firstname $dependent8_lastname\n";
	$replymessage .= "        Gender: $dependent8_sex\n";
	$replymessage .= "        Zip Code: $dependent8_zip\n";
	$replymessage .= "        Coverage Type: $dependent8_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent9_firstname != "")
{
	$replymessage .= "        Dependent Nine:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent9_firstname $dependent9_lastname\n";
	$replymessage .= "        Gender: $dependent9_sex\n";
	$replymessage .= "        Zip Code: $dependent9_zip\n";
	$replymessage .= "        Coverage Type: $dependent9_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent10_firstname != "")
{
	$replymessage .= "        Dependent Ten:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        $dependent10_firstname $dependent10_lastname\n";
	$replymessage .= "        Gender: $dependent10_sex\n";
	$replymessage .= "        Zip Code: $dependent10_zip\n";
	$replymessage .= "        Coverage Type: $dependent10_coverage\n";
	$replymessage .= "        ------------------------------\n\n";
}

$replymessage .= "
TERMS AGREEMENT:

	Agreed to the Terms?:  You marked \"Yes\".  
	You can review these Terms and Conditions here:

TERMS AND CONDITIONS REVIEW:

	Acknowledgements:
	
	* To the best of my knowledge and belief, each of the statements and answers supplied in this form is complete and true, and they constitute the sole basis for, and are the inducement for, the Issuance of any insurance.
	* I hereby apply as indicated herein for the insurance for which I am not now insured and for which I am or may become eligible under the terms of Benefits Management Group's group policy or policies (including any future amendments) applying to, or requested to apply to, the group named above. When necessary, I may be asked to execute a HIPAA authorization form, allowing Benefits Management Group's to use and disclose protected health information.
	* I acknowledge that this is a 12-month agreement. In the event that I cancel my insurance prior to a 12-month enrollment, I understand that I will be obligated to pay the remaining months of the 12-month agreement.
	* I understand that this submission does not guarantee nor complete my enrollment. My actual enrollment and effective date will be processed and assigned by Benefits Management Group.

	Fees and Terms:
	
	- Enrollment Period: 12-month enrollment required. Early termination penalties apply.
	- Initial Enrollment Fee - \$20 (One-time fee charged upon enrollment.)
	- Dental - \$8.00 monthly fee
	- Chiropractic - \$3.00 monthly fee
	- Vision - \$3.00 monthly fee

	Payments:

	- Due Date: Bills are due on or before the 1st of the month.
	- Late Fees: \$20.00 late charge will be assessed for payments received after the due date
	- Termination: Will occur if payment is not received in our office by the 10th.
	- Reinstatement: \$50.00 re-instatement fee for dental, chiropractic, or vision plus late fee.
	- NSF Fee - Checks are subject to a \$25.00 fee. Further payments must be a money order or cashier's check.
	
";

// email variable not set - load $valid_ref1 page
//if (!isset($_POST['email']))
//{
// echo "<script language=\"JavaScript\"><!--\n ";
// echo "top.location.href = \"$valid_ref1\"; \n// --></script>";
// exit;
//}

$ref_page=$_SERVER["HTTP_REFERER"];
$valid_referrer=0;
if($ref_page==$valid_ref1) $valid_referrer=1;
elseif($ref_page==$valid_ref2) $valid_referrer=1;
if(!$valid_referrer)
{
 echo "<script language=\"JavaScript\"><!--\n alert(\"$error_msg\");\n";
 echo "top.location.href = \"$valid_ref1\"; \n// --></script>";
 exit;
}

$finalmessage = "An online quote request has been recieved through your web site: (more specifically: $ref_page)

======== Medical Insurance for businesses and groups =========

BUSINESS INFORMATION:

	Business Name:  $business_name
	Phone Number:  $business_phone (ext:$business_phone_ext)
	Address: 	
                $business_address
	            $business_suite
                $business_city, $business_state $business_zip

MAIN CONTACT INFORMATION:

	Name:  $contact_firstname  $contact_lastname
	Email:  $contact_email
	Business Title:  $contact_title
	Phone number:  $contact_phone (ext:$contact_ext)

APPLICATION DETAILS:

	Applying For:  $applying_for
	Requested Effective Date:  $effective_month/01/$effective_year

EMPLOYEES TO COVER (if any):

The employees and associates who will be covered by this medical policy...

";

if($dependent1_firstname != "")
{
	$finalmessage .= "        Dependent One:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent1_firstname $dependent1_lastname\n";
	$finalmessage .= "        Gender: $dependent1_sex\n";
	$finalmessage .= "        Zip Code: $dependent1_zip\n";
	$finalmessage .= "        Coverage Type: $dependent1_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent2_firstname != "")
{
	$finalmessage .= "        Dependent Two:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent2_firstname $dependent2_lastname\n";
	$finalmessage .= "        Gender: $dependent2_sex\n";
	$finalmessage .= "        Zip Code: $dependent2_zip\n";
	$finalmessage .= "        Coverage Type: $dependent2_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent3_firstname != "")
{
	$finalmessage .= "        Dependent Three:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent3_firstname $dependent3_lastname\n";
	$finalmessage .= "        Gender: $dependent3_sex\n";
	$finalmessage .= "        Zip Code: $dependent3_zip\n";
	$finalmessage .= "        Coverage Type: $dependent3_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent4_firstname != "")
{
	$finalmessage .= "        Dependent Four:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent4_firstname $dependent4_lastname\n";
	$finalmessage .= "        Gender: $dependent4_sex\n";
	$finalmessage .= "        Zip Code: $dependent4_zip\n";
	$finalmessage .= "        Coverage Type: $dependent4_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent5_firstname != "")
{
	$finalmessage .= "        Dependent Five:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent5_firstname $dependent5_lastname\n";
	$finalmessage .= "        Gender: $dependent5_sex\n";
	$finalmessage .= "        Zip Code: $dependent5_zip\n";
	$finalmessage .= "        Coverage Type: $dependent5_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent6_firstname != "")
{
	$finalmessage .= "        Dependent Six:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent6_firstname $dependent6_lastname\n";
	$finalmessage .= "        Gender: $dependent6_sex\n";
	$finalmessage .= "        Zip Code: $dependent6_zip\n";
	$finalmessage .= "        Coverage Type: $dependent6_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent7_firstname != "")
{
	$finalmessage .= "        Dependent Seven:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent7_firstname $dependent7_lastname\n";
	$finalmessage .= "        Gender: $dependent7_sex\n";
	$finalmessage .= "        Zip Code: $dependent7_zip\n";
	$finalmessage .= "        Coverage Type: $dependent7_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent8_firstname != "")
{
	$finalmessage .= "        Dependent Eight:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent8_firstname $dependent8_lastname\n";
	$finalmessage .= "        Gender: $dependent8_sex\n";
	$finalmessage .= "        Zip Code: $dependent8_zip\n";
	$finalmessage .= "        Coverage Type: $dependent8_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent9_firstname != "")
{
	$finalmessage .= "        Dependent Nine:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent9_firstname $dependent9_lastname\n";
	$finalmessage .= "        Gender: $dependent9_sex\n";
	$finalmessage .= "        Zip Code: $dependent9_zip\n";
	$finalmessage .= "        Coverage Type: $dependent9_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent10_firstname != "")
{
	$finalmessage .= "        Dependent Ten:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        $dependent10_firstname $dependent10_lastname\n";
	$finalmessage .= "        Gender: $dependent10_sex\n";
	$finalmessage .= "        Zip Code: $dependent10_zip\n";
	$finalmessage .= "        Coverage Type: $dependent10_coverage\n";
	$finalmessage .= "        ------------------------------\n\n";
}

mail("$replyemail",
     "KaiserMedicalInsurance.com: Medical Insurance Quote Request - Business/Group",
     "$finalmessage",
     "From: $contact_email\nReply-To: $contact_email");
mail("$contact_email",
     "Quote Request Confirmation: The Benefits Management Group",
     "$replymessage",
     "From: $replyemail\nReply-To: $replyemail");
echo $success_sent_msg;

?>