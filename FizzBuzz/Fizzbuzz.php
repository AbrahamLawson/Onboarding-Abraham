<?php

class Fizzbuzz
{
    private int $max;
    public function __construct(int $max)
    {
        $this->max = $max;
    }
    public function List():string{
        $result = [];
        for ($i=1; $i <= $this->max; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $result[] = 'Fizzbuzz';
            } elseif ($i % 3 === 0) {
                $result[] = 'Fizz';
            } elseif ($i % 5 === 0) {
                $result[] = 'Buzz';
            } else {
                $result[]= $i;
            }
        }
        return implode(', ', $result);
    }
    public function multipleDe3(int $nmb){
        if ($nmb % 3 === 0){
            return "Fizz";
        }
    }
    public function multipleDe5(int $nmb){
        if ($nmb % 5 === 0){
            return "Buzz";
        }
    }
    public function multipleDe3EtDe5(int $nmb){
        if ($nmb % 3 === 0 && $nmb % 5 === 0){
            return "Fizzbuzz";
        }
    }
}