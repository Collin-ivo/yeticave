<?php

    function include_template($tmp, $vars = array()) {
        if (file_exists('templates/'.$tmp.'.php')) {
            ob_start();
            extract($vars);
            require 'templates/'.$tmp.'.php';
            return ob_get_clean();
        }
    }

    function formatPrice($price) {
        $price = ceil($price);
        if ($price >= 1000) {
            $price = number_format($price, 0, '.', ' ');
        }
        return $price.' ';
    }

    function timeToClose() {
        date_default_timezone_set('Europe/Moscow');
        $sec_in_day = 86400;
        $sec_in_hour = 3600;
        $sec_in_minute = 60;

        $closeTime = strtotime(date('d.m.Y')) + $sec_in_day;

        $curTime = strtotime(date('d.m.Y H:i'));

        $sec_to_end = $closeTime - $curTime;
        $hour_to_end = intdiv($sec_to_end, $sec_in_hour);
        $min_to_end = intdiv($sec_to_end - $hour_to_end * $sec_in_hour, $sec_in_minute);
        return str_pad((string)$hour_to_end, 2, '0', STR_PAD_LEFT).':'.str_pad((string)$min_to_end, 2, '0', STR_PAD_LEFT);
    }
?>