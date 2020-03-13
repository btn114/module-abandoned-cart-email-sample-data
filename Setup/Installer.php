<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_AbandonedCartSampleData
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\AbandonedCartSampleData\Setup;

use Exception;
use Magento\Framework\Setup;
use Mageplaza\AbandonedCartSampleData\Model\AbandonedCart;

/**
 * Class Installer
 * @package Mageplaza\AbandonedCartSampleData\Setup
 */
class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var AbandonedCart
     */
    private $abandonedCart;

    /**
     * Installer constructor.
     *
     * @param AbandonedCart $abandonedCart
     */
    public function __construct(
        AbandonedCart $abandonedCart
    ) {
        $this->abandonedCart = $abandonedCart;
    }

    /**
     * {@inheritdoc}
     * @throws Exception
     */
    public function install()
    {
        $this->abandonedCart->install(['Mageplaza_AbandonedCartSampleData::fixtures/abandoned_cart.csv']);
    }
}
