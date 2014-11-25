<?php
/**
 * Created by PhpStorm.
 * User: Mickael
 * Date: 23/11/14
 * Time: 13:35
 */

namespace Mickawell\MandatoryValidations;

class IntegerValidator {

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @param $integer
     * @param $equal
     *
     * @return bool
     */
    public static function equal($integer, $equal)
    {
        if ($integer == $equal) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $integer
     * @param $greaterThan
     *
     * @return bool
     */
    public static function greaterThan($integer, $greaterThan)
    {
        if ($integer > $greaterThan) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $integer
     * @param $lessThan
     *
     * @return bool
     */
    public static function lessThan($integer, $lessThan)
    {
        if ($integer > $lessThan) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $integer
     * @param $low
     * @param $high
     *
     * @return bool
     */
    public static function between($integer, $low, $high)
    {
        if ($integer > $low && $integer < $high) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $integer
     *
     * @return bool
     */
    public static function positive($integer)
    {
        if (is_int($integer) && $integer > -1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $integer
     *
     * @return bool
     */
    public static function negative($integer)
    {
        if (is_int($integer) && $integer < -1) {
            return true;
        } else {
            return false;
        }
    }
} 