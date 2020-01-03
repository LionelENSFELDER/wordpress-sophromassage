<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:700,800,900&display=swap&effect=3d-float|3d" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <section id="master-header" class="w-100 bg-light-green" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
        <header id="masthead" class="site-header navbar-static-top shadow-none fixed-top" role="banner">
            <div class="container py-2">
                <nav class="navbar navbar-expand-xl p-0">
                    <div class="navbar-brand">
                        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>

                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fas fa-bars fa-2x font-white"></i>
                        </span>
                    </button>

                    <?php
                    wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>

                </nav>
            </div>
        </header>
        <!-- #masthead -->
        <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
            <div class="border-0 bg-transparent" id="page-sub-header">
                <section class="section w-100 p-5">
                    <div class="container py-5">
                        <div class="row py-5">
                            <!-- <div class="col-6">
                                <img src="http://localhost:8080/sophromassage/wp-content/uploads/2019/09/2793999-removebg-preview-e1567787706979.png">
                            </div> -->
                            <div class="col-12">
                                <div class="card py-5 bg-transparent border-0 text-left">
                                    <div class="py-5 font-white text-left">
                                        <h2 class="font-white">Sophrologie, massages bien-être & sportif</h2>
                                        <p>
                                            Mieux-être et bien-être au quotidien.
                                            <br>
                                            Préparation mentale et physique à un évènement.
                                        </p>
                                        <a href="http://localhost:8080/sophromassage/wp-content/uploads/2019/10/plaquette_2019.pdf" class="btn btn-main-blanco">Plaquette 2019</a>
                                        <a href="#" class="btn btn-link-arrow text-white">Planning des ateliers</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        <?php endif; ?>
    </section>
	<div id="content" class="site-content">
		<div class="section">
			<div class="">
                <?php endif; ?>