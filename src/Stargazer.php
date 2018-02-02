<?php
declare(strict_types=1);

namespace VencaX;

/**
 * Transfer numbers month to month name
 * @author vEnCa-X <venca-x@seznam.cz>
 */
class Stargazer
{
	/** @var string Star symbol */
	protected $star;

	/** @var string Star empty symbol */
	protected $starEmpty;

	/** @var string Star count */
	protected $starCount;


	public function __construct($star = '*', $starEmpty = 'o', $starCount = 5)
	{
		$this->star = $star;
		$this->starEmpty = $starEmpty;
		$this->starCount = $starCount;
	}


	/**
	 * Make stars
	 * @param int $valueStars Count of stars
	 */
	public function makeStargazer($valueStars)
	{
		$return = '';
		for ($i = 0; $i < $this->starCount; $i++) {
			if ($i < $valueStars) {
				$return .= '' . $this->star;
			} else {
				$return .= '' . $this->starEmpty;
			}
		}

		return $return;
	}
}
