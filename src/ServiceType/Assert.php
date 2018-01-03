<?php

namespace InfoCert\Top\OnboardingService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Assert ServiceType
 * @subpackage Services
 */
class Assert extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named assertIdentity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\AssertIdentity $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\AssertIdentityResponse|bool
     */
    public function assertIdentity(\InfoCert\Top\OnboardingService\StructType\AssertIdentity $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->assertIdentity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named assertAuthorization
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\AssertAuthorization $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\AssertAuthorizationResponse|bool
     */
    public function assertAuthorization(\InfoCert\Top\OnboardingService\StructType\AssertAuthorization $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->assertAuthorization($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \InfoCert\Top\OnboardingService\StructType\AssertAuthorizationResponse|\InfoCert\Top\OnboardingService\StructType\AssertIdentityResponse
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
