<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossier-action-result StructType
 * @subpackage Structs
 */
class Dossier_action_result extends AbstractStructBase
{
    /**
     * The action
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $action;
    /**
     * The service
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $service;
    /**
     * The success
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $success;
    /**
     * The time_stamp
     * @var string
     */
    public $time_stamp;
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Error
     */
    public $error;
    /**
     * Constructor method for dossier-action-result
     * @uses Dossier_action_result::setAction()
     * @uses Dossier_action_result::setService()
     * @uses Dossier_action_result::setSuccess()
     * @uses Dossier_action_result::setTime_stamp()
     * @uses Dossier_action_result::setError()
     * @param string $action
     * @param string $service
     * @param bool $success
     * @param string $time_stamp
     * @param \InfoCert\Top\OnboardingService\StructType\Error $error
     */
    public function __construct($action = null, $service = null, $success = null, $time_stamp = null, \InfoCert\Top\OnboardingService\StructType\Error $error = null)
    {
        $this
            ->setAction($action)
            ->setService($service)
            ->setSuccess($success)
            ->setTime_stamp($time_stamp)
            ->setError($error);
    }
    /**
     * Get action value
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_action_result
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($action)), __LINE__);
        }
        $this->action = $action;
        return $this;
    }
    /**
     * Get service value
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_action_result
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get success value
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_action_result
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($success)), __LINE__);
        }
        $this->success = $success;
        return $this;
    }
    /**
     * Get time_stamp value
     * @return string|null
     */
    public function getTime_stamp()
    {
        return $this->{'time-stamp'};
    }
    /**
     * Set time_stamp value
     * @param string $time_stamp
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_action_result
     */
    public function setTime_stamp($time_stamp = null)
    {
        // validation for constraint: string
        if (!is_null($time_stamp) && !is_string($time_stamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time_stamp)), __LINE__);
        }
        $this->time_stamp = $this->{'time-stamp'} = $time_stamp;
        return $this;
    }
    /**
     * Get error value
     * @return \InfoCert\Top\OnboardingService\StructType\Error|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \InfoCert\Top\OnboardingService\StructType\Error $error
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_action_result
     */
    public function setError(\InfoCert\Top\OnboardingService\StructType\Error $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_action_result
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
