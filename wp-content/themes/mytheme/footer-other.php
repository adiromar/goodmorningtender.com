	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			

			<div class="row">
				<div class="col-md-4 col-sm-12">
					<a href="#" class="footer-logo">
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
ff = url.split("?")[1];
gg = ff.split("=")[0];

if(gg == 's'){
	// do nothing
}else{
	window.history.pushState({}, "", url.split("?")[0]);
}
</script>
	</body>
</html>
