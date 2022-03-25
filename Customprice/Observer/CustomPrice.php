<?php
namespace Thecoachsmb\Customprice\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;

class CustomPrice implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //get the item just added to cart
        $item = $observer->getEvent()->getData('quote_item');
        $product = $observer->getEvent()->getData('product');
        //(optional) get the parent item, if exists
        $item = ($item->getParentItem() ? $item->getParentItem() : $item);
        // set your custom price
        $price = 100;
        $item->setCustomPrice($price);
        $item->setOriginalCustomPrice($price);
        $item->getProduct()->setIsSuperMode(true);
    }
}
