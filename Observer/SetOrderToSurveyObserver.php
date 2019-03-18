<?php
/**
 * @author nWhales Team
 *
 * @copyright Copyright (c) 2019 nWhales (https://www.nwhales.com)
 */

namespace Nwhale\GoogleReviews\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\LayoutInterface;

class SetOrderToSurveyObserver implements ObserverInterface
{
    /** @var LayoutInterface  */
    private $layout;

    public function __construct(LayoutInterface $layout)
    {
        $this->layout = $layout;
    }

    /**
     * @param EventObserver $observer
     */
    public function execute(EventObserver $observer)
    {
        $orderIds = $observer->getEvent()->getOrderIds();
        if (empty($orderIds) || !is_array($orderIds)) {
            return;
        }

        /** @var \Nwhale\GoogleReviews\Block\Survey|null $block */
        $block = $this->layout->getBlock('nwhale.google_reviews.survey');
        if ($block) {
            $block->setOrderIds($orderIds);
        }
    }
}
