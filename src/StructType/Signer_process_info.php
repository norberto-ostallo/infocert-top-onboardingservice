<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signer-process-info StructType
 * @subpackage Structs
 */
class Signer_process_info extends AbstractStructBase
{
    /**
     * The signer_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $signer_id;
    /**
     * The role
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $role;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $status;
    /**
     * The reservation_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reservation_code;
    /**
     * The legal_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Legal_id
     */
    public $legal_id;
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
     * Constructor method for signer-process-info
     * @uses Signer_process_info::setSigner_id()
     * @uses Signer_process_info::setRole()
     * @uses Signer_process_info::setStatus()
     * @uses Signer_process_info::setReservation_code()
     * @uses Signer_process_info::setLegal_id()
     * @uses Signer_process_info::setCreation_date()
     * @uses Signer_process_info::setLast_activity_date()
     * @param string $signer_id
     * @param string $role
     * @param string $status
     * @param string $reservation_code
     * @param \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id
     * @param string $creation_date
     * @param string $last_activity_date
     */
    public function __construct($signer_id = null, $role = null, $status = null, $reservation_code = null, \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id = null, $creation_date = null, $last_activity_date = null)
    {
        $this
            ->setSigner_id($signer_id)
            ->setRole($role)
            ->setStatus($status)
            ->setReservation_code($reservation_code)
            ->setLegal_id($legal_id)
            ->setCreation_date($creation_date)
            ->setLast_activity_date($last_activity_date);
    }
    /**
     * Get signer_id value
     * @return string
     */
    public function getSigner_id()
    {
        return $this->{'signer-id'};
    }
    /**
     * Set signer_id value
     * @param string $signer_id
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
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
     * Get role value
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
     */
    public function setRole($role = null)
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role)), __LINE__);
        }
        $this->role = $role;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
     */
    public function setLegal_id(\InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id = null)
    {
        $this->legal_id = $this->{'legal-id'} = $legal_id;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info
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
