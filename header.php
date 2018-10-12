<?php
/**
 * Template for the header
 * Mi tema
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BlueWebTemplates</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php wp_head(); ?>
</script>

</head>
<body>
<div class="main">
  <div class="header_resize">
    <div class="header">
      <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.gif" width="321" height="143" border="0" alt="logo" /></a></div>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu' ) ); ?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="header_blog">