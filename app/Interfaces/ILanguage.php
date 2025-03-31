<?php

namespace Core\Interfaces;
/**
 * Interface ILanguage
 * @package Core\Interfaces
 *
 * This interface defines the methods for managing languages in the application.
 */

interface ILanguage
{
    function setLanguage($lang);
    function getLanguageAll();
    function getLanguageName($lang);
}
