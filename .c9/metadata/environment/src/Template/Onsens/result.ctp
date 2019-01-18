{"changed":true,"filter":false,"title":"result.ctp","tooltip":"/src/Template/Onsens/result.ctp","value":"<!--Template/Onsens/result.ctp-->\n\n\t<!--<h2>単体画像</h2>-->\n\t<!--<ul class=\"slider single-item\">-->\n\t<!--\t<li><img src=\"http://gimmicklog.main.jp/demo/images/main-bnr/01-600x300.jpg\" alt=\"\"></li>-->\n\t<!--\t<li><img src=\"http://gimmicklog.main.jp/demo/images/main-bnr/01-600x300.jpg\" alt=\"\"></li>-->\n\t<!--</ul>-->\n\n\n<?php if($name !== \"\"): ?>\n  <div class=\"retrieval\">\n  <?php\n  echo $name.\"の検索結果\";\n  ?>\n<?php endif; ?>\n\n<p class=\"onsens_hit\"><?=$count?>件表示されました。</p>\n</div>\n\n\n <?php foreach ($onsens as $onsen) {?>\n 　\n <!--<pre>-->\n <!--<?php print_r($onsen); ?>-->\n <!--</pre>-->\n \n <div class=\"onsens\">\n \n <div class=\"onsens_image slider single-item\">\n  <ul class=\"slider single-item\">\n    <li><?= $this->Html->image('/webroot/files/Onsens/image_file/' . $onsen->img_file1, ['width' => '400px','height' => '500px','class' => 'img']) ?></li>\n   <li><?= $this->Html->image('/webroot/files/Onsens/image_file/' . $onsen->img_file2, ['width' => '400px','height' => '500px','class' => 'img']) ?></li>\n   <li><?= $this->Html->image('/webroot/files/Onsens/image_file/' . $onsen->img_file3, ['width' => '400px','height' => '500px','class' => 'img']) ?></li>\n  </ul>\n </div>\n   <br>\n   \n   <div class=\"onsens_info\">\n    <!--※\"\"内にechoしてあげないとないと文字列として認識されてしまうため注意  -->\n   <a href=\"<?= $onsen->link ?>\"><?= $onsen->name?></a>  \n   <p><?= $onsen->title ?></p>\n   <?= \"予算:　\".$onsen->budget->name ?>\n   <br>\n    <?php echo \"利用シーン：\"; ?>\n    \n    <?php\n    for($i=0;$i<count($onsen->scenes); $i++){\n     \n      echo $onsen->scenes[$i][\"name\"];\n      \n      if($i == count($onsen->scenes)-1){   //利用シーンの個数から-1なので、最後の利用シーンが選択される。\n      }else{\n       echo \"、\";\n      }\n    }\n    ?>\n    <!--foreachを使う場合-->\n    <!--<?php foreach ($onsen->scenes as $scene) {?>-->\n    <!--<?= $scene->name ?>-->\n    <!--<?php  } ?>-->\n    <br>\n    <?= \"エリア:　\".$onsen->area->name ?>\n    <br>\n    <?php echo \"設備：\"; ?>\n    \n    <?php\n    for($i=0;$i<count($onsen->facilities); $i++){\n     \n      echo $onsen->facilities[$i][\"name\"];\n      \n      if($i == count($onsen->facilities)-1){   //設備の個数から-1なので、最後の設備が選択される。\n      }else{\n       echo \"、\";\n      }\n    }\n    ?>\n    <!--foreachを使う場合-->\n    <?php foreach ($onsen->facilities as $facility) {?>\n       <!--<?= $facility->name.\"、\" ?>-->\n    <?php  } ?>\n    \n    \n    <!--<?php $review=$onsen->reviews ?>-->\n    \n </div>\n <?= $this->Html->link(__('口コミを見る'), ['controller'=>'Onsens', 'action'=>'review',$onsen->id], ['class'=>'button']); ?>\n <?= $this->Html->link(__('口コミを書く'), ['controller'=>'Reviews', 'action'=>'add',$onsen->id], ['class'=>'button']); ?>\n </div>\n <?php  } ?>\n","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":72,"column":27},"end":{"row":72,"column":28},"action":"insert","lines":["r"],"id":1108}],[{"start":{"row":75,"column":87},"end":{"row":75,"column":88},"action":"insert","lines":["-"],"id":1109}],[{"start":{"row":75,"column":87},"end":{"row":75,"column":88},"action":"remove","lines":["-"],"id":1110}],[{"start":{"row":72,"column":19},"end":{"row":72,"column":34},"action":"remove","lines":["$onsen->reviews"],"id":1111}],[{"start":{"row":71,"column":4},"end":{"row":72,"column":0},"action":"insert","lines":["",""],"id":1112},{"start":{"row":72,"column":0},"end":{"row":72,"column":4},"action":"insert","lines":["    "]},{"start":{"row":72,"column":4},"end":{"row":73,"column":0},"action":"insert","lines":["",""]},{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":73,"column":4},"end":{"row":73,"column":19},"action":"insert","lines":["$onsen->reviews"],"id":1113}],[{"start":{"row":73,"column":4},"end":{"row":73,"column":11},"action":"insert","lines":["$review"],"id":1114}],[{"start":{"row":73,"column":11},"end":{"row":73,"column":12},"action":"insert","lines":["="],"id":1115}],[{"start":{"row":74,"column":4},"end":{"row":75,"column":15},"action":"remove","lines":["<?php foreach ( as $review) {?>","    <?php  } ?>"],"id":1116}],[{"start":{"row":73,"column":4},"end":{"row":73,"column":5},"action":"insert","lines":["<"],"id":1117},{"start":{"row":73,"column":5},"end":{"row":73,"column":6},"action":"insert","lines":["?"]},{"start":{"row":73,"column":6},"end":{"row":73,"column":7},"action":"insert","lines":["@"]},{"start":{"row":73,"column":7},"end":{"row":73,"column":8},"action":"insert","lines":["j"]}],[{"start":{"row":73,"column":8},"end":{"row":73,"column":9},"action":"insert","lines":["@"],"id":1118}],[{"start":{"row":73,"column":8},"end":{"row":73,"column":9},"action":"remove","lines":["@"],"id":1119},{"start":{"row":73,"column":7},"end":{"row":73,"column":8},"action":"remove","lines":["j"]},{"start":{"row":73,"column":6},"end":{"row":73,"column":7},"action":"remove","lines":["@"]}],[{"start":{"row":73,"column":6},"end":{"row":73,"column":7},"action":"insert","lines":["p"],"id":1120},{"start":{"row":73,"column":7},"end":{"row":73,"column":8},"action":"insert","lines":["h"]},{"start":{"row":73,"column":8},"end":{"row":73,"column":9},"action":"insert","lines":["p"]}],[{"start":{"row":73,"column":9},"end":{"row":73,"column":10},"action":"insert","lines":[" "],"id":1121}],[{"start":{"row":73,"column":33},"end":{"row":73,"column":34},"action":"insert","lines":[" "],"id":1122},{"start":{"row":73,"column":34},"end":{"row":73,"column":35},"action":"insert","lines":["?"]},{"start":{"row":73,"column":35},"end":{"row":73,"column":36},"action":"insert","lines":[">"]}],[{"start":{"row":76,"column":87},"end":{"row":76,"column":88},"action":"insert","lines":["-"],"id":1123},{"start":{"row":76,"column":88},"end":{"row":76,"column":89},"action":"insert","lines":[">"]},{"start":{"row":76,"column":89},"end":{"row":76,"column":90},"action":"insert","lines":["i"]},{"start":{"row":76,"column":90},"end":{"row":76,"column":91},"action":"insert","lines":["d"]}],[{"start":{"row":76,"column":90},"end":{"row":76,"column":91},"action":"remove","lines":["d"],"id":1124},{"start":{"row":76,"column":89},"end":{"row":76,"column":90},"action":"remove","lines":["i"]},{"start":{"row":76,"column":88},"end":{"row":76,"column":89},"action":"remove","lines":[">"]},{"start":{"row":76,"column":87},"end":{"row":76,"column":88},"action":"remove","lines":["-"]}],[{"start":{"row":73,"column":36},"end":{"row":73,"column":39},"action":"insert","lines":["-->"],"id":1125},{"start":{"row":73,"column":4},"end":{"row":73,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":76,"column":86},"end":{"row":76,"column":87},"action":"remove","lines":["w"],"id":1126},{"start":{"row":76,"column":85},"end":{"row":76,"column":86},"action":"remove","lines":["e"]},{"start":{"row":76,"column":84},"end":{"row":76,"column":85},"action":"remove","lines":["i"]},{"start":{"row":76,"column":83},"end":{"row":76,"column":84},"action":"remove","lines":["v"]},{"start":{"row":76,"column":82},"end":{"row":76,"column":83},"action":"remove","lines":["e"]},{"start":{"row":76,"column":81},"end":{"row":76,"column":82},"action":"remove","lines":["r"]},{"start":{"row":76,"column":80},"end":{"row":76,"column":81},"action":"remove","lines":["$"]},{"start":{"row":76,"column":79},"end":{"row":76,"column":80},"action":"remove","lines":[","]}],[{"start":{"row":76,"column":79},"end":{"row":76,"column":90},"action":"insert","lines":[",$onsen->id"],"id":1127}],[{"start":{"row":76,"column":89},"end":{"row":76,"column":90},"action":"remove","lines":["d"],"id":1128},{"start":{"row":76,"column":88},"end":{"row":76,"column":89},"action":"remove","lines":["i"]}],[{"start":{"row":76,"column":88},"end":{"row":76,"column":89},"action":"insert","lines":["r"],"id":1129},{"start":{"row":76,"column":89},"end":{"row":76,"column":90},"action":"insert","lines":["e"]},{"start":{"row":76,"column":90},"end":{"row":76,"column":91},"action":"insert","lines":["v"]}],[{"start":{"row":76,"column":91},"end":{"row":76,"column":92},"action":"insert","lines":["i"],"id":1130},{"start":{"row":76,"column":92},"end":{"row":76,"column":93},"action":"insert","lines":["e"]},{"start":{"row":76,"column":93},"end":{"row":76,"column":94},"action":"insert","lines":["w"]},{"start":{"row":76,"column":94},"end":{"row":76,"column":95},"action":"insert","lines":["s"]}],[{"start":{"row":76,"column":95},"end":{"row":76,"column":96},"action":"insert","lines":["-"],"id":1131}],[{"start":{"row":76,"column":96},"end":{"row":76,"column":97},"action":"insert","lines":[">"],"id":1132},{"start":{"row":76,"column":97},"end":{"row":76,"column":98},"action":"insert","lines":["i"]},{"start":{"row":76,"column":98},"end":{"row":76,"column":99},"action":"insert","lines":["d"]}],[{"start":{"row":76,"column":98},"end":{"row":76,"column":99},"action":"remove","lines":["d"],"id":1133},{"start":{"row":76,"column":97},"end":{"row":76,"column":98},"action":"remove","lines":["i"]},{"start":{"row":76,"column":96},"end":{"row":76,"column":97},"action":"remove","lines":[">"]},{"start":{"row":76,"column":95},"end":{"row":76,"column":96},"action":"remove","lines":["-"]},{"start":{"row":76,"column":94},"end":{"row":76,"column":95},"action":"remove","lines":["s"]},{"start":{"row":76,"column":93},"end":{"row":76,"column":94},"action":"remove","lines":["w"]},{"start":{"row":76,"column":92},"end":{"row":76,"column":93},"action":"remove","lines":["e"]},{"start":{"row":76,"column":91},"end":{"row":76,"column":92},"action":"remove","lines":["i"]},{"start":{"row":76,"column":90},"end":{"row":76,"column":91},"action":"remove","lines":["v"]},{"start":{"row":76,"column":89},"end":{"row":76,"column":90},"action":"remove","lines":["e"]},{"start":{"row":76,"column":88},"end":{"row":76,"column":89},"action":"remove","lines":["r"]}],[{"start":{"row":76,"column":88},"end":{"row":76,"column":89},"action":"insert","lines":["i"],"id":1134},{"start":{"row":76,"column":89},"end":{"row":76,"column":90},"action":"insert","lines":["d"]}],[{"start":{"row":76,"column":79},"end":{"row":76,"column":90},"action":"remove","lines":[",$onsen->id"],"id":1135}],[{"start":{"row":76,"column":79},"end":{"row":76,"column":80},"action":"insert","lines":[","],"id":1137}],[{"start":{"row":76,"column":80},"end":{"row":76,"column":90},"action":"insert","lines":["$onsen->id"],"id":1138}],[{"start":{"row":48,"column":48},"end":{"row":48,"column":51},"action":"insert","lines":["-->"],"id":1139},{"start":{"row":48,"column":4},"end":{"row":48,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":50,"column":15},"end":{"row":50,"column":18},"action":"insert","lines":["-->"],"id":1140},{"start":{"row":50,"column":4},"end":{"row":50,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":76,"column":53},"end":{"row":76,"column":60},"action":"remove","lines":["Reviews"],"id":1141}],[{"start":{"row":76,"column":53},"end":{"row":76,"column":59},"action":"insert","lines":["Onsens"],"id":1142}],[{"start":{"row":76,"column":76},"end":{"row":76,"column":77},"action":"remove","lines":["w"],"id":1143},{"start":{"row":76,"column":75},"end":{"row":76,"column":76},"action":"remove","lines":["e"]},{"start":{"row":76,"column":74},"end":{"row":76,"column":75},"action":"remove","lines":["i"]},{"start":{"row":76,"column":73},"end":{"row":76,"column":74},"action":"remove","lines":["v"]}],[{"start":{"row":76,"column":73},"end":{"row":76,"column":74},"action":"insert","lines":["r"],"id":1144},{"start":{"row":76,"column":74},"end":{"row":76,"column":75},"action":"insert","lines":["e"]},{"start":{"row":76,"column":75},"end":{"row":76,"column":76},"action":"insert","lines":["v"]},{"start":{"row":76,"column":76},"end":{"row":76,"column":77},"action":"insert","lines":["i"]},{"start":{"row":76,"column":77},"end":{"row":76,"column":78},"action":"insert","lines":["e"]}],[{"start":{"row":76,"column":78},"end":{"row":76,"column":79},"action":"insert","lines":["w"],"id":1145}],[{"start":{"row":76,"column":79},"end":{"row":76,"column":80},"action":"insert","lines":["s"],"id":1148}],[{"start":{"row":76,"column":79},"end":{"row":76,"column":80},"action":"remove","lines":["s"],"id":1149}],[{"start":{"row":76,"column":80},"end":{"row":76,"column":91},"action":"remove","lines":[",$onsen->id"],"id":1150}],[{"start":{"row":76,"column":80},"end":{"row":76,"column":81},"action":"insert","lines":[","],"id":1151},{"start":{"row":76,"column":81},"end":{"row":76,"column":82},"action":"insert","lines":["$"]},{"start":{"row":76,"column":82},"end":{"row":76,"column":83},"action":"insert","lines":["i"]},{"start":{"row":76,"column":83},"end":{"row":76,"column":84},"action":"insert","lines":["d"]}],[{"start":{"row":76,"column":83},"end":{"row":76,"column":84},"action":"remove","lines":["d"],"id":1152},{"start":{"row":76,"column":82},"end":{"row":76,"column":83},"action":"remove","lines":["i"]},{"start":{"row":76,"column":81},"end":{"row":76,"column":82},"action":"remove","lines":["$"]}],[{"start":{"row":76,"column":81},"end":{"row":76,"column":82},"action":"insert","lines":["$"],"id":1153},{"start":{"row":76,"column":82},"end":{"row":76,"column":83},"action":"insert","lines":["o"]},{"start":{"row":76,"column":83},"end":{"row":76,"column":84},"action":"insert","lines":["n"]},{"start":{"row":76,"column":84},"end":{"row":76,"column":85},"action":"insert","lines":["d"]},{"start":{"row":76,"column":85},"end":{"row":76,"column":86},"action":"insert","lines":["r"]}],[{"start":{"row":76,"column":85},"end":{"row":76,"column":86},"action":"remove","lines":["r"],"id":1154},{"start":{"row":76,"column":84},"end":{"row":76,"column":85},"action":"remove","lines":["d"]}],[{"start":{"row":76,"column":84},"end":{"row":76,"column":85},"action":"insert","lines":["s"],"id":1155},{"start":{"row":76,"column":85},"end":{"row":76,"column":86},"action":"insert","lines":["e"]},{"start":{"row":76,"column":86},"end":{"row":76,"column":87},"action":"insert","lines":["n"]},{"start":{"row":76,"column":87},"end":{"row":76,"column":88},"action":"insert","lines":["-"]}],[{"start":{"row":76,"column":88},"end":{"row":76,"column":89},"action":"insert","lines":[">"],"id":1156},{"start":{"row":76,"column":89},"end":{"row":76,"column":90},"action":"insert","lines":["i"]},{"start":{"row":76,"column":90},"end":{"row":76,"column":91},"action":"insert","lines":["d"]}],[{"start":{"row":24,"column":105},"end":{"row":24,"column":108},"action":"insert","lines":["-->"],"id":1157},{"start":{"row":24,"column":2},"end":{"row":24,"column":6},"action":"insert","lines":["<!--"]}],[{"start":{"row":24,"column":109},"end":{"row":24,"column":112},"action":"remove","lines":["-->"],"id":1158},{"start":{"row":24,"column":2},"end":{"row":24,"column":6},"action":"remove","lines":["<!--"]}],[{"start":{"row":24,"column":105},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":1169},{"start":{"row":25,"column":0},"end":{"row":25,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":25,"column":2},"end":{"row":25,"column":105},"action":"insert","lines":["<?= $this->Html->image('/webroot/files/Onsens/image_file/' . $onsen->img_file2, ['width' => '50px']) ?>"],"id":1170}],[{"start":{"row":25,"column":79},"end":{"row":25,"column":80},"action":"remove","lines":["2"],"id":1171}],[{"start":{"row":25,"column":79},"end":{"row":25,"column":80},"action":"insert","lines":["3"],"id":1172}],[{"start":{"row":25,"column":105},"end":{"row":25,"column":108},"action":"insert","lines":["-->"],"id":1173},{"start":{"row":25,"column":2},"end":{"row":25,"column":6},"action":"insert","lines":["<!--"]}],[{"start":{"row":25,"column":109},"end":{"row":25,"column":112},"action":"remove","lines":["-->"],"id":1174},{"start":{"row":25,"column":2},"end":{"row":25,"column":6},"action":"remove","lines":["<!--"]}],[{"start":{"row":24,"column":82},"end":{"row":24,"column":101},"action":"remove","lines":["['width' => '50px']"],"id":1175},{"start":{"row":24,"column":82},"end":{"row":24,"column":139},"action":"insert","lines":["['width' => '400px','height' => '500px','class' => 'img']"]}],[{"start":{"row":25,"column":82},"end":{"row":25,"column":101},"action":"remove","lines":["['width' => '50px']"],"id":1176},{"start":{"row":25,"column":82},"end":{"row":25,"column":139},"action":"insert","lines":["['width' => '400px','height' => '500px','class' => 'img']"]}],[{"start":{"row":27,"column":7},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":1177},{"start":{"row":28,"column":0},"end":{"row":28,"column":3},"action":"insert","lines":["   "]}],[{"start":{"row":28,"column":3},"end":{"row":35,"column":6},"action":"insert","lines":["<h2>単体画像</h2>","\t<ul class=\"slider single-item\">","\t\t<li><img src=\"../images/main-bnr/01-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/02-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/03-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/04-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/05-600x300.jpg\" alt=\"\"></li>","\t</ul>"],"id":1178}],[{"start":{"row":22,"column":25},"end":{"row":22,"column":26},"action":"insert","lines":[" "],"id":1179}],[{"start":{"row":22,"column":26},"end":{"row":22,"column":44},"action":"insert","lines":["slider single-item"],"id":1180}],[{"start":{"row":28,"column":16},"end":{"row":28,"column":19},"action":"insert","lines":["-->"],"id":1184},{"start":{"row":28,"column":1},"end":{"row":28,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":29,"column":32},"end":{"row":29,"column":35},"action":"insert","lines":["-->"]},{"start":{"row":29,"column":1},"end":{"row":29,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":30,"column":63},"end":{"row":30,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":30,"column":1},"end":{"row":30,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":31,"column":63},"end":{"row":31,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":31,"column":1},"end":{"row":31,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":32,"column":63},"end":{"row":32,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":32,"column":1},"end":{"row":32,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":33,"column":63},"end":{"row":33,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":33,"column":1},"end":{"row":33,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":34,"column":63},"end":{"row":34,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":34,"column":1},"end":{"row":34,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":35,"column":6},"end":{"row":35,"column":9},"action":"insert","lines":["-->"]},{"start":{"row":35,"column":1},"end":{"row":35,"column":5},"action":"insert","lines":["<!--"]}],[{"start":{"row":0,"column":33},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":1185},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":9,"column":6},"action":"insert","lines":["\t<h2>単体画像</h2>","\t<ul class=\"slider single-item\">","\t\t<li><img src=\"../images/main-bnr/01-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/02-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/03-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/04-600x300.jpg\" alt=\"\"></li>","\t\t<li><img src=\"../images/main-bnr/05-600x300.jpg\" alt=\"\"></li>","\t</ul>"],"id":1186}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":49},"action":"remove","lines":["../images/main-bnr/01-600x300.jpg"],"id":1187},{"start":{"row":4,"column":16},"end":{"row":4,"column":134},"action":"insert","lines":["http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg"]}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":49},"action":"remove","lines":["../images/main-bnr/02-600x300.jpg"],"id":1188},{"start":{"row":5,"column":16},"end":{"row":5,"column":134},"action":"insert","lines":["http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg"]}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":49},"action":"remove","lines":["../images/main-bnr/03-600x300.jpg"],"id":1189},{"start":{"row":6,"column":16},"end":{"row":6,"column":134},"action":"insert","lines":["http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg"]}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":49},"action":"remove","lines":["../images/main-bnr/04-600x300.jpg"],"id":1190},{"start":{"row":7,"column":16},"end":{"row":7,"column":134},"action":"insert","lines":["http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg"]}],[{"start":{"row":8,"column":1},"end":{"row":8,"column":63},"action":"remove","lines":["\t<li><img src=\"../images/main-bnr/05-600x300.jpg\" alt=\"\"></li>"],"id":1191},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["\t"]},{"start":{"row":7,"column":148},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":134},"action":"remove","lines":["http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg"],"id":1192},{"start":{"row":4,"column":16},"end":{"row":4,"column":77},"action":"insert","lines":["http://gimmicklog.main.jp/demo/images/main-bnr/01-600x300.jpg"]}],[{"start":{"row":5,"column":2},"end":{"row":7,"column":148},"action":"remove","lines":["<li><img src=\"http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg\" alt=\"\"></li>","\t\t<li><img src=\"http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg\" alt=\"\"></li>","\t\t<li><img src=\"http://4c8c817887dd43d4a1f346c3133af996.vfs.cloud9.us-east-2.amazonaws.com/webroot/files/Onsens/image_file/manyou.jpeg\" alt=\"\"></li>"],"id":1193},{"start":{"row":5,"column":2},"end":{"row":5,"column":91},"action":"insert","lines":["<li><img src=\"http://gimmicklog.main.jp/demo/images/main-bnr/01-600x300.jpg\" alt=\"\"></li>"]}],[{"start":{"row":34,"column":1},"end":{"row":42,"column":1},"action":"remove","lines":["<!--  <h2>単体画像</h2>-->","\t<!--<ul class=\"slider single-item\">-->","\t<!--\t<li><img src=\"../images/main-bnr/01-600x300.jpg\" alt=\"\"></li>-->","\t<!--\t<li><img src=\"../images/main-bnr/02-600x300.jpg\" alt=\"\"></li>-->","\t<!--\t<li><img src=\"../images/main-bnr/03-600x300.jpg\" alt=\"\"></li>-->","\t<!--\t<li><img src=\"../images/main-bnr/04-600x300.jpg\" alt=\"\"></li>-->","\t<!--\t<li><img src=\"../images/main-bnr/05-600x300.jpg\" alt=\"\"></li>-->","\t<!--</ul>-->"," "],"id":1195}],[{"start":{"row":2,"column":14},"end":{"row":2,"column":17},"action":"insert","lines":["-->"],"id":1196},{"start":{"row":2,"column":1},"end":{"row":2,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":3,"column":32},"end":{"row":3,"column":35},"action":"insert","lines":["-->"]},{"start":{"row":3,"column":1},"end":{"row":3,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":4,"column":91},"end":{"row":4,"column":94},"action":"insert","lines":["-->"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":5,"column":91},"end":{"row":5,"column":94},"action":"insert","lines":["-->"]},{"start":{"row":5,"column":1},"end":{"row":5,"column":5},"action":"insert","lines":["<!--"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":9},"action":"insert","lines":["-->"]},{"start":{"row":6,"column":1},"end":{"row":6,"column":5},"action":"insert","lines":["<!--"]}],[{"start":{"row":28,"column":46},"end":{"row":29,"column":2},"action":"insert","lines":["","  "],"id":1197}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"insert","lines":["0"],"id":1198}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["0"],"id":1199}],[{"start":{"row":30,"column":1},"end":{"row":30,"column":2},"action":"insert","lines":[" "],"id":1200}],[{"start":{"row":31,"column":2},"end":{"row":31,"column":3},"action":"insert","lines":[" "],"id":1201}],[{"start":{"row":32,"column":2},"end":{"row":32,"column":3},"action":"insert","lines":[" "],"id":1202}],[{"start":{"row":33,"column":1},"end":{"row":33,"column":2},"action":"remove","lines":[" "],"id":1203}],[{"start":{"row":29,"column":2},"end":{"row":29,"column":33},"action":"insert","lines":["<ul class=\"slider single-item\">"],"id":1204}],[{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"remove","lines":[">"],"id":1205}],[{"start":{"row":29,"column":32},"end":{"row":29,"column":38},"action":"insert","lines":["></ul>"],"id":1206}],[{"start":{"row":29,"column":33},"end":{"row":29,"column":38},"action":"remove","lines":["</ul>"],"id":1207}],[{"start":{"row":32,"column":144},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":1208},{"start":{"row":33,"column":0},"end":{"row":33,"column":3},"action":"insert","lines":["   "]}],[{"start":{"row":33,"column":2},"end":{"row":33,"column":3},"action":"remove","lines":[" "],"id":1209}],[{"start":{"row":33,"column":2},"end":{"row":33,"column":7},"action":"insert","lines":["</ul>"],"id":1210}],[{"start":{"row":30,"column":3},"end":{"row":30,"column":4},"action":"insert","lines":[" "],"id":1211}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":5},"action":"insert","lines":["<"],"id":1212},{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"insert","lines":["l"]},{"start":{"row":30,"column":6},"end":{"row":30,"column":7},"action":"insert","lines":["i"]}],[{"start":{"row":30,"column":7},"end":{"row":30,"column":13},"action":"insert","lines":["></li>"],"id":1213}],[{"start":{"row":30,"column":8},"end":{"row":30,"column":13},"action":"remove","lines":["</li>"],"id":1214}],[{"start":{"row":30,"column":149},"end":{"row":30,"column":154},"action":"insert","lines":["</li>"],"id":1215}],[{"start":{"row":31,"column":3},"end":{"row":31,"column":4},"action":"insert","lines":["<"],"id":1216},{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"insert","lines":["l"]},{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"remove","lines":["e"],"id":1217}],[{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"insert","lines":["i"],"id":1218}],[{"start":{"row":31,"column":6},"end":{"row":31,"column":12},"action":"insert","lines":["></li>"],"id":1219}],[{"start":{"row":31,"column":7},"end":{"row":31,"column":12},"action":"remove","lines":["</li>"],"id":1220}],[{"start":{"row":31,"column":148},"end":{"row":31,"column":153},"action":"insert","lines":["</li>"],"id":1221}],[{"start":{"row":32,"column":3},"end":{"row":32,"column":4},"action":"insert","lines":["<"],"id":1222},{"start":{"row":32,"column":4},"end":{"row":32,"column":5},"action":"insert","lines":["l"]},{"start":{"row":32,"column":5},"end":{"row":32,"column":6},"action":"insert","lines":["i"]}],[{"start":{"row":32,"column":6},"end":{"row":32,"column":12},"action":"insert","lines":["></li>"],"id":1223}],[{"start":{"row":32,"column":7},"end":{"row":32,"column":12},"action":"remove","lines":["</li>"],"id":1224}],[{"start":{"row":32,"column":148},"end":{"row":32,"column":153},"action":"insert","lines":["</li>"],"id":1225}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":1226}]]},"ace":{"folds":[],"scrolltop":820.5,"scrollleft":0,"selection":{"start":{"row":40,"column":6},"end":{"row":40,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1542961692374}