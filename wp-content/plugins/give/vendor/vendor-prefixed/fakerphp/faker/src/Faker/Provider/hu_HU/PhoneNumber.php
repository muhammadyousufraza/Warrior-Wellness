<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 28-August-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\hu_HU;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+36-##-###-####',
        '+36#########',
        '+36(##)###-###',
        '06-##-###-####',
        '06(##)###-###',
    ];
}
