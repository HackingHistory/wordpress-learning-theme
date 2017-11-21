<div id="sidebar-primary" class="sidebar">

	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

		<div id="sidebar">
          <h2 class="sidebartitle">Do you know?</h2>
					<p>
						<a href = https://en.wikipedia.org/wiki/Karel_%C4%8Capek>Karel Čapek</a> in Roman letter is also the name for a Czech writer of the early 20th century.
					</p>

					<h3 class = "sidebartitle">店舗のご紹介</h3>
						<p>
							We have several shops across Japan. More information could be found <a href = https://www.karelcapek.co.jp/user_data/shop#kichi>here</a>.
						</p>

						<!-- Add icon library -->
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

						<!-- Add font awesome icons -->
						<a href="https://www.facebook.com/karelcapek.teatime/" class="fa fa-facebook"></a>
						<a href="https://twitter.com/karelabuzzy" class="fa fa-twitter"></a>
						<a href="https://www.instagram.com/karelcapek_official/" class="fa fa-instagram" ></a>

        </div>

	<?php endif; ?>

</div>
