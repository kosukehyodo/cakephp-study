
<!DOCTYPE html>
<html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/webroot/css/base.css') ?>
    <?= $this->Html->css('/webroot/css/style_users.css') ?>
    
    <!--<?=  $this->Html->script('/webroot/js/scripts');?>-->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
     <?= $this->element('my_header_users') ?>
    </header>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <p>&copy; TokyoOnsenbu.com</p>
    </footer>
</body>
</html>
