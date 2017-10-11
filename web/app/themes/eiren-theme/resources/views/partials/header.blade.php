<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
      <a class="brand align-self-center" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar_menu_id" aria-controls="navbar_menu_id" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'navbar-nav ml-auto',
          'container_class' => 'collapse navbar-collapse menu-main-container',
          'container_id' => 'navbar_menu_id'
        ]) !!}
      @endif
    </nav>
  </div>
</header>
