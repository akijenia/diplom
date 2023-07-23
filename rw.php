<?php

$yourname = $_POST['yourname'];
$comment = $_POST['comment'];

$data = $yourname . "<br>" . $comment . "<br><br>";

$myfile = fopen("comments.txt", "a"); 

fwrite($myfile, $data); 
fclose($myfile);
$myfile = fopen("comments.txt", "r");
echo fread($myfile,filesize("comments.txt")); 

?>  
