<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<title>
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="outerWrapper">
    <header class="blogHeader pageHeader">
  <h1>Roux Academy of Art and Design<a href="/index.htm" title="home"></a></h1>
  <nav id="pageNav" class="cf">
    <ul>
      <li><a href="programs/programs.htm" title="programs">Programs</a></li>
      <li><a href="admissions.htm" title="admissions">Admissions</a></li>
      <li><a href="student_portal.htm" title="student portal">Student Portal</a></li>
      <li><a href="campus_portal.htm" title="campus portal">Campus</a></li>
      <li><a href="alumni.htm" title="alumni">Alumni</a></li>
      <li><a href="blog/index.php"  title="Roux Academy Official Blog">Blog</a></li>
      <li><a href="about/about.htm"  title="about Roux Academy">About</a></li>
    </ul>
  </nav>
</header>