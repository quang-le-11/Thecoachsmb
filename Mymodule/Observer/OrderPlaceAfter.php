<?php

namespace Thecoachsmb\Mymodule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use \Psr\Log\LoggerInterface;

class OrderPlaceAfter implements ObserverInterface
{
    protected $logger = null;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();


        $this->logger->debug('Thecoachsmb_Mymodule, ORDER ID: ',$order->getID());

    }
}
