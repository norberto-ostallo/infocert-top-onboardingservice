<?php

namespace InfoCert\Top\OnboardingService\EnumType;

/**
 * This class stands for modalita-riconoscimento EnumType
 * @subpackage Enumerations
 */
class Modalita_riconoscimento
{
    /**
     * Constant for value '1 - de visu'
     * @return string '1 - de visu'
     */
    const VALUE_1_DE_VISU = '1 - de visu';
    /**
     * Constant for value '2 - antiriciclaggio'
     * @return string '2 - antiriciclaggio'
     */
    const VALUE_2_ANTIRICICLAGGIO = '2 - antiriciclaggio';
    /**
     * Constant for value '3 - firma digitale'
     * @return string '3 - firma digitale'
     */
    const VALUE_3_FIRMA_DIGITALE = '3 - firma digitale';
    /**
     * Constant for value '4 - CIE/CNS'
     * @return string '4 - CIE/CNS'
     */
    const VALUE_4_CIE_CNS = '4 - CIE/CNS';
    /**
     * Constant for value '5 - webcam'
     * @return string '5 - webcam'
     */
    const VALUE_5_WEBCAM = '5 - webcam';
    /**
     * Constant for value '6 - riuso'
     * @return string '6 - riuso'
     */
    const VALUE_6_RIUSO = '6 - riuso';
    /**
     * Constant for value '7 - recupero id pregresse'
     * @return string '7 - recupero id pregresse'
     */
    const VALUE_7_RECUPERO_ID_PREGRESSE = '7 - recupero id pregresse';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_1_DE_VISU
     * @uses self::VALUE_2_ANTIRICICLAGGIO
     * @uses self::VALUE_3_FIRMA_DIGITALE
     * @uses self::VALUE_4_CIE_CNS
     * @uses self::VALUE_5_WEBCAM
     * @uses self::VALUE_6_RIUSO
     * @uses self::VALUE_7_RECUPERO_ID_PREGRESSE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_1_DE_VISU,
            self::VALUE_2_ANTIRICICLAGGIO,
            self::VALUE_3_FIRMA_DIGITALE,
            self::VALUE_4_CIE_CNS,
            self::VALUE_5_WEBCAM,
            self::VALUE_6_RIUSO,
            self::VALUE_7_RECUPERO_ID_PREGRESSE,
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
