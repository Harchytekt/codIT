<?php

    if (!empty($_POST['uname_log'])) {
        $uname_ok = false;
        $pwd_ok = false;

        $allLog_ok = false;

        $uname = "(?!.*[\.\-\_]{2,})^[a-zA-Z0-9\.\-\_]{3,24}$";
        $pass = "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{4,16}$";

        if (preg_match("#$uname#", $_POST['uname_log'])) {
            $uname_ok = true;
        }
        if (preg_match("#$pass#", $_POST['pwd_log'])) {
            $pwd_ok = true;
        }

        $allLog_ok = ($uname_ok && $pwd_ok);
    }

?>
