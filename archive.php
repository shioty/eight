<?php get_header();?>

<div class="main col-md-10" id="archive">
    <div class="single_top_img">
        <h1><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive_title_news.svg"
                alt="Blog"></h1>
    </div>
    <div class="container px-2 content_wrap">

        <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail("medium"); ?>
            <?php the_excerpt(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


        <?php the_posts_pagination(array(
        'mid_size'      => 3, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => '&lt;&#032;前へ', // 「前へ」リンクのテキスト
        'next_text'     => __('次へ&#032;&gt;'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )); ?>

    </div>
</div>
<?php get_footer();
