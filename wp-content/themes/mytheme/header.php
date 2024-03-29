<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Nepalbolpatra.com | Online Tender Services</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="<?php bloginfo('template_url') ?>/img/apple-icon.png" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owlcarousel/owl.theme.default.min.css">
  
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/flaticon.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/slicknav.min.css"/>

  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css"/>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


<!--  Google Analytics code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163963953-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163963953-1');
</script>


</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		
		<a href="<?= home_url(); ?>" class="site-logo">
			<!-- <img src="<?php bloginfo('template_url') ?>/img/bolpatra_200.png" alt=""> -->
      <img src="<?php bloginfo('template_url') ?>/img/updated.png" alt="">
		</a>
		<nav class="header-nav top_menu">
			<ul class="main-menu">
				<li><a href="<?= home_url(); ?>" class="">Home</a></li>
        <li><a href="<?= home_url()?>/listall">List All Tenders</a></li>
				
				

            <?php if( is_user_logged_in() ) : 
              // super admin
              if( is_super_admin() ) : ?>
                <li><a href="<?= home_url()?>/tender-by-category">Tender By Category</a></li>

                <li><a href="#"><i class="fa fa-chevron-down"></i> Features</a>
                <ul class="sub-menu">
                  <li><a href="<?= home_url()?>/listall?adv=search">Advance Search</a></li>
                  <li><a href="<?= home_url()?>/allnewspapers">All Newspapers</a></li>
                  <li><a href="<?= home_url()?>/tender-by-category">Tender By Category</a></li>
                  <li><a href="<?= home_url()?>/pricing">Pricing</a></li>
                </ul></li>

              <li><a href="#"><i class="fa fa-chevron-down"></i> Services</a>
              <ul class="sub-menu">
                <li><a href="<?= home_url()?>/addpricing">Add Pricing</a></li>
                <li><a href="<?= home_url()?>/edit-pricing">Edit Pricing</a></li>
                <li><a href="<?= home_url()?>/notify">Vouchers</a></li>
              </ul></li>
              <?php else: ?>
                <!-- logged in users -->
                <li><a href="<?= home_url()?>/allnewspapers">All Newspapers</a></li>
                
                <li><a href="#"><i class="fa fa-chevron-down"></i> Features</a>
                <ul class="sub-menu">
                  <li><a href="<?= home_url()?>/listall?adv=search"> Advance Search</a></li>
                  <li><a href="<?= home_url()?>/tender-by-category">Tender By Category</a></li>
                  <li><a href="<?= home_url()?>/pricing">Pricing</a></li>
                </ul></li>

                <!-- <li><a href="<?= home_url()?>/tender-by-category">Tender By Category</a></li> -->

                <li><a href="#"><i class="fa fa-chevron-down"></i> Solutions</a>
                <ul class="sub-menu">
                  <li><a href="<?= home_url()?>/proposal-writing-solutions">Proposal Writing Solutions</a></li>
                <li><a href="<?= home_url()?>/business-plan-writing">Business Plan Writing</a></li>
                </ul></li>


              <?php endif; ?>
              <?php else: ?>
                <li><a href="<?= home_url()?>/allnewspapers">Newspapers</a></li>
                <li><a href="<?= home_url()?>/proposal-writing-solutions">Proposal Writing Solutions</a></li>
                <li><a href="<?= home_url()?>/business-plan-writing">Business Plan Writing</a></li>
                <li><a href="<?= home_url()?>/pricing">Pricing</a></li>
            <?php endif; ?>
						
						<!-- <li><a href="<?= home_url()?>/features/"><i class="fa fa-user"></i> Tender Services</a></li> -->
				</li>
				


        

				<?php 
				if( !is_user_logged_in() ) : ?>
				<li><a href="#" data-toggle="modal" data-target="#login_Modal" class="hr-btn"><i class="fa fa-users"></i> Login </a></li>
				<?php elseif( is_user_logged_in() ) : 
          $user_id = get_current_user_id();
          $user = get_userdata( $user_id );
          $user_name = $user->user_login;
          ?>

					<?php if( is_super_admin() ) : ?>
            <li><a href="<?= home_url()?>/user/"><i class="fa fa-user"></i> <?= $user_name; ?></a>
          <ul class="sub-menu">
            <li><a href="<?= site_url()?>/user"><i class="fa fa-user"></i>  User Profile</a></li>

            <li><a href="<?= site_url()?>/wp-admin"><i class="fa fa-dashboard"></i> Admin </a></li>
            <li><a href="<?php echo wp_logout_url( home_url() ) ?>"><i class="fa fa-sign-out"></i> Log out</a></li>
          </ul>
        </li>

        <?php
        // for author, contributor, editor
        elseif($user->roles[0] == 'editor' || $user->roles[0] == 'author' || $user->roles[0] == 'contributor'): ?>
        <li><a href="#"><i class="fa fa-user"></i> <?= $user_name; ?></a>
        <ul class="sub-menu">
                    <li><a href="<?= home_url()?>/user/"><i class="fa fa-user"></i> User Profile</a></li>
                    <li><a href="<?= site_url()?>/wp-admin"><i class="fa fa-dashboard"></i> Admin </a></li>
                    <li><a href="<?php echo wp_logout_url( home_url() ) ?>"><i class="fa fa-sign-out"></i> Log out</a></li>
                  </ul>
        </li>

					<?php else: ?>
            <li><a href="<?= home_url()?>/user/"><i class="fa fa-user"></i> <?= $user_name; ?></a>
          <ul class="sub-menu">
            <li><a href="<?= site_url()?>/user"><i class="fa fa-user"></i>  User Profile</a></li>
            
            <li><a href="<?php echo wp_logout_url( home_url() ) ?>"><i class="fa fa-sign-out"></i> Log out</a></li>
          </ul>
        </li>


					<!-- <li><a href="<?php echo wp_logout_url( home_url() ) ?>">Log Out</a></li> -->
					<?php endif; ?>
				<?php endif; ?>

			</ul>
			<div class="header-right">

			</div>
		</nav>
	</header>
	<!-- Header Section end -->


	<!-- Login Modal -->
  <button type="button" data-toggle="modal" id="login_click" data-target="#login_Modal" style="display: none;">Login modal</button>

<div class="modal fade" id="login_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content mdl-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php bloginfo('url') ?>/wp-login.php" method="post" >
        	<div class="row">
        		<div class="col-md-12">
        			<input type="text" name="log" placeholder="Username or E-mail Address" value="<?php echo (isset($user_login)) ? esc_attr(stripslashes($user_login)) : ''; ?>" class="form-control" required>
        		</div>
        		<div class="col-md-12 mt-2">
        			<input type="password" name="pwd" placeholder="Password" value="" class="form-control" required>
        		</div>

        		<div class="col-md-12 mt-2">
        			<input class="loginLoginValue" type="hidden" name="service" value="login" />
					<!-- <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" /> -->
          <input type="hidden" name="redirect_to" value="<?= home_url() ?>/listall?login=true" />
					<input type="hidden" name="user-cookie" value="1" />
					<input type="submit" name="user-submit" id="go" class="form-control auth-btn" value="Authorize">
        		</div>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary float-left " data-toggle="modal" data-target="#register_Modal" data-dismiss="modal">Register</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#forgot_Modal">Lost your password ?</button>
      </div>
    </div>
  </div>
</div>
<!-- Login Modal ends -->

	<!-- Register Modal -->
  <button type="button" data-toggle="modal" id="login_click" data-target="#register_Modal" style="display: none;">Register modal</button>

<div class="modal fade" id="register_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content mdl-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post" >
        	<div class="row">
        		<div class="col-md-12">
        			<input type="text" name="user_login" placeholder="Username" value="<?php echo (isset($user_login)) ? esc_attr(stripslashes($user_login)) : ''; ?>" class="form-control" required>
        		</div>
        		<div class="col-md-12 mt-2">
        			<input type="email" name="user_email" placeholder="Email" value="<?php echo (isset($user_email)) ? esc_attr(stripslashes($user_email)) : '';?>" class="form-control" required>
        			<input class="loginLoginValue" type="hidden" name="service" value="register" />
        		</div>

        		<div class="col-md-12 mt-2">
					<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
          <input type="hidden" name="redirect_to" value="<?php echo site_url(); ?>?register=true" />

					<input type="hidden" name="user-cookie" value="1" />
					<input type="submit" name="user-submit" id="go" class="form-control signup-btn" value="Register">
        		</div>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary float-left" data-dismiss="modal" data-toggle="modal" data-target="#login_Modal">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#forgot_Modal">Lost your password ?</button>
      </div>
    </div>
  </div>
</div>
<!-- Register Modal ends -->

<!-- Forgot Password  Modal -->
<button type="button" data-toggle="modal" id="login_click" data-target="#forgot_Modal" style="display: none;">Lost Pwd modal</button>

<div class="modal fade" id="forgot_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content mdl-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Your Password ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" method="post" >
        	<div class="row">
        		<div class="col-md-12">
        			<input type="text" name="user_login" placeholder="Username or E-mail Address" value="<?php echo (isset($user_login)) ? esc_attr(stripslashes($user_login)) : ''; ?>" class="form-control" required>
        		</div>
        		

        		<div class="col-md-12 mt-2">
        			<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?reset=true" />

					<input type="hidden" name="user-cookie" value="1" />
					<input type="submit" name="user-submit" id="go" class="form-control forgot-btn" value="Get New password">
        		</div>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary float-left " data-dismiss="modal" data-toggle="modal" data-target="#login_Modal">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#register_Modal">Signup </button>
      </div>
    </div>
  </div>
</div>
<!-- Forgot Password  Modal ends -->


<style type="text/css">
  .modal-backdrop.in{
    opacity: 0.5;
    } 
    .fade.in{
      opacity: 1;
    }
</style>
<!-- image modal -->
<div class="modal img_modal" id="img_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content response">
      
      
      
    </div>
  </div>
</div>
<!-- image modal ends -->
