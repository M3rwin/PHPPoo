<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\classes\Exception;
use Exception;

/**
 * Description of AppException
 *
 * @author marco.clin
 */
class AppException extends Exception {
    
    //nom d'utilisateur de l'aplication
    const NOMUSERCONNECTE = APP_USER;
    //nom de l'application
    const NOMAPPLICATION = APP_NAME;
    
    public function __construct(string $message) {
        parent::__construct("Erreur d'application " . self::NOMAPPLICATION . "<br> user : " . self::NOMUSERCONNECTE . "<br> message : " . $message);
    }
}
