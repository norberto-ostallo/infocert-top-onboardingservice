<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateSigner StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updateSigner
 * @subpackage Structs
 */
class UpdateSigner extends AbstractStructBase
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
     * The signer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public $signer;
    /**
     * The resume
     * @var bool
     */
    public $resume;
    /**
     * Constructor method for updateSigner
     * @uses UpdateSigner::setCompany_id()
     * @uses UpdateSigner::setDossier_id()
     * @uses UpdateSigner::setSigner()
     * @uses UpdateSigner::setResume()
     * @param string $company_id
     * @param string $dossier_id
     * @param \InfoCert\Top\OnboardingService\StructType\Signer $signer
     * @param bool $resume
     */
    public function __construct($company_id = null, $dossier_id = null, \InfoCert\Top\OnboardingService\StructType\Signer $signer = null, $resume = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setDossier_id($dossier_id)
            ->setSigner($signer)
            ->setResume($resume);
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
     * @return \InfoCert\Top\OnboardingService\StructType\UpdateSigner
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
     * @return \InfoCert\Top\OnboardingService\StructType\UpdateSigner
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
     * Get signer value
     * @return \InfoCert\Top\OnboardingService\StructType\Signer|null
     */
    public function getSigner()
    {
        return $this->signer;
    }
    /**
     * Set signer value
     * @param \InfoCert\Top\OnboardingService\StructType\Signer $signer
     * @return \InfoCert\Top\OnboardingService\StructType\UpdateSigner
     */
    public function setSigner(\InfoCert\Top\OnboardingService\StructType\Signer $signer = null)
    {
        $this->signer = $signer;
        return $this;
    }
    /**
     * Get resume value
     * @return bool|null
     */
    public function getResume()
    {
        return $this->resume;
    }
    /**
     * Set resume value
     * @param bool $resume
     * @return \InfoCert\Top\OnboardingService\StructType\UpdateSigner
     */
    public function setResume($resume = null)
    {
        // validation for constraint: boolean
        if (!is_null($resume) && !is_bool($resume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($resume)), __LINE__);
        }
        $this->resume = $resume;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\UpdateSigner
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
