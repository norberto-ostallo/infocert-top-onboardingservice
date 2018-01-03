<?php

namespace InfoCert\Top\OnboardingService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Abort ServiceType
 * @subpackage Services
 */
class Abort extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named abortDossier
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\AbortDossier $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\AbortDossierResponse|bool
     */
    public function abortDossier(\InfoCert\Top\OnboardingService\StructType\AbortDossier $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->abortDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \InfoCert\Top\OnboardingService\StructType\AbortDossierResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
