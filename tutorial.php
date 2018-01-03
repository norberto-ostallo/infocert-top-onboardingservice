<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \InfoCert\Top\OnboardingService\ClassMap::get(),
);
/**
 * Samples for Abort ServiceType
 */
$abort = new \InfoCert\Top\OnboardingService\ServiceType\Abort($options);
/**
 * Sample call for abortDossier operation/method
 */
if ($abort->abortDossier(new \InfoCert\Top\OnboardingService\StructType\AbortDossier()) !== false) {
    print_r($abort->getResult());
} else {
    print_r($abort->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \InfoCert\Top\OnboardingService\ServiceType\Add($options);
/**
 * Sample call for addDocumentsEx operation/method
 */
if ($add->addDocumentsEx(new \InfoCert\Top\OnboardingService\StructType\AddDocumentsEx()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addDocuments operation/method
 */
if ($add->addDocuments(new \InfoCert\Top\OnboardingService\StructType\AddDocuments()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \InfoCert\Top\OnboardingService\ServiceType\Get($options);
/**
 * Sample call for getNewToken operation/method
 */
if ($get->getNewToken(new \InfoCert\Top\OnboardingService\StructType\GetNewToken()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDossierByReservationCode operation/method
 */
if ($get->getDossierByReservationCode(new \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDossier operation/method
 */
if ($get->getDossier(new \InfoCert\Top\OnboardingService\StructType\GetDossier()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWebidServiceInfo operation/method
 */
if ($get->getWebidServiceInfo(new \InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDossierStatus operation/method
 */
if ($get->getDossierStatus(new \InfoCert\Top\OnboardingService\StructType\GetDossierStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSignerStatus operation/method
 */
if ($get->getSignerStatus(new \InfoCert\Top\OnboardingService\StructType\GetSignerStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDossiersByBusinessId operation/method
 */
if ($get->getDossiersByBusinessId(new \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessId()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \InfoCert\Top\OnboardingService\ServiceType\Send($options);
/**
 * Sample call for sendEventToSigner operation/method
 */
if ($send->sendEventToSigner(new \InfoCert\Top\OnboardingService\StructType\SendEventToSigner()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendEventToDocument operation/method
 */
if ($send->sendEventToDocument(new \InfoCert\Top\OnboardingService\StructType\SendEventToDocument()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendEventToDossier operation/method
 */
if ($send->sendEventToDossier(new \InfoCert\Top\OnboardingService\StructType\SendEventToDossier()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Cades ServiceType
 */
$cades = new \InfoCert\Top\OnboardingService\ServiceType\Cades($options);
/**
 * Sample call for cadesSign operation/method
 */
if ($cades->cadesSign(new \InfoCert\Top\OnboardingService\StructType\CadesSign()) !== false) {
    print_r($cades->getResult());
} else {
    print_r($cades->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \InfoCert\Top\OnboardingService\ServiceType\Create($options);
/**
 * Sample call for createDossier operation/method
 */
if ($create->createDossier(new \InfoCert\Top\OnboardingService\StructType\CreateDossier()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Assert ServiceType
 */
$assert = new \InfoCert\Top\OnboardingService\ServiceType\Assert($options);
/**
 * Sample call for assertIdentity operation/method
 */
if ($assert->assertIdentity(new \InfoCert\Top\OnboardingService\StructType\AssertIdentity()) !== false) {
    print_r($assert->getResult());
} else {
    print_r($assert->getLastError());
}
/**
 * Sample call for assertAuthorization operation/method
 */
if ($assert->assertAuthorization(new \InfoCert\Top\OnboardingService\StructType\AssertAuthorization()) !== false) {
    print_r($assert->getResult());
} else {
    print_r($assert->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \InfoCert\Top\OnboardingService\ServiceType\Update($options);
/**
 * Sample call for updateSigner operation/method
 */
if ($update->updateSigner(new \InfoCert\Top\OnboardingService\StructType\UpdateSigner()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
