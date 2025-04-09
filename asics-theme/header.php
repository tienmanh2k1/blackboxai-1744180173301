<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100'); ?>>
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" class="h-10">
                    </a>
                <?php endif; ?>
            </div>
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex space-x-4',
                    'container' => false
                ));
                ?>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-4">
