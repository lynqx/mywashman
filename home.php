<?php // include the header file
   $page_title = 'Online Laundry Subscription';
   include('includes/header.php');
?>

   <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
      <div class="fullwidthbanner-container revolution-slider">
        <div class="fullwidthabnner">
          <ul id="revolutionul">
            <!-- THE NEW SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src="assets/frontend/pages/img/revolutionslider/bg1.jpg" alt="">
              
              <div class="caption lft slide_title slide_item_left" style="line-height: 40px; text-align:center;" 
                data-x="30"
                data-y="120"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                <span style="font-size:65px;">Laundry Day ?!</span></span><br><span class="slide_title_white_bold"> We got you covered!</span>
              </div>
              <div class="caption lft slide_subtitle slide_item_left"
                data-x="30"
                data-y="225"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                First online package subscription laundry in Nigeria
              </div>
              <a class="caption lft btn red slide_btn slide_item_left" href="<?php echo $baseurl; ?>subscribe.php"
                data-x="187"
                data-y="295"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                <img src="assets/images/logos/step-1.png" width="30px"> Subscribe Now! <i class="m-icon-swapright m-icon-white"></i>
              </a>                        
              <div class="caption lfb"
                data-x="640" 
                data-y="0" 
                data-speed="700" 
                data-start="1000" 
                data-easing="easeOutExpo">
                <img src="assets/frontend/pages/img/revolutionslider/wash2.png" alt="Image 1">
              </div>
            </li>    

            <!-- THE FIRST SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src="assets/frontend/pages/img/revolutionslider/bg4.jpg" alt="">
                            
              <div class="caption lft slide_title slide_item_left"
                data-x="30"
                data-y="105"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                Laundry piled up? 
              </div>
              <div class="caption lft slide_subtitle slide_item_left"
                data-x="30"
                data-y="180"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                Our service is a convenient, pocket-friendly <br> way to check laundry off your “to-do” list!
              </div>
              <div class="caption lft slide_desc slide_item_left"
                data-x="30"
                data-y="250"
                data-speed="400"
                data-start="2500"
                data-easing="easeOutExpo">
                <img src="assets/images/logos/step-3.png" width="25px"> &nbsp; Our free pick-up and delivery service is a lifesaver!
              </div>
              <a class="caption lft btn green slide_btn slide_item_left" href="<?php echo $baseurl; ?>subscribe.php"
                data-x="30"
                data-y="290"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                <img src="assets/images/logos/step-1.png" width="35px">  Click Here Now !
              </a>                        
              <div class="caption lfb"
                data-x="640" 
                data-y="30" 
                data-speed="700" 
                data-start="1000" 
                data-easing="easeOutExpo">
                <img src="assets/frontend/pages/img/revolutionslider/wash6.png" alt="Image 1">
              </div>
            </li>

            <!-- THE SECOND SLIDE -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">                        
              <img src="assets/frontend/pages/img/revolutionslider/bg2.jpg" alt="">
              <div class="caption lfl slide_title slide_item_left" style="line-height: 40px; text-align:left;" 
                data-x="30"
                data-y="105"
                data-speed="400"
                data-start="3500"
                data-easing="easeOutExpo">
                Easy, Affordable &amp; <br> Convinient
              </div>
              <div class="caption lfl slide_subtitle slide_item_left"
                data-x="30"
                data-y="220"
                data-speed="400"
                data-start="4000"
                data-easing="easeOutExpo">
                &raquo; Three Easy Steps &raquo;
              </div>
              <div class="caption lfl slide_desc slide_item_left"
                data-x="30"
                data-y="265"
                data-speed="400"
                data-start="4500"
                data-easing="easeOutExpo">
                <i class="fa fa-chevron-right"></i> Subscribe Online or mobile
                <br>
				<i class="fa fa-chevron-right"></i> We do our work
				<br>
				<i class="fa fa-chevron-right"></i> We deliver to your door steps.
              </div>                        
              <div class="caption lfr slide_item_right" 
                data-x="635" 
                data-y="105" 
                data-speed="1200" 
                data-start="1500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/icon1.png" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="580" 
                data-y="245" 
                data-speed="1200" 
                data-start="2000" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/icon2.png" alt="Image 1">
              </div>
              
              <div class="caption lfr slide_item_right" 
                data-x="835" 
                data-y="230" 
                data-speed="1200" 
                data-start="3000" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/icon3.png" alt="Image 1">
              </div>
              <div class="caption lft slide_item_right" 
                data-x="865" 
                data-y="45" 
                data-speed="500" 
                data-start="5000" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/hint1.png" id="rev-hint1" alt="Image 1">
              </div>                        
              <div class="caption lfb slide_item_right" 
                data-x="355" 
                data-y="355" 
                data-speed="500" 
                data-start="5500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/hint2.png" id="rev-hint2" alt="Image 1">
              </div>
			  <div class="caption lfb slide_item_right" 
                data-x="930" 
                data-y="225" 
                data-speed="500" 
                data-start="5500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/hint3.png" id="rev-hint2" alt="Image 1">
              </div>
            </li>
                        
            <!-- THE THIRD SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <img src="assets/frontend/pages/img/revolutionslider/bg3.jpg" alt="">
              <div class="caption lfl slide_item_left" 
                data-x="00" 
                data-y="35" 
                data-speed="400" 
                data-start="1500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/wash5.png" alt="Image 1">
              </div>
              <div class="caption lfr slide_title"
                data-x="580"
                data-y="100"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                a sparkling wardrobe
              </div>
              <div class="caption lfr slide_subtitle"
                data-x="580"
                data-y="170"
                data-speed="400"
                data-start="2500"
                data-easing="easeOutExpo">
                thats our promise.
              </div>
              <div class="caption lfr slide_desc"
                data-x="580"
                data-y="220"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Give us your dirty laundry<br>and we will give you a sparkling wardrobe.
              </div>
              </li>               
			  
			  <!-- THE FOURTH SLIDE -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">                        
              <img src="assets/frontend/pages/img/revolutionslider/bg2.jpg" alt="">
              <div class="caption lfl slide_title slide_item_left" style="line-height: 40px; text-align:left;" 
                data-x="30"
                data-y="105"
                data-speed="400"
                data-start="3500"
                data-easing="easeOutExpo">
                <img src="assets/frontend/pages/img/revolutionslider/attire.png" alt="Image 1">
              </div>
              <div class="caption lfl slide_subtitle slide_item_left"
                data-x="60"
                data-y="320"
                data-speed="400"
                data-start="4000"
                data-easing="easeOutExpo">
                We are experts in caring for your african wears
              </div>
                                      
              <div class="caption lfr slide_item_right" 
                data-x="637" 
                data-y="00" 
                data-speed="1200" 
                data-start="1500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/man1.png" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="820" 
                data-y="00" 
                data-speed="1200" 
                data-start="2000" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/woman1.png" alt="Image 1">
              </div>
              
            </li>

                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
          <div class="col-md-4 col-sm-4">
		  
            <div class="service-box-heading">
              <em><i class="">
			  <img src="assets/images/logos/step-1.png" width="35px">
			  </i></em>
              <span>Subscribe</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. 
			Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="">
			  <img src="assets/images/logos/step-2.png" width="35px">
				</i></em>
              <span>Our System Runs</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. 
			Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="">
			  <img src="assets/images/logos/step-3.png" width="35px">
			</i></em>
              <span>We Deliver; and to time</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. 
			Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
        </div>
        <!-- END SERVICE BOX -->


       <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class="row mix-block margin-bottom-40">
                 
          <!-- TESTIMONIALS -->
		  <div class="col-md-3">
            <h2><a href="#">Testimonials</a></h2>
            <p>This is what people are saying about us and about our laundry subscription system.</p>
			<hr>
			<hr>
			<hr>
          </div>
		  
          <div class="col-md-9 testimonials-v1">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="assets/frontend/pages/img/people/img1-small.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">Lina Mars</span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="assets/frontend/pages/img/people/img5-small.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">Kate Ford</span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="assets/frontend/pages/img/people/img2-small.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">Jake Witson</span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Carousel nav -->
              <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
              <a class="right-btn" href="#myCarousel" data-slide="next"></a>
            </div>
          </div>
          <!-- END TESTIMONIALS -->
        </div>                
        <!-- END TABS AND TESTIMONIALS -->

        
        <!-- BEGIN CLIENTS -->
        <div class="row margin-bottom-40 our-clients">
          <div class="col-md-3">
            <h2><a href="#">Our Clients</a></h2>
            <p>These companies trust us.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel6-brands">
              <div class="client-item">
                <a href="#">
                  <img src="assets/images/clients/ho3d_gray.png" class="img-responsive" alt="">
                  <img src="assets/images/clients/ho3d.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/images/clients/clux_gray.png" class="img-responsive" alt="">
                  <img src="assets/images/clients/clux.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/images/clients/joit_gray.png" class="img-responsive" alt="">
                  <img src="assets/images/clients/joit.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/images/clients/lynqx_gray.png" class="img-responsive" alt="">
                  <img src="assets/images/clients/lynqx.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/images/clients/hoi_gray.png" class="img-responsive" alt="">
                  <img src="assets/images/clients/hoi.png" class="color-img img-responsive" alt="">
                </a>
              </div>
                                
            </div>
          </div>          
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>

    <?php include('includes/footer.php'); ?>