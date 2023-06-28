<?php
//slider
$slider = get_field('slider');

if ($slider && count($slider)) : ?>
    <div class="slider">
        <div class="items owl-carousel">
        <?php foreach ($slider as $item) :
                $image = $item['image'] ? $item['image'] : get_template_directory_uri() . '/assets/images/placeholder-image.jpg';
                $title = $item['title'];
                $subtitle = $item['sub_title'];
                $button_link = $item['button_link'];
                $small_image = $item['small_image'];
        ?>
            <div class="slide-item">
                <img src="<?= $image ?>" alt="<?php bloginfo('name') ?>" class="bkg-image">
                <div class="slide-content">
                    <?php if ($small_image) : ?>
                    <img src="<?= $small_image ?>" alt="<?php bloginfo('name') ?>" class="small-image">
                    <?php endif; ?>
                    <?php if ($subtitle) : ?>
                        <p class="subtitle"><?= $subtitle ?></p>
                    <?php endif; ?>
                    <p class="title"><?= $title ?></p>
                    <?php if ($button_link) : 
                        $btn_title = $button_link['title'];
                        $btn_url = $button_link['url'] ?? '#';
                        $btn_target = $button_link['target'] ?? '_self';
                        ?>
                        <a href="<?= $btn_url ?>" class="btn" target='<?= $btn_target ?>'>
                            <?= $btn_title ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
<?php endif;