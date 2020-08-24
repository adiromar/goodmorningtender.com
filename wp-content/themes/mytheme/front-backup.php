	<?php
if (isset($_GET['register'])){
          $register = $_GET['register'];  
         
          if($register == 'true') { 
?>
<section class="hero-section-1 main-pg-section">
	<div class="container card mt-5">
		<div class="row p-3">
			<h4>User Registration</h4>
			<div class="col-md-12 col-sm-12 mt-4">
				<div class="alert alert-success">Please Check your email and set the password!</div>
			</div>
			
		</div>
	</div>
</section>
<?php get_footer('other'); ?>

<?php }else{ ?>
	<section class="hero-section-1 main-pg-section">
	<div class="container card mt-5">
		<div class="row p-3">

			<h4>User Registration</h4>
			<div class="col-md-12 col-sm-12 mt-4">
				<div class="alert alert-warning">Please provide a unique username or email address!</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer('other'); ?>

<?php } }
elseif(isset($_GET['reset'])){
	$reset = $_GET['reset'];  
         
          if($reset == 'true') { ?>
          	<section class="hero-section-1 main-pg-section">
				<div class="container card mt-5">
					<div class="row p-3">

						<h4>Password Reset Request</h4>
						<div class="col-md-12 col-sm-12 mt-4">
							<div class="alert alert-warning">Please Check your email to set New Password!</div>
						</div>
					</div>
				</div>
</section>

          <?php }
          get_footer('other');

}else{ ?>

<style type="text/css">
	.short_desc{
		border-left: 1px dashed lightgrey !important;
		text-align: justify !important;
	}	
	.short_desc p{
		color: #808184 !important;
    	font-weight: 600 !important;
	}
	.nav-link{
		color: #fff;
    	background: #7d8c9f;
    	border-bottom: 1px solid #fff;
	}
	.nav-link:hover{
		color: #fff;
	}
	.p_list span{
		color: black;
		font-weight: 600;
		font-size: 12px;
	}
</style>

	<section class="hero-section-2 bg-image-section full-banner visible-lg" >
		<div class="container">
		<div class="row pt-4">
			<aside class="col-md-3 sidebar">
				<div class="block block-account">
					<div class="block-title">
						Our Services
					</div>
					<div class="block-content primemenu">
					<div class="nano has-scrollbar">
						<div class="overthrow nano-content description">
							<ul>
						<?php
						$categories = get_categories();
						foreach ($categories as $category) {
							$first = substr($category->name, 0, 1);
							
						?>
						<li class="aside"><a href="<?= get_category_link($category->term_id) ?>"><span class="first_letter"><?= $first; ?></span><?= $category->name; ?></a></li>

						<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				</div>
				
			</aside>
			<div class="col-md-9 p-4 mt-3" style="background-image: url('<?php bloginfo('template_url') ?>/img/hero-slider/1.jpg');height: 358px;">
		<div class="containers">
				<h4 class="mt-4" style="color: #fff;text-align: center;">नेपालको <span class='numscroller' data-min='1' data-max='52' data-delay='5' data-increment='10'>52</span> पत्रिका मा प्रकाशित टेण्डर हेर्न <a href="#" data-toggle="modal" data-target="#register_Modal" data-dismiss="modal">subscribe</a> गर्नु होला ।</h4>

				<div class="row mt-5 main-sr-boxx" style="padding: 0px 50px;">
					<div class="col-md-12">
						
						

						<ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-left: -15px;">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#newspapers" role="tab" aria-controls="home" aria-selected="true">NEWSPAPERS</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="home-tab2" data-toggle="tab" href="#industries" role="tab" aria-controls="home" aria-selected="false">INDUSTRIES </a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="home-tab2" data-toggle="tab" href="#products" role="tab" aria-controls="home" aria-selected="false">Products </a>
						  </li>
						</ul>
					</div>
					<div class="tabcontents" id="myTabContent">
						<div id="search-box">
							<form action="<?= home_url(); ?>/search" method="get">
							<input type="text" name="s" class="col-md-8" placeholder="Enter Keyword For Ex. Tender Name ">
							<button onclick="submitSearchForm('1');"><i class="fa fa-search"></i> <span class="searchbtn">Search</span></button>
						</form>
						</div>
					</div>
					
					<div class="col-md-12">
						<a href="<?= site_url() ?>/filter" class="float-right adv_search pt-2">Advance Search</a>
					</div>
				</div>

		</div>
	</div>
</div>
</div>
		<!-- <div class="hero-sliders owl-carouselss">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
		</div> -->
	</section>
	<!-- Hero Section end -->

<!-- slider Section #3895bc #19caaf -->
	<section class="why-section pt-4" style="background-color: #3895bc;">
	<!-- <a href="<?= site_url()?>/allnewspapers" class="btn btn-light float-right" style="margin: 80px 29px 0 0;"><i class="fa fa-eye"></i> View All</a> -->
	<div class="container">
		
		<div class="slider owl-carousel row">
	    <?php
		// $categories = get_categories();
		// foreach ($categories as $category) {
		$terms = get_terms(
	    array(
	        'taxonomy'   => 'newspapers',
	        'hide_empty' => false,
	        'parent' => 0
	    	)
		);

	// Check if any term exists
	if ( ! empty( $terms ) && is_array( $terms ) ) {
	    // Run a loop and print them all
    foreach ( $terms as $parent ) { 

	$terms1 = get_terms(
	array(
		'taxonomy'   => 'newspapers',
		'hide_empty' => false,
		'parent' => $parent->term_id 
		)
	);

foreach ($terms1 as $category) {
		?>
		<div class="slide col-md-2ss col-sm-12ss">
			
			<div class="card card-body">
				<?php if ( z_taxonomy_image_url($category->term_id) ){ ?>
			<a href="<?php echo esc_url( get_term_link( $category ) ) ?>"><img src="<?= z_taxonomy_image_url($category->term_id); ?>" class="img-responsive" width="150" height="120" style="padding: 15px;"></a>
				<?php }else{ ?>
			<a href="<?php echo esc_url( get_term_link( $category ) ) ?>"><img src="<?= get_template_directory_uri() ?>/img/loans/3.jpg" class="img-responsive" width="150" height="120" style="padding: 15px;object-fit: cover;"></a>
				<?php } ?>
			</div>
			<div class="card card-footer" style="background-color: #fff;text-align: center;">
				<h6><a href="<?= get_category_link($category->term_id) ?>" style="color: #000;"><?= $category->name ?></a></h6>
			</div>
		</div>
		<?php } } } ?>

		</div>
		
	</div>
	</section>
<!-- slider section ends -->

	<!-- CTA Section end -->
<section class="cta-section set-bg" data-setbg="<?php bloginfo('template_url') ?>/img/cta-bg.jpg">
		<div class="container">
			<h2>Latest <strong>Tenders</strong> Online </h2>
			
			<div class="row">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link" id="home-tab1" data-toggle="tab" href="#list_view" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-list"></i> </a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#card_view" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-th-large"></i> </a>
				  </li>
			</ul>
			</div>

			<div class="row card tab-content" id="myTabContent">
				<div class="tab-pane fade " id="list_view" role="tabpanel" aria-labelledby="home-tab1">
					<div class="row p-3">
					<?php
					get_template_part( 'template-parts/content', 'home-list' );
					?>
					</div>
				</div>

				<div class="tab-pane fade show active" id="card_view" role="tabpanel" aria-labelledby="home-tab1">
					<div class="row p-3">
					<?php
					get_template_part( 'template-parts/content', 'home-card' );
					?>
					</div>
				</div>
			</div>
	
			<div class="text-center pt-3">
				<a href="<?= home_url()?>/listall" class="site-btn sb-big">More Tenders</a>
			</div>


		</div>
	</section>
	<!-- CTA Section end -->

	

	<!-- Newspaper Section  -->
<!-- 	<section class="why-section pb-4">
	<div class="container">
		<div class="text-center mb-4 pb-2 pt-3">
			<h2>Newspapers</h2>
		</div>
		<div class="row">

<?php
// Get the taxonomy's terms
$terms = get_terms(
    array(
        'taxonomy'   => 'newspapers',
        'hide_empty' => false,
        'parent' => 0
        // 'order'         => 'desc',
    )
);

// Check if any term exists
if ( ! empty( $terms ) && is_array( $terms ) ) {
    // Run a loop and print them all
    foreach ( $terms as $parent ) { 

$terms1 = get_terms(
	array(
	'taxonomy'   => 'newspapers',
	'hide_empty' => false,
	'parent' => $parent->term_id 
	)
);

    foreach ( $terms1 as $term ) { 
    	// $cat_image = get_field('category_image', $term);
?>
			<div class="col-md-2">
				<div class="icon-box-item">
					<div class="row">
					<div class="ib-icon">
						<i class="flaticon-012-24-hours"></i>
						<?php 
						if ( z_taxonomy_image_url($term->term_id) ){
						?>
						<a href="<?php echo esc_url( get_term_link( $term ) ) ?>"><img src="<?= z_taxonomy_image_url($term->term_id); ?>" width="180" height="120" class="thumb-pad"></a>
					<?php }else{ ?>
						<i class="flaticon-012-24-hours"></i>
					<?php } ?>
					</div>
					<div class="ib-text">
						<h5><a href="<?php echo esc_url( get_term_link( $term ) ) ?>"><?= $term->name; ?></a></h5>
					</div>
					</div>
				</div>
			</div>

<?php    }
 		}
}
?>

			
		
		</div>

		<div class="text-center pt-3">
			<a href="<?= home_url()?>/allnewspapers" class="site-btn sb-big">View More</a>
		</div>
	</div>
</section> -->
	<!-- Newspaper Section end -->



	<!-- Cluster Section -->
	<section class="why-section mt-4 mb-4" style="background-image: url(<?php bloginfo('template_url') ?>/img/cta-bg.jpg);">
		<div class="container news-sec">
			<div class="text-center mb-5 pb-4 mt-3 pt-4">
				<h2><strong>Newspaper By Cluster</strong></h2>
			</div>
			<div class="row mb-5">
				<div class="col-md-3 col-sm-12 news-cluster">
					<a href="<?= site_url()?>/allnewspapers/#paper_1">
					<div class="job-cat-inner news-card">
					<i class="fa fa-paper-plane"></i>
					<h3>Central</h3>
					<p>All tenders from list of National Daily Newspapers of the country.</p>
					</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-12 news-cluster">
					<a href="<?= site_url()?>/allnewspapers/#paper_2">
					<div class="job-cat-inner news-card">
					<i class="fa fa-star"></i>
					<h3>Pradesh</h3>
					<p>All tenders from list of Pradesh Level Daily Newspapers of the country.</p>
					</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-12 news-cluster">
					<a href="<?= site_url()?>/allnewspapers/#paper_3">
					<div class="job-cat-inner news-card">
					<i class="fa fa-paper-plane"></i>
					<h3>Local</h3>
					<p>All tenders from list of Local Level Daily Newspapers of the country.</p>
					</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-12 news-cluster">
					<a href="<?= site_url()?>/allnewspapers/#paper_3">
					<div class="job-cat-inner news-card">
					<i class="fa fa-paper-plane"></i>
					<h3>From Sites</h3>
					<p>All tenders lists solicited from our site which are updated Daily.</p>
					</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Cluster Section end -->

	


	<!-- catggory Section
	<section class="why-section pt-3 pb-5">
		<div class="container">
			<div class="text-center text-white ">
				<h2 style="color: black;">Categories</h2>
			</div>
			<div class="row">
				<?php
		$categories = get_categories();
	
		foreach ($categories as $category) {
			
				?>
				<div class="col-md-4">
					<ul class="help-list">
						<li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
						
					</ul>
				</div>
	
		<?php } ?>
	
			</div>
		</div>
	</section> -->
	<!-- Help Section end -->



<?php } // end of register ?>

<script src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.js"></script>

<script type="text/javascript">
	$( document ).ready(function() {
	var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav: true,
    responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
});
</script>