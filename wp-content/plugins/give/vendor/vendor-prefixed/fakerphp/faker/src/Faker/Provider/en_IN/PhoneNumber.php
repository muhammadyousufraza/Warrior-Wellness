<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 28-August-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\en_IN;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+91 ## ########',
        '+91 ### #######',
        '0## ########',
        '0### #######',
    ];

    /**
     * An array of en_IN mobile (cell) phone number formats
     *
     * @var array
     */
    protected static $mobileFormats = [
        '+91 9#########',
        '+91 8#########',
        '+91 7#########',
        '09#########',
        '08#########',
        '07#########',
    ];

    /**
     * Return a en_IN mobile phone number
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
