<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/assets/resources/lib/functions.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/assets/resources/lib/swift/swift_required.php');
    $name = mysql_real_escape_string($_POST['name']);
    $email = mysql_real_escape_string($_POST['email']);
    $message = mysql_real_escape_string($_POST['message']);
    $info = array(
        'name' => $name,
        'email' => $email,
        'message' => $message
    );
    send_contact($info);
?>
