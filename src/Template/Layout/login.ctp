
<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <meta name="description" content="NetPro Admin - LOGIN">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('normalize') ?>
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('font-awesome.min') ?>
    <?= $this->Html->css('themify-icons') ?>
    <?= $this->Html->css('flag-icon.min') ?>
    <?= $this->Html->css('cs-skin-elastic') ?>
    <?= $this->Html->css('style') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">

    <?= $this->fetch('content') ?>


    <?= $this->Html->script('jquery-2.1.4.min') ?>
    <?= $this->Html->script('popper.min') ?>
    <?= $this->Html->script('plugins') ?>
    <?= $this->Html->script('main') ?>
    <?= $this->fetch('script') ?>
    
</body>
</html>

