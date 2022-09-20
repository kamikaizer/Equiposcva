<?php
/**
 * The template part for displaying single post
 *
 * @package dentisti-clinic
 * @subpackage dentisti-clinic
 * @since dentisti-clinic 1.0
 */
?> 
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>  
<article class="page-box-single">
  <h1><?php the_title(); ?></h1>
  <?php if( get_theme_mod( 'dentisti_clinic_show_featured_image_single_post',true) != '') { ?>
    <div class="box-img">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php } ?> 
  <div class="new-text">
    <?php if( get_theme_mod( 'dentisti_clinic_date_hide',true) != '' || get_theme_mod( 'dentisti_clinic_comment_hide',true) != '' || get_theme_mod( 'dentisti_clinic_author_hide',true) != '') { ?>
      <div class="metabox">
        <?php if( get_theme_mod( 'dentisti_clinic_date_hide',true) != '') { ?>
          <span class="entry-date"><i class="fa fa-calendar"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('dentisti_clinic_metabox_separator_blog_post') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'dentisti_clinic_comment_hide',true) != '') { ?>
          <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','dentisti-clinic'), __('0 Comments','dentisti-clinic'), __('% Comments','dentisti-clinic') ); ?></span><?php echo esc_html( get_theme_mod('dentisti_clinic_metabox_separator_blog_post') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'dentisti_clinic_author_hide',true) != '') { ?>
          <span class="entry-author"><i class="fa fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
        <?php } ?>
        <?php if( get_theme_mod( 'dentisti_clinic_time_hide',false) != '') { ?>
          <span class="entry-time"><i class="fas fa-clock"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
      </div>
    <?php }?>
    <div class="entry-content"><p><?php the_content();?></p></div>
    <?php if( get_theme_mod( 'dentisti_clinic_tags_hide',true) != '') { ?>
    <div class="tags"><p><?php
      if( $tags = get_the_tags() ) {
        echo '<i class="fas fa-tags"></i>';
        echo '<span class="meta-sep"></span>';
        foreach( $tags as $content_tag ) {
          $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
          echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
        }
      } ?></p>
    </div>
    <?php } ?>

    <?php if( get_theme_mod( 'dentisti_clinic_show_single_post_pagination',true) != '') { ?>
      <?php
      the_post_navigation( array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'dentisti-clinic' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Next post:', 'dentisti-clinic' ) . '</span> ',
        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'dentisti-clinic' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Previous post:', 'dentisti-clinic' ) . '</span> ',
      ) );
      echo '<div class="clearfix"></div>';?>
    <?php } ?>
  </div>

  <?php
   // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) {
    comments_template();
  }?>

  <?php get_template_part('template-parts/related-posts'); ?>
</article>


              