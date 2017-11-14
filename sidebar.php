<div id="sidebar-primary" class="sidebar">
    <!-- check  to see if the sidebar is active; if it is,
         grab the content. If not, just make an empty block with
       some useless placeholder text. -->
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

	      <div id="sidebar">
            <h2 class="sidebartitle">How can you help?</h2>
        </div>

        <div id="sidebarcontent">
            <p> Help! is a 1965 British musical comedy-adventure film directed by Richard Lester, starring the Beatles–John Lennon, Paul McCartney, George Harrison and Ringo Starr—and featuring Leo McKern, Eleanor Bron, Victor Spinetti, John Bluthal, Roy Kinnear and Patrick Cargill. The second film starring The Beatles following Lester's A Hard Day's Night, Help! sees the group come up against an evil cult. The soundtrack was released as an album, also called Help!.</p>
            <p>The film had its Royal World Premiere at the London Pavilion Theatre in the West End of London on 29 July 1965 in the presence of Princess Margaret, Countess of Snowdon and the Earl of Snowdon. While not reviewed at the time with the same high level of admiration as their first film, the film is regarded a half century later as being influential, including in the subsequent development of music videos.</p>
        </div>

    <?php endif; ?>

</div>
