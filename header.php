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
        <title>KNP</title>
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
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    </head>
    <body >
        <!-- This div lets us set boundaries for the whole page. In a real theme we would
             probably use a class that is commonly used in the big web frameworks, like bootstrap
             or foundation, so that we could leverage their massive advantages.-->
        <div id="page">
            <!-- here we use an id; again, we do this so we can address it with css in style.css -->
            <header id="header">
                <h1 id="site-title">
                    <a href="<?php bloginfo('https://amelia.hackinghistory.ca'); ?>">
                      HIS455 (2017)
                        <?php bloginfo('
                       HIS455 (2017)'); ?>
                    </a>
                </h1>
                <h2 id="site-description">
                    <?php bloginfo('Khangchendzonga'); ?>
                </h2>
                <!-- in Wordpress menus are almost always embedded in a <nav> element -->
                <nav id="main-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                <div class'"menu>"
                  <ul>
                    <li class="page_item page-item2"
<a href="https://amelia.hackinghistory.ca/sample-page/">Home</a>
              </nav>
            </header>

            <!-- here's something you won't see in a regular html file:
                 notice how none of these tags is actually closed.
                 that's because the closing all happens in footer.php-->
            <div id="main">

            <div id="content">
              <h1>Khangchendzonga</h1>

<h3>The Park Site</h3>
<p>Khangchendzonga is both a park and an extremely significant actor in the Sikkamese cultural landscape. It holds a designation as a Sikkamese National Park as well as a UNESCO heritage status as both a natural and culturally significant site. It is visited today for pilgrimages and tourism purposes, as well as for acts of active participation and maintenance of cultural tradition by the Sikamese and was appropriated in the past for the colonial infrastructural developments regarding tea harvesting. </p>
<figure>
  <img src=" http://whc.unesco.org/uploads/thumbs/site_1513_0015-500-375-20161019150902.jpg" width="500" height="400">
  <figcaption> Mt.Khangchendzonga & the National Park (whc.unesco.org) </figcaption>
</figure>
<h3>The Mountain</h3>
<p>While it is in fact the entire landscape together which comprise foundational elements of the Sikkamese worldviews, the centre of focus rests on Mt. Khangchendzonga. Its peak is the highest point of the Himalayan mountain range where it rests, but to the Sikamese it is also a deity and a significant aspect of the cultural and ritual landscape (pilgrimages, dances, offerings), it is an active actor in the development of their culture history as well as the success of their subsistence, and finally, it is a player in their multiple mythologies and oral traditions. </p>
<figure>
  <img src="http://www.knpsikkim.in/wp-content/gallery/mountains/5.jpg" width="1000" height="400">
  <figcaption> The Mountain Scape (knpsikkim.in) </figcaption>
</figure>

<h2> <a href="https://amelia.hackinghistory.ca/2017/10/31/welcome-to-wordpress/">14-11-2017</a>
