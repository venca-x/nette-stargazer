<?php
declare(strict_types=1);

use Tester\Assert;

// Nacteme knihovny Testeru
require __DIR__ . '/../../vendor/autoload.php';          // pri instalaci Composerem

// Konfigurace prostredi velmi zprehledni vypisy chyb.
// Nemusite pouzit, pokud preferujete vychozi vypis PHP.
Tester\Environment::setup();

$stargazer = new VencaX\Stargazer('1', '0');
$stargazer5 = new VencaX\Stargazer('1', '2', 5);
$stargazer10 = new VencaX\Stargazer('1', '2', 10);

//default count star
Assert::same('11111', $stargazer->makeStargazer(5));
Assert::same('00000', $stargazer->makeStargazer(0));
Assert::same('10000', $stargazer->makeStargazer(1));
Assert::same('11000', $stargazer->makeStargazer(2));
Assert::same('11100', $stargazer->makeStargazer(3));
Assert::same('11110', $stargazer->makeStargazer(4));
Assert::same('11111', $stargazer->makeStargazer(6));
Assert::same('00000', $stargazer->makeStargazer(-1));

//5 star
Assert::same('11111', $stargazer5->makeStargazer(5));
Assert::same('22222', $stargazer5->makeStargazer(0));
Assert::same('12222', $stargazer5->makeStargazer(1));
Assert::same('11222', $stargazer5->makeStargazer(2));
Assert::same('11122', $stargazer5->makeStargazer(3));
Assert::same('11112', $stargazer5->makeStargazer(4));
Assert::same('11111', $stargazer5->makeStargazer(6));
Assert::same('22222', $stargazer5->makeStargazer(-1));

//10 star
Assert::same('2222222222', $stargazer10->makeStargazer(0));
Assert::same('1222222222', $stargazer10->makeStargazer(1));
Assert::same('1122222222', $stargazer10->makeStargazer(2));
Assert::same('1112222222', $stargazer10->makeStargazer(3));
Assert::same('1111222222', $stargazer10->makeStargazer(4));
Assert::same('1111122222', $stargazer10->makeStargazer(5));
Assert::same('1111112222', $stargazer10->makeStargazer(6));
Assert::same('1111111222', $stargazer10->makeStargazer(7));
Assert::same('1111111122', $stargazer10->makeStargazer(8));
Assert::same('1111111112', $stargazer10->makeStargazer(9));
Assert::same('1111111111', $stargazer10->makeStargazer(10));
Assert::same('1111111111', $stargazer10->makeStargazer(11));
Assert::same('2222222222', $stargazer10->makeStargazer(-1));
