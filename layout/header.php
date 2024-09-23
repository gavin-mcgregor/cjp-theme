<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri() ?>/favicon.svg" />
    <meta name="viewport" content="width=device-width" />

    <!-- SEO -->
    <title>Claire Juliet Paton</title>
    <meta property="og:title" content="Claire Juliet Paton" />
    <meta name="description" content="Portfolio Website Theme" />
    <meta property="og:description" content="Portfolio Website Theme" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:site_name" content="Claire Juliet Paton" />
    <!-- <meta property="og:image" content="/images/hero.webp" /> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet" />

    <!-- Wordpress -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-inner page-width">
            <div class="logo-container">
                <a href="/">
                    <?php get_template_part('components/logo') ?>
                </a>
            </div>
            <button id="mobmenu" class="text-subtitle">Menu</button>
            <div class="nav-container">
                <nav>
                    <ul class="menu-list">
                        <li class="text-subtitle menu-item"><a href="/about/">About</a></li>
                        <li class="text-subtitle menu-item"><a href="/weddings/">Weddings</a></li>
                        <li class="text-subtitle menu-item">
                            <span class="submenu-title">Info</span>
                            <ul class="submenu-list">
                                <li class="text-subtitle menu-item"><a href="/east-lothian/">East Lothian</a></li>
                                <li class="text-subtitle menu-item"><a href="/blog/">Wedding Blog</a></li>
                                <li class="text-subtitle menu-item"><a href="/packages/">Packages</a></li>
                            </ul>
                        </li>
                        <li class="text-subtitle menu-item"><a href="/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>