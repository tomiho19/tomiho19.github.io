<?php get_header(); ?>

    <section id="about" class="s_about bg_light">
        <div class="section_header">
            <h2><?php
                $idObj = get_category_by_slug('s_about');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></h2>
            <div class="s_desc_wrap">
                <div class="s_desc"><?php
                    echo category_description($id);
                    ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">



                                    <?php if ( have_posts() ) : query_posts('cat='.$id);
                                        while (have_posts()) : the_post(); ?>
                                            <div class="col-md-4 col-md-push-4 animation_center">
                                                <h3>Фото</h3>
                                                <div class="person">
                                                    <?php if ( has_post_thumbnail() ) : ?>
                                                        <a class="popup" href="<?php
                                                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                                        echo $large_image_url[0];
                                                        ?>"><?php the_post_thumbnail(array(220, 220)); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-pull-4 animation_left">
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content(); ?>
                                            </div>
                                        <? endwhile; endif; wp_reset_query(); ?>

                                    <div class="col-md-4 animation_right personal_last_block">
                                        <h2 class="personal_header">АЛЕКСЕЙ СИДОРЕНКО</h2>
                        <ul>
                            <li>Cоздание сайтов,разработка дизайна,HTML верстка,посадка на cms(Wordpress)</li>
                            <li>День рождения : 29 Декабря 1998 года</li>
                            <li>Номер телефона : 380992314525/380971313706</li>
                            <li>E-mail : <a href="http://localhost:3000/sandrez.spartanell@gmail.com">sandrez.spartanell@gmail.com</a></li>
                        </ul>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

    <section id="resume" class="s_resume">
        <div class="section_header">
            <h2><?php
                $idObj = get_category_by_slug('s_resume');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></h2>
            <div class="s_desc_wrap">
                <div class="s_desc"><?php
                    echo category_description($id);
                    ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="resume_container">
                        <div class="col-md-6 col-sm-6 left">
                            <h3><?php
                                $idObj = get_category_by_slug('c_work');
                                $id = $idObj->term_id;
                                echo get_cat_name($id); ?></h3>
                            <div class="resume_icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>

                            <?php if ( have_posts() ) : query_posts('cat=' . $id);
                                while (have_posts()) : the_post(); ?>
                                    <div class="resume_item">
                                        <div class="year" style="font-size: 15px;"><?php echo get_post_meta($post->ID, 'resume_years', true); ?></div>
                                        <div class="resume_desc" style="font-size: 15px;">
                                            <?php echo get_post_meta($post->ID, 'resume_place', true); ?><br/>
                                            <strong><?php the_title(); ?></strong>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                <? endwhile; endif; wp_reset_query(); ?>
                        </div>
                        <div class="col-md-6 col-sm-6 right">
                            <h3><?php
                                $idObj = get_category_by_slug('c_edu');
                                $id = $idObj->term_id;
                                echo get_cat_name($id) ?></h3>
                            <div class="resume_icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <?php if ( have_posts() ) : query_posts('cat=' . $id);
                                while (have_posts()) : the_post(); ?>
                                    <div class="resume_item">
                                        <div class="year" style="font-size: 15px;"><?php echo get_post_meta($post->ID, 'resume_years', true); ?></div>
                                        <div class="resume_desc" style="font-size: 15px;">
                                            <strong><?php the_title(); ?></strong><br/>
                                            <?php echo get_post_meta($post->ID, 'resume_place', true); ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                <? endwhile; endif; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="s_portfolio bg_dark">
        <div class="section_header">
            <h2><?php
                $idObj = get_category_by_slug('s_portfolio');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></h2>
            <div class="s_desc_wrap">
                <div class="s_desc"><?php
                    echo category_description($id);
                    ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="filter_div controls">
                        <ul>
                            <li class="filter active" data-filter="all">Все работы</li>
                            <li class="filter" data-filter=".sites">Сайты</li>
                            <li class="filter" data-filter=".identy">Айдентика</li>
                            <li class="filter" data-filter=".logos">Логотипы</li>
                        </ul>
                    </div>
                    <div id="portfolio_grid">
                        <?php if ( have_posts() ) : query_posts('cat=' . $id);
                            while (have_posts()) : the_post(); ?>

                                <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item <?php
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                    foreach($tags as $tag) {
                                        echo ' ' . $tag->name;
                                    }
                                }
                                ?>  ">
                                    <?php the_post_thumbnail(array(400, 300)); ?>
                                    <div class="port_item_cont">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                        <a href="#" class="popup_content">Посмотреть</a>
                                    </div>
                                    <div class="hidden">
                                        <div class="podrt_descr">
                                            <div class="modal-box-content">
                                                <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content(); ?>
                                                <img src="<?php
                                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                                echo $large_image_url[0];
                                                ?>" alt="<?php the_title(); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <? endwhile; endif; wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="s_contacts bg_light">
        <div class="section_header">
            <h2><?php
                $idObj = get_category_by_slug('s_contacts');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></h2>
            <div class="s_desc_wrap">
                <div class="s_desc"><?php
                    echo category_description($id);
                    ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-geolocalize-05"></div>
                            <h3>Адрес:</h3>
                            <p><?php
                                $options = get_option('sample_theme_options');
                                echo $options['addresstext']; ?></p>
                        </div>
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-smartphone"></div>
                            <h3>Телефон:</h3>
                            <p><?php
                                $options = get_option('sample_theme_options');
                                echo $options['phonetext']; ?></p>
                        </div>
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-webpage-img-txt"></div>
                            <h3>Веб-сайт:</h3>
                            <p><a href="//<?php
                                $options = get_option('sample_theme_options');
                                echo $options['sitetext']; ?>" target="_blank"><?php
                                    $options = get_option('sample_theme_options');
                                    echo $options['sitetext']; ?></a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form action="http://formspree.io/agragregra@ya.ru" class="main_form" novalidate target="_blank" method="post">
                            <label class="form-group">
                                <span class="color_element">*</span> Ваше имя:
                                <input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> Ваш E-mail:
                                <input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> Ваше сообщение:
                                <textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
                                <span class="help-block text-danger"></span>
                            </label>
                            <button>Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>