<?php

namespace InfoCert\Top\OnboardingService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sendEventToSigner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\SendEventToSigner $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToSignerResponse|bool
     */
    public function sendEventToSigner(\InfoCert\Top\OnboardingService\StructType\SendEventToSigner $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sendEventToSigner($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendEventToDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\SendEventToDocument $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToDocumentResponse|bool
     */
    public function sendEventToDocument(\InfoCert\Top\OnboardingService\StructType\SendEventToDocument $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sendEventToDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendEventToDossier
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\SendEventToDossier $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToDossierResponse|bool
     */
    public function sendEventToDossier(\InfoCert\Top\OnboardingService\StructType\SendEventToDossier $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sendEventToDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \InfoCert\Top\OnboardingService\StructType\SendEventToDocumentResponse|\InfoCert\Top\OnboardingService\StructType\SendEventToDossierResponse|\InfoCert\Top\OnboardingService\StructType\SendEventToSignerResponse
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
