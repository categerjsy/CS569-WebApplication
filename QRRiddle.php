<?php
include 'config.php';
session_start ();
include('phpqrcode/qrlib.php');
$link=$_POST["link"];


$tempDir = "qrcodes/";
    
$codeContents = $link;
    
echo "<h2?>$codeContents</h2>";
$fileName = 'riddle_'.md5($codeContents).'.png';
    
$pngAbsoluteFilePath = $tempDir.$fileName;
$urlRelativeFilePath = $tempDir.$fileName;
    
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath);
        echo 'File generated!';
        echo '<hr />';
    } else {
        echo 'File already generated! We can use this cached file to speed up site on common codes!';
        echo '<hr />';
    }
    
    echo 'Server PNG File: '.$pngAbsoluteFilePath;
    echo '<hr />';
    
    // displaying
    echo '<img src="'.$urlRelativeFilePath.'" />';
   echo "<p><a href='https://arthunt.000webhostapp.com/download2.php?path=$urlRelativeFilePath'>Download JPG file</a></p>";