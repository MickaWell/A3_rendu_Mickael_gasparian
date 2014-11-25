<?php
/**
 * Created by PhpStorm.
 * User: Mickael
 * Date: 24/11/14
 * Time: 12:30
 */

namespace Mickawell\MandatoryValidations;

class StringValidator {

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @param $string
     * @param $length
     *
     * @return string
     */
    public static function stringLength($string, $length)
    {
        $stringLength = mb_strlen($string);

        if ($stringLength == $length)
        {
            return 'Equal';
        } else {
            return 'Not equal';
        }
    }

    /**
     * @param $string
     * @param $length
     *
     * @return string
     */
    public static function greaterThan($string, $length)
    {
        $stringLength = mb_strlen($string);

        if ($stringLength > $length) {
            return 'oui';
        } else {
            return 'non';
        }
    }

    /**
     * @param $string
     * @param $length
     *
     * @return string
     */
    public static function lessThan($string, $length)
    {
        $stringLength = mb_strlen($string);

        if ($stringLength < $length) {
            return 'oui';
        } else {
            return 'non';
        }
    }

    /**
     * @param $string
     * @param $low
     * @param $high
     *
     * @return string
     */
    public static function betweenThan($string, $low, $high)
    {
        if ($string > $low && $string < $high) {
            return 'Yes it is between '.$low.' and '.$high;
        } else {
            return 'No it is not between '.$low.' and '.$high;
        }
    }
}