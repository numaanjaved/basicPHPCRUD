<?php

namespace Core;

require('Assets/models/adminCredentials.php');


if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}
class Validate
{
    protected $errors = [];
    public function imageValidator($imageName, $errFor)
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
                'attrName' => $errFor,
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
    public function adminValidator($errFor)
    {
        $adminCheck = false;
        if (findAdmin()) {
            $adminCheck = true;
            $this->errors[] = [
                'attrName' => $errFor,
                'errMsg' => 'Admin Account Found, Create user account.'
            ];
        }
        $_SESSION['errors'] = $this->errors;
        return $adminCheck;
    }
    public function Validator($string, $min, $max, $regex, $errFor)
    {
        $validationCheck = true;
        if (!$this->nullValidator($string)) {
            $this->errors[] = [
                'attrName' => $errFor,
                'errMsg' => 'Please Fill Data in the Field.'
            ];
            $validationCheck = false;
        } else {
            if (!$this->regexValidator($string, $regex, $errFor)) {
                $this->errors[] = [
                    'attrName' => $errFor,
                    'errMsg' => 'Please Enter Valid Data.'
                ];
                $validationCheck = false;
            }
            if (!$this->lengthValidator($string, $min, $max, $errFor)) {
                $this->errors[] = [
                    'attrName' => $errFor,
                    'errMsg' => "Please Enter Min {$min} and Max {$max} Characters"
                ];
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
    public function loginValidator($username, $password)
    {
        $validationCheck = true;
        if (!$this->nullValidator($username) || !$this->nullValidator($password)) {
            $this->errors[] = [
                'attrName' => 'Blank Field',
                'errMsg' => 'Please Fill Data in the Field.'
            ];
            $validationCheck = false;
        }
        if (!$this->adminCreMatch($username, $password)) {
            $validationCheck = false;
            $this->errors[] = [
                'attrName' => 'Invalid',
                'errMsg' => 'Please enter valid credentials.'
            ];
        }
        $_SESSION['errors'] = $this->errors;
        return $validationCheck;
    }
    protected function adminCreMatch($username, $password)
    {
        $credentials = adminCre();
        $validationCheck = true;
        if ($username !== $credentials['adminName']) {
            $validationCheck = false;
        }
        if (!password_verify($password, $credentials['adminPassword'])) {
            $validationCheck = false;
        }
        return $validationCheck;
    }
}
