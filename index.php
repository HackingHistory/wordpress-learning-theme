<?php get_header(); ?>

  <div id="content">
      <h1>Khangchendzonga</h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2>
          <h2>

            <a href="<?php the_permalink('https://amelia.hackinghistory.ca/2017/10/31/welcome-to-wordpress/'); ?>">
                <?php the_title('The Park and the Mountain'); ?>
            </a>
        </h2>

        <h4>
            Posted on <?php the_time('F jS, Y') ?>
        </h4>
        <!-- add the content -->

        <h3>The Park Site</h3>
        <p>Khangchendzonga is both a park and an extremely significant actor in the Sikkamese cultural landscape. It holds a designation as a Sikkamese National Park as well as a UNESCO heritage status as both a natural and culturally significant site. It is visited today for pilgrimages and tourism purposes, as well as for acts of active participation and maintenance of cultural tradition by the Sikamese and was appropriated in the past for the colonial infrastructural developments regarding tea harvesting. </p>
        <figure>
        <img src=" http://whc.unesco.org/uploads/thumbs/site_1513_0015-500-375-20161019150902.jpg" width="500" height="400">
        <figcaption> Mt.Khangchendzonga and the National Park (whc.unesco.org) </figcaption>
        </figure>
        <h3>The Mountain</h3>
        <p>While it is in fact the entire landscape together which comprise foundational elements of the Sikkamese worldviews, the centre of focus rests on Mt. Khangchendzonga. Its peak is the highest point of the Himalayan mountain range where it rests, but to the Sikamese it is also a deity and a significant aspect of the cultural and ritual landscape (pilgrimages, dances, offerings), it is an active actor in the development of their culture history as well as the success of their subsistence, and finally, it is a player in their multiple mythologies and oral traditions. </p>
        <figure>
        <img src="http://www.knpsikkim.in/wp-content/gallery/mountains/5.jpg" width="1000" height="400">
        <figcaption> The Mountain Scape (knpsikkim.in) </figcaption>
        </figure>

        <p><?php the_content(__('(more...)')); ?></p>

    <?php endwhile; else: ?>
    <!-- see the "else" just above this line? If you've stumbled on a bad url,
         this "no posts found" will tell you there's nothing to see here.-->
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
  <!-- add the sidepar -->
  <?php get_sidebar(); ?>

  </div>

<div id="delimiter"></div>
<?php get_footer(); ?>
