
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
    <?= $this->Html->css('/webroot/css/style_reviews.css') ?>
　　<?= $this->Html->script('/webroot/js/reviews.js') ?>
　　
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
     <?= $this->element('my_header_onsens_search') ?>
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
