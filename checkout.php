<?php include 'connect.php';
error_reporting(E_ALL & ~E_WARNING);
if(isset($_POST['placebtn']))
{
    $user_name=$_POST['uname'];
    $user_email=$_POST['uemail'];
    $user_contact=$_POST['unum'];
    $user_city=$_POST['city'];
    $user_address=$_POST['address'];

    $cart_query=mysqli_query($conn,"select* from `cart` ");
    if(mysqli_num_rows($cart_query)>0)
    {
      while($row=mysqli_fetch_assoc($cart_query))
      {
        $product_name[]=$row['name'].'('.$row['quantity'].')';
        $grand_total=$grand_total+($row['price']*$row['quantity']);
      }

    }
    
 $total_product=implode(',',$product_name);

 $insert_query=mysqli_query($conn,"insert into `orders` (name,email,contact,city,address,item,total) values ('$user_name','$user_email','$user_contact', '$user_city', '$user_address','$total_product','$grand_total')");



  if($insert_query){
     $delete_query=mysqli_query($conn,"DELETE from `cart`");

     $display_msg="Order Placed Sucessfully";
      header('location:placed.php');
}
else
{
  $display_msg="Unable to Place Order";
  header('location:checkout.php');

}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Checkout</title>
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
        <link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

        







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
														<li><a href="AboutUs.php">About Us</a></li>
														<li><a href="contactus.php">Contact Us</a></li>
														<li><a href="Reviews.php">Reviews</a></li>
                                                                                                                <li><a href="menu.php">Menu</a></li>

                                                                                                                <?php

$select=mysqli_query($conn, "select * from `cart`");
$row_count=mysqli_num_rows($select);


?>

                                                                                                                <li><a href="cart.php">Cart<sup style="color:white;">&nbsp;&nbsp;&nbsp;<?php echo $row_count?></sup></a></li>
                                                                                                                 
                                                                                                                 <li class="active"><a href="checkout.php">Checkout</a></li>
                                                                                                                 
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
											<a href="Home.html"><img src="HomePagePic/icon1.webp"
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
														<li><a href="AboutUs.php">About Us</a></li>
														<li><a href="contactus.php">Contact Us</a></li>
														<li><a href="Reviews.php">Reviews</a></li>
                                                                                                                <li><a href="menu.php">Menu</a></li>

                                                                                                                <?php

$select=mysqli_query($conn, "select * from `cart`");
$row_count=mysqli_num_rows($select);


?>

                                                                                                                <li><a href="cart.php">Cart<sup style="color:white;">&nbsp;&nbsp;&nbsp;<?php echo $row_count?></sup></a></li>
                                                                                                                 
                                                                                                                 <li class="active"><a href="checkout.php">Checkout</a></li>
                                                                                                                 
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
	</div><br><br><br><br><br><br>


<!-- Ordered Items -->

			<div class="contact">
				<div class="container">
					<div class="row">


						<!-- Customize Trip -->
						<div class="col-lg-4 contact_col">
							<div class="info_form_container" style="width: 240%; margin-left: 150px;">
								<div class="info_form_title" style="text-align: center;">Order Information</div><br><br>
                                                                <br>
                                                           <?php 
                                                            $display_product=mysqli_query($conn,"select* from `cart`");
                                                            if(mysqli_num_rows($display_product)>0)
                                                            {
                                                              while($row=mysqli_fetch_assoc($display_product))
                                                             {
                                                                 ?>

                                                                <div style="width: 50%;" class="centerdiv">
                                                                    <p class="one"><b>Item: <?php echo $row['name']?> (<?php echo $row['quantity']?>) -> Total Price: <?php echo ($row['price']*$row['quantity'])?>/- </b></p>
                                                                   
                                                                    
                                                                </div>
                                                                <br>
                                                                                                                               
<?php

$grand_total=$grand_total+($row['price']*$row['quantity']);


?>

                                                                
                                                             <?php
                                                              }

                                                            }
                                                            else
                                                            {
                                                               echo " ";

                                                            }

                                                      ?>

<br>
<div style="width: 100%;" class="centerdiv">
<p class="one" style="text-align:center; margin-left:-20px;"><b>Grand Total: <?php echo $grand_total?>/-</b></p>
</div>


                                                        </div>

			                         </div>


			                 </div>

                                </div>

		        </div>


			<br><br><br>





<!-- Add item Form -->

		<div class="contact" style="text-align: center; ">
			<div class="container">
				<div class="row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<!-- Contact form -->
					<div class="col-lg-8 contact_col">
						<div class="contact_form" style="width: 100%; ">
							<div class="contact_title" style="font-size: 30px;">"Help us spread the sweetness!.
							</div> <br>
							<div class="contact_subject" style="font-size: 16px;">Add details to confirm order!	

							</div>
							<div class="contact_form_container" style="width: 50%; margin-left:190px">
								<form action="" method="post" id="contact_form" class="contact_form" enctype="multipart/form-data">

                                                                             <input type="text" id="uname" name="uname" class="contact_input" placeholder="Enter Your Name"
										 required="required">

                                                                             <input type="email" id="uemail" name="uemail" class="contact_input"
										placeholder="Enter Email Address"  required="required">

                                                                             <input type="number" id="unum" name="unum" class="contact_input"
										placeholder="Enter Contact Number"  required="required">

									     <input type="text" id="city" name="city" class="contact_input"
										placeholder="Enter City"  required="required">

                                                                             <input type="text" id="address" name="address" class="contact_input"
										placeholder="Enter Address"  required="required">

									<br>
									<button class="contact_button" id="contact_button" name="placebtn" style="outline:none">Place Order</button>
									<br><br><br>
								</form>
                                                            <?php
                                                             if(isset($display_msg))
                                                                  {
                                                                  echo "<div class='contact_title' style='font-size: 20px;'>
                                                                  <span>'$display_msg'</span>
                                                                  <i onclick='this.parentElement.style.display='none'';></i></div>";
                                                        
                                                                   }
                                                          ?>
                                                          

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- Add item Form End -->
  

<br><br><br><br><br><br><br><br><br>    


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
									<li><a href="AboutUS.php">About Us</a></li>
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
        <script src="js/custom.js"></script>

</body>

</html>