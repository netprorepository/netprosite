
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
    <meta name="description" content="NetPro Admin - Dashboard">
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
<body>
   <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">
                  <?php echo $this->Html->image('logo.png',['alt'=>'NetPro']);?>
                </a>
                <a class="navbar-brand hidden" href="./">
                  <?php echo $this->Html->image('logo.png',['alt'=>'NetPro']);?>
                </a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                     <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>About Manager</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-pencil')).'Edit About', 
                                    array('controller' => 'abouts', 'action' => 'index'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Product Manager</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-plus')).'Add Product', 
                                    array('controller' => 'products', 'action' => 'add'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-book')).'List Product', 
                                    array('controller' => 'products', 'action' => 'index'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Service Manager</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-plus')).'Add Service', 
                                    array('controller' => 'services', 'action' => 'add'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-book')).'List Service', 
                                    array('controller' => 'services', 'action' => 'index'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Contact Manager</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-book')).'Edit Contact', 
                                    array('controller' => 'contacts', 'action' => 'edit/1'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Partners Manager</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-plus')).'Add Partners', 
                                    array('controller' => 'partners', 'action' => 'add'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-book')).'List Partners', 
                                    array('controller' => 'partners', 'action' => 'index'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Accomplishment Manager</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-book')).'List Accomplishment', 
                                    array('controller' => 'accomplishments', 'action' => 'index'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>SM Manager</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <?= $this->Html->link(
                                    $this->Html->tag('i', '', 
                                    array('class' => 'fa fa-book')).'Edit SM', 
                                    array('controller' => 'socialmedia', 'action' => 'edit/1'), 
                                    array('escape' => false)
                                  ) ?>
                            </li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li>
                        <?= $this->Html->link(
                            $this->Html->tag('i', '', 
                            array('class' => 'menu-icon ti-power-off')).'Logout', 
                            array('controller' => 'users', 'action' => 'logout'), 
                            array('escape' => false)
                          ) ?>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left">
                                  <?php echo $this->Html->image('1.jpg',['alt'=>'NetPro']);?>
                                </span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left">
                                  <?php echo $this->Html->image('1.jpg',['alt'=>'NetPro']);?>
                                </span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left">
                                  <?php echo $this->Html->image('1.jpg',['alt'=>'NetPro']);?>
                                </span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left">
                                  <?php echo $this->Html->image('1.jpg',['alt'=>'NetPro']);?>
                                </span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $this->Html->image('admin.jpg',['alt'=>'NetPro', 'class'=>'user-avatar rounded-circle']);?>
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="/users/logout"><i class="fa fa-power -off"></i>Logout</a>
                                
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
        <!-- /header -->
        <!-- Header-->
        <?= $this->fetch('content') ?>

     </div><!-- /#right-panel -->
    <!-- Right Panel -->

    <?= $this->Html->script(['jquery-2.1.4.min','ckeditor/ckeditor']) ?>
    <?= $this->Html->script('popper.min') ?>
    <?= $this->Html->script('plugins') ?>
    <?= $this->Html->script('main') ?>
    <?= $this->fetch('script') ?>
</body>
</html>