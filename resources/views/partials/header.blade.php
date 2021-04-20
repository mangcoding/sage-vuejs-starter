<header class="navigation-header">
  <div class="container d-flex justify-content-between align-items-center py-2">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="@asset('images/logo.png')" />
    </a>

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      @endif
    </nav>
  </div>
</header>
