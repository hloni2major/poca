<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use Illuminate\Foundation\Testing\DatabaseMigrations;

abstract class DatabaseTestCase extends BaseTestCase
{
    use CreatesApplication;

    use DatabaseMigrations;
}