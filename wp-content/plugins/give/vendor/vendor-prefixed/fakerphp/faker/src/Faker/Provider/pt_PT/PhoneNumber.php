<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 28-August-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\pt_PT;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    /**
     * @see http://en.wikipedia.org/wiki/Telephone_numbers_in_Portugal
     */
    protected static $formats = [
        '+351 91#######',
        '+351 92#######',
        '+351 93#######',
        '+351 96#######',
        '+351 21#######',
        '+351 22#######',
        '+351 23#######',
        '+351 24#######',
        '+351 25#######',
        '+351 26#######',
        '+351 27#######',
        '+351 28#######',
        '+351 29#######',
        '91#######',
        '92#######',
        '93#######',
        '96#######',
        '21#######',
        '22#######',
        '23#######',
        '24#######',
        '25#######',
        '26#######',
        '27#######',
        '28#######',
        '29#######',
    ];

    protected static $mobileNumberPrefixes = [
        '91#######',
        '92#######',
        '93#######',
        '96#######',
    ];

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileNumberPrefixes));
    }
}
