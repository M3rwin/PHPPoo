<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

use PHPUnit\Framework\TestCase;
use App\classes\metier\Projet;

/**
 * Description of ProjetTest
 *
 * @author marco.clin
 */
class ProjetTest extends TestCase {
    
    protected $object;
    
    public function setUp(): void {
        $dateAfter = date_add(new DateTime(), date_interval_create_from_date_string("10 days"));
        $this->object = new Projet(1, "Nom du projet", $dateAfter, 12);
    }
    
    /**
     * @covers Projet::getId
     */
    public function testGetId() {
        $this->assertSame(1, $this->object->getId());
    }
    
}
