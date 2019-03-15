  <section class="about-company-section background-grey padding-top-bottom" id="about-company-section">
         <div class="container">
<div class="about-company-services">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <h2 class="fontface-one text-color-dark padding-bottom-35 wow fadeInUp" data-wow-delay="300ms">What <span class="text-color-secondary font-weight-700">We Offer</span></h2>
                        <p class="paragraph-15 fontface-two text-color-darkgrey wow fadeInUp" data-wow-delay="350ms">
                           Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin.</p>
                     </div>
                  </div>
               </div>
               <div class="about-company-services-block">
                  <div class="row">
                      <?php $delay = 300; foreach ($services as $service): $delay +50;?>
                     <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 offset-sm-0">
                         <div class="about-company-services-block-inner background-white text-center wow fadeInUp" data-wow-delay="<?=$delay?><?='ms'?>">
                           <div class="about-company-services-block-inner-icon"><i class="fas fa-cog"></i></div>
                           <h4 class="fontface-one text-color-dark font-weight-700 padding-bottom-10"><?=$service->name?></h4>
                           <p class="text-color-secondary paragraph-14 font-weight-300 fontface-two padding-bottom-20">Service Summary</p>
                           <p class="text-color-darkgrey paragraph-14 fontface-two">
                             <?= substr($service->description,0,200).'...'?>.
                             <br /> <br />
                                <?= $this->Html->link(__('Learn More'), ['controller'=>'Services','action' => 'servicedetails',$service->id,$this->GenerateUrl($service->name)],
                                             ['class'=>'button-setting background-secondary text-color-white button-setting-primary']) ?>
                           </p>
                        </div>
                     </div>
                      <?php endforeach; ?>
<!--                     <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 offset-sm-0">
                        <div class="about-company-services-block-inner background-white text-center wow fadeInUp" data-wow-delay="350ms">
                           <div class="about-company-services-block-inner-icon"><i class="fas fa-pencil-alt"></i></div>
                           <h4 class="fontface-one text-color-dark font-weight-700 padding-bottom-10">Product Branding</h4>
                           <p class="text-color-secondary paragraph-14 font-weight-300 fontface-two padding-bottom-20">Packages &amp; Products</p>
                           <p class="text-color-darkgrey paragraph-14 fontface-two">
                              Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 offset-sm-0">
                        <div class="about-company-services-block-inner background-white text-center wow fadeInUp" data-wow-delay="400ms">
                           <div class="about-company-services-block-inner-icon"><i class="fas fa-code"></i></div>
                           <h4 class="fontface-one text-color-dark font-weight-700 padding-bottom-10">Seo Marketing</h4>
                           <p class="text-color-secondary paragraph-14 font-weight-300 fontface-two padding-bottom-20">Online Services</p>
                           <p class="text-color-darkgrey paragraph-14 fontface-two">
                              Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                        </div>
                     </div>-->
                  </div>
               </div>
            </div>
               </div>
      </section>

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