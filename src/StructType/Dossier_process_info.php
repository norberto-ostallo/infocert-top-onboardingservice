<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossier-process-info StructType
 * @subpackage Structs
 */
class Dossier_process_info extends AbstractStructBase
{
    /**
     * The company_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $company_id;
    /**
     * The dossier_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $dossier_id;
    /**
     * The dossier_type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $dossier_type;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $status;
    /**
     * The business_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_id;
    /**
     * The creation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $creation_date;
    /**
     * The last_activity_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $last_activity_date;
    /**
     * The signers
     * @var \InfoCert\Top\OnboardingService\StructType\Signers
     */
    public $signers;
    /**
     * Constructor method for dossier-process-info
     * @uses Dossier_process_info::setCompany_id()
     * @uses Dossier_process_info::setDossier_id()
     * @uses Dossier_process_info::setDossier_type()
     * @uses Dossier_process_info::setStatus()
     * @uses Dossier_process_info::setBusiness_id()
     * @uses Dossier_process_info::setCreation_date()
     * @uses Dossier_process_info::setLast_activity_date()
     * @uses Dossier_process_info::setSigners()
     * @param string $company_id
     * @param string $dossier_id
     * @param string $dossier_type
     * @param string $status
     * @param string $business_id
     * @param string $creation_date
     * @param string $last_activity_date
     * @param \InfoCert\Top\OnboardingService\StructType\Signers $signers
     */
    public function __construct($company_id = null, $dossier_id = null, $dossier_type = null, $status = null, $business_id = null, $creation_date = null, $last_activity_date = null, \InfoCert\Top\OnboardingService\StructType\Signers $signers = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setDossier_id($dossier_id)
            ->setDossier_type($dossier_type)
            ->setStatus($status)
            ->setBusiness_id($business_id)
            ->setCreation_date($creation_date)
            ->setLast_activity_date($last_activity_date)
            ->setSigners($signers);
    }
    /**
     * Get company_id value
     * @return string
     */
    public function getCompany_id()
    {
        return $this->{'company-id'};
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
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
     * @return string
     */
    public function getDossier_id()
    {
        return $this->{'dossier-id'};
    }
    /**
     * Set dossier_id value
     * @param string $dossier_id
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
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
     * Get dossier_type value
     * @return string
     */
    public function getDossier_type()
    {
        return $this->{'dossier-type'};
    }
    /**
     * Set dossier_type value
     * @param string $dossier_type
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
     */
    public function setDossier_type($dossier_type = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_type) && !is_string($dossier_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_type)), __LINE__);
        }
        $this->dossier_type = $this->{'dossier-type'} = $dossier_type;
        return $this;
    }
    /**
     * Get status value
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get business_id value
     * @return string|null
     */
    public function getBusiness_id()
    {
        return $this->{'business-id'};
    }
    /**
     * Set business_id value
     * @param string $business_id
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
     */
    public function setBusiness_id($business_id = null)
    {
        // validation for constraint: string
        if (!is_null($business_id) && !is_string($business_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_id)), __LINE__);
        }
        $this->business_id = $this->{'business-id'} = $business_id;
        return $this;
    }
    /**
     * Get creation_date value
     * @return string|null
     */
    public function getCreation_date()
    {
        return $this->{'creation-date'};
    }
    /**
     * Set creation_date value
     * @param string $creation_date
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
     */
    public function setCreation_date($creation_date = null)
    {
        // validation for constraint: string
        if (!is_null($creation_date) && !is_string($creation_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creation_date)), __LINE__);
        }
        $this->creation_date = $this->{'creation-date'} = $creation_date;
        return $this;
    }
    /**
     * Get last_activity_date value
     * @return string|null
     */
    public function getLast_activity_date()
    {
        return $this->{'last-activity-date'};
    }
    /**
     * Set last_activity_date value
     * @param string $last_activity_date
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
     */
    public function setLast_activity_date($last_activity_date = null)
    {
        // validation for constraint: string
        if (!is_null($last_activity_date) && !is_string($last_activity_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_activity_date)), __LINE__);
        }
        $this->last_activity_date = $this->{'last-activity-date'} = $last_activity_date;
        return $this;
    }
    /**
     * Get signers value
     * @return \InfoCert\Top\OnboardingService\StructType\Signers|null
     */
    public function getSigners()
    {
        return $this->signers;
    }
    /**
     * Set signers value
     * @param \InfoCert\Top\OnboardingService\StructType\Signers $signers
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
     */
    public function setSigners(\InfoCert\Top\OnboardingService\StructType\Signers $signers = null)
    {
        $this->signers = $signers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
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
