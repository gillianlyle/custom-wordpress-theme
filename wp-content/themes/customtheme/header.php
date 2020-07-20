<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <link href="<?php echo get_bloginfo('template_directory');?>/style.css" rel="stylesheet">
    
    <?php wp_head();?>
</head>
<body>
    <header>
        <h1>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
        </h1>
        <p><?php bloginfo('description'); ?></p>
    </header>  
    <nav>
        <ul>
            <?php wp_list_pages( '&title_li=' ); ?> 
        </ul>
    </nav>
