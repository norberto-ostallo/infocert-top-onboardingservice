<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rao StructType
 * @subpackage Structs
 */
class Rao extends AbstractStructBase
{
    /**
     * The username
     * @var string
     */
    public $username;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The office
     * @var string
     */
    public $office;
    /**
     * The certificate_domain
     * @var string
     */
    public $certificate_domain;
    /**
     * The certificate_alias
     * @var string
     */
    public $certificate_alias;
    /**
     * The certificate_pin
     * @var string
     */
    public $certificate_pin;
    /**
     * Constructor method for rao
     * @uses Rao::setUsername()
     * @uses Rao::setPassword()
     * @uses Rao::setOffice()
     * @uses Rao::setCertificate_domain()
     * @uses Rao::setCertificate_alias()
     * @uses Rao::setCertificate_pin()
     * @param string $username
     * @param string $password
     * @param string $office
     * @param string $certificate_domain
     * @param string $certificate_alias
     * @param string $certificate_pin
     */
    public function __construct($username = null, $password = null, $office = null, $certificate_domain = null, $certificate_alias = null, $certificate_pin = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setOffice($office)
            ->setCertificate_domain($certificate_domain)
            ->setCertificate_alias($certificate_alias)
            ->setCertificate_pin($certificate_pin);
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \InfoCert\Top\OnboardingService\StructType\Rao
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
        }
        $this->username = $username;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \InfoCert\Top\OnboardingService\StructType\Rao
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get office value
     * @return string|null
     */
    public function getOffice()
    {
        return $this->office;
    }
    /**
     * Set office value
     * @param string $office
     * @return \InfoCert\Top\OnboardingService\StructType\Rao
     */
    public function setOffice($office = null)
    {
        // validation for constraint: string
        if (!is_null($office) && !is_string($office)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($office)), __LINE__);
        }
        $this->office = $office;
        return $this;
    }
    /**
     * Get certificate_domain value
     * @return string|null
     */
    public function getCertificate_domain()
    {
        return $this->{'certificate-domain'};
    }
    /**
     * Set certificate_domain value
     * @param string $certificate_domain
     * @return \InfoCert\Top\OnboardingService\StructType\Rao
     */
    public function setCertificate_domain($certificate_domain = null)
    {
        // validation for constraint: string
        if (!is_null($certificate_domain) && !is_string($certificate_domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($certificate_domain)), __LINE__);
        }
        $this->certificate_domain = $this->{'certificate-domain'} = $certificate_domain;
        return $this;
    }
    /**
     * Get certificate_alias value
     * @return string|null
     */
    public function getCertificate_alias()
    {
        return $this->{'certificate-alias'};
    }
    /**
     * Set certificate_alias value
     * @param string $certificate_alias
     * @return \InfoCert\Top\OnboardingService\StructType\Rao
     */
    public function setCertificate_alias($certificate_alias = null)
    {
        // validation for constraint: string
        if (!is_null($certificate_alias) && !is_string($certificate_alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($certificate_alias)), __LINE__);
        }
        $this->certificate_alias = $this->{'certificate-alias'} = $certificate_alias;
        return $this;
    }
    /**
     * Get certificate_pin value
     * @return string|null
     */
    public function getCertificate_pin()
    {
        return $this->{'certificate-pin'};
    }
    /**
     * Set certificate_pin value
     * @param string $certificate_pin
     * @return \InfoCert\Top\OnboardingService\StructType\Rao
     */
    public function setCertificate_pin($certificate_pin = null)
    {
        // validation for constraint: string
        if (!is_null($certificate_pin) && !is_string($certificate_pin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($certificate_pin)), __LINE__);
        }
        $this->certificate_pin = $this->{'certificate-pin'} = $certificate_pin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Rao
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
