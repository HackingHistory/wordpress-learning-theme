<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Change the title to something else -->
        <title>KCC</title>
        <!-- this next line is a little hard to read. We are asking Wordpress to
             print the web address (URI) of the directory where our stylesheets live.
             Then we add "/style.css" to the end of the href value.  This will result in
             an HTML line  that looks something like:
             <link rel="stylesheet" href="https://hackinghistory.ca/wp-content/themes/Wordpress-learning-theme/style.css">
             (because the php will run and insert the results of the command into the file.

             more info here: https://developer.wordpress.org/reference/functions/get_template_directory_uri/

             Note: the proper way to add stylesheets is actually somewhat different, and
             involves using another file, called functions.php. But this theme is simple we
             don't even have that file at all!
           -->

        <link rel="stylesheet" href="https://amelia.hackinghistory.ca/wp-content/themes/wordpress-learning-theme/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;amp;subset=cyrillic" rel="stylesheet">
    </head>
    <body >
        <!-- This div lets us set boundaries for the whole page. In a real theme we would
             probably use a class that is commonly used in the big web frameworks, like bootstrap
             or foundation, so that we could leverage their massive advantages.-->
        <div id="page">
            <!-- here we use an id; again, we do this so we can address it with css in style.css -->
            <header id="header">
                <h1 id="site-title">
                <a href="https://amelia.hackinghistory.ca">
                KCC</h1>  </a>
                <h2 id="site-description">
                    Khangchendzonga Conservation Committee    <?php bloginfo('KNP and KCC'); ?>
                </h2>
                <!-- in Wordpress menus are almost always embedded in a <nav> element -->
                <nav id="main-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                <div class'"menu>"
                
            </header>

            <!-- here's something you won't see in a regular html file:
                 notice how none of these tags is actually closed.
                 that's because the closing all happens in footer.php-->
            <div id="main">
