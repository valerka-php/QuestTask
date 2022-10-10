<?php

use App\models\Conference;
use PHPUnit\Framework\TestCase;


class ConferenceModelTest extends TestCase
{
    private $model ;

    protected function setUp(): void
    {
        $this->model = new Conference();
    }

    public function addDataProvider()
    {
        return [
            'title' => 'test',
            'date' => '2022-10-11',
            'lat' => '55',
            'lng' => '55',
            'country' => 'TestCountry'
        ];
    }

    /**
     * @covers
     */
    public function testSaveConference()
    {
        $this->assertEquals(true,$this->model->insertIntoTable($this->addDataProvider(),'conferences'));
    }


}