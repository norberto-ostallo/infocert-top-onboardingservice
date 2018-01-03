<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signer-status StructType
 * @subpackage Structs
 */
class Signer_status extends AbstractStructBase
{
    /**
     * The role
     * @var string
     */
    public $role;
    /**
     * The signerId
     * @var string
     */
    public $signerId;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The identification_status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Identifications_status
     */
    public $identification_status;
    /**
     * The tasks
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Task_status[]
     */
    public $tasks;
    /**
     * The additional_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $additional_data;
    /**
     * Constructor method for signer-status
     * @uses Signer_status::setRole()
     * @uses Signer_status::setSignerId()
     * @uses Signer_status::setStatus()
     * @uses Signer_status::setIdentification_status()
     * @uses Signer_status::setTasks()
     * @uses Signer_status::setAdditional_data()
     * @param string $role
     * @param string $signerId
     * @param string $status
     * @param \InfoCert\Top\OnboardingService\StructType\Identifications_status $identification_status
     * @param \InfoCert\Top\OnboardingService\StructType\Task_status[] $tasks
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     */
    public function __construct($role = null, $signerId = null, $status = null, \InfoCert\Top\OnboardingService\StructType\Identifications_status $identification_status = null, array $tasks = array(), \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this
            ->setRole($role)
            ->setSignerId($signerId)
            ->setStatus($status)
            ->setIdentification_status($identification_status)
            ->setTasks($tasks)
            ->setAdditional_data($additional_data);
    }
    /**
     * Get role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
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
     * Get signerId value
     * @return string|null
     */
    public function getSignerId()
    {
        return $this->signerId;
    }
    /**
     * Set signerId value
     * @param string $signerId
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
     */
    public function setSignerId($signerId = null)
    {
        // validation for constraint: string
        if (!is_null($signerId) && !is_string($signerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signerId)), __LINE__);
        }
        $this->signerId = $signerId;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
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
     * Get identification_status value
     * @return \InfoCert\Top\OnboardingService\StructType\Identifications_status|null
     */
    public function getIdentification_status()
    {
        return $this->{'identification-status'};
    }
    /**
     * Set identification_status value
     * @param \InfoCert\Top\OnboardingService\StructType\Identifications_status $identification_status
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
     */
    public function setIdentification_status(\InfoCert\Top\OnboardingService\StructType\Identifications_status $identification_status = null)
    {
        $this->identification_status = $this->{'identification-status'} = $identification_status;
        return $this;
    }
    /**
     * Get tasks value
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status[]|null
     */
    public function getTasks()
    {
        return $this->tasks;
    }
    /**
     * Set tasks value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Task_status[] $tasks
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
     */
    public function setTasks(array $tasks = array())
    {
        foreach ($tasks as $signer_statusTasksItem) {
            // validation for constraint: itemType
            if (!$signer_statusTasksItem instanceof \InfoCert\Top\OnboardingService\StructType\Task_status) {
                throw new \InvalidArgumentException(sprintf('The tasks property can only contain items of \InfoCert\Top\OnboardingService\StructType\Task_status, "%s" given', is_object($signer_statusTasksItem) ? get_class($signer_statusTasksItem) : gettype($signer_statusTasksItem)), __LINE__);
            }
        }
        $this->tasks = $tasks;
        return $this;
    }
    /**
     * Add item to tasks value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Task_status $item
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
     */
    public function addToTasks(\InfoCert\Top\OnboardingService\StructType\Task_status $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Task_status) {
            throw new \InvalidArgumentException(sprintf('The tasks property can only contain items of \InfoCert\Top\OnboardingService\StructType\Task_status, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->tasks[] = $item;
        return $this;
    }
    /**
     * Get additional_data value
     * @return \InfoCert\Top\OnboardingService\StructType\Properties|null
     */
    public function getAdditional_data()
    {
        return $this->{'additional-data'};
    }
    /**
     * Set additional_data value
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
     */
    public function setAdditional_data(\InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this->additional_data = $this->{'additional-data'} = $additional_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status
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
