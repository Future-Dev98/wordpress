<?php
//review
$review = get_field('review');
$r_subtitle = $review['sub_title'];
$r_title = $review['title'];
if ($r_subtitle || $r_title) : ?>
<div class="review">
    <div class="container">
        <?php if ($r_subtitle) : ?>
            <p class="subtitle"><?= $r_subtitle ?></p>
        <?php endif;
        if ($r_title) : ?>
            <h2 class="title"><?= $r_title ?></h2>
        <?php endif; ?>
    </div>
</div>
<?php endif;