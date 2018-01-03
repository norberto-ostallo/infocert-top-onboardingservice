<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personal-data StructType
 * @subpackage Structs
 */
class Personal_data extends AbstractStructBase
{
    /**
     * The fiscal_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fiscal_code;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $last_name;
    /**
     * The birth_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_date;
    /**
     * The sex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sex;
    /**
     * The citizenship
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $citizenship;
    /**
     * The birth_place
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_place;
    /**
     * The birth_province
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_province;
    /**
     * The birth_country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_country;
    /**
     * The full_first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $full_first_name;
    /**
     * The full_last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $full_last_name;
    /**
     * Constructor method for personal-data
     * @uses Personal_data::setFiscal_code()
     * @uses Personal_data::setFirst_name()
     * @uses Personal_data::setLast_name()
     * @uses Personal_data::setBirth_date()
     * @uses Personal_data::setSex()
     * @uses Personal_data::setCitizenship()
     * @uses Personal_data::setBirth_place()
     * @uses Personal_data::setBirth_province()
     * @uses Personal_data::setBirth_country()
     * @uses Personal_data::setFull_first_name()
     * @uses Personal_data::setFull_last_name()
     * @param string $fiscal_code
     * @param string $first_name
     * @param string $last_name
     * @param string $birth_date
     * @param string $sex
     * @param string $citizenship
     * @param string $birth_place
     * @param string $birth_province
     * @param string $birth_country
     * @param string $full_first_name
     * @param string $full_last_name
     */
    public function __construct($fiscal_code = null, $first_name = null, $last_name = null, $birth_date = null, $sex = null, $citizenship = null, $birth_place = null, $birth_province = null, $birth_country = null, $full_first_name = null, $full_last_name = null)
    {
        $this
            ->setFiscal_code($fiscal_code)
            ->setFirst_name($first_name)
            ->setLast_name($last_name)
            ->setBirth_date($birth_date)
            ->setSex($sex)
            ->setCitizenship($citizenship)
            ->setBirth_place($birth_place)
            ->setBirth_province($birth_province)
            ->setBirth_country($birth_country)
            ->setFull_first_name($full_first_name)
            ->setFull_last_name($full_last_name);
    }
    /**
     * Get fiscal_code value
     * @return string|null
     */
    public function getFiscal_code()
    {
        return $this->{'fiscal-code'};
    }
    /**
     * Set fiscal_code value
     * @param string $fiscal_code
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setFiscal_code($fiscal_code = null)
    {
        // validation for constraint: string
        if (!is_null($fiscal_code) && !is_string($fiscal_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fiscal_code)), __LINE__);
        }
        $this->fiscal_code = $this->{'fiscal-code'} = $fiscal_code;
        return $this;
    }
    /**
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->{'first-name'};
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $this->{'first-name'} = $first_name;
        return $this;
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->{'last-name'};
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $this->{'last-name'} = $last_name;
        return $this;
    }
    /**
     * Get birth_date value
     * @return string|null
     */
    public function getBirth_date()
    {
        return $this->{'birth-date'};
    }
    /**
     * Set birth_date value
     * @param string $birth_date
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setBirth_date($birth_date = null)
    {
        // validation for constraint: string
        if (!is_null($birth_date) && !is_string($birth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_date)), __LINE__);
        }
        $this->birth_date = $this->{'birth-date'} = $birth_date;
        return $this;
    }
    /**
     * Get sex value
     * @return string|null
     */
    public function getSex()
    {
        return $this->sex;
    }
    /**
     * Set sex value
     * @param string $sex
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sex)), __LINE__);
        }
        $this->sex = $sex;
        return $this;
    }
    /**
     * Get citizenship value
     * @return string|null
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }
    /**
     * Set citizenship value
     * @param string $citizenship
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setCitizenship($citizenship = null)
    {
        // validation for constraint: string
        if (!is_null($citizenship) && !is_string($citizenship)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($citizenship)), __LINE__);
        }
        $this->citizenship = $citizenship;
        return $this;
    }
    /**
     * Get birth_place value
     * @return string|null
     */
    public function getBirth_place()
    {
        return $this->{'birth-place'};
    }
    /**
     * Set birth_place value
     * @param string $birth_place
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setBirth_place($birth_place = null)
    {
        // validation for constraint: string
        if (!is_null($birth_place) && !is_string($birth_place)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_place)), __LINE__);
        }
        $this->birth_place = $this->{'birth-place'} = $birth_place;
        return $this;
    }
    /**
     * Get birth_province value
     * @return string|null
     */
    public function getBirth_province()
    {
        return $this->{'birth-province'};
    }
    /**
     * Set birth_province value
     * @param string $birth_province
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setBirth_province($birth_province = null)
    {
        // validation for constraint: string
        if (!is_null($birth_province) && !is_string($birth_province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_province)), __LINE__);
        }
        $this->birth_province = $this->{'birth-province'} = $birth_province;
        return $this;
    }
    /**
     * Get birth_country value
     * @return string|null
     */
    public function getBirth_country()
    {
        return $this->{'birth-country'};
    }
    /**
     * Set birth_country value
     * @param string $birth_country
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setBirth_country($birth_country = null)
    {
        // validation for constraint: string
        if (!is_null($birth_country) && !is_string($birth_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_country)), __LINE__);
        }
        $this->birth_country = $this->{'birth-country'} = $birth_country;
        return $this;
    }
    /**
     * Get full_first_name value
     * @return string|null
     */
    public function getFull_first_name()
    {
        return $this->{'full-first-name'};
    }
    /**
     * Set full_first_name value
     * @param string $full_first_name
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setFull_first_name($full_first_name = null)
    {
        // validation for constraint: string
        if (!is_null($full_first_name) && !is_string($full_first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($full_first_name)), __LINE__);
        }
        $this->full_first_name = $this->{'full-first-name'} = $full_first_name;
        return $this;
    }
    /**
     * Get full_last_name value
     * @return string|null
     */
    public function getFull_last_name()
    {
        return $this->{'full-last-name'};
    }
    /**
     * Set full_last_name value
     * @param string $full_last_name
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public function setFull_last_name($full_last_name = null)
    {
        // validation for constraint: string
        if (!is_null($full_last_name) && !is_string($full_last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($full_last_name)), __LINE__);
        }
        $this->full_last_name = $this->{'full-last-name'} = $full_last_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
