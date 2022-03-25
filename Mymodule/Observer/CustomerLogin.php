<?php

namespace Thecoachsmb\Mymodule\Observer;
class CustomerLogin implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(Magento\Framework\Event\Observer $observer)
    {

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/customerdata.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);

        $customer = $observer->getEvent()->getCustomer();
        $logger->info('Customer Name:- '.print_r($customer->getName(),true));
        $logger->info('Customer Id:- '.print_r($customer->getId(),true));
        $logger->info('Customer Email:- '.print_r($customer->getEmail(),true));
        $logger->info('Customer Data:- '.print_r($customer->getData(),true));

        return $this;     }
}
