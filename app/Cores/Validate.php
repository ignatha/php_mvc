<?php

namespace App\Cores;

class Validate {

    protected $errors = [];

    public function validate($data,$rules){
        foreach ($rules as $field => $rule) {
            $value = $data[$field] ?? null;

            foreach (explode('|',$rule) as $condition) {
                
                if ($condition === 'required' && empty($value)) {
                    $this->errors[$field][] = "{$filed} is required.";
                }

                if ($condition === 'email' && !filter_var($value,FILTER_VALIDATE_EMAIL)) {
                    $this->errors[$field][] = "{$filed} must be a valid email.";
                }
                
            }
            
        }

    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

}