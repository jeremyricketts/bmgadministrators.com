<?php
/* PHP Form Mailer - phpFormMailer v2.1, last updated 30th Nov 2005 - check back often for updates!
   (easy to use and more secure than many cgi form mailers) FREE from:
                  www.TheDemoSite.co.uk
      Should work fine on most Unix/Linux platforms */

// ------- three variables you MUST change below  -------------------------------------------------------
$valid_ref1="https://bmgadministrators.com/contact.php";// chamge "Your--domain" to your domain
$valid_ref2="https://www.bmgadministrators.com/contact.php";// chamge "Your--domain" to your domain
//$replyemail="email@jeremyricketts.com";//change to your email address
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
 //return preg_replace($patterns, "");
 return preg_replace($patterns, "", strtolower($value));
}

$name = clean_input_4email($_POST["name"]);
$email = clean_input_4email($_POST["email"]);
$phone = clean_input_4email($_POST["phone"]);
$route = clean_input_4email($_POST["route"]);
//$themessage = clean_input_4email($_POST["themessage"], false);
$inquiry = clean_input_4email($_POST["inquiry"]);


$error_msg='ERROR - not sent. Try again.';

//$success_sent_msg='<p>yo</p>';
$success_sent_msg='<META HTTP-EQUIV="Refresh" Content= "0; URL=https://bmgadministrators.com/thanks_contact.php">';

$replymessage = "Dear $name,

Thank you for visiting bmgadministrators.com! This is an automated response, but we look forward to contacting you soon.  

Sincerely,

The Benefits Management Group
(951) 684-0211
www.bmgadministrators.com

Here is a copy of the message you submitted:

==================================================
NAME:
$name

PHONE NUMBER:
$phone

EMAIL:
$email

INQUIRY REGUARDING:
$route

INQUIRY:
$inquiry

==================================================
";

// email variable not set - load $valid_ref1 page
if (!isset($_POST['email']))
{
 echo "<script language=\"JavaScript\"><!--\n ";
 echo "top.location.href = \"$valid_ref1\"; \n// --></script>";
 exit;
}

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

$finalmessage = "An inquiry has been made via the KaiserMedicalInsurance.com Contact Form. ($ref_page)

Here are the details:

==================================================
NAME:
$name

PHONE NUMBER:
$phone

EMAIL:
$email

INQUIRY REGARDING:
$route

INQUIRY:
$inquiry

==================================================

";

// WOOHOOO THIS WORKS
//if($moreinfo != "")
//{
//	$finalmessage .= "Here is some more: ";
//	$finalmessage .= "$moreinfo"; 
//}

mail("$replyemail",
     "KaiserMedicalInsurance.com Contact Form Inquiry",
     "$finalmessage",
     "From: $email\nReply-To: $email");
mail("$email",
     "Thank you for contacting the Benefits Management Group",
     "$replymessage",
     "From: $replyemail\nReply-To: $replyemail");
echo $success_sent_msg;

?>