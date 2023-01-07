<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<header class=" mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top theme-dark" >
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <?php if ( has_custom_logo() ): ?>
                  <?php the_custom_logo(); ?>
                <?php else: ?>
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <p class="site-title"><?php bloginfo('title'); ?></p>
                </a>
                <?php endif; ?>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
              <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => 'mx-auto',
                      'fallback_cb' => '__return_false',
                      'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                  ?>
                <a href="" class="btn btn-primary btn-sm">Contact Us</a>
              </div>
            </div>
          </nav>
    </header>