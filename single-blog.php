<?php
/*
Template Name: single-blog
Template Post Type: blog,
*/
?>
<?php get_header();?>

<div class="main col-md-10" id="single">
    <div class="single_top_img">
        <h1><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single_title_blog.svg"
                alt="Blog"></h1>
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
                    <?php $image01 =  get_field('image01')['url'];?>
                    <div>
                        <img src="<?php echo $image01;?>" alt=""
                            class="w-75">
                    </div>
                </div>
                <div class="main_text">
                    <?php the_content();?>
                </div>
                <div class="single_sub_img">
                    <div class="employees_img">
                        <?php $sub_img02 =  get_field('image02')['url'];?>
                        <?php if ($sub_img02):?>
                        <div class="img_flame">
                            <a href="<?php echo $sub_img02?>">
                                <img src="<?php echo $sub_img02;?>"
                                    alt="" class="shadow">
                            </a>
                        </div>
                        <?php endif?>

                        <?php $sub_img03 =  get_field('image03')['url'];?>
                        <?php if ($sub_img03):?>
                        <div class="img_flame">
                            <a href="<?php echo $sub_img03?>">
                                <img src="<?php echo $sub_img03;?>"
                                    alt="" class="shadow">
                            </a>
                        </div>
                        <?php endif?>

                        <?php $sub_img04 =  get_field('image04')['url'];?>
                        <?php if ($sub_img04):?>
                        <div class="img_flame">
                            <a href="<?php echo $sub_img04?>">
                                <img src="<?php echo $sub_img04;?>"
                                    alt="" class="shadow">
                            </a>
                        </div>
                        <?php endif?>
                        <?php $sub_img05 =  get_field('image05')['url'];?>
                        <?php if ($sub_img05):?>
                        <div class="img_flame">
                            <a href="<?php echo $sub_img05?>">
                                <img src="<?php echo $sub_img05;?>"
                                    alt="" class="shadow">
                            </a>
                        </div>
                        <?php endif?>
                    </div>
                </div>
            </div>
        </article>

        <?php endwhile; endif; ?>
        <div class="pre_next_link">
            <?php previous_post_link('&#139; %link', '前の記事へ'); ?>
            <?php next_post_link('%link &#155;', '次の記事へ'); ?>
        </div>
        <div class="to_list">
            <a
                href="<?php echo get_post_type_archive_link('blog'); ?>">ブログ一覧を見る</a>
        </div>
    </div>


</div>
<?php get_footer();
