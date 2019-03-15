
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Meta Tags For Seo + Page Optimization -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Insert Favicon Here -->
   <link href="../img/favicon.ico" rel="icon">

   <!-- Page Title(Name)-->
   <title>NetPro</title>


   <!-- Bootstrap CSS Files -->
    <?= $this->Html->meta('../img/favicon.ico') ?>
    <?= $this->Html->css(['bootstrap.min','bootstrap-reboot.min','animate_1','fontawesome-all.min','themify-icons_1',
        'cubeportfolio.min','jquery.fancybox.min','settings','layer','navigation','swiper.min',
        'revolution.addon.particles','bstyle']) ?>
   
   <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
   
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" class="index-one">

<!-- Page Loader -->
   <div class="preloader">
      <div class="loader-dot-outer">
         <div class="loader-dot-center"></div>
         <div class="loader-dot"></div>
         <div class="loader-dot"></div>
         <div class="loader-dot"></div>
         <div class="loader-dot"></div>
         <div class="loader-dot"></div>
         <div class="loader-dot"></div>
      </div>
   </div>
   <!-- Page Loader -->
   

   <!-- Page Wrapper -->
   <section class="page-wrapper">
     
      <!-- Header Section Starts -->
      <header class="site-header">
         <nav class="navbar navbar-expand-lg navbar-full-white-bg round">
            <div class="container nav-logo-detail-outer">
               <a class="navbar-brand" href="/">
                    <?=$this->Html->image('logo.png', ['alt' => 'NetPro','href'=>'/','class'=>'logo-default'])?>
                    <?=$this->Html->image('logo.png', ['alt' => 'NetPro','href'=>'/','class'=>'logo-after-scroll'])?>
                  
               </a>

               <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>

               <div class="collapse navbar-collapse d-sm-0 d-md-0">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                           <?= $this->Html->link(__('Home'), ['controller'=>'Faqquestions','action' => 'index'],['class'=>'nav-link']) ?>
<!--                        <a class="nav-link active scroll" href="#main-slider-section">home</a>-->
                     </li>
                     <li class="nav-item">
                        <?= $this->Html->link(__('About Us'), ['controller'=>'Faqquestions','action' => 'index#about-company-section'],['class'=>'nav-link']) ?>
                     </li>
                     <li class="nav-item">
                        <?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'productlist'],['class'=>'nav-link']) ?>
                     </li>
                     <li class="nav-item">
                        <?= $this->Html->link(__('Services'), ['controller'=>'Services','action' => 'serviceslist'],['class'=>'nav-link']) ?>
                     </li>
                    
                   
                     <li class="nav-item">
                         <a class="nav-link scroll" href="#contact-form-section">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </div>


            <!--side menu open button-->
            <div id="menu_bars" class="full"> <span></span> <span></span> <span></span> </div>

            <div class="sidebar_menu">
               <nav class="side-nav side-nav-right full-nav">
                  <ul class="side-nav-list">
                     <li>
                      <?= $this->Html->link(__('Home'), ['controller'=>'Faqquestions','action' => 'index#main-slider-section'],['class'=>'nav-link']) ?>
                     </li>
                     <li>
                    <?= $this->Html->link(__('About us'), ['controller'=>'Faqquestions','action' => 'index#about-company-section'],['class'=>'nav-link']) ?>
                     </li>
                     <li>
                      <?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'productlist'],['class'=>'nav-link']) ?>
                     </li>
                      <li>
                             <?= $this->Html->link(__('Services'), ['controller'=>'Services','action' => 'serviceslist'],['class'=>'nav-link']) ?>
                     </li>
                   
                    
                     <li>
                           <a class="nav-link" href="#contact-form-section">Contact Us</a>
                      
                     </li>
                  </ul>
               </nav>
            </div>
         </nav>
         </div>
      </header> 
      <!-- Header Section End bal 08104005000
      lc 
      WHATSAPP 08121859148 -->

    <!-- Blog Header -->
    <section class="blog-header padding-top" data-parallax="scroll" data-image-src="../../../images/main-slider-image-7.jpg">

        <div class="container">

            <div class="blog-heading-outer padding-top-70 padding-bottom-30">

                <h1 class="font-weight-100 fontface-one text-color-white text-center">Details</h1>

            </div>

        </div>

    </section>

    <!-- Blog Header End -->

    <!-- Blog Body -->

    <?= $this->Flash->render() ?>
  
           <?= $this->fetch('content') ?>
    <!-- Blog Body End -->

    <!-- Page Footer -->
    <footer class="footer-section padding-bottom-70 padding-top-70 padding-top-1">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 order-lg-1 order-md-3 order-sm-3 order-3">
                  <p class="paragraph-13 footer-copyright-text font-weight-500 fontface-two text-color-dark padding-top-10">© <?=date('Y') ?> NetPro Int'l Ltd. 
                   
                  </p>
               </div>

               <div class="col-lg-6 order-lg-1 order-md-2 order-sm-2 order-2">
                  <div class="footer-links padding-top-5">
                    <ul class="footer-links-outer text-center">
                        <li class="footer-links-inner">
                            <?= $this->Html->link(__('Home'), ['controller'=>'Faqquestions','action' => 'index#main-slider-section']) ?>
<!--                           <a class="scroll" href="#main-slider-section">home</a>-->
                        </li>
                        <li class="footer-divider">|</li>
                        <li class="footer-links-inner">
                        <?= $this->Html->link(__('About Us'), ['controller'=>'Faqquestions','action' => 'index#about-company-section']) ?>
                          
                        </li>
                        <li class="footer-divider">|</li>
                        <li class="footer-links-inner">
                           <?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'productlist']) ?>
                        </li>
                        <li class="footer-divider">|</li>
                        <li class="footer-links-inner"> 
                          <?= $this->Html->link(__('Services'), ['controller'=>'Services','action' => 'serviceslist']) ?>
                        </li>
                        <li class="footer-divider">|</li>
<!--                        <li class="footer-links-inner">
                           <a class="scroll" href="#pricing-table-section">register as a distributor</a>
                        </li>
                        <li class="footer-divider">|</li>-->
                        <li class="footer-links-inner">
                             <a class="scroll" href="#contact-form-section">Contact Us</a>
                        
                          
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="col-lg-2 order-lg-1 clearfix order-md-1 order-sm-1 order-1">
                  <a href="#." class="footer-logo">
                       <?=$this->Html->image('logo.png', ['alt' => 'NetPro'])?>
                    
                  </a>
               </div>
            </div>
         </div>
      </footer>
    <!-- /Page Footer End -->

</section>

 <!-- /Page Wrapper End -->
 <?= $this->Html->script(['jquery','popper.min_1','bootstrap.min','maps.min','jquery.cubeportfolio.min','parallax.min',
    'jquery.appear.min','jquery.themepunch.tools.min','jquery.themepunch.revolution.min','revolution.extension.actions.min',
     'revolution.extension.carousel.min','revolution.extension.kenburn.min','revolution.extension.layeranimation.min',
     'revolution.extension.migration.min','revolution.extension.navigation.min','revolution.extension.parallax.min',
    'revolution.extension.slideanims.min','revolution.extension.video.min','revolution.addon.beforeafter.min',
     'revolution.addon.beforeafter.min','jquery.fancybox.min','swiper.min','wow.min','script' ])?>
   
    <?= $this->fetch('script') ?>
  

   <!-- Goggle Map Api -->
   <script src="https://maps.google.com/maps/api/js?key=AIzaSyCrZmDm9GX2tftZ-yFDfXKc68IJd1a3R2A"></script>

   <!-- Before After Effect Slider Revolution -->
    <?= $this->Html->css(['revolution.addon.beforeafter']) ?>
    <?= $this->fetch('css') ?>

</body>
</html>
