<?php
//about us
$about_us = get_field('about_us');
$about_subtitle = $about_us['sub_title'];
$about_title = $about_us['title'];
$about_content = $about_us['content'];
$about_buttonlink = $about_us['button_link'];
$about_leftimage = $about_us['left_image'];

if ($about_title || $about_leftimage) : ?>
    <div class="about-us">
        <div class="container">
            <?php if ($about_title || $about_subtitle || $about_content || $about_buttonlink) : ?>
                <div class="col-left">
                    <?php if ($about_subtitle) : ?>
                        <p class="subtitle"><?= $about_subtitle ?></p>
                    <?php endif; ?>
                    <?php if ($about_title) : ?>
                        <div class="title"><?= $about_title ?></div>
                    <?php endif;
                    if ($about_content) : ?>
                        <p class="content"><?= $about_content ?></p>
                    <?php endif;?>
                    <?php if ($about_buttonlink) : 
                            $btn_title = $about_buttonlink['title'];
                            $btn_url = $about_buttonlink['url'] ?? '#';
                            $btn_target = $about_buttonlink['target'] ?? '_self';
                            ?>
                            <a href="<?= $btn_url ?>" class="btn" target='<?= $btn_target ?>'>
                                <?= $btn_title ?>
                            </a>
                    <?php endif; ?>
                </div>
            <?php endif;
            if ($about_leftimage) : ?>
                <img src="<?= $about_leftimage ?>" alt="<?php bloginfo('name') ?>">
            <?php endif;?>
        </div>
    </div>
<?php endif;?>