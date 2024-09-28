<?php get_header(); ?>

 
<main class='main'>
        <!-- если sidebar зарегистрирован, то вывести его -->
        <div class="sidebar-left">
        <?php if ( ! dynamic_sidebar('sidebar-left') ) : ?>
         <?php  ( dynamic_sidebar('sidebar-left') )  ?>
                  <h2><?php _e('Categories')?></h2>
            <ul>
                  <?php wp_list_cats('sort_column=name&optioncount=1&hierarhial=0');?>
            </ul>
            <h3><?php _e('Archives')?></h3>
            <ul>
                  <?php wp_get_archives('type=monthly');?>
            </ul>
            <h4>Данные сайта</h4>
            <ul>
                  <label class='sidebar_label' for="">Название: <?php bloginfo( 'name' ); ?></label>
            </ul>
            <ul>
                  <label class='sidebar_label' for="">Описание: <?php bloginfo( 'description' ); ?></label>
            </ul>
            <ul>
                  <label class='sidebar_label' for="">Адрес сайта: <?php bloginfo( 'wpurl' ); ?></label>
            </ul>
            <ul>
                  <label class='sidebar_label' for="">Количество записей: 
                  <?php $count_posts = wp_count_posts(); 
                  $published_posts = $count_posts->publish;
                  echo $published_posts; ?>
                  </label>
            </ul>
             <ul>
                  <label class='sidebar_label' for="">Количество рубрик: 
                  <?php $num_cat = count(  get_categories() ); echo $num_cat; ?>
                  </label>
            </ul>
            <ul>
                  <label class='sidebar_label' for="">Количество пользователей: 
                  <?php $count_users =  count(count_users()); echo $count_users; ?>
                  </label>
            </ul>
         <?php endif; ?>
         
         </div>
      
    
         <div class="content">
         <h1>Записи: </h1>
         <?php if(have_posts()): while(have_posts()): the_post();?>
         <h1><?php the_title();?></h1>
         <h4>Запись от <?php the_time('F jS, Y'); ?></h4>
         <p><?php the_content(_('(more...)'));?></p>
         <hr><?php endwhile;     else:?>

         <p><?php _e('Sorry, no posts');?></p>
         <?php endif; ?>
         </div>
         
         <!-- если sidebar зарегистрирован, то вывести его -->
         <div class="sidebar-right">
         <ul>
         <?php if ( ! dynamic_sidebar('sidebar-right') ) : ?>
         <?php  ( dynamic_sidebar('sidebar-right') )  ?>
	   <li><!-- Есть сайдбар! --></li>
	   <li><!-- код блока 2 --></li>
         <?php endif; ?>
         </ul>
         </div>
          <!-- если sidebar зарегистрирован, то вывести его -->
</main>


<?php get_footer(); ?>