<?php

namespace Tests\Unit;

use App\School;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SchoolUnitTest extends TestCase
{
    use DatabaseMigrations;

    protected $school;

    public function setUp()
    {
        parent::setUp();
        $this->school = factory('App\School')->create();
    }

    /** @test */
    public function user_can_retrieve_all_schools()
    {
        $response = $this->getJson('schools')->json();
        $this->assertCount(1, $response);
    }
}
