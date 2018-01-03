<?php

namespace InfoCert\Top\OnboardingService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addDocumentsEx
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\AddDocumentsEx $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\AddDocumentsExResponse|bool
     */
    public function addDocumentsEx(\InfoCert\Top\OnboardingService\StructType\AddDocumentsEx $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addDocumentsEx($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\AddDocuments $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\AddDocumentsResponse|bool
     */
    public function addDocuments(\InfoCert\Top\OnboardingService\StructType\AddDocuments $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addDocuments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \InfoCert\Top\OnboardingService\StructType\AddDocumentsExResponse|\InfoCert\Top\OnboardingService\StructType\AddDocumentsResponse
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
