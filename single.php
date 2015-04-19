<?php
/**
 * The post detail file.
 *
 * @package WordPress
 * @subpackage BlueSky Fiji
 */

get_header(); 

$options = get_option('bsfoptions_options');

if (have_posts()) : while (have_posts()) : the_post(); 
?>
      
      <!-- Jssor Slider Begin -->
      <!-- You can move inline styles to css file or css block. -->
      <!-- ================================================== -->
      <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
      top: 0px; left: -15px; width: 1085px !important; height: 500px; overflow: hidden;">
          <!-- Loading Screen -->
          <div u="loading" style="position: absolute; top: 0px; left: 0px;">
              <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
              top: 0px; left: 0px; width: 100%; height: 100%;">
              </div>
              <div style="position: absolute; display: block; background: url(<?php bloginfo( 'template_url' ); ?>/img/loading.gif) no-repeat center center;
              top: 0px; left: 0px; width: 100%; height: 100%;">
              </div>
          </div>
          <!-- Slides Container -->
          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1085px; height: 500px; overflow: hidden;">
			  <?php
              
               $args = array(
                 'post_type' => 'attachment',
                 'numberposts' => -1,
                 'post_status' => null,
                 'post_parent' => $post->ID
                );
              
                $attachments = get_posts( $args );
                   if ( $attachments ) {
                      foreach ( $attachments as $attachment ) {
                         echo '<div>';
                         echo wp_get_attachment_image( $attachment->ID, "full" );
                         echo '</div>';
                      }
                   }
              
              ?>          
          </div>

          <!-- Bullet Navigator Skin Begin -->
          <style>
              /* jssor slider bullet navigator skin 21 css */
              /*
              .jssorb21 div           (normal)
              .jssorb21 div:hover     (normal mouseover)
              .jssorb21 .av           (active)
              .jssorb21 .av:hover     (active mouseover)
              .jssorb21 .dn           (mousedown)
              */
              .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                  background: url(<?php bloginfo( 'template_url' ); ?>/img/b21.png) no-repeat;
                  overflow: hidden;
                  cursor: pointer;
              }

              .jssorb21 div {
                  background-position: -5px -5px;
              }

			  .jssorb21 div:hover, .jssorb21 .av:hover {
				  background-position: -35px -5px;
			  }

              .jssorb21 .av {
                  background-position: -65px -5px;
              }

              .jssorb21 .dn, .jssorb21 .dn:hover {
                  background-position: -95px -5px;
              }
          </style>
          <!-- bullet navigator container -->
          <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
              <!-- bullet navigator item prototype -->
              <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
          </div>
          <!-- Bullet Navigator Skin End -->
          <!-- Arrow Navigator Skin Begin -->
          <style>
              /* jssor slider arrow navigator skin 21 css */
              /*
              .jssora21l              (normal)
              .jssora21r              (normal)
              .jssora21l:hover        (normal mouseover)
              .jssora21r:hover        (normal mouseover)
              .jssora21ldn            (mousedown)
              .jssora21rdn            (mousedown)
              */
              .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn {
                  position: absolute;
                  cursor: pointer;
                  display: block;
                  background: url(<?php bloginfo( 'template_url' ); ?>/img/a21.png) center center no-repeat;
                  overflow: hidden;
              }

              .jssora21l {
                  background-position: -3px -33px;
              }

              .jssora21r {
                  background-position: -63px -33px;
              }

              .jssora21l:hover {
                  background-position: -123px -33px;
              }

              .jssora21r:hover {
                  background-position: -183px -33px;
              }

              .jssora21ldn {
                  background-position: -243px -33px;
              }

              .jssora21rdn {
                  background-position: -303px -33px;
              }
          </style>
          <!-- Arrow Left -->
          <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
          </span>
          <!-- Arrow Right -->
          <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
          </span>
      </div>
      <!-- Jssor Slider End -->
      
      <!-- Book Now Section -->
      <div id="book-now" class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
          <?php the_content(); ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
          <div id="book-now-button-info">
            <a href="#book-your-package-section"><img src="<?php bloginfo( 'template_url' ); ?>/img/btn-booknow-package.jpg" width="231" height="53" alt=""></a><br />
            <?php the_secondary_content( 'Booknow Message', get_the_ID() ); ?>
          </div>
        </div>
      </div>
      <!-- End of Book Now Section -->
      
      <!-- Package & Payment Information Section -->
      <div id="package-payment-section" class="row">
      
        <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
          <?php the_secondary_content( 'Packages Comes', get_the_ID() ); ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
          <?php the_secondary_content( 'Payment Options', get_the_ID() ); ?>
        </div>
        
      </div>
      <!-- End of Package & Payment Information Section -->
      
      <!--Social Media Section-->
      <div id="social-media" class="row">
        <h2>Recommend this package</h2>
        <a href="http://twitter.com/share?url=<?php echo current_page_url(); ?>&text=<?php echo get_the_title(); ?>&hashtags=packages" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/ico-twitter.jpg"></a>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo current_page_url(); ?>" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/ico-facebook.jpg"></a>
        <a href="mailto:?Subject=<?php echo str_replace(" ", "%20", get_the_title()); ?>&Body=I%20saw%20this%20and%20thought%20of%20you!%20<?php echo current_page_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/ico-email.jpg"></a>
      </div>
      <!--End of Social Media Section-->
      
      <!--Book Your Package Now Section-->
      <div id="book-your-package-section" class="row">
        <h2>BOOK YOUR PACKAGE NOW</h2>
        <!--<iframe></iframe>-->
        
		<?php
        /*function get_package_count() {
            $connn = mysql_connect("mysql2.domains4less.net.nz:3306","springadmin","spring123") or print("server error " . mysql_error());
            $dbnnn = mysql_select_db("springbreak", $connn) or print("database error" . mysql_error());
            $sql = "SELECT SUM(avail) AS available, SUM(tot) AS total FROM package";
            $res = mysql_query($sql, $connn);
            $row = mysql_fetch_assoc($res);
            return $row['available'] . ' / ' . $row['total'];
        }
        */	
            $grey_banner_form = '
                            <form name="contact_form" id="contact_form" method="POST" style="height: 80px; background-color: #888;">
                            <table>
                            <tr style="height: 20px;">
                            </tr>
                            <tr style="height: 24px;">
                            <td style="font-size:20px; font-weight:bold; text-align: right;"><span style="position:relative; top:2px;">' . $options['vipcode_string'] . '</span></td>
                            <td style="padding:0 16px;"><input style="padding-top: 1px; height: 12px;" type="text" id="c_name" name="c_name" size="20"></td>
                            <td style="padding:0 8px;"><select id="c_phone1" name="c_phone1" style="border: 1px solid gray;">
                            <option value="21">021</option>
                            <option value="27">027</option>
                            <option value="22">022</option>
                            <option value="29">029</option>
                            <option value="23">023</option>
                            </select>
                            <input style="padding-top: 1px; height: 12px;" type="text" id="c_phone2" name="c_phone2" size="10" value="">
                            </td>
                            <td style="font-size:20px; font-weight:bold; padding-left:16px;">
                                <span style="cursor:pointer; position:relative; top:2px;" onclick="javascript:onClickSendContact();">
                                    Submit
                                </span>
                            </td>
                            </tr>
                            <tr>
                            <td></td>
                            <td style="text-align:center;">(Name)</td>
                            <td style="text-align:center;">(Cell Number)</td>
                            <td></td>
                            </tr>
                            </table>
                            </form>
        ';
            if ($options['show_nothing']) {
                $gray_banner_content = '<div  id="r_txt" style=""></div>';
            } else {
                $grey_banner_count = '<div style="" id="r_txt"><span style="font-size:42px; font-weight:bold;">' . get_package_count() . '</span><br /><span style="font-size:16px; font-weight:bold;">Packages Remain</span></div>';
                $gray_banner_content = $options['enable_counts'] ? $grey_banner_count : $grey_banner_form;
            }
            if (isset($_POST['c_name']) && isset($_POST['c_phone2'])) {
                $wpdb->query("INSERT INTO vipdraws (draw_name, draw_phone, draw_ip) VALUES ('" . $_POST['c_name'] . "', '(0" . $_POST['c_phone1'] . ')' . $_POST['c_phone2'] . "', '" . $_SERVER['REMOTE_ADDR'] . "')");
                print '<script>alert("Thank you your entry has been submitted");</script>';
            }
        ?>
        
        <?php
        
            if ($options['sales_paused']) {
        ?>
        
              <div class="alert alert-success pull-center" role="alert">
                Sales have been temporarily paused, we'll be back shortly.
              </div>
        
        <?php
            } else {
				
				
				
				  global $post, $wpdb;
				  
				  if (substr($post->post_title, -8) == "-bluesky") {
					  $prod_name = substr($post->post_title, 0, -8);

					  $real_content = apply_filters('the_content', $post->post_content);

					  preg_match("/<input type=\"hidden\" name=\"p22_limit\" value=\"(\d+)\">/", $real_content, $m);
					  $limit = (int) $m[1];
					  
					  $sql = "SELECT COUNT(*) AS cnt FROM pxaccess WHERE txn1 REGEXP '^" . preg_replace("/^(.+?)\s*\(.*$/", "$1", $prod_name) . "' AND success = 1 AND px_id > 42";
					  $res = $wpdb->get_results($sql, 'ARRAY_A');
					  $purchased = $res[0]['cnt'];

					  if ($limit <= $purchased) {
						  $prod_name = preg_replace("/\(\\$[\d,]+\)/", "(SOLD OUT)", $prod_name);
						  $real_content = preg_replace(
								  '/<p[^>]+><img[^>]+?10percent[^>]+>.+?<\/a><\/p>/s', '', $real_content);
					  }

					  $is_vip_text = '';
					  
					  if ($options['show_password']) {
						  
						  $real_content .= '<div class="content_wrap" style="margin:20px 0px; display:block !important; width:100%; clear:both; float:left;">';

						  if (get_post_meta(get_the_ID(), 'iframe1', true) != '') {

							  $real_content .= '<div id="ss" class="col-xs-12 col-sm-4 col-md-4" style="float:right;"><a onclick="div3_onclick(' . $cnt . '1);" href="javascript:;"><span style="font-family: Arial; font-size:14px;line-height: 28px; padding:10px; border:2px solid #000; color:#000; display:block; margin:0px auto 10px;">' . get_post_meta(get_the_ID(), 'iframe1-message', true) . '</span></a></div>';
						  }

						  if (get_post_meta(get_the_ID(), 'iframe2', true) != '') {

							  $real_content .= '<div id="ss" class="col-xs-12 col-sm-4 col-md-4" style="float:right;"><a onclick="div3_onclick(' . $cnt . '2);" href="javascript:;"><span style="font-family: Arial; font-size:14px;line-height: 28px; padding:10px; border:2px solid #000; color:#000; display:block; margin:0px auto 10px;">' . get_post_meta(get_the_ID(), 'iframe2-message', true) . '</span></a></div>';
						  }

						  if (get_post_meta(get_the_ID(), 'iframe3', true) != '') {

							  $real_content .= '<div id="ss" class="col-xs-12 col-sm-4 col-md-4" style="float:right;"><a onclick="div3_onclick(' . $cnt . '3);" href="javascript:;"><span style="font-family: Arial; font-size:14px;line-height: 28px; padding:10px; border:2px solid #000; color:#000; display:block; margin:0px auto 10px;">' . get_post_meta(get_the_ID(), 'iframe3-message', true) . '</span></a></div>';
						  }

						  $real_content .= '</div>';

						  /* First iFrame Code */

						  if (get_post_meta(get_the_ID(), 'iframe1', true) != '') {

							  $real_content .= preg_replace(
									  '/<iframe (.+?)(\/iframe>)/', '<div id="iframe_' . $cnt . '1" style="display: none;" >
									  <div class="panel panel-primary col-xs-12 col-sm-12 col-md-12" style="display: block; clear: both; margin: 43px auto 53px; padding-left:0px; padding-right:0px;">
										  ' . do_shortcode('[get-chunk title="vip_code_entry"]') . '
										  
										  <div class="row">

										  
											<label class="col-xs-12 col-sm-2 col-md-2 control-label" for="gonzo_' . $cnt . '1" style="padding:5px 0 0 0;">Code:</label>
											<div class="col-xs-12 col-sm-7 col-md-7">
											  <input type="text" class="form-control" value="" id="gonzo_' . $cnt . '1" />
											</div>
											<div class="col-xs-12 col-sm-3 col-md-3">
											  <button type="button" class="btn btn-primary btn-submit" onclick="javascript:onClickShowPostContent(' . $cnt . '1);">Submit</button>
											</div>
										  </div>  
																							
										  <p><a href="#" data-toggle="modal" data-controls-modal=vip-code-request" data-target="#vip-code-request">Dont have a code?<u> Click here!</u></a></p>
										  
										</div>
									  </div>

								  </div><iframe id="uframe_' . $cnt . '1" style="display: none;" scrolling="no" class="white" $1$2', get_post_meta(get_the_ID(), 'iframe1', true));
						  }
						  /* End of First iFrame Code */

						  /* Second iFrame Code */

						  if (get_post_meta(get_the_ID(), 'iframe2', true) != '') {

							  $real_content .= preg_replace(
									  '/<iframe (.+?)(\/iframe>)/', '
								  <div id="iframe_' . $cnt . '2" style="display: none;" scrolling="no" class="white" >

									  <div class="panel panel-primary col-xs-12 col-sm-12 col-md-12" style="display: block; clear: both; margin: 43px auto 53px; padding-left:0px; padding-right:0px;">
										  ' . do_shortcode('[get-chunk title="vip_code_entry"]') . '
										  
										  <div class="row">
										  
											<label class="col-xs-12 col-sm-2 col-md-2 control-label" for="gonzo_' . $cnt . '2" style="padding:5px 0 0 0;">Code:</label>
											<div class="col-xs-12 col-sm-7 col-md-7">
											  <input type="text" class="form-control" value="" id="gonzo_' . $cnt . '2" />
											</div>
											<div class="col-xs-12 col-sm-3 col-md-3">
											  <button type="button" class="btn-submit btn btn-primary" onclick="javascript:onClickShowPostContent(' . $cnt . '2);">Submit</button>
											</div>
										  </div>  
																							
										  <p><a href="#" data-toggle="modal" data-controls-modal=vip-code-request" data-target="#vip-code-request">Dont have a code?<u> Click here!</u></a></p>
										  
										</div>
									  </div>                                            


								  </div><iframe id="uframe_' . $cnt . '2" style="display: none;" scrolling="no" class="white" $1$2', get_post_meta(get_the_ID(), 'iframe2', true));
						  }


						  /* Third iFrame Code */

						  if (get_post_meta(get_the_ID(), 'iframe3', true) != '') {

							  $real_content .= preg_replace(
									  '/<iframe (.+?)(\/iframe>)/', '<div id="iframe_' . $cnt . '3" style="display: none;" class="white" >

									  <div class="panel panel-primary col-xs-12 col-sm-12 col-md-12" style="display: block; clear: both; margin: 43px auto 53px; padding-left:0px; padding-right:0px;">
										  ' . do_shortcode('[get-chunk title="vip_code_entry"]') . '
										  
										  <div class="row">
										  
											<label class="col-xs-12 col-sm-2 col-md-2 control-label" for="gonzo_' . $cnt . '3" style="padding:5px 0 0 0;">Code:</label>
											<div class="col-xs-12 col-sm-7 col-md-7">
											  <input type="text" class="form-control" value="" id="gonzo_' . $cnt . '3" />
											</div>
											<div class="col-xs-12 col-sm-3 col-md-3">
											  <button type="button" class="btn-submit btn btn-primary" onclick="javascript:onClickShowPostContent(' . $cnt . '3);">Submit</button>
											</div>
										  </div>  
																							
										  <p><a href="#" data-toggle="modal" data-controls-modal=vip-code-request" data-target="#vip-code-request">Dont have a code?<u> Click here!</u></a></p>
										  
										</div>
									  </div>                                            
								  


								  </div><iframe id="uframe_' . $cnt . '3" style="display: none;" scrolling="no" class="white" $1$2', get_post_meta(get_the_ID(), 'iframe3', true));
						  }
					  } else {

						  $real_content .= '<div class="content_wrap" style="margin:20px 0px; display:block !important; width:100%; clear:both; float:left;">';

						  /* Code for first iframe */

						  if (get_post_meta(get_the_ID(), 'iframe1', true) != '') {

							  $real_content .= '<div id="ss" class="col-xs-12 col-sm-12 col-md-4" style="float:right;"><a onclick="div3_onclick(' . $cnt . '1);" href="javascript:;"><span style="font-family: Arial; font-size:14px;line-height: 28px; padding:10px; border:2px solid #000; color:#000; display:block; margin:0px auto 20px;">' . get_post_meta(get_the_ID(), 'iframe1-message', true) . '</span></a></div>';
						  }

						  /* Code for second iframe */
						  if (get_post_meta(get_the_ID(), 'iframe2', true) != '') {

							  $real_content .= '<div id="ss" class="col-xs-12 col-sm-12 col-md-4" style="float:right;"><a onclick="div3_onclick(' . $cnt . '2);" href="javascript:;"><span style="font-family: Arial; font-size:14px;line-height: 28px; padding:10px; border:2px solid #000; color:#000; display:block; margin:0px auto 20px;">' . get_post_meta(get_the_ID(), 'iframe2-message', true) . '</span></a></div>';
						  }

						  /* Code for thrid iframe */
						  if (get_post_meta(get_the_ID(), 'iframe3', true) != '') {

							  $real_content .= '<div id="ss" class="col-xs-12 col-sm-12 col-md-4" style="float:right;"><a onclick="div3_onclick(' . $cnt . '3);" href="javascript:;"><span style="font-family: Arial; font-size:14px;line-height: 28px; padding:10px; border:2px solid #000; color:#000; display:block; margin:0px auto 20px;">' . get_post_meta(get_the_ID(), 'iframe3-message', true) . '</span></a></div>';
						  }

						  $real_content .= '</div>';

						  $real_content .= preg_replace(
								  '/<iframe (.+?)(<\/iframe>)/', '<iframe id="iframe_' . $cnt . '1" style="display: none;" scrolling="no" class="white" $1$2', get_post_meta(get_the_ID(), 'iframe1', true));

						  $real_content .= preg_replace(
								  '/<iframe (.+?)(<\/iframe>)/', '<iframe id="iframe_' . $cnt . '2" style="display: none;" scrolling="no" class="white" $1$2', get_post_meta(get_the_ID(), 'iframe2', true));

						  $real_content .= preg_replace(
								  '/<iframe (.+?)(<\/iframe>)/', '<iframe id="iframe_' . $cnt . '3" style="display: none;" scrolling="no" class="white" $1$2', get_post_meta(get_the_ID(), 'iframe3', true));
					  }

					  $real_content = preg_replace(
							  array('/<div class="post_part2">/',
						  '/div2_onclick\(\)/',
						  '/form_submit\(\)/'
							  ), array('<div class="post_part2" id="post_scart' . $cnt . '">',
						  'div2_onclick(' . $cnt . ')',
						  'form_submit(' . $cnt . ')'
							  ), $real_content);

					  $post_html_string .= '


		  <div class="single_cont container padd-off text-center pakage_' . $cnt . '">
				  ' . $real_content . '
		  </div>

		  <div class="clear_space"></div>


';
					  $cnt++;
				  }


			print $post_html_string . "<br>";



        
            }
        ?>
        
      </div>
      <!--End of Book Your Package Now Section-->

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
      
<?php get_footer(); ?> 