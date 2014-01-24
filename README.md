Configuration
-------------

BasePresenter.php

```php

protected function createTemplate( $class = NULL )
{
    $template = parent::createTemplate( $class );
	$template->registerHelper( 'stargazer', callback( new \Stargazer( '<i class="fa fa-star"></i>', '<i class="fa fa-star-o"></i>' ), 'makeStargazer' ) );
	//$template->registerHelper( 'stargazer', callback( new \Stargazer(), 'makeStargazer' ) );
	//$template->registerHelper( 'stargazer', callback( new \Stargazer( $star = "1", $starEmpty = "0", $starCount = 10 ), 'makeStargazer' ) );
    return $template;
}

```

Usage
-------------

```php
{$o->score|stargazer|noescape}
{*{$o->score|stargazer}*}

```