<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cadesSign StructType
 * Meta informations extracted from the WSDL
 * - type: tns:cadesSign
 * @subpackage Structs
 */
class CadesSign extends AbstractStructBase
{
    /**
     * The certificate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Certificate
     */
    public $certificate;
    /**
     * The pin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pin;
    /**
     * The data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Content
     */
    public $data;
    /**
     * Constructor method for cadesSign
     * @uses CadesSign::setCertificate()
     * @uses CadesSign::setPin()
     * @uses CadesSign::setData()
     * @param \InfoCert\Top\OnboardingService\StructType\Certificate $certificate
     * @param string $pin
     * @param \InfoCert\Top\OnboardingService\StructType\Content $data
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Certificate $certificate = null, $pin = null, \InfoCert\Top\OnboardingService\StructType\Content $data = null)
    {
        $this
            ->setCertificate($certificate)
            ->setPin($pin)
            ->setData($data);
    }
    /**
     * Get certificate value
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate|null
     */
    public function getCertificate()
    {
        return $this->certificate;
    }
    /**
     * Set certificate value
     * @param \InfoCert\Top\OnboardingService\StructType\Certificate $certificate
     * @return \InfoCert\Top\OnboardingService\StructType\CadesSign
     */
    public function setCertificate(\InfoCert\Top\OnboardingService\StructType\Certificate $certificate = null)
    {
        $this->certificate = $certificate;
        return $this;
    }
    /**
     * Get pin value
     * @return string|null
     */
    public function getPin()
    {
        return $this->pin;
    }
    /**
     * Set pin value
     * @param string $pin
     * @return \InfoCert\Top\OnboardingService\StructType\CadesSign
     */
    public function setPin($pin = null)
    {
        // validation for constraint: string
        if (!is_null($pin) && !is_string($pin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pin)), __LINE__);
        }
        $this->pin = $pin;
        return $this;
    }
    /**
     * Get data value
     * @return \InfoCert\Top\OnboardingService\StructType\Content|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \InfoCert\Top\OnboardingService\StructType\Content $data
     * @return \InfoCert\Top\OnboardingService\StructType\CadesSign
     */
    public function setData(\InfoCert\Top\OnboardingService\StructType\Content $data = null)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\CadesSign
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
