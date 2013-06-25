<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/plg6yzj.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<!-- end Typekit -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <script>
        $(document).ready(function() {
            // hides the slickbox as soon as the DOM is ready
            $('.about').hide();
            $('.news').hide();
            $('.contact').hide();
 
            $('.menu-item-4 a').click(function() {
                $('.about').delay(500).slideToggle(500);
                $(".news").filter(":visible").slideToggle(500);
                $(".contact").filter(":visible").slideToggle(500);
                return false;
            });

            $('.menu-item-5 a').click(function() {
                $('.about').filter(":visible").slideToggle(500);
                $(".news").delay(500).slideToggle(500);
                $(".contact").filter(":visible").slideToggle(500);
                return false;
            });

            $('.menu-item-6 a').click(function() {
                $('.about').filter(":visible").slideToggle(500);
                $(".news").filter(":visible").slideToggle(500);
                $(".contact").delay(500).slideToggle(500);
                return false;
            });

             $('.about-overlay-close').click(function() {
                $('.about').filter(":visible").slideToggle(500);
                return false;
            });

             $('.news-overlay-close').click(function() {
                $('.news').filter(":visible").slideToggle(500);
                return false;
            });

              $('.contact-overlay-close').click(function() {
                $('.contact').filter(":visible").slideToggle(500);
                return false;
            });
        });
    </script>


	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
                    <div class="overlay-elements">
                        <div class="about">
                            <h3>Lydia K</h3>
                            <p><?php the_field('about_content_field'); ?></p>
                            <div class="about-overlay-close"></div>
                        </div>
                        <div class="news">
                            <h3>News</h3>
                            <p><?php the_field('news_content_field'); ?></p>
                            <div class="news-overlay-close"></div>
                        </div>
                        <div class="contact">
                         <h3>Contact</h3>
                            <div class="contact-details">
                                <p><?php the_field('address'); ?></p>
                                <p>Call: <?php the_field('telephone'); ?></p>
                                <p>Email: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                                <p>Find me elsewhere online:<br>
                                    <a class="facebook-link" href="<?php the_field('facebook_url'); ?>" target="_blank">Facebook Link</a>
                                    <a class="tumblr-link" href="<?php the_field('tumblr_url'); ?>" target="_blank">Tumblr Link</a>
                                </p> 
                            </div><!-- end .contact-details -->
                            <div class="contact-description">
                                <p><?php the_field('contact_description'); ?></p>
                                <p><a href="<?php the_field('map_link'); ?>" target="_blank">View a map of the studio</a></p>
                            </div><!-- end .contact-description -->
                            <div class="clearfix"></div>
                            <div class="contact-overlay-close"></div>
                        </div>
                    </div><!-- /.overlay-elements -->
					
                    <nav role="navigation">
                       


						<?php bones_main_nav(); ?>
					</nav>

					<section class="masthead">
						<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
						<h1>Gem Tattoo</h1>
						<p class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
						<h1>Lydia K</h1>
					</section> <!-- end .masthead __>


				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
