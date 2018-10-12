<?php
/**
 * Single post template
 */
get_header();
?>
    <div class="header_blog_resize"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_link.gif" alt="picture" width="192" height="44" border="0" /></a>
      <h2>Our Work</h2>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="search_bg">
      <p class="search_bgg"> <a href="#" class="active search_bgg">You are here! > home</a> <a href="#">> services</a></p>
      <div class="search">
        <form id="form1" name="form1" method="post" action="">
          <span>
          <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
          </span>
          <input name="b" type="image" src="<?php echo get_template_directory_uri(); ?>/images/search.gif" class="button" />
        </form>
      </div>
      <div class="clr"></div>
    </div>
    <div class="body_resize">
      <div class="body_resize_top">
        <div class="body_resize_bottom">
          <div class="left">
            <h2>Services What we do!</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque molestie, felis in sodales scelerisque, magna metus laoreet massa, facilisis interdum antequam auctor arcu. Pellentesque a neque. In aerat. Morbi volutpat ligula eu odio. Vivamus nonnibh dictum nisi iaculis elementum. Vestibulum nibh. Pellentesque habitant morbi tristique senectuset netus et malesuada fames ac turpis egestas.Sed condimentum rhoncus nibh. Mauris ullamcorper, orci nec posuere volutpat, quam diam iaculis lectus, et ultrices risus est nec erat. Mauris mollis ligula a arcu. Vivamus</p>
            <div class="bg"></div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="port">
              <p><img src="<?php echo get_template_directory_uri(); ?>/images/port_1.jpg" alt="picture" width="258" height="214" /></p>
              <h4><a href="<?php the_permalink(); ?>" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
              <p> <?php the_content(); ?> </p>            </div>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Lo siento, no hay posts con ese criterio.' ); ?></p>
            <?php endif; ?>
          </div>
          <?php get_sidebar(); ?>
          <div class="clr"></div>
        </div>
      </div>
    </div>
    <?php
get_footer();
?>