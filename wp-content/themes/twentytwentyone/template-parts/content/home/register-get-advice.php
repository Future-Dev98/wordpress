<?php
//register get advice
$register_get_advice = get_field('register_get_advice');
$rga_title = $register_get_advice['title'];
$rga_content = $register_get_advice['content'];
$rga_image = $register_get_advice['image'];
$rga_cf7code = $register_get_advice['cf7_code'];

if ($rga_cf7code) : ?>
<div class="register-get-advice">
    <div class="container">
    <?php if ($rga_title || $rga_content || $rga_image) : ?>
    <div class="col-left">
        <?php if ($rga_title) echo $rga_title;
        if ($rga_content) : ?>
        <div class="content"><?= $rga_content ?></div>
        <?php endif; 
        if ($rga_image) : ?>
            <img src="<?= $rga_image ?>" alt="<?php bloginfo('name') ?>">
        <?php endif; ?>
    </div>
    <?php endif;
    if ($rga_cf7code) : ?>
    <div class="col-right">
        <?= do_shortcode($rga_cf7code); ?>
    </div>
    <?php endif;?>
    </div>
</div>
<?php endif;