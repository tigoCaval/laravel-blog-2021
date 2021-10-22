<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{url('')}}" class="simple-text logo-normal">
      {{ __('Blog') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      @include('layouts.menu.article')
      @include('layouts.menu.profile')
     

     
    </ul>
  </div>
</div>
