<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Services</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
</head>

<body>
<div class="head-content">
		<div class="Logo-content">
			<ul class="head-text">
				<li class="r-border" style="width: 200px">
					The Brisbane Help Desk
					<br>
					Brisbane, Queensland

				</li>
			</ul>
		</div>
	</div>
	<nav class="navi-bar">
		<div class="navi-content">
			<ul>
				<li class="navi-item">
					<a href="home.php">Home</a>

				</li>

				<li class="navi-item">
					<a href="services.php">Services</a>
					<div>
						<ul>
							<li class="sub-navi-menu"><a href="#">Plumbers</a></li>
							<li class="sub-navi-menu"><a href="#">Electrician</a></li>
							<li class="sub-navi-menu"><a href="#">Air Conditioning</a></li>
							<li class="sub-navi-menu"><a href="#">Building Work</a></li>
							<li class="sub-navi-menu"><a href="#">Car Repairs</a></li>
						</ul>
					</div>
				</li>

				<li class="navi-item">
					<a href="contactus.php">Contact Us</a>
				</li>
				
				<li class="navi-item">				

					<a href="aboutus.php">About Us</a>
					
				</li>
				
				<li class="navi-item">

					<?php

					if(isset($_SESSION['user'])){
						echo "<a href='account.php'> Account Details</a>";
						echo "<div> <ul><li class='sub-navi-menu3'><a href='logout.php'>Logout</a></li></ul> </div>";

					}		
					else{		
						echo "<a href='login.php'>Login</a>";				
					}

					?>


				</li>
				
				
			</ul>
		</div>
	</nav>
	<div class="services-container">
		<p>
			Plumber:
			Fix Fast Plumbing Solutions  (service provider number: 001)

			Description: Fix Fast Plumbing Solutions is 100% Australian owned and operated company.  We have been servicing Brisbane for over 30 years with domestic, commercial and industrial clients.  Today, we are a leader in the field of service and maintenance plumbing, draining and gas fitting.  We are straight-shooting plumbing professionals who can speedily meet all your plumbing needs for your home, business or commercial property.

			Detail:

			ABN: 24 114 578 871
			Phone: 1300 300 599
			Mob: 0408 258 678 (Contact the manager direct)
			Fax: 07 3348 2583
			Plumbers, Drainers & Gasfitters
			QBSA Lic No. 728140

			Jason’s Plumbing  (service provider number: 002)

			Description: Jason’s Plumbing is a maintenance plumbing company which provides services to the domestic, commercial, industrial, educational and healthcare sectors.

			Detail:

			Phone: 07 3171 3927
			Fax: 07 3393 4873
			Email: admin@jasonsplumbing.com.au
			P.O. Box 226 Wynnum QLD 4178
			Jetset Plumbing  (service provider number: 003)

			Description: Jetset Plumbing are local Plumbers in Brisbane and the Gold Coast providing an extensive variety of residential and commercial plumbing maintenance services throughout South-East Queensland including Brisbane, the Gold Coast, Ipswich and Tweed Heads regions.

			Detail:

			Jetset Plumbing
			Head Office: (by appointment only)
			38 Creighton Street, Mt Gravatt, QLD 4122
			Phone: 1800 443 996
			Email: enquiry@jetsetplumbing.com.au
			Website: jetsetplumbing.com.au
			QBSA Act License No:1144704

			Conrad Martens Plumbing & Hot Water (service provider number: 004)

			Description: We are centrally located to service the greater Brisbane area. Our family owned business has been established since 1982. We specialise in all aspects of plumbing & hot water maintenance and installations throughout Brisbane and the surrounding areas. Experience, dependability and quality of workmanship are the foundation on which our company's large referral base has been built. We provide top quality service & excellent workmanship at an affordable price.

			Detail: 

			Office hours:
			Monday – Friday 7am – 5pm
			Phone:3878-4444 All hours
			Fax:3878-3755
			Postal Address:
			PO Box 1112, Indooroopilly Qld 4068

			Fallon Solutions  (service provider number: 005)

			Description: Fallon Solutions is able to offer the full range of project services in the disciplines of electrical, data, plumbing, gas and air conditioning. Projects range from $5,000 to $10,000,000 in value and can be completed over a weekend or several months depending upon the requirements.

			Detail:

			Greater Brisbane Area	

			Outer North to Caboolture	3255 1203	
			Inner North	3369 7270	
			Central Brisbane	3846 3666	 	 
			Inner South	3395 2234	 	 
			South to Beenleigh	3287 2244	 	 
			West to Ipswich	3288 4092	 	 
			East Side and Redlands	3829 2508	

			Gold Coast Region
			Beenleigh to Robina 5532 6606
			Robina to Tweed Heads 5508 2670
			
			Electrician
			Positive Power Electricians  (service provider number: 006)

			Description: Many electricians in the Brisbane area share the same certifications and training, but Positive Power offers something more. We bring not only a qualified and fully trained team, but a commitment to quality work and excellent customer service. Under our manager Brad, our team has been able to service numerous clients in the area, with particular attention paid to the sensitive and elaborate electrical systems required on many factories, warehouses and other commercial properties.

			Detail: 

			Phone Number:07 3041 4878
			Address: Po Box 2510 Graceville East, QLD 4075

			Meklek Electrical Services (service provider number: 007)

			Description: Meklek Electrical Services is a Queensland-based, family-owned company that was started in June 2007 by Dave Dee with the strong support of his wife Kerry and daughter Zoe.

			Detail: 

			Postal Address: PO Box 855 Springwood QLD 4127
			Office & Workshop: Unit 10/1631 Wynnum Road Tingalpa QLD 4173
			Ph: 07 3390 7555
			Fax: 07 3390 7644
			After hours emergency service: 0417 716 684
			ABN: 36 120 494 706
			Electrical Contractors License No. 68263

			CBD Electrical Services  (service provider number: 008)

			Description: CBD Electrical Services commenced business in February 2009, and has formed on-going relationships within the Central Business District of Brisbane, specialising in supplying quality, cost effective Electrical and Data solutions to our commercial and residential customers within this area. Since then our business has grown and we now support our customers with their projects all across Queensland.

			Detail:
			Address: 11 Elliot St Albion, QLD,4010
			P.O.Box: 356 WILSTON, QLD,4051
			Phone: (07) 31727036
			Email: service@cbdelectricalservices.com.au

			Jarvis Electrical  (service provider number: 009)

			Description: Nathan has 18yrs experience working in the electrical industry. Starting as an apprentice in 1995, his working career has covered all areas of domestic, commercial and industrial electrical installations and repairs. During this time Nathan built a great knowledge and passion for the electrical industry and this prompted him to start his own company, Jarvis Electrical.  Nathan’s goal for his company is to provide high quality service to his customers at the right price.

			Detail:

			PH – Nathan  0419 931 198
			Email – nathan@jarviselectrical.com.au
			Post – PO BOX 1383, Carindale 4152
			ABN – 15 154 145 641

			Fallon Solutions (service provider number: 010)

			Description: Fallon Solutions is able to offer the full range of project services in the disciplines of electrical, data, plumbing, gas and air conditioning. Projects range from $5,000 to $10,000,000 in value and can be completed over a weekend or several months depending upon the requirements.

			Detail:

			Greater Brisbane Area	

			Outer North to Caboolture	3255 1203	
			Inner North	3369 7270	
			Central Brisbane	3846 3666	 	 
			Inner South	3395 2234	 	 
			South to Beenleigh	3287 2244	 	 
			West to Ipswich	3288 4092	 	 
			East Side and Redlands	3829 2508	

			Gold Coast Region
			Beenleigh to Robina 5532 6606
			Robina to Tweed Heads 5508 2670
			
			Car repair
			Coopers Plains Car Care (service provider number: 011)

			Description: Established in 1990 by Geoff and Margaret Smith, Coopers Auto Mechanic is owned by Coopers Plains Car Care and the company has grown from a one man workshop into a modern fully equipped service centre, currently employing seven dedicated staff who are passionate about customer service and very experienced in their fields.

			Detail:

			Address: 1/38 Rosedale St Coopers Plains, QLD 4108
			Ph: 07 3344 2293
			Fx: 07 3344 2293
			Web: admin@cpcc.net.au

			Underwood Car Care Centre (service provider number: 012)

			Description: At Underwood Car Care Centre we do Minor Services, Major Services and we specialise in Manufacturers Logbook Services (at a better price) for cars, light trucks and 4WDs. As a Fulcrum Suspension dealer we are specialists in repairing and modifying your vehicles suspension. We sell a large range of Kumho tyres which we can align or balance on our Beissbarth computerised machines.

			Detail: 

			Ph: 07 3041 4946
			Email:ben@underwoodcarcare.net.au
			Address:17 Kingston Road, Woodridge QLD 411

			LeMans Motors (service provider number: 013)

			Description: At LeMans Motors, we have a commitment to the complete satisfaction of our customers. With over 40 years’ experience in the automotive industry, we have developed a reputation built on trust, reliability, and value for money and workmanship of uncompromised high quality. Our technicians undergo regular training courses to update their knowledge and are at the forefront of technological changes in the industry as these changes come to hand. Our staff is dedicated, highly trained professionals and have the backing of a technical support network that is second to none. Come and see why thousands of Brisbane Motorists choose and recommend LeMans Motors. You will find our service a refreshing change and experience for yourself the friendly, personal, genuinely caring and helpful way in which we conduct our business. We look forward to developing and maintaining a long term relationship with all of our customers and a relationship that is mutually beneficial. Make the change today.

			Detail:

			Bulimba

			51 Godwin St. 
			Bulimba, QLD 4171 
			Phone: 3188 0994	
			Fax: 3399 8499

			Milton

			36 Douglas St. 
			Milton, QLD 4064 
			Phone: 3188 0992	
			Fax: 3368 1919



			Combined Automotive Services (service provider number: 014)

			Description: 
			Combined Automotive Services take great pride in providing a high level of customer service and quality workmanship. 
			Our Team
			The team at Combined Automotive Services is committed to excellence.
			As a Repco Authorised Service centre we provide high quality customer service and superior workmanship, ensuring our customers receive the very best in automotive care.
			Our Facilities 
			Our workshop is widely acknowledged as one of the best equipped and most professional independent operations in Australia.
			Our Service
			You won’t find a better level of customer service than from the friendly team at Combined Automotive Services.
			You can rely on us to do the little things that really make a difference

			Detail: 

			Address: 14 Mayneview Street Milton, QLD 4064
			Ph: 0733696975
			
			Air condition
			Fallon Solutions (service provider number: 015)

			Description: Fallon Solutions is able to offer the full range of project services in the disciplines of electrical, data, plumbing, gas and air conditioning. Projects range from $5,000 to $10,000,000 in value and can be completed over a weekend or several months depending upon the requirements.

			Detail:

			Greater Brisbane Area	

			Outer North to Caboolture	3255 1203	
			Inner North	3369 7270	
			Central Brisbane	3846 3666	 	 
			Inner South	3395 2234	 	 
			South to Beenleigh	3287 2244	 	 
			West to Ipswich	3288 4092	 	 
			East Side and Redlands	3829 2508	

			Gold Coast Region
			Beenleigh to Robina 5532 6606
			Robina to Tweed Heads 5508 2670
			
			Ridge Air Conditioning (service provider number: 016)

			Description: Ridge Air Conditioning is your premier source for commercial air con service and installation in the Brisbane area. We specialise in providing expert installation and repairs for systems of any complexity.

			Detail: 

			Address: 193 South Pine Rd, , Brendale, Queensland, 4500, AU
			Ph: (07) 3881 1698

			Tri-Tech Air Conditioning & Electrical (service provider number: 017)

			Description: Tri-Tech Air Conditioning & Electrical supplies, installs, services and repairs all types and brands of air conditioners and we offer a full range of electrical services for residential, commercial and industrial premises.

			Detail: 

			Address: Unit 3 Birubi Square 7 Birubi Street (Corner Stanley Street) Coorparoo Qld 4151
			Ph: (07) 3394 0222
			Fax: (07) 3397 1113
			
			Building work
			ARK Building Company (service provider number: 018)

			Description: ARK is a multidisciplinary company; its design scope includes planning, urban design, residential area planning, overall design, architecture design, interior design, landscape design and so on. ARK Company’s idea is that building changes life. ARK is one of the design directions of construction of new ecological sustainability and energy-efficient buildings.

			Detail: 

			Address: 11 Florence Street, Newstead QLD 4006
			Ph: (07) 3852 6734
			Fax: (07) 3852 6734

			
			Chewarchitecture (service provider number: 019)

			Description: Chewarchitecture is a headquartered in Melbourne, Australia, the architectural design company. They are emphasis on the design studio, is committed to providing customers with considerate service and excellent architectural design, reflect the special style each different property. They insist on creating sustainable buildings, provide variety, original and innovative work. With advanced design method and solution to reduce the influence of construction on the surrounding environment. Each project is unique; each architectural can on society and environment to add a new color. They provide the service including: New house design, more units development project design, planning - Planning license Permit, a Building Permit Building Permit, project management, Construction -Interior design, Landscape planning, 2 d / 3 d graphics.


			Detail: 

			Address: Shop 91, Sunnybank Plaza, Cnr Mains Rd & McCullough St, Sunnybank QLD 4109
			Ph: (04)33 527 171
			Fax: (04)33 527 171
			
			BaiTao Architecture Company (service provider number: 020)

			Description: BaiTao in Australia (Melbourne) architecture design co., LTD is one of Australia's largest architectural design companies. BaiTao’s history can be traced back to 1890, more than a century, BaiTao walked in the forefront of the world architecture design industry. Excellence, practical and economic is BaiTao company design principle; in the design of the innovation and technical update is the aim of the company; Reliable technical and design of the unique is the reputation of the company's long-term. Huge technical resources, broad, rich experience, make BaiTao Company can undertake all kinds of size, design of various types of regional planning and the design of all kinds of buildings. BaiTao architectural design group, in addition to the major cities in Australia, also has branches in Southeast Asia, Europe and the United States, design business all over the world. BaiTao Company has concentrated a large number of outstanding architects and related professionals, in addition to usual architecture design business, also for sports, health care, residential building is equipped with specialized research institutions. Major works include the Australian national tennis center, Melbourne, Australia, the Olympic park and cycling pavilion, headquarters, ESSO Australia Melbourne underwater world aquarium, Malaysia sports center and numerous local and overseas hotel built in Australia, commercial buildings, government buildings, office buildings, residential buildings, medical facilities


			Detail: 

			Address:  Edward St, Brisbane QLD 4000
			Ph: (07) 3236 4500
			Fax: (07) 3236 4500

		</p>
		
	</div>

	
	<!-- include the footer -->
	<?php include 'footerBar.php' ?>
</body>

</html>
