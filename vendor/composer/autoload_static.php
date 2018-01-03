<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit814ba261350de8c007919718e2c5291b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\Tests\\' => 28,
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
        'I' => 
        array (
            'InfoCert\\Top\\OnboardingService\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PackageBase\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/tests',
        ),
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
        'InfoCert\\Top\\OnboardingService\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'InfoCert\\Top\\OnboardingService\\ClassMap' => __DIR__ . '/../..' . '/src/ClassMap.php',
        'InfoCert\\Top\\OnboardingService\\EnumType\\Identity_assertion_policy' => __DIR__ . '/../..' . '/src/EnumType/Identity_assertion_policy.php',
        'InfoCert\\Top\\OnboardingService\\EnumType\\Modalita_riconoscimento' => __DIR__ . '/../..' . '/src/EnumType/Modalita_riconoscimento.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Abort' => __DIR__ . '/../..' . '/src/ServiceType/Abort.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Add' => __DIR__ . '/../..' . '/src/ServiceType/Add.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Assert' => __DIR__ . '/../..' . '/src/ServiceType/Assert.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Cades' => __DIR__ . '/../..' . '/src/ServiceType/Cades.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Create' => __DIR__ . '/../..' . '/src/ServiceType/Create.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Get' => __DIR__ . '/../..' . '/src/ServiceType/Get.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Send' => __DIR__ . '/../..' . '/src/ServiceType/Send.php',
        'InfoCert\\Top\\OnboardingService\\ServiceType\\Update' => __DIR__ . '/../..' . '/src/ServiceType/Update.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AbortDossier' => __DIR__ . '/../..' . '/src/StructType/AbortDossier.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AbortDossierResponse' => __DIR__ . '/../..' . '/src/StructType/AbortDossierResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AddDocuments' => __DIR__ . '/../..' . '/src/StructType/AddDocuments.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AddDocumentsEx' => __DIR__ . '/../..' . '/src/StructType/AddDocumentsEx.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AddDocumentsExResponse' => __DIR__ . '/../..' . '/src/StructType/AddDocumentsExResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AddDocumentsResponse' => __DIR__ . '/../..' . '/src/StructType/AddDocumentsResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Address' => __DIR__ . '/../..' . '/src/StructType/Address.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Archiving_policy' => __DIR__ . '/../..' . '/src/StructType/Archiving_policy.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AssertAuthorization' => __DIR__ . '/../..' . '/src/StructType/AssertAuthorization.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AssertAuthorizationResponse' => __DIR__ . '/../..' . '/src/StructType/AssertAuthorizationResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AssertIdentity' => __DIR__ . '/../..' . '/src/StructType/AssertIdentity.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\AssertIdentityResponse' => __DIR__ . '/../..' . '/src/StructType/AssertIdentityResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Attribute' => __DIR__ . '/../..' . '/src/StructType/Attribute.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Attributes' => __DIR__ . '/../..' . '/src/StructType/Attributes.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Boolean_list_property' => __DIR__ . '/../..' . '/src/StructType/Boolean_list_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Boolean_property' => __DIR__ . '/../..' . '/src/StructType/Boolean_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\CadesSign' => __DIR__ . '/../..' . '/src/StructType/CadesSign.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\CadesSignResponse' => __DIR__ . '/../..' . '/src/StructType/CadesSignResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Certificate' => __DIR__ . '/../..' . '/src/StructType/Certificate.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Certificate_info' => __DIR__ . '/../..' . '/src/StructType/Certificate_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Claimer' => __DIR__ . '/../..' . '/src/StructType/Claimer.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Clause_result' => __DIR__ . '/../..' . '/src/StructType/Clause_result.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Clauses' => __DIR__ . '/../..' . '/src/StructType/Clauses.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Composition_policy' => __DIR__ . '/../..' . '/src/StructType/Composition_policy.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Contact_details' => __DIR__ . '/../..' . '/src/StructType/Contact_details.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Content' => __DIR__ . '/../..' . '/src/StructType/Content.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\CreateDossier' => __DIR__ . '/../..' . '/src/StructType/CreateDossier.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\CreateDossierResponse' => __DIR__ . '/../..' . '/src/StructType/CreateDossierResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Date_list_property' => __DIR__ . '/../..' . '/src/StructType/Date_list_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Date_property' => __DIR__ . '/../..' . '/src/StructType/Date_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Document' => __DIR__ . '/../..' . '/src/StructType/Document.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Document_info' => __DIR__ . '/../..' . '/src/StructType/Document_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Document_policy' => __DIR__ . '/../..' . '/src/StructType/Document_policy.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Documents' => __DIR__ . '/../..' . '/src/StructType/Documents.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Documents_info' => __DIR__ . '/../..' . '/src/StructType/Documents_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier' => __DIR__ . '/../..' . '/src/StructType/Dossier.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier_action_result' => __DIR__ . '/../..' . '/src/StructType/Dossier_action_result.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier_creation_info' => __DIR__ . '/../..' . '/src/StructType/Dossier_creation_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier_info' => __DIR__ . '/../..' . '/src/StructType/Dossier_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier_process_info' => __DIR__ . '/../..' . '/src/StructType/Dossier_process_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier_record' => __DIR__ . '/../..' . '/src/StructType/Dossier_record.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier_result_set' => __DIR__ . '/../..' . '/src/StructType/Dossier_result_set.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossier_status' => __DIR__ . '/../..' . '/src/StructType/Dossier_status.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Dossiers' => __DIR__ . '/../..' . '/src/StructType/Dossiers.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Error' => __DIR__ . '/../..' . '/src/StructType/Error.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossier' => __DIR__ . '/../..' . '/src/StructType/GetDossier.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossierByReservationCode' => __DIR__ . '/../..' . '/src/StructType/GetDossierByReservationCode.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossierByReservationCodeResponse' => __DIR__ . '/../..' . '/src/StructType/GetDossierByReservationCodeResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossierResponse' => __DIR__ . '/../..' . '/src/StructType/GetDossierResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossierStatus' => __DIR__ . '/../..' . '/src/StructType/GetDossierStatus.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossierStatusResponse' => __DIR__ . '/../..' . '/src/StructType/GetDossierStatusResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossiersByBusinessId' => __DIR__ . '/../..' . '/src/StructType/GetDossiersByBusinessId.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetDossiersByBusinessIdResponse' => __DIR__ . '/../..' . '/src/StructType/GetDossiersByBusinessIdResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetNewToken' => __DIR__ . '/../..' . '/src/StructType/GetNewToken.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetNewTokenResponse' => __DIR__ . '/../..' . '/src/StructType/GetNewTokenResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetSignerStatus' => __DIR__ . '/../..' . '/src/StructType/GetSignerStatus.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetSignerStatusResponse' => __DIR__ . '/../..' . '/src/StructType/GetSignerStatusResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetWebidServiceInfo' => __DIR__ . '/../..' . '/src/StructType/GetWebidServiceInfo.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\GetWebidServiceInfoResponse' => __DIR__ . '/../..' . '/src/StructType/GetWebidServiceInfoResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Graph_signature_document_info' => __DIR__ . '/../..' . '/src/StructType/Graph_signature_document_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Graph_signature_field_info' => __DIR__ . '/../..' . '/src/StructType/Graph_signature_field_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Graph_signature_fields' => __DIR__ . '/../..' . '/src/StructType/Graph_signature_fields.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Identifications_status' => __DIR__ . '/../..' . '/src/StructType/Identifications_status.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Identity_assertion' => __DIR__ . '/../..' . '/src/StructType/Identity_assertion.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Identity_document_data' => __DIR__ . '/../..' . '/src/StructType/Identity_document_data.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Keyword_signature_field' => __DIR__ . '/../..' . '/src/StructType/Keyword_signature_field.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Keyword_signature_fields' => __DIR__ . '/../..' . '/src/StructType/Keyword_signature_fields.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Legal_id' => __DIR__ . '/../..' . '/src/StructType/Legal_id.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Number' => __DIR__ . '/../..' . '/src/StructType/Number.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Number_list_property' => __DIR__ . '/../..' . '/src/StructType/Number_list_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Number_property' => __DIR__ . '/../..' . '/src/StructType/Number_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Person' => __DIR__ . '/../..' . '/src/StructType/Person.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Personal_data' => __DIR__ . '/../..' . '/src/StructType/Personal_data.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Position_signature_field' => __DIR__ . '/../..' . '/src/StructType/Position_signature_field.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Position_signature_fields' => __DIR__ . '/../..' . '/src/StructType/Position_signature_fields.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Properties' => __DIR__ . '/../..' . '/src/StructType/Properties.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Properties_list_property' => __DIR__ . '/../..' . '/src/StructType/Properties_list_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Properties_property' => __DIR__ . '/../..' . '/src/StructType/Properties_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Property' => __DIR__ . '/../..' . '/src/StructType/Property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Rao' => __DIR__ . '/../..' . '/src/StructType/Rao.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\SendEventToDocument' => __DIR__ . '/../..' . '/src/StructType/SendEventToDocument.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\SendEventToDocumentResponse' => __DIR__ . '/../..' . '/src/StructType/SendEventToDocumentResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\SendEventToDossier' => __DIR__ . '/../..' . '/src/StructType/SendEventToDossier.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\SendEventToDossierResponse' => __DIR__ . '/../..' . '/src/StructType/SendEventToDossierResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\SendEventToSigner' => __DIR__ . '/../..' . '/src/StructType/SendEventToSigner.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\SendEventToSignerResponse' => __DIR__ . '/../..' . '/src/StructType/SendEventToSignerResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signature_field' => __DIR__ . '/../..' . '/src/StructType/Signature_field.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signature_field_info' => __DIR__ . '/../..' . '/src/StructType/Signature_field_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signature_fields' => __DIR__ . '/../..' . '/src/StructType/Signature_fields.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signature_policy' => __DIR__ . '/../..' . '/src/StructType/Signature_policy.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signer' => __DIR__ . '/../..' . '/src/StructType/Signer.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signer_info' => __DIR__ . '/../..' . '/src/StructType/Signer_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signer_process_info' => __DIR__ . '/../..' . '/src/StructType/Signer_process_info.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signer_status' => __DIR__ . '/../..' . '/src/StructType/Signer_status.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Signers' => __DIR__ . '/../..' . '/src/StructType/Signers.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Statement' => __DIR__ . '/../..' . '/src/StructType/Statement.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Statements' => __DIR__ . '/../..' . '/src/StructType/Statements.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\String_list_property' => __DIR__ . '/../..' . '/src/StructType/String_list_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\String_property' => __DIR__ . '/../..' . '/src/StructType/String_property.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Subject' => __DIR__ . '/../..' . '/src/StructType/Subject.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Task_status' => __DIR__ . '/../..' . '/src/StructType/Task_status.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Token' => __DIR__ . '/../..' . '/src/StructType/Token.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Tokens' => __DIR__ . '/../..' . '/src/StructType/Tokens.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\UpdateSigner' => __DIR__ . '/../..' . '/src/StructType/UpdateSigner.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\UpdateSignerResponse' => __DIR__ . '/../..' . '/src/StructType/UpdateSignerResponse.php',
        'InfoCert\\Top\\OnboardingService\\StructType\\Webid_service_info' => __DIR__ . '/../..' . '/src/StructType/Webid_service_info.php',
        'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructBase.php',
        'WsdlToPhp\\PackageBase\\SoapClientInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/SoapClientInterface.php',
        'WsdlToPhp\\PackageBase\\StructArrayInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructArrayInterface.php',
        'WsdlToPhp\\PackageBase\\StructInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructInterface.php',
        'WsdlToPhp\\PackageBase\\Tests\\Client' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/Client.php',
        'WsdlToPhp\\PackageBase\\Tests\\SoapClient' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/SoapClient.php',
        'WsdlToPhp\\PackageBase\\Tests\\SoapClientTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/SoapClientTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructArrayObject' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructArrayObject.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructArrayTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructArrayTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructBaseTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructObject' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructObject.php',
        'WsdlToPhp\\PackageBase\\Tests\\TestCase' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/TestCase.php',
        'WsdlToPhp\\PackageBase\\Tests\\UtilsTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/UtilsTest.php',
        'WsdlToPhp\\PackageBase\\Utils' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit814ba261350de8c007919718e2c5291b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit814ba261350de8c007919718e2c5291b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit814ba261350de8c007919718e2c5291b::$classMap;

        }, null, ClassLoader::class);
    }
}
