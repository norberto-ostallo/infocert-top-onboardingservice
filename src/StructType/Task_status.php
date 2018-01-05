<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for task-status StructType
 * @subpackage Structs
 */
class Task_status extends AbstractStructBase
{
    /**
     * The task_name
     * @var string
     */
    public $task_name;
    /**
     * The task_id
     * @var string
     */
    public $task_id;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $start_date;
    /**
     * The complete_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $complete_date;
    /**
     * The additional_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $additional_data;
    /**
     * Constructor method for task-status
     * @uses Task_status::setTask_name()
     * @uses Task_status::setTask_id()
     * @uses Task_status::setStatus()
     * @uses Task_status::setStart_date()
     * @uses Task_status::setComplete_date()
     * @uses Task_status::setAdditional_data()
     * @param string $task_name
     * @param string $task_id
     * @param string $status
     * @param string $start_date
     * @param string $complete_date
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     */
    public function __construct($task_name = null, $task_id = null, $status = null, $start_date = null, $complete_date = null, \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this
            ->setTask_name($task_name)
            ->setTask_id($task_id)
            ->setStatus($status)
            ->setStart_date($start_date)
            ->setComplete_date($complete_date)
            ->setAdditional_data($additional_data);
    }
    /**
     * Get task_name value
     * @return string|null
     */
    public function getTask_name()
    {
        return $this->{'task-name'};
    }
    /**
     * Set task_name value
     * @param string $task_name
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status
     */
    public function setTask_name($task_name = null)
    {
        // validation for constraint: string
        if (!is_null($task_name) && !is_string($task_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($task_name)), __LINE__);
        }
        $this->task_name = $this->{'task-name'} = $task_name;
        return $this;
    }
    /**
     * Get task_id value
     * @return string|null
     */
    public function getTask_id()
    {
        return $this->{'task-id'};
    }
    /**
     * Set task_id value
     * @param string $task_id
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status
     */
    public function setTask_id($task_id = null)
    {
        // validation for constraint: string
        if (!is_null($task_id) && !is_string($task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($task_id)), __LINE__);
        }
        $this->task_id = $this->{'task-id'} = $task_id;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status
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
     * Get start_date value
     * @return string|null
     */
    public function getStart_date()
    {
        return $this->{'start-date'};
    }
    /**
     * Set start_date value
     * @param string $start_date
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status
     */
    public function setStart_date($start_date = null)
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_date)), __LINE__);
        }
        $this->start_date = $this->{'start-date'} = $start_date;
        return $this;
    }
    /**
     * Get complete_date value
     * @return string|null
     */
    public function getComplete_date()
    {
        return $this->{'complete-date'};
    }
    /**
     * Set complete_date value
     * @param string $complete_date
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status
     */
    public function setComplete_date($complete_date = null)
    {
        // validation for constraint: string
        if (!is_null($complete_date) && !is_string($complete_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($complete_date)), __LINE__);
        }
        $this->complete_date = $this->{'complete-date'} = $complete_date;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status
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
     * @return \InfoCert\Top\OnboardingService\StructType\Task_status
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
