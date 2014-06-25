<?php
class Roman
{
    public function __construct()
    {
        for($i = 1; $i < 50001; $i++){
            $v = self::toRoman($i);
            Roman::$reverse[$v]=$i;
        }
    }

    protected static $data = array( 
        "I" => 1,
        "IV" => 4,
        "V" => 5,
        "IX" => 9,
        "X" => 10,
        "XL" => 40,
        "L" => 50,
        "XC" => 90,
        "C" => 100,
        "CD" => 400,
        "D" => 500,
        "CM" => 900,
        "M" => 1000 
    );

    protected static $reverse;

    public function toRoman($num) {
        $s = "";
        foreach (array_reverse (Roman::$data) as $k => $v) {
            while ($num >= $v){
                #print "\nCheck". $s . " Num:". $num. "\n";
                $s = $s . $k;
                $num = $num - $v;
                #print "\nafter". $s . " Num:". $num. "\n";
            }
        }
        return $s;
    }

    public function toArabic($num)    {
        return Roman::$reverse[$num];
    }

}