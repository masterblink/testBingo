<?php

class Caller
{
    
    private $calledNumbers = [];

    public function getNumber()
    {
        $number = self::randomNumber(1, 75, $this->calledNumbers);
        $this->calledNumbers[] = $number;

        return $number;
    }

    
    public function getDrawnNumbers()
    {
        return $this->calledNumbers;
    }

    public static function randomNumber($minVal, $maxVal, $existsNumbers)
    {
        do {
            $number = random_int($minVal, $maxVal);
        } while (in_array($number, $existsNumbers));

        return $number;
    }
}
