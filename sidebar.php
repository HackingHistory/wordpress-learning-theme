<div id="sidebar-primary" class="sidebar">
    <!-- check  to see if the sidebar is active; if it is,
         grab the content. If not, just make an empty block with
       some useless placeholder text. -->
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

	<div id="sidebar">
            <h2 class="sidebartitle">Here is the Sidebar</h2>
<p>The mountain chains which run southwards from the main Himalayan range form the natural boundaries of Sikkim; the Chola range dividing it from Tibet in the Northeast and Bhutan in the Southeast, the Singalila range separating it from Nepal in the West with the Greater Himalayan range forming the barrier between Sikkim and Tibet in the North.
  
Floating high over the cloud-covered lower Himalaya, Mt. Khangchendzonga dominates the landscape of Sikkim. At 27,803 ft is the third highest mountain in the world and the highest in India.</p>
        </div>

    <?php endif; ?>

</div>
