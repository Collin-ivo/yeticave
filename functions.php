<?php

    function renderTemplate($tmp, $vars = array()) {
        if (file_exists('templates/'.$tmp.'.php')) {
            ob_start();
            extract($vars);
            require 'templates/'.$tmp.'.php';
            return ob_get_clean();
        }
    }

?>