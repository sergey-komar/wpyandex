<?php
/**
 * Template Name: Как настроить рекламу
 */
?>

<?php get_header();?>

<main class="main">
    <section class="articles">
        <div class="container">
           
        <div class="search-sidebar">
            <?php if ( ! dynamic_sidebar('sidebar-blog') ) : ?>
                <?php dynamic_sidebar( 'sidebar-blog' ); ?>
              <?php endif; ?>
            </div>
           <div class="articles__inner">
          
             <aside class="aside"> 
                <div class="aside__list">
               <?php get_sidebar();?>
                </div>
            </aside>


        <div class="articles-content">
        
            <div class="container">
                <div class="articles-block">
                        
                    <div class="articles-block__inner">
                        <div class="articles-block__content">

                        <?php if(have_posts()) : while(have_posts()) : the_post()?>
                                
                        <a  href="<?php the_permalink();?>" class="articles-block__item">
                                    <div class="articles-block__item-wrapper">
                                        <div class="articles-block__item-time"><?php the_time('j F Y')?></div>
                                            <div class="articles-block__item-title">
                                            <?php the_title();?>
                                            </div>
                                           
                                    </div>
                                     
                                   
                                    <div class="articles-block__bottom">
                                            <div class="articles-block__item-img">
                                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                                            </div>
                                            <div class="articles-block__bottom-wrapper">
                                            <div class="articles-block__bottom-heart">
                                        
                                                <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                                            </div>
                                            <div class="articles-block__bottom-comments">
                                            <img src="<?php echo get_template_directory_uri();?>./assets/images/home/articles-comments.svg" alt="img">
                                                <?php echo get_comments_number(); ?>
                                            </div>
                                            </div>
                                      
                                    </div>
                                </a>
                            <?php endwhile; endif;?>
                            <?php wp_reset_postdata();?>
                        </div>

                       
                        
                    </div>
                </div>
            </div>
        </div>
               
         
        </div>
    </section>
</main>
<?php get_footer();?>
