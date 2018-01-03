<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graph-signature-fields StructType
 * @subpackage Structs
 */
class Graph_signature_fields extends AbstractStructBase
{
    /**
     * The graph_signature_field_info
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info[]
     */
    public $graph_signature_field_info;
    /**
     * Constructor method for graph-signature-fields
     * @uses Graph_signature_fields::setGraph_signature_field_info()
     * @param \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info[] $graph_signature_field_info
     */
    public function __construct(array $graph_signature_field_info = array())
    {
        $this
            ->setGraph_signature_field_info($graph_signature_field_info);
    }
    /**
     * Get graph_signature_field_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info[]|null
     */
    public function getGraph_signature_field_info()
    {
        return $this->{'graph-signature-field-info'};
    }
    /**
     * Set graph_signature_field_info value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info[] $graph_signature_field_info
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_fields
     */
    public function setGraph_signature_field_info(array $graph_signature_field_info = array())
    {
        foreach ($graph_signature_field_info as $graph_signature_fieldsGraph_signature_field_infoItem) {
            // validation for constraint: itemType
            if (!$graph_signature_fieldsGraph_signature_field_infoItem instanceof \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info) {
                throw new \InvalidArgumentException(sprintf('The graph_signature_field_info property can only contain items of \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info, "%s" given', is_object($graph_signature_fieldsGraph_signature_field_infoItem) ? get_class($graph_signature_fieldsGraph_signature_field_infoItem) : gettype($graph_signature_fieldsGraph_signature_field_infoItem)), __LINE__);
            }
        }
        $this->graph_signature_field_info = $this->{'graph-signature-field-info'} = $graph_signature_field_info;
        return $this;
    }
    /**
     */
    public function addToGraph_signature_field_info(\InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info) {
            throw new \InvalidArgumentException(sprintf('The graph_signature_field_info property can only contain items of \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->graph_signature_field_info[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_fields
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
