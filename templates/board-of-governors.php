<?php /* Template Name: Board of Governors */ ?>

<?php get_header(); ?>
<div id	= "boardOfGovernors">
	<main id="main" class="site-main" >
		<div class = "text-center pt-3">
			<a class = "maroon-button" href="/board-of-governors">BOARD OF GOVERNORS LOGIN</a>
		</div>
		
		<section id="sectionOne" class = "my-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">EXECUTIVE COMMITTEE</h2>
					</div>
					<?php if( have_rows('executive_committee') ): ?>
					<?php while( have_rows('executive_committee') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$name = get_sub_field('name');
						$company = get_sub_field('company');

						?>

						<div class="col-md-3 board-member mb-5">
							<img class = "mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class = "text-center board-member">
								<span class = "d-block title"><?php echo $title; ?></span>
								<span class = "d-block h5 mb-0"><?php echo $name; ?></span>
								<span><?php echo $company; ?></span>	
							</div>
						</div><!-- .col-md-3 -->
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionOne -->

		<section id="sectionTwo" class = "my-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">VOTING BOARD MEMBERS</h2>
					</div>
					<?php if( have_rows('voting_board_members') ): ?>
					<?php while( have_rows('voting_board_members') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$name = get_sub_field('name');
						$company = get_sub_field('company');

						?>

						<div class="col-md-3 board-member mb-5">
							<img class = "mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class = "text-center board-member">
								<span class = "d-block h5 mb-0"><?php echo $name; ?></span>
								<span><?php echo $company; ?></span>	
							</div>
						</div><!-- .col-md-3 -->
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->

		<section id="sectionThree" class = "my-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">CORRESPONDING BOARD MEMBERS</h2>
					</div>
					<?php if( have_rows('corresponding_board_members') ): ?>
					<?php while( have_rows('corresponding_board_members') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$name = get_sub_field('name');
						$affiliation = get_sub_field('affiliation');

						?>

						<div class="col-md-3 board-member mb-5">
							<img class = "mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class = "text-center board-member">
								<span class = "d-block h5 mb-0"><?php echo $name; ?></span>
								<span><?php echo $affiliation; ?></span>	
							</div>
						</div><!-- .col-md-3 -->
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionThree -->
	</main>
</div>

<?php get_footer(); ?>