<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>

    <header>

        <?php

        // wp_die(var_dump(get_registered_nav_menus()));
        // get_terms('nav_menu')



    wp_nav_menu( array(
        'theme_location' => 'primary',
        // 'menu' => ''
        'container' => 'nav',
        'container_class' => 'yo dude what col-auto',
        'menu_id' => 'collapseExample',             // %1$s
        'menu_class' => 'one two three four vive', // %2$s .... %3$s = list items.
        'add_li_class' => 'px-3',
        'items_wrap' => '<div class="heeeeeyyyyy %2$s" id="%1$s">%3$s</div>',
        'walker' => new jsc_wp_nav_menu_walker()
    ))

    ?>


    </header>

</body>

</html>