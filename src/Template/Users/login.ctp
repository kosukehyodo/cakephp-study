<?php
$this->assign('title', 'Users login');
?>
<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend>メールアドレスとパスワードを入力してください。</legend>
        <?= $this->Form->control('address') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Html->link("パスワードのお忘れの方はこちらへ", ['controller'=>'Users', 'action'=>'password']); ?>
    </fieldset>
    <?= $this->Form->button(__('ログイン')) ?>
    <?= $this->Form->end() ?>
</div>
