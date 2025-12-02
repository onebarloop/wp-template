<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>

    <h1><?php the_title(); ?></h1>

    <?php the_content();  ?>

    <pre style="white-space:normal">
        Usage of Class Hello:<br>
        <?php echo $helloMessage; ?>
    </pre>
    <pre style="white-space:normal">
        Usage of Symfony VarDumper:<br>
        <?php dump(get_defined_vars()) ?>
    </pre>

    <?php wp_link_pages(); ?>

    <?php wp_footer(); ?>

</body>

</html>