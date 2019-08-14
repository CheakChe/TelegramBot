<?php 
include "php/language.php";
?>
<!DOCTYPE html>
<html lang ="<?
if($_SESSION['lang-select']){echo $_SESSION['lang-select'];}
else{echo 'en';}
?>">
	<head>
		<title>BAInvest</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--header icon CSS -->
		<link rel="icon" href="assets/img/favicon.ico">
		<!-- carousel CSS -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- animations CSS -->
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- mobile menu CSS -->
		<link rel="stylesheet" href="assets/css/slicknav.min.css">
		<!--css animation-->
		<link rel="stylesheet" href="assets/css/animation.css">
		<!--css animation-->
		<!-- style CSS -->
		<link rel="stylesheet" href="style.css">

		<!-- Скрипт для поддержки браузерами тега '<picture>' -->
		<script async src="assets/js/picturefill.min.js"></script>
	</head>

	<body>
		<!-- Header -->
		<div class="header-area wow fadeInDown header-absolate" id="nav" data-0="position:fixed;" 
			data-top-top="position:fixed;top:0;" data-edge-strategy="set" style="position: fixed; background-color: rgba(15, 37, 48,0.5);">
			<div class="container">
				<div class="" style="display: flex;justify-content: space-between; width: 100%;">
					<div class="col-4 col-lg-2 d-block d-lg-none">
						<div class="mobile-menu">
						</div>
					</div>
					<div >
						<div class="logo-area">
							<a href="#">
								<h2 style=" color: #ffd700;white-space: nowrap;">B
										<picture>
											<source srcset='assets/img-webp/favicon.webp' type='image/webp'/>
											<img src="assets/img/favicon.ico" alt="favicon" style="width: 40px; margin: 0 -16px;margin-bottom: 5px;"/>
										</picture>
										Invest
								</h2>
							</a>
						</div>
					</div>
					<div >
						<div id="menu" class="main-menu text-center">
								<ul id="slick-nav" class="dis-menu" style="white-space: nowrap;">
										<li><a class="scroll col" style="white-space: nowrap;" href="#home"><?php echo $Lang['Home'];?></a></li>
										<li><a class="scroll col" style="white-space: nowrap;" href="#about"><?php echo $Lang['About'];?></a></li>
										<li><a class="scroll col" style="white-space: nowrap;" href="#token"><?php echo $Lang['TokenDistribution'];?></a></li>
										<li><a class="scroll col" style="white-space: nowrap;" href="#roadmap"><?php echo $Lang['Roadmap'];?></a></li>
										<li><a class="scroll col" style="white-space: nowrap;" href="#team"><?php echo $Lang['Team'];?></a></li>
										<li><a class="scroll col" style="white-space: nowrap;" href="#Paper"><?php echo $Lang['Documentation'];?></a></li>									
										<li><a class="scroll col" style="white-space: nowrap;" href="#faq">FAQ</a></li>
										<li  id="logmob">
											<a href="https://bitcoinacademy.international/login.php"><?php echo $Lang['Login']?></a>
										</li>
								</ul>
						</div>
					</div>
					<div  style="display: flex; margin: 0 0;">
						<div id="login" class="but" style="width: 60px; margin: 0 0;"><a href="https://bitcoinacademy.international/login.php" ><?php echo $Lang['Login']?></a></div>
						<div class="margin-menu">
							<div class="dropdown">
								<button class="but" type="button" id="languageMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name=lang>
									<?
									 if($_SESSION['lang-select']){echo $_SESSION['lang-select'];}
									 	else{echo 'en';}
									 ?>
									</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageMenuButton">
									<form method="POST">
										<input type="submit" class="dropdown-item btn btn-outline-warning" style=" background: -webkit-linear-gradient(right,#ffd700,#ffd700,#ffd700); color: white;" name="sk" value="Slovensk" />
										<input type="submit" class="dropdown-item btn btn-outline-warning" style=" background: -webkit-linear-gradient(right,#ffd700,#ffd700,#ffd700);color: white;" name="en" value="English" />
										<input type="submit" class="dropdown-item btn btn-outline-warning" style=" background: -webkit-linear-gradient(right,#ffd700,#ffd700,#ffd700);color: white;" name="ru" value="Русский" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main-Content -->
		<!-- Home -->
		<div style="overflow: hidden"  id="home">
			<div id="particles-js"  style="position: fixed;"></div>
			<div class="text-center white-text mx-5 wow headShake mar ">
				<div class="mar">
					<h1 class="mb-4">
						<strong style="color: #ffd700"><?php echo $Lang['Welcome'];?></strong>
					</h1>
					<p>
						<strong style="text-shadow: black 0 0 4px;"><?php echo $Lang['Bacoin'];?></strong>
					</p>
					<p class="mb-4 d-none d-md-block">
						<strong style="text-shadow: black 0 0 4px;"><?php echo $Lang['WeTravel'];?></strong>
					</p>
					<a style="text-shadow: black 0 0 4px;" href="#" class="btn btn-outline-white btn-lg waves-effect waves-light">
						<?php echo $Lang['HI-TECH'];?>
					</a>
					<br> 
					<a href="https://client.wavesplatform.com/dex?assetId1=WAVES&amp;assetId2=EFguZiNYnFKzjGnYzhaM4SA3JPNRSHMzkUZWfDSCq6xA" class="gradient-btn v2 mr-20" target="_blank"><?php echo $Lang['Buy'];?></a>
				</div>           
			</div>
		</div>

		<!-- AboutUS -->
		<div class="blue-strong v2 " id="about" style="	background: #0f2530;">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="heading">
							<h5><?php echo $Lang['TheySay'];?></h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="logo-carousel owl-carousel text-center">
							<div class="single-logo-wrapper">
								<div class="single-item">
									<picture>
										<source srcset="assets/img-webp/c-logo-1.webp" type="image/webp"/>
										<img src="assets/img/c-logo-1.png" alt=""/>
									</picture>
								</div>
							</div>
							<div class="single-logo-wrapper">
								<div class="single-item">
									<picture>
										<source srcset="assets/img-webp/c-logo-2.webp" type="image/webp"/>
										<img src="assets/img/c-logo-2.png" alt=""/>
									</picture>
								</div>
							</div>
							<div class="single-logo-wrapper">
								<div class="single-item">
									<picture>
										<source srcset="assets/img-webp/c-logo-3.webp" type="image/webp"/>
										<img src="assets/img/c-logo-3.png" alt=""/>
									</picture>
								</div>
							</div>
							<div class="single-logo-wrapper">
								<div class="single-item">
									<picture>
										<source srcset="assets/img-webp/c-logo-4.webp" type="image/webp"/>
										<img src="assets/img/c-logo-4.png" alt=""/>
									</picture>
								</div>
							</div>
							<div class="single-logo-wrapper">
								<div class="single-item">
									<picture>
										<source srcset="assets/img-webp/c-logo-5.webp" type="image/webp"/>
										<img src="assets/img/c-logo-5.png" alt=""/>
									</picture>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<div style="margin: 3% auto;">
							<picture>
								<source srcset="assets/img-webp/about-left.webp" type="image/webp"/>
								<img src="assets/img/about-left.png" width="90%" alt="">
							</picture>
						</div>
					</div>
					<div class="col-12 col-md-6 align-self-center">
						<div class="heading">
							<h5><?php echo $Lang['OutToken'];?></h5>
						</div>
						<div class="about-mid-text">
							<a href="https://client.wavesplatform.com/dex?assetId1=WAVES&assetId2=EFguZiNYnFKzjGnYzhaM4SA3JPNRSHMzkUZWfDSCq6xA" class="site" target="_blank"><h1><?php echo $Lang['DEXWaves'];?></h1></a>
							<p style="overflow-wrap: break-word;"><?php echo $Lang['Token'];?>EFguZiNYnFKzjGnYzhaM4SA3JPNRSHMzkUZWfDSCq6xA</p>
							<p><?php echo $Lang['Trade'];?></p>
							<p>BACoin/WAVES</p>
							<p>BACoin/BTC</p>
							<p>BACoin/LTC</p>
							<p>BACoin/EUR</p>
							<p>BACoin/ETH</p>
							<p><?php echo $Lang['Telegram'];?></p>
						</div>
						<a href="https://t.me/joinchat/EHOJWxafsb3r2mXXbEnwnQ" target="_blank" class="gradient-btn v2 about-btn"> <i class="fa "></i><?php echo $Lang['JoinUs'];?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="single-about-area" style="	background: #0f2530;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<a class="single-about">
							<div class="single-about-img">
								<picture>
									<source srcset="assets/img-webp/about-icon-1.webp" type="image/webp"/>
									<img src="assets/img/about-icon-1.png" alt="">
								</picture>
							</div>
							<div class="single-about-text">
								<h4><?php echo $Lang['Unique'];?></h4>
								<p><?php echo $Lang['ToBeAmong'];?></p>
							</div>
						</a>
					</div>
					<div class="col-lg-4">
						<a class="single-about">
							<div class="single-about-img">
								<picture>
									<source srcset="assets/img-webp/about-icon-2.webp" type="image/webp"/>
									<img src="assets/img/about-icon-2.png" alt="">
								</picture>
							</div>
							<div class="single-about-text">
								<h4><?php echo $Lang['Providing'];?></h4>
								<p><?php echo $Lang['TokenBACoin'];?></p>
							</div>
						</a>
					</div>
					<div class="col-lg-4">
						<a class="single-about">
							<div class="single-about-img">
								<picture>
									<source srcset="assets/img-webp/about-icon-3.webp" type="image/webp"/>
									<img src="assets/img/about-icon-3.png" alt="">
								</picture>
							</div>
							<div class="single-about-text">
								<h4><?php echo $Lang['AVariety'];?>
								</h4>
								<p><?php echo $Lang['WePay'];?></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Distribution -->
		<div class="distibution-bg v2" style="	background: #0f2530;"> 
			<div class="distibution" id="token">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<div class="heading" style="margin: 100px;">
								<h1><?php echo $Lang['TokenDistribution'];?></h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 text-right">
							<div class="distibution-svg distibution-svg-1">
								<picture>
									<source srcset="assets/img-webp/token-top.webp" type="image/webp"/>
									<img src="assets/img/token-top.png" alt="">
								</picture>
							</div>
						</div>
						<div class="col-6">
							<div class="distibution-d item-1">
								<ul>
									<li class="distibution-list-1"><span>15% </span><?php echo $Lang['Manning'];?></li>
									<li class="distibution-list-2"><span>50% </span><?php echo $Lang['Investors'];?></li>
									<li class="distibution-list-3"><span>25% </span><?php echo $Lang['Branding'];?></li>
									<li class="distibution-list-4"><span>10% </span><?php echo $Lang['Airdrop'];?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Roadmap -->
		<div class="blue ">
			<div class="blue-strong roadmap" id="roadmap"  >
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<div class="heading">
								<h5 ><?php echo $Lang['Chronology'];?></h5>
								<h1 style="margin-bottom: 100px;" ><?php echo $Lang['OurRoadmap'];?></h1>
							</div>
							<div class="maps">
								<picture>
									<source srcset='<?php echo $Lang['RoadmapImgWebp'];?>' type='image/webp' />
									<img src="<?php echo $Lang['RoadmapImg'];?>" alt="roadmap">
								</picture> 	
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- Team -->
		<div class="blue-strong team" id="team" style="background: #0f2530">
				<!-- Founders -->
				<div class="container">
					<div class="row">
							<div class="col-12 text-center">
								<div class="heading">
									<div class="space-10">
									</div>
									<h1><?php echo $Lang['Founders'];?></h1>
								</div>
								<div class="space-60"></div>
							</div>
					</div>
					<div class="row text-center" style="display:flex; justify-content: center;">
							<div class="col-4">
								<div class="single-team">
									<div class="single-team-img">
										<picture>
											<source srcset="assets/img-webp/StanislavR.webp" type="image/webp"/>
											<img src="assets/img/StanislavR.jpg" alt="">
										</picture>
									</div>
									<div class="space-30"></div>
									<div class="single-team-content">
										<h3><?php echo $Lang['StanislavRepko'];?></h3>
										<div class="space-10"></div>
										<h6>CEO</h6>
									</div>
									<div class="space-10"></div>
									<div class="single-team-social">
										<ul>
											<li><a class="ico-2" href="https://www.facebook.com/stanislav.repko.77" target="_blank"><i class="fa "></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-8">
								<p class="dest_team" style="overflow-wrap: break-word;">
									<?php echo $Lang['StanislavDistribution']; ?>
								</p>
							</div>
							<div class="col-8 mob-dist">
								<p class="dest_team2">
								<?php echo $Lang['LubomirDistribution'];?>
								</p>
							</div>
							<div class="4">
								<div class="single-team">
									<div class="single-team-img">
										<picture>
											<source srcset="assets/img-webp/LubomirB.webp" type="image/webp"/>
											<img src="assets/img/LubomirB.jpg" alt="">
										</picture>
									</div>
									<div class="space-30"></div>
									<div class="single-team-content">
										<h3><?php echo $Lang['LubomirBajus'];?></h3>
										<div class="space-10"></div>
										<h6><?php echo $Lang['StratigicDirector'];?></h6>
									</div>
									<div class="space-10"></div>
									<div class="single-team-social">
										<ul>
											<li><a class="ico-6" href="https://www.goldenline.pl/lubomir-bajus/" target="_blank"><i class="fa "></i></a></li>
											<li><a class="ico-2" href="https://www.facebook.com/lubomir.bajus" target="_blank"><i class="fa "></i></a></li>
											<li><a class="ico-4" href="https://www.youtube.com/channel/UCWkoeFyXtZlrD2LRItsdtLg/videos?view=0&sort=dd&shelf_id=0" target="_blank"><i class="fa "></i></a></li>
										</ul>
									</div>
								</div>
							</div>
					</div>
				</div>
				
				<!-- Developer -->
				<div class="section-padding">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<div class="heading">
									<div class="space-10"></div>
									<h1><?php echo $Lang['Team'];?></h1>
								</div>
								<div class="space-60"></div>
							</div>
						</div>
						<div class="row text-center" style="display: flex;justify-content: center;">
							<div class="col-12 col-md-6 col-lg-4">
									<div class="single-team">
										<div class="single-team-img">
											<picture>
												<source srcset="assets/img-webp/AndreyK.webp" type="image/webp"/>
												<img src="assets/img/AndreyK.jpg" alt="">
											</picture>
										</div>
										<div class="space-30"></div>
										<div class="single-team-content">
											<h3><?php echo $Lang['AndreyKuzmenko'];?></h3>
											<div class="space-10"></div>
											<h6><?php echo $Lang['CEO'];?></h6>
										</div>
										<div class="space-10"></div>
										<!-- <div class="single-team-social">
											<ul>
												<li><a class="ico-1" href="https://t.me/club_cryptomania" target="_blank"></a></li>
												<li><a class="ico-2" href="https://www.facebook.com/people/%D0%90%D1%80%D1%82%D0%B5%D0%BC-%D0%A0%D0%B5%D0%B2%D1%8F%D0%BA%D0%B8%D0%BD/100021232485880" target="_blank"></a></li>
												<li><a class="ico-5" href="https://vk.com/id327129899" target="_blank"></a></li>
												<li><a class="ico-6" href="https://moikrug.ru/revyakin-artem" target="_blank"></a></li>
											</ul>
										</div> -->
											<p style="font-size: 15pt;margin-top: 25px;">
												<?php echo $Lang['KuzmenkoDistribution']; ?>
											</p>
											<div class="space-10"></div>
									</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
									<div class="single-team">
										<div class="single-team-img">
											<picture>
												<source srcset="assets/img-webp/AlexanderP.webp" type="image/webp"/>
												<img src="assets/img/AlexanderP.jpg" alt="">
											</picture>
										</div>
										<div class="space-30"></div>
										<div class="single-team-content">
											<h3><?php echo $Lang['AlexanderPryyimak'];?></h3>
											<div class="space-10"></div>
											<h6><?php echo $Lang['Engineer'];?></h6>
										</div>
										<div class="space-10"></div>
										<!-- <div class="single-team-social">
											<ul>
												<li><a class="ico-1" href="https://t.me/club_cryptomania" target="_blank"></a></li>
												<li><a class="ico-2" href="https://www.facebook.com/people/%D0%90%D1%80%D1%82%D0%B5%D0%BC-%D0%A0%D0%B5%D0%B2%D1%8F%D0%BA%D0%B8%D0%BD/100021232485880" target="_blank"></a></li>
												<li><a class="ico-5" href="https://vk.com/id327129899" target="_blank"></a></li>
												<li><a class="ico-6" href="https://moikrug.ru/revyakin-artem" target="_blank"></a></li>
											</ul>
										</div> -->
											<p style="font-size: 15pt;margin-top: 25px;">
												<?php echo $Lang['PryyimakDistribution']; ?>
											</p>
											<div class="space-10"></div>
									</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
									<div class="single-team">
										<div class="single-team-img">
											<picture>
												<source srcset="assets/img-webp/AlexanderK.webp" type="image/webp"/>
												<img src="assets/img/AlexanderK.jpg" alt="">
											</picture>
										</div>
										<div class="space-30"></div>
										<div class="single-team-content">
											<h3><?php echo $Lang['AlexanderKabanov'];?></h3>
											<div class="space-10"></div>
											<h6><?php echo $Lang['CEO'];?></h6>
										</div>
										<div class="space-10"></div>
										<!-- <div class="single-team-social">
											<ul>
												<li><a class="ico-1" href="https://t.me/club_cryptomania" target="_blank"></a></li>
												<li><a class="ico-2" href="https://www.facebook.com/people/%D0%90%D1%80%D1%82%D0%B5%D0%BC-%D0%A0%D0%B5%D0%B2%D1%8F%D0%BA%D0%B8%D0%BD/100021232485880" target="_blank"></a></li>
												<li><a class="ico-5" href="https://vk.com/id327129899" target="_blank"></a></li>
												<li><a class="ico-6" href="https://moikrug.ru/revyakin-artem" target="_blank"></a></li>
											</ul>
										</div> -->
											<p style="font-size: 15pt;margin-top: 25px;">
												<?php echo $Lang['KabanovDistribution']; ?>
											</p>
											<div class="space-10"></div>
									</div>
							</div>
						</div>
						<div class="row text-center" style="display:flex; justify-content: center;">
							<div class="col-12 col-md-6 col-lg-4">
								<div class="single-team">
									<div class="single-team-img">
										<picture>
											<source srcset="assets/img-webp/George.webp" type="image/webp"/>
											<img src="assets/img/George.png" alt="">
										</picture>
									</div>
									<div class="space-30"></div>
									<div class="single-team-content">
										<h3><?php echo $Lang['GeorgeKrasnov'];?></h3>
										<div class="space-10"></div>
										<h6><?php echo $Lang['Developer'];?></h6>
									</div>
									<div class="space-10"></div>
									<div class="single-team-social">
										<ul>
											<li><a class="ico-1" href="https://t.me/mrKrasnov" target="_blank"></a></li>
											<li><a class="ico-2" href="https://www.facebook.com/profile.php?id=100007996118845"></a></li>
											<li><a class="ico-4" href="https://www.youtube.com/channel/UCMVQkonAW4Z4OGOBvOFLaDA/featured" target="_blank"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
									<div class="single-team">
										<div class="single-team-img">
											<picture>
												<source srcset="assets/img-webp/Artem.webp" type="image/webp"/>
												<img src="assets/img/Artem.png" alt="">
											</picture>
										</div>
										<div class="space-30"></div>
										<div class="single-team-content">
											<h3><?php echo $Lang['ArtemReviakin'];?></h3>
											<div class="space-10"></div>
											<h6><?php echo $Lang['ChiefDeveloper'];?></h6>
										</div>
										<div class="space-10"></div>
										<div class="single-team-social">
											<ul>
												<li><a class="ico-1" href="https://t.me/club_cryptomania" target="_blank"></a></li>
												<li><a class="ico-2" href="https://www.facebook.com/people/%D0%90%D1%80%D1%82%D0%B5%D0%BC-%D0%A0%D0%B5%D0%B2%D1%8F%D0%BA%D0%B8%D0%BD/100021232485880" target="_blank"></a></li>
												<li><a class="ico-5" href="https://vk.com/id327129899" target="_blank"></a></li>
												<li><a class="ico-6" href="https://moikrug.ru/revyakin-artem" target="_blank"></a></li>
											</ul>
										</div>
											<p style="font-size: 15pt;margin-top: 25px;">
												<?php echo $Lang['ReviakinDistribution']; ?>
											</p>
											<div class="space-10"></div>
									</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
								<div class="single-team">
									<div class="single-team-img">
										<picture>
											<source srcset="assets/img-webp/Eugene.webp" type="image/webp"/>
											<img src="assets/img/Eugene.png" alt="">
										</picture>
									</div>
									<div class="space-30"></div>
									<div class="single-team-content">
										<h3><?php echo $Lang['EugeneLukin'];?></h3>
										<div class="space-10"></div>
										<h6><?php echo $Lang['Developer'];?></h6>
									</div>
									<div class="space-10"></div>
									<div class="single-team-social">
										<ul>
											<li><a class="ico-1" href="https://t.me/CheCheak" target="_blank"></a></li>
											<li><a class="ico-2" href="https://www.facebook.com/CheakChe" target="_blank"></a></li>
											<li><a class="ico-5" href="https://vk.com/drfusion" target="_blank"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row text-center" style="display:flex; justify-content: center;">
							<div class="col-12 col-md-6 col-lg-4">
								<div class="single-team">
									<div class="single-team-img">
										<picture>
											<source srcset="assets/img-webp/Alex.webp" type="image/webp"/>
											<img src="assets/img/Alex.png" alt="">
										</picture>
									</div>
									<div class="space-30"></div>
									<div class="single-team-content">
										<h3><?php echo $Lang['AlexSidranskyi'];?></h3>
										<div class="space-10"></div>
										<h6><?php echo $Lang['ArtDirector'];?></h6>
									</div>
									<div class="space-10"></div>
									<!-- <div class="single-team-social">
										<ul>
											<li><a class="ico-1" href="https://t.me/mrKrasnov" target="_blank"></a></li>
											<li><a class="ico-2" href="https://www.facebook.com/profile.php?id=100007996118845"></a></li>
											<li><a class="ico-4" href="https://www.youtube.com/channel/UCMVQkonAW4Z4OGOBvOFLaDA/featured" target="_blank"></a></li>
										</ul>
									</div> -->
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
									<div class="single-team">
										<div class="single-team-img">
											<picture>
												<source srcset="assets/img-webp/Nazar.webp" type="image/webp"/>
												<img src="assets/img/Nazar.png" alt="">
											</picture>
										</div>
										<div class="space-30"></div>
										<div class="single-team-content">
											<h3><?php echo $Lang['NazarDusiak'];?></h3>
											<div class="space-10"></div>
											<h6><?php echo $Lang['ExecutiveManager'];?></h6>
										</div>
										<div class="space-10"></div>
										<!-- <div class="single-team-social">
											<ul>
												<li><a class="ico-1" href="https://t.me/club_cryptomania" target="_blank"></a></li>
												<li><a class="ico-2" href="https://www.facebook.com/people/%D0%90%D1%80%D1%82%D0%B5%D0%BC-%D0%A0%D0%B5%D0%B2%D1%8F%D0%BA%D0%B8%D0%BD/100021232485880" target="_blank"></a></li>
												<li><a class="ico-5" href="https://vk.com/id327129899" target="_blank"></a></li>
												<li><a class="ico-6" href="https://moikrug.ru/revyakin-artem" target="_blank"></a></li>
											</ul>
										</div> -->
											<!-- <p style="font-size: 15pt;margin-top: 25px;">
												<?php echo $Lang['ReviakinDistribution']; ?>
											</p>
											<div class="space-10"></div> -->
									</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!--Documentation-->
		<div class="blue-strong section-padding doc" id="Paper" style="	background: #0f2530; ">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="heading">
							<div class="space-10"></div>
							<h1><?php echo $Lang['Documentation'];?></h1>
						</div>
						<div class="space-60"></div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-6 col-lg">
						<div class="single-document">
							<div class="document-flag">
								<a href="assets/img/whitepapper_en.pdf" target="_blank">
									<picture>
										<source srcset="assets/img-webp/flag-1.webp" type="image/webp"/>
										<img src="assets/img/flag-1.png" alt="">
									</picture>
								</a>
							</div>
							<button class="single-document-text">
								<span><?php echo $Lang['English'];?></span>
							</button>
						</div>
					</div>
					<div class="col-6 col-lg">
						<div class="single-document">
							<div class="document-flag">
								<a href="#" target="_blank">
									<picture>
										<source srcset="assets/img-webp/flag-2.webp" type="image/webp"/>
										<img src="assets/img/flag-2.png" alt="">
									</picture>
								</a>
							</div>
							<button class="single-document-text">
								<span><?php echo $Lang['Spanish'];?></span>
							</button>
						</div>
					</div>
					<div class="col-6 col-lg">
						<div class="single-document">
							<div class="document-flag">
								<a href="assets/img/WhitePaper_bacoin.pdf" target="_blank">
									<picture>
										<source srcset="assets/img-webp/flag-3.webp" type="image/webp"/>
										<img src="assets/img/flag-3.png" alt="">
									</picture>
								</a>
							</div>
							<button class="single-document-text">
								<span><?php echo $Lang['Russian'];?></span>
							</button>
						</div>
					</div>
					<div class="col-6 col-lg">
						<div class="single-document">
							<div class="document-flag">
								<a href="#" target="_blank">
									<picture>
										<source srcset="assets/img-webp/flag-4.webp" type="image/webp"/>
										<img src="assets/img/flag-4.png" alt="">
									</picture>
								</a>
							</div>
							<button class="single-document-text">
								<span><?php echo $Lang['Arab'];?></span>
							</button>
						</div>
					</div>
					<div class="col-6 col-lg">
						<div class="single-document">
							<div class="document-flag">
								<a href="#" target="_blank">
									<picture>
										<source srcset="assets/img-webp/flag-5.webp" type="image/webp"/>
										<img src="assets/img/flag-5.png" alt="">
									</picture>
								</a>
							</div>
							<button class="single-document-text">
								<span><?php echo $Lang['Slovak'];?></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--FAQ-->
		<!-- <div class="blue-strong faq-area  v2 " id="faq" style="background: #0f2530;">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="heading">
							<div class="space-30"></div>
							<div class="space-10"></div>
							<h1><?php echo $Lang['FAQ'];?></h1>
						</div>
					</div>
					<div class="space-50"></div>
				</div>
				<br>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="one" role="tabpanel">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-10 offset-1">
									<div class="faq-collups">
										<div id="accordion">
											<div class="card">
												<div class="card-header">
													<h5 class="mb-0">
														<button style="background: #5d5d5d;" class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
															<?php echo $Lang['WhereCan'];?>
														</button>
													</h5>
												</div>
												<div id="collapse1" class="collapse show" data-parent="#accordion">
													<div class="card-body">
														<p><?php echo $Lang['AtTheMoment'];?></p>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<h5 class="mb-0">
														<button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
															<?php echo $Lang['WhatAre'];?>
														</button>
													</h5>
												</div>

												<div id="collapse2" class="collapse" data-parent="#accordion">
													<div class="card-body">
														<p><?php echo $Lang['OnTheICO'];?></p>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<h5 class="mb-0">
														<button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false">
														<?php echo $Lang['DoesYour'];?>
														</button>
													</h5>
												</div>

												<div id="collapse3" class="collapse" data-parent="#accordion">
													<div class="card-body">
														<p><?php echo $Lang['WeProvide'];?></p>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<h5 class="mb-0">
														<button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="false">
															<?php echo $Lang['WhatIs'];?>
														</button>
													</h5>
												</div>

												<div id="collapse4" class="collapse" data-parent="#accordion">
													<div class="card-body">
														<p><?php echo $Lang['WeAre'];?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Footer -->
		<footer class="main-footer blue-strong">
			<div class="top-footer">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-3">
								<a href="#"><h2 style="color: #ffd700">BACoin</h2></a>
							<div>
								<p class="follow"><?php echo $Lang['FollowUs'];?></p>
								<div class="follow_img">
									<div>
										<a href="https://t.me/joinchat/EHOJWxafsb3r2mXXbEnwnQ" target="_blank">
											<img src="assets/img/telegram-svg.svg" alt="telegram">
										</a>
									</div>
									<div>
										<a href="https://vk.com/club_criptomania" target="_blank">
											<img src="assets/img/vk-svg.svg" alt="VK">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3 ">
							<div class="row">
								<div class="col-12 col-lg">
									<ul class="footer-list">
										<li>
											<p class="follow"><?php echo $Lang['About'];?></p>
											<ul class="drop-menu">
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#termsModal" style="white-space: nowrap;"><?php echo $Lang['Terms'];?></a></li>
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#privacyModal" style="white-space: nowrap;"><?php echo $Lang['Privacy'];?></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3 ">
							<ul class="footer-list" id="contact">
								<li>
									<p class="follow"><?php echo $Lang['LestStay'];?></p>
									<ul class="touch drop-menu">
										<li>
											<span class="title"><?php echo $Lang['Address'];?></span>
											<address class="footer_color">
												<?php echo $Lang['AddressSpace'];?>
											</address>
										</li>
										<li>
											<span class="title"><?php echo $Lang['Phone'];?></span>
											<address>
												<span class="phones footer_color">+421907507774</span>
											</address>
										</li>
										<li>
											<span class="title">E-mail:</span>
											<address class="footer_color">
												<span><a href="mailto:info@bitcoinacademy.international" class="mail footer_color">info@bitcoinacademy.international</a></span>
												<span><a style="overflow-wrap: break-word;" href="mailto:bitcoinacademy@bitcoinacademy.international" class="mail footer_color">bitcoinacademy@bitcoinacademy.international</a></span>
											</address>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="margin-top: 7%;color:black;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel"><?php echo $Lang['TermsAndConditions']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center">﻿ČLÁNOK I.<br>VŠEOBECNÉ USTANOVENIA</h4>
                        <ol>
                            <li>1.  Tieto Obchodné podmienky upravujú vzťahy medzi poskytovateľom a užívateľom na účasti spoločnosti prostredníctvom www.bitcoinacademy.international</li>
                            <li>2.  Uskutočňovanie zámeru spoločnosti prostredníctvom  www.bitcoinacademy.international sa riadi týmito Obchodnými podmienkami a platnými všeobecne záväznými právnymi </li>
                            <li>3.  Na obchodné vzťahy (ako aj ďalšie právne vzťahy, ktoré môžu z neho vyplynúť) s fyzickými osobami, ktoré nekonajú pri uzatváraní obchodných zmlúv podľa týchto VOP v rámci predmetu svojej podnikateľskej činnosti, sa vzťahujú okrem všeobecných ustanovení Občianskeho zákonníka aj osobitné predpisy, najmä zákon č. 250/2007 o ochrane spotrebiteľa a zákon č. 102/2014 Z. Z. O ochrane spotrebiteľa pri predaji tovaru alebo poskytovaní služieb na základe zmluvy uzavretej na diaľku alebo zmluvy uzavretej mimo prevádzkových priestorov predávajúceho.</li>
                            <li>4.  Objednávateľ a prevádzkovateľ sa dohodli, že plne uznávajú elektronickú formu komunikácie, najmä prostredníctvom elektronickej pošty a internetovej siete ako platnú a záväznú pre obe zmluvné strany. Elektronická forma komunikácie nie je akceptovateľná v prípade odstúpenia od zmluvy.</li>
                       </ol>
                        <h4 class="text-center">ČLÁNOK II.<br>VYMEDZENIE POJMOV</h4>
                        <ol>
                            <li>1.  Zámer BITCOIN Academy – nový koncept MLM marketingu, ktorý je nekonečný a hlavne spravodlivý a v žiadnom prípade nijako nezavádzajúci - jeho transparentnosť spočíva vo vzájomnej kontrole všetkých užívateľov. Princíp je skôr edukačný, kde si človek môže osvojiť základné ako aj elementárne znalosti v oblasti IT, MLM a tradingového manažmentu. To všetko bezplatne, bez nejakého obmedzenia, či podmienky. Samozrejme pre tých, ktorí budú mať záujem na sebe pracovať máme od freelevelového systému až po platený program, možnosti slušného zárobku. Zárobku ktorý nijako negarantujeme ani nesľubujeme, všetko je o schopnostiach človeka a hlavne o hraniciach úsilia, ktoré je pre nás ochotný vyvinúť.</li>
                            <li>2.  Poskytovateľ je obchodná spoločnosť BITCOIN Academy a. s., IČO: 50 969 137, zapísaná v OR OS Bratislava oddiel Sa, vložka č. 6618/B, so sídlom: Grösslingova 4 , 811 09 Bratislava. E-mailová adresa predávajúceho je info@bitcoinacademy.international</li>
                        </ol>
                        <h4 class="text-center">ČLÁNOK III.<br>Jednotlivé Balíky / Cena</h4>
                        <div style="overflow-x: auto;">
                            <table border="1" cellpadding="6" style="width: 100%; ">
                                <tbody>
                                    <tr>
                                        <th bgcolor="#dddddd">Upgrade</th>
                                        <th bgcolor="#dddddd">Price</th>
                                        <th bgcolor="#dddddd">AA</th>
                                        <th bgcolor="#dddddd">FS</th>
                                        <th bgcolor="#dddddd">NEW</th>
                                        <th bgcolor="#dddddd">BAC</th>
                                        <th bgcolor="#dddddd">Airdrop</th>
                                        <th bgcolor="#dddddd">AAA</th>
                                        <th bgcolor="#dddddd">Card</th>
                                    </tr>
                                    <tr>
                                        <td>Invite</td>
                                        <td>free</td>
                                        <td>SEE</td>
                                        <td>SEE</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr bgcolor="#eeeedd">
                                        <td>Start</td>
                                        <td>1€</td>
                                        <td>10%</td>
                                        <td>1</td>
                                        <td>+</td>
                                        <td>0.1</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Operator</td>
                                        <td>10€</td>
                                        <td>15%</td>
                                        <td>6/year</td>
                                        <td>+</td>
                                        <td>1</td>
                                        <td>0,1%/year</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr bgcolor="#eeeedd">
                                        <td>Manager</td>
                                        <td>100€</td>
                                        <td>20%</td>
                                        <td>1/month</td>
                                        <td>+</td>
                                        <td>5</td>
                                        <td>0,25%/year</td>
                                        <td>1%</td>
                                        <td>WITHDRAWAL CARD</td>
                                    </tr>
                                    <tr>
                                        <td>Team Leader</td>
                                        <td>350€</td>
                                        <td>25%</td>
                                        <td>2/month</td>
                                        <td>+</td>
                                        <td>10</td>
                                        <td>0,75%/year</td>
                                        <td>3%</td>
                                        <td>100$ DEBT</td>
                                    </tr>
                                    <tr bgcolor="#eeeedd">
                                        <td>Silver</td>
                                        <td>1000€</td>
                                        <td>30%</td>
                                        <td>1/week</td>
                                        <td>+</td>
                                        <td>25</td>
                                        <td>1%/year</td>
                                        <td>7%</td>
                                        <td>250$ GRV</td>
                                    </tr>
                                    <tr>
                                        <td>Gold</td>
                                        <td>3500€</td>
                                        <td>35%</td>
                                        <td>2/week</td>
                                        <td>+</td>
                                        <td>100</td>
                                        <td>2%/year</td>
                                        <td>15%</td>
                                        <td>450$ GRV</td>
                                    </tr>
                                    <tr bgcolor="#eeeedd">
                                        <td>Diamant</td>
                                        <td>10000€</td>
                                        <td>40%</td>
                                        <td>3/week</td>
                                        <td>+</td>
                                        <td>300</td>
                                        <td>1%/3 month</td>
                                        <td>20%</td>
                                        <td>1000$ GRV</td>
                                    </tr>
                                    <tr>
                                        <td>Tritium</td>
                                        <td>35 000€</td>
                                        <td>45%</td>
                                        <td>1/day</td>
                                        <td>+</td>
                                        <td>500</td>
                                        <td>1.5% month</td>
                                        <td>30%</td>
                                        <td>2500$ GRV</td>
                                    </tr>
                                    <tr bgcolor="#eeeedd">
                                        <td>Ultimate</td>
                                        <td>100 000€</td>
                                        <td>50%</td>
                                        <td>2/day</td>
                                        <td>+</td>
                                        <td>1000</td>
                                        <td>1%/all profit company</td>
                                        <td>40%</td>
                                        <td>100000 GRV</td>
                                    </tr>       
                                </tbody>
                            </table>
                        </div>
                        <h4 class="text-center">ČLÁNOK IV.<br>PLATOBNÉ PODMIENKY</h4>
                        <ol>
                            <li>1.  Záujemca realizuje platbu na účet poskytovateľa vo výške zvoleného balíka prostredníctvom prevodu peňazí, prostredníctvom platobnej brány alebo iné, ak tieto obchodné podmienky neustanovujú inak.</li>
                        </ol>
                        <h4 class="text-center">ČLÁNOK V.<br>DODACIE  PODMIENKY  A  NÁKLADY  NA DODANIE  TOVARU</h4>
                        <ol>
                            <li>1.  Poukázaním a prijatím peňazí na účet poskytovateľa a úspešnej registrácii podľa podmienok stanovených na stránke sa stáva príslušný balík aktívny.</li>
                        </ol>
                        <h4 class="text-center">ČLÁNOK VI.<br>PRÁVA  A  POVINNOSTI</h4>
                        <ol>
                            <li>1.  Poskytovateľ sa uzatvorením dohody zaväzuje sprístupniť užívateľovi zvolený balíček na stránke.</li>
                        </ol>
                        <h4 class="text-center">ČLÁNOK VII.<br>UPLATŇOVANIE  REKLAMÁCIE</h4>
                        <ol>
                            <li>1.  Reklamáciu si užívateľ uplatňuje u poskytovateľa, a to písomne alebo prostredníctvom e-mailu.</li>
                            <li>2.  Užívateľ má právo obrátiť sa na predávajúceho so žiadosťou o nápravu, ak nie je spokojný so spôsobom, ktorým predávajúci vybavil jeho reklamáciu alebo ak sa domnieva, že predávajúci porušil jeho práva.</li>
                            <li>3.  Užívateľ má právo podať návrh na začatie alternatívneho riešenia sporu subjektu alternatívneho riešenia sporov, ak poskytovateľ na žiadosť odpovedal zamietavo alebo na ňu neodpovedal do 30 dní odo dňa jej odoslania.</li>
                            <li>4.  Zoznam subjektov alternatívneho riešienia sporov zverejňuje Ministerstvo hospodárstva Slovenskej republiky na svojom webovom sídle. Užívateľ má právo podať návrh na začatie alternatívneho riešenia sporu aj prostredníctvom platforny alternatívneho riešenia sporov (http://ec.europa.eu/odr).</li>
                            <li>5.  Ďalšie podmienky alternatívneho riešenia sporu a náležitosti návrhu podľa odseku 8 upravuje zákon č. 391/2015 Z.z. o alternatívnom riešení spotrebiteľských sporov a o zmene a doplnení niektorých zákonov.</li>
                        </ol>
                        <h4 class="text-center">ČLÁNOK VIII.<br>PRÁVO POSKYTOVATEĽA NA ODSTÚPENIE OD ZMLUVY</h4>
                        <ol>
                            <li>1.  Poskytovateľ má právo odstúpiť od zmluvy v prípade vypredania zásob, nedostupnosti tovaru, v prípade ak ani pri vynaložení všetkého úsilia, ktoré možno od neho spravodlivo požadovať nie je schopný dodať tovar kupujúcemu v dohodnutej lehote alebo v cene, ktorá je uvedená v internetovom obchode, alebo dôvodov vyššej moci. Predávajúci o tejto skutočnosti bezodkladne informuje kupujúceho. Zaplatená kúpna cena za tovar bude následne v lehote 15 dní vrátená kupujúcemu prevodom na účet alebo poštovou poukážkou.</li>
                        </ol>
                        <h4 class="text-center">ČLÁNOK IX.<br>OCHRANA OSOBNÝCH ÚDAJOV</h4>
                        <ol>
                            <li>Prevádzkovateľ internetového systému www.bitcoinacademy.international je spoločnosť BITCOIN Academy  a. s., IČO: 50 969 137, zapísaná v OR OS Bratislava oddiel Sa, vložka č. 6618/B, so sídlom: Grösslingova 4 , 811 09 Bratislava. (ďalej len ako „prevádzkovateľ“).<br>Prevádzkovateľ spracúva nasledovné informácie sa týkajú spracúvania osobných údajov návštevníkov a/alebo zákazníkov týchto internetových stránok (ďalej jednotlivo len „Dotknutá osoba“), ktoré vykonáva vyššie uvedený predávajúci (v tomto článku ďalej len „Prevádzkovateľ“). Spracúvanie a ochrana týchto osobných údajov sa spravuje ustanoveniami zákona č. 18/2018 Z. z., o ochrane osobných údajov v znení neskorších predpisov (ďalej len „Zákon“), v spojení s ustanoveniami Nariadenia Európskeho parlamentu a Rady (EU) č. 2016/679 zo dňa 27. apríla 2016, všeobecného nariadenia o ochrane údajov (ďalej len „Nariadenie“)., spôsobom, ktorý je v súlade s dobrými mravmi, a to len na nižšie vymedzený alebo ustanovený účel.<br>Prevádzkovateľ získava osobné údaje prostredníctvom internetovej stránky www.bitcoinacademy.international</li>
                            <li>1.  Vymedzenie účelu spracovania osobných údajov:
                                <ul>
                                    <li>o   potvrdenie objednávky, platby za užívateľské rozhranie,</li>
                                    <li>o  evidencia užívateľov na účely vedenia ich užívateľských účtov na stránke www.bitcoinacademy.international,</li>
                                    <li>o   evidencia užívateľských objednávok pre riešenie prípadných reklamácií,</li>
                                    <li>o   zasielanie e-mailových správ o novinkách a akciách.</li>
                                </ul>
                            </li>
                            <li>2.  Rozsah zhromažďovaných osobných údajov:<br>Medzi tieto osobné údaje patria osobné údaje poskytnuté pri participácii na spolupráci so spoločnosťou, ktorými sú meno a priezvisko, e-mailová adresa, doručovacia adresa, telefónne číslo.<br>Užívateľ poskytuje poskytovateľovi svoje osobné údaje dobrovoľne. Poskytovateľ získava osobné údaje od svojich užívateľov iba v nevyhnutnom rozsahu, potrebnom na splnenie záväzku. Bez týchto údajov nie je možné spracovať prijatú objednávku užívateľa.</li>
                            <li>3.  Tretie strany, ktorým budú osobné údaje poskytnuté:<br>Osobné údaje neposkytujeme žiadnym spoločnostiam spravujúcim databázy osobných údajov, ani žiadnym iným tretím stranám.<br>Rozsah poskytovaných údajov: Meno a adresa užívateľa, telefónne číslo, celková cena užívateľského rozhrania.<br>Získané osobné údaje v žiadnom prípade nezverejňujeme.<br>Osobné údaje užívateľov budú sprístupnené iba pracovníkom poskytovateľa, za účelom vybavenia objednávky. Všetci pracovníci, ktorí prídu do styku s osobnými údajmi boli poučení o správnom a citlivom zaobchádzaní s nimi.</li>
                            <li>4.  Práva a povinnosti užívateľa (dotknutej osoby)<br>Užívateľ je povinný uviesť iba úplné a pravdivé údaje.<br>Užívateľ sa zaväzuje, že v prípade zmeny svoje údaje zaktualizuje.<br>Dotknutá osoba má právo na základe písomnej žiadosti (list, elektronická pošta) od poskytovateľa vyžadovať:
                                <ul>
                                    <li>o   Potvrdenie či sú alebo nie sú osobné údaje o nej spracovávané.</li>
                                    <li>o   Informácie o stave spracúvania svojich osobných údajov.</li>
                                    <li>o   Informácie o zdroji, z ktorého získal jej osobné údaje.</li>
                                    <li>o   Zoznam jej osobných údajov, ktoré sú predmetom spracúvania.</li>
                                    <li>o   Opravu jej nesprávnych, neúplných alebo neaktuálnych osobných údajov, ktoré sú predmetom spracúvania.</li>
                                    <li>o   Likvidáciu jej osobných údajov.</li>
                                </ul>
                            </li>
                            <li>Užívateľ udeľuje predávajúcemu súhlas so spracovaním osobných údajov na dobu neurčitú. Tento súhlas môže kupujúci odvolať kedykoľvek písomnou formou. Súhlas zanikne v lehote 1 mesiaca od doručenia odvolania súhlasu užívateľa prevádzkovateľovi a údaje budú následne vymazané.<br>Užívateľ si môže uplatniť svoje práva vyplývajúce zo zákona č. č. 18/2018 Z. z., o ochrane osobných údajov v znení neskorších predpisov, elektronickou poštou na adrese info@bitcoinacademy.international.<br>Ak sa dotknutá osoba domnieva, že jeho práva na ochranu osobných údajov boli porušené, môže sa obrátiť na Úrad na ochranu osobných údajov Slovenskej republiky, Odborárske námestie č. 3, 817 60 Bratislava 15, Slovenská republika.</li>
                        </ol>
                        <h4 class="text-center">ÚDAJE O VAŠEJ ČINNOSTI</h4>
                        <ol>
                            <li>1.  Údaje o Vašich objednávkach (sú potrebné pre zaistenie dodávok tovaru, vybavovania reklamácií a podobne) sú ukladané v bezpečnej databáze a nie sú poskytované tretím stranám.</li>
                            <li>2.  Na našej stránke nezadávate žiadne informácie, ktoré by sa priamo týkali práce s peniazmi na Vašich účtoch. Všetky v súčasnosti ponúkané formy elektronického bankovníctva (platenia za tovar cez internet) sú realizované priamo na stránkach Vašej banky, ktorá nám poskytne jedine informáciu o úspešnosti či neúspešnosti platby a Vaše meno, prípadne číslo účtu (aby sme vedeli platbu identifikovať a v prípade potreby vrátiť).</li>
                            <li>3.  a) Zneaktívnenie registrácie a výmaz vášho e-mailu z rozosielacej databázy:<br>Súhlas so spracovaním osobných údajov môže objednávateľ odvolať kedykoľvek písomnou (e-mailom, listovou zásielkou) alebo telefonickou formou, na základe čoho prevádzkovateľ jeho osobné údaje vymaže zo svojej databázy.<br>b) Zmena údajov v registrácii:<br>Aktualizáciu osobných údajov môže registrovaný objednávateľ uskutočniť priamo v on-line režime na web stránke internetového obchodu po prihlásení.</li>
                        </ol>
                        <h4 class="text-center">UCHOVÁVANIE A SPRACOVÁVANIE ÚDAJOV</h4> 
                        <ol>
                            <li>Vaše údaje neposkytujeme žiadnym iným subjektom, s výnimkou organizácií, s ktorými je spolupráca nevyhnutná pre správne vybavenie Vašej objednávky. Sú to najmä banky (v niektorých prípadoch poskytnutie Vášho mena) a doručovateľské služby (adresa na dodanie). Tieto údaje sú však vždy poskytnuté jednorazovo pre vybavenie Vašej konkrétnej objednávky. </li>
                        </ol>
                        <h4 class="text-center">ZHRNUTIE</h4> 
                        <ol>
                            <li>Internetová stránka www.bitcoinacademy.international si váži Vašu dôveru a chráni vaše súkromné dáta pred zneužitím. Tieto informácie zhromažďujeme preto, aby sme skvalitnili naše služby. Databázu údajov nepredávame, neprenajímame, ani inak neposkytujeme žiadnej tretej strane (ak nie je pri konkrétnom titule uvedené inak). Prevádzkovateľ môže tretím stranám alebo verejnosti poskytnúť súhrnné štatistické informácie o zákazníkoch, návštevnosti, obrate a ďalšie údaje, avšak na základe nich nie je možné nijakým spôsobom identifikovať jednotlivých zákazníkov.<br>VÁŠ SÚHLAS <br>Používaním Internetovej stránky  www.bitcoinacademy.internationalsúhlasíte so zhromažďovaním a používaním informácií o vás a vašich nákupoch. Pravidlá zaobchádzania s týmito údajmi sú popísané v tomto dokumente. </li>
                        </ol>
                        <h4 class="text-center">ČLÁNOK X.<br>ZÁVEREČNÉ USTANOVENIA</h4>
                        <ol>
                            <li>1.  Užívateľ prehlasuje, že pred vyplnením registrácie sa oboznámil s týmito všeobecnými podmienkami a že s nimi súhlasí.</li>
                            <li>2.  Právne vzťahy a podmienky tu výslovne neupravené ako aj prípadné spory vzniknuté z neplnenia týchto podmienok sa riadia v prípade spotrebiteľa príslušnými ustanoveniami Občianskeho zákonníka a v prípade podnikateľa príslušnými ustanoveniami Obchodného zákonníka a v prípade oboch aj ostatnými všeobecne záväznými právnymi predpismi Slovenskej republiky.</li>
                            <li>3.  Prevádzkovateľ si vyhradzuje právo na zmenu týchto VOP. Povinnosť písomného oznámenia zmeny VOP je splnená umiestnením na internetovej stránke obchodu. Tieto VOP sú platné od 01.03.2019 a plne nahradzujú predchádzajúce VOP. Prevádzkovateľ si vyhradzuje právo zmeniť VOP aj bez predchádzajúceho upozornenia</li>
                        </ol>
                        <p>In Bratislava, 20 July, 2017</p>            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn full" data-dismiss="modal"><?php echo $Lang['ToAccept']; ?></button>
                    </div>
                </div>
            </div>
    </div>

	  <!-- Privacy Modal -->
	  <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel"
	      aria-hidden="true">
	      <div class="modal-dialog modal-lg" role="document">
	          <div class="modal-content" style="margin-top: 7%;color:black;">
	              <div class="modal-header">
	                  <h5 class="modal-title" id="privacyModalLabel"><?php echo $Lang['PrivacyPolicy']; ?></h5>
	                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                      <span aria-hidden="true">&times;</span>
	                  </button>
	              </div>
	              <div class="modal-body">
	                  <h4 class="text-center">Ochrana osobných údajov a Cookies</h4>
	                  <p> Nasledovné informácie sa týkajú spracúvania osobných údajov návštevníkov a/alebo
	                      zákazníkov týchto internetových stránok (ďalej jednotlivo len „Dotknutá osoba“), ktoré
	                      vykonáva vyššie uvedený predávajúci (v tomto článku ďalej len „Prevádzkovateľ“).
	                  </p>
	                  <p> Spracúvanie a ochrana týchto osobných údajov sa spravuje ustanoveniami zákona č. 18/2018</p>
	                  <p> Z. z., o ochrane osobných údajov v znení neskorších predpisov (ďalej len „Zákon“), v spojení
	                      s ustanoveniami Nariadenia Európskeho parlamentu a Rady (EU) č. 2016/679 zo dňa 27.
	                      apríla 2016, všeobecného nariadenia o ochrane údajov (ďalej len „Nariadenie“).
	                  </p>
	                  <h4 class="text-center">Prevádzkovateľ internetového systému</h4>
	                  <p> www.bitcoinacademy.international je spoločnosť BITCOIN Academy a. s., IČO: 50 969 137,
	                      zapísaná v OR OS Bratislava oddiel Sa, vložka č. 6618/B, so sídlom: Grösslingova 4 , 811 09
	                      Bratislava. (ďalej len ako „prevádzkovateľ“).
	                  </p>
	                  <p> Prevádzkovateľ získava osobné údaje prostredníctvom internetovej stránky
	                      www.bitcoinacademy.international.
	                  </p>
	                  <h4 class="text-center">Vymedzenie účelu spracovania osboných údajov:</h4>
	                  <ul>
	                      <li>1. potvrdenie objednávky, platby za užívateľské rozhranie,</li>
	                      <li>2. evidencia užívateľov na účely vedenia ich užívateľských účtov na stránke
	                          www.bitcoinacademy.international,
	                      </li>
	                      <li>3. evidencia užívateľských objednávok pre riešenie prípadných reklamácií,</li>
	                      <li>4. zasielanie e-mailových správ o novinkách a akciách.</li>
	                  </ul>
	                  <h4 class="text-center">Rozsah zhromažďovaných osobných údajov. </h4>
	                  <p> Medzi tieto osobné údaje patria osobné údaje poskytnuté pri participácii na spolupráci so
	                      spoločnosťou, ktorými sú meno a priezvisko, e-mailová adresa, doručovacia adresa, telefónne
	                      číslo.
	                  </p>
	                  <p> Užívateľ poskytuje poskytovateľovi svoje osobné údaje dobrovoľne. Poskytovateľ získava
	                      osobné údaje od svojich užívateľov iba v nevyhnutnom rozsahu, potrebnom na splnenie
	                      záväzku. Bez týchto údajov nie je možné spracovať prijatú objednávku užívateľa.
	                  </p>
	                  <h4 class="text-center">Tretie strany, ktorým budú osobné údaje poskytnuté.</h4>
	                  <p> Osobné údaje neposkytujeme žiadnym spoločnostiam spravujúcim databázy osobných údajov,
	                      ani žiadnym iným tretím stranám.
	                  </p>
	                  <p> Rozsah poskytovaných údajov: Meno a adresa užívateľa, telefónne číslo, celková cena
	                      užívateľského rozhrania.
	                  </p>
	                  <p>Získané osobné údaje v žiadnom prípade nezverejňujeme.</p>
	                  <p> Osobné údaje užívateľov budú sprístupnené iba pracovníkom poskytovateľa, za účelom
	                      vybavenia objednávky. Všetci pracovníci, ktorí prídu do styku s osobnými údajmi boli
	                      poučení o správnom a citlivom zaobchádzaní s nimi.
	                  </p>
	                  <h4 class="text-center">Práva a povinnosti užívateľa (dotknutej osoby)</h4>
	                  <p> Užívateľ je povinný uviesť iba úplné a pravdivé údaje.</p>
	                  <p>Užívateľ sa zaväzuje, že v prípade zmeny svoje údaje zaktualizuje.</p>
	                  <p> Dotknutá osoba má právo na základe písomnej žiadosti (list, elektronická pošta) od
	                      poskytovateľa vyžadovať:
	                  </p>
	                  <h4 class="text-center">Práva a povinnosti užívateľa (dotknutej osoby)</h4>
	                  <ul>
	                      <li>Potvrdenie či sú alebo nie sú osobné údaje o nej spracovávané.</li>
	                      <li>Informácie o stave spracúvania svojich osobných údajov.</li>
	                      <li>Informácie o zdroji, z ktorého získal jej osobné údaje.</li>
	                      <li>Zoznam jej osobných údajov, ktoré sú predmetom spracúvania.</li>
	                      <li>Opravu jej nesprávnych, neúplných alebo neaktuálnych osobných údajov, ktoré sú
	                          predmetom spracúvania.
	                      </li>
	                  </ul>
	                  <h4 class="text-center">Spracúvanie osobných údajov pri prihlásení k newsletteru</h4>
	                  <p> Osobné údaje Dotknutej osoby, ktoré Prevádzkovateľ spracuje za účelom odosielania
	                      informácií o jeho produktoch a službách (newsletter), sú: emailová adresa, meno a priezvisko
	                      dotknutej osoby.
	                  </p>
	                  <p> Právnym základom spracovania týchto údajov je súhlas Dotknutej osoby v zmysle § 13 ods. 1
	                      písm. a) Zákona v spojení s ust. čl. 6 ods. 1 písm. a) Nariadenia, ktorý môže byť kedykoľvek
	                      odvolaný kliknutím na aktívny odkaz umiestnený na konci každého newsletteru alebo na
	                      základe písomnej žiadosti zaslanej na emailovú adresu Prevádzkovateľa.
	                  </p>
	                  <p> Osobné údaje budú spracované po dobu trvania záujmu Dotknutej osoby o zasielanie
	                      newsletteru Prevádzkovateľa.
	                  </p>
	                  <p> Spracovaním osobných údajov Dotknutej osoby môže byť poverený Sprostredkovateľ, ktorý
	                      pre Prevádzkovateľa zaisťuje alebo môže zaisťovať správu newsletterových kampaní.
	                  </p>
	                  <p> Pri spracovaní osobných údajov Dotknutej osoby nebude dochádzať k automatizovanému
	                      rozhodovaniu ani k profilovaniu, pričom Prevádzkovateľ nemá v úmysle poskytnúť osobné
	                      údaje do tretej krajiny, medzinárodnej organizácii ani 3. osobám, s výnimkou
	                      Sprostredkovateľa.
	                  </p>
	                  <p> Dotknutá osoba má predovšetkým právo požadovať od Prevádzkovateľa prístup k svojim
	                      osobným údajom, ich opravu alebo vymazanie, prípadne obmedzenie spracovania, právo
	                      namietať proti spracovaniu, právo na prenosnosť údajov k inému prevádzkovateľovi, pokiaľ
	                      boli osobné údaje spracované automatizovaným spôsobom na žiadosť Dotknutej osoby, ako aj
	                      právo podať sťažnosť k Úradu na ochranu osobných údajov, ak Prevádzkovateľ a/alebo
	                      Sprostredkovateľ postupuje pri spracovaní osobných údajov v rozpore s Nariadením a/alebo
	                      Zákonom.
	                  </p> 
	                  <p>Newsletter nie je určený pre návštevníkov mladších ako 18 rokov.</p>
	                  <h4 class="text-center">Spracúvanie osobných údajov pri využití služby Registrovaný zákazník</h4>
	                  <p> Osobné údaje Dotknutej osoby, ktoré Prevádzkovateľ spracuje za účelom zverejnenia jej
	                      ohodnotenia nákupu alebo Dotknutou osobou zadanej otázky ku konkrétnemu produktu či
	                      službe, sú: meno a priezvisko, miesto bydliska (mesto).
	                  </p>
	                  <p> Právnym základom spracovania týchto údajov je súhlas Dotknutej osoby v zmysle§ 13 ods. 1
	                      písm. a) Zákona v spojení s ust. čl. 6 ods. 1 písm. a) Nariadenia, ktorý môže byť kedykoľvek
	                      odvolaný na základe žiadosti adresovanej Prevádzkovateľovi.
	                  </p>
	                  <p> Osobné údaje budú spracované po dobu trvania záujmu Dotknutej osoby o zverejnenie
	                      hodnotenia jej nákupu a/alebo otázky (ktorá spolu s odpoveďou Prevádzkovateľa slúži aj
	                      ďalším zákazníkom pri získavaní bližších informácií o produktoch a službách) na stránkach
	                      Prevádzkovateľa.
	                  </p>
	                  <p> Pri spracovaní osobných údajov Dotknutej osoby nebude dochádzať k automatizovanému
	                      rozhodovaniu ani k profilovaniu, pričom Prevádzkovateľ nemá v úmysle poskytnúť osobné
	                      údaje do tretej krajiny, medzinárodnej organizácii ani 3. osobám.
	                  </p>
	                  <p> Dotknutá osoba má predovšetkým právo požadovať od Prevádzkovateľa prístup k svojim
	                      osobným údajom, ich opravu alebo vymazanie, prípadne obmedzenie spracovania, právo
	                      namietať proti spracovaniu, právo na prenosnosť údajov k inému prevádzkovateľovi, pokiaľ
	                      boli osobné údaje spracované automatizovaným spôsobom na žiadosť Dotknutej osoby, ako aj
	                      právo podať sťažnosť k Úradu na ochranu osobných údajov, ak Prevádzkovateľ postupuje pri
	                      spracovaní osobných údajov v rozpore s Nariadením a/alebo Zákonom.
	                  </p>
	                  <p> Formulár prehodnotenie nákupu a/alebo zadanie otázky nie je určený pre návštevníkov
	                      mladších ako 18 rokov.
	                  </p>
	                  <h4 class="text-center">Spracúvanie osobných údajov pri prihlásení k newsletteru</h4>
	                  <p> Osobné údaje Dotknutej osoby, ktoré Prevádzkovateľ spracuje za účelom poskytnutia služby
	                      Registrovaný zákazník, sú: Meno a priezvisko, poštová a emailová adresa a telefónne číslo
	                      Dotknutej osoby.
	                  </p>
	                  <p> Právnym základom spracovania týchto údajov je plnenie práv a povinností spojených s
	                      využitím služby Registrovaný zákazník, ktorú by inak nebolo možné poskytovať v plnom
	                      rozsahu.
	                  </p>
	                  <p> Osobné údaje budú spracované po dobu trvania záujmu Dotknutej osoby o využívanie služby
	                      Registrovaný zákazník.
	                  </p>
	                  <p> Spracovaním osobných údajov Dotknutej osoby môže byť poverený Sprostredkovateľ, ktorý
	                      Prevádzkovateľovi poskytuje eshopové riešenia spojené so zaistením riadnej prevádzky
	                      internetového obchodu, teda aj s riadnym fungovaním služby Registrovaný zákazník.
	                  </p>
	                  <p> Pri spracovaní osobných údajov Dotknutej osoby nebude dochádzať k automatizovanému
	                      rozhodovaniu ani k profilovaniu, pričom Prevádzkovateľ nemá v úmysle poskytnúť osobné
	                      údaje do tretej krajiny, medzinárodnej organizácii ani 3. osobám, s výnimkou
	                      Sprostredkovateľa.
	                  </p>
	                  <p> Dotknutá osoba má predovšetkým právo požadovať od Prevádzkovateľa prístup k svojim
	                      osobným údajom, ich opravu alebo vymazanie, prípadne obmedzenie spracovania, právo
	                      namietať proti spracovaniu, právo na prenosnosť údajov k inému prevádzkovateľovi, pokiaľ
	                      boli osobné údaje spracované automatizovaným spôsobom na žiadosť Dotknutej osoby, ako aj
	                      právo podať sťažnosť k Úradu na ochranu osobných údajov, ak Prevádzkovateľ a/alebo
	                      Sprostredkovateľ postupuje pri spracovaní osobných údajov v rozpore s Nariadením a/alebo
	                      Zákonom.
	                  </p>
	                  <p> Služba Registrovaný zákazník nie je určená pre návštevníkov mladších ako 18 rokov.</p>
	                  <h4 class="text-center">Likvidáciu jej osobných údajov.</h4>
	                  <p> Užívateľ udeľuje predávajúcemu súhlas so spracovaním osobných údajov na dobu neurčitú.
	                      Tento súhlas môže kupujúci odvolať kedykoľvek písomnou formou. Súhlas zanikne v lehote 1
	                      mesiaca od doručenia odvolania súhlasu užívateľa prevádzkovateľovi a údaje budú následne
	                      vymazané.
	                  </p>
	                  <p> Užívateľ si môže uplatniť svoje práva vyplývajúce zo zákona č. 18/2018 Z. z., o ochrane
	                      osobných údajov v znení neskorších predpisov elektronickou poštou na adrese
	                      info@bitcoinacademy.international
	                  </p>
	                  <p> Ak sa dotknutá osoba domnieva, že jeho práva na ochranu osobných údajov boli porušené,
	                      môže sa obrátiť na Úrad na ochranu osobných údajov Slovenskej republiky, Odborárske
	                      námestie č. 3, 817 60 Bratislava 15, Slovenská republika.
	                  </p>
	              </div>
	              <div class="modal-footer">
	                  <button type="button" class="btn full" data-dismiss="modal"><?php echo $Lang['ToAccept']; ?></button>
	              </div>
	          </div>
	      </div>
	  </div>

		<script src="assets/js/menu.js"></script>

	  <script >menu()</script>
		<!-- jquery 2.2.4 js-->
		
		<script src="assets/js/jquery-2.2.4.min.js"></script>
		<!-- popper js-->
		<script src="assets/js/popper.js"></script>
		<!-- carousel js-->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- wow js-->
		<script src="assets/js/wow.min.js"></script>
		<!-- bootstrap js-->
		<script src="assets/js/bootstrap.min.js"></script>
		<!--skroller js-->
		<!-- <script src="assets/js/skrollr.min.js"></script> -->
		<!--mobile menu js-->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!--particle s-->
		<script src="assets/js/particles.min.js"></script>
		<!-- main js-->
		<script src="assets/js/main.js"></script>

	</body>
</html>
