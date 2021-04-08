<?php

if ( !isset( $_GET['user'] ) ) {
    $user = $_COOKIE['user'];
} else {
    $user = $_GET['user'];
}

if ( empty( $user ) || !isset( $user ) ) {
    setcookie( 'user', time(), time() + ( 10 * 365 * 24 * 60 * 60 ) ) or die('unable to create cookie');
    echo "<script>window.location.href='/'</script>";
}

function logging( $msg ) {
    echo "<script>console.log('$msg')</script>";
}

logging( "Your User ID is: $user" );

?>