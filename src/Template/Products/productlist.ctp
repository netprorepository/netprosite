   <!-- About Company Section -->
      <section class="about-company-section background-grey padding-top-bottom" id="about-company-section">
         <div class="container">
            <!-- About Company Slider -->
            <div class="about-company-slider-section">
               <div class="about-company-slider swiper-container">
                  <div class="swiper-wrapper">
                      <?php foreach ($products as $product):  ?>
                     <div class="swiper-slide">
                        <div class="about-company-slide">
                           <div class="row">
                              <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                                 <div class="about-slider-image-section clearfix position-relative">
                                    <div class="about-slider-images-section-inner">
                                         <?=$this->Html->image('/projectimg/'.$product->productimage, ['alt' => 'NetPro - who we are','data-slide'=>'animated','data-animate'=>'zoomIn'])?>
<!--                                       <img src="images/about-slider-img-1.jpg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn">-->
                                    </div>
                                    <div class="about-img-gradient-box gradient-bg-green-blue" data-slide="animated" data-animate="zoomIn"></div>
                                 </div>
                              </div>
                              <div class="col-lg-6 vertical-align-about-caption">
                                 <div class="about-slider-img-detail" data-slide="animated" data-animate="fadeInRight">
<!--                                    <p class="text-color-secondary paragraph-14 fontface-two padding-bottom-25"> NetPro Products.</p>-->
                                    <h2 class="fontface-one text-color-dark padding-bottom-35"> <span class="font-weight-700"><?=$product->name?></span></h2>
                                    <p class="text-color-dark paragraph-15 padding-bottom-35 text-color-darkgrey">
                                       <?=$product->description?> 
                                    </p>
                                    
                                  <?= $this->Html->link(__('Learn More'), ['controller'=>'Products','action' => 'productdetails',$product->id,$this->GenerateUrl($product->name)],
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
         </div>
      </section>
      <!-- /About Company Section End -->
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
