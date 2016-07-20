<header class="banner navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <nav class="nav-primary collapsed navbar-collapse">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation',
          'walker' => new wp_bootstrap_navwalker(),
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </nav>
  </div>
</header>
