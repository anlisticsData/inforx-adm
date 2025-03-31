<?php

 
 
require_once __DIR__.'/vendor/autoload.php';
class ViewData{
    private $data = [];

    public function add($key,$data = null){
        $this->data[$key] = $data;
    }

    public function get($key){
        return $this->data[$key];
    }   
    public function all(){
        return $this->data;
    }
    public function clear(){
        $this->data = [];
    }
    public function has($key){
        return isset($this->data[$key]);
    }
    public function remove($key){
        unset($this->data[$key]);
    }

}
session_start(); // Inicia a sessão
$viewData =  new ViewData();
$lang = new Core\Resources\Language();

$loader = new \Twig\Loader\FilesystemLoader('resources/views');
$twig = new \Twig\Environment($loader, [
    'cache' =>false,
]);
// Criar o gerenciador de tokens CSRF
 
// Adicionar o token CSRF ao ViewData
$viewData->add('csrf_token', uniqid(md5(uniqid()), true));

$languageSelected =[];
foreach ($lang->getLanguageAll() as $key => $value) {
    $languageSelected[$key] = $value;
}
$viewData->add('lang',$languageSelected );

/*
echo "<pre>";
print_r($languageSelected)  ;
exit;
*/

// Adicionar o ViewData ao Twig
$twig->addGlobal('viewData', $viewData->all());


