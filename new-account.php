<?php

require_once __DIR__.'/twig_boot.php';
 

echo $twig->render('user/new-account.html',$viewData->all());



