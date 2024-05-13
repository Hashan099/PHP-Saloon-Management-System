<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Salon Liya Soba</title>
	<link rel="shortcut icon" href="img/salon_logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Venobox CSS -->
	<link href="css/venobox.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<!--Chosen-->
	<link href="css/chosen.css" rel="stylesheet">
	<!--Time picker-->
	<link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
	<!--Date picker-->
	<link href="css/datepicker.css" rel="stylesheet">
	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
	<!-- Main CSS -->
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	<!--Preload-->
	 <?php include_once('includes/header.php');?>
	<!-- end banner -->
	
	<section class="section-spacing" style="background-color: #D2AACF;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Our Services</span></h2>
						<p>Our services is fully personalized and well balanced for all age of customers or adults.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/haircut.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Hair Care</a></h3>
							<p>At Salon Liya Soba, we understand that your hair is your crowning glory.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/bridal-makeup.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Bridal Makeup</a></h3>
							<p>At Salon Liya Soba,Makes your face look sophisticated, chic, and beautiful. Bridal make-up is also a specialty of the salon.</p>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/pedicure.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Nail Care</a></h3>
							<p>At Salon Liya Soba,We believe that beautiful nails are the perfect accessory to any look.</p>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/1.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Skin Care</a></h3>
							<p>At Salon Liya Soba, we belive that healthy, glowing skin is the foundation of beauty.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/4.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Normal Dressing</a></h3>
							<p> At Liya Soba Salon, we belived that every day style should be effortless, comfortable and chic.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/body-massage.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Face Massage</a></h3>
							<p>At Salon Liya Soba, we belived that relaxation and rejuvenation are essential for radiant skin.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="contact-us.php" class="btn btn-primary">Contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end services -->
	
	
	 <section class="ftco-section ftco-pricing" style="background-color: #D2AACF;">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big">Pricing</h1>
            <h2 class="mb-4">Our Service Prices</h2>
            <p>Salon Liya Soba will change the way you think about a parlor. Full service comfort, friendly staff and a relaxing atmosphere will give you an experience that will leave you glowing both inside and out!!!</p>
          </div>
        </div>
          <table class="table table-bordered">
             <thead> 
              <tr> 
                <th>#</th>
                <th>Service Name</th> 
                <th>Service Price</th>
                <th>Description</th> 
              </tr> 
            </thead> 
            <tbody>
            <?php
              $ret=mysqli_query($con,"select *from  tblservices");
              $cnt=1;
              while ($row=mysqli_fetch_array($ret)) {
            ?>

            <tr>
              <th scope="row"><?php echo $cnt;?></th>
               <td><?php  echo $row['ServiceName'];?></td> 
			   <td>Rs <?php echo number_format($row['Cost'], 2); ?></td>
               <td><?php  echo $row['description'];?></td>
            </tr>   
            <?php $cnt=$cnt+1; }?>
            </tbody> 
          </table> 
			 </div>
		</section>
		
<!--		service table end-->
	
	<?php include_once('includes/footer.php');?>
	<!-- end footer -->
	
	<!-- Bact to top -->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	
	<!-- Appointment Modal -->
    <div class="modal fade modal-vcenter" id="appointment" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>REQUEST AN APPOINTMENT</h2>
                </div>
                <div class="modal-body">
					<form id="reservation-form" method="post" data-toggle="validator">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>First Name*</label>
									<input type="text" id="rfname" class="form-control" name="fname" required data-error="Please enter your first name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="rlname" class="form-control" name="lname" >
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Email*</label>
									<input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Phone*</label>
									<input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
						</div>
						
						<div class="form-group">
							<label>Address</label>
							<input type="text" id="raddress" class="form-control" name="address">
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Zip Code</label>
									<input type="text" id="rzipcode" class="form-control" name="zipcode">
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-8">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="rcity" class="form-control" name="city">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label>Service</label>
							<select id="rselect-service" class="select-option" name="service">
								<option value="Hair Cut">Hair Cut</option>
								<option value="Makeup">Makeup</option>
								<option value="Facial">Facial</option>
								<option value="Manicure">Manicure</option>
								<option value="Pedicure">Pedicure</option>
								<option value="Body Massage">Body Massage</option>
							</select>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Reservation Date*</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
									</div><!-- /.input group -->
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Time picker*</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input type="text" id="rtime" name="time" class="form-control timepicker" required data-error="Please select reservation time">
										</div><!-- /.input group -->
										<div class="help-block with-errors"></div>
									</div><!-- /.form group -->
								</div>
							</div>
						</div>
						
						<div class="submit-block text-right">
							<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
							<input value="Submit" name="submit" class="btn btn-primary" type="submit">
						</div>
						
						<div id="msgSubmitRes" class="h3 text-center hidden"></div>
						
					</form>
                </div>
            </div>
        </div>
    </div>
	
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/SmoothScroll.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="mail/js/form-validator.min.js"></script>
	<script src="mail/js/contact-form-script.js"></script>
    <script src="js/script.js"></script>
	
</body>
</html>
