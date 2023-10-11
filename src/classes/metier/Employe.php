<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\classes\metier;
use DeepCopy\TypeFilter\Date;

/**
 * Description of Employe
 *
 * @author marco.clin
 */
class Employe {
    /**
     * Properties
     */
    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected Date $dateNaissance;
    protected float $salaire;
    
    /**
     * Constructeur de la classe Employe
     * 
     * @param int $numero
     * @param string $nom
     * @param string $prenom
     * @param Date $dateNaissance
     * @param float $salaire
     */
    public function __construct(int $numero, string $nom, string $prenom, Date $dateNaissance, float $salaire) :void {
        this->numero = $numero;
        this->nom = $nom;
        this->prenom = $prenom;
        this->dateNaissance = $dateNaissance;
        this->salaire = $salaire;
    }
    
    /**
     * Fonction retournant le salaire annuel de l'employé cible
     * 
     * @return float
     */
    public function getSalaireAnnuel() : float {
        return this->salaire*12;
    }
    
    /**
     * Fonction ajoutant une prime au salaire de l'employe cible
     * 
     * @param float $prime
     * @return void
     */
    public function setPrime(float $prime) : void {
        this->salaire+=$prime;
    }
    
    public function getGainBrutAnnuel() : float {
        
    }
    
    
    
}
