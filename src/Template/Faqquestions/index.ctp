 
      <!-- About Company Section -->
      <section class="about-company-section background-grey padding-top-bottom" id="about-company-section">
         <div class="container">
            <!-- About Company Slider -->
            <div class="about-company-slider-section">
               <div class="about-company-slider swiper-container">
                  <div class="swiper-wrapper">
                      <?php foreach ($aboutus as $who_we_are):  ?>
                     <div class="swiper-slide">
                        <div class="about-company-slide">
                           <div class="row">
                              <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                                 <div class="about-slider-image-section clearfix position-relative">
                                    <div class="about-slider-images-section-inner">
                                         <?=$this->Html->image('/projectimg/'.$who_we_are->imageurl, ['alt' => 'NetPro - who we are','data-slide'=>'animated','data-animate'=>'zoomIn'])?>
<!--                                       <img src="images/about-slider-img-1.jpg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn">-->
                                    </div>
                                    <div class="about-img-gradient-box gradient-bg-green-blue" data-slide="animated" data-animate="zoomIn"></div>
                                 </div>
                              </div>
                              <div class="col-lg-6 vertical-align-about-caption">
                                 <div class="about-slider-img-detail" data-slide="animated" data-animate="fadeInRight">
                                    <p class="text-color-secondary paragraph-14 fontface-two padding-bottom-25">What You Should Know About NetPro.</p>
                                    <h2 class="fontface-one text-color-dark padding-bottom-35">Why <span class="font-weight-700"><?=$who_we_are->title?></span></h2>
                                    <p class="text-color-dark paragraph-15 padding-bottom-35 text-color-darkgrey">
                                       <?=$who_we_are->description?> 
                                    </p>
                                    
                                  <?= $this->Html->link(__('Learn More'), ['controller'=>'Abouts','action' => 'whoweare'],
                                             ['class'=>'button-setting background-secondary text-color-white button-setting-primary']) ?>
<!--                                    <a href="#." class="button-setting background-secondary text-color-white button-setting-primary">
                                     Learn More about us</a>-->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                      <?php endforeach;  ?>

                  </div>
                  <div class="swiper-pagination d-none d-sm-none d-md-none d-lg-block"></div>
               </div>
            </div>

            <!-- About Company Services -->
            <div class="about-company-services">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <h2 class="fontface-one text-color-dark padding-bottom-35 wow fadeInUp" data-wow-delay="300ms">What <span class="text-color-secondary font-weight-700">We Offer</span></h2>
                        <!--p class="paragraph-15 fontface-two text-color-darkgrey wow fadeInUp" data-wow-delay="350ms">
                           Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin.</p-->
                     </div>
                  </div>
               </div>
               <div class="about-company-services-block">
                  <div class="row">
                     <?php $delay = 300; foreach ($services as $service): $delay = $delay +250;?>
                     <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 offset-sm-0">
                         <div class="about-company-services-block-inner background-white text-center wow fadeInUp" data-wow-delay="<?=$delay?><?='ms'?>">
                           <div class="about-company-services-block-inner-icon"><i class="fas fa-cog"></i></div>
                           <h4 class="fontface-one text-color-dark font-weight-700 padding-bottom-10"><?=$service->name?></h4>
<!--                           <p class="text-color-secondary paragraph-14 font-weight-300 fontface-two padding-bottom-20">Service Summary</p>-->
                           <p class="text-color-darkgrey paragraph-14 fontface-two">
                             <?= substr($service->description,0,110).'...'?>.
                             <br /> <br />
                                <?= $this->Html->link(__('Learn More'), ['controller'=>'Services','action' => 'servicedetails',$service->id,$this->GenerateUrl($service->name)],
                                             ['class'=>'button-setting background-secondary text-color-white button-setting-primary']) ?>
                           </p>
                        </div>
                     </div>
                      <?php endforeach; ?>
                   
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- /About Company Section End -->
      <!-- Company Stats Information Start -->
      <section class="company-stats-section background-grey padding-top-bottom" id="stats-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 order-md-12 order-sm-12 order-12 order-lg-1">
                  <div class="row">
                      <?php $icone1 = ' <i class="ti-hand-point-right text-color-dark "></i>';
                      $icone2 = '  <i class="ti-bar-chart text-color-dark "></i>';
                      $icone3 = '  <i class="ti-blackboard text-color-dark "></i>';
                      $count = 0;
                      $delay = 300;
                      foreach ($accomplishments as $accomplishment): $delay = $delay+50; $count++; ?>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="stats-block-inner text-center wow fadeInUp" data-wow-delay="<?=$delay?><?='ms'?>">
<!--                           <i class="ti-hand-point-right text-color-dark "></i>-->
                             <?php if($count==1){echo $icone1;}
                             if($count==2){echo $icone2;}
                             if($count==3){echo $icone3;}
                             ?>
                           <div class="stats-number-inner text-color-dark fontface-one font-weight-700 padding-top-20">
                              <span><?=$accomplishment->value?></span>+
                           </div>
                           <p class="paragraph-16 font-weight-400 fontface-two text-color-dark padding-top-5"><?=$accomplishment->title?></p>
                        </div>
                     </div>
                      
                      <?php endforeach; ?>

                   
                  </div>
               </div>

               <div class="col-lg-5 order-md-1 order-sm-1 order-1 order-lg-12">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="stats-heading text-right padding-bottom-30 wow fadeInUp" data-wow-delay="300ms">
                           <h2 class="text-color-dark fontface-one">Important facts</h2>
                           <h2 class="text-color-dark fontface-one">about <span class="text-color-secondary ">NetPro</span></h2>
                        </div>
                        <div class="stats-heading-detail text-right wow fadeInUp" data-wow-delay="350ms">
                           <p class="paragraph-14 text-color-darkgrey fontface-two">..here are our achievements thus far.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Company Stats Information End -->
   
      <!-- Sposnors Sider Section Start -->
      <section class="sponsors-slider-section background-grey padding-top-bottom">
                           
          <div style="margin-top: -120px; padding-top: -120px;"> <center><h2 class="fontface-one text-color-dark padding-bottom-35 wow fadeInUp" data-wow-delay="300ms">Our <span class="text-color-secondary font-weight-700">Partners</span></h2> </center></div>
          <div class="container">
            <div class="swiper-container sponsors-slider-inner">
               <div class="swiper-wrapper">
                   <?php foreach ($partners as $partner):  ?>
                  <div class="swiper-slide">
                     <div class="sponsor-image-outer">
                     <?=$this->Html->image('../projectimg/'.$partner->logoimg, ['alt' => 'NetPro partners','class'=>'width-100'])?>
<!--                        <img src="images/sposnors-logo-5.png" alt="sponsors-img" class="width-100">-->
                     </div>
                  </div>
                   <?php endforeach; ?>

               </div>
            </div>
         </div>
      </section>
      <!-- Sponsors Slider Section End -->

     
      <!-- Contact Form Section Start -->
      <section class="contact-form-section padding-top-bottom" id="contact-form-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="company-contact-detail wow fadeInLeft" data-wow-delay="300ms">
                     <div class="contact-heading padding-bottom-35">
                        <h2 class="fontface-one text-color-dark ">Connect</h2>
                        <h2 class="fontface-one text-color-dark">with <span class="font-weight-700">NetPro<span class="text-color-primary">.</span></span>
                        </h2>
                     </div>
                     <p class="paragraph-14 text-color-darkgrey fontface-two">
                      NetPro International Limited.</p>
                     <div class="contact-detail-list">
                        <ul>
                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">29 Umaru Dikko Street</li>
                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">Abuja, Nigeria</li>
                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">+234(0)92917404</li>
                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">info@netpro.com.ng</li>
                        </ul>
                     </div>

                     <div class="contact-company-icons padding-top-35">
                        <ul class="company-social-icons">
                           <li class="company-social-icons-list">
                              <a href="https://www.facebook.com/pages/Netpro-Internationa..." class="facebook-icon"> <i class="fab fa-facebook-f"></i></a>
                           </li>
                           <li class="company-social-icons-list">
                              <a href="https://twitter.com/Netpro__" class="twitter-icon"> <i class="fab fa-twitter"></i> </a>
                           </li>

                           <li class="company-social-icons-list">
                              <a href="https://ng.linkedin.com/pub/netpro-international-l..." class="linkedin-icon"><i class="fab fa-linkedin-in"></i></a>
                           </li>

                           <li class="company-social-icons-list">
                              <a href="#." class="googleplus-icon"><i class="fab fa-google-plus-g"></i></a>
                           </li>
                           <li class="company-social-icons-list">
                              <a href="#." class="dribble-icon"><i class="fab fa-dribbble"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="col-lg-6 offset-lg-1">
                  <div class="company-contact-form wow fadeInRight" data-wow-delay="300ms">
                     <h3 class="text-color-dark font-weight-600 fontface-one padding-bottom-45">Write Us</h3>
                     <?= $this->Form->create(null,['url'=>['controller'=>'Faqquestions','action'=>'getintouch'],'class'=>'contact-form-outer']) ?>
<!--                     <form class="contact-form-outer">-->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="contact-form-textfield padding-bottom-30">
                                  <input name="name" type="text" placeholder="Your Name" class="form-control paragraph-16">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="contact-form-textfield padding-bottom-30">
                                  <input name="email" type="email" placeholder="Your Email" class="form-control paragraph-16">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="contact-form-textfield padding-bottom-45">
                                  <input name="subject" type="text" placeholder="Subject" class="form-control paragraph-16">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="contact-form-textfield padding-bottom-40">
                                  <textarea name="message" placeholder="Your Message" class="form-control paragraph-16"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12">
                                <?= $this->Form->button('Send Message',['class'=>'button-setting button-setting-primary background-secondary text-color-white width-100 text-center']) ?>
<!--                              <a class="button-setting button-setting-primary background-secondary text-color-white width-100 text-center">Send Message</a>-->
                           </div>
                        </div>
                    <?= $this->Form->end() ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Form Section End -->