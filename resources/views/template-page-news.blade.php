{{--
  Template Name: Page - News
--}}
@extends('layouts.app')

@section('content')

  <div class="container section section-blog-index pt-0">
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
      ));?>
    <?php if ( $query->have_posts() ) : ?>
      <div class="row masonry m-0">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="article-image">
              <a href="<?php the_permalink(); ?>">
                <div class="card-img">
                  <?php the_post_thumbnail('blog-preview', array('class' => 'img-fluid')); ?>
                </div>
              </a>
            </div>
            <?php endif; ?>

            <div class="article-text">
                <h2 class="entry-title font-family-sans-serif h6 text-uppercase"><a href="{{ get_permalink() }}"><?php the_title(); ?></a></h2>
                <p>—</p>
                <p class="updated mb-md-4" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</p>
            </div>

      <?php endwhile; ?>
      </div>
      <div class="col-12">
        <div class="pagination mt-4">

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
      <?php else : ?>

      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
    <?php endif; ?>


  </div>

@endsection
