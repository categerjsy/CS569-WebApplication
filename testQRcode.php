<?php

    include('phpqrcode/qrlib.php');
   // include('config.php');

    // how to save PNG codes to server
    
    $tempDir = "qrcodes/";
    
    $codeContents = 'This Goes From File';
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = '005_file_'.md5($codeContents).'.png';
    
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
   // echo '<p><a href='download2.php?path=qrcodes/005_file_4735c4cef32d8f4e05f3057d462b6760.png'>Download JPG file</a></p>';