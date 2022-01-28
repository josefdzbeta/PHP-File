<?php
    $fileList = glob('uploads/*');
    foreach($fileList as $filename){
        if(is_file($filename)){
            echo '<h2>'.$filename,'</h2><br>'; 
        }   
    }
?>