<?php $this->assign('title', 'Request Password Reset'); ?><div class="users content">
    <h3><?php echo __('Forgot Password'); ?></h3>
    <?php
        echo $this->Form->create();
        echo $this->Form->control('address', ['autofocus' => true, 'label' => 'Email address', 'required' => true]);
        // echo $this->Form->control('email', ['autofocus' => true, 'label' => 'Email address', 'required' => true]);
        echo $this->Form->button('Request reset email');
        echo $this->Form->end();
    ?>
</div>