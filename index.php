<?php get_header(); ?>

  <div id="content">
      <h3>What’s the “K” in the KCC?</h3>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2>
          <h2>

            <a href="<?php the_permalink('http://amelia.hackinghistory.ca/home/'); ?>">
            </a>
            <?php the_title(<h5>'The Park and the Mountain'</h5>); ?>
        </h2>

        <h4>
          Posted on <?php the_time('F jS, Y')?>
        </h4>
        <!-- add the content -->

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
