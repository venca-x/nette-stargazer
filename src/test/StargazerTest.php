<?php

require_once './src/test/bootstrap.php';

class StargazerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var object Stargazer
     */
    protected $stargazer;
    protected $stargazer5;
    protected $stargazer10;

    /**
     * Sets up the fixture
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->stargazer = new Stargazer( "1", "0" );
        $this->stargazer5 = new Stargazer( "1", "2", 5 );
        $this->stargazer10 = new Stargazer( "1", "2", 10 );
    }

    /**
     * Tears down the fixture
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers MonthNameCZ::getMonthNameCZ
     * @todo   Implement testGetMonthNameCZ().
     */
    public function testStargazer()
    {
        //default count star
        $this->assertEquals( '11111', $this->stargazer->makeStargazer( 5 ) );
        $this->assertEquals( '00000', $this->stargazer->makeStargazer( 0 ) );
        $this->assertEquals( '10000', $this->stargazer->makeStargazer( 1 ) );
        $this->assertEquals( '11000', $this->stargazer->makeStargazer( 2 ) );
        $this->assertEquals( '11100', $this->stargazer->makeStargazer( 3 ) );
        $this->assertEquals( '11110', $this->stargazer->makeStargazer( 4 ) );        
        $this->assertEquals( '11111', $this->stargazer->makeStargazer( 6 ) );
        $this->assertEquals( '00000', $this->stargazer->makeStargazer( -1 ) );
        
        //5 star
        $this->assertEquals( '11111', $this->stargazer5->makeStargazer( 5 ) );
        $this->assertEquals( '22222', $this->stargazer5->makeStargazer( 0 ) );
        $this->assertEquals( '12222', $this->stargazer5->makeStargazer( 1 ) );
        $this->assertEquals( '11222', $this->stargazer5->makeStargazer( 2 ) );
        $this->assertEquals( '11122', $this->stargazer5->makeStargazer( 3 ) );
        $this->assertEquals( '11112', $this->stargazer5->makeStargazer( 4 ) );        
        $this->assertEquals( '11111', $this->stargazer5->makeStargazer( 6 ) );
        $this->assertEquals( '22222', $this->stargazer5->makeStargazer( -1 ) );
        
        //10 star
        $this->assertEquals( '2222222222', $this->stargazer10->makeStargazer( 0 ) );
        $this->assertEquals( '1222222222', $this->stargazer10->makeStargazer( 1 ) );
        $this->assertEquals( '1122222222', $this->stargazer10->makeStargazer( 2 ) );
        $this->assertEquals( '1112222222', $this->stargazer10->makeStargazer( 3 ) );
        $this->assertEquals( '1111222222', $this->stargazer10->makeStargazer( 4 ) );
        $this->assertEquals( '1111122222', $this->stargazer10->makeStargazer( 5 ) );
        $this->assertEquals( '1111112222', $this->stargazer10->makeStargazer( 6 ) );
        $this->assertEquals( '1111111222', $this->stargazer10->makeStargazer( 7 ) );
        $this->assertEquals( '1111111122', $this->stargazer10->makeStargazer( 8 ) );
        $this->assertEquals( '1111111112', $this->stargazer10->makeStargazer( 9 ) );
        $this->assertEquals( '1111111111', $this->stargazer10->makeStargazer( 10 ) );
        $this->assertEquals( '1111111111', $this->stargazer10->makeStargazer( 11 ) );
        $this->assertEquals( '2222222222', $this->stargazer10->makeStargazer( -1 ) );
    }

}
