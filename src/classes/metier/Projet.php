<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\classes\metier;
use DateTime;
use App\classes\Exception\AppException;

/**
 * Description of Projet
 *
 * @author marco.clin
 */
class Projet {
    
    private readonly int  $id;
    private readonly string $nom;
    private readonly DateTime $dateDebut;
    public int $dureePrevue;
    
    /**
     * Setter de la propriété $dateDebut
     * 
     * @param DateTime $dateDebut
     * @return void
     * @throws AppException
     */
    public function setDateDebut(DateTime $dateDebut): void {
        $dateActuelle = new DateTime();
        if($dateDebut < $dateActuelle){
            throw new AppException("La date de début de projet ne peux pas être antérieure à celle d'aujourd'hui.");
        }
        else{
            $this->dateDebut = $dateDebut;
        }
    }
    
    /**
     * Getter de l'id
     * 
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }
    
    /**
     * Constructeur de la classe Projet
     * 
     * @param int $id
     * @param string $nom
     * @param Date $dateDebut
     * @param int $dureePrevue
     * @return void
     */
    public function __construct(int $id, string $nom, DateTime $dateDebut, int $dureePrevue) {
        $this->id = $id;
        $this->nom = $nom;
        $this->setDateDebut($dateDebut);
        $this->dureePrevue = $dureePrevue;
    }
    
    
    
    

    
}
