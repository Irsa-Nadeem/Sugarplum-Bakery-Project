<?php include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health medical template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/Dropdown.css">
        <link rel="stylesheet" type="text/css" href="styles/about.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">

        







	<!-- Bootstrap CSS  for carousel-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- For Travel Forum -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		
		/* for review */
		.container-fluid {
			padding: 60px 50px;
		}

		/* review part 2 */
		.carousel-control.right,
		.carousel-control.left {
			background-image: none;
			color: silver;
		}

		.carousel-indicators li {
			border-color: black;
		}

		.carousel-indicators li.active {
			background-color: black;
		}

		.item h4 {
			font-size: 17px;
			line-height: 1.375em;
			font-weight: 400;
			font-style: normal;
			margin: 70px 280px 70px 280px;
			color: rgb(0, 0, 0);
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
		}

		.item span {
			font-style: italic;
		}

		/* for image */
		.person {
			border: 10px solid transparent;
			margin-bottom: 15px;
			height: 10%;
			width: 10%;

		}

		.person:hover {
			border-color: #f1f1f1;
		}

		.image_center {
			text-align: center;
		}
	</style>
</head>

<body style="font-family: 'Montserrat', sans-serif !important;">

	<div class="super_container">

		<!-- Menu -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<form action="#" class="menu_search_form">
					<input type="text" class="menu_search_input" placeholder="Search" required="required">
					<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				<ul>
					                                                                        <li><a href="index.php">Home</a></li>
														<li class="active"><a href="AboutUs.php">About Us</a></li>
														<li><a href="contactus.php">Contact Us</a></li>
														<li><a href="Reviews.php">Reviews</a></li>
                                                                                                                <li><a href="menu.php">Menu</a></li>

                                                                                                                <?php

$select=mysqli_query($conn, "select * from `cart`");
$row_count=mysqli_num_rows($select);


?>

                                                                                                                <li><a href="cart.php">Cart<sup style="color:white;">&nbsp;&nbsp;&nbsp;<?php echo $row_count?></sup></a></li>
                                                                                                                 
                                                                                                                 <li><a href="checkout.php">Checkout</a></li>
                                                                                                                 
                                                                                                                 <li><a href="logout.php">Log out</a></li>

			        </ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
                    <div class="cta">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="aboutpic/pic1.webp"
				data-speed="0.8"></div>
		    </div>



			<!-- Header -->

			<header class="header" id="header">


				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div
										class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div class="logo">
											<a href="index.php"><img src="HomePagePic/icon1.webp"
													style="width: 60px; height: 60px; margin-bottom: 10px; " alt="">
												The SugarPlum Bakery</a>
										</div>
										<div
											class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
											
											<div class="header_top_phone">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<span>+92 321 1256778</span>
											</div>
										</div>
										<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header_nav" id="header_nav_pin">
						<div class="header_nav_inner">
							<div class="header_nav_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div
												class="header_nav_content d-flex flex-row align-items-center justify-content-start">
												<nav class="main_nav">
													<ul
														class="d-flex flex-row align-items-center justify-content-start">
														<li><a href="index.php">Home</a></li>
														<li class="active"><a href="AboutUs.php">About Us</a></li>
														<li><a href="contactus.php">Contact Us</a></li>
														<li><a href="Reviews.php">Reviews</a></li>
                                                                                                                <li><a href="menu.php">Menu</a></li>

                                                                                                                <?php

$select=mysqli_query($conn, "select * from `cart`");
$row_count=mysqli_num_rows($select);


?>

                                                                                                                <li><a href="cart.php">Cart<sup style="color:white;">&nbsp;&nbsp;&nbsp;<?php echo $row_count?></sup></a></li>
                                                                                                                 
                                                                                                                 <li><a href="checkout.php">Checkout</a></li>
                                                                                                                 
                                                                                                                 <li><a href="logout.php">Log out</a></li>





																												

													</ul>
												</nav>


											</div>


										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

       
			</header>


           

	<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	
<!-- About US -->

		<div class="about">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">A few words about us</div>
					</div>
				</div><br>
				<div class="row about_row row-eq-height">
					<div class="col-lg-4">
						<div class="logo">
							<a href="#">The Sugarplum Bakery</a><br><br>
						</div>
						<div class="about_text" style="text-align: justify;">From its humble beginnings as a dream nurtured in a home kitchen, Sugerplum Bakeshop has blossomed into a beloved purveyor of delectable treats.  The story began with a simple passion for baking, a desire to create confections that not only tantalized the taste buds but also warmed the heart.  The founder, driven by an unwavering belief in the power of a perfectly baked good, began experimenting with recipes, tweaking and refining until each creation was a symphony of flavors and textures.  Word of mouth spread quickly, whispers of melt-in-your-mouth cookies, exquisitely decorated cakes, and pastries that were simply divine.  Local gatherings and community events became showcases for Sugerplum's artistry, each offering a testament to the bakeshop's commitment to quality ingredients and meticulous craftsmanship. As demand grew, so did the operation, moving from the cozy confines of home to a small but charming storefront. The aroma of freshly baked goods wafted through the neighborhood, drawing in customers with its irresistible allure. Sugerplum Bakeshop became more than just a place to buy sweets; it became a destination, a</div>
						</div>
					<div class="col-lg-4">
						<div class="about_text" style="text-align: justify;"><br><br>place where memories were made and celebrations were sweetened. Each cake told a story, each cookie carried a message, and each pastry was a tiny work of art. The bakeshop's dedication to personalized service and attention to detail solidified its reputation as a cornerstone of the community.Through the years, Sugerplum Bakeshop has remained true to its core values: using only the finest ingredients, crafting each item with love and care, and always striving to exceed customer expectations.  From birthdays to weddings, holidays to everyday indulgences, Sugerplum Bakeshop has been there, adding a touch of sweetness to life's most precious moments.  The journey has been one of passion, perseverance, and a deep appreciation for the simple joy of sharing a delicious treat. Today, Sugerplum Bakeshop stands as a testament to the power of dreams, a place where every bite is a reminder of the love and dedication that goes into each and every creation.  The sweet smell of success continues to permeate the air, a testament to the enduring magic of Sugerplum Bakeshop.
							
						</div>
					</div>

					<div class="col-lg-4">

						<div class="about_image"><img src="aboutpic/clip.avif" alt="" style="width: 360px; height: 480px;">
						</div>
					</div>
				</div><br><br>
				<div class="row">
					<div class="col">
						<div class="button about_button ml-auto mr-auto"><a href="contactus.php"><span>Contact
									Us</span><span>Contact Us</span></a></div>
					</div>
				</div>
			</div>
		</div> 
<!-- Milestones -->

		<div class="milestones" style="margin-top:-50px;">
			<div class="container">

				<div class="row">

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
								<img src="HomePagePic/calendar.png" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="365">0</div>
								<div class="milestone_text">Days a year</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
								<img src="HomePagePic/dine.png" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="25000">0</div>
								<div class="milestone_text">Dine-in</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
								<img src="HomePagePic/delivery.png" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="7000">0</div>
								<div class="milestone_text">Deliveries</div>
							</div>

						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
								<img src="HomePagePic/take.png" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="1200">0</div>
								<div class="milestone_text">Take-Away</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>



<!-- CTA -->

		<div class="cta">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="aboutpic/pic2.avif"
				data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div
							class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
							<div class="cta_content text-xl-left text-center">
								<div class="cta_title">Sweeten your moments, order today!</div>
								<div class="cta_subtitle" style="color: white; font-size: larger; font-style: italic;">
									Indulge. Enjoy. Savor.</div>
							</div>
							<div class="button cta_button ml-xl-auto"><a href="menu.php"><span>Order
										Now</span><span>Order Now</span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>


	
<br>


<!-- Services -->

	<div class="services" style="background-color: #fcfbfa;">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Our Services</div>
					<div class="section_subtitle">to choose from</div>
				</div>
			</div>
			<div class="row icon_boxes_row">

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="HomePagePic/dine.png" alt=""></div>
							<div class="icon_box_title">Dine-in</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;">Dine in with us! We're open 12:00 PM to 12:00 AM daily. Enjoy a delicious meal in our restaurant!						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="HomePagePic/take.png" alt=""></div>
							<div class="icon_box_title">Take away</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;">Craving our delicious food?  Takeaway available!  Order now for pickup between 12:00 PM and 12:00 AM.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="HomePagePic/delivery.png" alt=""></div>
							<div class="icon_box_title">Delivery</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;"> Enjoy delicious food delivered right to your door!  We offer delivery from 2:00 PM to 11:00 PM daily.</div>
					</div>
				</div>

				
				
				
			       </div>
			<div class="row">
				<div class="col">
					<div class="button services_button ml-auto mr-auto"><a href="AboutUS.php"><span>read more</span><span>read
								more</span></a></div>
				</div>
			</div>
		</div>
	</div>





	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="HomePagePic/end.jpg"
			data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
							</div>
							<div class="footer_about_text" style="text-align: justify; text-justify:inter-cluster;">
								</div>
							<div class="footer_social">
							</div>

							</div>
					</div>


					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
						</div>
					</div>
                                     <!-- Footer Content -->
					<div class="col-lg-8 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">"Let's Make Some Memories!"</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div style="text-align: justify; text-justify:inter-word;">Looking for the perfect place to celebrate a birthday? Our bakeshop offers a delightful setting for your special day! We can arrange a variety of birthday celebrations, from intimate gatherings to larger parties.  Choose from our delicious menu of cakes, cupcakes, and other treats, and let us handle the decorations. We can customize your cake with a special message and create a festive atmosphere with balloons and other decorations.  Our friendly staff will ensure your guests have a memorable experience, and we can even arrange special activities like cake decorating for an extra touch of fun. Contact us today to discuss your birthday needs and let us create a sweet celebration for you!

                                                                         </div>
								</li>
							</ul>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">12:00 – 12:00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">12:00 – 9:00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">12:00 – 12:00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">12:00 – 1:00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div
							class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul
									class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li class="active"><a href="AboutUS.php">About Us</a></li>
									<li><a href="contactus.php">Contact Us</a></li>
                                                                        <li><a href="Reviews.php">Reviews</a></li>

								</ul>
							</nav>
							
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+92 321 1256778</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/about.js"></script>

</body>

</html>