<?php
/**
 * @author Nwhales Team
 *
 * @copyright Copyright (c) 2019 Nwhales (https://www.nwhales.com]
 */

namespace Nwhales\GoogleReviews\Model\Source;

use Magento\Framework\Option\ArrayInterface;

class BadgePosition implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            'BOTTOM_RIGHT' => __('Bottom Right'),
            'BOTTOM_LEFT' => __('Bottom Left'),
        ];
    }
}