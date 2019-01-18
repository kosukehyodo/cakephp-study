<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
 
//  debug($reviews);
?>

<div class="review_view">
    <?php foreach ($reviews->onsens as $onsen) {?>
    <legend><?= $onsen->name?>の口コミ</legend>
        <div class="bk">
            
        </div>
    <?php  } ?>
</div>