<div class="h50vh flcas w100vw pf t50vh l0 bottomNav z9 translide" style="background: black;">
  <div class="container">
      <div class="row align-items-center">
      <div class="col fc-white text-md-left secNav" style="opacity: 0;">
        {{ get_theme_mod ('footer_text')}}
      </div>

      <div class="col text-center">
      @if (get_theme_mod('footer_logo'))
          <img src="{{ get_theme_mod ('footer_logo')}}" alt="{{ get_bloginfo('name', 'display') }}" class="mx-auto logo-footer">
        @else
          <p>Des Rochers</p>
        @endif
      </div>
      <div class="col fc-white text-md-right secNav" style="opacity: 0;">
        <a href="mailto:{{ get_theme_mod ('footer_email')}}">{{ get_theme_mod ('footer_email')}}</a>


      </div>



      </div>
  </div>
</div>
{{-- 

<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
 --}}