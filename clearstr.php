<?php
function clearStr($data)
{
global $link1;
global $link;
return mysqli_real_escape_string($link1,trim(strip_tags($data)));
}
?>