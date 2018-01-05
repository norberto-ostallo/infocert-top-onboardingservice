<?php

namespace InfoCert\Top\OnboardingService\ArrayType;

/**
 * This class stands for IdDocumentTypes ArrayType
 */
class IdDocumentTypes
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
        'AL' => 'Other',
        'CI' => 'Identity Card',
        'PA' => 'Heating systems license',
        'PD' => 'Firearms license',
        'PN' => 'Boat license',
        'PS' => 'Passport',
        'PT' => 'Driving license',
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