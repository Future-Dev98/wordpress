<?php
//training
$training = get_field('training');
$tr_subtitle = $training['sub_title'];
$tr_title = $training['title'];
$tr_items = $training['items'];

if ($training && count($tr_items) && ($tr_subtitle || $tr_title)) : ?>
<div class="training">
    <div class="container">
        <?php if ($tr_subtitle) : ?>
            <p class="subtitle"><?= $tr_subtitle ?></p>
        <?php endif;
        if ($tr_title) : ?>
            <h2 class="title"><?= $tr_title ?></h2>
        <?php endif; ?>
        <div class="items owl-carousel">
        <?php foreach ($tr_items as $item) :
            $title = $item['title'];
            $button_link = $item['button_link'];
            $image = $item['image'];
            $bkg_color = $item['background_color'];
            ?>
            <div class="item" style="background-color: <?= $bkg_color ?>">
                <h4><?= $title ?></h4>
                <?php if ($button_link) : 
                    $btn_title = $button_link['title'];
                    $btn_url = $button_link['url'] ?? '#';
                    $btn_target = $button_link['target'] ?? '_self';
                    ?>
                    <a href="<?= $btn_url ?>" class="btn" target='<?= $btn_target ?>'>
                        <?= $btn_title ?>
                    </a>
                <?php endif;
                if ($image) : ?>
                <img src="<?= $image ?>" alt="<?php bloginfo('name') ?>">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>