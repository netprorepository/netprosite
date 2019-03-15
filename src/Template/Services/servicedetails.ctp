  <!-- Blog Body -->

    <!-- Blog Body -->

    <section class="blog-body background-grey padding-top-bottom">

        <div class="container">

            <div class="row">

                <!-- Blog Left Detail -->

                <div class="col-md-8">

                    <div class="blog-detail-page-outer">

                        <div class="blog-detail-page-inner bg-white">

                            <h4 class="fontface-one font-weight-600 text-color-dark padding-bottom-30"><?=$service->name?></h4>

                            <div class="blog-detail-page-text padding-bottom-45">

                                <p class="paragraph-13 text-color-dark fontface-two">

                                   <?=$service->description?>
                                </p>

                            </div>



                        </div>

                        <div class="blog-listing-footer-outer">

                            <div class="row">


                                <div class="col-12 text-center">

                                    <!-- Footer LISTING social icon -->

                                    <div class="blog-listing-footer-inner-socialicons">

                                        <ul>

                                            <li>

                                                <a href="#." class="social-icon facebook">

                                                    <i class="fab fa-facebook-f"></i>

                                                </a>

                                            </li>

                                            <li>

                                                <a href="#." class="social-icon twitter">

                                                    <i class="fab fa-twitter"></i>

                                                </a>

                                            </li>

                                            <li>

                                                <a href="#." class="social-icon linkedin">

                                                    <i class="fab fa-linkedin-in"></i>

                                                </a>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Blog Widgets -->

                <div class="col-md-4">

                    <div class="blog-widgets-outer background-white">

                        <div class="search-bar-outer">

                             <div class="company-contact-form wow fadeInRight" data-wow-delay="300ms">
                     <h5 class="text-color-dark font-weight-600 fontface-one padding-bottom-45">Register As A Distributor</h5>
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

                

            </div>

        </div>

    </section>
    <!-- Blog Body End -->


