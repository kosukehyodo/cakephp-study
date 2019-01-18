
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
    <?= $this->Html->css('/webroot/css/style_onsens_search.css') ?>
    <?= $this->Html->css('/webroot/slick-1.8.1/slick/slick-theme.css') ?>
    <!--最初の/をわすれないように-->
    <?= $this->Html->css('/webroot/slick-1.8.1/slick/slick.css') ?>
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <style type="text/css">
    　/*左右の矢印の色を変える*/
.slick-prev:before,
.slick-next:before {
    color: #000;
}
/*左右の矢印の位置を変える*/
.slick-next {
    right: 20px;
    z-index: 99;
}
.slick-prev {
     left: 15px;
    z-index: 100;
}
/*スライド数のドットの色を変える*/
.slick-dots li.slick-active button:before,
.slick-dots li button:before {
    color: #fff;
}
/*スライド画像の横幅可変*/
img {
    max-width: 100%;
     height: auto;
}
    　
    </style>
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
    <!--jsに関して下に書くようにする    -->
    <?= $this->Html->script('/webroot/slick-1.8.1/slick/slick.min.js'); ?>
    <?= $this->Html->script('/webroot/js/search.js') ?>
</body>
</html>
