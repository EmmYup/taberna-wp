<?php 
register_sidebar(array(
 'name' => 'Sidebar Left',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));
register_sidebar(array(
 'name' => 'Sidebar Right',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 )); 
 ?>