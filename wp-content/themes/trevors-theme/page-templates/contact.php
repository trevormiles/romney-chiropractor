<?php
/*
* Template Name: Contact
*/

get_header(); ?>


<?php 

	// Figure out what day of the week it is and make the according day on the hours chart have the active today class
	
	date_default_timezone_set("America/Denver");
	$today = getdate();
	$todayDayOfWeek = $today["weekday"];

?>



<div class="page-hero-container">
	
	<div class="info-bar info-bar-page">
		<div class="info-bar-container">
			<div class="info-category">
				<h2 class="info-icon"><i class="fas fa-phone-alt"></i></h2>
				<div class="info-content">
					<h6 class="info-title">Call to schedule an appointment</h6>
					<h6 class="info-sub-title">+1 &lpar;435&rpar; 586-9904</h6>
				</div>
			</div>
			
			<div class="info-divider"></div>

			<div class="info-category">
				<h2 class="info-icon"><i class="fas fa-envelope"></i></h2>
				<div class="info-content">
					<h6 class="info-title">Send us an email</h6>
					<h6 class="info-sub-title">dr.jcromney@gmail.com</h6>
				</div>
			</div>
			
			<div class="info-divider"></div>

			<div class="info-category">
				<h2 class="info-icon"><i class="fas fa-map-marker-alt"></i></h2>
				<div class="info-content">
					<h6 class="info-title">Our location</h6>
					<h6 class="info-sub-title">965 S Main Suite A, Cedar City UT, 84720</h6>
				</div>
			</div>
		</div>
	</div>

	<div class="page-hero">

		<div class="container">
			<div class="page-hero-content">
				<h1 class="page-hero-title font-bold">Contact</h1>
				<h5 class="page-hero-sub-title">Call today to schedule an appointment</h5>
			</div>
		</div>

	</div>
	
</div>




<div class="contact-hours">
	<div class="container">
		<div class="contact-hours-container section-container">
			
			<div class="contact-hours-box contact-box">
				
				<div class="contact-info">
					<h5 class="contact-info__title">Our Location</h5>
					<h5 class="contact-info__item">965 S Main, Suite A</h5>
					<h5 class="contact-info__item">Cedar City UT, 84720</h5>
				</div>
				
				<div class="contact-info">
					<h5 class="contact-info__title">Phone Number</h5>
					<h5 class="contact-info__item">+1 (435) 586-9904</h5>
				</div>
				
				<div class="contact-info">
					<h5 class="contact-info__title">Email Address</h5>
					<h5 class="contact-info__item">dr.jcromney@gmail.com</h5>
				</div>
				
			</div>
			
			
			<div class="contact-hours-box hours-box">
				
				<div class="contact__day-container <?php if ($todayDayOfWeek == "Monday") {echo "active-day";} ?>">
					<h5 class="contact__day">Monday</h5>
					<h5 class="contact__time">8:00 - 5:30</h5>
				</div>
				
				<div class="contact__day-container <?php if ($todayDayOfWeek == "Tuesday") {echo "active-day";} ?>">
					<h5 class="contact__day">Tuesday</h5>
					<h5 class="contact__time">8:00 - 5:30</h5>
				</div>
				
				<div class="contact__day-container <?php if ($todayDayOfWeek == "Wednesday") {echo "active-day";} ?>">
					<h5 class="contact__day">Wednesday</h5>
					<h5 class="contact__time">8:00 - 5:30</h5>
				</div>
				
				<div class="contact__day-container <?php if ($todayDayOfWeek == "Thursday") {echo "active-day";} ?>">
					<h5 class="contact__day">Thursday</h5>
					<h5 class="contact__time">8:00 - 12:00</h5>
				</div>
				
				<div class="contact__day-container <?php if ($todayDayOfWeek == "Friday") {echo "active-day";} ?>">
					<h5 class="contact__day">Friday</h5>
					<h5 class="contact__time">8:00 - 5:30</h5>
				</div>
				
				<div class="contact__day-container <?php if ($todayDayOfWeek == "Saturday") {echo "active-day";} ?>">
					<h5 class="contact__day">Saturday</h5>
					<h5 class="contact__time__closed">Closed</h5>
				</div>
				
				<div class="contact__day-container <?php if ($todayDayOfWeek == "Sunday") {echo "active-day";} ?>">
					<h5 class="contact__day">Sunday</h5>
					<h5 class="contact__time__closed">Closed</h5>
				</div>
				
			</div>
			
		</div>
	</div>
</div>





<div class="contact-map">
	<div class="container">
		<div class="contact-map__container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3158.510223686048!2d-113.07221678468566!3d37.66071717978036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80b561c2de71b2d5%3A0x444e9a92b2a4bb66!2s965%20S%20Main%20St%20Suite%20A%2C%20Cedar%20City%2C%20UT%2084720!5e0!3m2!1sen!2sus!4v1579136828401!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div>
</div>




<div class="directions">
	<div class="container">
		
		<div class="directions-content">
			<h1 class="directions-content__title section-title">Directions</h1>
			<p class="directions-content__paragraph">From Main Street in Cedar City, turn onto Fir St, the same street as Retro Fitness. You will see Legacy Flooring Center on your right, this is the same building where Doctor Romney is located. Turn into the parking lot and park on the south side. Go up the stairs or use the elevator and Doctor Romney’s office is the first door on the right, Suite A.</p>
		</div>
		
	</div>
</div>



<?php get_footer(); ?>
