Nette-stargazer
===============
[![Build Status](https://travis-ci.org/venca-x/nette-stargazer.svg)](https://travis-ci.org/venca-x/nette-stargazer)
[![Coverage Status](https://coveralls.io/repos/github/venca-x/nette-stargazer/badge.svg?branch=master)](https://coveralls.io/github/venca-x/nette-stargazer?branch=master) 
[![Latest Stable Version](https://poser.pugx.org/venca-x/nette-stargazer/v/stable.svg)](https://packagist.org/packages/venca-x/nette-stargazer) 
[![Latest Unstable Version](https://poser.pugx.org/venca-x/nette-stargazer/v/unstable.svg)](https://packagist.org/packages/venca-x/nette-stargazer) 
[![Total Downloads](https://poser.pugx.org/venca-x/nette-stargazer/downloads.svg)](https://packagist.org/packages/venca-x/nette-stargazer) 
[![License](https://poser.pugx.org/venca-x/nette-stargazer/license.svg)](https://packagist.org/packages/venca-x/nette-stargazer)

Nette plugin for showing score as stars. You define positive and negavide symbols for ratio visualisation.

| Version     | PHP&nbsp;&nbsp;&nbsp;     | Recommended&nbsp;Nette |
| ---         | ---                       | ---               |
| dev-master  | \>= 7.1                   | Nette 3.0         |
| 1.0.x       | \>= 5.5                   | Nette 2.4, 2.3    |

Installation
------------
Install plugin to your dependencies with composer:

```
composer require venca-x/nette-stargazer:^1.0
```

**For dev version install**:
```
composer require venca-x/nette-stargazer:dev-master
```


Usage Sample
-------------

BasePresenter.php

```php
protected function beforeRender()
{
    parent::beforeRender();

    $this->template->addFilter('stargazer', function ($text) {
        //$stargazer = new VencaX\Stargazer('<i class="fa fa-star"></i>', '<i class="fa fa-star-o"></i>');
        //$stargazer = new VencaX\Stargazer();
        $stargazer = new VencaX\Stargazer($star = "1", $starEmpty = "0", $starCount = 10);
        return $stargazer->makeStargazer($text);
    });
}
```

MyPresenter.php
```php
protected function renderDefault()
{
    $this->template->score = 5;
}
```

Usage
-------------
```php
{$o->score|stargazer|noescape}
{$o->score|stargazer}
```

Output
-------------
```html
*****00000
```