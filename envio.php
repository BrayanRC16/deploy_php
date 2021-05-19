<?php

$uop = "https://api.telegram.org/bot1728401200:AAHxa2ycljjGeEbXHNa2XmMOtSiLYJbey78/sendMessage?chat_id=815036737&text=Nombre:Hola";
$sendm =  file_get_contents($uop);
echo $sendm;

?>