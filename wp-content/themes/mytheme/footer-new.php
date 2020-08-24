	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="index.html" class="footer-logo">
				<img src="<?php bloginfo('template_url') ?>/img/bolpatra_200.png" alt="">
			</a>
			<!-- <div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>What we do</h2>
						<ul>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Car loans</a></li>
							<li><a href="#">Debt consolidation loans</a></li>
							<li><a href="#">Home improvement loans</a></li>
							<li><a href="#"> Wedding loans</a></li>
							<li><a href="#">Innovative Finance ISA</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>About us</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Our story</a></li>
							<li><a href="#">Meet the board</a></li>
							<li><a href="#">Meet the leadership team</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Legal</h2>
						<ul>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Loans2go principles</a></li>
							<li><a href="#">Website terms</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Conflicts policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Site Info</h2>
						<ul>
							<li><a href="#">Support</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<p></p> -->

			<div class="row">
				<div class="col-md-4 col-sm-12">
					<a href="<?= site_info(); ?>" class="footer-logo">
						<img src="<?php bloginfo('template_url') ?>/img/bolpatra_200.png" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="copyright mt-4"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
					</div>
				</div>

				<div class="col-md-4 col-sm-12">
					<div class="footer-cont mt-4">
						<a href="#">Contact Us</a>
					</div>
				</div>
				</div>
			</div>
			
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="<?php bloginfo('template_url') ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.slicknav.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery-ui.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/main.js"></script>

	<script src="<?php bloginfo('template_url') ?>/js/wow.min.js"></script>
	
	<script>
  	new WOW().init();
	</script>


<script>
	$(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
        
        // passes on every "a" tag
        $(".top_menu a").each(function() {
            // checks if its the same on the address bar

            // console.log(this.href);
            if (url == (this.href) || url == (this.href) + '/' ) {
            	
                $(this).closest("li").addClass("active");
                $(this).closest("a").addClass("active");
                //for making parent of submenu active
               $(this).closest("li").parent().parent().addClass("active");
            }else{
            	// console.log("class is not active");
            }
        });
    });    


   var fade_out = function() {
  $(".alert-bx").fadeOut().empty();
}

setTimeout(fade_out, 5000); 


// function to callback main url and remove parameters from url after reloads
var url= document.location.href;
window.history.pushState({}, "", url.split("?")[0]);
</script>
	</body>
</html>
