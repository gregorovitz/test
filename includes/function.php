<?php
/**
 * Created by PhpStorm.
 * User: Marqu
 * Date: 27/11/2017
 * Time: 20:56
 */
function verif_pwd($pwd,$hash){
    if (password_verify($pwd, $hash) == true) {
        return true;
    } else {
        return false;
    }
}
