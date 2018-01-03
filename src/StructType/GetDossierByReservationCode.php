<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDossierByReservationCode StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getDossierByReservationCode
 * @subpackage Structs
 */
class GetDossierByReservationCode extends AbstractStructBase
{
    /**
     * The company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_id;
    /**
     * The legal_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Legal_id
     */
    public $legal_id;
    /**
     * The reservation_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reservation_code;
    /**
     * Constructor method for getDossierByReservationCode
     * @uses GetDossierByReservationCode::setCompany_id()
     * @uses GetDossierByReservationCode::setLegal_id()
     * @uses GetDossierByReservationCode::setReservation_code()
     * @param string $company_id
     * @param \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id
     * @param string $reservation_code
     */
    public function __construct($company_id = null, \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id = null, $reservation_code = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setLegal_id($legal_id)
            ->setReservation_code($reservation_code);
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->{'company-id'};
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCode
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $this->{'company-id'} = $company_id;
        return $this;
    }
    /**
     * Get legal_id value
     * @return \InfoCert\Top\OnboardingService\StructType\Legal_id|null
     */
    public function getLegal_id()
    {
        return $this->{'legal-id'};
    }
    /**
     * Set legal_id value
     * @param \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCode
     */
    public function setLegal_id(\InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id = null)
    {
        $this->legal_id = $this->{'legal-id'} = $legal_id;
        return $this;
    }
    /**
     * Get reservation_code value
     * @return string|null
     */
    public function getReservation_code()
    {
        return $this->{'reservation-code'};
    }
    /**
     * Set reservation_code value
     * @param string $reservation_code
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCode
     */
    public function setReservation_code($reservation_code = null)
    {
        // validation for constraint: string
        if (!is_null($reservation_code) && !is_string($reservation_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservation_code)), __LINE__);
        }
        $this->reservation_code = $this->{'reservation-code'} = $reservation_code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCode
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
