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

                <div class="page-block">
				<h1>
          
          <?php
              if( is_category( ) ){
                echo ('Рубрика: ')  . get_queried_object()->name;
              }

              if( is_tag( ) ){
                echo ('Записи с меткой  <br>')  . get_queried_object()->name;
              }

              if( is_author( ) ){
                echo ('Записи автора  <br>')  . get_queried_object()->name;
              }

            ?>

          </h1>
                    <div class="articles-block__content">
                      
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                        <?php endwhile; else: ?>
                          Записей нет.
                        <?php endif; ?>  
        
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