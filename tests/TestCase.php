<?php

namespace Tests;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Tests\utilities\TestHandlerClass;

abstract class TestCase extends DatabaseTestCase
{

    protected function setUp()
    {
        parent::setUp();

        $this->disableExceptionHandling();
    }

    protected function signIn($user = null)
    {
        $user = $user ?: create('App\User');
        $this->actingAs($user);
        return $this;
    }
}