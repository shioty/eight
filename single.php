<?php get_header();?>

<div class="main col-md-10" id="single">
    <div class="single_top_img">
        <h1><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive_title_news.svg"
                alt="News"></h1>
    </div>
    <div class="container px-2 content_wrap">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <div class="post_wrap">
                <div class="single_title_wrap">
                    <h2 class="single_title">
                        <?php the_title(); ?>
                    </h2>
                    <?php
            $post_year = get_the_date('Y');
            $post_month = get_the_date('n');
            $post_day = get_the_date('d');?>

                    <p class="date text-right text-white"><?php echo($post_year.'年'.$post_month.'月'.$post_day.'日')?>
                    </p>
                </div>
                <div class="single_main_img">
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                </div>
                <div class="main_text">
                    <?php the_content();?>
                </div>
            </div>
        </article>

        <?php endwhile; endif; ?>
        <div class="pre_next_link">
            <?php previous_post_link('&#139; %link', '前のお知らせ'); ?>
            <?php next_post_link('%link &#155;', '次のお知らせ'); ?>
        </div>
    </div>


</div>
<?php get_footer();
