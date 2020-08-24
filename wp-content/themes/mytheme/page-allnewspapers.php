<?php get_header(); ?>

<style type="text/css">
	.tax-headings{
		background: #0b51a7;
    	padding: 5px 0px;
	}
	.tax-headings h5{
		color: #fff;
		text-align: center;
	}
</style>
<section class="hero-section-1 main-pg-section">
	<div class="container card">
		<div class="row p-3">
<div class="col-md-12 text-center mb-4 pb-2 pt-4">
				<h2>Newspapers</h2>
			</div>
<?php
// Get the taxonomy's terms
$terms = get_terms(
    array(
        'taxonomy'   => 'newspapers',
        'hide_empty' => true,
        'parent' => 0
        // 'post__in'       => [2,3,7],
    	// 'orderby'        => 'post__in',
    	// 'order'          => 'ASC'
    )
);

// Check if any term exists
if ( ! empty( $terms ) && is_array( $terms ) ) {
    // Run a loop and print them all
    $n = 1;
    foreach ( $terms as $parent ) { ?>

	<div class="col-md-12 mb-4 tax-headings" id="paper_<?= $n;?>">
		<h5><?= $parent->name; ?></h5>
	</div>

<?php 
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
				<div class="col-md-2 col-sm-12 col-xs-12">
					<div class="icon-box-item">
						<div class="row">
						<div class="ib-icon">
							<!-- <i class="flaticon-012-24-hours"></i> -->
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

 		$n++;  }
	}
?>

		</div>
	</div>
</section>


<?php get_footer('other'); ?>