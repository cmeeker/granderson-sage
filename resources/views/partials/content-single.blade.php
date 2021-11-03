<section class="blog-single-inner">
  <div class="container">
  <article @php post_class() @endphp>
    <div class="entry-content">
      <div class="row">
        <div class="col-md-4">
          <?php the_post_thumbnail('full', array('class' => 'img-fluid mb-3'));   ?>
        </div>
        <div class="col-md-8">
          <p class="fc-white text-uppercase text-left">{!! App::title() !!}</p>
          <p>—</p>
          <p class="updated mb-md-4" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</p>

          @php the_content() @endphp

        </div>
      </div>
      
      <div class="row">
        <div class="col">
        
        <div class="paginate-single">
          <?php
            $prev_post = get_next_post();
            if($prev_post) {
               $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
               echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="prev"><i></i>Previous Article</a>' . "\n";
            }

            $next_post = get_previous_post();
            if($next_post) {
               $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
               echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="next">Next Article<i></i></a>' . "\n";
            }
          ?>
        </div>

        </div>
      </div>

    </div>
  </article>
  </div>
</section>