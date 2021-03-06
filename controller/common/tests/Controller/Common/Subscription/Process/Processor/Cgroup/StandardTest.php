<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2018
 */

namespace Aimeos\Controller\Common\Subscription\Process\Processor\Cgroup;


class StandardTest extends \PHPUnit\Framework\TestCase
{
	protected function setUp() : void
	{
		\Aimeos\MShop::cache( true );
	}


	protected function tearDown() : void
	{
		\Aimeos\MShop::cache( false );
	}


	public function testBegin()
	{
		$context = \TestHelperCntl::getContext();

		$context->getConfig()->set( 'controller/common/subscription/process/processor/cgroup/groupids', ['1', '2'] );

		$fcn = function( $subject ) {
			return $subject->getGroups() === ['1', '2'];
		};

		$customerStub = $this->getMockBuilder( '\\Aimeos\\MShop\\Customer\\Manager\\Standard' )
			->setConstructorArgs( [$context] )
			->setMethods( ['getItem', 'saveItem'] )
			->getMock();

		\Aimeos\MShop::inject( 'customer', $customerStub );

		$customerItem = $customerStub->createItem();

		$customerStub->expects( $this->once() )->method( 'getItem' )
			->will( $this->returnValue( $customerItem ) );

		$customerStub->expects( $this->once() )->method( 'saveItem' )
			->with( $this->callback( $fcn ) );

		$object = new \Aimeos\Controller\Common\Subscription\Process\Processor\Cgroup\Standard( $context );
		$object->begin( $this->getSubscription( $context ) );
	}


	public function testEnd()
	{
		$context = \TestHelperCntl::getContext();

		$context->getConfig()->set( 'controller/common/subscription/process/processor/cgroup/groupids', ['1', '2'] );

		$fcn = function( $subject ) {
			return $subject->getGroups() === [];
		};

		$customerStub = $this->getMockBuilder( '\\Aimeos\\MShop\\Customer\\Manager\\Standard' )
			->setConstructorArgs( [$context] )
			->setMethods( ['getItem', 'saveItem'] )
			->getMock();

		\Aimeos\MShop::inject( 'customer', $customerStub );

		$customerItem = $customerStub->createItem()->setGroups( ['1', '2'] );

		$customerStub->expects( $this->once() )->method( 'getItem' )
			->will( $this->returnValue( $customerItem ) );

		$customerStub->expects( $this->once() )->method( 'saveItem' )
			->with( $this->callback( $fcn ) );

		$object = new \Aimeos\Controller\Common\Subscription\Process\Processor\Cgroup\Standard( $context );
		$object->end( $this->getSubscription( $context ) );
	}


	protected function getSubscription( $context )
	{
		$manager = \Aimeos\MShop::create( $context, 'subscription' );

		$search = $manager->createSearch();
		$search->setConditions( $search->compare( '==', 'subscription.dateend', '2010-01-01' ) );

		if( ( $item = $manager->searchItems( $search )->first() ) !== null ) {
			return $item;
		}

		throw new \Exception( 'No subscription item found' );
	}
}
