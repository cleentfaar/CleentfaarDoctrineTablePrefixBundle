<?php

/*
 * This file is part of the CleentfaarDoctrineTablePrefix bundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cleentfaar\Bundle\DoctrineTablePrefixBundle\Test\DependencyInjection;

use Cleentfaar\Bundle\DoctrineTablePrefixBundle\DependencyInjection\CleentfaarDoctrineTablePrefixExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class CleentfaarDoctrineTablePrefixExtensionTest extends \PHPUnit_Framework_TestCase
{

    public function testDefault()
    {
        $container = new ContainerBuilder();
        $loader = new CleentfaarDoctrineTablePrefixExtension();
        $loader->load(array(array()), $container);
        $this->assertEquals('sf_', $container->getParameter('cleentfaar_doctrine_table_prefix.prefix'));
        $this->assertTrue($container->hasDefinition('cleentfaar_doctrine_table_prefix.subscriber'));
        $this->assertTrue($container->getDefinition('cleentfaar_doctrine_table_prefix.subscriber')->hasTag('doctrine.event_subscriber'));
    }

}
