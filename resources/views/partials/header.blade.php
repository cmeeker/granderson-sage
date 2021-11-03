<div class="topNav h50vh flend w100vw pf t0 l0 z9 translide" style="background: black;">
  <div class="navContainer">
    <div class="innerNav w100vw">
      <div class="container">
        <div class="row align-items-center">
           <div class="col fc-white text-center text-md-left secNav" style="opacity: 0;">
          {{ get_theme_mod ('header_top_left')}}
      </div>
<div class="col text-center">
        <a class="navbar-brand" href="{{ home_url('/') }}">
          @if (get_theme_mod('logo'))
          <img src="{{ get_theme_mod ('logo')}}" alt="{{ get_bloginfo('name', 'display') }}" class="m-x-auto logo-header">
          @else
          {{ get_bloginfo('name', 'display') }}
        @endif
        </a>
      </div>

      <div class="col fc-white text-center text-md-right secNav" style="opacity: 0;">
        {{ get_theme_mod ('header_top_right')}}
      </div>

      </div>
      </div>
    </div>
    <div class="navItems" style="opacity: 0;">
      <div id="navbarCollapse">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'ml-auto nav navbar-nav']) !!}
      @endif
    </div>{{-- /.navbar-collapse --}}
     {{--  <ul>
        <li><a href="#">ATTORNEYS</a></li>
        <li><a href="#">NEWS</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul> --}}
    </div>
  </div>
</div>

<div class="uline"></div>
