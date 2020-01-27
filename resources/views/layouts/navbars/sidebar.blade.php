<div class="sidebar" data-color="purple" data-background-color="white">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ url('/') }}" class="simple-text logo-normal">
      {{ __('Goto Profile') }}
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
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('User Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'site_setting' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_setting.index') }}">
          <i class="material-icons">settings</i>
            <p>{{ __('Site Setting') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'socials' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('socials.index') }}">
          <i class="material-icons">account_box</i>
            <p>{{ __('Social Profile') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'gen_info' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('gen_info.index') }}">
          <i class="material-icons">info</i>
            <p>{{ __('General Info') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'skills' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('skills.index') }}">
          <i class="material-icons">assessment</i>
            <p>{{ __('Skills') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'services' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('services.index') }}">
          <i class="material-icons">build</i>
            <p>{{ __('Services') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'experiences' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('experiences.index') }}">
          <i class="material-icons">code</i>
            <p>{{ __('Experiences') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'educations' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('educations.index') }}">
          <i class="material-icons">bookmark</i>
            <p>{{ __('Educations') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'portfolios' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('portfolios.index') }}">
          <i class="material-icons">list</i>
            <p>{{ __('Portfolios') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'testimonials' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('testimonials.index') }}">
          <i class="material-icons">add_to_queue</i>
            <p>{{ __('Testimonials') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'blogs' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('blogs.index') }}">
          <i class="material-icons">menu_book</i>
            <p>{{ __('Blogs') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">add_alert</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
