<?php 
    function db_connect(): mysqli {
        return new mysqli('localhost', 'root', '', 'php_crud_image_9_10', 3305);
    }