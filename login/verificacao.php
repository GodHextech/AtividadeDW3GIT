<?php

function verification($path)

{

    if(!$_SESSION['senha']){
        header('Location: '.$path);
        header('Location:  falha.php');
    }
}