<?php

require_once 'functions.php';
require_once 'data.php';



$page_content = include_template('index', array('categories' => $categories, 'lots' => $lots));

$page_header = include_template('header', array('is_auth' => $is_auth, 'user_avatar' => $user_avatar));
$page_footer = include_template('footer', array('categories' => $categories));
$layout_content = include_template('layout', array(
    'header' => $page_header,
    'content' => $page_content,
    'footer' => $page_footer,
    'title' => 'Главная страница'
    ));


print $layout_content;



