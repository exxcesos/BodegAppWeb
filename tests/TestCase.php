<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function testSumar() {
        $C1 = new C1();
        $R1 = $C1->T1(2, 3);
        $this->assertEquals(5, $R1);
        $C2 = new C2();
        $R2 = $C2->T2(2, 3);
        $this->assertTrue($R2 > 0);
        $C3 = new C3();
        $R3 = $C3->T3(2, 3);
        $this->assertFalse(empty($R3));
        $C4 = new C4();
        $R4 = $C4->T4(2, 3);
        $this->assertEmpty($R4);
        $C5 = new C5();
        $R5 = $C5->T5(2, 3);
        $this->assertNotEmpty($R5);


    }
}

class C1 {
    public function T1($a, $b) {
        return $a + $b;
    }
}

    class C2 {
    public function T2($a, $b) {
        return $a + $b;
    }
}
class C3 {
    public function T3($a, $b) {
        return $a + $b;
    }
}
    
class C4 {
    public function T4($a, $b) {
        return ""; 
    }
}
class C5 {
    public function T5($a, $b) {
        return $a + $b;
    }
}
