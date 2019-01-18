<div class="users form">
    <?= $this->Form->create($user, ['type' => 'file']) ?>
    
    
        <legend>新規登録</legend>
        <div class="bk">
        <p>メールアドレス</p>
        <?= $this->Form->control('address',['label' => false]) ?>
        <p>パスワード</p>
        <?= $this->Form->control('password',['label' => false]) ?>
        <p>パスワード確認</p>
        <?= $this->Form->password('password_check',['label' => false,'class' => 'password check']) ?>
        <p>お名前</p>
        <?= $this->Form->control('username',['label' => false]) ?>
        <p>ご年齢</p>
        <?= $this->Form->select('age',
        [
        '10代'=>'10代',
        '20代'=>'20代',
        '30代'=>'30代',
        '40代'=>'40代',
        '50代'=>'50代',
        '60代'=>'60代',
        '70代'=>'70代',
        '80代'=>'80代'
        ],['empty'=>'項目を選んでください','label' => false,'class' => 'select age']) ?>
        <p>性別</p>
        <div class="gender">
        <!--男性と女性とそのまま登録するのもあり-->
        <?= $this->Form->radio('gender', ['男性','女性'],array('div' => 'radio-horizontal')); ?>  
        </div>
        <p class="filetext">お写真</p>
        <div class="file">
        <?= $this->Form->file('image_file',['class' => 'file']); ?>
    　　</div>
        <div class="button_bk">
    <?= $this->Html->link(__('戻る'), ['controller'=>'Onsens', 'action'=>'search'], ['class'=>'button']); ?>
    <!--<?= $this->Form->button(__('戻る'),['controller'=>'Onsens','action'=>'search','class' => 'button']) ?>-->
    <?= $this->Form->button(__('登録する'),['class' => 'button']) ?>
    </div>
    <?= $this->Form->end() ?>
    </div>
</div>