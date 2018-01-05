<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for webid-service-info StructType
 * @subpackage Structs
 */
class Webid_service_info extends AbstractStructBase
{
    /**
     * The timestamp
     * @var string
     */
    public $timestamp;
    /**
     * The busy_operators
     * @var int
     */
    public $busy_operators;
    /**
     * The free_operators
     * @var int
     */
    public $free_operators;
    /**
     * The in_progress_users
     * @var int
     */
    public $in_progress_users;
    /**
     * The pending_users
     * @var int
     */
    public $pending_users;
    /**
     * Constructor method for webid-service-info
     * @uses Webid_service_info::setTimestamp()
     * @uses Webid_service_info::setBusy_operators()
     * @uses Webid_service_info::setFree_operators()
     * @uses Webid_service_info::setIn_progress_users()
     * @uses Webid_service_info::setPending_users()
     * @param string $timestamp
     * @param int $busy_operators
     * @param int $free_operators
     * @param int $in_progress_users
     * @param int $pending_users
     */
    public function __construct($timestamp = null, $busy_operators = null, $free_operators = null, $in_progress_users = null, $pending_users = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setBusy_operators($busy_operators)
            ->setFree_operators($free_operators)
            ->setIn_progress_users($in_progress_users)
            ->setPending_users($pending_users);
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \InfoCert\Top\OnboardingService\StructType\Webid_service_info
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * Get busy_operators value
     * @return int|null
     */
    public function getBusy_operators()
    {
        return $this->{'busy-operators'};
    }
    /**
     * Set busy_operators value
     * @param int $busy_operators
     * @return \InfoCert\Top\OnboardingService\StructType\Webid_service_info
     */
    public function setBusy_operators($busy_operators = null)
    {
        // validation for constraint: int
        if (!is_null($busy_operators) && !is_numeric($busy_operators)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($busy_operators)), __LINE__);
        }
        $this->busy_operators = $this->{'busy-operators'} = $busy_operators;
        return $this;
    }
    /**
     * Get free_operators value
     * @return int|null
     */
    public function getFree_operators()
    {
        return $this->{'free-operators'};
    }
    /**
     * Set free_operators value
     * @param int $free_operators
     * @return \InfoCert\Top\OnboardingService\StructType\Webid_service_info
     */
    public function setFree_operators($free_operators = null)
    {
        // validation for constraint: int
        if (!is_null($free_operators) && !is_numeric($free_operators)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($free_operators)), __LINE__);
        }
        $this->free_operators = $this->{'free-operators'} = $free_operators;
        return $this;
    }
    /**
     * Get in_progress_users value
     * @return int|null
     */
    public function getIn_progress_users()
    {
        return $this->{'in-progress-users'};
    }
    /**
     * Set in_progress_users value
     * @param int $in_progress_users
     * @return \InfoCert\Top\OnboardingService\StructType\Webid_service_info
     */
    public function setIn_progress_users($in_progress_users = null)
    {
        // validation for constraint: int
        if (!is_null($in_progress_users) && !is_numeric($in_progress_users)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($in_progress_users)), __LINE__);
        }
        $this->in_progress_users = $this->{'in-progress-users'} = $in_progress_users;
        return $this;
    }
    /**
     * Get pending_users value
     * @return int|null
     */
    public function getPending_users()
    {
        return $this->{'pending-users'};
    }
    /**
     * Set pending_users value
     * @param int $pending_users
     * @return \InfoCert\Top\OnboardingService\StructType\Webid_service_info
     */
    public function setPending_users($pending_users = null)
    {
        // validation for constraint: int
        if (!is_null($pending_users) && !is_numeric($pending_users)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pending_users)), __LINE__);
        }
        $this->pending_users = $this->{'pending-users'} = $pending_users;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Webid_service_info
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
