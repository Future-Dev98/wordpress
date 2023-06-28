<?php
//news
$news = get_field('news');
$n_subtitle = $news['sub-title'];
$n_title = $news['title'];
$n_items = $news['news_item'];
if ($news && $n_items && ($n_title || $n_subtitle)) : ?>
    <div class="news">
        <div class="container">
            <?php if ($n_subtitle) : ?>
                <p class="subtitle"><?= $n_subtitle ?></p>
            <?php endif;
            if ($n_title) : ?>
                <h2 class="title"><?= $n_title ?></h2>
            <?php endif; ?>
            <div class="items owl-carousel">
                <?php foreach ($n_items as $item) :
                    $image = has_post_thumbnail($item->ID) ? get_the_post_thumbnail_url($item->ID, 'full') :
                             get_template_directory_uri() . '/assets/images/placeholder-image.png';
                    ?>
                    <div class="item">
                        <div class="image">
                            <img src="<?= $image ?>" alt="<?php bloginfo('name') ?>">
                            <a href="<?= get_post_permalink($item->ID) ?>" class="btn"></a>
                        </div>
                        <div class="title-excerpt">
                            <a href="<?= get_post_permalink($item->ID) ?>"><?= $item->post_title ?></a>
                            <?php if ($item->post_excerpt) : ?>
                                <div class="excerpt">
                                    <?= $item->post_excerpt ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif;