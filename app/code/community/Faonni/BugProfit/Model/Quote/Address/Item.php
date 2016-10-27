<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_BugProfit
 * @copyright   Copyright (c) 2015 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Faonni_BugProfit_Model_Quote_Address_Item 
	extends Mage_Sales_Model_Quote_Address_Item
{
    /**
     * Import item to quote
     * 
     * @param Mage_Sales_Model_Quote_Item $quoteItem
     * @return Mage_Sales_Model_Quote_Address_Item
     */
    public function importQuoteItem(Mage_Sales_Model_Quote_Item $quoteItem)
    {
        parent::importQuoteItem($quoteItem);
		
        $this->setBaseCost($quoteItem->getBaseCost());
        return $this;
    }
}
