<?php

$realname = $_POST['realname'];
$mail     = $_POST['nick'];
$pass     = $_POST['pass'];
$rpass    = $_POST['rpass'];

require "connect_db.php";

$checkemail = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$mail'");
$check_mail = mysqli_num_rows($checkemail);
if ($pass == $rpass) {
    if ($check_mail > 0) {
        echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
    } else {

        mysqli_query($mysqli, "INSERT INTO login VALUES('','$realname','$pass','$mail','','2')");

        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';

    }

} else {
    echo 'Las contraseñas son incorrectas';
}
