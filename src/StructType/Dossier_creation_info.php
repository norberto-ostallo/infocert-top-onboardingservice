<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossier-creation-info StructType
 * @subpackage Structs
 */
class Dossier_creation_info extends AbstractStructBase
{
    /**
     * The tokens
     * @var \InfoCert\Top\OnboardingService\StructType\Tokens
     */
    public $tokens;
    /**
     * Constructor method for dossier-creation-info
     * @uses Dossier_creation_info::setTokens()
     * @param \InfoCert\Top\OnboardingService\StructType\Tokens $tokens
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Tokens $tokens = null)
    {
        $this
            ->setTokens($tokens);
    }
    /**
     * Get tokens value
     * @return \InfoCert\Top\OnboardingService\StructType\Tokens|null
     */
    public function getTokens()
    {
        return $this->tokens;
    }
    /**
     * Set tokens value
     * @param \InfoCert\Top\OnboardingService\StructType\Tokens $tokens
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_creation_info
     */
    public function setTokens(\InfoCert\Top\OnboardingService\StructType\Tokens $tokens = null)
    {
        $this->tokens = $tokens;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_creation_info
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
