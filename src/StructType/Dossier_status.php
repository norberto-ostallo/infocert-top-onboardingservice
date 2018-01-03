<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossier-status StructType
 * @subpackage Structs
 */
class Dossier_status extends AbstractStructBase
{
    /**
     * The business_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_id;
    /**
     * The status
     * @var string
     */
    public $status;
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
     * The action
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier_action_result[]
     */
    public $action;
    /**
     * Constructor method for dossier-status
     * @uses Dossier_status::setBusiness_id()
     * @uses Dossier_status::setStatus()
     * @uses Dossier_status::setCreation_date()
     * @uses Dossier_status::setLast_activity_date()
     * @uses Dossier_status::setAction()
     * @param string $business_id
     * @param string $status
     * @param string $creation_date
     * @param string $last_activity_date
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_action_result[] $action
     */
    public function __construct($business_id = null, $status = null, $creation_date = null, $last_activity_date = null, array $action = array())
    {
        $this
            ->setBusiness_id($business_id)
            ->setStatus($status)
            ->setCreation_date($creation_date)
            ->setLast_activity_date($last_activity_date)
            ->setAction($action);
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
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status
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
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status
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
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status
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
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status
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
     * Get action value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_action_result[]|null
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_action_result[] $action
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status
     */
    public function setAction(array $action = array())
    {
        foreach ($action as $dossier_statusActionItem) {
            // validation for constraint: itemType
            if (!$dossier_statusActionItem instanceof \InfoCert\Top\OnboardingService\StructType\Dossier_action_result) {
                throw new \InvalidArgumentException(sprintf('The action property can only contain items of \InfoCert\Top\OnboardingService\StructType\Dossier_action_result, "%s" given', is_object($dossier_statusActionItem) ? get_class($dossier_statusActionItem) : gettype($dossier_statusActionItem)), __LINE__);
            }
        }
        $this->action = $action;
        return $this;
    }
    /**
     * Add item to action value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_action_result $item
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status
     */
    public function addToAction(\InfoCert\Top\OnboardingService\StructType\Dossier_action_result $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Dossier_action_result) {
            throw new \InvalidArgumentException(sprintf('The action property can only contain items of \InfoCert\Top\OnboardingService\StructType\Dossier_action_result, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->action[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status
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
