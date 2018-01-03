<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signers StructType
 * @subpackage Structs
 */
class Signers extends AbstractStructBase
{
    /**
     * The signer_process_info
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Signer_process_info[]
     */
    public $signer_process_info;
    /**
     * The signers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \InfoCert\Top\OnboardingService\StructType\Signer_info[]
     */
    public $signers;
    /**
     * The signer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Signer[]
     */
    public $signer;
    /**
     * Constructor method for signers
     * @uses Signers::setSigner_process_info()
     * @uses Signers::setSigners()
     * @uses Signers::setSigner()
     * @param \InfoCert\Top\OnboardingService\StructType\Signer_process_info[] $signer_process_info
     * @param \InfoCert\Top\OnboardingService\StructType\Signer_info[] $signers
     * @param \InfoCert\Top\OnboardingService\StructType\Signer[] $signer
     */
    public function __construct(array $signer_process_info = array(), array $signers = array(), array $signer = array())
    {
        $this
            ->setSigner_process_info($signer_process_info)
            ->setSigners($signers)
            ->setSigner($signer);
    }
    /**
     * Get signer_process_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_process_info[]|null
     */
    public function getSigner_process_info()
    {
        return $this->{'signer-process-info'};
    }
    /**
     * Set signer_process_info value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Signer_process_info[] $signer_process_info
     * @return \InfoCert\Top\OnboardingService\StructType\Signers
     */
    public function setSigner_process_info(array $signer_process_info = array())
    {
        foreach ($signer_process_info as $signersSigner_process_infoItem) {
            // validation for constraint: itemType
            if (!$signersSigner_process_infoItem instanceof \InfoCert\Top\OnboardingService\StructType\Signer_process_info) {
                throw new \InvalidArgumentException(sprintf('The signer_process_info property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signer_process_info, "%s" given', is_object($signersSigner_process_infoItem) ? get_class($signersSigner_process_infoItem) : gettype($signersSigner_process_infoItem)), __LINE__);
            }
        }
        $this->signer_process_info = $this->{'signer-process-info'} = $signer_process_info;
        return $this;
    }
    /**
     */
    public function addToSigner_process_info(\InfoCert\Top\OnboardingService\StructType\Signer_process_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Signer_process_info) {
            throw new \InvalidArgumentException(sprintf('The signer_process_info property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signer_process_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->signer_process_info[] = $item;
        return $this;
    }
    /**
     * Get signers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info[]|null
     */
    public function getSigners()
    {
        return isset($this->signers) ? $this->signers : null;
    }
    /**
     * Set signers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Signer_info[] $signers
     * @return \InfoCert\Top\OnboardingService\StructType\Signers
     */
    public function setSigners(array $signers = array())
    {
        foreach ($signers as $signersSignersItem) {
            // validation for constraint: itemType
            if (!$signersSignersItem instanceof \InfoCert\Top\OnboardingService\StructType\Signer_info) {
                throw new \InvalidArgumentException(sprintf('The signers property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signer_info, "%s" given', is_object($signersSignersItem) ? get_class($signersSignersItem) : gettype($signersSignersItem)), __LINE__);
            }
        }
        if (is_null($signers) || (is_array($signers) && empty($signers))) {
            unset($this->signers);
        } else {
            $this->signers = $signers;
        }
        return $this;
    }
    /**
     * Add item to signers value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Signer_info $item
     * @return \InfoCert\Top\OnboardingService\StructType\Signers
     */
    public function addToSigners(\InfoCert\Top\OnboardingService\StructType\Signer_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Signer_info) {
            throw new \InvalidArgumentException(sprintf('The signers property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signer_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->signers[] = $item;
        return $this;
    }
    /**
     * Get signer value
     * @return \InfoCert\Top\OnboardingService\StructType\Signer[]|null
     */
    public function getSigner()
    {
        return $this->signer;
    }
    /**
     * Set signer value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Signer[] $signer
     * @return \InfoCert\Top\OnboardingService\StructType\Signers
     */
    public function setSigner(array $signer = array())
    {
        foreach ($signer as $signersSignerItem) {
            // validation for constraint: itemType
            if (!$signersSignerItem instanceof \InfoCert\Top\OnboardingService\StructType\Signer) {
                throw new \InvalidArgumentException(sprintf('The signer property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signer, "%s" given', is_object($signersSignerItem) ? get_class($signersSignerItem) : gettype($signersSignerItem)), __LINE__);
            }
        }
        $this->signer = $signer;
        return $this;
    }
    /**
     * Add item to signer value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Signer $item
     * @return \InfoCert\Top\OnboardingService\StructType\Signers
     */
    public function addToSigner(\InfoCert\Top\OnboardingService\StructType\Signer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Signer) {
            throw new \InvalidArgumentException(sprintf('The signer property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->signer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Signers
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
