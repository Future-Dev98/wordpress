<?php
//infrastructure
$infrastructure = get_field('infrastructure');
$inf_subtitle = $infrastructure['sub_title'];
$inf_title = $infrastructure['title'];
$inf_content = $infrastructure['content'];
$inf_columns = $infrastructure['columns'];
if (count($inf_columns) && ($inf_title || $inf_subtitle)) : ?>
    <div class="infrastructure">
        <?php if ($inf_subtitle) : ?>
        <p class="suntitle"><?= $inf_subtitle ?></p>
        <?php endif;?>
        <?php if ($inf_title) : ?>
        <h2 class="title"><?= $inf_title ?></h2>
        <?php endif;?>
    </div>
<?php endif;