<?php

require_once 'utils.php';

$page = build_page();

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = text_encode($_POST['name']);
    if (strlen($name) > 0) {
        add_user($name);
    } else {
        $errors[] = "Name is required";
    }
}

$page['users'] = get_users();
$page['errors'] = $errors;

html_template('register', $page);
