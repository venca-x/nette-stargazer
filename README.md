Installation
------------

 1. Add the bundle to your dependencies:

        // composer.json

        {
           // ...
           "require": {
               // ...
               "venca-x/nette-stargazer": "@dev"
           }
        }

 2. Use Composer to download and install the bundle:

        composer update
        


Usage Sample
-------------

BasePresenter.php

```php

protected function beforeRender()
{
    parent::beforeRender();

    $this->template->addFilter('stargazer', function ($text) {
        $stargazer = new \Stargazer('<i class="fa fa-star"></i>', '<i class="fa fa-star-o"></i>');
        //$stargazer = new \Stargazer();
        //$stargazer = new \Stargazer($star = "1", $starEmpty = "0", $starCount = 10);
        return $stargazer->makeStargazer($text);
    });
}

```

Usage
-------------

```php
{$o->score|stargazer|noescape}
{$o->score|stargazer}

```