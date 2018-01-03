<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for composition-policy StructType
 * @subpackage Structs
 */
class Composition_policy extends AbstractStructBase
{
    /**
     * The template_name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $template_name;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for composition-policy
     * @uses Composition_policy::setTemplate_name()
     * @uses Composition_policy::setAny()
     * @param string $template_name
     * @param \DOMDocument $any
     */
    public function __construct($template_name = null, \DOMDocument $any = null)
    {
        $this
            ->setTemplate_name($template_name)
            ->setAny($any);
    }
    /**
     * Get template_name value
     * @return string
     */
    public function getTemplate_name()
    {
        return $this->{'template-name'};
    }
    /**
     * Set template_name value
     * @param string $template_name
     * @return \InfoCert\Top\OnboardingService\StructType\Composition_policy
     */
    public function setTemplate_name($template_name = null)
    {
        // validation for constraint: string
        if (!is_null($template_name) && !is_string($template_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($template_name)), __LINE__);
        }
        $this->template_name = $this->{'template-name'} = $template_name;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \InfoCert\Top\OnboardingService\StructType\Composition_policy::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \InfoCert\Top\OnboardingService\StructType\Composition_policy
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Composition_policy
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
