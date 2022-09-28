<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
$filename = 'cadastroFunc.txt';
if ( file_exists( $filename ) ) {
	$handle = fopen( $filename, 'r' );
	$ler = fread( $handle, filesize($filename) );
	echo $ler;
	fclose($handle);
}
?>