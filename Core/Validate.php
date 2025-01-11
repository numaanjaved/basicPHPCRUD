<?php

namespace Core;

class Validate
{

    public function Validator($string, $min, $max, $regex)
    {
        $validationCheck = true;
        if (!$this->nullValidator($string)) {
            $validationCheck = false;
        } else {
            if (!$this->regexValidator($string, $regex)) {
                $validationCheck = false;
            }
            if (!$this->lengthValidator($string, $min, $max)) {
                $validationCheck = false;
            }
        }
        return $validationCheck;
    }
    protected function nullValidator($string)
    {
        $validationCheck = true;
        $string = trim($string);
        if (empty($string) || $string === null || strlen($string) <= 0) {
            $validationCheck = false;
        }
        return $validationCheck;
    }
    protected function lengthValidator($string, $min = 1, $max = INF)
    {
        $validationCheck = true;
        $string = trim($string);
        if (strlen($string) < $min  || strlen($string) > $max) {
            $validationCheck = false;
        }
        return $validationCheck;
    }

    protected function regexValidator($string, $regex)
    {
        $validationCheck = true;
        $string = trim($string);
        if (!preg_match($regex, $string)) {
            $validationCheck = false;
        }
        return $validationCheck;
    }
}
