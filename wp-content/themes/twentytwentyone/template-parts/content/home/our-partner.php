<?php
//our partner
$our_partner = get_field('our_partner');
$op_subtitle = $our_partner['subtitle'];
$op_title = $our_partner['title'];
$op_partners = $our_partner['partners'];
if ($our_partner && count($op_partners) && ($op_subtitle || $op_title)) : ?>
<div class="our-partner">
    <?php if ($op_subtitle ) : ?>
    <p class="subtitle"><?= $op_subtitle ?></p>
    <?php endif;
    if ($op_title) : ?>
    <h2 class="title"><?= $op_title ?></h2>
    <?php endif; ?>
    <div class="partners owl-carousel">
    <?php foreach ($op_partners as $partner) :
        $image = $partner['image'];
        $link = $partner['link']['url'] ? $partner['link']['url'] : '#';
        $target = $partner['link']['target'] ? $partner['link']['target'] : '_self';
    ?>
        <a class="partner" href="<?= $link ?>" target="<?= $target ?>">
            <img src="<?= $image ?>" alt="<?= bloginfo('name') ?>">
        </a>
    <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>