<?php

namespace InfoCert\Top\OnboardingService\EnumType;

/**
 * This class stands for identity-assertion-policy EnumType
 * @subpackage Enumerations
 */
class Identity_assertion_policy
{
    /**
     * Constant for value 'inline'
     * @return string 'inline'
     */
    const VALUE_INLINE = 'inline';
    /**
     * Constant for value 'inline.webid'
     * @return string 'inline.webid'
     */
    const VALUE_INLINE_WEBID = 'inline.webid';
    /**
     * Constant for value 'inline.liveid'
     * @return string 'inline.liveid'
     */
    const VALUE_INLINE_LIVEID = 'inline.liveid';
    /**
     * Constant for value 'inline.devisu'
     * @return string 'inline.devisu'
     */
    const VALUE_INLINE_DEVISU = 'inline.devisu';
    /**
     * Constant for value 'inline.selfid'
     * @return string 'inline.selfid'
     */
    const VALUE_INLINE_SELFID = 'inline.selfid';
    /**
     * Constant for value 'inline.signature'
     * @return string 'inline.signature'
     */
    const VALUE_INLINE_SIGNATURE = 'inline.signature';
    /**
     * Constant for value 'inline.cns'
     * @return string 'inline.cns'
     */
    const VALUE_INLINE_CNS = 'inline.cns';
    /**
     * Constant for value 'wait'
     * @return string 'wait'
     */
    const VALUE_WAIT = 'wait';
    /**
     * Constant for value 'attached'
     * @return string 'attached'
     */
    const VALUE_ATTACHED = 'attached';
    /**
     * Constant for value 'existing'
     * @return string 'existing'
     */
    const VALUE_EXISTING = 'existing';
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_INLINE
     * @uses self::VALUE_INLINE_WEBID
     * @uses self::VALUE_INLINE_LIVEID
     * @uses self::VALUE_INLINE_DEVISU
     * @uses self::VALUE_INLINE_SELFID
     * @uses self::VALUE_INLINE_SIGNATURE
     * @uses self::VALUE_INLINE_CNS
     * @uses self::VALUE_WAIT
     * @uses self::VALUE_ATTACHED
     * @uses self::VALUE_EXISTING
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INLINE,
            self::VALUE_INLINE_WEBID,
            self::VALUE_INLINE_LIVEID,
            self::VALUE_INLINE_DEVISU,
            self::VALUE_INLINE_SELFID,
            self::VALUE_INLINE_SIGNATURE,
            self::VALUE_INLINE_CNS,
            self::VALUE_WAIT,
            self::VALUE_ATTACHED,
            self::VALUE_EXISTING,
            self::VALUE_NONE,
        );
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
