<?php 
    function fileUploader($sourceFile) {
        $filename = rand(0, 999999).date('y-m-d-h-i-s').'.'.pathinfo($sourceFile['name'],PATHINFO_EXTENSION);
        move_uploaded_file($sourceFile['tmp_name'], '../uploads/'.$filename);
        return $filename;
    }