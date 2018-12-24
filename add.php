<?php

require_once 'functions.php';
require_once 'data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot = $_POST;

    $required = ['lot_name', 'category', 'message'];

}

$page_content = include_template('add', []);

$page_header = include_template('header', array('is_auth' => $is_auth, 'user_avatar' => $user_avatar));
$page_footer = include_template('footer', array('categories' => $categories));
$layout_content = include_template('layout', array(
    'header' => $page_header,
    'content' => $page_content,
    'footer' => $page_footer,
    'title' => 'Добавить лот'
));


print $layout_content;

