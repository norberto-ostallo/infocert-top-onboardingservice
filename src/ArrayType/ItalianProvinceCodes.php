<?php

namespace InfoCert\Top\OnboardingService\ArrayType;

/**
 * This class stands for ItalianProvinceCodes ArrayType
 */
class ItalianProvinceCodes
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
        'AG' => 'Agrigento',
        'AL' => 'Alessandria',
        'AN' => 'Ancona',
        'AO' => 'Aosta',
        'AR' => 'Arezzo',
        'AP' => 'Ascoli Piceno',
        'AT' => 'Asti',
        'AV' => 'Avellino',
        'BA' => 'Bari',
        'BT' => 'Barletta-Andria-Trani',
        'BL' => 'Belluno',
        'BN' => 'Benevento',
        'BG' => 'Bergamo',
        'BI' => 'Biella',
        'BO' => 'Bologna',
        'BZ' => 'Bolzano',
        'BS' => 'Brescia',
        'BR' => 'Brindisi',
        'CA' => 'Cagliari',
        'CL' => 'Caltanissetta',
        'CB' => 'Campobasso',
        'CI' => 'Carbonia-Iglesias',
        'CE' => 'Caserta',
        'CT' => 'Catania',
        'CZ' => 'Catanzaro',
        'CH' => 'Chieti',
        'CO' => 'Como',
        'CS' => 'Cosenza',
        'CR' => 'Cremona',
        'KR' => 'Crotone',
        'CN' => 'Cuneo',
        'EN' => 'Enna',
        'FM' => 'Fermo',
        'FE' => 'Ferrara',
        'FI' => 'Firenze',
        'FG' => 'Foggia',
        'FC' => 'Forlì-Cesena',
        'FR' => 'Frosinone',
        'GE' => 'Genova',
        'GO' => 'Gorizia',
        'GR' => 'Grosseto',
        'IM' => 'Imperia',
        'IS' => 'Isernia',
        'SP' => 'La Spezia',
        'AQ' => 'L\'Aquila',
        'LT' => 'Latina',
        'LE' => 'Lecce',
        'LC' => 'Lecco',
        'LI' => 'Livorno',
        'LO' => 'Lodi',
        'LU' => 'Lucca',
        'MC' => 'Macerata',
        'MN' => 'Mantova',
        'MS' => 'Massa-Carrara',
        'MT' => 'Matera',
        'ME' => 'Messina',
        'MI' => 'Milano',
        'MO' => 'Modena',
        'MB' => 'Monza e della Brianza',
        'NA' => 'Napoli',
        'NO' => 'Novara',
        'NU' => 'Nuoro',
        'OT' => 'Olbia-Tempio',
        'OR' => 'Oristano',
        'PD' => 'Padova',
        'PA' => 'Palermo',
        'PR' => 'Parma',
        'PV' => 'Pavia',
        'PG' => 'Perugia',
        'PU' => 'Pesaro e Urbino',
        'PE' => 'Pescara',
        'PC' => 'Piacenza',
        'PI' => 'Pisa',
        'PT' => 'Pistoia',
        'PN' => 'Pordenone',
        'PZ' => 'Potenza',
        'PO' => 'Prato',
        'RG' => 'Ragusa',
        'RA' => 'Ravenna',
        'RC' => 'Reggio Calabria',
        'RE' => 'Reggio Emilia',
        'RI' => 'Rieti',
        'RN' => 'Rimini',
        'RM' => 'Roma',
        'RO' => 'Rovigo',
        'SA' => 'Salerno',
        'VS' => 'Medio Campidano',
        'SS' => 'Sassari',
        'SV' => 'Savona',
        'SI' => 'Siena',
        'SR' => 'Siracusa',
        'SO' => 'Sondrio',
        'TA' => 'Taranto',
        'TE' => 'Teramo',
        'TR' => 'Terni',
        'TO' => 'Torino',
        'OG' => 'Ogliastra',
        'TP' => 'Trapani',
        'TN' => 'Trento',
        'TV' => 'Treviso',
        'TS' => 'Trieste',
        'UD' => 'Udine',
        'VA' => 'Varese',
        'VE' => 'Venezia',
        'VB' => 'Verbano-Cusio-Ossola',
        'VC' => 'Vercelli',
        'VR' => 'Verona',
        'VV' => 'Vibo Valentia',
        'VI' => 'Vicenza',
        'VT' => 'Viterbo',
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