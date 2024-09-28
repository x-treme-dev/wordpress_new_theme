<?php
 // функция для установки стилей wp-kama.ru
  function theme_files(){
    // зарегистрировать стили, файлы подключются в нужно порядке
    wp_register_style('theme_reset', get_template_directory_uri() . '/css/reset.css', array(), 'screen');
    wp_register_style('theme_main', get_template_directory_uri() . '/css/main.css', array('theme_reset'), 'screen');
    wp_register_style('theme_mobile', get_template_directory_uri() . '/css/mobile.css', array('theme_reset', 'theme_main'), 'screen');
  }

  // подключить стилей
  wp_enqueue_style('theme_reset');
  wp_enqueue_style('theme_main');
  wp_enqueue_style('theme_mobile');

  // зарегистровать js-скрипт
  wp_register_script('theme_script', get_template_directory_uri() . '/js/main.js', array(), true);
  wp_register_script('jquery',   'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.0', false);
 
  // подключить скрипт
  wp_enqueue_script('theme_script');
  wp_enqueue_script('jquery');

  // подключить хук
  add_action('wp_enqueue_scripts', 'theme_files', 1);



  // добавить 2 сайдбара с содержимым
 

function register_my_custom_widget() {
      register_sidebar(array(
        'name' => 'Cодержание',
        'id' => 'sidebar-left',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="">',
        'after_title' => '</h2>',
    )); 

    register_sidebar(array(
        'name' => 'Разное',
        'id' => 'sidebar-right',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'register_my_custom_widget');






?>