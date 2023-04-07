<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpyandex
 */

?>

<footer class="footer">
      <div class="container">
        <div class="footer-block">

          <div class="footer__logo-wrapper">
            <div class="footer__logo">
              <div class="footer-block__box">
                <a href="/" class="footer-block__box-logo">
                  <img src="<?php the_field('logotip_v_podvale_izobrazhenie', 'options');?>" alt="img">
                </a>
                <p class="footer-block__box-text">
                <?php the_field('tekst_v_podvale_tekst', 'options');?>
                </p>
              </div>
  
              <p class="footer__logo-text">Политика конфиденциальности</p>
            </div>
          </div>
         
         <div class="footer-block__item-wrapper">
          <div class="footer-block__item">
            <div class="footer-block__item-title">Контакты</div>
            <div class="footer__social">
              <a target="_blank" href="<?php the_field('vk_v_podvale_ssylka', 'options');?>">
                <img src="<?php echo get_template_directory_uri();?>./assets/images/home/icon/footer-vk.svg" alt="img">
              </a>
              <a target="_blank" href="<?php the_field('telegram_v_podvale_ssylka', 'options');?>">
                <img src="<?php echo get_template_directory_uri();?>./assets/images/home/icon/footer-telegram.svg" alt="img">
              </a>
              <a target="_blank" href="<?php the_field('vatczap_v_podvale_ssylka', 'options');?>">
                <img src="<?php echo get_template_directory_uri();?>./assets/images/home/icon/footer-whatsapp.svg" alt="img">
              </a>
            </div>
            <!-- <p class="footer-block__item-text">г. Москва</p> -->
            <a href="<?php the_field('telefon_v_podvale_ssylka', 'options');?>" class="footer-block__item-text"><?php the_field('telefon_v_podvale_tekst', 'options');?></a>
            <a href="<?php the_field('pochta_v_podvale_ssylka', 'options');?>" class="footer-block__item-text"><?php the_field('pochta_v_podvale_tekst', 'options');?></a>
          </div>
          <div class="footer-block__item">
            <div class="footer-block__item-title">Разделы</div>
            <div class="footer__menu">
              <?php
                wp_nav_menu( [
                  'theme_location' => 'menu-footer',
                  'container' => '',
                  'menu_class' => 'footer__menu'
                ] )
              ?>
            </div>
          </div>

          
          <div class="footer-block__item">
            <div class="footer-block__item-title">Популярное</div>
            <div class="footer__menu">
                <?php
                  wp_nav_menu( [
                    'theme_location' => 'menu-popular',
                    'container' => '',
                    'menu_class' => 'footer__menu'
                  ] )
                ?>
            </div>
          </div>
         </div>

         
        </div>

        <p class="footer__copyright">
        <?php the_field('kopirajt_v_podvale_tekst', 'options');?>
        </p>
      </div>
    </footer>
  

<div class="modal">
  <div class="container">
    <div class="modal__inner">
      <?php echo do_shortcode('[contact-form-7 id="299" title="Модалка"]');?>
      <a href="<?php the_field('poslednij_blok_politika_konfidenczialnosti');?>" class="modal__policy">
        Нажимая на кнопку, Вы соглашаетесь <span>с политикой конфиденциальности</span> 
      </a>
      <div data-close class="modal__close">&times;</div> 
    </div>
  </div>
 
</div>

<?php wp_footer(); ?>
</body>

</html>

