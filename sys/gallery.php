<?php
$sql = "SELECT * FROM gallery WHERE user = $user";

if ( $result = $mysqli->query( $sql ) ) {
    while ( $row = $result->fetch_row() ) {
        $imgsrc = "images/$user/" . $row[2];
        echo '<li><img src="' . $imgsrc . '" loading="lazy"></li>';
    }
    $result -> free_result();
}

$mysqli -> close();
?>