<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Ajout de la bannière de test Pipeline -->
    <div class="pipeline-banner">
        <span class="status-dot"></span> Pipeline Active : New Thème Ultralocal (v1.0.1) - Déploiement Git OK 2026 🚀
    </div>
    
    <header>
        <h1><?php bloginfo('name'); ?> - Thème Ultralocal</h1>
        <p><?php bloginfo('description'); ?></p>
    </header>
    <main>
        <p>Environnement de test actif et opérationnel.</p>
    </main>
    <?php wp_footer(); ?>
</body>
</html>