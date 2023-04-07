<?php
/**
 * Template Name: Главная страница
 */
?>
<?php get_header();?>
     <main class="main">
      <div class="heading">
        <div class="container">
          <div class="heading__inner">
            <div class="heading__box-title">
              <h1 class="heading__title title">
               <?php the_field('klienty_zagolovok');?>
              </h1>
            </div>
            <div class="heading__block">
              <div class="heading__content">
                <div class="heading__content-text"> <?php the_field('klienty_tekst');?></div>
                <button data-modal class="heading__content-btn"> <?php the_field('klienty_knopka');?></button>
                <div class="heading__content-social">
                  <p class="heading__content-social-text">Ответим на ваши вопросы:</p>
                  <a href="<?php the_field('shapka_vatczap', 'options');?>" class="heading__content-social-icon">
                    <img src="<?php echo get_template_directory_uri();?>./assets/images/home/icon/whatsapp.svg" alt="">
                  </a>
                  <a href="<?php the_field('shapka_telegram', 'options');?>" class="heading__content-social-icon">
                    <img src="<?php echo get_template_directory_uri();?>./assets/images/home/icon/telegram.svg" alt="img">
                  </a>
                </div>
              </div>
              <div class="heading__img">
                <img src="<?php the_field('klienty_izobrazhenie');?>" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="setting">
        <div class="container">
          <div class="setting__inner">
            <h2 class="setting__title title">
            <?php the_field('nastrojka_zagolovok');?>
            </h2>
            <div class="setting__block">
              <div class="setting__content">
                <div class="setting__content-title"><?php the_field('nastrojka_tekst');?></div>

                <?php if(have_rows('nastrojka_blok')) : while(have_rows('nastrojka_blok')) : the_row();?>
                <div class="setting__item">
                  <div class="setting__item-img">
                    <img src="<?php the_sub_field('nastrojka_blok_kartinka');?>" alt="img">
                  </div>
                    <div class="setting__item-box">
                      <div class="setting__item-box-title">
                      <?php the_sub_field('nastrojka_blok_zagolovok');?>
                      </div>
                      <p class="setting__item-box-text"><?php the_sub_field('nastrojka_blok_opisanie');?></p>
                    </div>
                </div>
                <?php endwhile; endif;?>
               

                <a href="<?php the_field('nastrojka_ssylka');?>" class="setting__content-btn">Начать тест</a>
              </div>
              <div class="setting__img">
                <img src="<?php the_field('nastrojka_izobrazhenie');?>" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="marketer">
        <div class="container">
          <h2 class="marketer__title title">
          <?php the_field('chastnyj_zagolovok');?>
          </h2>
          <div class="marketer__block">
            <div class="marketer__block-img">
              <img src="<?php the_field('chastnyj_kartinka');?>" alt="img">
            </div>

            <div class="marketer__content">
              <?php if(have_rows('chastnyj_blok')) : while(have_rows('chastnyj_blok')) : the_row()?>
              <div class="marketer__item">
                <div class="marketer__item-img">
                  <img src="<?php the_sub_field('chastnyj_blok_izobrazhenie');?>" alt="img">
                </div>
                <p class="marketer__item-text">
                <?php the_sub_field('chastnyj_blok_zagolovok');?>
                </p>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>

          <div class="marketer__box">
            <div class="marketer__box-content">
              <div class="marketer__box-content-title">
              <?php the_field('chastnyj_blok_video_zagolovok');?>
              </div>
              <p class="marketer__box-content-text">
              <?php the_field('chastnyj_blok_video_tekst');?>
              </p>
            </div>
            <div class="marketer__box-img">
              <!-- <img class="marketer__box-img--picture" src="<?php the_field('chastnyj_blok_video_izobrazhenie');?>" alt="">
              <a target="_blank" href="<?php the_field('chastnyj_blok_video_ssylka');?>" class="marketer__box-img-link">
                <img src="<?php echo get_template_directory_uri();?>./assets/images/home/marketer/marketer-play.svg" alt="">
              </a> -->
              <?php the_field('chastnyj_blok_video_ssylka');?>
            </div>
          </div>
          <div class="marketer__subtitle">
          <?php the_field('chastnyj_blok_tekst_video');?>
          </div>
        </div>
      </div>


      <div class="approach">
        <div class="container">
          <h2 class="approach__title title">
          <?php the_field('podhod_zagolovok');?>
          </h2>
            <div class="approach__inner">

              <div class="approach-left">
                <h3 class="approach-left__title"><?php the_field('podhod_levyj_blok_zagolovok');?></h3>
                <div class="approach-left__block">
                  <?php if(have_rows('podhod_levyj_blok_element')) : while(have_rows('podhod_levyj_blok_element')) : the_row();?>
                      <div class="approach-left__item">
                        <div class="approach-left__img">
                          <img src="<?php the_sub_field('podhod_levyj_blok_element_izobrazhenie');?>" alt="img">
                        </div>
                        <div class="approach-left__content">
                          <div class="approach-left__content-title">
                          <?php the_sub_field('podhod_levyj_blok_element_zagolovok');?>
                          </div>
                          <p class="approach-left__content-text">
                          <?php the_sub_field('podhod_levyj_blok_element_tekst');?>
                          </p>
                        </div>
                      </div>
                    <?php endwhile; endif;?>
                </div>
              </div> 

              <div class="approach-right">
                <div class="approach-right__title">
                  <h3><?php the_field('podhod_pravyj_blok_zagolovok');?></h3>
                  <img src="<?php the_field('podhod_pravyj_blok_izobrazhenie');?>" alt="img">
                </div>
                <div class="approach-right__block">
                <?php if(have_rows('podhod_pravyj_blok_element')) : while(have_rows('podhod_pravyj_blok_element')) : the_row();?>
                  <div class="approach-right__item">
                    <div class="approach-right__img">
                      <img src="<?php the_sub_field('podhod_pravyj_blok_element_izobrazhenie');?>" alt="img">
                    </div>
                    <div class="approach-right__content">
                      <div class="approach-right__content-title">
                      <?php the_sub_field('podhod_pravyj_blok_element_zagolovok');?>
                      </div>
                      <p class="approach-right__content-text">
                      <?php the_sub_field('podhod_pravyj_blok_element_tekst');?>
                      </p>
                    </div>
                  </div>
                <?php endwhile; endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="work" class="work">
          <div class="container">
            <h2 class="work__title title">Как я работаю</h2>
            <div class="work__block">
              <div class="work__item right">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_1');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_1');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_1');?>
                </p>
              </div>

              <div class="work__item down-two">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_2');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_2');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_2');?>
                </p>
              </div>

              <div class="work__item down">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_4');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_4');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_4');?>
                </p>
              </div>

              <div class="work__item left">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_3');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_3');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_3');?>
                </p>
              </div>

              <div class="work__item right">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_5');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_5');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_5');?>
                </p>
              </div>

              <div class="work__item down">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_6');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_6');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_6');?>
                </p>
              </div>

              <div class="work__item down-two">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_8');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_8');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_8');?>
                </p>
              </div>

              <div class="work__item left">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_7');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_7');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_7');?>
                </p>
              </div>

              <div class="work__item right">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_9');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_9');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_9');?>
                </p>
              </div>

              <div class="work__item down-three">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_10');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_10');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_10');?>
                </p>
              </div>

              <div class="work__item">
                <div class="work__content">
                  <div class="work__content-img">
                    <img src="<?php the_field('kak_ya_rabotayu_izobrazhenie_11');?>" alt="img">
                  </div>
                  <div class="work__content-title">
                  <?php the_field('kak_ya_rabotayu_zagolovok_11');?>
                  </div>
                </div>
                <p class="work__item-text">
                <?php the_field('kak_ya_rabotayu_tekst_11');?>
                </p>
              </div>
            </div>
          </div>
        </div>


        <div id="cases" class="cases">
          <div class="container">
            <h2 class="cases__title title">
            <?php the_field('poslednie_kejsy_zagolovok');?>
            </h2>
            <p class="cases__subtitle">
            <?php the_field('poslednie_kejsy_podzagolovok');?>
            </p>

            <div class="cases-block">
              <?php if(have_rows('poslednie_kejsy_blok')) : while(have_rows('poslednie_kejsy_blok')) : the_row();?>
              <div class="cases-block__item">
                <div class="cases-block__item-img">
                  <img src="<?php the_sub_field('poslednie_kejsy_blok_izobrazhenie');?>" alt="img">
                </div>
                <div class="cases-block__item-title">
                <?php the_sub_field('poslednie_kejsy_blok_zagolovok');?>
                </div>


                <?php if(have_rows('poslednie_kejsy_blok_tekst')) : while(have_rows('poslednie_kejsy_blok_tekst')) : the_row();?>
                <p class="cases-block__item-text">
                <?php the_sub_field('poslednie_kejsy_blok_tekst_opisanie');?>
                </p>
                <?php endwhile; endif;?>
                

                <a href=" <?php the_sub_field('poslednie_kejsy_blok_ssylka');?>" class="cases-block__item-btn">Смотреть полный кейс</a>
              </div>
              <?php endwhile; endif;?>
            </div>

            <a href="<?php the_field('poslednie_kejsy_ssylka');?>" class="case__btn btn__link">Перейти на страницу всех кейсов</a>
          </div>
        </div>


        <div class="certificates">
          <div class="container">
            <h2 class="certificates__title title"><?php the_field('moi_sertifikaty_zagolovok');?></h2>
            <div class="certificates-slider">
            <?php if(have_rows('moi_sertifikaty_blok')) : while(have_rows('moi_sertifikaty_blok')) : the_row();?>
              <div class="certificates-slider__item">
                <div class="certificates-slider__item-img">
                  <img src=" <?php the_sub_field('moi_sertifikaty_blok_izobrazhenie');?>" alt="img">
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>


        <div class="points">
          <div class="container">
            <h2 class="points__title title">
            <?php the_field('59_punktov_zagolovok');?>
            </h2>
            <p class="points__subtitle">
            <?php the_field('59_punktov_podzagolovok');?>
            </p>

            <div class="points-block">
              <div class="points-block__inner">
                <div class="points-block__content">
                  <div class="points-block__content-title">
                  <?php the_field('59_punktov_zagolovok_video');?>
                  </div>
                  <p class="points-block__content-text">
                  <?php the_field('59_punktov_podzagolovok_video');?>
                  </p>
                </div>
                <div class="points-block__img">
               <?php the_field('59_punktov_izobrazhenie');?>
                </div>
              </div>

              <!-- <a target="_blank" href="<?php the_field('59_punktov_ssylka_video');?>" class="points-block__play">
                <img src="<?php echo get_template_directory_uri();?>./assets/images/home/points/points-play.svg" alt="img">
              </a> -->
            </div>
          </div>
        </div>

        <div id="clients" class="clients">
          <div class="container">
            <h2 class="clients__title title">
            <?php the_field('chto_govoryat_klienty_desktop_zagolovok');?>
            </h2>

            <div class="clients-block">
            <?php if(have_rows('chto_govoryat_klienty_desktop_blok')) : while(have_rows('chto_govoryat_klienty_desktop_blok')) : the_row();?>
              <div class="clients-block__item">
                <div class="clients-block__item-img">
                  <img src="<?php the_sub_field('chto_govoryat_klienty_desktop_blok_izobrazhenie');?>" alt="img">
                </div>
              </div>
            <?php endwhile; endif;?>
            </div>

          

            <div class="video-reviews">
              <div class="video-reviews__title"><?php the_field('videootzyvy_zagolovok');?></div>
              <div class="video-reviews__block">
              <?php if(have_rows('videootzyvy_desktop')) : while(have_rows('videootzyvy_desktop')) : the_row();?>
                <div class="video-reviews__item">
                  <?php the_sub_field('videootzyvy_desktop_ssylka');?>
                </div>
                <?php endwhile; endif;?>
              </div>
            </div>

           

            <a href="<?php the_field('videootzyvy_ssylka');?>" class="clients__btn btn__link">Перейти на страницу всех отзывов</a>
          </div>
        </div>

        <div class="clients-slider">
          <div class="container">
            <div class="clients-slider__block">
            <?php if(have_rows('chto_govoryat_klienty_mobilnyj_blok')) : while(have_rows('chto_govoryat_klienty_mobilnyj_blok')) : the_row();?>
              <div class="clients-block__item-slider">
                <div class="clients-block__item-img-slider">
                  <img src="<?php the_sub_field('chto_govoryat_klienty_mobilnyj_blok_izobrazhenie');?>" alt="img">
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>

        <div class="video-slider">
          <div class="container">
            <div class="video-slider__block">
            <?php if(have_rows('videootzyvy_mobilnyj')) : while(have_rows('videootzyvy_mobilnyj')) : the_row();?>
              <div class="video-reviews__item-slider">
              <div class="video-reviews__item-slider--wrapper">
              <?php the_sub_field('videootzyvy_mobilnyj_ssylka');?>
              </div>
             
              </div>
              <?php endwhile; endif;?>
            </div>
            <a href="<?php the_field('videootzyvy_ssylka');?>" class="clients__btn btn__link">Перейти на страницу всех отзывов</a>
          </div>
        </div>
      
       
       

        <div id="rates" class="rates">
          <div class="container">
            <h2 class="rates__title title"><?php the_field('tarify_zagolovok');?></h2>
            <div class="rates-block">
            <?php if(have_rows('tarify_desktop')) : while(have_rows('tarify_desktop')) : the_row();?>
              <div class="rates-block__item one">
                <div class="rates-block__item-img">
                  <img src="<?php the_sub_field('tarify_desktop_izobrazhenie');?>" alt="img">
                </div>
                <div class="rates-block__item-title"><?php the_sub_field('tarify_desktop_zagolovok');?></div>
                <div class="rates-block__item-subtitle"><?php the_sub_field('tarify_desktop_podzagolovok');?></div>
                <div class="rates-block__item-price"><?php the_sub_field('tarify_desktop_czena');?></div>

                <?php if(have_rows('tarify_desktop_blok')) : while(have_rows('tarify_desktop_blok')) : the_row();?>
                <p class="rates-block__item-text"><?php the_sub_field('tarify_desktop_blok_tekst');?></p>
                <p class="rates-block__item-desc"><?php the_sub_field('tarify_desktop_blok_opisanie');?></p>
                <?php endwhile; endif;?>
               
                <button class="rates-block__item-btn" data-modal>заказать</button>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>

        <div class="rates-slider">
          <div class="container">
            <div class="rates-slider__block">
            <?php if(have_rows('tarify_mobilnyj')) : while(have_rows('tarify_mobilnyj')) : the_row();?>
              <div class="rates-slider__wrapper">
                <div class="rates-block__item one">
                  <div class="rates-block__item-img">
                    <img src="<?php the_sub_field('tarify_mobilnyj_izobrazhenie');?>" alt="img">
                  </div>
                  <div class="rates-block__item-title"><?php the_sub_field('tarify_mobilnyj_zagolovok');?></div>
                  <div class="rates-block__item-subtitle"><?php the_sub_field('tarify_mobilnyj_podzagolovok');?></div>
                  <div class="rates-block__item-price"><?php the_sub_field('tarify_mobilnyj_czena');?></div>


                  <?php if(have_rows('tarify_mobilnyj_blok')) : while(have_rows('tarify_mobilnyj_blok')) : the_row();?>
                  <p class="rates-block__item-text"><?php the_sub_field('tarify_mobilnyj_blok_tekst');?></p>
                  <p class="rates-block__item-desc"><?php the_sub_field('tarify_mobilnyj_blok_opisanie');?></p>
                  <?php endwhile; endif;?>


                  <button class="rates-block__item-btn" data-modal>заказать</button>
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>


        
        <div class="announcement">
          <div class="container">
            <div class="announcement-tabs">
              <div class="announcement-tabs__item">
                <button class="announcement-tabs__item-btn">
                  На первых позициях в поиске Яндекса и Google
                </button>
                <button class="announcement-tabs__item-btn">
                  На сотнях сайтов-партнеров рекламной сети Яндекса (РСЯ) и Google (КМС)
                </button>
              </div>
              
              <?php if(have_rows('taby_izobrazhenie')) : while(have_rows('taby_izobrazhenie')) : the_row()?>
              <div class="announcement-tabs__content">
                <div class="announcement-tabs__content-img">
                  <img src=" <?php the_sub_field('taby_kartinka');?>" alt="img">
                </div>
              </div>
              <?php endwhile; endif;?>
             
            </div>
          </div>
        </div>


        <div class="agency">
          <div class="container">
            <h2 class="agency__title title">
             <?php the_field('agentstvo_zagolovok');?>
            </h2>
            <p class="agency__subtitle">
            <?php the_field('agentstvo_podzagolovok');?>
            </p>

            <div class="agency-block">
              <div class="agency-block__left">
                <button class="agency-block__left-btn">Агентство</button>

                <?php if(have_rows('agentstvo_levyj_bok')) : while(have_rows('agentstvo_levyj_bok')) : the_row()?>
                <div class="agency-block__left-item">
                  <div class="agency-block__left-title"><?php the_sub_field('agentstvo_levyj_bok_zagolovok');?></div>
                  <p class="agency-block__left-text">
                  <?php the_sub_field('agentstvo_levyj_bok_tekst');?>
                  </p>
                </div>
                <?php endwhile; endif;?>

              </div>
              <div class="agency-block__center">
                <div class="agency-block__center-img">
                  <img src=" <?php the_field('agentstvo_izobrazhenie');?>" alt="img">
                </div>
              </div>
              <div class="agency-block__right">
                <button class="agency-block__right-btn">Мой опыт</button>

                <?php if(have_rows('agentstvo_pravyj_blok')) : while(have_rows('agentstvo_pravyj_blok')) : the_row()?>
                <div class="agency-block__right-item">
                  <div class="agency-block__right-title">
                  <?php the_sub_field('agentstvo_pravyj_blok_zagolovok');?>
                  </div>
                  <p class="agency-block__right-text">
                  <?php the_sub_field('agentstvo_pravyj_blok_tekst');?>
                  </p>
                </div>
                <?php endwhile; endif;?>

              </div>
            </div>
          </div>
        </div>


        <div id="guarantees" class="guarantees">
          <div class="container">
            <h2 class="guarantees__title title">
            <?php the_field('garantii_zagolovok');?>
            </h2>

            <div class="guarantees-block">
              <div class="guarantees__inner">

                  <?php if(have_rows('garantii_blok')) : while(have_rows('garantii_blok')) : the_row()?>
                <div class="guarantees-block__item">
                  <div class="guarantees-block__item-img">
                    <img src="<?php the_sub_field('garantii_blok_izobrazhenie');?>" alt="img">
                  </div>
                  <div class="guarantees-block__content">
                    <div class="guarantees-block__content-title">
                    <?php the_sub_field('garantii_blok_zagolovok');?>
                    </div>
                    <p class="guarantees-block__content-text">
                    <?php the_sub_field('garantii_blok_tekst');?>
                    </p>
                  </div>
                </div>
                  <?php endwhile; endif;?>
              </div>

              <div class="guarantees-block__img">
                <img src="<?php the_field('garantii_izobrazhenie');?>" alt="img">
              </div>
            </div>
          </div>
        </div>

        <div class="accardion">
          <div class="container">
            <h2 class="accardion__title title"><?php the_field('voprosy_i_otvety_zagolovok');?></h2>

            <div class="accardion__block">
              <?php if(have_rows('voprosy_i_otvety_blok')) : while(have_rows('voprosy_i_otvety_blok')) : the_row()?>
                <div class="accardion__item">
                    <div class="accardion__item-title">
                    <?php the_sub_field('voprosy_i_otvety_blok_zagolovok');?>
                    </div>
                  <div class="accardion__item-text">
                      <div class="accardion__item-content">
                      <?php the_sub_field('voprosy_i_otvety_blok_tekst');?>
                      </div>
                  </div>
                </div>
                <?php endwhile; endif;?>
            </div>
          </div>
        </div>
         
      


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

