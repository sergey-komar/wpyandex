<?php
get_header();
?>

<main class="main">
<div class="container">

<h1 class="search_page">
	  <?php
	  /* translators: %s: search query. */
	  printf( esc_html__( 'Результаты поиска по фразе: %s'), '<span>' . get_search_query() . '</span>' );
	  ?>
  </h1>
</div>
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <aside class="aside aside-page">
                    <div class="aside__list">
                        <?php get_sidebar()?>
                    </div>

                </aside>

                <div class="page-block">
                    <div class="page-block__content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="page-block__content-wrapper">
                            <div class="page-bloc__top">
                                <!-- <div class="page-bloc__top-title">Маркетинг</div> -->
                                <div class="page-bloc__top-time"><?php the_time('j F Y')?></div>
                            </div>
                            <h1 class="page-block__content-title">
                              <?php the_title();?>
                            </h1>
                            <div class="page-block__content-text">
                               <?php the_content();?>
                            </div>
 
                              <div class="articles-block__bottom">
                                  <div class="articles-block__bottom-heart">
                                    
                                      <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                                  </div>
                                  <div class="articles-block__bottom-comments">
                                    
                                      <?php comments_number(); ?>
                                  </div>
                                </div>
                                <div class="page-form__wrapper">
                                <?php comment_form();?> 
                                </div>
                          </div>

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
              Хотите привлекать клиентов или улучшить рекламу?
            </div>
            <p class="advertising__subtitle">
              Оставляйте заявку прямо сейчас!
            </p>

            <form class="advertising-form form">
                <input  title="Разрешено использовать только пробелы и русские буквы" type="text" name="text" class="form__input input1" placeholder="Введите ваше имя" required   pattern="^[a-zA-Z\s]+$">
                <input id="input-mask1" type="text" class="form__input" placeholder="Введите ваш телефон" required>
                <button class="form__btn">Оставить заявку</button>
            </form>

            <p class="advertising__policy">
              Нажимая на кнопку, вы соглашаетесь с <span>Политикой конфиденциальности</span> 
            </p>

            <div class="advertising__social-title">
              Или свяжитесь с нами в мессенджерах:
            </div>
            <div class="advertising__social">
              <a href="#" class="advertising__social-btn whatsapp">
                Написать в Whatsapp
              </a>
              <a href="#" class="advertising__social-btn telegram">
                Написать в Telegram
              </a>
              <a href="#" class="advertising__social-btn vk">
                Написать Вконтакте
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>