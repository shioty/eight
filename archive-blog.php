<?php get_header();?>

<div class="main col-md-10" id="archive">
    <div class="single_top_img">
        <h1><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single_title_blog.svg"
                alt="Blog"></h1>
    </div>
    <div class="container px-2 content_wrap">
        <?php
  $args = [
    'post_type' => 'blog',
    'posts_per_page' =>4,
    'paged' => get_query_var('paged', 1)
  ];
  $my_query = new WP_Query($args); ?>
        <div class="section-title">
            <h2 class="text-center">Blog</h2>
        </div>
        <div class="blog-detail">
            <?php if ($my_query->have_posts()):?>
            <ul class="blog_contents_list">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li class="blog_content">
                    <a href="<?php the_permalink(); ?>">
                        <figure><?php the_post_thumbnail('large'); ?>
                        </figure>
                        <h3><?php the_title(); ?>
                        </h3>
                        <?php
            $post_year = get_the_date('Y');
            $post_month = get_the_date('n');
            $post_day = get_the_date('d');?>
                        <p class="date text-right text-white"><?php echo($post_year.'年'.$post_month.'月'.$post_day.'日')?>
                        </p>
                        </p>
                        <?php the_excerpt(); ?>

                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php else:?>
            <p>まだ投稿がありません。</p>
            <?php endif; wp_reset_postdata(); ?>
        </div>
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
