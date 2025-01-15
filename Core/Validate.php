<?php

namespace Core;

if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}
class Validate
{
    protected $errors = [];
    public function adminValidator()
    {
        $adminCheck = false;
        if (findAdmin()) {
            $adminCheck = true;
        }
        return $adminCheck;
    }
    public function Validator($string, $min, $max, $regex, $attrName)
    {
        $validationCheck = true;
        if (!$this->nullValidator($string)) {
            $this->errors[] = [
                'attrName' => $attrName,
                'errMsg' => 'Please Fill Data in the Field.'
            ];
            $validationCheck = false;
        } else {
            if (!$this->regexValidator($string, $regex, $attrName)) {
                $this->errors[] = [
                    'attrName' => $attrName,
                    'errMsg' => 'Please Enter Valid Data.'
                ];
                $validationCheck = false;
            }
            if (!$this->lengthValidator($string, $min, $max, $attrName)) {
                $this->errors[] = [
                    'attrName' => $attrName,
                    'errMsg' => "Please Enter Min {$min} and Max {$max} Characters"
                ];
                $validationCheck = false;
            }
        }
        $_SESSION['errors'] = $this->errors;
        return $validationCheck;
    }
    public function imageValidator($imageName, $attrName)
    {
        $fileTempName = '';
        $uploadDir = '';
        $validationCheck = true;
        if (isset($_FILES[$imageName]) && !empty($_FILES[$imageName]['name']) && !empty($_FILES[$imageName]['size'])) {
            $fileName = $_FILES[$imageName]['name'];
            $fileTempName = $_FILES[$imageName]['tmp_name'];
            $uploadDir = 'uploads/' . $fileName;
            move_uploaded_file($fileTempName, $uploadDir);
        } else {
            $this->errors[] = [
                'attrName' => $attrName,
                'errMsg' => "Please Upload Profile Picture."
            ];
            $_SESSION['errors'] = $this->errors;
            $validationCheck = false;
        }
        return [
            'validationCheck' => $validationCheck,
            'imageName' => $fileTempName,
            'imagePath' => $uploadDir
        ];
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
}
