<?php
/**
 * The post detail file.
 *
 * @package WordPress
 * @subpackage BlueSky Fiji
 */

get_header(); 

if (have_posts()) : while (have_posts()) : the_post(); 
?>
      
      <!-- Package & Payment Information Section -->
      <div id="package-payment-section" class="row">
      
        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
        
      </div>
      <!-- End of Package & Payment Information Section -->
      

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
      
<?php get_footer(); ?> 