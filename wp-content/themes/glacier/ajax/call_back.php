<?php


add_action('wp_ajax_ajax_send_mess', 'ajax_send_mess');
add_action('wp_ajax_nopriv_ajax_send_mess', 'ajax_send_mess');

function ajax_send_mess()
{

    if (!isset($_POST['phone']) ||
        !isset($_POST['name'])) {
        $result = array(
            'status' => 'error',
        );
        echo json_encode($result);
        die();
    }

    $mail = get_field('mail_for_order', 'option');
    $add_info = '';
    if (isset($_POST['last_name']) && strlen($_POST['last_name']) > 1){
        $add_info = "\r\n" . 'Прізвище: ' . $_POST['last_name'];
    }
    if (isset($_POST['title']) && strlen($_POST['title']) > 1){
        $add_info = "\r\n" . 'Заголовок: ' . $_POST['title'];
    }


    $mail_massage = 'Iм\'я: ' . $_POST['name'] . "\r\n" . 'Номер телефону: ' . $_POST['phone'] . "\r\n" . 'Email: ' . $_POST['email'] .
        " " . $add_info;

    //send_to_telegram($mail_massage);

    $headers = 'From: Сообщение с  <info@glacier.com.ua>' . "\r\n";
    $success = wp_mail($mail, 'Заявка', $mail_massage, $headers);



    $result = array(
        'status' => 'ok',
    );
    echo json_encode($result);
    die();
}