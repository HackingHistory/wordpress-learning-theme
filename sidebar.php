<div id="sidebar-primary" class="sidebar">

<p>Khangchendzonga Conservation Committee(KCC) is a great tourist spot </p> 

    <?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

	<div id="sidebar">
            <h2 class="sidebartitle">End of Information </h2>
        </div>

    <?php endif; ?>

</div>
