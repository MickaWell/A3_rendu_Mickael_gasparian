<?php
/**
 * Created by PhpStorm.
 * User: Mickael
 * Date: 24/11/14
 * Time: 16:49
 */

namespace Mickawell\MandatoryValidations;

class BooleanValidator {

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @param $boolean
     *
     * @return bool
     */
    public static function booleanIsTrue($boolean)
    {
        if(is_bool($boolean) && $boolean == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $boolean
     *
     * @return bool
     */
    public static function booleanIsFalse($boolean)
    {
        if(is_bool($boolean) && $boolean == false) {
            return 'This is a false';
        } else {
            return 'This is not false';
        }
    }
} 