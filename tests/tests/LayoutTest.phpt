<?php
declare(strict_types=1);

namespace VencaX\Components\NettePaginator\Tests\Tests;

use Nette;
use Tester;

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../app/StargazerPresenter.php';
require_once __DIR__ . '/../app/Router.php';

class LayoutTest extends Tester\TestCase
{
	/** @var Nette\Application\IPresenterFactory */
	private $presenterFactory;

	/** @var Nette\DI\Container */
	private $container;

	private $presenter = 'Stargazer';


	/**
	 * @return void
	 */
	public function setUp()
	{
		parent::setUp();
		$this->container = $this->createContainer();
		$this->presenterFactory = $this->container->getByType('Nette\\Application\\IPresenterFactory');
	}


	/**
	 * @return void
	 */
	public function tearDown()
	{
		parent::tearDown();
	}


	/**
	 * @return Nette\DI\Container
	 */
	private function createContainer()
	{
		$configurator = new Nette\Configurator();

		$configurator->setTempDirectory(TEMP_DIR);
		$configurator->addConfig(__DIR__ . '/../app/config/config.neon');

		return $configurator->createContainer();
	}


	/**
	 * @return Nette\Application\IPresenter
	 */
	private function createPresenter()
	{
		$presenter = $this->presenterFactory->createPresenter($this->presenter);
		$presenter->autoCanonicalize = false;
		return $presenter;
	}


	/**
	 * @return void
	 */
	public function testSargazerDefaultContent()
	{
		$presenter = $this->createPresenter();
		$request = new Nette\Application\Request($this->presenter, 'GET');
		$response = $presenter->run($request);

		Tester\Assert::true($response instanceof Nette\Application\Responses\TextResponse);

		$html = (string) $response->getSource();
		Tester\Assert::same('***oo', $html);
	}


	/**
	 * @return void
	 */
	public function testStargazerFADefaultContent()
	{
		$presenter = $this->createPresenter();
		$request = new Nette\Application\Request($this->presenter, 'GET', ['action' => 'stargazerFA']);
		$response = $presenter->run($request);

		Tester\Assert::true($response instanceof Nette\Application\Responses\TextResponse);

		$html = (string) $response->getSource();
		Tester\Assert::same('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>', $html);
	}


	/**
	 * @return void
	 */
	public function testStargazerBINARYDefaultContent()
	{
		$presenter = $this->createPresenter();
		$request = new Nette\Application\Request($this->presenter, 'GET', ['action' => 'stargazerBINARY']);
		$response = $presenter->run($request);

		Tester\Assert::true($response instanceof Nette\Application\Responses\TextResponse);

		$html = (string) $response->getSource();
		Tester\Assert::same('1110000000', $html);
	}
}

$testCase = new LayoutTest;
$testCase->run();
