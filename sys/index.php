<?php
if ($user == $_COOKIE['user']) {
    $username = 'YOUR';
} else {
    $username = "[ $user ]";
}

echo $username;
?>