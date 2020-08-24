<?php get_header(); 
if( is_user_logged_in() ) : 
	$user_id = get_current_user_id();
	$user = get_userdata( $user_id );
	$role = $user->roles[0];

	if( is_super_admin() || $role == 'author' || $role == 'contributor' || $role == 'editor' ) :
		// super admin
		$max = '10';
	else:
		// subscriber, contributor, author, etc
		$t = get_user_meta($user_id);
		$subs = $t['user_type'][0];
		$exp_date = $t['expiration_date'][0];

		if($subs == 'paid'){
			$max = '10';
		}elseif($subs == 'trial'){
			$max = '10';
		}else{
			$max = '10';
		}
	endif;
else:
	$max = '10';
endif;
?>


<style type="text/css">
	.brd-crm span{
		font-size: 14px;
		color: var(--blue);
	}
	.tax-heading{
		background: #0070b8;
    	border-color: #0070b8;
    	text-align: center;
    	padding: 4px;
	}
	.tax-heading h4{
		color: #fff;
	}
</style>
<section class="hero-section-1 main-pg-section">
	<?php
	$currCat = get_queried_object();
	$cat_name = $currCat->name;
	$slug = $currCat->slug;
	$cat_id   = get_cat_ID( $cat_name );

	// $custom_terms = get_terms('newspapers');
	$custom_terms = get_terms($currCat->taxonomy);
	?>

	<div class="containersss">
		<div class="card p-4">
			<div class="row ml-5 brd-crm">
				<span><a href="<?= home_url(); ?>">Home</a> /</span>
					<span><?= ucfirst($currCat->taxonomy); ?> /</span>
					<span><?= $cat_name; ?></span>
			</div>
		</div>
	</div>

	<?php
	if( is_user_logged_in() ) : 
		if( is_super_admin() || $role == 'author' || $role == 'contributor' || $role == 'editor' ) : 
			// if super admin or author/contributor
		else: 
			if($subs == 'trial'){ ?>
				<div class="container mt-3">
					<div class="alert alert-secondary alert-dismissible fade show" role="alert">
					  <strong>Trial Version</strong> Please Upgrade to View More Tenders.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				</div>
			<?php }elseif($subs == 'expired'){ ?>
				<div class="container mt-3">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Subscription Expired </strong> Please Renew Your Subscription to access further services.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				</div>
			<?php }else{ ?>
				<div class="container mt-3">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Paid Membership !</strong> Your Membership Expires on <?= $exp_date; ?>.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				</div>
			<?php }
		endif;

		else: ?>
		<div class="container mt-3">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>Subscribe TenderNepal !</strong> Please Sign Up to View More Tenders.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
		<?php endif;
	?>
	<div class="container cards mb-4 mt-3">
		<div class="row">
			<div class="col-md-4 col-sm-12 tax-heading">
				<h4><?= $currCat->name; ?></h4>
			</div>
			<div class="col-md-5 col-sm-12">
				
			</div>
			<div class="col-md-3 col-sm-12">
			<ul class="nav nav-tabs" id="myTab" role="tablist" style="float: right;">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#tax_list_view" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-list"></i> </a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="home-tab2" data-toggle="tab" href="#tax_card_view" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-th-large"></i> </a>
				  </li>
			</ul>
			</div>
		</div>
		<div class="row card tab-content data-tbl-resp" id="myTabContent">
				<div class="tab-pane fade show active" id="tax_list_view" role="tabpanel" aria-labelledby="home-tab1">
					<div class="row p-3">
					<?php
					get_template_part( 'template-parts/content', 'taxonomy-list' );
					?>
					</div>
				</div>

				<div class="tab-pane fade" id="tax_card_view" role="tabpanel" aria-labelledby="home-tab1">
					<div class="row p-3">
					<?php
					get_template_part( 'template-parts/content', 'taxonomy-card' );
					?>
					</div>
				</div>
			</div>

		
</section>


<?php get_footer(); ?>