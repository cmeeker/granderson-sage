@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">

      <?php if( have_rows('content') ): ?>
        <?php while( have_rows('content') ): the_row(); 

        // Get sub field values.
        $title = get_sub_field('section_title');
        $content = get_sub_field('section_content');

        ?>
        <div class="col-md-8 px-xl-5">
          <p class="fc-white"><?= $title; ?></p>
          <p>—</p>
          <?= $content; ?>
        </div>

        <?php endwhile; ?>
      <?php endif; ?>

      <?php
          $sidebar = get_field('locations_sidebar');
        if( $sidebar): ?>

       <?php while( have_rows('locations_sidebar') ): the_row(); 

        // Get sub field values.
        $image = get_sub_field('locations');
        $link = get_sub_field('contact_button');

        ?>

        <div class="col-md-4 locations-sidebar">
        
        <?php if( have_rows('locations') ): ?>
          <div class="locations">
          <?php while( have_rows('locations') ): the_row();
              // vars
              $city = get_sub_field('city');
              $address = get_sub_field('address');
              ?>

            <p class="fc-white"><?= $city; ?></p>
            <p>—</p> 
            <p><?= $address; ?></p> 

          <?php endwhile; ?>
          </div>
        <?php endif; ?>

          <div class="row mt-5">
            <?php if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <div class="col">
              <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
            <?php endif; ?>
            <div class="col text-right">
              <img class="icon-gdr" src="@asset('images/icon-gdr.svg')">
            </div>
          </div>

        </div>{{-- .locations-sidebar --}}

       <?php endwhile; ?>
      <?php endif; ?>

      </div>
    </div>


@endsection
