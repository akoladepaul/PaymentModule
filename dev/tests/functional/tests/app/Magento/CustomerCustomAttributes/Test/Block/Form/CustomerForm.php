<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CustomerCustomAttributes\Test\Block\Form;

use Magento\Mtf\Client\Element\SimpleElement;
use Magento\Mtf\Fixture\FixtureInterface;
use Magento\CustomerCustomAttributes\Test\Fixture\CustomerCustomAttribute;

/**
 * Customer account edit form.
 */
class CustomerForm extends \Magento\Customer\Test\Block\Form\CustomerForm
{
    /**
     * Check if Customer custom Attribute visible.
     *
     * @param CustomerCustomAttribute $customerAttribute
     * @return bool
     */
    public function isCustomerAttributeVisible(CustomerCustomAttribute $customerAttribute)
    {
        return $this->_rootElement->find(
            sprintf($this->customerAttribute, $customerAttribute->getAttributeCode())
        )->isVisible();
    }

    /**
     * Fill customer form.
     *
     * @param FixtureInterface $fixture
     * @param SimpleElement|null $element
     * @return $this
     */
    public function fill(FixtureInterface $fixture, SimpleElement $element = null)
    {
        if ($fixture->hasData()) {
            parent::fill($fixture, $element);
        }
    }
}
