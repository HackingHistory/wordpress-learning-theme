<div id="sidebar-primary" class="sidebar">
    <!-- check  to see if the sidebar is active; if it is,
         grab the content. If not, just make an empty block with
       some useless placeholder text. -->
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

	<div id="sidebar">
            <h2 class="sidebartitle">Useful Links</h2>
            <h3> <a href="http://kccsikkim.weebly.com/sikkim.html"> The Official KCC Website</a> </h3>         
        </div>

    <?php endif; ?>

</div>
