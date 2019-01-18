<h1>東京 おんせん部</h1>

<?= $this->Html->link("履歴", ['controller'=>'Users', 'action'=>'review']); ?>
<?php if ($this->request->getsession()->read('Auth.User.id')): ?>
<?= $this->Html->link("登録変更", ['controller'=>'Users', 'action'=>'edit']); ?>
<?php endif; ?>
<?= $this->Html->link("ログアウト", ['controller'=>'Users', 'action'=>'logout']); ?>
<p>ようこそ、<?=$this->request->getsession()->read('Auth.User.username')?>さん！</p>
