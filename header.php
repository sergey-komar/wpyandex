<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpyandex
 */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="header">
    <div class="container-header">
      <div class="header-top">
          <div class="container">
            <div class="header-top__inner">
              <a download="" href="<?php the_field('skachat', 'options');?>" class="header-top__link">
                Скачать инструкцию из 89 пунктов, как запустить успешную рекламную кампанию
              </a>
            </div>
          </div>
      </div>
      <div class="header-bottom">
        <div class="container-header">
          <div class="header-bottom__inner">
            <div class="nav-icon">
              <div class="nav-icon__middle"></div>
            </div>
            <nav class="menu">
             
              <?php wp_nav_menu([
                'theme_location' => 'menu-header',
                'container' => '',
                'menu_class' => 'menu__list'
              ])?>
            </nav>

            <div class="header-bottom__social">
              <a target="_blank" href="<?php the_field('shapka_vatczap', 'options');?>" class="header-bottom__social-whatsapp">
                <img src="<?php echo get_template_directory_uri();?> ./assets/images/home/icon/whatsapp.svg" alt="img">
              </a>
              <a target="_blank" href="<?php the_field('shapka_telegram', 'options');?>" class="header-bottom__social-telegram">
                <img src="<?php echo get_template_directory_uri();?> . /assets/images/home/icon/telegram.svg" alt="img">
              </a>
            </div>

            <div class="header-bottom__contact">
              <a  href="<?php the_field('shapka_telefon', 'options');?>"  class="header-bottom__contact-phone"><?php the_field('shapka_telefon_tekst', 'options');?> </a>
              <button data-modal class="header-bottom__contact-btn">Обратный звонок</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


