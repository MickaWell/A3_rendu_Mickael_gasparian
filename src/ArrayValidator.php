<?php
/**
 * Created by PhpStorm.
 * User: Mickael
 * Date: 25/11/14
 * Time: 11:26
 */

namespace Mickawell\MandatoryValidations;


class ArrayValidator {

    const ARRAY_EQUAL                       = 1;
    const ARRAY_GREATER_THAN                = 2;
    const ARRAY_GREATER_THAN_OR_EQUAL_TO    = 3;
    const ARRAY_LESS_THAN                   = 4;
    const ARRAY_LESS_THAN_OR_EQUAL_TO       = 5;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @param $array
     *
     * @return bool
     */
    public static function arrayIsEmpty($array)
    {
        if(empty($array)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $array
     * @param $operator
     * @param $number
     *
     * @return bool
     *
     * @throws Exception
     */
    public static function comparisonOperators($array, $operator, $number)
    {
        if (!in_array($operator, [
            self::ARRAY_EQUAL,
            self::ARRAY_GREATER_THAN,
            self::ARRAY_GREATER_THAN_OR_EQUAL_TO,
            self::ARRAY_LESS_THAN,
            self::ARRAY_LESS_THAN_OR_EQUAL_TO,
        ]))
            throw new Exception("Error");
            $countArray = count($array);
        switch($operator){
            case self::ARRAY_EQUAL:
                if ($countArray == $number) {
                    return true;
                } else {
                    return false;
                }
                break;
            case self::ARRAY_GREATER_THAN:
                if ($countArray > $number) {
                    return true;
                } else {
                    return false;
                }
                break;
            case self::ARRAY_GREATER_THAN_OR_EQUAL_TO:
                if ($countArray >= $number) {
                    return true;
                } else {
                    return false;
                }
                break;
            case self::ARRAY_LESS_THAN:
                if ($countArray < $number) {
                    return true;
                } else {
                    return false;
                }
                break;
            case self::ARRAY_LESS_THAN_OR_EQUAL_TO:
                if ($countArray <= $number) {
                    return true;
                } else {
                    return false;
                }
                break;
        }
    }

    /**
     * @param $array
     * @param $low
     * @param $high
     *
     * @return bool
     */
    public static function betweenThan($array, $low, $high)
    {
        $countArray = count($array);

        if ($countArray > $low && $countArray < $high) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $array
     * @param $key
     *
     * @return bool
     */
    public static function isKeyExist($array, $key)
    {
        if (array_key_exists($key, $array)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $array
     * @param $value
     *
     * @return bool
     */
    public static function isValueExist($array, $value)
    {
        if (in_array($value, $array)) {
            return true;
        } else {
            return false;
        }
    }
} 