<?php

    if (!empty($_SESSION['current_chapter'])) {
        $answers[0] = false;
        $answers[1] = false;
        $answers[2] = false;
        $answers[3] = false;
        $answers[4] = false;
        $res        = 0;
        $malus      = 0;

        if ($_SESSION['current_chapter'] == "intro") {

            $answers[0]  = ($_POST['q1'] == 1);

            if (!empty($_POST['q2'])) {
                $q2 = $_POST['q2'];
                if (count($q2) == 1) {
                    $answers[1] = ($q2[0] == 1);
                } else {
                    $malus      += 1;
                }
            }
            if (!empty($_POST['q3'])) {
                $q3 = $_POST['q3'];
                if (count($q3) == 1) {
                    $answers[2] = ($q3[0] == 1);
                    $answers[3] = ($q3[0] == 2);
                    $answers[4] = ($q3[0] == 3);
                } else if (count($q3) == 2) {
                    $answers[2] = ($q3[0] == 1);
                    $answers[3] = ($q3[1] == 2);
                    $answers[4] = ($q3[1] == 3);
                } else if (count($q3) == 3) {
                    $answers[2] = ($q3[0] == 1);
                    $answers[3] = ($q3[1] == 2);
                    $answers[4] = ($q3[2] == 3);
                }
            }

        } else if ($_SESSION['current_chapter'] == "var") {

            $answers[0]  = ($_POST['q1'] == 2);
            $answers[1]  = ($_POST['q2'] == 1);
            $answers[2]  = ($_POST['q3'] == 3);

            if (!empty($_POST['q4'])) {
                $q4 = $_POST['q4'];
                if (count($q4) == 1) {
                    $answers[3] = ($q4[0] == 1);
                    $answers[4] = ($q4[0] == 3);
                } else if (count($q4) == 2) {
                    $answers[3] = ($q4[0] == 1);
                    $answers[4] = ($q4[1] == 3);
                    if (!($answers[3] && $answers[4])) {
                        $malus      += 1;
                    }
                } else if (count($q4) == 3) {
                    $malus      += 1;
                }
            }
        } else if ($_SESSION['current_chapter'] == "bool") {

            if (!empty($_POST['q1'])) {
                $q1 = $_POST['q1'];
                if (count($q1) == 1) {
                    $answers[0] = ($q1[0] == 1);
                    $answers[1] = ($q1[0] == 2);
                } else if (count($q1) == 2) {
                    $answers[0] = ($q1[0] == 1);
                    $answers[1] = ($q1[1] == 2);
                    if (!($answers[0] && $answers[1])) {
                        $malus      += 1;
                    }
                } else if (count($q1) == 3) {
                    $malus      += 1;
                }
            }
            if (!empty($_POST['q2'])) {
                $q2 = $_POST['q2'];
                if (count($q2) == 1) {
                    $answers[2] = ($q2[0] == 3);
                } else {
                    $malus      += 1;
                }
            }

            $answers[3]  = ($_POST['q3'] == 2);
            $answers[4]  = ($_POST['q4'] == 3);
        } else if ($_SESSION['current_chapter'] == "cond") {


            if (!empty($_POST['q1'])) {
                $q1 = $_POST['q1'];
                if (count($q1) == 1) {
                    $answers[0] = ($q1[0] == 2);
                } else {
                    $malus      += 1;
                }
            }

            $answers[1]  = ($_POST['q2'] == 2);
            $answers[2]  = ($_POST['q3'] == 3);

            if (!empty($_POST['q4'])) {
                $q4 = $_POST['q4'];
                if (count($q4) == 1) {
                    $answers[3] = ($q4[0] == 1);
                    $answers[4] = ($q4[0] == 3);
                } else if (count($q4) == 2) {
                    $answers[3] = ($q4[0] == 1);
                    $answers[4] = ($q4[1] == 3);
                    if (!($answers[3] && $answers[4])) {
                        $malus      += 1;
                    }
                } else if (count($q4) == 3) {
                    $malus      += 1;
                }
            }
        } else if ($_SESSION['current_chapter'] == "loop") {

            $answers[0]  = ($_POST['q1'] == 2);

            if (!empty($_POST['q2'])) {
                $q2 = $_POST['q2'];
                if (count($q2) == 1) {
                    $answers[1] = ($q2[0] == 2);
                    $answers[2] = ($q2[0] == 3);
                } else if (count($q2) == 2) {
                    $answers[1] = ($q2[0] == 2);
                    $answers[2] = ($q2[1] == 3);
                    if (!($answers[1] && $answers[2])) {
                        $malus      += 1;
                    }
                } else if (count($q2) == 3) {
                    $malus      += 1;
                }
            }

            $answers[3]  = ($_POST['q3'] == 3);
            $answers[4]  = ($_POST['q4'] == 3);
        }

        if ($answers[0]) { $res += 2; }
        if ($answers[1]) { $res += 2; }
        if ($answers[2]) { $res += 2; }
        if ($answers[3]) { $res += 2; }
        if ($answers[4]) { $res += 2; }
        if ($res > $malus) {
            $res -= $malus;
        } else {
            $res = 0;
        }
        $_SESSION['res'] = $res;
    }

?>
