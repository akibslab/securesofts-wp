<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package securesofts
 */

get_header();

$blog_column = is_active_sidebar('blog-sidebar') ? 8 : 12;

?>
<!-- start: Breadcrumb Section -->
<?php if (apply_filters('securesofts_page_title', true)) : ?>
   <section class="breadcrumb-section">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="breadcrumb_inner">
                  <?php single_post_title('<h1 class="title">', '</h1>'); ?>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>
<!-- end: Breadcrumb Section -->

<section class="ss-post-details__area">
   <div class="container">
      <div class="row">
         <div class="col-lg-<?php print esc_attr($blog_column); ?>">
            <div class="ss-post__wrapper">
               <?php
               while (have_posts()) :
                  the_post();

                  get_template_part('template-parts/content', get_post_format());

                  // author biography
                  get_template_part('template-parts/biography');
               ?>

                  <!-- next previous post -->
                  <?php if (get_previous_post_link() || get_next_post_link()) : ?>
                     <div class="ss-post__navigation">
                        <div class="row">
                           <?php $prevPost = get_previous_post(true); ?>
                           <div class="col-md-6">
                              <?php if ($prevPost) : ?>
                                 <div class="navigation__post prev-post">
                                    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100, 100)); ?>
                                    <a href="<?php the_permalink($prevPost->ID); ?>">
                                       <div class="post_thumb">
                                          <?php echo $prevthumbnail ?>
                                       </div>
                                       <div class="post_text">
                                          <span><i class="far fa-chevron-double-left"></i><?php echo esc_html__('Previous', 'securesofts'); ?></span>
                                          <h4><?php echo esc_html__($prevPost->post_title, 'securesofts'); ?></h4>
                                       </div>
                                    </a>
                                 </div>
                              <?php endif; ?>
                           </div>

                           <?php $nextPost = get_next_post(true); ?>
                           <div class="col-md-6">
                              <?php if ($nextPost) : ?>
                                 <div class="navigation__post next-post">
                                    <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100, 100)); ?>
                                    <a href="<?php the_permalink($nextPost->ID); ?>">
                                       <div class="post_thumb">
                                          <?php echo $nextthumbnail ?>
                                       </div>
                                       <div class="post_text">
                                          <span><?php echo esc_html__('Next', 'securesofts'); ?><i class="far fa-chevron-double-right"></i></span>
                                          <h4><?php echo esc_html__($nextPost->post_title, 'securesofts'); ?></h4>
                                       </div>
                                    </a>
                                 </div>
                              <?php endif; ?>
                           </div>

                        </div>
                     </div>

                  <?php endif; ?>

                  <!-- related post -->
                  <?php
                  $post_id = get_the_ID();
                  $cat_ids = array();
                  $categories = get_the_category($post_id);

                  if (!empty($categories) && !is_wp_error($categories)) :
                     foreach ($categories as $category) :
                        array_push($cat_ids, $category->term_id);
                     endforeach;
                  endif;

                  $current_post_type = get_post_type($post_id);

                  $query_args = array(
                     'category__in'   => $cat_ids,
                     'post_type'      => $current_post_type,
                     'post__not_in'    => array($post_id),
                     'posts_per_page'  => '3',
                  );

                  $related_cats_post = new WP_Query($query_args);

                  if ($related_cats_post->have_posts()) : ?>
                     <div class="related_posts">
                        <div class="section_title">
                           <h4 class="title"><?php esc_html_e('Related Posts', 'securesofts'); ?></h4>
                        </div>
                        <div class="post_items">
                           <?php while ($related_cats_post->have_posts()) : $related_cats_post->the_post(); ?>
                              <article class="post_item">
                                 <div class="mini_post_img">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                 </div>
                                 <div class="post_content">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <span class="date"><?php the_time(get_option('date_format')); ?></span>
                                 </div>
                              </article>
                           <?php endwhile;
                           wp_reset_postdata(); ?>
                        </div>
                     </div>
                  <?php endif; ?>

               <?php
                  // If comments are open or we have at least one comment, load up the comment template.
                  if (comments_open() || get_comments_number()) :
                     comments_template();
                  endif;

               endwhile; // End of the loop.
               ?>
            </div>
         </div>
         <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <div class="col-lg-4">
               <div class="ss-main__sidebar">
                  <?php get_sidebar(); ?>
               </div>
            </div>
         <?php endif; ?>
      </div>
   </div>
</section>

<?php
get_footer();
