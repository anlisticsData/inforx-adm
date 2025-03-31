<?php

namespace Core\Resources;
use Core\Interfaces\ILanguage;
use Exception;


class Language implements ILanguage{
    private $lang;
   
    
    

    
    
    private $languages = [
        'pt-br' => [
            "title_app" => 'InforX-Tech',
            'welcome' => 'Bem-vindo',
            'username' => 'Nome de usuário',
            'email' => 'Email.*',
            'password' => 'Senha.* ',
            'confirm_password' => 'Confimar Senha',
            'login' => 'Entrar',
            'logout' => 'Sair',
            'create_account' => 'Registrar',
            'forgot_password' => 'Esqueci minha senha',
            'back_to_login' => 'Voltar para o login',
            'already_have_account' => 'já tem uma conta?',
 
        ],
        'es' => 'Spanish',
    
        // Add more languages as needed
    ];

    public function __construct($lang = 'pt-br') {
        $this->setLanguage($lang);
    }
    /**
     * Set the language.
     *
     * @param string $lang Language code (e.g., 'en', 'es', 'fr').
     * @throws Exception if the language is not supported.
     */

    public function setLanguage($lang) {
        if (array_key_exists($lang, $this->languages)) {
            $this->lang = $lang;
        } else {
            throw new Exception("Language not supported.");
        }
    }

    public function getLanguageAll() {
        return $this->languages[$this->lang ];
    }

    public function getLanguageName($lang) {
        return $this->languages[$lang] ?? null;
    }
    public function getLanguage() {
        return $this->lang;
    }
               
} 