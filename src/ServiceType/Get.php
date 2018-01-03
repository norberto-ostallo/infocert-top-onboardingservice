<?php

namespace InfoCert\Top\OnboardingService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getNewToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\GetNewToken $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\GetNewTokenResponse|bool
     */
    public function getNewToken(\InfoCert\Top\OnboardingService\StructType\GetNewToken $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getNewToken($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDossierByReservationCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCode $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCodeResponse|bool
     */
    public function getDossierByReservationCode(\InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCode $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getDossierByReservationCode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDossier
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\GetDossier $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierResponse|bool
     */
    public function getDossier(\InfoCert\Top\OnboardingService\StructType\GetDossier $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWebidServiceInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfo $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfoResponse|bool
     */
    public function getWebidServiceInfo(\InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getWebidServiceInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDossierStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\GetDossierStatus $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierStatusResponse|bool
     */
    public function getDossierStatus(\InfoCert\Top\OnboardingService\StructType\GetDossierStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getDossierStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSignerStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\GetSignerStatus $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\GetSignerStatusResponse|bool
     */
    public function getSignerStatus(\InfoCert\Top\OnboardingService\StructType\GetSignerStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getSignerStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDossiersByBusinessId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessId $parameters
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessIdResponse|bool
     */
    public function getDossiersByBusinessId(\InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessId $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getDossiersByBusinessId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCodeResponse|\InfoCert\Top\OnboardingService\StructType\GetDossierResponse|\InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessIdResponse|\InfoCert\Top\OnboardingService\StructType\GetDossierStatusResponse|\InfoCert\Top\OnboardingService\StructType\GetNewTokenResponse|\InfoCert\Top\OnboardingService\StructType\GetSignerStatusResponse|\InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfoResponse
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
