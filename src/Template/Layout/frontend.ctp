
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
   <link href="img/favicon.ico" rel="icon">

   <!-- Page Title(Name)-->
   <title>NetPro Int'l Ltd</title>


   <!-- Bootstrap CSS Files -->
     <?= $this->Html->meta('favicon.ico') ?>
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
     
      <!-- Header Section Starts navbar-full-white-bg -->
      <header class="site-header">
       
         <nav class="navbar navbar-expand-lg  round">
            <div class="container nav-logo-detail-outer">
               <a class="navbar-brand" href="/">
                    <?=$this->Html->image('logo.png', ['alt' => 'NetPro','href'=>'/','class'=>'logo-default'])?>
                    <?=$this->Html->image('logo.png', ['alt' => 'NetPro','href'=>'/','class'=>'logo-after-scroll'])?>
                  
               </a>

               <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>

<!--               <div class="collapse navbar-collapse d-sm-0 d-md-0">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link active scroll" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#about-company-section">About us</a>
                     </li>
                     <li class="nav-item">
                       <?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'productlist'],['class'=>'nav-link']) ?>
                        <a class="nav-link scroll" href="#company-portfolio-section">products</a>
                     </li>
                      <li class="nav-item">
                   <?= $this->Html->link(__('Services'), ['controller'=>'Services','action' => 'serviceslist'],['class'=>'nav-link']) ?>
                     
                     </li>
                      <li>
                        <a class="nav-link scroll" href="#pricing-table-section">register as a distributor</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#contact-form-section">support</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scroll" href="#contact-form-section">Contact Us</a>
                     </li>
                  </ul>
               </div>-->
            </div>
            <!--side menu open button-->
            <div id="menu_bars" class="full"> <span></span> <span></span> <span></span> </div>

            <div class="sidebar_menu">
               <nav class="side-nav side-nav-right full-nav">
                  <ul class="side-nav-list">
                     <li>
                        <a class="active scroll" href="/">Home</a>
                     </li>
                     <li>
                        <a class="scroll" href="#about-company-section">About Us</a>
                     </li>
                     <li>
                        <a class="scroll" href="#company-portfolio-section">Products </a>
                     </li>
                      <li>
                        <a class="scroll" href="#blog-section">Services</a>
                     </li>
                    <li>
                        
                        <a class="scroll" href="#pricing-table-section">Support</a>
                     </li>
                    
                     <li>
                        <a class="scroll" href="#contact-form-section">Contact Us</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </nav>
        </div>
      </header>
      <!-- Header Section End -->

     
      <!-- Main Slider Section -->
      <section class="main-slider-section" id="main-slider-section">
         <div id="rev_slider_346_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="beforeafterslider1" data-source="gallery" style="background:#252525;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
            <div id="main-slider-four" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">
               <ul>

                  <!-- SLIDE  -->
                  <li data-index="rs-964" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"linear-gradient(270deg, rgba(255, 60, 133,1) 0%, rgba(100, 80, 220,1) 100%)","bgType":"solid","bgImage":"","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false,"bounceArrows":"infinite","bounceType":"repel","bounceAmount":"5","bounceSpeed":"1500","bounceEasing":"ease-in-out","bounceDelay":"750","shiftOffset":"10","shiftTiming":"300","shiftEasing":"ease","shiftDelay":"250"}'>
                     <!-- MAIN IMAGE -->
                     <img src="images/netpro2.jpg" data-bgcolor='linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(166, 166, 166,1) 100%)' style='background:linear-gradient(90deg, rgba(203,186,204,1) 0%, rgba(36,57,73,1) 100%)' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                     <!-- LAYERS -->

                     <!-- LAYER NR. 2 -->
<!--                     <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-23" data-x="['center','center','center','center']" data-hoffset="['-600','-578','-578','-221']" data-y="['middle','middle','middle','middle']" data-voffset="['-180','-344','-344','-194']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"x:left;y:-500px;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;"><img src="images/netpro1.jpg" alt="" data-ww="['375px','375px','375px','200px']" data-hh="['375px','375px','375px','200px']" width="1500" height="1500" data-no-retina> </div>

                      LAYER NR. 3 
                     <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-28" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-140','-70','-70','-170']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;"><img src="images/keyboard_apple.png" alt="" data-ww="['600px','600px','600px','300px']" data-hh="['600px','600px','600px','300px']" width="1600" height="1600" data-no-retina> </div>

                      LAYER NR. 4 
                     <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-964-layer-22" data-x="['center','center','center','center']" data-hoffset="['307','307','307','131']" data-y="['middle','middle','middle','middle']" data-voffset="['-59','-59','-59','-103']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"x:200px;y:bottom;rZ:-180deg;sX:1;sY:1;","to":"o:1;rZ:-20;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;"><img src="images/object_macmouse_1.png" alt="" data-ww="['600px','250px','250px','125px']" data-hh="['600px','250px','250px','125px']" width="1000" height="1000" data-no-retina> </div>

                      LAYER NR. 5 
                     <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-964-layer-35" data-x="['center','center','center','center']" data-hoffset="['-296','-296','-296','-149']" data-y="['middle','middle','middle','middle']" data-voffset="['-67','-67','-67','-89']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:left;y:200px;rZ:180deg;sX:1;sY:1;","to":"o:1;rZ:45;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;"><img src="images/object_glasses_2.png" alt="" data-ww="['250px','250px','250px','125px']" data-hh="['250px','250px','250px','125px']" width="1000" height="1000" data-no-retina> </div>-->




                     <div class="tp-caption main-slider-text  fontface-one text-color-secondary  tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-994-layer-999" data-x="['center','center','center','center']" data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']" data-voffset="['90','110','110','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" style="z-index: 16; white-space: nowrap; font-size: 60px; line-height: 120px; font-weight: 700; color: #ffffff;">NetPro International</div>


                     <!-- LAYER NR. 6 -->
                     <div class="tp-caption   tp-resizeme  tp-whiteshadow rs-parallaxlevel-5" id="slide-964-layer-1743" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']" data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']" data-letterspacing="['50','50','50','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" data-blendmode="screen" style="z-index: 10; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #000000; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">NetPro Ltd </div>

                     <!-- LAYER NR. 7 -->
                     <div class="tp-caption  main-slider-detail-text tp-resizeme rs-parallaxlevel-5" id="slide-964-layer-48" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['180','210','210','150']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;">..truly innovative and customer-focused<br>
                     </div>

                     <!-- LAYER NR. 8 -->
                     <div class="tp-caption background-white button-setting button-setting-primary text-color-dark tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-46" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['90','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 12; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a class="scroll" href="#about-company-section">Learn More</a> </div>

                     <!-- LAYER NR. 10 -->
<!--                     <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-42" data-x="['center','center','center','center']" data-hoffset="['545','545','545','181']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-120','-178']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"x:right;y:-500px;rZ:-180deg;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;"><img src="images/netpro1.jpg" alt="" data-ww="['375px','375px','375px','170px']" data-hh="['375px','375px','375px','170px']" width="1500" height="1500" data-no-retina> </div>

                      LAYER NR. 11 
                     <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-45" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-140','-70','-70','-170']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;"><img src="images/netpro2.jpg" alt="" data-ww="['600px','600px','600px','300px']" data-hh="['600px','600px','600px','300px']" width="1600" height="1600" data-no-retina> </div>-->



                     <div class="tp-caption main-slider-text  fontface-one text-color-white  tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-794-layer-999" data-x="['center','center','center','center']" data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']" data-voffset="['90','110','110','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" style="z-index: 16; white-space: nowrap; font-size: 60px; line-height: 120px; font-weight: 700; color: #ffffff;">NetPro International</div>

                     <!-- LAYER NR. 13 -->
                     <div class="tp-caption main-slider-detail-text  tp-resizeme rs-parallaxlevel-5" id="slide-964-layer-49" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['180','210','210','150']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;">..truly innovative and customer-focused <br>

                     </div>

                     <!-- LAYER NR. 14 -->
                     <div class="tp-caption button-setting background-secondary button-setting-primary  tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-44" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['90','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 18; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a href="#about-company-section" class="scroll">Learn More</a> </div>
                  </li>

                  <!-- Slide -->
                  <li data-index="rs-965" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/images/night-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"","bgType":"image","bgImage":"images/netpro2.jpg","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>
                     <!-- MAIN IMAGE -->
                     <img src="images/netpro2.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power4.easeOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="30" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                     <!-- LAYERS -->
                     <div class="tp-caption main-slider-text  fontface-one   tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-24-layer-0" data-x="['center','center','center','center']" data-hoffset="['-45','-30','-30','-38']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','110','110','-100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" style="z-index: 16; white-space: nowrap; font-size: 60px; line-height: 120px; font-weight: 700; color: #ffffff;">NetPro International</div>

                     <!-- LAYER NR. 6 -->
                     <div class="tp-caption   tp-resizeme  tp-whiteshadow rs-parallaxlevel-5" id="slide-24-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']" data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']" data-letterspacing="['50','50','50','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" data-blendmode="screen" style="z-index: 10; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #000000; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">NetPro Ltd </div>

                     <!-- LAYER NR. 7 -->
                     <div class="tp-caption  main-slider-detail-text tp-resizeme rs-parallaxlevel-5" id="slide-24-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','210','210','120']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;">..truly innovative and customer-focused<br>
                     </div>

                     <!-- LAYER NR. 8 -->
                     <div class="tp-caption background-white button-setting button-setting-secondary text-color-dark tp-resizeme rs-parallaxlevel-4" id="slide-24-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['210','70','70','100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 12; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a class="scroll" href="#about-company-section">Learn More</a> </div>


                     <div class="tp-caption main-slider-text text-color-dark  fontface-one  tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-24-layer-4" data-x="['center','center','center','center']" data-hoffset="['-45','-30','-30','-38']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','110','110','-100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" style="z-index: 16; white-space: nowrap; font-size: 60px; line-height: 120px; font-weight: 700; color: #ffffff;">NetPro International</div>


                     <!-- LAYER NR. 7 -->
                     <div class="tp-caption text-color-dark main-slider-detail-text tp-resizeme rs-parallaxlevel-5" id="slide-24-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','210','210','120']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;"> ..truly innovative and customer-focused
                     </div>

                     <!-- LAYER NR. 8 -->
                     <div class="tp-caption background-primary button-setting button-setting-secondary  tp-resizeme rs-parallaxlevel-4" id="slide-24-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['210','70','70','100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 12; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a class="scroll" href="#about-company-section">Learn More</a> </div>



                  </li>

                  <!-- Slide -->
                  <li data-index="rs-966" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/images/night-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"","bgType":"image","bgImage":"images/main-slider-image-9.jpg","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>
                      MAIN IMAGE 
                     <img src="images/netpro1.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power4.easeOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="30" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                      LAYERS 
                     <div class="tp-caption main-slider-text  fontface-one   tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-24-layer-123" data-x="['center','center','center','center']" data-hoffset="['-45','0','0','-28']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','110','-80','-80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" style="z-index: 16; white-space: nowrap; font-size: 60px; line-height: 120px; font-weight: 700; color: #ffffff;">NetPro International</div>



                      LAYER NR. 7 
                     <div class="tp-caption  main-slider-detail-text tp-resizeme rs-parallaxlevel-5" id="slide-24-layer-124" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','210','210','100']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;"> ..truly innovative and customer-focused
                     </div>

                      LAYER NR. 8 
                     <div class="tp-caption background-white button-setting button-setting-primary text-color-dark tp-resizeme rs-parallaxlevel-4" id="slide-24-layer-125" data-x="['center','center','center','center']" data-hoffset="['100','100','100','100']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['190','70','70','110']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 12; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a class="scroll" href="#pricing-table-section">Learn More </a> </div>

                     <div class="tp-caption background-secondary button-setting button-setting-primary tp-resizeme rs-parallaxlevel-4" id="slide-24-layer-126" data-x="['center','center','center','center']" data-hoffset="['-100','-100','-100','-100']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['190','70','70','110']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 12; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a class="scroll" href="#about-company-section">Get Started</a> </div>


                     <div class="tp-caption main-slider-text text-color-white  fontface-one  tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-24-layer-127" data-x="['center','center','center','center']" data-hoffset="['-45','0','0','-28']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','110','-80','-80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" style="z-index: 16; white-space: nowrap; font-size: 60px; line-height: 120px; font-weight: 700; color: #ffffff;">NetPro International</div>



                      LAYER NR. 7 
                     <div class="tp-caption text-color-white main-slider-detail-text tp-resizeme rs-parallaxlevel-5" id="slide-24-layer-128" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','210','210','100']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;">..truly innovative and customer-focused
                     </div>

                      LAYER NR. 8 
                     <div class="tp-caption background-white text-color-dark button-setting button-setting-primary  tp-resizeme rs-parallaxlevel-4" id="slide-24-layer-129" data-x="['center','center','center','center']" data-hoffset="['100','100','100','100']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['190','70','70','110']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 12; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a class="scroll" href="#about-company-section">Learn More </a> </div>

                     <div class="tp-caption background-secondary button-setting button-setting-primary  tp-resizeme rs-parallaxlevel-4" id="slide-24-layer-130" data-x="['center','center','center','center']" data-hoffset="['-100','-100','-100','-100']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['190','70','70','110']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" style="z-index: 12; white-space: nowrap; font-size: 15px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;"><a class="scroll" href="#about-company-section">Get Started</a> </div>

                  </li>
               </ul>
               <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
         </div>
         <!-- END REVOLUTION SLIDER -->

      </section>
      <!-- /Main Slider Section End -->
 <!-- Blog Body -->

    <?= $this->Flash->render() ?>
  
           <?= $this->fetch('content') ?>
    <!-- Blog Body End -->

     
      <!-- Google Map Section -->
      <section id="google-map" data-wow-delay="300ms" style="height: 400px;"></section>
      <!-- /Google Map Section End -->

      <!-- Page Footer -->
      <footer class="footer-section padding-bottom-70 padding-top-70 padding-top-1">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 order-lg-1 order-md-3 order-sm-3 order-3 wow fadeIn" data-wow-delay="300ms">
<!--                  <p class="paragraph-13 footer-copyright-text font-weight-500 fontface-two text-color-dark padding-top-10">&copy; 2018 treely. made with love by
                     <a href="http://www.themesindustry.com/" class="footer-web-link"> themesindustry</a>
                  </p>-->
               </div>

               <div class="col-lg-6 order-lg-1 order-md-2 order-sm-2 order-2 wow fadeIn" data-wow-delay="350ms">
                  <div class="footer-links padding-top-5">
                     <ul class="footer-links-outer text-center">
                        <li class="footer-links-inner">
                           <a class="scroll" href="/">home</a>
                        </li>
                        <li class="footer-divider">|</li>
                        <li class="footer-links-inner">
                           <a class="scroll" href="#about-company-section">About Us</a>
                        </li>
                        <li class="footer-divider">|</li>
                        <li class="footer-links-inner">
                           <?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'productlist'],['class'=>'nav-link']) ?>
                        </li>
                        <li class="footer-divider">|</li>
                        <li class="footer-links-inner"> 
                          <?= $this->Html->link(__('Services'), ['controller'=>'Services','action' => 'serviceslist'],['class'=>'nav-link']) ?>
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

               <div class="col-lg-2 order-lg-1 clearfix order-md-1 order-sm-1 order-1 wow fadeIn" data-wow-delay="400ms">
                    <?=$this->Html->image('logo.png', ['alt' => 'NetPro','href'=>'/'])?>
                 
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
    'jquery.fancybox.min','swiper.min','wow.min','script' ])?>
   
    <?= $this->fetch('script') ?>
  

   <!-- Goggle Map Api -->
   <script src="https://maps.google.com/maps/api/js?key=AIzaSyCrZmDm9GX2tftZ-yFDfXKc68IJd1a3R2A"></script>

   <!-- Before After Effect Slider Revolution -->
    <?= $this->Html->css(['revolution.addon.beforeafter']) ?>
    <?= $this->fetch('css') ?>

</body>
</html>