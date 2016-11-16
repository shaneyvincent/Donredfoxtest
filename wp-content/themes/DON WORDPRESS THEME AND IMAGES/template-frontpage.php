<?php
/**
 * Template Name: FrontPage
 *
 * @package TA Music
 */

get_header(); ?>

	<?php if ( ta_option( 'disable_slider') == '1' ) : ?>
	<!-- header slider -->
	<section id="banner">
		<div class="flexslider">
			<ul class="slides">
				<div class="container">
					<!-- welcome message -->
					<div class="welcome-message">

						<h2><?php if ( ta_option( 'features_title' ) != '' ) { echo ta_option( 'features_title' ); } ?></h2>
						<p><?php if ( ta_option( 'features_description' ) != '' ) { echo ta_option( 'features_description' ); } ?></p>

<aside id="ta_music_tweets_widget-7" class="widget-footer widget_ta_music_tweets_widget"><h3 class="widget-title"><i class="fa fa-twitter"></i>Dons Tweets</h3><ul class="tweets"><li>Just uploaded "Don redfox - new guy on earth mix" as a Cloudcast to <a href="http://twitter.com/@mixcloud" target="_blank">@mixcloud</a> <a href="http://t.co/uuQoTosash" target="_blank">http://t.co/uuQoTosash</a> Listen up! <a href="http://twitter.com//status/500380822810398721">2 years ago</a></li><li>Listen to my new Cloudcast on Mixcloud at <a href="http://t.co/Rpk2B7n95o" target="_blank">http://t.co/Rpk2B7n95o</a> check it out now! <a href="http://twitter.com//status/332306615313235968">3 years ago</a></li><li>Just uploaded "Konch mix .005 "krack a konch"" to <a href="http://twitter.com/@mixcloud" target="_blank">@mixcloud</a> <a href="http://t.co/Rpk2B7n95o" target="_blank">http://t.co/Rpk2B7n95o</a> Tune in now! <a href="http://twitter.com//status/332305813072920577">3 years ago</a></li><li>Just favorited "1982 - Larry Levan @ Paradise Garage (DHP 7, 25)" Cloudcast by oldschool on Mixcloud <a href="http://t.co/BxKKCMdtjz" target="_blank">http://t.co/BxKKCMdtjz</a> <a href="http://twitter.com//status/325504993111187456">3 years ago</a></li><li>Just favorited "Manny Cuevas &amp; Chris Aquilo 'Tag-Team Mix' on Radi..." Cloudcast by DJMTRAXXX on Mixcloud <a href="http://t.co/ey92y7U7TZ" target="_blank">http://t.co/ey92y7U7TZ</a> <a href="http://twitter.com//status/325309964593815552">3 years ago</a></li><li>pt 420 <a href="http://t.co/xRN2cSi8xY" target="_blank">http://t.co/xRN2cSi8xY</a>  via <a href="http://twitter.com/@makepixelart" target="_blank">@makepixelart</a> <a href="http://twitter.com//status/322896804905644032">3 years ago</a></li></ul><a class="pull-right" href="http://twitter.com/">Follow Don</a></aside>					</div><!-- end welcome message -->



				</div>
			<?php
				if ( ta_option( 'header_slider' ) != '') :
				foreach( $ta_option['header_slider'] as $header_slide ) :
			?>
				<li>
					<div class="container">
						<h1><?php echo $header_slide['title']; ?></h1>
						<p><?php echo $header_slide['description']; ?></p>
						</div>
				</li>

			<?php
				endforeach;
				endif;
			?>
			</ul><!--.end slides -->
		</div>
	</section>
	<?php endif; ?>

	<?php if ( ta_option( 'disable_features') == '1' ) : ?>
	<!-- features area -->
	<section id="features">
		<div class="container">
			<!-- welcome message -->

		</div>
			<!-- features -->


	</section>
	<?php endif; ?>

	<!-- main content area -->


<?php get_footer(); ?>
