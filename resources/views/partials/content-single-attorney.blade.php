<?php
	$picture = get_field('picture'); 
	$full_name = get_field('full_name'); 
	$job_title = get_field('title'); 
	$bio = get_field('bio'); 
	$phone_number = get_field('phone_number'); 
	$email = get_field('email_address'); 
	
	$social_links = get_field('social'); 
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-xl-5";>
			<img class="profile-pic img-fluid mb-4 mb-md-0" alt="<?= $picture['alt']; ?>" src="<?= $picture['url']; ?>">
		</div>

		<div class="col-md-8 col-xl-7">
			<div class="row">
				<div class="col mr-auto">
					<p class="fc-white text-uppercase text-left"><?= $full_name; ?></p>
					<p>—</p>
					
					<?php if( $job_title ): ?>
					<p class="job-title mb-md-4"><?= $job_title; ?></p>
					<?php endif; ?>
				</div>
				<div class="col text-right">
					<img class="icon-gdr" src="@asset('images/icon-gdr.svg')">
				</div>
			</div>

			<?php if( $bio ): ?>
			<p class="bio mb-md-4"><?= $bio; ?></p>
			<?php endif; ?>

			<?php if( $phone_number ): ?>
			<p class="phone-number fc-white"><?= $phone_number; ?></p>
			<?php endif; ?>

			<p>—</p>

			<?php if( $email ): ?>
			<a class="email" href="mailto:<?= $email; ?>"><?= $email; ?></a>
			<?php endif; ?>

			<?php if( have_rows('social') ): ?>
	       	<div class="social mt-md-5">
		        <?php while( have_rows('social') ): the_row(); 
			        $instagram = get_sub_field('instagram');
			        $facebook = get_sub_field('facebook_url');
			        $linkedin = get_sub_field('linkedin');
				?>
	      	
		      	<ul class="list-unstyled social-nav">

		      		<?php if( $instagram ): ?>
					<li class="list-inline-item"><a href="<?= $instagram; ?>" target="_blank"><i class="icn-ig"></i></a></li>
					<?php endif; ?>

					<?php if( $facebook ): ?>
					<li class="list-inline-item"><a href="<?= $facebook; ?>" target="_blank"><i class="icn-fb"></i></a></li>
					<?php endif; ?>

					<?php if( $linkedin ): ?>
					<li class="list-inline-item"><a href="<?= $linkedin; ?>" target="_blank"><i class="icn-linkedin"></i></a></li>
					<?php endif; ?>

				</ul>
		    	<?php endwhile; ?>
	    	</div>
		    <?php endif; ?>

		</div>
	</div>
</div>



