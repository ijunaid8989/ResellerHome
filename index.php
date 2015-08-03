<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/jquery-1.11.0.min.js"></script>
	 <script>
   $(document).ready(function() {
			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.look').fadeIn(200);
				} else {
					$('.look').fadeOut(200);
				}
			});
			
			// Animate the scroll to top
			$('.logoS').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 300);
			})
		});
   $(document).ready(function () {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 200 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});
</script>
</head>
<body>
<div id = "Home" class="main_header">
<section class="wrapper">
	<div class="top_contact_info">
		<div class="ding">
			<div class="date_wrap">
			<script type="text/javascript">
	            var mydate=new Date()
	            var year=mydate.getYear()
	            if (year < 1000)
	            year+=1900
	            var day=mydate.getDay()
	            var month=mydate.getMonth()
	            var daym=mydate.getDate()
	            if (daym<10)
	            daym="0"+daym
	            var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
	            document.write("<b class='date'>"+montharray[month]+" "+daym+", "+year+"</b>")
            </script>
			</div>
			<div class="sajypase">
				<div class="socialme">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-google-plus"></i>
				</div>
				<div class="fixer_o">
					<i class="fa fa-comment"></i>
					Live chat
				</div>
				<div class="fixer_o">
					<i class="fa fa-envelope"></i>
					test@test.com
				</div>
				<div class="fixer_p">
					<i class = "fa fa-headphones"></i>
					0-347-1234678
				</div>
			</div>
		</div>
	</div>
</section>
<section id="trueeHeader" class="look">
	<div  class="wrapper">
		<div class="contimon">
			<div class="one_fourth">
				<a href="Javascript;" id="logo"></a>
			</div>
			<div class="three_fourth last">
				<nav id="access">
				<div class="menu">
					<ul>
						<li>
						<a href="#Home">Home</a>
						</li>
						<li>
							<a href="#Whost" class="">Web Hosting</a>
						</li>
						<li>
							<a href="#Benefits">Benefits</a>
						</li>
						<li>
							<a href="#Service">Services</a>
						</li>
						<li>
							<a href="#Clients">Clients</a>
						</li>
						<li>
							<a href="#NewL">Newsletter</a>
						</li>
						<li>
							<a href="#Contact" id="contact">Contact</a>
						</li>
					</ul>
				</div>
				</nav>
			</div>
		</div>
</section>
<section id="trueHeader">
	<div class="wrapper">
		<div class="contimon">
			<div class="one_fourth">
				<a href="" id="logo"></a>
			</div>
			<div class="three_fourth last">
				<nav id="access">
				<div class="menu">
					<ul>
						<li>
						<a href="#Home">Home</a>
						</li>
						<li>
							<a href="#Whost">Web Hosting</a>
						</li>
						<li>
							<a href="#Benefits">Benefits</a>
						</li>
						<li>
							<a href="#Service">Services</a>
						</li>
						<li>
							<a href="#Clients">Clients</a>
						</li>
						<li>
							<a href="#NewL">Newsletter</a>
						</li>
						<li>
							<a href="#Contact">Contact</a>
						</li>
					</ul>
				</div>
				</nav>
			</div>
		</div>
		<div class="bigone">
			<div class="headingTTT">
				Relibility Web hosting
			</div>
			<div class="dojit">Get your domain and fexible hosting for your websites</div>
			<div class="flieer">
				<img src="1.png" alt="">
			</div>
		</div>
	</div>
</section>
</div>
<section class="domain_search">
	<div class="liop">
	<div class="left">
        <div class="search_section">    
			<form method="get" id="domain-searchform" action="https://pk.godaddy.com/api/dpp/search/single" target="_blank">
	        <div>
	        <input class="input-text" name="domainToCheck" id="s" value="Enter your Domain Name here..." onfocus="if (this.value == 'Enter your Domain Name here...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your Domain Name here...';}" type="text"> 
	        <input id="searchsubmit" value="Search" type="submit">        
	        </div>
	        </form>
        </div>
        <div class="clearfix"></div>
        
        <div class="sm_links"><a href="#">View Domain Price List</a>  | <a href="#">Bulk Domain Search</a> | <a href="#">Transfer Domain</a></div>
    </div>
    <div class="right">
        <ul>
        	<li><img src="dot-com.png" alt=""><em>From</em> $4.99/year</li>
            <li><img src="dot-org.png" alt=""><em>From</em> $3.99/year</li>
            <li><img src="dot-co.png" alt=""><em>From</em> $3.45/year</li>
            <li><img src="dot-net.png" alt=""><em>From</em> $2.99/year</li>
        </ul>
    </div>
    </div>
</section>
<div class="shadow_01"></div>
<section class="section_holder33">
	<div class="dingdon">
	<div class="price_table_holder">
        <div  class="price_table">
        	<div  class="plan_info">
            <h2 class="title">Basic</h2>
            <div id ="Whost"  class="price"><sup>$</sup>5.95 <i>/ mo</i></div>
            <ul  class="plan_features two">
              <li>1 GB Bandwidth</li>
              <li>100 GB Memory</li>
              <li>10 Domains Supported</li>
              <li>100 MySql Databases</li>
              <li>24/7 Full Support</li>
            </ul>
            <div  class="margin_top3"></div>
            <a class="singup_but" href="#">Order Now</a> </div>
          <br>
          <br>
        </div>
        <div class="shadow_box"></div>
    </div>
    <div class="price_table_holder">
        <div class="price_table active">
            <div class="arrow"></div>
          		<div class="arrow two"></div>
          		<div class="arrow three"></div>
          		<div class="arrow four"></div>
          		<div class="plan_info">
            		<h2 class="title">Business</h2>
            		<div class="price"><sup>$</sup>9.95 <i>/ mo</i></div>
            		<ul class="plan_features two">
		              <li>Unlimited Bandwidth</li>
		              <li>Unlimited Memory</li>
		              <li>Unlimited Databases</li>
		              <li>Unlimited FTP Accounts</li>
		              <li>Unlimited Parked Domains</li>
            		</ul>
            	<div class="margin_top3"></div>
            	<a class="singup_but" href="#">Order Now</a> </div>
          		<br>
          		<br>
        </div>
    </div>
    <div class="price_table_holder">
        <div class="price_table">
        	<div class="plan_info">
            <h2 class="title">Economy</h2>
            <div class="price"><sup>$</sup>7.95 <i>/ mo</i></div>
            <ul class="plan_features two">
              <li>100 Hosted Sites</li>
              <li>100 Domain Supported</li>
              <li>MySql Databases 1000</li>
              <li>1000 FTP Accounts</li>
              <li>24/7 Full Support</li>
            </ul>
            <div class="margin_top3"></div>
            <a class="singup_but" href="#">Order Now</a> </div>
          <br>
          <br>
        </div>
        <div class="shadow_box"></div>
    </div>
    </div>
</section>
<section  class = "ts-home1-hosting-services parallax-section">
	<div class="ts-overlay"></div>
	<div class="container">
		<div class="col-sm-12">
			<div class="ts-section-title text-center">
				<h3 >Best Small Business Hosting Services</h3>
			</div>
			<div id="Benefits" class="row">
				<div class="col-sm-6  ts-home1-block12-left">
					<div class="ts-feature-item right">
						<div class="icon-feature">
							<i class="fa fa-laptop"></i>
						</div>
						<div class="info-feature">
							<h3>
								<a href="">One-click set-up</a>
							</h3>
							<p>Hosting package include thousands of such Application which you can install to your domain to
							make your website more charming and echo friendly with customers and viewers.</p>
						</div>
					</div>
					<div class="ts-feature-item right">
						<div class="icon-feature">
							<i class="fa fa-coffee"></i>
						</div>
						<div class="info-feature">
							<h3>
								<a href="">Scalability to fit your needs</a>
							</h3>
							<p>Compellingly transform plug-and-play expertise whereas efficient platforms. 
							Authoritatively communicate quality sources vis-a-vis standards compliant partnerships</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="ts-feature-item left">
						<div class="icon-feature">
							<i class="fa fa-database"></i>
						</div>
						<div class="info-feature">
							<h3><a href="">Storage and bandwidth</a></h3>
							<p>Our hosting contains such a huge and refreshing packges for every level of customers which includes
							unlimited storage and bandwidth which will help your data and websites to be run on extreme optimization.</p>
						</div>
					</div>
					<div class="ts-feature-item left">
						<div class="icon-feature">
							<i class="fa fa-star"></i>
						</div>
						<div class="info-feature">
							<h3><a href="">24/7 secure monitoring</a></h3>
								<p>The most we care about is our customers for whom our whole team is ever ready to help them in case
								of any issue or errors which mostly never come across anyways , but our team is ever ready to help.</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</section>
<section id="takeagain">
	<div id="Service" class="column dt-sc-one-third   first lopsp">
		<div class="dt-sc-ico-content  type3">
			<div class="icon">
				<span><img src="secure-colored.png" alt=""></span>
			</div>
			<h3>Host up to 100 websites</h3>
		</div>
	</div>
	<div class="column dt-sc-one-third lopsp  ">
		<div class="dt-sc-ico-content  type3">
			<div class="icon">
				<span><img src="db-share-colored.png"></span>
			</div>
			<h3>100 GB storage</h3>
		</div>
	</div>
	<div class="column dt-sc-one-third  lopsp ">
		<div class="dt-sc-ico-content  type3">
			<div class="icon">
				<span><img src="db-storage-colored.png"></span>
			</div>
			<h3>SSD database storage</h3>
		</div>
	</div>
	<div class="column dt-sc-one-third   first lopsp">
		<div class="dt-sc-ico-content  type3">
			<div class="icon">
				<span><img src="cpu-colored.png"></span>
			</div>
				<h3>Ensured Bandwidth Speed</h3>
		</div>
	</div>
	<div class="column dt-sc-one-third   lopsp">
		<div class="dt-sc-ico-content  type3">
			<div class="icon">
				<span><img src="server-colored.png"></span>
			</div>
				<h3>Unlimited Domains</h3>
		</div>
	</div>
	<div class="column dt-sc-one-third   lopsp">
		<div class="dt-sc-ico-content  type3">
			<div class="icon">
				<span><img src="sec-shield-colored.png"></span>
			</div>
				<h3>Highly Secure and Safe</h3>
		</div>
	</div>
</section>
<section id="Clients" class="clients_sec">
	<div class="container">
		<div class="title">
          	<strong class="">Our Clients</strong>
			We are Proud to be Trusted By    
        </div>
        <div class="clients">
        	<ul>
        		<li class="jcarousel-item">
        			<img src="client-logo1.png" alt="">
        		</li>
        		<li class="jcarousel-item">
        			<img src="client-logo2.png" alt="">
        		</li>
        		<li class="jcarousel-item">
        			<img src="client-logo3.png" alt="">
        		</li>
        		<li class="jcarousel-item">
        			<img src="client-logo4.png" alt="">
        		</li>
        		<li class="jcarousel-item">
        			<img src="client-logo5.png" alt="">
        		</li>
        		
        	</ul>
        </div>
	</div>
</section>
<div id="NewL">
<section id="newsletter">
	<h1 id="Subscribe">Sign up for our newsletter now</h1>
	<p>Be amongst the first to know about news and upcoming features</p>
	<div class="newsletterfields">
		<form>
			<input type="email" placeholder="Enter your email address">
			<input type="submit" value="Notiy Me">
		</form>
	</div>
</section>
</div>
<section id ="counter" class="breaking">
	<div id="Contact" class="wanasayhi">Want to say Hi...!</div>
</section>
<section class="copyright">
	Copyright © 2015. All rights reserved. Design by <a href="http://junaid.websoltechnologies.org" target="_blank">Junaid Farooq</a>
</section>
</body>
</html>