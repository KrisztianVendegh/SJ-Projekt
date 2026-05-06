<?php

function cleanInput($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function redirect($url) {
    header("Location: " . $url);
    exit;
}

function isActivePage($page) {
    return basename($_SERVER['PHP_SELF']) === $page ? 'active' : '';
}

function shortText($text, $limit = 120) {
    if (strlen($text) > $limit) {
        return substr($text, 0, $limit) . '...';
    }

    return $text;
}

function getImagePath($imageName) {
    return 'assets/images/' . $imageName;
}