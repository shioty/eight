<?php get_header()?>
<div class="main col-md-10" id="main">
    <section class="topimg">
        <div id="demo-1"
            data-zs-src='["<?php echo esc_url(home_url('/wp-content/themes/eight/img/img1.jpg'));?>", "<?php echo esc_url(home_url('/wp-content/themes/eight/img/img2.jpg'));?>", "<?php echo esc_url(home_url('/wp-content/themes/eight/img/img3.jpg'));?>"]'
            data-zs-speed="8000" data-zs-switchSpeed="800" data-zs-interval="4500" data-zs-overlay="dots">
            <div class="inner-content">
                <h1 class="text-center"><img
                        src="<?php echo esc_url(home_url('/wp-content/themes/eight/img/mainLogoImgLG.png'));?>"
                        alt=""></h1>
                <p class="catch text-center">Precious & Elegant</p>
                <div class="catch-respon text-center">
                    <p>Precious</p>
                    <p>&</p>
                    <p>Elegant</p>
                </div>
            </div>
        </div>
    </section>
    <div class="responsive">
        <section class="concept" id="concept">
            <div class="section-img-left col-md-6">
                <img src="<?php echo esc_url(home_url('/wp-content/themes/eight/img/conceptImg.jpg'));?>"
                    alt="">
            </div>
            <div class="section-desc-right col-md-6">
                <h2>Concept</h2>
                <p class="philosophy">
                    優雅に、そして極上な時間を貴方に過ごしていただきたい。それをコンセプトとして私たちは誕生いたしました。<br>慌ただしい日々に忙殺され、心に潤いや余裕がなくなりつつある現代社会のオアシスとして
                    私たちはいつもここにいます。<br>きっとお目にかかれると信じて、皆様のご来店心よりお待ちしております。</p>
            </div>
        </section>
        <section class="system" id="system">
            <div class="section-img-right col-md-6">
                <img src="<?php echo esc_url(home_url('/wp-content/themes/eight/img/syesteImg.jpg'));?>"
                    alt="">
            </div>
            <div class="section-desc-left col-md-6">
                <h2>System</h2>
                <table>
                    <tr>
                        <th>セット料金</th>
                        <td>カウンター　￥5,000<br>
                            ボックス　￥5,000</td>
                    </tr>
                    <tr>
                        <th>ボトルキープ</th>
                        <td>焼酎：5,000円～<br>
                            ウイスキー：12,000円～<br>
                            ブランデー：13,000円～</td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="about_us section_content" id="about_us">
            <div class="section-img-left col-md-6">
                <img src="<?php echo esc_url(home_url('/wp-content/themes/eight/img/aboutImg.jpg'));?>"
                    alt="">
            </div>
            <div class="section-desc-right col-md-6">
                <h2>About us</h2>
                <p>岡山市北区中央町1-23 中央町ビル5F<br>
                    <span class="stel">TEL:086-000-0000</span><br>
                    営業時間：21時～26時<br>
                    定休日:日曜日
                </p>
            </div>
        </section>
        <section class="access section_content" id="access">
            <div class="section-title">
                <h2 class="text-center">Access</h2>
            </div>
            <div class="map">
                <div class="map_wrapper">
                    <div class="googlemap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4641.030181086043!2d133.93462738736224!3d34.662179786713935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554062e28a88b9f%3A0xebc5c5fb774fc417!2z5bKh5bGx55yM5bqB!5e0!3m2!1sja!2sjp!4v1572071823158!5m2!1sja!2sjp"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery section_content" id="gallery">
            <div class="section-title">
                <h2 class="text-center">Gallery</h2>
            </div>
            <div class="gallery-list">
                <ul class="flexbox">
                    <?php $list = 8; ?>
                    <?php for ($i = 0; $i < $list; ++$i): ?>
                    <li class="gallery-box"><a
                            href="<?php echo esc_url(home_url('/wp-content/themes/eight/img/'.$i.'.jpg'));?>"><img
                                src="<?php echo esc_url(home_url('/wp-content/themes/eight/img/'.$i.'.jpg'));?>"
                                alt=""></a>
                    </li>

                    <?php endfor; ?>
                </ul>
            </div>
        </section>
        <section class="news section_content" id="news">
            <div class="section-title">
                <h2 class="text-center">News</h2>
            </div>
            <!--/section_header-->
            <!--投稿ループ開始-->
            <?php
               $posts = get_posts([
                'posts_per_page' => 5,
                'category' => '4,12,13',
                ]);
                ?>
            <ul class="news-list">
                <!--ループ開始-->
                <?php if ($posts):
                foreach ($posts as $post):setup_postdata($post); ?>

                <li class="item">
                    <a href="<?php the_permalink(); ?>">
                        <p class="date"><?php the_time('Y/m/d'); ?>
                        </p>
                        <?php $category = get_the_category();
                        $cat_name = $category[0]->cat_name;
                        $cat_class = '';
                        if ($cat_name == 'お知らせ') {
                            $cat_class = 'news_category';
                        } elseif ($cat_name == 'イベント') {
                            $cat_class = 'event_category';
                        } else {
                            $cat_class = 'other_category';
                        }?>
                        <p class="<?php echo $cat_class?>">
                            <span><?php
                        echo $category[0]->cat_name;
                        ?>
                            </span>
                        </p>
                        <p class="title"><?php the_title(); ?>
                        </p>
                    </a>
                </li>

                <?php endforeach; ?>
            </ul>
            <?php else: ?>
            <p>表示できるお知らせはありません。</p>
            <?php endif; ?>
            <!--ループここまで-->
            <!--/お知らせ-->
        </section>
        <section class="blog section_content" id="blog">
            <?php
  $args = [
    'post_type' => 'blog',
    'posts_per_page' => 4,
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
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <div class="to_list">
                    <a
                        href="<?php echo get_post_type_archive_link('blog'); ?>">ブログ一覧を見る</a>
                </div>
                <?php else:?>
                <p>まだ投稿がありません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </section>
        <section class="recruit section_content" id="recruit">
            <div class="section-title">
                <h2 class="text-center">Recruit</h2>
            </div>
            <div class="recruit-detail">
                <table>
                    <tr>
                        <th>職　種</th>
                        <td>フロアレディ</td>
                    </tr>
                    <tr>
                        <th>勤務日</th>
                        <td>週1日〜OK ※日曜店休日</td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td>20:00〜翌1:00の間で1日2時間〜OK</td>
                    </tr>
                    <tr>
                        <th>時　給</th>
                        <td>時給2000円〜＋手当 ※日払い可</td>
                    </tr>
                    <tr>
                        <th>待　遇</th>
                        <td>ノルマなし､体験入店可､無料送迎有､日払い可､Wワーク可､短期可
                            ※レギュラー勤務出来る方優遇</td>
                    </tr>
                    <tr>
                        <th>資　格</th>
                        <td>18歳以上､学生･OL･フリーター･
                            未経験者歓迎､経験者優遇</td>
                    </tr>
                    <tr>
                        <th>仕事内容</th>
                        <td>お客様と楽しく会話したり、簡単なお酒を作るだけ!難しく考えずに接客して下さい♪未経験者大歓迎。
                            先輩が優しく教えてくれますので安心です。興味をお持ちの方は下のお問い合わせフォームよりお気軽にお問い合わせください。</td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="contact section_content" id="contact">
            <div class="section-title">
                <h2 class="text-center">Contact</h2>
            </div>
            <p class="cform-attention">お問い合わせ内容によっては、お返事を差し上げるまでにお時間をいただく場合がございます。
                なお当店からお返事させていただくことが適当でない場合には、お返事を差し上げられない場合もございます。
                あらかじめご了承ください。</p>
            <div class="cform">
                <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
            </div>
        </section>
    </div>
    <!--/.responsive-->
</div>
<?php get_footer();
