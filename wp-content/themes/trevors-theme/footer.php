<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trevors_Theme
 */

?>




<footer class="footer">
	
	<div class="footer__top">
		
		<div class="footer__top-container">
			<div class="footer-category">
				<h2 class="footer-icon"><i class="fas fa-phone-alt"></i></h2>
				<div class="footer-content">
					<h6 class="footer-title">Call to schedule an appointment</h6>
					<h6 class="footer-sub-title">+1 &lpar;435&rpar; 586-9904</h6>
				</div>
			</div>

			<div class="footer-divider"></div>

			<div class="footer-category">
				<h2 class="footer-icon"><i class="fas fa-envelope"></i></h2>
				<div class="footer-content">
					<h6 class="footer-title">Send us an email</h6>
					<h6 class="footer-sub-title">dr.jcromney@gmail.com</h6>
				</div>
			</div>

			<div class="footer-divider"></div>

			<div class="footer-category">
				<h2 class="footer-icon"><i class="fas fa-map-marker-alt"></i></h2>
				<div class="footer-content">
					<h6 class="footer-title">Our location</h6>
					<h6 class="footer-sub-title">965 S Main Suite A, Cedar City UT, 84720</h6>
				</div>
			</div>
		</div>
		
		<div class="footer__middle">
			
			<div class="footer__middle__section footer__about">
				<h6 class="footer__middle__section__title">About J. Christopher Romney</h6>
				<div class="footer__middle__section__content">
					<p class="footer__middle__section__paragraph">Doctor Romney has been a practicing chiropractor for more than 38 years. He is the only board certified chiropractic orthopedist in Cedar City.</p>
				</div>
			</div>
			
			<div class="footer__middle__section footer__site-nav">
				<h6 class="footer__middle__section__title">Site Navigation</h6>
				<div class="footer__middle__section__content">
					<a href="/" class="footer__middle__section__link">&rsaquo; Home</a>
					<a href="/about" class="footer__middle__section__link">&rsaquo; About</a>
					<a href="/contact" class="footer__middle__section__link">&rsaquo; Contact</a>
				</div>
			</div>
			
			<div class="footer__middle__section footer__hours">
				<h6 class="footer__middle__section__title">Hours</h6>
				<div class="footer__middle__section__content">
					
					<div class="footer__middle__section__day-row">
						<h6 class="footer__middle__section__day">Monday - Wednesday</h6>
						<h6 class="footer__middle__section__time">8:00-5:30</h6>
					</div>

					<div class="footer__middle__section__day-row">
						<h6 class="footer__middle__section__day">Thursday</h6>
						<h6 class="footer__middle__section__time">8:00-12:00</h6>
					</div>

					<div class="footer__middle__section__day-row">
						<h6 class="footer__middle__section__day">Friday</h6>
						<h6 class="footer__middle__section__time">8:00-5:30</h6>
					</div>

					<div class="footer__middle__section__day-row">
						<h6 class="footer__middle__section__day">Saturday</h6>
						<h6 class="footer__middle__section__time">Closed</h6>
					</div>

					<div class="footer__middle__section__day-row">
						<h6 class="footer__middle__section__day">Sunday</h6>
						<h6 class="footer__middle__section__time">Closed</h6>
					</div>
					
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="footer__bottom">
		<div class="footer__bottom-container">
			<h6 class="footer__copyright">Copyright 2019 J. Christopher Romney</h6>
			<div class="footer__divider"></div>
			<h6 class="footer__site-design">Site by <a href="https://www.trevmiles.com" target="_blank" class="font-bold footer__site-design__link">Trevor Miles</a></h6>
		</div>
	</div>
	
</footer>





<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>

</body>
</html>
