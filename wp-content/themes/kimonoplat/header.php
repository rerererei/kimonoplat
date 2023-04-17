<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="ja">
<head>
    <title>Kimono Plat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <?php wp_deregister_script('jquery'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/resources/js/kmnp-function.js" type="text/javaScript" charset="utf-8"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/kmnp-common.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/kmnp-top.css">
</head>

<body <?php body_class(); ?>>
    <input type="hidden" value="jp"/>
    <div class="wrapper">
        <header>
        </header>