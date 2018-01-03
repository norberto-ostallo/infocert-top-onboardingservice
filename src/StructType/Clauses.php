<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clauses StructType
 * @subpackage Structs
 */
class Clauses extends AbstractStructBase
{
    /**
     * The clause_result
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Clause_result[]
     */
    public $clause_result;
    /**
     * Constructor method for clauses
     * @uses Clauses::setClause_result()
     * @param \InfoCert\Top\OnboardingService\StructType\Clause_result[] $clause_result
     */
    public function __construct(array $clause_result = array())
    {
        $this
            ->setClause_result($clause_result);
    }
    /**
     * Get clause_result value
     * @return \InfoCert\Top\OnboardingService\StructType\Clause_result[]|null
     */
    public function getClause_result()
    {
        return $this->{'clause-result'};
    }
    /**
     * Set clause_result value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Clause_result[] $clause_result
     * @return \InfoCert\Top\OnboardingService\StructType\Clauses
     */
    public function setClause_result(array $clause_result = array())
    {
        foreach ($clause_result as $clausesClause_resultItem) {
            // validation for constraint: itemType
            if (!$clausesClause_resultItem instanceof \InfoCert\Top\OnboardingService\StructType\Clause_result) {
                throw new \InvalidArgumentException(sprintf('The clause_result property can only contain items of \InfoCert\Top\OnboardingService\StructType\Clause_result, "%s" given', is_object($clausesClause_resultItem) ? get_class($clausesClause_resultItem) : gettype($clausesClause_resultItem)), __LINE__);
            }
        }
        $this->clause_result = $this->{'clause-result'} = $clause_result;
        return $this;
    }
    /**
     */
    public function addToClause_result(\InfoCert\Top\OnboardingService\StructType\Clause_result $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Clause_result) {
            throw new \InvalidArgumentException(sprintf('The clause_result property can only contain items of \InfoCert\Top\OnboardingService\StructType\Clause_result, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->clause_result[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Clauses
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
