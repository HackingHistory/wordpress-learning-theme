<div id="sidebar-primary" class="sidebar">

	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

		<div id="sidebar">
          <h2 class="sidebartitle">Do you know?</h2>
					<p>
						<a href = https://en.wikipedia.org/wiki/Karel_%C4%8Capek>Karel Čapek</a> in Roman letter is also the name for a Czech writer of the early 20th century.
					</p>
        </div>

	<?php endif; ?>

</div>
