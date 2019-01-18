<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
 
// debug($onsen->all());
?>

      <!--確認用-->
      <!--<div class="says">-->
      <!--  <p>左ふきだし文</p>-->
      <!--</div>-->

  

<!--テンプレ-->
<!--<div class="clearfix">-->
<!--    <div class="r_left">-->
<!--        <img src="/webroot/files/Users/image_file/p1.jpg" width="80px" height="80px" alt="">-->
<!--        <p>miura7</p>-->
<!--        <p>50代/男性</p>-->
<!--    </div>-->
<!--    <div class="r_right">-->
<!--        <h3>雰囲気が良かった</h3>-->
<!--        <p>最高でした。夜景も楽しめましたよb</p>-->
<!--        <span class="miura-star-rating">-->
<!--         <i></i><i></i><i></i>-->
<!--        </span>-->
<!--        <span class="score">点数:5.0</span>-->
        
<!--        <div class="r_garally">-->
<!--            <img src="/webroot/files/Reviews/image_file/o1.jpg" width="120px" height="100px" alt="">-->
<!--            <img src="/webroot/files/Reviews/image_file/o1.jpg" width="120px" height="100px" alt="">-->
<!--            <img src="/webroot/files/Reviews/image_file/o1.jpg" width="120px" height="100px" alt="">-->
<!--        </div>-->
<!--        <p class="r_regis">投稿日 2018年3月1日</p>-->
<!--    </div>-->
<!--</div>-->
    <!--<?= $this->Html->link(__('↩戻る'), ['controller'=>'Onsens', 'action'=>'result'], ['class'=>'button']); ?>-->
    
    <h3 class="title"><?= $onsen->name ?>の口コミ</h3>
    
    <?php foreach ($reviews as $review) {?>
    <div class="clearfix">
     
     <div class="r_left">
        <?php if(!empty($review->user->image_file)){ ?>
          <?= $this->Html->image('/webroot/files/Users/image_file/' . $review->user->image_file, ['width' => '80px','height' => '80px']) ?><br>
        <?php } ?>
    
        <?= $review->user->username ?><br>
        <?= $review->user->age ?>/<?php if($review->user->gender==0){ echo "男性"; }else{ echo "女性";}?>
        <!--<?= $review->user->gender ?><br>-->
     </div>
    
    
     <div class="r_right">
      <div class="right says">  
       <span class="miura-star-rating">  
        <?php for($i = 0; $i < $review->score; $i++){ ?>
         echo "<i></i>";
        <?php } ?>
     
       </span>
    
       <span class="score">点数:<?= $review->score ?>.0<br></span>
       <div class="body-text"><?= $review->body ?><br></div>
    
    
       <div class="r_garally">
         <?= $this->Html->image('/webroot/files/Reviews/image_file/' . $review->image_file, ['width' => '120px','height' => '100px']) ?>
         <?= $this->Html->image('/webroot/files/Reviews/image_file2/' . $review->image_file2, ['width' => '120px','height' => '100px','class' => 'image']) ?>
         <?= $this->Html->image('/webroot/files/Reviews/image_file3/' . $review->image_file3, ['width' => '120px','height' => '100px','class' => 'image']) ?>
       </div>
　　   <div class="r_regis"><?= $review->created ?>が投稿日時</div>
　　  </div> 
　　 </div>
    </div>
    <?php  } ?>
    
