<footer class="content-info">
  <div class="container py-3 border-cyan border-top">
    <div class="d-flex align-items-center justify-content-between">
      <div class="copyright">
        &copy; 2021 PHP ID Online Learning 
      </div>
      <nav class="nav-primary">
        @if (has_nav_menu('secondary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        @endif
      </nav>
    </div>
  </div>
</footer>
