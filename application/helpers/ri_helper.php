<?php
function is_logged_in() //batasi akses ke halaman admin
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "Admin") {
            redirect('profil');
        }
    }
}
function is_logged_in2() // batasi akses ke halam user
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "User") {
            redirect('Admin');
        }
    }
}
