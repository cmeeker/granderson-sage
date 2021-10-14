@extends('layouts.app')

@section('content')

  <div class="container section section-blog-index pt-0">
    <h1 class="entry-title h6 text-uppercase fc-white">News</h1>    

    <?php
      $args = array(
        'posts_per_page' => 4
      );
    ?>
    <?php $the_query = new WP_Query($args); ?>

    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        @include('partials.content-blog-feature')
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>


  </div>

@endsection
