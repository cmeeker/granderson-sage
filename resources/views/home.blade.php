@extends('layouts.app')

@section('content')

  <div class="container section section-blog-index py-5">
    <div class="row">
      <div class="col">
        <p class="fc-white text-uppercase text-left">NEWS</p>
        <p class="mb-md-5">—</p>
      </div>
    </div>   



    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'paged' => $paged, 
        'orderby' => 'DATE',
        'order'   => 'DESC'
      ));
    ?>

    <?php if ( $query->have_posts() ) : ?>
      <?php while ( $query->have_posts() ) : $query->the_post();
      
      //$att_img = get_the_post_thumbnail_url();
      $att_img = esc_url((wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'thumb-medium')[0])); //get my custom image size from functions.php
      $video = get_field('video_embed');
      
      $category = get_the_category();
      $cat_image = get_field('cat_image', $category[0] );
      
      ?>

        @include('partials.content-blog-feature')
      <?php endwhile; ?>




      <div class="col-12">
        <div class="pagination">

          <?php 
          echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 0,
            'mid_size'     => 0,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Previous', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
          ) );
          ?>

        </div>
      </div>

      <?php wp_reset_postdata(); ?>
    <?php endif; ?>


  </div>

@endsection
