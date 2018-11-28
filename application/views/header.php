<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo isset($meta_title)?$meta_title:''; ?></title>
	<meta name="description" content="<?php echo isset($meta_description)?$meta_description:''; ?>" />
	<meta name="keywords" content="<?php echo isset($meta_keywords)?$meta_keywords:''; ?>" />
    <!--<link rel="canonical" href="http://www.prachatech.com"/>-->
	<link rel="icon" href="<?php echo base_url(); ?>assets/vendor/img/fav.png" > 
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/mdb.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/css/compiled.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
	<link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/css/animate.css" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/jquery-3.2.1.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114861070-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114861070-1');
</script>
    <style>
        strong.privacy-policy-heading{
    font-weight: 500;
}
    </style>
</head>

<body>
<!--Main Navigation-->
<header>
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark scrolling-navbar" id="home" >
   <a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<ul class="nav navbar-nav  ml-auto">
				<li class="nav-item <?php if($currentURL==base_url() || $currentURL==base_url('')){ echo "active-menu"; } ?> " id="homepageative"><a href="<?php echo base_url(); ?>" class="nav-link"> <span class=" ">Home</span></a></li>  
				<li class="nav-item sm-hide <?php if($currentURL==base_url('start_up') ||$currentURL==base_url('web-designing-agency-in-hyderabad') || $currentURL==base_url('enterprise') || $currentURL==base_url('servicesrm') || $currentURL==base_url('web-development-company-in-hyderabad') || $currentURL==base_url('mobile-app-development-company-in-hyderabad') || $currentURL==base_url('digital-marketing-company-in-hyderabad') || $currentURL==base_url('ecommerce') || $currentURL==base_url('maintainence') || $currentURL==base_url('website_maintainence') || $currentURL==base_url('web-designing-services-in-hyderabad') || $currentURL==base_url('on_demand_services')){ echo "active-menu"; } ?>" > 
				<div class="dropdown">
					<a href="<?php echo base_url('web-designing-services-in-hyderabad'); ?>" class="nav-link dropdown-toggle"> <span class=" ">Our Services</span></a>
				  <div class="dropdown-content1">
				  <div class="row">
				  <div class="col-md-6 bor-left">
					<a href="<?php echo base_url('web-designing-agency-in-hyderabad'); ?>">Web Designing</a>
					<a href="<?php echo base_url('web-development-company-in-hyderabad'); ?>">Web Development</a>
					<a href="<?php echo base_url('mobile-app-development-company-in-hyderabad'); ?>">Mobile Applications</a>
					<a href="<?php echo base_url('digital-marketing-company-in-hyderabad'); ?>"> Digital Marketing</a>
					<!--<a href="<?php echo base_url('seo'); ?>">SEO</a>-->
				
					<a href="<?php echo base_url('website_maintainence'); ?>"> Software Maintenance</a>
					
				  </div>
				  <div class="col-md-6">
					<a href="<?php echo base_url('start_up'); ?>">Start-Up</a>
					<a href="<?php echo base_url('enterprise'); ?>">Enterprise</a>
						<a href="<?php echo base_url('ecommerce'); ?>">E-Commerce</a>
						<a href="<?php echo base_url('on_demand_services'); ?>">On Demand Services</a>
					
				  </div>
				  </div>
				  </div>
				</div>
            </li>
			<li class="nav-item md-hide <?php if($currentURL==base_url('start_up') || $currentURL==base_url('enterprise') || $currentURL==base_url('servicesrm') || $currentURL==base_url('develop_service') || $currentURL==base_url('mobile_application') || $currentURL==base_url('digitalmarketing') || $currentURL==base_url('ecommerce') || $currentURL==base_url('maintainence') || $currentURL==base_url('services')){ echo "active-menu"; } ?>" > 
				<div class="dropdown">
					<a  class="nav-link dropdown-toggle"> <span class=" ">Our Services</span></a>
				  <div class="dropdown-content1">
				  <div class="row">
				  <div class="col-md-6 bor-left">
					<a href="<?php echo base_url('web-designing-agency-in-hyderabad'); ?>">Web Designing</a>
					<a href="<?php echo base_url('web-development-company-in-hyderabad'); ?>">Web Development</a>
					<a href="<?php echo base_url('mobile-app-development-company-in-hyderabad'); ?>">Mobile Applications</a>
					<a href="<?php echo base_url('digital-marketing-company-in-hyderabad'); ?>"> Digital Marketing</a>
					
				
					<a href="<?php echo base_url('website_maintainence'); ?>"> Software Maintenance</a>
					
				  </div>
				  <div class="col-md-6">
					<a href="<?php echo base_url('start_up'); ?>">Start-Up</a>
					<a href="<?php echo base_url('enterprise'); ?>">Enterprise</a>
					<a href="<?php echo base_url('ecommerce'); ?>">E-Commerce</a>
					<a href="<?php echo base_url('on_demand_services'); ?>">On Demand Services</a>
					
				  </div>
				  </div>
				  </div>
				</div>
            </li>
				
				
			<li class="nav-item <?php if($currentURL==base_url('portfolio')){ echo "active-menu"; } ?>"> <a href="<?php echo base_url('portfolio');?>" class="nav-link"> <span class=" ">Portfolio</span></a></li>
			<li class="nav-item <?php if($currentURL==base_url('industries')){ echo "active-menu"; } ?>"> <a href="<?php echo base_url('industries');?>" class="nav-link"> <span class=" ">Industries</span></a></li>
			<li class="nav-item">
                <a href="<?php echo base_url('Waste_management_software');?>" class="nav-link"> <span class=" ">Waste Management Software</span></a>
            </li>
            
			<li class="nav-item <?php if($currentURL==base_url('careers')){ echo "active-menu"; } ?>" ><a href="<?php echo base_url('careers');?>" class="nav-link"> <span class=" ">Careers</span></a></li>
				<li class="nav-item <?php if($currentURL==base_url('blog') || $currentURL==base_url('blog/how_to_create_manage_and_optimize_a_youtube_channel') || $currentURL==base_url('blog/social_media_marketing_and_its_benefits') || $currentURL==base_url('blog/what_is_onpage_and_offpage_optimization') || $currentURL==base_url('blog/what_is_ecommerce_and_its_types') || $currentURL==base_url('blog/Web_development_a_practical_guide_to_a_Web_developer') || $currentURL==base_url('blog/importance_of_mobile_apps_in_business') || $currentURL==base_url('blog/key_elements_to_design_a_best_website') || $currentURL==base_url('blog/how_to_start_and_earn_in_affiliate_marketing')){ echo "active-menu"; } ?>"><a href="<?php echo base_url('blog');?>" class="nav-link"> <span class=" ">Blog</span></a></li>
				<li class="nav-item <?php if($currentURL==base_url('contactus')){ echo "active-menu"; } ?>"><a href="<?php echo base_url('contactus');?>" class="nav-link"> <span class=" ">Contact us</span></a></li>
			</ul>
        </div>
   </nav>
</header>
<!-- Central Modal Small -->
<div class="modal fade" id="privacyPolicy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fluid" role="document" style="padding:20px;">
        <div class="modal-content">
          <div class="modal-header bg-indigo text-white" style="border-radius:0px;">
            <h5 class="modal-title" id="exampleModalLongTitle">Privacy Policy</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p><strong class="privacy-policy-heading">We Value Your Privacy</strong></p>
            <p>PRACHA ONLINE PRIVACY POLICY STATEMENT HIGHLIGHTS</p>
            <br>
            <p><strong class="privacy-policy-heading">Privacy Policy</strong></p>
            <p>PROTECTING PERSONAL INFORMATION IS A RESPONSIBILITY THAT WE TAKE VERY SERIOUSLY</p>
              <br>
            <p>And we also expect the same from you. Pracha Technologies is committed to transparency and choice regarding protecting the privacy of our client’ s personal information as well as that of all visitors to our website.</p>
            <p>This privacy policy outlines what data Pracha Technologies Pvt. Ltd. (herein referred to as "PRACHA", "PRACHATECH", "We", "Our", or "Us") collects, stores, and process about you. It also explains your rights to your data and how you can contact us if you have any questions. We reserve the right to alter this privacy statement at our discretion and encourage you to check this section from time to time to be aware of any changes.</p>
              <br>
            <p><strong class="privacy-policy-heading">To whom this policy applies</strong></p>
            <p>This privacy statement applies to individuals ("users" or "you") who interact with our website, subscribe to any of our products, request information, or use the chat support (herein collectively referred to as "services").</p>
              <br>
            <p><strong class="privacy-policy-heading">How we collect data</strong></p>
            <p>Depending on services you use, we collect data from one or more of these three sources:  </p>
            <p><strong class="privacy-policy-heading">1. Data we request:</strong><br>
                When you request any of our services, we may ask, store, and process any / any / all these data categories:</p>
            <p>
                Your Name
                <br>
                Your Country
                <br>
                Your Email Id
                <br>
                Your Skype Id
                <br>
                Your Phone Number
                <br>
                Other information that you choose to share
                </p>
            <p><strong class="privacy-policy-heading">2. Cookies:</strong><br>
Cookies are small files placed on your computer when you first visit our website that helps analyze web traffic and tracks you across the web. The collection of this data is based on “implied consent”, i.e. we assume you agree to our terms of usage unless you explicitly opt out. You can opt out by changing your browser settings to not accept cookies, browsing in anonymous mode, or by not using our website.
</p>
            <p>We also have on our website links to many third-party services and use third-party tools, the privacy policy of which may be different from us and we assume no responsibility for their compliance. The third-party tools we use cookies to collect data are:</p>
            <p>Google Analytics - It collects data related to the device/browser, IP address and on-site activities to measure and report statistics about your interactions on the web. It is used to enhance user experience and we do not access your personally identifiable information. To understand how Google Analytics handles your data, read their privacy policy.</p>
            <p><strong class="privacy-policy-heading">3. External tools:</strong><br>
We also use some tools to collect data about your usage and behavior beyond our website that include:
</p>
            <p>Social plugins - We have on our website links to many social media platforms for more engagement and visibility. Once you click on any of those links to visit any of those platforms, they collect, use, and share your data as per their own privacy policies, of which we assume no responsibility. We encourage you to check out the privacy policies of the social platform we use: Facebook, Twitter, Google Plus, LinkedIn, YouTube, Behance, Dribble.</p>
            <p><strong class="privacy-policy-heading">Why we collect these data</strong><br>
The data we collect from these cookies can be personally identifiable or anonymous. We collect this data to:
</p>
            <p>Offer personalized service
<br>
Create a secure platform
<br>
Improve performance
<br>
Statistical analysis
</p>
            <p><strong class="privacy-policy-heading">How we secure your data</strong><br>
The security of your personal data is of utmost importance to us and we take all appropriate measures to protect it. There are requisite technical, administrative, and physical barriers in place to ensure your data is accessible only to authorized persons or systems. In case we discover a data breach, we immediately (within 72 hours) inform the local authorities and affected users.
</p>
            <p><strong class="privacy-policy-heading">How we use your personal data</strong><br>
We store and process the data we collect for our legitimate interests and service delivery fully under the ambit of law. We use your data:
</p>
            <p>To provide and maintain our services.
<br>
To improve our services and website experience.
<br>
To communicate with you via email, notification, or any other contact information that you have provided.
<br>
To provide any third-party requisite data that helps enable our services.
<br>
For internal research and management.
<br>
For fraud detection.
<br>
To enforce our terms and conditions.
</p>
            <p><strong class="privacy-policy-heading">When we share your personal data</strong><br>
We do not share your personal data with any third-party whatsoever except in cases where:
</p>
            <p><strong class="privacy-policy-heading">How do we protect your information?</strong><br>
We have strict security procedures covering the storage of your information in order to prevent unauthorized access . This means that sometimes we may ask you for proof of identity or for other personal information before we can process your call or enquiry further.
</p>
            <p>Your explicit consent is obtained.
<br>
Mandated by law.
<br>
Third-party is a collaborator or a part (subsidiary, parent/sister company) of PRACHA.
<br>
To provide any third-party requisite data that helps enable our services.
</p>
            <p>What you can do<br>
You have full control over what information we store and its subsequent usage. You can choose to:
</p>
            <p>Unsubscribe from the mailing list and notification preferences to stop receiving such communication.
<br>
You can choose to not share your information by not filling up the form and not using the chat support.
<br>
You can at any time change your consent earlier provided for any specific use of your data.
<p>
If you have any question regarding our privacy policy or data handling practices, we would be glad to hear from you at mail@PRACHAinfo.com
</p>    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
  </div>
  <!-- Central Modal Small -->
    
    <div class="modal fade" id="termsConditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fluid" role="document" style="padding:20px;">
        <div class="modal-content">
          <div class="modal-header bg-indigo text-white" style="border-radius:0px;">
            <h5 class="modal-title" id="exampleModalLongTitle">Terms & Conditions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p><strong class="privacy-policy-heading">Know Your Rights</strong><br>
STANDARD PRACHA TERMS OF USE OF WORKING WITH PRACHA
</p>
            <p><strong class="privacy-policy-heading">Terms & Conditions</strong><br>
COPYRIGHT © 2003-2017 PRACHA TECHNOLOGIES AND/OR ITS AFFILIATES. ALL RIGHTS RESERVED.
</p>
            <p>The following are terms of a legal agreement between you and Pracha. Here, we clearly define aspects of our business relationship with you.</p>
            <p>General Work Terms and Client Responsibilities & Liabilities
All site content (text and multimedia) will be the sole responsibility of the client to provide to Pracha. Such should be provided prior to commencing the work.
</p>
            <p>Client is solely responsible to take proper back-up of all content on their site prior to letting Pracha undertake the required course of action towards meeting the contract. Any loss or damage to existing data shall not be a responsibility of Pracha under any circumstances.</p>
            <p>The Contract does not hold Pracha responsible for any data entry, web hosting or custom artwork/graphics related work/tasks unless otherwise specifically mentioned, paid for and agreed to by both the parties towards such. Any artwork, images, or text supplied and/or designed by Pracha on behalf of the client, will remain the property of Pracha and/or it's suppliers unless otherwise agreed.</p>
            <p>Email address</p>
            <p>While Pracha will do its best to achieve all deliveries within the estimated time, there may, at times, be the need to extend or adjust time in cases of any unavoidable and non-forecasted situations like those of deployment issues, dependencies, 3rd-Party support, development bottle-necks, resource unavailability due to emergency, communication delays and the like.</p>
            <p>While Pracha will do its best to achieve all deliveries within the estimated time, there may, at times, be the need to extend or adjust time in cases of any unavoidable and non-forecasted situations like those of deployment issues, dependencies, 3rd-Party support, development bottle-necks, resource unavailability due to emergency, communication delays and the like.</p>
            <p>Pracha will provide the Client an opportunity to review the appearance and content of the Web site during the design and once they are completed. Pracha shall wait for a period of 7 days to hear any feedback on such shared work/outputs from the client. In the event of client not replying within this period, such material will be deemed to have been automatically accepted and approved by the Client.</p>
            <p>The Client retains the copyright to data, files and graphic logos provided by the Client and grants Pracha the rights to publish and use such material. The Client must obtain permission and rights to use any information or files that are copyrighted by a third party. The Client is further responsible for granting Pracha permission and rights for use of the same and agrees to indemnify and hold harmless Pracha from any and all claims resulting from the Client's negligence or inability to obtain proper copyright permissions. A contract for Web site design and/or placement shall be regarded as a guarantee by the Client to Pracha that all such permissions and authorities have been obtained. Evidence of permissions and authorities may be requested</p>
            <p>Pracha will not accept responsibility for any alterations caused by the Client or a third party occurring to the Client's pages/website once installed/deployed. Such alterations include, but are not limited to additions, modifications or deletions. Pracha may require a one-off Web Development charge before resolving any issues that may arise.</p>
            <p><strong class="privacy-policy-heading">Payments</strong><br>
Pracha accepts payments by cheque, Cash or Bank Transfers (although we reserve the right to decline payment in any of these forms without notice). Without limitation, Pracha reserves the right to withdraw any payment methods at any time and to vary its prices without prior notice.
</p>
            <p>A cancellation fee may be charged if the Customer cancels the Service prior to completion. The fee will be equal to the amount of work completed at the point of cancellation.</p>
            <p>A non-payment of cancellation fee and/or over-due amount will result in legal action upon necessity.</p>
            <p><strong class="privacy-policy-heading">Support and 3rd-Party</strong><br>
As the site launches, we offer free support for the first month. After one month of free service, we charge according to our various price packages best-suited to client's requirement. We also provide attractive discounts if the client chooses a higher price package. The scope of support only includes any bug fixing and email support and excludes any issues related to the site architecture, rule changes and add-ons/enhancements.
</p>
            <p>Any 3rd-Party support, product and/or service being used/ integrated into the site which requires licensing, payment, copyright, etc. shall be the sole responsibility and liability of and be provided by the client or will be procured by Pracha on behalf of the client on pre-payment for the cost of such procurement. The fee charged by Pracha is exclusive of out-of-pocket expenses and expense claims filed by third party products/services involved.</p>
            <p>No guarantees or warranties shall be provided by Pracha for the accuracy or performance of such 3rd-Party product/service.</p>
            <p>Any upgrade in the 3rd-Party product/service being used in the project shall not be part of scope at Pracha. Such shall be addressed per feasibility and revision of price and time may be called for by Pracha.</p>
            <p>Re-work, Enhancements/Add-ons and Billing<br>Any additional features not envisaged in the scope of work would be entertained through a Change Management process and be additional billed. Scope Creeps after wireframe sign off would be billed as additional and time lines and cost for delivery would increase.</p>
            <p>Most tweaks such as minor changes/re-work are normally just completed, however, if we feel this is being abused, we will build a list of works found being the grounds of abuse and bill such additionally per the total time efforts involved and undertaken to achieve the work/tasks at business rates ranging from US $ 15 to 20 per hour.</p>
            <p>Whilst we try our best to cover most changes within the budget of the site, some changes are classified as enhancements/add-ons to the system and become chargeable; we will advise you before we start work of any such items.</p>
            <p>Any re-work change or tweak request by the client post approval and/or furthering to the subsequent stage of project process shall be treated as add-on work and be additionally billed.</p>
            <p>The client must pay the fee charged by Pracha without any deductions, discounts or debt settlement by the agreed due dates.</p>
            <p><strong class="privacy-policy-heading">Limitations of Liability</strong><br>
Pracha will use reasonable skill and care in providing the Service. However, we make no representation and exclude any warranty, express or implied, as to the availability, quality, accuracy, timeliness, completeness, performance or fitness of the Service.
</p>
            <p>Pracha hereby excludes itself, its Employees and or Agents from: all and any liability for loss or damage caused by any inaccuracy; omission; delay or error, whether the result of negligence or other cause in the production of the website; All and any liability for loss or damage to clients' artwork/photos, data/content supplied for the site. This is whether the loss or damage results from negligence or otherwise.</p>
            <p>Except in the event of death or personal injury caused by our negligent acts or omissions, we shall not be liable in any way for any damages arising in contract, tort or otherwise in respect of loss or damage arising out of or in connection with this Agreement or operation of the Service. In no event will we be liable for any direct, indirect or consequential damages in contract or tort, including loss of profit, loss or damage to property or relating to claims made by third parties.</p>
            <p>Pracha cannot make guarantees of service on behalf of third party organizations and will not be held liable for the failure in any service provided by third parties.</p>
            <p><strong class="privacy-policy-heading">Approvals and Delivery</strong><br>
The project will involve various stages and the work for the next stage will only start after receiving the sign off on and relevant payments for the previous stage as agreed.
</p>
            <p>On completion of the Service (Website design and/or website development), the website will be uploaded to the Customer area of Pracha server for approval. Upon approval by the Client, the website will be uploaded to the destination server where the site shall stay. Pracha reserves the right to delay uploading of the website until full payment has been received.</p>
            <p>All code and material developed will be transferred post completion of project and after sign offs. The code ownership will reside with the client after final payments.</p>
            <p>Pracha holds the Right to publish and use the completed work and/or even the deployed final produce/website for references to other potential clients. In circumstances such is required to be withheld, client shall notify Pracha well in advance and request prior and proper approvals towards the same.</p>
            <p><strong class="privacy-policy-heading">Timescale</strong><br>
Pracha will aim to complete all services within the agreed timescale. The timescale will commence on receipt of both the agreed % deposit (ranging from 30% to 50% of the project price as mutually discussed and agreed prior to contract finalization) as acceptance and all website content from the Customer.
</p>
            <p>Pracha may need to extend any timescales due to circumstances beyond its control.</p>
            <p><strong class="privacy-policy-heading">Jurisdiction</strong><br>
These terms shall be governed by and interpreted in accordance with Indian Law. The parties irrevocably agree that the courts of India shall have exclusive jurisdiction to settle any dispute which may arise out of, under, or in connection with these Terms and Conditions. The placing of an order will confirm acceptance of these conditions which are attached to the Order.
</p>
            <p><strong class="privacy-policy-heading">Severability</strong><br>
In the event any one or more of the provisions of this Agreement and/or Order shall be held to be invalid, illegal or unenforceable, the remaining provisions of this Agreement and/or Order shall be unimpaired, and the Agreement and/or Order shall not be void for this reason alone. Such invalid, illegal or unenforceable provision shall be replaced by a mutually acceptable valid, legal and enforceable provision, which comes closest to the intention of the parties underlying the invalid, illegal or unenforceable provision.
</p>        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
  </div>
  <!-- Central Modal Small -->
    
    <div class="modal fade" id="refundsCance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fluid" role="document" style="padding:20px;">
        <div class="modal-content">
          <div class="modal-header bg-indigo text-white" style="border-radius:0px;">
            <h5 class="modal-title" id="exampleModalLongTitle">Refunds/Cancellations</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Every service offered by us takes different course of action to get accomplished from start to end thus refund policy differs from one service to other.
There is always a certain set of resources that are involved in achieving every milestone of a campaign. Thus, a refund would not be entertained for the work already completed.
No refund is possible for the fee paid in the form of administrative fees or installation charges.
</p>
            <p>Taxes paid on services levied by regulatory bodies would not be refunded with fee refund.
No refund will be entertained in case service gets canceled due to any violation of terms stated in our Terms & Condition section.
Taxes paid on services levied by regulatory bodies would not be refunded with fee refund.
No refund will be entertained in case service gets canceled due to any violation of terms stated in our Terms & Condition section.
</p>
            <p>There is no refund policy for the services placed under same day delivery.</p>
            <p>Pracha Technologies is not liable to pay refund if delay or service disruption happens due to third party involvement.</p>
            <p><strong class="privacy-policy-heading">REFUND-POLICY</strong><br>
Offering a friendly and flexible approach which ensures long-term partnerships with our clients.
Our Refund Policy<br>
Our policies are treated with appropriate measures to settle different claims, originating from different assortments of needs and various business situations.
</p>
            <p>At Pracha Technologies, our Refund Policy is based on standardized practices that strictly follow industrial norms. We put up with fair assessment practices and all the refund claims are processed with vigilant parameters to make sure the decisions are justified and mutually agreeable. Our policies are treated with appropriate measures to settle different claims, originating from different assortments of needs and various business situations.</p>
            <p><strong class="privacy-policy-heading">Coverage & Scope</strong><br>
This Refund Policy covers Pracha Technologies action and approach towards refunds. This Refund Policy does not apply to the practices of companies that Pracha Technologies does not own or control or of persons that Pracha Technologies does not employ or manage, including any third-party service and/or product providers bound by contract and any third-party websites to which Pracha Technologies websites link.
</p>
            <p><strong class="privacy-policy-heading">When Do You Qualify for Refunds?</strong><br>
When you file a complaint to Pracha Technologies, we first try to provide an ideal solution to the issue you are facing. Your case is first introduced to the technical team and then reported further to the experts’ panel. Refund is only made in the extreme circumstances, when nothing good can be done to solve the issue.
</p>
            <p>While planning for refunds we check for soundness and validity of the case, applying different conditions to it. If these conditions are satisfied, refund may apply*</p>
            <p>Development/Post-sales operations has not yet started</p>

<p>The issues with the project are beyond the scope of rectification/resolution/fixing</p>

<p>You have not violated our payment terms</p>

<p>You have not used any information for monetary/business benefits (gained during association)</p>

<p>The reasons you made are valid/rational/realistic enough to qualify for refund trial</p>

<p>Should be able to demonstrate his/her innovative UI design and development skills and understand what makes an app addictive and appealing.</p>


            <p>You have presented all the proofs and evidences surfacing your refund claim</p>
            <p>The claim does not arise from any billing dispute coming from your bank or payment vendor</p>
            <p><strong class="privacy-policy-heading">*Important Note:</strong> If any of the points mentioned above is found violated, your claim will be considered void. The decision on refunds is final and irrevocable.</p>
            <p>How the Refund Takes Place?<br>
Pre-Refund<br>
Refund query is processed, analyzed and checked for veracity
</p>
            <p>Match the query with the agreeable parameters and valid reference points</p>
            <p>Arrange for refunds in permissible situations and settle fully or partly, as the case may be</p>
            <p>Post-Refund<br>
Sign a proof agreement
</p>
            <p>Unless you have been told otherwise, you destroy all copies of information shared and communication that happened in the due course</p>
            <p><strong class="privacy-policy-heading">Transaction</strong><br>
The refund may take 7-10 business days to process, after the refund agreement is signed
</p>
            <p>You will be refunded in the currency you were charged in. If this is not your native currency, your bank may charge exchange fees, or a change in the exchange rate may have resulted in a difference in the amount refunded compared to the amount you originally paid (in your native currency). It is solely your responsibility if you must pay any fees or bear any losses in this process.</p>
            <p><strong class="privacy-policy-heading">Changes</strong><br>
Pracha Technologies may at any time, without notice to you and in its sole discretion, amend this policy periodically. You are expected to check the policy from time to time for updates. For more information on our Refund Policy, contact us at enquiry@prachatech.com
</p>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
  </div>
  <!-- Central Modal Small -->
    
<script>
$('.scrolltotop').on('click', function() {
          $('html, body').animate({ scrollTop: 0 }, 800);
          return false;
      });

      $(document).scroll(function() {
          var y = $(this).scrollTop();
          if (y > 300) {
              $('.scrolltotop').fadeIn();
          } else {
              $('.scrolltotop').fadeOut();
          }
      });
</script>


