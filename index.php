<?php

require_once __DIR__.'/twig_boot.php';
 

echo $twig->render('index.html',$viewData->all());



