<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body <?php body_class('flex flex-col h-screen') ?>>
<?php wp_body_open(); ?>
    <div class="fixed-corner fixed-corner-left"></div>
    <div class="fixed-corner fixed-corner-right"></div>
    <header class="flex-0 px-4 shadow-md" style="background-color:#222222;">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center min-h-[40px]">
            <div style="max-width: 300px;">
                <?php if(get_custom_logo_url()): ?>
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_custom_logo_url(); ?>" alt="#">
                </a>
                <?php else: ?>
                <a href="<?php echo home_url() ?>">Logo</a>
                <?php endif; ?>
            </div>
            <div>
                <?php echo wp_nav_menu(array(
                    'theme_location' => 'header_menu'
                )); ?>
            </div>
        </div>
    </header>
    <main class="flex-grow">

