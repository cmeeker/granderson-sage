<div class="container">
	<div class="row">
		<div class="col">
			<p class="fc-white text-uppercase text-left">{!! App::title() !!}</p>
			<p class="mb-md-5">—</p>
		</div>
		<div class="col text-right">
			<img class="icon-gdr" src="@asset('images/icon-gdr.svg')">
		</div>
	</div>

	<div class="row attorney-list">
		
		<?php

			$attorneys_list = get_field('attorneys_list');
			if( $attorneys_list ): ?>


			<?php foreach( $attorneys_list as $attorney ): 

			        $permalink = get_permalink( $attorney->ID );
			        $post_name = get_the_title( $attorney->ID );

			        $custom_img = get_field( 'picture', $attorney->ID );
			        $name = get_field( 'full_name', $attorney->ID );
			        $job_title = get_field( 'title', $attorney->ID );			        
		        ?>
	        <div class="col-md-6 attorney">
	        	<a class="stretched-link" href="<?php if (is_page_template('views/template-book-a-reservation.blade.php')) { echo $external_url; } else { echo $permalink;}?>" <?php if (is_page_template('views/template-book-a-reservation.blade.php')) { echo 'target="_blank"'; }?>>
	        		
	        		<div class="row">
		        		<div class="col-md-auto mb-3 mb-md-0">
			        		<img src="<?= $custom_img['url']; ?>" class="img-fluid profile-pic">
			        	</div>

			        	<div class="col-md pl-md-4">
				        	<p class="fc-white text-uppercase"><?= $name; ?></p>
				            <p>—</p>
				            <p><?= $job_title; ?></p>
				        </div>
			        </div>
		        </a>
	        </div>
	    <?php endforeach; ?>
	    <?php endif; ?>

	</div>
</div>