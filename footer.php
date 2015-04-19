      <!-- Footer Section -->
      <div id="footer" class="row">
      
        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12 logo">
            <a href="http://www.tourismhq.com/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/tourismhq-logo.png" border="0"></a>
            <p>Copyright <?php echo date('Y'); ?> Tourism HQ Ltd</p>
            <p>Site by Momentum Marketing Ltd</p>
        </div>
      
        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12 links">
			<?php wp_nav_menu( array('menu' => 'Footer Navigation' )); ?>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12 facebook-widget">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FBlueSkyExperience&amp;width=302&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=340456316047618" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:302px; height:258px;" allowTransparency="true"></iframe>
        </div>

      </div>
      <!-- End of Footer Section -->
      
    </div>
    

    <!-- FAQ Modal -->
	<?php 
	  $page_id = 37; 
	  $page_data = get_page( $page_id );
	  $page_title = $page_data->post_title;
	  $page_content = apply_filters('the_content', $page_data->post_content); 
    ?>
    
    <div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo $page_title; ?></h4>
          </div>
          <div class="modal-body"><?php echo $page_content; ?></div>
        </div>
      </div>
    </div>
    
    <!-- Terms and Conditions Modal -->
	<?php 
	  $page_id = 39; 
	  $page_data = get_page( $page_id );
	  $page_title = $page_data->post_title;
	  $page_content = apply_filters('the_content', $page_data->post_content); 
    ?>
    
    <div class="modal fade" id="terms-and-conditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo $page_title; ?></h4>
          </div>
          <div class="modal-body"><?php echo $page_content; ?></div>
        </div>
      </div>
    </div>

    <!-- Privacy Policy Modal -->
	<?php 
	  $page_id = 41; 
	  $page_data = get_page( $page_id );
	  $page_title = $page_data->post_title;
	  $page_content = apply_filters('the_content', $page_data->post_content); 
    ?>
    
    <div class="modal fade" id="privacy-policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo $page_title; ?></h4>
          </div>
          <div class="modal-body"><?php echo $page_content; ?></div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body"><iframe src="//player.vimeo.com/video/119919431?title=0&byline=0&portrait=0" width="100%" height="600" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
        </div>
      </div>
    </div>
    
    <?php include('vip.php'); ?>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    
    <script src="<?php bloginfo( 'template_url' ); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/ie10-viewport-bug-workaround.js"></script>
    
    
    <script type="text/javascript">
	$(function(){
		
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	  
	  /* Script to open faq */
	  $("#menu-item-5, #menu-item-11").click(function(){
		  jQuery("#faq").modal('show');
	  });	  
	  
	  /* Script to open terms and conditions */
	  $("#menu-item-7").click(function(){
		  jQuery("#terms-and-conditions").modal('show');
	  });	  
	  
	  /* Script to open privacy policy */
	  $("#menu-item-36").click(function(){
		  jQuery("#privacy-policy").modal('show');
	  });	  

	  /* Script to open video */
	  $("#play-video").click(function(){
		  jQuery("#video").modal('show');
	  });	
	  
	  /* Script to stop video */
	  $('#video').on('hidden.bs.modal', function (e) {
		$('#video iframe').attr("src", $("#video  iframe").attr("src"));
	  });	    
	  
	});	
	</script>
    
    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jssor.slider.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
              
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            /*function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();*/

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
	<script type="text/javascript">
            function div3_onclick(idx) {
                //	var hide_content_id = "#content" + idx;
                var toggle_content_id = "#iframe_" + idx;
                //	var product_name = jQuery("#p_title" + idx).text().trim();
                rem = idx%10;
                org = idx-(idx%10);
    
                if(rem==1){
                    jQuery("#iframe_"+(org+2)).hide();
                    jQuery("#iframe_"+(org+3)).hide();
                    jQuery("#uframe_"+(org+2)).hide();
                    jQuery("#uframe_"+(org+3)).hide();
                }else if(rem==2){
                    jQuery("#iframe_"+(org+1)).hide();
                    jQuery("#iframe_"+(org+3)).hide();
                    jQuery("#uframe_"+(org+1)).hide();
                    jQuery("#uframe_"+(org+3)).hide();
                }else if(rem==3){
                    jQuery("#iframe_"+(org+1)).hide();
                    jQuery("#iframe_"+(org+2)).hide();
                    jQuery("#uframe_"+(org+1)).hide();
                    jQuery("#uframe_"+(org+2)).hide();
                }
                jQuery(toggle_content_id).slideToggle(500);
            }
    
            $(document).ready(function(){
                // Initiate
                $(".carousel").carousel({
                    interval: 5000
                });
                
                // Enable controls
                $(".left").click(function(){
                    $(".carousel").carousel('prev');
                });
                
                $(".right").click(function(){
                    $(".carousel").carousel('next');
                });
                
                $('.nav a').on('click', function(){ 
                    if($('.navbar-toggle').css('display') !='none'){
                        $(".navbar-toggle").trigger( "click" );
                    }
                });
                
                $('#btnvipcode').click(function(){
                    
                    msg = "";
                    
                    firstname = $('#firstname').val();
                    lastname = $('#lastname').val();
                    email = $('#email').val();
                    mobile = $('#mobile').val();
                    
                    if(email==""){
                        msg += "Please Enter Email Address!\n";
                    }
                    
                    if(mobile==""){
                        msg += "Please Enter Mobile Number!\n";
                    }
                    
                    if(msg==""){
                    
                        $.post('http://www.springbreakfiji.com/wp-content/themes/bluesky/vipcoderequest.php', 
                               {firstname:firstname, lastname:lastname, email:email, mobile:mobile},
                               function(data){
                                   alert(data);
                                   $('#vip-code').css("display","none");
                               }
                        );
                    
                    }else{
                        
                        alert(msg);
                        
                    }
                });
                
                    
            });
                        
            jQuery(function(){
              jQuery('#flipcountdownbox1').flipcountdown({
                   size:"xs",
                   beforeDateTime:'11/23/2015 12:00:01'
                  });
            })	
    </script>

	<?php
        /* Always have wp_footer() just before the closing </body>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to reference JavaScript files.
         */
    
        wp_footer();
    ?>
    
    </div>
    
  </body>
</html>