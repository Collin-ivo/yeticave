<?php

require_once 'functions.php';
require_once 'data.php';


$lot = null;
$code_404 = false;
if (isset($_GET['lot_id'])) {
    $lot_id = $_GET['lot_id'];

    foreach ($lots as $item) {
        if ($item['id'] == $lot_id) {
            $lot = $item;
            break;
        }
    }
    if ($lot == null) {
        $code_404 = true;
    }
}

if ($lot != null && !$code_404) {
    $page_content = include_template('lot', array('categories' => $categories, 'lot' => $lot));
    $page_header = include_template('header', array('is_auth' => $is_auth, 'user_avatar' => $user_avatar));
    $page_footer = include_template('footer', array('categories' => $categories));
    $layout_content = include_template('layout', array(
        'header' => $page_header,
        'content' => $page_content,
        'footer' => $page_footer,
        'title' => 'Главная страница'
    ));
    print $layout_content;
}
else {
    http_response_code(404);
    http_response_code();
}


?>
