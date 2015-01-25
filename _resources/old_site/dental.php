<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php $thisPage="Dental Insurance"; ?>
<?php include("_html_head.php"); ?>
<script type="text/javascript" src="js/swfobject.js"></script>
<?php include("_js_moo_and_boxover.php"); ?>
<script language="javascript" type="text/javascript">
window.onload = external;
</script>
</head>
<!-- toggle the 3 divs -->
<script type="text/javascript">
function toggle1()
        {
			document.getElementById('ppo_in_hide').style.display = 'none';
			document.getElementById('ppo_out_hide').style.display = 'none';
            //Effect.Fade('ppo_in_hide');
			//Effect.Fade('ppo_out_hide');
			new Effect.SlideDown('hmo_hide');
			Element.scrollTo('end');
        }  
function toggle2()
        {
			document.getElementById('hmo_hide').style.display = 'none';
			document.getElementById('ppo_out_hide').style.display = 'none';
            //Effect.Fade('hmo_hide');
			//Effect.Fade('ppo_out_hide');
			new Effect.SlideDown('ppo_in_hide');
			Element.scrollTo('end');
        }
function toggle3()
        {
			document.getElementById('ppo_in_hide').style.display = 'none';
			document.getElementById('hmo_hide').style.display = 'none';
            //Effect.Fade('ppo_in_hide');
			//Effect.Fade('hmo_hide');
			new Effect.SlideDown('ppo_out_hide');
			Element.scrollTo('end');
        }  	
</script>
<body>
	

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

<div id="banner" class="banner-dental"><!-- /SPECIFIC TO THIS PAGE -->
	<div id="show" style="padding-top:15px;">
	<script type="text/javascript">
	   var so = new SWFObject("dental.swf", "dental", "711", "224", "6", "#ffffff");
	   so.write("show");
	</script>
	</div>
</div><!-- banner  -->

<div id="wrapper-subnav">
	<div id="subnav">
		<ul id="subnav">
			<li><a href="https://bmgadministrators.com/dental.php" id="subnavPi" class="current">Dental Insurance Information</a></li>
			<li><a href="https://bmgadministrators.com/dental-ap1.php" id="subnavDentApply1">HMO Dental Application</a></li>
			<li><a href="https://bmgadministrators.com/dental-ap2.php" id="subnavDentApply2">PPO Dental Application</a></li>
		</ul>
	</div><!-- /subnav -->
</div><!-- /wrapper-subnav -->

<div id="content">
	<p class="quote"><span>Regular dental checkups</span> help to keep your teeth clean, last longer, and can prevent painful problems from developing.</p>
	<h2>Dental Insurance - The Basics</h2>
	<p>Most people looking into Dental Insurance already have dental problems. The better way, of course, is to see a dentist regularly so that proper dental care can be maintained.  When it comes to oral health preventative care is always better than reactive care.  But no matter which boat you find yourself in, BMG is committed to finding dental coverage you can live with. At BMG, we are passionate about oral health and its importance. We continually work to improve oral health by emphasizing preventative care and making dental coverage plans easily accessible and affordable.</p>

	<h2>PPO or HMO ?</h2>
	<p>Benefits Management Group offers a choice of either a PPO Plan or an HMO Dental Plan with<br /> Assurant/Fortis.<span id="help_bug" title="header=[<img src='images/information.png' style='vertical-align:middle'>&nbsp;&nbsp;Our Dental Provider:] body=[<img src='images/as-logo.gif'>] cssbody=[tip_body] cssheader=[tip_header]"><img src="images/help.png" alt="" border="none" /></span> Choosing the right plan is an important decision and we want to ensure that you get the type of coverage you need.</p>
	
<!--================================================================================-->	
<h2 class="which_plan">Find Out Which Plan is Right for You:</h2>
<div id="dental_menu">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><a href="javascript:toggle1();"><span>HMO <br />Dental Insurance Plan</span></a></td>
    <td valign="top"><a href="javascript:toggle2();"><span>PPO <br />Dental Insurance Plan</span><br />using an <b>in network</b> dentist</a></td>
    <td valign="top"><a href="javascript:toggle3();"><span>PPO <br />Dental Insurance Plan</span><br />using an <b>out of network</b> dentist</a></td>
  </tr>
  <tr>
    <td valign="top"><a href="javascript:toggle1();" title="View Details"><img src="images/arrow.gif" alt="" width="100" height="50" border="0" /></a></td>
    <td valign="top"><a href="javascript:toggle2();" title="View Details"><img src="images/arrow.gif" alt="" width="100" height="50" border="0" /></a></td>
    <td valign="top"><a href="javascript:toggle3();" title="View Details"><img src="images/arrow.gif" alt="" width="100" height="50" border="0" /></a></td>
  </tr>
</table>
</div><!-- /dental-menu  -->

<div id="hmo_hide" style="display:none;clear:both;">
<div id="hmo">
		<h3>HMO Dental Insurance</h3>
		<p><em>Preventive services covered in full. Co-pays for most other procedures. No waiting periods. No annual coverage maximum applies.</em></p>
		<p class="faq">F.A.Q.</p>
		<p class="dental_q">How Much Does it Cost?</p>
		<p class="dental_a">Single subscriber $12.58<br />
		Subscriber &amp; spouse $21.30<br />
		Subscriber &amp; child(ren) $26.85<br />
		Subscriber &amp; family $34.68<br /><br />
		The <em>monthly</em> administration fee is $8.00<br />
		Please make all checks payable to "Benefits Management Group"</p>
		<p class="dental_q">How much does it cost to get started?</p>
		<p class="dental_a">You must pay the first month's premium, the $8.00 monthly Administration Fee, and a one time Enrollment Fee of $20.00.</p>
		<p class="dental_q">What are the details? <span style="color:#999999;font-weight:lighter;">(Terms, Conditions and Fees)</span></p>
		<p class="dental_a"><img src="images/pdf.png" alt="" border="0" align="texttop"/> <a href="pdf/dental_administrative_procedures.pdf" target="_blank" title="View all Terms and Conditions">View all Terms, Conditions, and Fees</a></p>
		<p class="dental_q">When will my insurance start?</p>
		<p class="dental_a">Enrollments received prior to the 20th of each month will become effective the 1st of the following month.</p>
		<p class="dental_q">What does the insurance cover?</p>
		<p class="dental_a">Exams, X rays, Cleanings, Filings, and more (some treatments require co-pays).<br /><br />
		<img src="images/pdf.png" alt="" border="0" align="texttop"/> <a href="pdf/HMO_in_network_dental_details.pdf" title="View more details" target="_blank">View more details</a></p>
		<p class="dental_q">Are braces covered?</p>
		<p class="dental_a">Yes, on a referral basis, using an HMO provider for both adults and children. Co-pays apply.</p>
		<p class="dental_q">What dentist can I go to?</p>
		<p class="dental_a"><img src="images/link_go.png" alt="" border="0" align="texttop"/> <a href="http://assurant.go2dental.com/member/dental_search/srchinp.cgi?plan_number=27" title="View the list of Dentists that accept this type of plan." target="_blank">View the list of Dentists that accept this type of plan.</a></p>
		<p class="dental_q">Can I change my dentist later?</p>
		<p class="dental_a">We need you to pick a dentist now to get you enrolled but <b>YES</b> you can change your dentist later. We must receive notice no later than the 10th of the month for the change to be effective on the 1st of the next month. Changes can not be made while you are in the middle of treatment.</p>
</div><!-- /hmo -->
<p style="text-align:right;"><a href="#dental_menu" title="Back to the Top"><small><b>back to top</b></small></a></p>
</div><!-- /hmo_hide  -->

<div id="ppo_in_hide" style="display:none;clear:both;">
<div id="ppo_in" class="hide_dental">
		<h3>PPO Dental Insurance<br />With an In-Network Dentist</h3>
		<p><em>Preventive services covered in full. $50 Deductible. Waiting periods apply for some procedures.. $2000 Annual Maximum</em></p>
		<p class="faq">F.A.Q.</p>
		<p class="dental_q">How Much Does it Cost?</p>
		<p class="dental_a">Single subscriber $47.44<br />
		Subscriber &amp; spouse $100.92<br />
		Subscriber &amp; child(ren) $116.04<br />
		Subscriber &amp; family $169.52<br /><br />
		The <em>monthly</em> administration fee is $8.00<br />
		Please make all checks payable to "Benefits Management Group"</p>
		<p class="dental_q">How much does it cost to get started?</p>
		<p class="dental_a">You must pay the first month's premium, the $8.00 monthly Administration Fee, and a one time Enrollment Fee of $20.00.</p>
		<p class="dental_q">What are the details? <span style="color:#999999;font-weight:lighter;">(Terms, Conditions and Fees)</span></p>
		<p class="dental_a"><img src="images/pdf.png" alt="" border="0" align="texttop"/> <a href="pdf/dental_administrative_procedures.pdf" target="_blank" title="View all Terms and Conditions">View all Terms, Conditions, and Fees</a></p>
		<p class="dental_q">When will my insurance start?</p>
		<p class="dental_a">Enrollments received prior to the 20th of each month will become effective the 1st of the following month.</p>
		<p class="dental_q">What does the insurance cover?</p>
		<p class="dental_a">Exams, X rays, Cleanings, Filings and more (waiting periods apply for some procedures).<br /><br />
		<img src="images/pdf.png" alt="" border="0" align="texttop"/> <a href="pdf/BMG_PPO_Dental_Plan_In_Network_2008to2009.pdf" title="View more details" target="_blank">View more details</a></p>
		<p class="dental_q">Are braces covered?</p>
		<p class="dental_a">Yes, please see benefits above./p>
		<p class="dental_q">What dentist can I go to?</p>
		<p class="dental_a"><img src="images/link_go.png" alt="" border="0" align="texttop"/> <a href="http://www.geoaccess.com/ameritas/po/1_Begin.asp?home=n&user=afsmoo" title="View the list of Dentists that accept this type of plan." target="_blank">View the list of Dentists that accept this type of plan.</a></p>
		
</div><!-- /ppo_in -->
<p style="text-align:right;"><a href="#dental_menu" title="Back to the Top"><small><b>back to top</b></small></a></p>
</div><!-- /ppo_in_hide -->

<div id="ppo_out_hide" style="display:none;clear:both;">
<div id="ppo_out" class="hide_dental">
		<h3>PPO Dental Insurance<br />With an Out-of-Network Network Dentist</h3>
		<p><em>Preventive services covered at 80%. Type II services covered at 70%. Type III services covered at 40%. Waiting periods apply for some procedures. $100 Deductible. $1000 Annual Maximum. All percentages paid on UCR fee schedule.</em></p>
		<p class="faq">F.A.Q.</p>
		<p class="dental_q">How Much Does it Cost?</p>
		<p class="dental_a">Single subscriber $47.44<br />
		Subscriber &amp; spouse $100.92<br />
		Subscriber &amp; child(ren) $116.04<br />
		Subscriber &amp; family $169.52<br /><br />
		The <em>monthly</em> administration fee is $8.00<br />
		Please make all checks payable to "Benefits Management Group"</p>
		<p class="dental_q">How much does it cost to get started?</p>
		<p class="dental_a">You must pay the first month's premium, the $8.00 monthly Administration Fee, and a one time Enrollment Fee of $20.00.</p>		
		<p class="dental_q">What are the details? <span style="color:#999999;font-weight:lighter;">(Terms, Conditions and Fees)</span></p>
		<p class="dental_a"><img src="images/pdf.png" alt="" border="0" align="texttop"/> <a href="pdf/dental_administrative_procedures.pdf" target="_blank" title="View all Terms and Conditions">View all Terms, Conditions, and Fees</a></p>
		<p class="dental_q">When will my insurance start?</p>
		<p class="dental_a">Enrollments received prior to the 20th of each month will become effective the 1st of the following month.</p>
		<p class="dental_q">What does the insurance cover?</p>
		<p class="dental_a">Services subject to $100 deductible. Exams, X rays, Cleanings, Filings and more (waiting periods apply for some procedures).<br /><br />
		<img src="images/pdf.png" alt="" border="0" align="texttop"/> <a href="pdf/BMG_PPO_Dental_Plan_Out_of_Network_2008to2009.pdf" title="View more details" target="_blank">View more details</a></p>
		<p class="dental_q">Are braces covered?</p>
		<p class="dental_a">Yes, please see benefits above.</p>
		<p class="dental_q">What dentist can I go to?</p>
		<p class="dental_a">Any dentist you choose. Claims paid are based on UCR fee schedule. Subscriber is 100% responsible for fees above UCR.</p>
</div><!-- /ppo_out -->
<p style="text-align:right;"><a href="#dental_menu" title="Back to FAQ Top"><small><b>back to FAQ top</b></small></a></p>
</div><!-- /ppo_out_hide -->

</div><!-- /index-content -->
<p class="clear" id="end" style="height:50px;"></p>
<?php include("_footer.php"); ?>
</body>
</html>