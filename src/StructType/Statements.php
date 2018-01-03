<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statements StructType
 * @subpackage Structs
 */
class Statements extends AbstractStructBase
{
    /**
     * The statement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Statement[]
     */
    public $statement;
    /**
     * Constructor method for statements
     * @uses Statements::setStatement()
     * @param \InfoCert\Top\OnboardingService\StructType\Statement[] $statement
     */
    public function __construct(array $statement = array())
    {
        $this
            ->setStatement($statement);
    }
    /**
     * Get statement value
     * @return \InfoCert\Top\OnboardingService\StructType\Statement[]|null
     */
    public function getStatement()
    {
        return $this->statement;
    }
    /**
     * Set statement value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Statement[] $statement
     * @return \InfoCert\Top\OnboardingService\StructType\Statements
     */
    public function setStatement(array $statement = array())
    {
        foreach ($statement as $statementsStatementItem) {
            // validation for constraint: itemType
            if (!$statementsStatementItem instanceof \InfoCert\Top\OnboardingService\StructType\Statement) {
                throw new \InvalidArgumentException(sprintf('The statement property can only contain items of \InfoCert\Top\OnboardingService\StructType\Statement, "%s" given', is_object($statementsStatementItem) ? get_class($statementsStatementItem) : gettype($statementsStatementItem)), __LINE__);
            }
        }
        $this->statement = $statement;
        return $this;
    }
    /**
     * Add item to statement value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Statement $item
     * @return \InfoCert\Top\OnboardingService\StructType\Statements
     */
    public function addToStatement(\InfoCert\Top\OnboardingService\StructType\Statement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Statement) {
            throw new \InvalidArgumentException(sprintf('The statement property can only contain items of \InfoCert\Top\OnboardingService\StructType\Statement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->statement[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Statements
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
