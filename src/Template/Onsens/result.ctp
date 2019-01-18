<!--Template/Onsens/result.ctp-->

	<!--<h2>単体画像</h2>-->
	<!--<ul class="slider single-item">-->
	<!--	<li><img src="http://gimmicklog.main.jp/demo/images/main-bnr/01-600x300.jpg" alt=""></li>-->
	<!--	<li><img src="http://gimmicklog.main.jp/demo/images/main-bnr/01-600x300.jpg" alt=""></li>-->
	<!--</ul>-->


<?php if($name !== ""): ?>
  <div class="retrieval">
  <?php
  echo $name."の検索結果";
  ?>
<?php endif; ?>

<p class="onsens_hit"><?=$count?>件表示されました。</p>
</div>


 <?php foreach ($onsens as $onsen) {?>
 　
 <!--<pre>-->
 <!--<?php print_r($onsen); ?>-->
 <!--</pre>-->
 
 <div class="onsens">
 
 <div class="onsens_image slider single-item">
  <ul class="slider single-item">
    <li><?= $this->Html->image('/webroot/files/Onsens/image_file/' . $onsen->img_file1, ['width' => '400px','height' => '500px','class' => 'img']) ?></li>
   <li><?= $this->Html->image('/webroot/files/Onsens/image_file/' . $onsen->img_file2, ['width' => '400px','height' => '500px','class' => 'img']) ?></li>
   <li><?= $this->Html->image('/webroot/files/Onsens/image_file/' . $onsen->img_file3, ['width' => '400px','height' => '500px','class' => 'img']) ?></li>
  </ul>
 </div>
   <br>
   
   <div class="onsens_info">
    <!--※""内にechoしてあげないとないと文字列として認識されてしまうため注意  -->
   <a href="<?= $onsen->link ?>"><?= $onsen->name?></a>  
   <p><?= $onsen->title ?></p>
   <?= "予算:　".$onsen->budget->name ?>
   <br>
    <?php echo "利用シーン："; ?>
    
    <?php
    for($i=0;$i<count($onsen->scenes); $i++){
     
      echo $onsen->scenes[$i]["name"];
      
      if($i == count($onsen->scenes)-1){   //利用シーンの個数から-1なので、最後の利用シーンが選択される。
      }else{
       echo "、";
      }
    }
    ?>
    <!--foreachを使う場合-->
    <!--<?php foreach ($onsen->scenes as $scene) {?>-->
    <!--<?= $scene->name ?>-->
    <!--<?php  } ?>-->
    <br>
    <?= "エリア:　".$onsen->area->name ?>
    <br>
    <?php echo "設備："; ?>
    
    <?php
    for($i=0;$i<count($onsen->facilities); $i++){
     
      echo $onsen->facilities[$i]["name"];
      
      if($i == count($onsen->facilities)-1){   //設備の個数から-1なので、最後の設備が選択される。
      }else{
       echo "、";
      }
    }
    ?>
    <!--foreachを使う場合-->
    <?php foreach ($onsen->facilities as $facility) {?>
       <!--<?= $facility->name."、" ?>-->
    <?php  } ?>
    
    
    <!--<?php $review=$onsen->reviews ?>-->
    
 </div>
 <?= $this->Html->link(__('口コミを見る'), ['controller'=>'Onsens', 'action'=>'review',$onsen->id], ['class'=>'button']); ?>
 <?= $this->Html->link(__('口コミを書く'), ['controller'=>'Reviews', 'action'=>'add',$onsen->id], ['class'=>'button']); ?>
 </div>
 <?php  } ?>
