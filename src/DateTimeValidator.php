<?php
/**
 * Created by PhpStorm.
 * User: Mickael
 * Date: 25/11/14
 * Time: 13:11
 */

namespace Mickawell\MandatoryValidations;


class DateTimeValidator {

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    public static function isYear($date, $year)
    {
        $arrayDate = date_parse($date);
        var_dump($arrayDate);
    }

} 