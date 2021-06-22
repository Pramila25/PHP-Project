<?php


function uniquePost($posted) {
    // take some form values
    $description = $posted['t_betreff'].$posted['t_bereich'].$posted['t_nachricht']; 
    // check if session hash matches current form hash
    if (isset($_SESSION['form_hash']) && $_SESSION['form_hash'] == md5($description) ) {
       // form was re-submitted return false
       return false;
    }
    // set the session value to prevent re-submit
    $_SESSION['form_hash'] = md5($description);
    return true;
}
?>