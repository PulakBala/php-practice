<?php
function Bangladesh ($Mirpur, $Framget){
    $Dhaka = $Mirpur / $Framget;
    $Wow = array($Mirpur, $Framget, $Dhaka);
    return $Wow;
}
list($Mirpur, $Framget, $Dhaka) = Bangladesh(10, 3);
echo $Mirpur ." ". $Framget ." <br> ". $Dhaka;