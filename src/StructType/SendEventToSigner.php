<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEventToSigner StructType
 * Meta informations extracted from the WSDL
 * - type: tns:sendEventToSigner
 * @subpackage Structs
 */
class SendEventToSigner extends AbstractStructBase
{
    /**
     * The company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_id;
    /**
     * The dossier_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_id;
    /**
     * The signer_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $signer_id;
    /**
     * The event_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $event_name;
    /**
     * The event_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Content
     */
    public $event_data;
    /**
     * Constructor method for sendEventToSigner
     * @uses SendEventToSigner::setCompany_id()
     * @uses SendEventToSigner::setDossier_id()
     * @uses SendEventToSigner::setSigner_id()
     * @uses SendEventToSigner::setEvent_name()
     * @uses SendEventToSigner::setEvent_data()
     * @param string $company_id
     * @param string $dossier_id
     * @param string $signer_id
     * @param string $event_name
     * @param \InfoCert\Top\OnboardingService\StructType\Content $event_data
     */
    public function __construct($company_id = null, $dossier_id = null, $signer_id = null, $event_name = null, \InfoCert\Top\OnboardingService\StructType\Content $event_data = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setDossier_id($dossier_id)
            ->setSigner_id($signer_id)
            ->setEvent_name($event_name)
            ->setEvent_data($event_data);
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
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToSigner
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
     * Get dossier_id value
     * @return string|null
     */
    public function getDossier_id()
    {
        return $this->{'dossier-id'};
    }
    /**
     * Set dossier_id value
     * @param string $dossier_id
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToSigner
     */
    public function setDossier_id($dossier_id = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_id) && !is_string($dossier_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_id)), __LINE__);
        }
        $this->dossier_id = $this->{'dossier-id'} = $dossier_id;
        return $this;
    }
    /**
     * Get signer_id value
     * @return string|null
     */
    public function getSigner_id()
    {
        return $this->{'signer-id'};
    }
    /**
     * Set signer_id value
     * @param string $signer_id
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToSigner
     */
    public function setSigner_id($signer_id = null)
    {
        // validation for constraint: string
        if (!is_null($signer_id) && !is_string($signer_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signer_id)), __LINE__);
        }
        $this->signer_id = $this->{'signer-id'} = $signer_id;
        return $this;
    }
    /**
     * Get event_name value
     * @return string|null
     */
    public function getEvent_name()
    {
        return $this->{'event-name'};
    }
    /**
     * Set event_name value
     * @param string $event_name
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToSigner
     */
    public function setEvent_name($event_name = null)
    {
        // validation for constraint: string
        if (!is_null($event_name) && !is_string($event_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($event_name)), __LINE__);
        }
        $this->event_name = $this->{'event-name'} = $event_name;
        return $this;
    }
    /**
     * Get event_data value
     * @return \InfoCert\Top\OnboardingService\StructType\Content|null
     */
    public function getEvent_data()
    {
        return $this->{'event-data'};
    }
    /**
     * Set event_data value
     * @param \InfoCert\Top\OnboardingService\StructType\Content $event_data
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToSigner
     */
    public function setEvent_data(\InfoCert\Top\OnboardingService\StructType\Content $event_data = null)
    {
        $this->event_data = $this->{'event-data'} = $event_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToSigner
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
