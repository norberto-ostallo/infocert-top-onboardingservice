<?php

namespace InfoCert\Top\OnboardingService;

/**
 * This class defines onboarding service constants.
 */
class Constants {
  // Shared
  const INFOCERT_COUNTRY_CODE_MAXLENGTH = 3;
  const ISO_COUNTRY_CODE_MAXLENGTH = 3;
  const ITALIAN_PROVINCE_CODE_MAXLENGTH = 2;
  // Address
  const PROVINCE_MAXLENGTH = 2;
  const HAMLET_MAXLENGTH = 30;
  const POSTAL_CODE_MAXLENGTH = 5;
  const CITY_MAXLENGTH = 30;
  const STREET_MAXLENGTH = 30;
  const STREET_NUMBER_MAXLENGTH = 8;
  // Archiving policy
  const DOCUMENT_CLASS_MAXLENGTH = 32;
  const ATTRIBUTES_MAXLENGTH = 32;
  // Certificate
  const CERTIFICATE_DOMAIN_MAXLENGTH = 32;
  const CERTIFICATE_ALIAS_MAXLENGTH = 32;
  // Composition policy
  const TEMPLATE_NAME_MAXLENGTH = 32;
  // Contact details
  const EMAIL_MAXLENGTH = 80;
  const MOBILE_NUMBER_MAXLENGTH = 11;
  // Document info
  const DOCUMENT_ID_MAXLENGTH = 32;
  const DOCUMENT_TYPE_MAXLENGTH = 32;
  const DOCUMENT_STATUS_MAXLENGTH = 32;
  // Dossier
  const COMPANY_ID_MAXLENGTH = 32;
  const DOSSIER_ID_MAXLENGTH = 32;
  const DOSSIER_TYPE_MAXLENGTH = 32;
  const BUSINESS_ID_MAXLENGTH = 32;
  // Dossier info
  const DOSSIER_STATUS_MAXLENGTH = 32;
  // Identity Document Data
  const IDENTITY_DOCUMENT_TYPE_MAXLENGTH = 2;
  const IDENTITY_DOCUMENT_NUMBER_MAXLENGTH = 40;
  const IDENTITY_DOCUMENT_ISSUER_MAXLENGTH = 2;
  const IDENTITY_DOCUMENT_ISSUE_PLACE_MAXLENGTH = 2;
  // Legal ID
  const LEGAL_ID_SERIAL_NUMBER_MAXLENGTH = 64;
  // Personal data
  const FISCAL_CODE_MAXLENGTH = 16;
  const FULL_FIRST_NAME_MAXLENGTH = 42;
  const FULL_LAST_NAME_MAXLENGTH = 42;
  const FIRST_NAME_MAXLENGTH = 25;
  const LAST_NAME_MAXLENGTH = 25;
  const SEX_MAXLENGTH = 1;
  const BIRTH_PLACE_MAXLENGTH = 50;
  // RAO
  const RAO_USERNAME_MAXLENGTH = 32;
  const RAO_PASSWORD_MAXLENGTH = 32;
  const RAO_OFFICE_MAXLENGTH = 32;
  const RAO_CERTIFICATE_DOMAIN_MAXLENGTH = 32;
  const RAO_CERTIFICATE_ALIAS_MAXLENGTH = 32;
  const RAO_CERTIFICATE_PIN_MAXLENGTH = 32;
  // Signature field
  const SIGNATURE_FIELD_REASON_MAXLENGTH = 64;
  const SIGNATURE_FIELD_LOCATION_MAXLENGTH = 32;
  
}