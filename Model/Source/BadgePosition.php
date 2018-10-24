<?php
/**
 * @author NWhale Team
 *
 * @copyright Copyright (c) 2017 NWhale (https://www.nwhaletech.com]
 */

namespace NWhale\GoogleReviews\Model\Source;

use Magento\Framework\Option\ArrayInterface;

class BadgePosition implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            'BOTTOM_RIGHT' => __('Bottom Right'),
            'BOTTOM_LEFT' => __('Bottom Left'),
//            'Custom' => 'CUSTOM'
        ];
    }
}