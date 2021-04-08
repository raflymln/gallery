<?php
require( 'sql.php' );

$user		         = 	$_COOKIE['user'];
$rand		         = 	time().uniqid( rand() );

$src 				 = 	$_FILES['file']['name'];
$target_dir 		 = 	"../images/$user/";
$target_file		 = 	$target_dir . basename( $src );

$imageFileType 		 = 	strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
$extensions_arr 	 = 	array( 'jpg', 'jpeg', 'png', 'gif', 'ico' );

$savename		     = 	$user . '_' . $rand . '_' . $src;

if ( in_array( $imageFileType, $extensions_arr ) ) {
    define ( 'SITE_ROOT', realpath( dirname( __FILE__ ) ) );
    if ( !is_dir( $target_dir ) ) {
        mkdir( $target_dir );
    }
    move_uploaded_file( $_FILES['file']['tmp_name'], $target_dir.$savename );

    $sql = "INSERT INTO gallery(name, user) VALUES('$savename', '$user')";

    if ( $mysqli->query( $sql ) === TRUE ) {
        // echo 'New record created successfully';
        echo "<script>window.location.href='/'</script>";
    } else {
        echo '(PLEASE REPORT IT TO WEB ADMINISTRATOR) Error: ' . $sql . '<br>' . $mysqli->error;
    }
    $mysqli->close();
} else {
    echo '<script>alert("Sorry, you can\'t upload this type of file ( JPG, JPEG, PNG, GIF, ICO ONLY )" )</script>';
    echo "<script>window.location.href='/'</script>";
}

?>