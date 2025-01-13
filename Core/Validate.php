<?php

namespace Core;

if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}
class Validate
{
    protected $errors = [];
    public function Validator($string, $min, $max, $regex)
    {
        $validationCheck = true;
        if (!$this->nullValidator($string)) {
            $this->errors[] = "Please Fill Data in the Field.";
            $validationCheck = false;
        } else {
            if (!$this->regexValidator($string, $regex)) {
                $this->errors[] = "Please Enter Valid Data.";
                $validationCheck = false;
            }
            if (!$this->lengthValidator($string, $min, $max)) {
                $this->errors[] = "Please Enter Limited Data.";
                $validationCheck = false;
            }
        }
        $_SESSION['errors'] = $this->errors;
        return $validationCheck;
    }
    protected function nullValidator($string)
    {
        $validationCheck = true;
        $string = trim($string);
        if (empty($string) || strlen($string) <= 0) {
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
    public function imageValidation($imageName)
    {
        $validationCheck = true;
        if (isset($_FILES[$imageName])) {
            $fileName = $_FILES[$imageName]['name'];
            $fileTempName = $_FILES[$imageName]['tmp_name'];
            $uploadDir = 'uploads/' . $fileName;
            move_uploaded_file($fileTempName, $uploadDir);
        } else {
            $validationCheck = false;
        }
        return [
            'validationCheck' => $validationCheck,
            'imageName' => $fileTempName,
            'imagePath' => $uploadDir
        ];
    }
}
