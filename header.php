
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Header Section -->
<header class="main-header">
    <div class="header-container">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" alt="Logo">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="main-nav">
            <ul class="nav-list">
                <li><a href="#projets" class="nav-link">Projets</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#a-propos" class="nav-link">À propos</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </nav>

        <!-- Hamburger Menu (for mobile) -->
        <div class="hamburger-menu" id="hamburger-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
    <ul class="mobile-nav">
        <li><a href="#projets" class="nav-link">Projets</a></li>
        <li><a href="#a-propos" class="nav-link">À propos</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
</div>


<?php wp_body_open(); ?>