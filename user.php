<?php

if(isset($_POST['login']) ){

    if( $_POST['login']=='admin'  AND  $_POST['pass']=='admin'){
        setcookie('admin',true);
        die(json_encode(true));
        
    }else{
        die(json_encode('No'));
    }
}

?>