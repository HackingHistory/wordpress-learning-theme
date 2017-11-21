<div id="sidebar-primary" class="sidebar">
    <!-- check  to see if the sidebar is active; if it is,
         grab the content. If not, just make an empty block with
       some useless placeholder text. -->
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

	<div id="sidebar">
            <h2 class="sidebartitle">FAQ</h2>
            <p> <a href="https://monica.hackinghistory.ca/about/kcc-mandate/"> Q. What is the KCC? </a></p>
            <p> <a href="https://monica.hackinghistory.ca/maps/"> Q. Where is Khangchendzonga? </a></p>
            <p> <a href="https://monica.hackinghistory.ca/ecotourism/"> Q. Can I visit the Mountain? </a> </p>

        </div>

    <?php endif; ?>

</div>
