<?php
require_once('Roman.php');
class RomanTest extends PHPUnit_Framework_TestCase
{
    public function testNumberToRoman()
    {
        // create
        $a = new Roman();

        $b = $a->toRoman(1);
        $this->assertEquals("I", $b);
        $this->assertEquals("II", $a->toRoman(2));
        $this->assertEquals("IV", $a->toRoman(4));
        $this->assertEquals("MMMMM", $a->toRoman(5000));
        $this->assertEquals("M", $a->toRoman(1000));
        $this->assertEquals("MI", $a->toRoman(1001));
        $this->assertEquals("DI", $a->toRoman(501));
        $this->assertEquals("CDXCIX", $a->toRoman(499));
        $this->assertEquals("XLIX", $a->toRoman(49));
    }

    public function testRomanToArabic()
    {
        // create
        $a = new Roman();
        $this->assertEquals(1, $a->toArabic("I"));
        $this->assertEquals(2, $a->toArabic("II"));
        $this->assertEquals(4, $a->toArabic("IV"));
        $this->assertEquals(5000, $a->toArabic("MMMMM"));
        $this->assertEquals(1000, $a->toArabic("M"));
        $this->assertEquals(1001, $a->toArabic("MI"));
        $this->assertEquals(501, $a->toArabic("DI"));
        $this->assertEquals(499, $a->toArabic("CDXCIX"));
        $this->assertEquals(49, $a->toArabic("XLIX"));
    }
}


