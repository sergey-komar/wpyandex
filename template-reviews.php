<?php
/**
 * Template Name: Отзывы
 */
?>
<?php
?>
<?php get_header();?>

<main class="main">
<section class="page">
    <div class="container">
        <div class="page__inner">
            <aside class="aside aside-page">
                <div class="aside__list">
                    <?php get_sidebar()?>
                </div>

            </aside>

          <div class="page-block reviews">
            <div class="container">
            <div class="video-reviews">
                  <div class="video-reviews__title">Видеоотзывы</div>
                <div class="video-reviews__block">

                  <?php
                    $reviews = new WP_Query([
                      'post_type' => 'reviews',
                      'posts_per_page' => '30'
                    ])
                  ?>
                      <?php if($reviews->have_posts()) : while($reviews->have_posts()) : $reviews->the_post()?>
                    <div class="video-reviews__item">
                      <div class="video-reviews__item-img video-reviews__page">
                        <?php if(get_the_post_thumbnail_url(get_the_ID(),'full')) :?>
                          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>">

                          <?php else:?>
                            <?php the_field('videootzyvy_ssylkaa');?>
                          <?php endif;?>
                      </div>
                     
                        <div class="articles-block__bottom">
                                  <div class="articles-block__bottom-heart">
                                      
                                      <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                                  </div>
                                
                        </div>
                    </div>
                    <?php endwhile; endif;?>
                    <?php wp_reset_postdata();?>
                  </div>
              </div>
              <div class="video-slider">
                <div class="container">
                  <div class="video-slider__block">
                  <?php
                    $reviews_mobile = new WP_Query([
                      'post_type' => 'reviews-mobile',
                      'posts_per_page' => '30'
                    ])
                  ?>
                      <?php if($reviews_mobile->have_posts()) : while($reviews_mobile->have_posts()) : $reviews_mobile->the_post()?>
                    <div class="video-reviews__item-slider">
                      <div class="video-reviews__item-img-slider video-reviews__page">
                        <div class="video-reviews__page">
                        <?php if(get_the_post_thumbnail_url(get_the_ID(),'full')) :?>
                          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>">

                          <?php else:?>
                            <?php the_field('mobilnyj_videootzyv');?>
                          <?php endif;?>
                        </div>
                      </div>
                     
                      <div class="articles-block__bottom">
                          <div class="articles-block__bottom-heart">
                              
                              <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                          </div>
                          <div class="articles-block__bottom-comments">
                            
                            
                          </div>
                        </div>
                    </div>
                    <?php endwhile; endif;?>
                    <?php wp_reset_postdata();?>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

        </div>
    </div>
</section>

<div class="advertising">
    <div class="container">
      <div class="advertising__block">
        <div class="advertising__inner">
          <div class="advertising__title">
            <?php the_field('poslednij_blok_zagolovok');?>
          </div>
          <p class="advertising__subtitle">
            Оставляйте заявку прямо сейчас!
          </p>

          <div class="advertising-form form">
              <?php echo do_shortcode('[contact-form-7 id="298" title="Форма на странице"]')?>
          </div>

          <a href="<?php the_field('poslednij_blok_politika_konfidenczialnosti');?>" class="advertising__policy">
            Нажимая на кнопку, вы соглашаетесь с <span>Политикой конфиденциальности</span> 
          </a>

          <div class="advertising__social-title">
            Или свяжитесь с нами в мессенджерах:
          </div>
          <div class="advertising__social">
            <a href=" <?php the_field('poslednij_blok_zagolovok_whatsapp');?>" class="advertising__social-btn whatsapp">
              Написать в Whatsapp
            </a>
            <a href=" <?php the_field('poslednij_blok_zagolovok_telegram');?>" class="advertising__social-btn telegram">
              Написать в Telegram
            </a>
            <a href=" <?php the_field('poslednij_blok_zagolovok_vk');?>" class="advertising__social-btn vk">
              Написать Вконтакте
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
</main>
<?php get_footer();?>