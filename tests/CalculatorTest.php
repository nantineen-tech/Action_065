<?php

use PHPUnit\Framework\TestCase;
use App\Calculator; // อย่าลืมเปลี่ยน Namespace ให้ตรงกับโปรเจกต์ของคุณ

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
        $this->assertEquals(0, $calc->add(-1, 1));
    }

    public function testSubtract()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->subtract(3, 2));
        $this->assertEquals(-2, $calc->subtract(-1, 1));
    }
}
