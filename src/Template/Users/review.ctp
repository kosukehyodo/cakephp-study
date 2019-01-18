
<h3 class="name"><?= $user->username ?>さんの投稿</h3>

<?php foreach ($user->reviews as $review) {?>
 <div class="user_review_view">
  <div class="main">     
   <div class="link">
    <a href="<?= $review->onsen->link ?>"><?= $review->onsen->name?></a>  
   </div>
   
    <span class="miura-star-rating">
      
      <?php for($i = 0; $i < $review->score; $i++){ ?>
       echo "<i></i>";
      <?php } ?>
     
     </span>
    
     <div class="score">点数:<?= $review->score ?>.0<br></div>
     <div class="body-text"><?= $review->body ?><br></div>
     <div class="r_garally">
         <?= $this->Html->image('/webroot/files/Reviews/image_file/' . $review->image_file, ['width' => '120px','height' => '100px']) ?>
         <?= $this->Html->image('/webroot/files/Reviews/image_file2/' . $review->image_file2, ['width' => '120px','height' => '100px','class' => 'image']) ?>
         <?= $this->Html->image('/webroot/files/Reviews/image_file3/' . $review->image_file3, ['width' => '120px','height' => '100px','class' => 'image']) ?>
       </div>
       <?=
      $this->Form->postLink(
        '[削除する]',
        ['controller'=>'Users', 'action'=>'delete', $review->id],
        ['confirm'=>'本当に消してよろしいでしょうか?','class'=>'remove']
      );
    ?>
    <span class="created"><?= $review->created ?>が投稿日時</span><br>
    
   </div>    
  </div>
   
<?php  } ?>
   <?= $this->Html->link(__('↩戻る'), ['controller'=>'Users', 'action'=>'search'], ['class'=>'button']); ?>