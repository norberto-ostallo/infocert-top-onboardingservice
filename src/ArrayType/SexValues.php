<?php

namespace InfoCert\Top\OnboardingService\ArrayType;

/**
 * This class stands for SerialNumberTypes ArrayType
 */
class SexValues
{
  
    /**
     * Return true if value is allowed
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    
    /**
     * Return allowed values
     * @return string[]
     */
    public static function getValidValues()
    {
      return array(
        'M' => 'Male',
        'F' => 'Female',
      );
    }
    
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}