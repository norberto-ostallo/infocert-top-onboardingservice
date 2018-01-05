<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tokens StructType
 * @subpackage Structs
 */
class Tokens extends AbstractStructBase
{
    /**
     * The tokens
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \InfoCert\Top\OnboardingService\StructType\Token[]
     */
    public $tokens;
    /**
     * Constructor method for tokens
     * @uses Tokens::setTokens()
     * @param \InfoCert\Top\OnboardingService\StructType\Token[] $tokens
     */
    public function __construct(array $tokens = array())
    {
        $this
            ->setTokens($tokens);
    }
    /**
     * Get tokens value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \InfoCert\Top\OnboardingService\StructType\Token[]|null
     */
    public function getTokens()
    {
        return isset($this->tokens) ? $this->tokens : null;
    }
    /**
     * Set tokens value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Token[] $tokens
     * @return \InfoCert\Top\OnboardingService\StructType\Tokens
     */
    public function setTokens(array $tokens = array())
    {
        foreach ($tokens as $tokensTokensItem) {
            // validation for constraint: itemType
            if (!$tokensTokensItem instanceof \InfoCert\Top\OnboardingService\StructType\Token) {
                throw new \InvalidArgumentException(sprintf('The tokens property can only contain items of \InfoCert\Top\OnboardingService\StructType\Token, "%s" given', is_object($tokensTokensItem) ? get_class($tokensTokensItem) : gettype($tokensTokensItem)), __LINE__);
            }
        }
        if (is_null($tokens) || (is_array($tokens) && empty($tokens))) {
            unset($this->tokens);
        } else {
            $this->tokens = $tokens;
        }
        return $this;
    }
    /**
     * Add item to tokens value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Token $item
     * @return \InfoCert\Top\OnboardingService\StructType\Tokens
     */
    public function addToTokens(\InfoCert\Top\OnboardingService\StructType\Token $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Token) {
            throw new \InvalidArgumentException(sprintf('The tokens property can only contain items of \InfoCert\Top\OnboardingService\StructType\Token, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->tokens[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Tokens
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
