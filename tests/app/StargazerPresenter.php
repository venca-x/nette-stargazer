<?php
declare(strict_types=1);

namespace VencaX\Components\NettePaginator\Tests\App;

use Nette;
use VencaX;

final class StargazerPresenter extends Nette\Application\UI\Presenter
{
	protected function beforeRender()
	{
		parent::beforeRender();

		$this->template->addFilter('stargazer', function ($text) {
			$stargazer = new VencaX\Stargazer();
			//$stargazer = new VencaX\Stargazer('<i class="fa fa-star"></i>', '<i class="fa fa-star-o"></i>');
			//$stargazer = new VencaX\Stargazer($star = "1", $starEmpty = "0", $starCount = 10);
			return $stargazer->makeStargazer($text);
		});

		$this->template->addFilter('stargazerFA', function ($text) {
			//$stargazer = new VencaX\Stargazer();
			$stargazer = new VencaX\Stargazer('<i class="fa fa-star"></i>', '<i class="fa fa-star-o"></i>');
			//$stargazer = new VencaX\Stargazer($star = "1", $starEmpty = "0", $starCount = 10);
			return $stargazer->makeStargazer($text);
		});

		$this->template->addFilter('stargazerBINARY', function ($text) {
			//$stargazer = new VencaX\Stargazer();
			//$stargazer = new VencaX\Stargazer('<i class="fa fa-star"></i>', '<i class="fa fa-star-o"></i>');
			$stargazer = new VencaX\Stargazer($star = '1', $starEmpty = '0', $starCount = 10);
			return $stargazer->makeStargazer($text);
		});
	}


	public function renderDefault()
	{
		$this->template->score = 3;
	}


	public function renderStargazerFA()
	{
		$this->template->score = 3;
	}


	public function renderStargazerBINARY()
	{
		$this->template->score = 3;
	}
}
