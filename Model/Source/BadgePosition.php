<?php
/**
 * @author nWhales Team
 *
 * @copyright Copyright (c) 2019 nWhales (https://www.nwhales.com]
 */

namespace Nwhale\GoogleReviews\Model\Source;

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