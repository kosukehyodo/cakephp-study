<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<div class="reviews form large-9 medium-8 columns content">
    <?= $this->Form->create($review, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Review') ?></legend>
        
        　　
          <!--  <p>タイトル</p>-->
        　　<!--<?= $this->Form->control('title',['label' => false]) ?>-->
       　　  <p>本文</p>
            <?= $this->Form->control('body',['label' => false]) ?>
            
            
            <!--<input type="hidden" name="onsen_id" value="1" />-->
            <!--<input type="hidden" name="user_id" value="1" />-->
            
            <p class="score">評価</p>
            <span class="star-rating">
            <input type="radio" name="score" value="1"><i></i>
            <input type="radio" name="score" value="2"><i></i>
            <input type="radio" name="score" value="3"><i></i>
            <input type="radio" name="score" value="4"><i></i>
            <input type="radio" name="score" value="5"><i></i>
            </span>
            
            <p class="filetext">お写真</p>
            <div class="file">
            <?= $this->Form->file('image_file',['class' => 'file1']); ?>
            <?= $this->Form->file('image_file2',['class' => 'file2']); ?>
            <?= $this->Form->file('image_file3',['class' => 'file2']); ?>
    　　      </div>
            
        
    </fieldset>
    <?= $this->Form->button(__('登録する')) ?>
    <?= $this->Html->link(__('戻る'), ['controller'=>'Onsens', 'action'=>'result'], ['class'=>'button']); ?>
    <?= $this->Form->end() ?>
</div>
