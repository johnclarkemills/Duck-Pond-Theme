<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<link href="http://fonts.googleapis.com/css?family=Bevan" rel="stylesheet" type="text/css">
		<title><?php wp_title('&laquo;', true, 'right'); bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php if (!is_admin()) { wp_enqueue_script('html5_shim'); } ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
        <section id="wrapper">
            <section id="content">
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">The Pond</a></li>
                        <li><a href="/events">Events</a></li>
                        <li><a href="/media">Media</a></li>
                        <li><a href="/store">Store</a></li>
                    </ul>
                </nav>
				
				<?php get_sidebar(); ?>
                <section id="top_row">
					<div class="content-areas">