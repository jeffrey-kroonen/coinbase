<?php

use PHPUnit\Framework\TestCase;

/**
 * Class EntityTest.
 * 
 * Tests all entities to make sure there are no PHP parse errors
 * and tests the properties the entity uses.
 */
final class EntityTest extends TestCase
{
    public function testPaymentMethodEntity()
    {
        $this->performEntityTest(\Crownsdevelopment\Coinbase\Model\PaymentMethod::class);
    }

    final protected function performEntityTest($entityName)
    {
        $targetClass = new \ReflectionClass($entityName);

        $this->assertTrue($targetClass->isInstantiable());
        $this->assertEquals('Crownsdevelopment\Coinbase\Model', $targetClass->getNamespaceName());
        $this->assertTrue($targetClass->isSubclassOf('Crownsdevelopment\Coinbase\Model\Base'));
    }
}