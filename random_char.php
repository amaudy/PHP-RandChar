<?php
echo random_char($max_char=8);

function random_char($max_char=15) {
    $all_char = "qazwsxedcrfvtgbyhnujmkopQWERTYUIOPLKJHGFDSAZXCVBNM";
    $length = strlen($all_char);
    $tmp = '';
    for($count_char=1;$count_char<=$max_char;$count_char++){
        $random = rand(1, $length);
        $tmp .= substr($all_char, $random, 1);
    }
    return $tmp;
}
