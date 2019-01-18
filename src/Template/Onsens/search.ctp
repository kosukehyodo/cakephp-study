<?php
$this->assign('title', 'Onsens search');
?>

<div class="retrieval">
  <?php

    echo $this->Form->create(null,[
    'url'=>['controller'=>'Onsens','action'=>'result']
     ]);

    
    // 今はユーザーを直接記述
    echo $this->Form->control('name',['label' => false,'placeholder' => '温泉を検索','class' => 'kensaku']);
     ?>
</div>
<h2 class="heading">こだわり</h2>
<div class="bk">
<div class="bk1">
 <div class="budget">
<?php 
    
    //セレクトボックス 予算
    $s_budget = [];
    foreach ($budgets as $budget) {
  
     $s_budget += array($budget->id => $budget->name);
     //print_r($s_budget);
    }
  
    
    echo "<h4>予算</h4>";
    
    echo $this->Form->select('budget', $s_budget, ['default' => '0','label' => false,'empty' => '指定なし' ,'class' => 'budget_select' ]);
?>
</div>
<div
class="scene">
<?php 
    //チェックボックス 利用シーン
    
    $s_scene = [];
    foreach ($scenes as $scene) {
     
     $s_scene += array($scene->id => $scene->name);
     //print_r($s_scene);
    }
    
    echo "<h4>利用シーン</h4>";
    echo "<div class='check1'>";
    echo $this->Form->select('scenes', $s_scene, array('multiple' => 'checkbox'));
    echo "</div>";
?>
 </div>    
</div>
<div class="bk2">
 <div class="area">
<?php     
    //リンク　エリア選択
    
    $s_area = [];
    foreach ($areas as $area) {
  
     $s_area += array($area->id => $area->name);
     //print_r($s_area);
    }
    
    echo "<h4>エリア</h4>";
    
    echo $this->Form->select('area', $s_area, ['default' => '0','label' => false,'empty' => '指定なし','class' => 'area_select' ]);
 ?>
</div>    
<div class="facility">
<?php     
    //チェックボックス 設備
    
    $s_facility = [];
    foreach ($facilities as $facility) {
  
     $s_facility += array($facility->id => $facility->name);
     //print_r($s_facility);
    }
    
    echo "<h4>設備</h4>";
    echo "<div class='check2'>";
    echo $this->Form->select('facilities', $s_facility, array('multiple' => 'checkbox'));
    echo "</div>";
    
    
    echo $this->Form->button(__('検索'));
    echo $this->Form->end();
?>
 </div>
</div> 
</div>
</div>    
