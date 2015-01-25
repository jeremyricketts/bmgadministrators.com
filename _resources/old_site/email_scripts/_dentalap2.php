<?php
/* PHP Form Mailer - phpFormMailer v2.1, last updated 30th Nov 2005 - check back often for updates!
   (easy to use and more secure than many cgi form mailers) FREE from:
                  www.TheDemoSite.co.uk
      Should work fine on most Unix/Linux platforms */

// ------- three variables you MUST change below  -------------------------------------------------------
$valid_ref1="https://bmgadministrators.com/dental-ap2.php";// change "Your--domain" to your domain
$valid_ref2="https://www.bmgadministrators.com/dental-ap2.php";// change "Your--domain" to your domain
//$replyemail="email@jeremyricketts.com";
$replyemail="swpark@ark-insurance.com";
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

$firstname = clean_input_4email($_POST["firstname"]);
$middlename = clean_input_4email($_POST["middlename"]);
$lastname = clean_input_4email($_POST["lastname"]);
$address = clean_input_4email($_POST["address"]);
$city = clean_input_4email($_POST["city"]);
$state = clean_input_4email($_POST["state"]);
$zip = clean_input_4email($_POST["zip"]);
$social_security_number = clean_input_4email($_POST["social_security_number"]);
$birthdate = clean_input_4email($_POST["birthdate"]);
$sex = clean_input_4email($_POST["sex"]);
$phone = clean_input_4email($_POST["phone"]);
$ext = clean_input_4email($_POST["ext"]);
$email = clean_input_4email($_POST["email"]);
$applying_for = clean_input_4email($_POST["applying_for"]);
$effective_month = clean_input_4email($_POST["effective_month"]);
$effective_year = clean_input_4email($_POST["effective_year"]);
$terms = clean_input_4email($_POST["terms"], false);
$dentist_id = clean_input_4email($_POST["dentist_id"]);
//------------------------------
$dependent1_name = clean_input_4email($_POST["dependent1_name"]);
$dependent1_relationship = clean_input_4email($_POST["dependent1_relationship"]);
$dependent1_sex = clean_input_4email($_POST["dependent1_sex"], false);
$dependent1_bday_month = clean_input_4email($_POST["dependent1_bday_month"]);
$dependent1_bday_day = clean_input_4email($_POST["dependent1_bday_day"]);
$dependent1_bday_year = clean_input_4email($_POST["dependent1_bday_year"]);
$dependent1_student = clean_input_4email($_POST["dependent1_student"], false);
//------------------------------
$dependent2_name = clean_input_4email($_POST["dependent2_name"]);
$dependent2_relationship = clean_input_4email($_POST["dependent2_relationship"]);
$dependent2_sex = clean_input_4email($_POST["dependent2_sex"], false);
$dependent2_bday_month = clean_input_4email($_POST["dependent2_bday_month"]);
$dependent2_bday_day = clean_input_4email($_POST["dependent2_bday_day"]);
$dependent2_bday_year = clean_input_4email($_POST["dependent2_bday_year"]);
$dependent2_student = clean_input_4email($_POST["dependent2_student"], false);
//------------------------------
$dependent3_name = clean_input_4email($_POST["dependent3_name"]);
$dependent3_relationship = clean_input_4email($_POST["dependent3_relationship"]);
$dependent3_sex = clean_input_4email($_POST["dependent3_sex"], false);
$dependent3_bday_month = clean_input_4email($_POST["dependent3_bday_month"]);
$dependent3_bday_day = clean_input_4email($_POST["dependent3_bday_day"]);
$dependent3_bday_year = clean_input_4email($_POST["dependent3_bday_year"]);
$dependent3_student = clean_input_4email($_POST["dependent3_student"], false);
//------------------------------
$dependent4_name = clean_input_4email($_POST["dependent4_name"]);
$dependent4_relationship = clean_input_4email($_POST["dependent4_relationship"]);
$dependent4_sex = clean_input_4email($_POST["dependent4_sex"], false);
$dependent4_bday_month = clean_input_4email($_POST["dependent4_bday_month"]);
$dependent4_bday_day = clean_input_4email($_POST["dependent4_bday_day"]);
$dependent4_bday_year = clean_input_4email($_POST["dependent4_bday_year"]);
$dependent4_student = clean_input_4email($_POST["dependent4_student"], false);
//------------------------------
$dependent5_name = clean_input_4email($_POST["dependent5_name"]);
$dependent5_relationship = clean_input_4email($_POST["dependent5_relationship"]);
$dependent5_sex = clean_input_4email($_POST["dependent5_sex"], false);
$dependent5_bday_month = clean_input_4email($_POST["dependent5_bday_month"]);
$dependent5_bday_day = clean_input_4email($_POST["dependent5_bday_day"]);
$dependent5_bday_year = clean_input_4email($_POST["dependent5_bday_year"]);
$dependent5_student = clean_input_4email($_POST["dependent5_student"], false);
//------------------------------
$dependent6_name = clean_input_4email($_POST["dependent6_name"]);
$dependent6_relationship = clean_input_4email($_POST["dependent6_relationship"]);
$dependent6_sex = clean_input_4email($_POST["dependent6_sex"], false);
$dependent6_bday_month = clean_input_4email($_POST["dependent6_bday_month"]);
$dependent6_bday_day = clean_input_4email($_POST["dependent6_bday_day"]);
$dependent6_bday_year = clean_input_4email($_POST["dependent6_bday_year"]);
$dependent6_student = clean_input_4email($_POST["dependent6_student"], false);
//------------------------------
$dependent7_name = clean_input_4email($_POST["dependent7_name"]);
$dependent7_relationship = clean_input_4email($_POST["dependent7_relationship"]);
$dependent7_sex = clean_input_4email($_POST["dependent7_sex"], false);
$dependent7_bday_month = clean_input_4email($_POST["dependent7_bday_month"]);
$dependent7_bday_day = clean_input_4email($_POST["dependent7_bday_day"]);
$dependent7_bday_year = clean_input_4email($_POST["dependent7_bday_year"]);
$dependent7_student = clean_input_4email($_POST["dependent7_student"], false);
//------------------------------
$dependent8_name = clean_input_4email($_POST["dependent8_name"]);
$dependent8_relationship = clean_input_4email($_POST["dependent8_relationship"]);
$dependent8_sex = clean_input_4email($_POST["dependent8_sex"], false);
$dependent8_bday_month = clean_input_4email($_POST["dependent8_bday_month"]);
$dependent8_bday_day = clean_input_4email($_POST["dependent8_bday_day"]);
$dependent8_bday_year = clean_input_4email($_POST["dependent8_bday_year"]);
$dependent8_student = clean_input_4email($_POST["dependent8_student"], false);
//------------------------------
$dependent9_name = clean_input_4email($_POST["dependent9_name"]);
$dependent9_relationship = clean_input_4email($_POST["dependent9_relationship"]);
$dependent9_sex = clean_input_4email($_POST["dependent9_sex"], false);
$dependent9_bday_month = clean_input_4email($_POST["dependent9_bday_month"]);
$dependent9_bday_day = clean_input_4email($_POST["dependent9_bday_day"]);
$dependent9_bday_year = clean_input_4email($_POST["dependent9_bday_year"]);
$dependent9_student = clean_input_4email($_POST["dependent9_student"], false);
//------------------------------
$dependent10_name = clean_input_4email($_POST["dependent10_name"]);
$dependent10_relationship = clean_input_4email($_POST["dependent10_relationship"]);
$dependent10_sex = clean_input_4email($_POST["dependent10_sex"], false);
$dependent10_bday_month = clean_input_4email($_POST["dependent10_bday_month"]);
$dependent10_bday_day = clean_input_4email($_POST["dependent10_bday_day"]);
$dependent10_bday_year = clean_input_4email($_POST["dependent10_bday_year"]);
$dependent10_student = clean_input_4email($_POST["dependent10_student"], false);

$error_msg='ERROR - Your information was not submitted due to an internal error. \n Please let us know about this so we can correct it.';

$success_sent_msg='<META HTTP-EQUIV="Refresh" Content= "0; URL=https://bmgadministrators.com/thanks_ap.php">';
//$success_sent_msg='<p>Debug</p>';

$replymessage = "Dear $firstname,

    This is a confirmation email from The Benefits Management Group. You have submitted an \"Online Application for HMO Dental Insurance for Individuals and Families\". A copy of the information you submitted is included below. One of our representatives will be contacting you soon to further assist you and complete the application process.

    Sincerely,

        The Benefits Management Group
        (951) 684-0211
        www.bmgadministrators.com


Here is a copy of the Online Application you submitted:

======== HMO Dental Insurance for Individuals and Families =========

YOUR INFORMATION:

	Name:  $firstname $middlename $lastname
	Phone Number:  $phone (ext:$ext)
	Email: $email
	Address: 	
                $address
                $city, $state $zip
	Social Security Number: **********
	Birthday:  $birthdate
	Gender: $sex


APPLICATION DETAILS:

	Insurance Type:  HMO Dental
	Dentist Choice:  ID #$dentist_id
	Applying For:  $applying_for
	Requested Effective Date:  $effective_month/01/$effective_year


POLICY DEPENDENTS:
(The spouse or family members who will be covered by this HMO dental policy...)

";

if($dependent1_name == "")
{
	$replymessage .= "        You have not included any dependents for this policy.\n\n";
}
if($dependent1_name != "")
{
	$replymessage .= "        Dependent One:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent1_name\n";
	$replymessage .= "        Relationship: $dependent1_relationship\n";
	$replymessage .= "        Gender: $dependent1_sex\n";
	$replymessage .= "        Birthday: $dependent1_bday_month/$dependent1_bday_day/$dependent1_bday_year\n";
	$replymessage .= "        Student: $dependent1_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent2_name != "")
{
	$replymessage .= "        Dependent Two:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent2_name\n";
	$replymessage .= "        Relationship: $dependent2_relationship\n";
	$replymessage .= "        Gender: $dependent2_sex\n";
	$replymessage .= "        Birthday: $dependent2_bday_month/$dependent2_bday_day/$dependent2_bday_year\n";
	$replymessage .= "        Student: $dependent2_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent3_name != "")
{
	$replymessage .= "        Dependent Three:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent3_name\n";
	$replymessage .= "        Relationship: $dependent3_relationship\n";
	$replymessage .= "        Gender: $dependent3_sex\n";
	$replymessage .= "        Birthday: $dependent3_bday_month/$dependent3_bday_day/$dependent3_bday_year\n";
	$replymessage .= "        Student: $dependent3_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent4_name != "")
{
	$replymessage .= "        Dependent Four:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent4_name\n";
	$replymessage .= "        Relationship: $dependent4_relationship\n";
	$replymessage .= "        Gender: $dependent4_sex\n";
	$replymessage .= "        Birthday: $dependent4_bday_month/$dependent4_bday_day/$dependent4_bday_year\n";
	$replymessage .= "        Student: $dependent4_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent5_name != "")
{
	$replymessage .= "        Dependent Five:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent5_name\n";
	$replymessage .= "        Relationship: $dependent5_relationship\n";
	$replymessage .= "        Gender: $dependent5_sex\n";
	$replymessage .= "        Birthday: $dependent5_bday_month/$dependent5_bday_day/$dependent5_bday_year\n";
	$replymessage .= "        Student: $dependent5_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent6_name != "")
{
	$replymessage .= "        Dependent Six:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent6_name\n";
	$replymessage .= "        Relationship: $dependent6_relationship\n";
	$replymessage .= "        Gender: $dependent6_sex\n";
	$replymessage .= "        Birthday: $dependent6_bday_month/$dependent6_bday_day/$dependent6_bday_year\n";
	$replymessage .= "        Student: $dependent6_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent7_name != "")
{
	$replymessage .= "        Dependent Seven:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent7_name\n";
	$replymessage .= "        Relationship: $dependent7_relationship\n";
	$replymessage .= "        Gender: $dependent7_sex\n";
	$replymessage .= "        Birthday: $dependent7_bday_month/$dependent7_bday_day/$dependent7_bday_year\n";
	$replymessage .= "        Student: $dependent7_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent8_name != "")
{
	$replymessage .= "        Dependent Eight:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent8_name\n";
	$replymessage .= "        Relationship: $dependent8_relationship\n";
	$replymessage .= "        Gender: $dependent8_sex\n";
	$replymessage .= "        Birthday: $dependent8_bday_month/$dependent8_bday_day/$dependent8_bday_year\n";
	$replymessage .= "        Student: $dependent8_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent9_name != "")
{
	$replymessage .= "        Dependent Nine:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent9_name\n";
	$replymessage .= "        Relationship: $dependent9_relationship\n";
	$replymessage .= "        Gender: $dependent9_sex\n";
	$replymessage .= "        Birthday: $dependent9_bday_month/$dependent9_bday_day/$dependent9_bday_year\n";
	$replymessage .= "        Student: $dependent9_student\n";
	$replymessage .= "        ------------------------------\n\n";
}
if($dependent10_name != "")
{
	$replymessage .= "        Dependent Ten:\n";
	$replymessage .= "        ------------------------------\n";
	$replymessage .= "        Name: $dependent10_name\n";
	$replymessage .= "        Relationship: $dependent10_relationship\n";
	$replymessage .= "        Gender: $dependent10_sex\n";
	$replymessage .= "        Birthday: $dependent10_bday_month/$dependent10_bday_day/$dependent10_bday_year\n";
	$replymessage .= "        Student: $dependent10_student\n";
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

$finalmessage = "An Online Application has been received through your web site: (more specifically: $ref_page)

======== HMO Dental Insurance for Individuals and Families =========

APPLICANT INFORMATION:

	Name:  $firstname $middlename $lastname
	Phone Number:  $phone (ext:$ext)
	Email: $email
	Address: 	
                $address
                $city, $state $zip
	Social Security Number: $social_security_number
	Birthday:  $birthdate
	Gender: $sex


APPLICATION DETAILS:

	Insurance Type:  HMO Dental
	Dentist Choice:  ID #$dentist_id
	Applying For:  $applying_for
	Requested Effective Date:  $effective_month/01/$effective_year

POLICY DEPENDENTS:
(The spouse or family members who will be covered by this policy...)

";

if($dependent1_name == "")
{
	$finalmessage .= "        No dependents were included.\n\n";
}
if($dependent1_name != "")
{
	$finalmessage .= "        Dependent One:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent1_name\n";
	$finalmessage .= "        Relationship: $dependent1_relationship\n";
	$finalmessage .= "        Gender: $dependent1_sex\n";
	$finalmessage .= "        Birthday: $dependent1_bday_month/$dependent1_bday_day/$dependent1_bday_year\n";
	$finalmessage .= "        Student: $dependent1_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent2_name != "")
{
	$finalmessage .= "        Dependent Two:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent2_name\n";
	$finalmessage .= "        Relationship: $dependent2_relationship\n";
	$finalmessage .= "        Gender: $dependent2_sex\n";
	$finalmessage .= "        Birthday: $dependent2_bday_month/$dependent2_bday_day/$dependent2_bday_year\n";
	$finalmessage .= "        Student: $dependent2_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent3_name != "")
{
	$finalmessage .= "        Dependent Three:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent3_name\n";
	$finalmessage .= "        Relationship: $dependent3_relationship\n";
	$finalmessage .= "        Gender: $dependent3_sex\n";
	$finalmessage .= "        Birthday: $dependent3_bday_month/$dependent3_bday_day/$dependent3_bday_year\n";
	$finalmessage .= "        Student: $dependent3_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent4_name != "")
{
	$finalmessage .= "        Dependent Four:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent4_name\n";
	$finalmessage .= "        Relationship: $dependent4_relationship\n";
	$finalmessage .= "        Gender: $dependent4_sex\n";
	$finalmessage .= "        Birthday: $dependent4_bday_month/$dependent4_bday_day/$dependent4_bday_year\n";
	$finalmessage .= "        Student: $dependent4_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent5_name != "")
{
	$finalmessage .= "        Dependent Five:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent5_name\n";
	$finalmessage .= "        Relationship: $dependent5_relationship\n";
	$finalmessage .= "        Gender: $dependent5_sex\n";
	$finalmessage .= "        Birthday: $dependent5_bday_month/$dependent5_bday_day/$dependent5_bday_year\n";
	$finalmessage .= "        Student: $dependent5_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent6_name != "")
{
	$finalmessage .= "        Dependent Six:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent6_name\n";
	$finalmessage .= "        Relationship: $dependent6_relationship\n";
	$finalmessage .= "        Gender: $dependent6_sex\n";
	$finalmessage .= "        Birthday: $dependent6_bday_month/$dependent6_bday_day/$dependent6_bday_year\n";
	$finalmessage .= "        Student: $dependent6_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent7_name != "")
{
	$finalmessage .= "        Dependent Seven:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent7_name\n";
	$finalmessage .= "        Relationship: $dependent7_relationship\n";
	$finalmessage .= "        Gender: $dependent7_sex\n";
	$finalmessage .= "        Birthday: $dependent7_bday_month/$dependent7_bday_day/$dependent7_bday_year\n";
	$finalmessage .= "        Student: $dependent7_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent8_name != "")
{
	$finalmessage .= "        Dependent Eight:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent8_name\n";
	$finalmessage .= "        Relationship: $dependent8_relationship\n";
	$finalmessage .= "        Gender: $dependent8_sex\n";
	$finalmessage .= "        Birthday: $dependent8_bday_month/$dependent8_bday_day/$dependent8_bday_year\n";
	$finalmessage .= "        Student: $dependent8_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent9_name != "")
{
	$finalmessage .= "        Dependent Nine:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent9_name\n";
	$finalmessage .= "        Relationship: $dependent9_relationship\n";
	$finalmessage .= "        Gender: $dependent9_sex\n";
	$finalmessage .= "        Birthday: $dependent9_bday_month/$dependent9_bday_day/$dependent9_bday_year\n";
	$finalmessage .= "        Student: $dependent9_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}
if($dependent10_name != "")
{
	$finalmessage .= "        Dependent Ten:\n";
	$finalmessage .= "        ------------------------------\n";
	$finalmessage .= "        Name: $dependent10_name\n";
	$finalmessage .= "        Relationship: $dependent10_relationship\n";
	$finalmessage .= "        Gender: $dependent10_sex\n";
	$finalmessage .= "        Birthday: $dependent10_bday_month/$dependent10_bday_day/$dependent10_bday_year\n";
	$finalmessage .= "        Student: $dependent10_student\n";
	$finalmessage .= "        ------------------------------\n\n";
}

mail("$replyemail",
     "KaiserMedicalInsurance.com: HMO Dental Insurance Online Application - Individuals/Families",
     "$finalmessage",
     "From: $email\nReply-To: $email");
mail("$email",
     "Online Application Confirmation: The Benefits Management Group",
     "$replymessage",
     "From: $replyemail\nReply-To: $replyemail");
echo $success_sent_msg;

?>