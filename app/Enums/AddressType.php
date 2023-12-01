<?php

namespace App\Enums;


/**
 * Class AddressType
 *
 * @author 
 * @package App\Enums
 */
enum AddressType: string
{
    case Shipping = 'shipping';
    case Billing = 'billing';
}
