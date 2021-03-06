<?php

namespace InfoCert\Top\OnboardingService\ArrayType;

/**
 * This class stands for InfoCertCountryCodes ArrayType
 */
class InfoCertCountryCodes
{
  
    /**
     * Return true if value is allowed
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    
    /**
     * Return allowed values
     * @return string[]
     */
    public static function getValidValues()
    {
      return array(
        '0' => 'Undefined',
        'A' => 'Austria',
        'ABU' => 'Abu-Dhabi',
        'ADN' => 'Yemen',
        'AFG' => 'Afghanistan',
        'AG' => 'Antigua and Barbuda',
        'AI' => 'Anguilla',
        'AJ' => 'Azerbaijan',
        'AL' => 'Albania',
        'AND' => 'Andorra',
        'AQ' => 'Antarctica',
        'ARM' => 'Armenia',
        'AS' => 'American Samoa',
        'AUS' => 'Australia',
        'AW' => 'Aruba',
        'AX' => 'Aland Islands',
        'B' => 'Belgium',
        'BD' => 'Bangladesh',
        'BDS' => 'Barbados',
        'BEL' => 'Belarus',
        'BG' => 'Bulgaria',
        'BH' => 'British Honduras',
        'BIH' => 'Bosnia Herzegovina',
        'BL' => 'Basutoland',
        'BO' => 'Belarus',
        'BOS' => 'Bosnia Herzegovina',
        'BP' => 'Botswana',
        'BR' => 'Brazil',
        'BRG' => 'British Guiana',
        'BRM' => 'Bermuda Islands',
        'BRN' => 'Bahrain',
        'BRU' => 'Brunei',
        'BS' => 'Bahama',
        'BTN' => 'Bhutan',
        'BUR' => 'Burma',
        'BV' => 'Bouvet Island',
        'BZ' => 'Belize',
        'C' => 'Cuba',
        'CC' => 'Islands Of Cocos (Keeling)',
        'CDN' => 'Canada',
        'CH' => 'Switzerland',
        'CI' => 'Ivory Coast',
        'CK' => 'Czech Republic',
        'CL' => 'Ceylon',
        'CNB' => 'The North Borneo',
        'CO' => 'Colombia',
        'COD' => 'Democratic Republic of Congo',
        'COK' => 'Cook Islands',
        'CR' => 'Costa Rica',
        'CRO' => 'Croatia',
        'CS' => 'Czechoslovakia',
        'CSI' => 'Russia',
        'CV' => 'Cape Verde',
        'CX' => 'Christmas Island',
        'D' => 'Germany',
        'DDR' => 'Democratic Republic Of Germany',
        'DJ' => 'Djibouti',
        'DK' => 'Denmark',
        'DM' => 'Dominica',
        'DY' => 'Dahomey',
        'DZ' => 'Algeria',
        'E' => 'Spain',
        'EAK' => 'Kenya',
        'EAT' => 'Tanzania',
        'EAU' => 'Uganda',
        'EC' => 'Ecuador',
        'EE' => 'Common Transferred Land',
        'EH' => 'Western Sahara',
        'EIR' => 'Ireland',
        'ER' => 'Eritrea',
        'EST' => 'Estonia',
        'ET' => 'Egypt',
        'ETH' => 'Ethiopia',
        'F' => 'France',
        'FI' => 'Philippines',
        'FK' => 'Falkland Islands (Malvinas)',
        'FL' => 'Liechtenstein',
        'FM' => 'Micronesia, Federated States',
        'FO' => 'Faroe Islands',
        'G' => 'Guatemala',
        'GAB' => 'Republic Of Gabon',
        'GB' => 'Great Britain',
        'GBG' => 'Guernsey Island',
        'GBJ' => 'Jersey Island',
        'GBM' => 'Isle of Man',
        'GBY' => 'Malta Island',
        'GBZ' => 'Gibraltar',
        'GD' => 'Grenada',
        'GEO' => 'Georgia',
        'GF' => 'Guayana',
        'GH' => 'Ghana',
        'GL' => 'Greenland',
        'GP' => 'Guadeloupe',
        'GQ' => 'Equatorial Guinea',
        'GR' => 'Greece',
        'GS' => 'South Georgia and Sandwich Islands',
        'GU' => 'Guam',
        'GUB' => 'Guinea Bissau',
        'GV' => 'Guinea',
        'GY' => 'Guyana',
        'H' => 'Hungary',
        'HK' => 'Hong-Kong',
        'HN' => 'Honduras',
        'HV' => 'Upper Volta',
        'I' => 'Italy',
        'IL' => 'Israel',
        'IND' => 'India',
        'IO' => 'British Indian Ocean Territory',
        'IR' => 'Iran',
        'IRQ' => 'Iraq',
        'IS' => 'Iceland',
        'J' => 'Japan',
        'JA' => 'Jamaica',
        'JOR' => 'Jordan',
        'K' => 'Cambodia',
        'KG' => 'Kyrgyzstan',
        'KI' => 'Kiribati',
        'KL' => 'Libya',
        'KM' => 'Comoros',
        'KN' => 'Saint Kitts and Nevis',
        'KP' => 'North Korea',
        'KS' => 'Kosovo',
        'KWT' => 'Kuwait',
        'KY' => 'Cayman Islands',
        'KZ' => 'Kazakhstan',
        'L' => 'Luxembourg',
        'LAO' => 'Laos',
        'LC' => 'Saint Lucia',
        'LET' => 'Latvia',
        'LIB' => 'Liberia',
        'LIT' => 'Lithuania',
        'LS' => 'Lesotho',
        'M' => 'Malta',
        'MA' => 'Morocco',
        'MAC' => 'Macedonia',
        'MAU' => 'Mauritania',
        'MC' => 'Monaco',
        'MD' => 'Moldova',
        'MDG' => 'Madagascar',
        'MEX' => 'Mexico',
        'MH' => 'Marshall Islands',
        'MNE' => 'Montenegro',
        'MNG' => 'Mongolia',
        'MO' => 'Macau',
        'MOC' => 'Mozambique',
        'MOL' => 'Moldova',
        'MP' => 'Northern Mariana Islands',
        'MQ' => 'Martinique',
        'MS' => 'Maurizio',
        'MST' => 'Montserrat',
        'N' => 'Norway',
        'NA' => 'Netherlands Antilles',
        'NAM' => 'Namibia',
        'NC' => 'New Caledonia',
        'NEP' => 'Nepal',
        'NF' => 'Norfolk Island',
        'NIC' => 'Nicaragua',
        'NIG' => 'Niger',
        'NL' => 'Holland',
        'NR' => 'Nauru',
        'NU' => 'Niue',
        'NZ' => 'New Zeland',
        'P' => 'Portugal',
        'PA' => 'Panama',
        'PAK' => 'Pakistan',
        'PAN' => 'Angola',
        'PE' => 'Peru',
        'PF' => 'French Polynesia',
        'PG' => 'Papua New Guinea',
        'PL' => 'Poland',
        'PM' => 'Saint Pierre and Michelon',
        'PN' => 'Islands of Pitcairn',
        'PR' => 'Puerto Rico',
        'PS' => 'Palestine',
        'PTM' => 'Malaysia',
        'PW' => 'Palau',
        'PY' => 'Paraguay',
        'QAT' => 'Qatar',
        'R' => 'Romania',
        'RA' => 'Argentine',
        'RB' => 'Bolivia',
        'RBE' => 'Republic of Benin',
        'RC' => 'China',
        'RCA' => 'Central African Republic',
        'RCB' => 'Congo West',
        'RCF' => 'Formosa',
        'RCH' => 'Chile',
        'RCL' => 'East Congo',
        'RD' => 'Dominican Republic',
        'RE' => 'Reunion Island',
        'RFR' => 'Russian Federative Republic',
        'RH' => 'Haiti',
        'RI' => 'Indonesia',
        'RL' => 'Lebanon',
        'RM' => 'Malagasy Republic',
        'RMA' => 'Republic of Maldives',
        'RMM' => 'Mali',
        'RNR' => 'Zambia',
        'RNY' => 'Malawi',
        'ROK' => 'Korea South',
        'RSA' => 'Republic of South Africa',
        'RSM' => 'San Marino',
        'RSR' => 'Southern Rhodesia',
        'RU' => 'Burundi',
        'RWA' => 'Rwanda',
        'RY' => 'Cyprus',
        'S' => 'Sweden',
        'SA' => 'Saudi Arabia',
        'SAL' => 'El Salvador',
        'SB' => 'Solomon',
        'SCV' => 'Vatican',
        'SD' => 'Swaziland',
        'SER' => 'Serbia and Montenegro',
        'SF' => 'Finland',
        'SGP' => 'Singapore',
        'SH' => 'Saint Helena',
        'SJ' => 'Svalbard and Jan Mayen',
        'SLK' => 'Sri Lanka',
        'SLO' => 'Slovenia',
        'SLV' => 'Slovakia',
        'SME' => 'Suriname',
        'SN' => 'Senegal',
        'SOM' => 'Somalia',
        'SRB' => 'Serbia',
        'ST' => 'Sao Tome and Principe',
        'SU' => 'USSR',
        'SUD' => 'Sudan',
        'SWA' => 'South-West Africa',
        'SY' => 'Seychelles',
        'SYR' => 'Syria',
        'T' => 'Thailand',
        'TC' => 'Cameroon',
        'TCH' => 'Chad',
        'TCI' => 'Turkey and Caicos Islands',
        'TF' => 'French Southern Territories',
        'TG' => 'Togo',
        'TJ' => 'Tajikistan',
        'TK' => 'Tokelau',
        'TL' => 'Timor-Leste',
        'TM' => 'Turkmenistan',
        'TN' => 'Tunisia',
        'TO' => 'Tonga',
        'TR' => 'Turkey',
        'TT' => 'Trinidad and Tobago',
        'TV' => 'Tuvalu',
        'TWA' => 'Taiwan',
        'U' => 'Uruguay',
        'UAE' => 'United Arab Emirates',
        'UCR' => 'Ukraine',
        'UK' => 'United Kingdom',
        'UM' => 'Islands of the Pacific',
        'USA' => 'United States of America',
        'UV' => 'Burkina Faso',
        'UZ' => 'Uzbekistan',
        'VC' => 'Saint Vincent and the Grenadines',
        'VG' => 'British Virgin Islands',
        'VI' => 'Virgin Islands',
        'VN' => 'Vietnam',
        'VU' => 'Vanuatu',
        'WAG' => 'Gambia',
        'WAL' => 'Sierra Leone',
        'WAN' => 'Nigeria',
        'WF' => 'Wallis and Futuna',
        'WS' => 'Samoa',
        'YT' => 'Mayotte',
        'YU' => 'Yugoslavia',
        'YV' => 'Venezuela',
        'ZA' => 'South Africa',
        'ZI' => 'Zimbabwe',
        'ZRE' => 'Zaire',
      );
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