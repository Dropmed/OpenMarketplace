<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusMultiVendorMarketplacePlugin\Cloner;

use Sylius\Component\Core\Model\PaymentInterface;

final class PaymentCloner implements PaymentClonerInterface
{
    public function clone(PaymentInterface $originalPayment, PaymentInterface $newPayment): void
    {
        $newPayment->setCreatedAt($originalPayment->getCreatedAt());
        $newPayment->setCurrencyCode($originalPayment->getCurrencyCode());
        $newPayment->setMethod($originalPayment->getMethod());
        $newPayment->setDetails($originalPayment->getDetails());
        $newPayment->setState($originalPayment->getState());
        $newPayment->setUpdatedAt($originalPayment->getUpdatedAt());
    }
}
