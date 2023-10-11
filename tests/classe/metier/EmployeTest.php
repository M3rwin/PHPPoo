<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\test\classe\metier;
use PHPUnit\Framework\TestCase;

/**
 * Description of EmployeTest
 *
 * @author marco.clin
 */
class EmployeTest extends TestCase {
    
    public function testSomme(){
        $a=12;
        $b=5;
        $this->assertSame(18, $a+$b);
    }
    
}
