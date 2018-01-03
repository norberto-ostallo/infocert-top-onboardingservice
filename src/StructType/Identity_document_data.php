<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for identity-document-data StructType
 * @subpackage Structs
 */
class Identity_document_data extends AbstractStructBase
{
    /**
     * The issuer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issuer;
    /**
     * The issue_place
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issue_place;
    /**
     * The issue_province
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issue_province;
    /**
     * The issue_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issue_date;
    /**
     * The expiration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expiration_date;
    /**
     * The issue_country
     * @var string
     */
    public $issue_country;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * Constructor method for identity-document-data
     * @uses Identity_document_data::setIssuer()
     * @uses Identity_document_data::setIssue_place()
     * @uses Identity_document_data::setIssue_province()
     * @uses Identity_document_data::setIssue_date()
     * @uses Identity_document_data::setExpiration_date()
     * @uses Identity_document_data::setIssue_country()
     * @uses Identity_document_data::setType()
     * @uses Identity_document_data::setNumber()
     * @param string $issuer
     * @param string $issue_place
     * @param string $issue_province
     * @param string $issue_date
     * @param string $expiration_date
     * @param string $issue_country
     * @param string $type
     * @param string $number
     */
    public function __construct($issuer = null, $issue_place = null, $issue_province = null, $issue_date = null, $expiration_date = null, $issue_country = null, $type = null, $number = null)
    {
        $this
            ->setIssuer($issuer)
            ->setIssue_place($issue_place)
            ->setIssue_province($issue_province)
            ->setIssue_date($issue_date)
            ->setExpiration_date($expiration_date)
            ->setIssue_country($issue_country)
            ->setType($type)
            ->setNumber($number);
    }
    /**
     * Get issuer value
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setIssuer($issuer = null)
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        return $this;
    }
    /**
     * Get issue_place value
     * @return string|null
     */
    public function getIssue_place()
    {
        return $this->{'issue-place'};
    }
    /**
     * Set issue_place value
     * @param string $issue_place
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setIssue_place($issue_place = null)
    {
        // validation for constraint: string
        if (!is_null($issue_place) && !is_string($issue_place)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issue_place)), __LINE__);
        }
        $this->issue_place = $this->{'issue-place'} = $issue_place;
        return $this;
    }
    /**
     * Get issue_province value
     * @return string|null
     */
    public function getIssue_province()
    {
        return $this->{'issue-province'};
    }
    /**
     * Set issue_province value
     * @param string $issue_province
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setIssue_province($issue_province = null)
    {
        // validation for constraint: string
        if (!is_null($issue_province) && !is_string($issue_province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issue_province)), __LINE__);
        }
        $this->issue_province = $this->{'issue-province'} = $issue_province;
        return $this;
    }
    /**
     * Get issue_date value
     * @return string|null
     */
    public function getIssue_date()
    {
        return $this->{'issue-date'};
    }
    /**
     * Set issue_date value
     * @param string $issue_date
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setIssue_date($issue_date = null)
    {
        // validation for constraint: string
        if (!is_null($issue_date) && !is_string($issue_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issue_date)), __LINE__);
        }
        $this->issue_date = $this->{'issue-date'} = $issue_date;
        return $this;
    }
    /**
     * Get expiration_date value
     * @return string|null
     */
    public function getExpiration_date()
    {
        return $this->{'expiration-date'};
    }
    /**
     * Set expiration_date value
     * @param string $expiration_date
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setExpiration_date($expiration_date = null)
    {
        // validation for constraint: string
        if (!is_null($expiration_date) && !is_string($expiration_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiration_date)), __LINE__);
        }
        $this->expiration_date = $this->{'expiration-date'} = $expiration_date;
        return $this;
    }
    /**
     * Get issue_country value
     * @return string|null
     */
    public function getIssue_country()
    {
        return $this->{'issue-country'};
    }
    /**
     * Set issue_country value
     * @param string $issue_country
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setIssue_country($issue_country = null)
    {
        // validation for constraint: string
        if (!is_null($issue_country) && !is_string($issue_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issue_country)), __LINE__);
        }
        $this->issue_country = $this->{'issue-country'} = $issue_country;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data
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
