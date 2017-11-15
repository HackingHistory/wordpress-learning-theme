<?php get_header(); ?>

  <div id="content">


      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2>
            <!-- create a link whose href is the permanent link to this post,
               and whose textual content is the post or page title-->
            <a href="<?php the_permalink('http://amelia.hackinghistory.ca/home/'); ?>">
                <?php the_title(); ?>
              <h3>What’s the “K” in the KCC?</h3>
            </a>
        </h2>
        <!-- use php's strange time parsing functions to write out the time -->
        <h4>
            Posted on <?php the_time('Y-m-d') ?>

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
