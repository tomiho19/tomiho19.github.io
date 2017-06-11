<footer class="main_footer bg_dark" >
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<p>&copy; 2017-<?php echo date("Y")?> Алексей Сидоренко</p></div>
			</div>
		</div>
    <div class="social_wrap">
        <ul>
            <?php
            $idObj = get_category_by_slug('socials');
            $id = $idObj->term_id;
            if ( have_posts() ) : query_posts('cat=' . $id);
                while (have_posts()) : the_post(); ?>
                    <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
                <? endwhile; endif; wp_reset_query(); ?>
        </ul>
    </div>

</footer>
	<div class="hidden"></div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri();?>/js/scripts.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/magnific-popup/mixitup.min.js"></script>
	<?php wp_footer();?>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>