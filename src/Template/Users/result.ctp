<!--Template/Users/result.ctp-->
<h1>東京おんせん部</h1>


 <?php foreach ($onsens as $onsen) {?>
 <!--<pre>-->
 <!--<?php print_r($onsen); ?>-->
 <!--</pre>-->
   <br>
   <?= $onsen->name ?>
   <?= $onsen->title ?>
   <?= $onsen->budget->name ?>
   
   
    <?php foreach ($onsen->scenes as $scene) {?>
       <?= $scene->name ?>
    <?php  } ?>
    <?= $onsen->area->name ?>
    <?php foreach ($onsen->facilities as $facility) {?>
       <?= $facility->name ?>
    <?php  } ?>
 <?php  } ?>